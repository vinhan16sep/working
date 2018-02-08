<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->model('ion_auth_model');
    }

    public function index() {
        
    }

    public function login() {
        $this->data['page_title'] = 'Login';
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('identity', 'Identity', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('remember', 'Remember me', 'integer');
            if ($this->form_validation->run() === TRUE) {
                $remember = (bool) $this->input->post('remember');
                if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember)) {
                    redirect('client', 'refresh');
                } else {
                    $this->session->set_flashdata('login_message', $this->ion_auth->errors());
                    redirect('client/user/login', 'refresh');
                }
            }
        }
        $this->load->helper('form');

        $this->render('client/login_view', 'client_master');
    }

    public function logout() {
        $this->ion_auth->logout();
        redirect('client/user/login', 'refresh');
    }

    public function register(){
        $this->data['page_title'] = 'Tạo mới user';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name','First name','trim');
        $this->form_validation->set_rules('last_name','Last name','trim');
        $this->form_validation->set_rules('position','Position','trim');
        $this->form_validation->set_rules('companyname','Company','trim');
        $this->form_validation->set_rules('phone','Phone','trim');
        $this->form_validation->set_rules('username','Username','trim|required|is_unique[users.username]');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('register_password','Password','required');
        $this->form_validation->set_rules('password_confirm','Password confirmation','required|matches[register_password]');

        if($this->form_validation->run()===FALSE) {
            $this->load->helper('form');
            $this->render('client/login_view', 'client_master');
        } else {
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $password = $this->input->post('register_password');
            $group_ids = array(3);

            $additional_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'position' => $this->input->post('position'),
                'company' => $this->input->post('companyname'),
                'phone' => $this->input->post('phone')
            );
            $result = $this->ion_auth->register($username, $password, $email, $additional_data, $group_ids);

            if($result){
                $this->session->set_flashdata('register_success', 'Tài khoản đã được tạo thành công, chúng tôi sẽ gửi mail thông báo khi kích hoạt hoàn thành.');
                redirect('client/user/login', 'refresh');
                $this->ion_auth->login($username, $password, false);
                redirect('client', 'refresh');
            }
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect('client/dashboard', 'refresh');
        }
    }

    public function check_email(){
        $email = $this->input->post('email');
        $where = array('email' => $email);
        $result = $this->ion_auth_model->check_where($where);
        if($result >=1){
            $this->form_validation->set_message(__FUNCTION__, 'Email đã tồn tại');
            return FALSE;
        }
        return true;
    }

    public function check_user(){
        $username = $this->input->post('username');
        $where = array('username' => $username);
        $result = $this->ion_auth_model->check_where($where);
        if($result >=1 ){
            $this->form_validation->set_message(__FUNCTION__, 'Username đã tồn tại');
            return FALSE;
        }
        return true;
    }
}
