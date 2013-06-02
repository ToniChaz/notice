<?php
class Login extends CI_Controller{  
    public function index(){
        $this->load->view('templates/menu');
    }
    public function checkLogin(){   
               
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|callback_verifyUser');

        if($this->form_validation->run() == false){
            if($this->input->post('formLogin')){              
                $data['formLoginError'] = validation_errors();
            }
            $data['title'] = 'Error';             
            $this->load->view('templates/header', $data);	
            $this->load->view('templates/menu');	
            $this->load->view('pages/error');
            $this->load->view('templates/footer'); 
        }else{
            echo 'Correcto';
        }
    }
    public function verifyUser() {
        $name = $this->input->post('username');
        $pass = $this->input->post('password');
        
        $this->load->model('login_model');
        
        if($this->login_model->login($name, $pass)){
            return true;
        }else{
            $this->form_validation->set_message('verifyUser', 'Incorrect Username or Password! Please try again.');
            return false;
        }
    }
}
?>
