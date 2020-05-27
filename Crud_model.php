<?php 
class Crud_Model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function create($sql){
        $this->db->insert('users',$sql);
    }
    public function all(){
       return $rusers =  $this->db->get('users')->result_array();
    }
    public function getUser($userId){
        $this->db->where('id',$userId);
        return $user = $this->db->get('users')->row_array();
    }
    public function updateUser($userId,$sql){
        $this->db->where('id',$userId);
        $this->db->update('users',$sql);
    }
    function deleteUser($userId){
        $this->db->where('id',$userId);
        $this->db->delete('users');    

   }

}