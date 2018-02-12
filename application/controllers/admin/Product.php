<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH."/third_party/PHPExcel.php";

class Product extends Admin_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('information_model');
		$this->load->model('rating_model');

        $this->excel = new PHPExcel();
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

        $this->data['rating'] = $this->rating_model->fetch_by_product_id('rating', $id);

        // Get member who rated this product
        $this->data['member'] = $this->ion_auth->user((int) $this->data['rating']['member_id'])->row();

		$this->render('admin/product/detail_product_view');
	}

    public function export($client_id){
        //activate worksheet number 1
        $this->excel->setActiveSheetIndex(0);
        //name the worksheet
        $this->excel->getActiveSheet()->setTitle('Danh sach san pham');

        // load database
        $this->load->database();

        $extra_info = $this->information_model->fetch_user_by_id($client_id);

        // get all users in array formate
        $data = $this->information_model->get_all_for_export('product', $client_id);

        $data_export = array(
            '0' => array(
                'company' => 'Doanh nghiệp',
                'name' => 'Tên SP/dịch vụ/giải pháp/ứng dụng',
                'service' => 'Đăng ký tham gia lĩnh vực',
                'functional' => 'Mô tả các công năng của sản phẩm',
                'process' => 'Các công nghệ và quy trình chất lượng sử dụng để phát triển sản phẩm',
                'security' => 'Bảo mật của sản phẩm',
                'positive' => 'Các ưu điểm nổi trội của SP/GP/DV',
                'compare' => 'So sánh với các SP/GP/DV khác',
                'income' => 'Doanh thu của SP/GP/DV năm 2016, 2017',
                'area' => 'Thị phần của SP/giải pháp/DV',
                'open_date' => 'Ngày thương mại hoá/ra mắt dịch vụ',
                'price' => 'Giá SP/GP/DV',
                'customer' => 'Một số khách hàng tiêu biểu',
                'after_sale' => 'Dịch vụ sau bán hàng',
                'team' => 'Đội ngũ phát triển sp/gp',
                'award' => 'Các giải thưởng/DH đã nhận được'
            )
        );

        foreach($data as $key => $product){

            $data_export[$key + 1] = array(
                'company' => $extra_info['company'],
                'name' => $product['name'],
                'service' => $product['service'],
                'functional' => $product['functional'],
                'process' => $product['process'],
                'security' => $product['security'],
                'positive' => $product['positive'],
                'compare' => $product['compare'],
                'income' => $product['income'],
                'area' => $product['area'],
                'open_date' => $product['open_date'],
                'price' => $product['price'],
                'customer' => $product['customer'],
                'after_sale' => $product['after_sale'],
                'team' => $product['team'],
                'award' => $product['award']
            );
        }

        // read data to active sheet
        $this->excel->getActiveSheet()->fromArray($data_export);

        $filename = $this->vn_to_str($extra_info['company']) . '_' . date("d-m-Y") . '.xls'; //save our workbook as this file name

        header('Content-Type: application/vnd.ms-excel'); //mime type

        header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name

        header('Cache-Control: max-age=0'); //no cache

        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format

        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');

        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
    }

    function vn_to_str ($str){

        $unicode = array(

            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',

            'd'=>'đ',

            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',

            'i'=>'í|ì|ỉ|ĩ|ị',

            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',

            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',

            'y'=>'ý|ỳ|ỷ|ỹ|ỵ',

            'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

            'D'=>'Đ',

            'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

            'I'=>'Í|Ì|Ỉ|Ĩ|Ị',

            'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

            'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

            'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',

        );

        foreach($unicode as $nonUnicode=>$uni){

            $str = preg_replace("/($uni)/i", $nonUnicode, $str);

        }
        $str = str_replace(' ','_',$str);

        return $str;

    }
}