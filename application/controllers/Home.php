<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Home extends CI_Controller {

	function __construct()

		{

			parent::__construct();
			$this->load->model('M_crud_kegiatan_program');
			$this->load->model('M_crud_baner');
			$this->load->model('M_crud_profil');
			$this->load->model('M_crud_berita');
			$this->load->model('M_crud_galleri_vidio');
			$this->load->model('M_crud_web_terkait');
			$this->load->model('M_crud_galleri');
			$this->load->model('M_crud_kontak');
		}

	

	public function index()

	{
		$data['tampil_data_baner']=$this->M_crud_baner->tampil_data_baner();
		$data['tampil_data_profil']=$this->M_crud_profil->tampil_data_profil();
		
		$data['tampil_berita_terbaru_1']=$this->M_crud_berita->tampil_berita_terbaru_1();
		$data['tampil_vidio_terbaru_1']=$this->M_crud_galleri_vidio->tampil_vidio_terbaru_1();
		$data['tampil_berita_terbaru_4']=$this->M_crud_berita->tampil_berita_terbaru_4();
		$data['tampil_berita_terbaru_sidang_1']=$this->M_crud_berita->tampil_berita_terbaru_sidang_1();
		$data['tampil_berita_terbaru_sidang_4']=$this->M_crud_berita->tampil_berita_terbaru_sidang_4();
		$data['tampil_kegiatan_terbaru_sidang_4']=$this->M_crud_kegiatan_program->tampil_kegiatan_terbaru_sidang_4();
		$data['tampil_data_web_terkait']=$this->M_crud_web_terkait->tampil_data_web_terkait();

		$data['tampil_semua_foto_depan']=$this->M_crud_galleri->tampil_semua_foto_depan();
		$data['tampil_semua_album']=$this->M_crud_galleri->tampil_semua_album();
		$data['tampil_kategori_kegiatan']=$this->M_crud_kegiatan_program->tampil_kategori_kegiatan();
		$data['tampil_kategori_program']=$this->M_crud_kegiatan_program->tampil_kategori_program();


		$data['tampil_data_kontak_addres']=$this->M_crud_kontak->tampil_data_kontak_addres();
		$data['tampil_data_kontak_nomber_phone']=$this->M_crud_kontak->tampil_data_kontak_nomber_phone();
		$data['tampil_data_kontak_email']=$this->M_crud_kontak->tampil_data_kontak_email();
		$this->load->view('home',$data);

	}



	





}





/* copy reg juhendra utama*/
