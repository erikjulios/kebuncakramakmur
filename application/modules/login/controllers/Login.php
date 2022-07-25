<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('id')) {
			redirect(site_url('admin/tampil'));
		}else{
			$this->load->view('form_login');
		}
	}
	public function validasi()
	{
			$username = $this->input->post('username');
			$password =md5 ($this->input->post('password'));
		
		$take ="select * from admin where username = ? AND password = ? ";
		$valid =  $this->db->query($take, array($username,$password))->row();

		if ($valid) {
			$this->session->set_userdata('id', $valid->id);
			$this->session->set_userdata('nama', $valid->username);
			redirect('admin/tampil','refresh');
		}
		else{
			$this->session->set_flashdata('sf','<span class="label label-danger">Username dan Password tidak valid.</span>');
				redirect(site_url('login'));
		}
			}

	function logout()
	{
	    $this->session->sess_destroy();
	    redirect('user','refresh');
	}

}
