<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Client_Controller {

    function __construct(){
        parent::__construct();

        if (!$this->ion_auth->logged_in() || !$this->ion_auth->in_group('clients')) {
            //redirect them to the login page
            redirect('client/user/login', 'refresh');
        }
    }

    public function index(){
        $this->data['user'] = $this->ion_auth->user()->row();

        $this->load->model('information_model');
        $this->data['submitted'] = $this->information_model->fetch_by_user_id('information', $this->data['user']->id);
        $this->data['company_submitted'] = $this->information_model->fetch_by_user_id('company', $this->data['user']->id);
        $this->data['count_product'] = $this->information_model->count_product($this->data['user']->id);

        $this->render('client/dashboard_view');
    }
}