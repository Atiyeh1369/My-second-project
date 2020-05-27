<?php
class Crud extends CI_controller{
    public function index(){
        $this->load->model('crud_model');
        $users = $this->crud_model->all();
        $data = array();
        $data['users'] = $users;
        $this->load->view('crud/list',$data);

    }
    public function create(){
        $this->load->model('crud_model');
        $this->form_validation->set_rules('firstname','Firstname','required');
        $this->form_validation->set_rules('lastname','Lastname','required');
        $this->form_validation->set_rules('age','Age','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        if($this->form_validation->run() == false){
          $this->load->view('crud/create');
        }else{
            $sql = array();
            $sql['firstname'] = $this->input->post('firstname');
            $sql['lastname'] = $this->input->post('lastname');
            $sql['age'] = $this->input->post('age');
            $sql['email'] = $this->input->post('email');
            $sql['created_at'] = date("Y-m-d");
            $this->crud_model->create($sql);
            $this->session->set_flashdata("success", "Record added successfully");
            redirect(base_url().'crud/index');
        }

    }
    function edit($userId){
        $this->load->model('Crud_model');
        $user = $this->crud_model->getUser($userId);
        $data = array();
        $data['user'] = $user;
        $this->form_validation->set_rules('firstname','Firstname','required');
        $this->form_validation->set_rules('lastname','Lastname','required');
        $this->form_validation->set_rules('age','Age','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        if($this->form_validation->run() == false){
            $this->load->view('crud/edit',$data);  
        }else{
            //update user record
            $sql['firstname']=$this->input->post('firstname');
            $sql['lastname']=$this->input->post('lastname');
            $sql['age']=$this->input->post('age');
            $sql['email']=$this->input->post('email');
            $this->crud_model->updateUser($userId,$sql);
            $this->session->set_flashdata("success","Record updated successfully!");
            redirect(base_url().'crud/index');
        } 
    }
    public function delete($userId){
        $this->load->model('crud_model');
        $user = $this->crud_model->getUser($userId);
        if(empty($user)){
           $this->session->set_flashdata('failur','Record not found in database!');
        }else{
            $this->crud_model->deleteUser($userId);
            $this->session->set_flashdata('success','Record deleted successfully!');
            redirect(base_url().'crud/index');
        }
    }
}