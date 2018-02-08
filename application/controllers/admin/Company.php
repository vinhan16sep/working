<?php
/**
* 
*/
class Company extends Admin_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('information_model');
	}

	public function index(){
		$this->output->enable_profiler(TRUE);
		$this->load->library('pagination');
		$config = array();
		$base_url = base_url('admin/company/index');
		$per_page = 10;
		$uri_segment = 4;
		$total_rows  = $this->information_model->count_companys();
		foreach ($this->pagination_con($base_url, $total_rows, $per_page, $uri_segment) as $key => $value) {
            $config[$key] = $value;
        }
        $this->pagination->initialize($config);

        $this->data['page_links'] = $this->pagination->create_links();
        $this->data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $result = $this->information_model->fetch_all_company_pagination($per_page, $this->data['page']);
        $this->data['companies'] = $result;

		$this->render('admin/company/list_company_view');
	}

	public function detail($id){
		$company = $this->information_model->fetch_company_by_id($id);
		$this->data['company'] = $company;
		$this->render('admin/company/detail_company_view');
	}

    public function detail_by_client($client_id){
        $company = $this->information_model->fetch_company_by_client_id($client_id);
        $this->data['company'] = $company;
        $this->render('admin/company/detail_company_view');
    }
}