<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH."/third_party/PHPExcel.php";

class Company extends Member_Controller{

    private $excel = null;
	
	function __construct(){
		parent::__construct();
		$this->load->model('information_model');

        $this->excel = new PHPExcel();
	}

	public function index($id){
		$this->output->enable_profiler(TRUE);
		$this->load->model('users_model');
		$members = $this->users_model->fetch_all_member();
		// print_r($members);die;
		$this->data['members'] = $members;
		$keywords = '';
        if($this->input->get('search')){
            $keywords = $this->input->get('search');
        }
        $this->data['keywords'] = $keywords;
        $total_rows  = $this->information_model->count_company_search_by_member_id($id);
        if($keywords != ''){
            $total_rows  = $this->information_model->count_company_search_by_member_id($id, $keywords);
        }
		$this->load->library('pagination');
		$config = array();
		$base_url = base_url('member/company/index/'.$id);
		$per_page = 10;
		$uri_segment = 5;
		
		foreach ($this->pagination_con($base_url, $total_rows, $per_page, $uri_segment) as $key => $value) {
            $config[$key] = $value;
        }
        $this->pagination->initialize($config);

        $this->data['page_links'] = $this->pagination->create_links();
        $this->data['page'] = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
        $result = $this->information_model->fetch_company_by_member_id_pagination_search($id, $per_page, $this->data['page']);
        if($keywords != ''){
            $result = $this->information_model->fetch_company_by_member_id_pagination_search($id, $per_page, $this->data['page'], $keywords);
        }
        $this->data['companies'] = $result;
        $this->data['user_id'] = $id;
        // print_r($result);die;

		$this->render('member/company/list_company_view');
	}

	public function detail($id){
		$company = $this->information_model->fetch_company_by_id($id);
		$this->data['company'] = $company;
		$this->render('admin/company/detail_company_view');
	}

    public function detail_by_client($client_id){
        $company = $this->information_model->fetch_company_by_client_id($client_id);
        $this->data['company'] = $company;
        $this->render('member/company/detail_company_view');
    }

    public function change_member(){
    	$member_id = $this->input->get('member_id');
    	$company_id = $this->input->get('company_id');

    	$where = array('member_id' => $member_id);
    	$this->information_model->update('company', $company_id, $where);
    }
  
    public function export(){
        //activate worksheet number 1
        $this->excel->setActiveSheetIndex(0);
        //name the worksheet
        $this->excel->getActiveSheet()->setTitle('Danh sach doanh nghiep');

        // load database
        $this->load->database();

        // get all users in array formate
        $data = $this->information_model->get_all_for_export('company');
        $data_export = array(
            '0' => array(
                'company' => 'Doanh nghiệp',
                'phone' => 'Điện thoại',
                'address' => 'Địa chỉ',
                'website' => 'Website',
                'legal_representative' => 'Tên người đại diện pháp luật',
                'lp_position' => 'Chức danh',
                'lp_email' => 'Email',
                'lp_phone' => 'Di động',
                'connector' => 'Tên người liên hệ với BTC',
                'c_position' => 'Chức danh',
                'c_email' => 'Email',
                'c_phone' => 'Di động',
                'link' => 'Link download PĐK của DN',
                'equity_2015' => 'Vốn điều lệ năm 2015 (triệu VND)',
                'equity_2016' => 'Vốn điều lệ năm 2016 (triệu VND)',
                'equity_2017' => 'Vốn điều lệ năm 2017 (triệu VND)',
                'owner_equity' => 'Vốn chủ sở hữu (triệu VND)',
                'total_income' => 'Tổng doanh thu DN',
                'software_income' => 'Tổng DT lĩnh vực sx phần mềm (Triệu VND)',
                'it_income' => 'Tổng doanh thu dịch vụ CNTT (triệu VND)',
                'export_income' => 'Tổng DT xuất khẩu (USD)',
                'total_labor' => 'Tổng số lao động của DN',
                'total_ltv' => 'Tổng số LTV',
                'description' => 'Giới thiệu chung',
                'main_service' => 'SP dịch vụ chính của DN',
                'main_market' => 'Thị trường chính'
            )
        );

        foreach($data as $key => $company){
            $extra_info = $this->information_model->fetch_company_by_id($company['id']);
            $data_export[$key + 1] = array(
                'company' => $extra_info['company'],
                'phone' => $extra_info['phone'],
                'address' => $extra_info['address'],
                'website' => $extra_info['website'],
                'legal_representative' => $extra_info['legal_representative'],
                'lp_position' => $extra_info['lp_position'],
                'lp_email' => $extra_info['lp_email'],
                'lp_phone' => $extra_info['lp_phone'],
                'connector' => $extra_info['connector'],
                'c_position' => $extra_info['c_position'],
                'c_email' => $extra_info['c_email'],
                'c_phone' => $extra_info['c_phone'],
                'link' => $extra_info['link'],
                'equity_2015' => $company['equity_2015'],
                'equity_2016' => $company['equity_2016'],
                'equity_2017' => $company['equity_2017'],
                'owner_equity' => $company['owner_equity'],
                'total_income' => $company['total_income'],
                'software_income' => $company['software_income'],
                'it_income' => $company['it_income'],
                'export_income' => $company['export_income'],
                'total_labor' => $company['total_labor'],
                'total_ltv' => $company['total_ltv'],
                'description' => $company['description'],
                'main_service' => $company['main_service'],
                'main_market' => $company['main_market']
            );
        }

        // read data to active sheet
        $this->excel->getActiveSheet()->fromArray($data_export);

        $filename='Danh_sach_doanh_nghiep_' . date("d-m-Y") . '.xls'; //save our workbook as this file name

        header('Content-Type: application/vnd.ms-excel'); //mime type

        header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name

        header('Cache-Control: max-age=0'); //no cache

        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format

        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');

        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
    }
}