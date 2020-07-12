<?php 
 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_data');
		$this->load->helper(array('form', 'url'));
 
	}
 
	function tambah_aksi(){
		$config['upload_path']          = '././gambar/product/'; //direktori
		$config['allowed_types']        = 'gif|jpg|png'; // file yang di perbolehkan
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('product/v_insert_product', $error);
		}else{
			$this->upload->data("file_name");
		}
		$product_id		= $this->input->post('product_id');
		$vendor_id 		= $this->input->post('vendor_id');
		$product_name 	= $this->input->post('product_name');
		$product_price 	= $this->input->post('product_price');
		$product_desc 	= $this->input->post('product_desc');
		$category 		= $this->input->post('category');
		$stok 			= $this->input->post('stok');
		$foto = $this->upload->data("file_name");
		$data = array(
			'nama_produk' => $product_name,
			'deskripsi' => $product_desc,
			'harga' => $product_price,
			'gambar' => $foto,
			'kategori' => $category,
			'stok' => $stok
			);
		$this->M_data->input_data($data,'tbl_produk');
		redirect('backend/Page/product');
	}

    function insert_product(){
     	$data['judul'] = "Tambah Produk";
      	$this->load->view('templates/header', $data);
      	$this->load->view('product/v_insert_product');
      	$this->load->view('templates/footer');
    }

	function hapus($id_produk){
		$where = array('id_produk' => $id_produk);
		$this->M_data->hapus_data($where,'tbl_produk');
		redirect('backend/Page/product');
	}

	function edit($id_produk){
	$data['judul']="Edit Produk";
	$where = array('id_produk' => $id_produk);
	$data['user'] = $this->M_data->edit_data($where,'tbl_produk')->result();
	$this->load->view('templates/header', $data);
	$this->load->view('product/v_edit',$data);
	$this->load->view('templates/footer');
	}

	function update(){
	$config['upload_path']          = '././././gambar/product/'; //direktori
	$config['allowed_types']        = 'gif|jpg|png'; // file yang di perbolehkan

 	$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('product/v_edit', $error);
		}else{
			$this->upload->data("file_name");
		}
	$id		= $this->input->post('id_produk');
	$nama	= $this->input->post('nama_produk');
	$desk	= $this->input->post('deskripsi');
	$har	= $this->input->post('harga');
	$gam	= $this->upload->data("file_name");
	$kat	= $this->input->post('kategori');
	$stok	= $this->input->post('stok');
	$data = array(
		'nama_produk' => $nama,
		'deskripsi' => $desk,
		'harga' => $har,
		'gambar' => $gam,
		'kategori' => $kat,
		'stok' => $stok
	);
 
	$where = array(
		'id_produk' => $id
	);
 
	$this->M_data->update_product($where,$data,'tbl_produk');
	
			redirect('backend/Page/product');
	}

	function aksi_upload(){
		$config['upload_path']          = './././files';
		$config['allowed_types']        = '*'; // file yang di perbolehkan
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('uploadfiles/v_uploadfile', $error);
		}else{
			$this->upload->data("file_name");
			redirect('backend/Page/upload');
		}
	}
	function detail($id){
        $data['judul']="Detail Order";
	$where = array('order_id' => $id);
	$data['jumlah_total'] = $this->M_data->sum($where);
	$data['user'] = $this->M_data->detail_order($where);
	$this->load->view('templates/header', $data);
	$this->load->view('page/v_detail_order',$data);
	$this->load->view('templates/footer');
	}
	function hapus_customer($id){
		$where = array('id_user' => $id);
		$this->M_data->hapus_user($where,'user_cust');
		redirect('backend/Page/customer');
	}
        function hapus_produk(){
        $data['judul'] = "Riwayat Produk Terhapus";
        //config
        $config['base_url']="http://localhost:8080/Ecommerce/backend/Product/hapus_produk/";
        $config['total_rows']=$this->M_data->jumlah_hapus_product();
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
                $data['products'] = $this->M_data->tampil_hapus_data($config['per_page'], $data['start']);
                $this->load->view('templates/header', $data); 
                $this->load->view('product/v_hapus_product',$data);
                $this->load->view('templates/footer');
        }
 
}