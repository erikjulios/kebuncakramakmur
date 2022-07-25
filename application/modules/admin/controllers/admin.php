<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('id')) {
			redirect('login');
		}
		$this->load->helper('cookie');
		date_default_timezone_set('Asia/Jakarta');
	}
	public function index()
	{
		// array pertama
		// $data = [
		// 	'nama' => 'erik', 
		// 	'jenis_kelamin' => 'lakilaki', 
		// ];

		// array ke array_diff_uassoc(array1, array2)
		// $data['nama'] = 'erik';		
		// $data['jenis_kelamin'] = 'laki laki';
		
		// if(!$this->input->cookie('remember_me',true)){
			// $cookie = array(
	  //          'name'   => 'remember_me',
	  //          'value'  => "".rand()."-".date("d-m-Y-H-i-s")."",                            
	  //          'expire' => '300',
	  //          // 'secure' => TRUE
	  //      	);
   //     		$this->input->set_cookie($cookie);
		// }

		$this->load->view('index');
	}

	function get()
	{

	   echo $this->input->cookie('ci_session',true);

	}


	
	public function tampil()
	{
		$data['sayur_1'] = $this->db->query('select * from vegetable')->result();
		// $data['sayur_2'] = $this->db->get('impor')->result();
		// $data['sayur_3'] = $this->db->get_where('impor', array('id' => '1', 'nama' => 'jengkol'))->result();

		$this->load->view('tampilSayur', $data);
	}

	public function create()
	{
		$this->load->view('admin/create');
	}

	public function simpan()
	{
		$post = $this->input->post();
		$this->nama= $post["nama"];
		$this->harga= $post["harga"];
		$this->gambar= $this->_uploadImage();
		$this->db->insert('vegetable', $this);

		$this->load->view('admin/create');
	}
	
	public function edit($id)
	{
		// $data['sayur'] = $this->db->query('select * from impor where id = '.$id.'')->row();
		// $data['jenis'] = $this->db->get('vegetable')->result();
		$data['sayur'] = $this->db->get_where('vegetable', array('id' => $id))->row();

		$this->load->view('edit', $data);
	}	

	public function update($id)
	{
		$this->load->library('upload');
		$gambar	= $_FILES['gambar']['name'];

		$query = $this->db->get_where('vegetable', array('id' => $id))->row();

		if (!$gambar) {
			$foto = $query->gambar;
		}else{
			$kosong = $query->gambar;
			$fotobaru = date('dmYHis').$gambar;


			$config['upload_path']          = 'assets/img/';
		    $config['allowed_types']        = 'jpeg|jpg|png';
		    $config['file_name']            = $fotobaru;
		    $config['overwrite']			= true;
		    $config['max_size']             = 10240; // 10MB

		    if (!file_exists($kosong)) {
				$foto = $this->upload->data("file_name");
			}else{
				unlink('assets/img/'.$query->gambar.'');
				ini_set('display_errors','off');
			}
			


		    $this->upload->initialize($config);
			
			if ($this->upload->do_upload('gambar')) {
		        $foto = $this->upload->data("file_name");
		    }
		}

		$data = [
			'nama' => $this->input->post('nama'),
			'harga' => $this->input->post('harga'),
			'gambar' => $foto,
		];
		
		$this->db->update('vegetable', $data, 'id = '.$id.'');

		redirect('admin/tampil','refresh');
	}

	public function hapus($id)
	{
		$this->db->delete('vegetable', array('id' => $id));
		redirect('admin/tampil','refresh');
	}

	private function _uploadImage()
	{
		$foto = $_FILES['gambar']['name'];
		$fotobaru = date('dmYHis').$foto;


	    $config['upload_path']          = 'assets/img/';
	    $config['allowed_types']        = 'jpeg|jpg|png';
	    $config['file_name']            = $fotobaru;
	    $config['overwrite']			= true;
	    $config['max_size']             = 10240; // 10MB
	    // $config['max_width']            = 1024;
	    // $config['max_height']           = 768;

	    $this->load->library('upload', $config);

	    if ($this->upload->do_upload('gambar')) {
	        return $this->upload->data("file_name");
	    }
	    
	    return "default.jpg";
	}

	public function form_admin()
	{
		$this->load->view('form_admin');
	}
	public function add_admin()
	{
		$post = $this->input->post();
		$this->username= $post["username"];
		$this->password= md5($post["password"]);
		$input = $this->db->insert('admin', $this);
		$this->load->view('form_admin');
	
	}

	public function tampilpesanan()
	{
		$data['dipesan'] = $this->db->query('select * from pesan')->result();
		$this->load->view('pesanan', $data);
	}

	
}

/* End of file admin.php */
/* Location: ./application/modules/admin/controllers/admin.php */