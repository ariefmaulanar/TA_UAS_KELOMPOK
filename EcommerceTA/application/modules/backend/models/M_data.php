<?php 
 
class M_data extends CI_Model{
public $image = "default.jpg";

	function tampil_data($limit, $start){
		$this->db->limit($limit, $start);
		$this->db->order_by('id_produk', 'ASC');
		return $this->db->from('tbl_produk')
		->join('tbl_kategori', 'tbl_produk.kategori=tbl_kategori.id')
		->get()
		->result();

	}
	function tampil_hapus_data($limit, $start){
		$this->db->limit($limit, $start);
		$this->db->order_by('id_produk', 'ASC');
		return $this->db->from('hapus_produk')
		->join('tbl_kategori', 'hapus_produk.kategori=tbl_kategori.id')
		->get()
		->result();
	}
	function get_produk_kategori($kategori, $limit, $start){
        if($kategori>0)
            {
                $this->db->where('kategori',$kategori);
            }
        $query = $this->db->get('tbl_produk', $limit, $start);
        return $query->result();
    }
    public function get_nama_kategori($kategori){   
        $this->db->select('nama_kategori')->from('tbl_kategori')->where('id',$kategori);
        $query = $this->db->get();
        return $query->result_array();
    }
	function tampil_order($limit, $start){
		$this->db->limit($limit, $start);
		$this->db->order_by('pelanggan', 'ASC');
		return $this->db->from('tbl_order')
		->join('tbl_pelanggan', 'tbl_pelanggan.id=tbl_order.pelanggan')
		->get()
		->result();
	}
	
	function hapus_user($where,$table){
		return $this->db->where($where)->delete($table);
	}

	function detail_order($where){
		$this->db->order_by('produk', 'ASC');
		return $this->db->from('tbl_detail_order')
		->join('tbl_produk', 'tbl_detail_order.produk=tbl_produk.id_produk')
		->where($where)
		->get()
		->result();
	}
	function sum($where){
		return $this->db->select('SUM(harga) as jumlah_total')
		->from('tbl_detail_order')
		->where($where)
		->get()
		->row();

	}
	function tampil_customer($limit, $start){
		$this->db->limit($limit, $start);
		return $this->db->get('user_cust');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function update_data(){
		return $this->db->get('user');
	}
 
	function hapus_data($where,$table){
	 $row = $this->db->where($where)->get('tbl_produk')->row('gambar');
     unlink('././gambar/product/'.$row);
		$this->db->where($where);
		$this->db->delete($table);
		return true;
	}

	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}
	function update_product($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function jumlah_user(){   
	    $query = $this->db->get('user');
	    if($query->num_rows()>0){
	      return $query->num_rows();
	  	}
	    else{
	      return 0;
	    }
	}

	public function jumlah_customer(){   
	    $query = $this->db->get('user_cust');
	    if($query->num_rows()>0){
	      return $query->num_rows();
	  	}
	    else{
	      return 0;
	    }
	}
	public function jumlah_product(){   
    	$query = $this->db->get('tbl_produk');
    	if($query->num_rows()>0){
      	return $query->num_rows();
    	}
    	else{
      	return 0;
    	}
	}
	public function jumlah_hapus_product(){   
    	$query = $this->db->get('hapus_produk');
    	if($query->num_rows()>0){
      	return $query->num_rows();
    	}
    	else{
      	return 0;
    	}
	}
	public function jumlah_order(){   
    	$query = $this->db->get('tbl_order');
    	if($query->num_rows()>0){
      	return $query->num_rows();
    	}
    	else{
      	return 0;
    	}
	}
	public function jumlah_converse(){
	 	$where = array('kategori' => '1');
	 	$query = $this->db->where($where)->get('tbl_produk');
    	if($query->num_rows()>0){
      	return $query->num_rows();
    	}
    	else{
      	return 0;
    	}
	}
	public function jumlah_running(){
	 	$where = array('kategori' => '2');
	 	$query = $this->db->where($where)->get('tbl_produk');
    	if($query->num_rows()>0){
      	return $query->num_rows();
    	}
    	else{
      	return 0;
    	}
	}
	public function jumlah_boots(){
	 	$where = array('kategori' => '3');
	 	$query = $this->db->where($where)->get('tbl_produk');
    	if($query->num_rows()>0){
      	return $query->num_rows();
    	}
    	else{
      	return 0;
    	}
	}
}