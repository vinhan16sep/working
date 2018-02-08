<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Member_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index(){

        $this->render('member/dashboard_view');
    }
}