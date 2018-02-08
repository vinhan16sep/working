<?php
/**
* 
*/
class Product extends Admin_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('information_model');
	}

	public function index($client_id){
		$this->load->library('pagination');
		$config = array();
		$base_url = base_url('admin/product/index');
		$per_page = 10;
		$uri_segment = 4;
		$total_rows  = $this->information_model->count_product($client_id);
		foreach ($this->pagination_con($base_url, $total_rows, $per_page, $uri_segment) as $key => $value) {
            $config[$key] = $value;
        }
        $this->pagination->initialize($config);

		$this->data['client'] = $this->ion_auth->user((int) $client_id)->row();
        $this->data['page_links'] = $this->pagination->create_links();
        $this->data['page'] = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
        $result = $this->information_model->get_all_product($client_id, $per_page, $this->data['page']);
        $this->data['products'] = $result;

		$this->render('admin/product/list_product_view');
	}

	public function detail($id = null){
	    if(!$id){
	        redirect('admin/dashboard', 'refresh');
        }

		$product = $this->information_model->fetch_product_by_id('product', $id);

        if(!$product){
            redirect('admin/dashboard', 'refresh');
        }
		$this->data['product'] = $product;
		$this->render('admin/product/detail_product_view');
	}
}