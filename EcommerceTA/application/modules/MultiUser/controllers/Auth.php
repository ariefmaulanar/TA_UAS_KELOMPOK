<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends MY_Controller {
 public function __construct(){
 parent::__construct();
 $this->load->library(array('form_validation'));
 $this->load->helper(array('url','form'));
 $this->load->model('UserModel');
 $this->load->model('M_register');
 }
 public function index(){
 if($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
 redirect('backend/Page/home'); // Redirect ke page home
 // function render_login tersebut dari file core/MY_Controller.php
 $this->render_login('login'); // Load view login.php
 }
 public function login(){
 $username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
 $password = $this->input->post('password'); // Ambil isi dari inputan password pada form login dan encrypt dengan md5
 $user = $this->UserModel->get($username); // Panggil fungsi get yang ada di UserModel.php
 if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
 $this->session->set_flashdata('message', 'Username tidak ditemukan'); // Buat session flashdata
 redirect('Multiuser/Auth'); // Redirect ke halaman login
 }else{
 if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
 $session = array(
 'authenticated'=>true, // Buat session authenticated dengan value true
 'username'=>$user->username, // Buat session username
 'nama'=>$user->nama, // Buat session nama
 'role'=>$user->role // Buat session role
 );
 $this->session->set_userdata($session); // Buat session sesuai $session
 redirect('backend/Page/home'); // Redirect ke halaman home
 }else{
 $this->session->set_flashdata('message', 'Password salah'); // Buat session flashdata
 redirect('Multiuser/Auth'); // Redirect ke halaman login
 		}
 	}
 }
 public function register() {
		$this->form_validation->set_rules('username', 'USERNAME','required');
		$this->form_validation->set_rules('email','EMAIL','required|valid_email');
		$this->form_validation->set_rules('password','PASSWORD','required');
		$this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
		if($this->form_validation->run() == FALSE) {
			$this->render_register('register');
		}else{
 
			$data['username'] =    $this->input->post('username');
			$data['nama'] =    $this->input->post('nama');
			$data['email']  =    $this->input->post('email');
			$data['password'] =    md5($this->input->post('password'));
			$data['role'] =    $this->input->post('role');
 
			$this->M_register->daftar($data);
			 
			$this->session->set_flashdata('message', 'Pendaftaran Berhasil, Silahkan Login');
			 
			redirect('Multiuser/Auth');
		}
	}
 public function logout(){
 $this->session->sess_destroy(); // Hapus semua session
 redirect('Multiuser/Auth'); // Redirect ke halaman login
 }
}