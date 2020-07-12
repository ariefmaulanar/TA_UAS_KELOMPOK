<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Page extends MY_Controller {
	 public function __construct(){
 		parent::__construct();
 		$this->load->model('M_data');
		$this->load->helper(array('form', 'url', 'directory'));
	}

 public function home(){
	 $data['judul'] = "Dashboard";	 	 		 
	 $data['total_user'] = $this->M_data->jumlah_user();
	 $data['total_customer'] = $this->M_data->jumlah_customer();
	 $data['total_product'] = $this->M_data->jumlah_product();
	 $data['total_order'] = $this->M_data->jumlah_order();
	 $data['total_converse'] = $this->M_data->jumlah_converse();
	 $data['total_running'] = $this->M_data->jumlah_running();
	 $data['total_boots'] = $this->M_data->jumlah_boots();
	 // function render_backend tersebut dari file core/MY_Controller.php
	 $this->render_backend('v_home', $data); // load view home.php
 }
 public function upload(){
 	$data['judul'] = "Upload File";
 	$this->render_backend('page/v_uploadfile', $data);
 } 
 public function order(){
 	$this->authenticated();
	 if($this->session->userdata('role') != 'admin') // Jika user yg login bukan admin
	 show_404();
	 $data['judul'] = "Order";
	 //config
	 $config['base_url']="http://localhost/tes/EcommerceTA/backend/Page/order/";
	 $config['total_rows']=$this->M_data->jumlah_order();
	 $config['per_page']=4;
	 //styling
	 $config['full_tag_open'] = '<ul class="pagination">';
	 $config['full_tag_close'] = '</ul>';
	 $config['attributes'] = ['class' => 'page-link'];
	 $config['first_link'] = false;
	 $config['last_link'] = false;
	 $config['first_tag_open'] = '<li class="page-item">';
	 $config['first_tag_close'] = '</li>';
	 $config['prev_link'] = '&laquo';
	 $config['prev_tag_open'] = '<li class="page-item">';
	 $config['prev_tag_close'] = '</li>';
	 $config['next_link'] = '&raquo';
	 $config['next_tag_open'] = '<li class="page-item">';
	 $config['next_tag_close'] = '</li>';
	 $config['last_tag_open'] = '<li class="page-item">';
	 $config['last_tag_close'] = '</li>';
	 $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
	 $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
	 $config['num_tag_open'] = '<li class="page-item">';
	 $config['num_tag_close'] = '</li>';
	 //initialize
	 $this->pagination->initialize($config);
	 $data['start'] = $this->uri->segment(4);
	 $data['pagination'] = $this->pagination->create_links();
	 $data['order'] = $this->M_data->tampil_order($config['per_page'], $data['start']);
	 $this->render_backend('page/v_order', $data);
 }
 public function customer(){
 	$this->authenticated();
	 if($this->session->userdata('role') != 'admin') // Jika user yg login bukan admin
	 show_404();
	 $data['judul'] = "Customer";
	 //config
	 $config['base_url']="http://localhost/tes/EcommerceTA/backend/Page/customer/";
	 $config['total_rows']=$this->M_data->jumlah_customer();
	 $config['per_page']=4;
	 //styling
	 $config['full_tag_open'] = '<ul class="pagination">';
	 $config['full_tag_close'] = '</ul>';
	 $config['attributes'] = ['class' => 'page-link'];
	 $config['first_link'] = false;
	 $config['last_link'] = false;
	 $config['first_tag_open'] = '<li class="page-item">';
	 $config['first_tag_close'] = '</li>';
	 $config['prev_link'] = '&laquo';
	 $config['prev_tag_open'] = '<li class="page-item">';
	 $config['prev_tag_close'] = '</li>';
	 $config['next_link'] = '&raquo';
	 $config['next_tag_open'] = '<li class="page-item">';
	 $config['next_tag_close'] = '</li>';
	 $config['last_tag_open'] = '<li class="page-item">';
	 $config['last_tag_close'] = '</li>';
	 $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
	 $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
	 $config['num_tag_open'] = '<li class="page-item">';
	 $config['num_tag_close'] = '</li>';
	 //initialize
	 $this->pagination->initialize($config);
	 $data['start'] = $this->uri->segment(4);
	 $data['pagination'] = $this->pagination->create_links();
	 $data['customer'] = $this->M_data->tampil_customer($config['per_page'], $data['start'])->result();
	 $this->render_backend('page/v_customer', $data);
 }
 public function product(){
 	$data['judul'] = "Produk";
	//config
     $config['base_url']="http://localhost/tes/EcommerceTA/backend/Page/product/";
     $config['total_rows']=$this->M_data->jumlah_product();
     $config['per_page']=4;
     //styling
     $config['full_tag_open'] = '<ul class="pagination">';
     $config['full_tag_close'] = '</ul>';
     $config['attributes'] = ['class' => 'page-link'];
     $config['first_link'] = false;
     $config['last_link'] = false;
     $config['first_tag_open'] = '<li class="page-item">';
     $config['first_tag_close'] = '</li>';
     $config['prev_link'] = '&laquo';
     $config['prev_tag_open'] = '<li class="page-item">';
     $config['prev_tag_close'] = '</li>';
     $config['next_link'] = '&raquo';
     $config['next_tag_open'] = '<li class="page-item">';
     $config['next_tag_close'] = '</li>';
     $config['last_tag_open'] = '<li class="page-item">';
     $config['last_tag_close'] = '</li>';
     $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
     $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
     $config['num_tag_open'] = '<li class="page-item">';
     $config['num_tag_close'] = '</li>';
     //initialize
     $this->pagination->initialize($config);
     $data['start'] = $this->uri->segment(4);
     $data['pagination'] = $this->pagination->create_links();
     $data['products'] = $this->M_data->tampil_data($config['per_page'], $data['start']);
 $this->render_backend('product/v_product', $data);
 } 
 public function category(){
 	$data['judul'] = "category";
        $uri =($this->uri->segment(4))?$this->uri->segment(4):0;
        if($uri==1) {
            $row=$this->M_data->jumlah_converse();
            $url='http://localhost/tes/EcommerceTA/backend/Page/category/1';
        }elseif($uri==2) {
            $row=$this->M_data->jumlah_running();
            $url='http://localhost/tes/EcommerceTA/backend/Page/category/2';
        }elseif($uri==3) {
            $row=$this->M_data->jumlah_boots();
            $url='http://localhost/tes/EcommerceTA/backend/Page/category/3';
        }else{
            $row=$this->M_data->jumlah_product();
            $url='http://localhost/tes/EcommerceTA/backend/Page/category/0';
        }
        //config
        $config['base_url']=$url;
        $config['total_rows']=$row;
        $config['per_page']=4;
        //styling
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['attributes'] = ['class' => 'page-link'];
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        //initialize
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $kategori =($this->uri->segment(4))?$this->uri->segment(4):0;
        $data['start'] = $this->uri->segment(5);
        $data['nama_kategori'] = $this->M_data->get_nama_kategori($kategori);   	
        $data['produk'] = $this->M_data->get_produk_kategori($kategori, $config['per_page'], $data['start']);
 	$this->render_backend('product/v_category', $data);
 }
 public function pengguna(){
 // Panggil fungsi authenticated yg ada pada core/MY_Controller.php
 $this->authenticated();
 if($this->session->userdata('role') != 'admin') // Jika user yg login bukan admin
 show_404(); // Redirect ke halaman 404 Not found
 // function render_backend tersebut dari file core/MY_Controller.php
 $this->render_backend('pengguna'); // load view pengguna.php
 }
}