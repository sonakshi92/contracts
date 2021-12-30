<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contract_model extends CI_Model {
    public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }

    public function login($user){
      $this->db->insert('users', $user);
    }

    public function autLogin($email, $password){
    $this->db->where('email', $email);
    $this->db->where('password', $password);
    $query = $this->db->get('users');
    if($query->num_rows() == 1){
        return $query->row();
    }
    return false;
    }

    public function insertContracts($data, $upload_file){
    $res = $this->db->insert('contracts', $data);
    if($res){
        $lastid = $this->db->insert_id();
        $mediafile=array(
            'contractor_id'=>$lastid,
            'media_files'=>$upload_file
        );
        return $this->db->insert('contract_media',$mediafile);
    }
    }

    public function listcontracts()
    {
        $this->db->select('contracts.*,cm.media_files as media_files');
        $this->db->from('contracts');
        $this->db->join('contract_media as cm', 'contracts.id = cm.contractor_id');
        $this->db->order_by('contracts.id', 'DESC');
        $data = $this->db->get()->result_array();
        return $data;
    }

    function editContract($userId)
    {
        $this->db->select('contracts.*,cm.media_files as media_files');
        $this->db->from('contracts');
        $this->db->join('contract_media as cm', 'contracts.id = cm.contractor_id');
        $this->db->where('id',$userId);
        $data = $this->db->get()->row_array();
        return $data;
    }
    
    function getContracts($userId)
    {
        $this->db->where('id', $userId);
        return $user = $this->db->get('contracts');
    }
    
    function get_media($id){
        $this->db->where('contractor_id',$id);              
       $result =  $this->db->get('contract_media');
        return $result->row_array();
    }

    public function mediaupdate($id, $mediafile)
    {
        $this->db->where('contractor_id', $id);
        $this->db->update('contract_media', $mediafile);
    }

    public function updateContract($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('contracts', $data);
    }
   
    function delete($colName, $tabName, $id){
        $this->db->where($colName, $id);              
        $this->db->delete($tabName);
    }

    public function documentation()
    {
        $this->db->order_by('paper_work.id', 'DESC');
        $data = $this->db->get('paper_work')->result_array();
        return $data;
    }

    public function paper_work($colName, $tabName, $id)
    {
         $this->db->where($colName, $id);
         $data = $this->db->get($tabName)->result_array();
         return $data;
    }
   
    public function fileData($id){
        $this->db->select('user_paperwork_document');
        $this->db->where('paper_work_id', $id);
        $data = $this->db->get('paperworks_documents');
        return $data->result_array();
    }

    function getDocsFiles($id)
    {
        $this->db->where('id', $id);
        return $data = $this->db->get('paperworks_documents')->result_array();
    }

    public function get_old_file($id)
    {
        $this->db->select('user_paperwork_document');
        $this->db->where('paper_work_id', $id);
        return $data = $this->db->get('paperworks_documents')->result_array();
    }

    public function update_Doc($id, $data, $upload_files)
    {
        $this->db->where('id', $id);
        $res = $this->db->update('paper_work', $data);
        if ($res) {
            if(count($upload_files)>0){
               for ($i=0; $i < count($upload_files); $i++) { 
                  $upload_files[$i]['paper_work_id'] = $id;
               }
               $this->db->insert_batch('paperworks_documents',$upload_files);
            }
        }
    }

    public function paperwrkdoc()
    {
        $this->db->select('pd.id,pd.paper_work_id,pd.user_paperwork_document as media_files');
        $this->db->from('paperworks_documents as pd');
        $this->db->join('paper_work pw', 'pw.id = pd.paper_work_id');
        $this->db->where('pd.status',1);
        $data = $this->db->get()->result_array();
        // echo '<pre>';
        // print_r($data);die;
        return $data;
    }

    public function deletePaper($id)
    {
        $doc = $this->db->get_where('paperworks_documents',$id);
        // print_r($doc);die;
        foreach ($doc as $key => $value) {
            $file = $value['user_paperwork_document'];
            if(file_exists($file)){
                unlink($file);
            }
        }
        $res = $this->db->delete('paperworks_documents',array('paper_work_id'=>$id,'status'=>1));
        if($res){
            $res2 = $this->db->delete('paper_work',array('id'=>$id));
        }
        if($res && $res2){
            echo 'Paper Work Record Deleted Successfully';
        }else{
            echo 'Paper Work Can\'t be delete';
        }
    }

    public function dashboard()
    {
        $this->db->limit(100);
        $email = $this->session->userdata('username');
        $data = $this->db->get_where('contracts', array('user_email_id'=>$email))->result_array();
        return $data;
    }
  
    
    public function addPaperwork($formarray)
    {
        $this->db->insert("paper_work",$formArray);
    }


    function getPaperwork($userId)
    {
        $this->db->where('id', $userId);
        return $data = $this->db->get('paper_work');
    }
    function edit($userId)
    {
    $query = $this->db->get_where('paper_work',['id'=> $userId]);
    return $query->row_array();
    }
   
    function uploadDocs($data, $upload_files){
        // echo "<pre>"; print_r($_POST);exit;
        // echo "<pre>"; print_r($upload_files);exit;
        $res = $this->db->insert('paper_work', $data);
        if ($res) {
            $lastid = $this->db->insert_id();
            for ($i=0; $i < count($upload_files); $i++) { 
            $upload_files[$i]['paper_work_id'] = $lastid;
            }
            // echo '<pre>';
            // print_r($upload_files);die;
            $this->db->insert_batch('paperworks_documents',$upload_files);
        }
    }
} 
?>