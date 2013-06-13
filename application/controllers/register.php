<?php
class Register extends CI_Controller{ 
    public function __construct(){
            parent::__construct();
            $this->load->model('register_model');
    }
    
    public function index(){
        $this->load->view('pages/register');
    }
    
    public function checkRegister(){   
               
        $this->form_validation->set_rules('username', 'Username', 'required|callback_verifyUnicUser');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('name', 'Name');
        $this->form_validation->set_rules('surname', 'Surname');
        

        if($this->form_validation->run() == false){
            if($this->input->post('formRegister')){              
                $data['formRegisterError'] = validation_errors();
            }          
            $this->load->view('templates/header', $data);	
            $this->load->view('templates/menu');	
            $this->load->view('pages/register');
            $this->load->view('templates/footer'); 
        }else{
            $this->load->view('templates/header', $data);	
            $this->load->view('templates/menu', $data);	
            $this->load->view('news/success');
            $this->load->view('templates/footer');
        }
    }
    
    public function verifyUnicUser() {
        $user = $this->input->post('username');
        
        $this->register_model->verifyUnicUser($user);
        
        if($this->register_model->verifyUnicUser($user)){
            $this->register_model->registerUser();            
            return true;
        }else{
            $this->form_validation->set_message('verifyUnicUser', 'This user is not available! Please try again..');
            return false;
        }
    }
}
?>
