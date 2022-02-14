<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Berita extends CI_Controller {

	function __construct()

		{

			parent::__construct();
			$this->load->model('M_crud_kegiatan_program');
			$this->load->model('M_crud_baner');
			$this->load->model('M_crud_profil');
			$this->load->model('M_crud_berita');
		}

	
	public function index()

	{
		$data['tampil_data_baner']=$this->M_crud_baner->tampil_data_baner();
		$data['tampil_data_profil']=$this->M_crud_profil->tampil_data_profil();
		$data['tampil_kategori_kegiatan']=$this->M_crud_kegiatan_program->tampil_kategori_kegiatan();
		$data['tampil_kategori_program']=$this->M_crud_kegiatan_program->tampil_kategori_program();
		$data['tampil_semua_berita']=$this->M_crud_berita->tampil_semua_berita();
		$this->load->view('daftar_berita',$data);

	}	


	public function Selengkap_nya($id)

	{
		$data['tampil_data_baner']=$this->M_crud_baner->tampil_data_baner();
		$data['tampil_data_profil']=$this->M_crud_profil->tampil_data_profil();
		$data['tampil_kategori_kegiatan']=$this->M_crud_kegiatan_program->tampil_kategori_kegiatan();
		$data['tampil_kategori_program']=$this->M_crud_kegiatan_program->tampil_kategori_program();
		$data['tampil_berita_id']=$this->M_crud_berita->tampil_berita_id($id);
		$this->load->view('berita_lengkap',$data);

	}



	





}





/* copy reg juhendra utama*/

