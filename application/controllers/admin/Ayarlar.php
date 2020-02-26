<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ayarlar extends CI_Controller {

	public function __construct()
	{ 
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('Database_Model');
			
			if (!$this->session->userdata("admin_session"))
			{
				redirect(base_url().'admin/login');
			}
	}
	public function index()
	{
		$query=$this->db->query("SELECT * FROM ayarlar ORDER BY Id");
		$data["veri"]=$query->result();
        $query=$this->db->query("SELECT * FROM dernek ORDER BY Id");
        $data["verii"]=$query->result();
        $query=$this->db->query("SELECT * FROM bilgiler ORDER BY Id");
        $data["veriii"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);
		
		$this->load->view('admin/ayarlar_duzenle_formu',$data);
	}




	
	public function ayarlar_guncelle($id)
	{
		$data=array(
			'adı'=>$this->input->post('adı'),
			'keywords'=>$this->input->post('keywords'),
			'description'=>$this->input->post('description'),
			'name'=>$this->input->post('name'),
			'smtpserver'=>$this->input->post('smtpserver'),
			'smtpport'=>$this->input->post('smtpport'),
			'smtpemail'=>$this->input->post('smtpemail'),
			'password'=>$this->input->post('password'),
			'adres'=>$this->input->post('adres'),
			'şehir'=>$this->input->post('şehir'),
			'tel'=>$this->input->post('tel'),
			'fax'=>$this->input->post('fax'),
			'email'=>$this->input->post('email'),
			'hakkımızda'=>$this->input->post('hakkımızda'),
			'iletişim'=>$this->input->post('iletişim'),
			'facebook'=>$this->input->post('facebook'),
			'twitter'=>$this->input->post('twitter'),
			'instagram'=>$this->input->post('instagram'),
			'pinterest'=>$this->input->post('pinterest'),
		);
		$this->Database_Model->update_data("ayarlar",$data,$id);

        $data=array(

            'içerik' => $this->input->post('içerikk'),
            'adıı' => $this->input->post('adıı'),
        );


        $this->db->insert("dernek",$data);

        $data=array(

            'içerikk' => $this->input->post('içerikkk'),
            'adıı' => $this->input->post('adııı'),
        );


        $this->db->insert("bilgiler",$data);

		redirect(base_url().'admin/ayarlar');	
	}
	public function duzenle($id)
	{
		$query=$this->db->query("SELECT * FROM ayarlar WHERE Id= $id");
		$data["veri"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);
		
		$this->load->view('admin\ayarlar_duzenle_formu',$data);
	}
}
