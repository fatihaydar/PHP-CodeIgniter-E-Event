<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kullanicilar extends CI_Controller {

	public function __construct()
	{ 
			parent::__construct();
			$this->load->helper('url');
			
			if (!$this->session->userdata("admin_session"))
			{
				redirect(base_url().'admin/login');
			}
	}
	public function index()
	{
		$query=$this->db->query("SELECT * FROM uyeler ORDER BY adsoy");
		$data["veriler"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);
		
		$this->load->view('admin\kullanicilar_liste',$data);
	}
	

	public function duzenle($id)
	{
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id= $id");
		$data["veri"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);
		
		$this->load->view('admin\kullanicilar_duzenle_formu',$data);
	}
	public function guncelle($id)
	{
		$data=array(
			'adsoy' => $this->input->post('adsoy'),
			'email' => $this->input->post('email'),
			'sifre' => $this->input->post('sifre'),
            'cinsiyet' => $this->input->post('cinsiyet'),
			);

		$this->load->model('Database_Model');
		$this->Database_Model->update_data("uyeler",$data,$id);
        $this->session->set_flashdata("mesaj"," Uye güncellendi..");
		redirect(base_url().'admin/kullanicilar');
	}
	
	public function sil($id)
	{
		$this->db->query("DELETE FROM uyeler WHERE Id= $id");
        $this->session->set_flashdata("mesaj"," Üye silindi..");
		redirect(base_url().'admin/kullanicilar');
		
	}
	
}
