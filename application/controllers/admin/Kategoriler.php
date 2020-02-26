<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategoriler extends CI_Controller {

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
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY başlık");
		$data["veri"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);
		
		$this->load->view('admin\kategoriler_liste',$data);
	}
	
	public function ekle()
	{
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);
		
		$this->load->view('admin\kategoriler_ekle');
		
		
	}
	public function ekle_kaydet()
	{
		$data=array(
			'başlık' => $this->input->post('başlık'),
			'keywords' => $this->input->post('keywords'),
			'açıklama' => $this->input->post('açıklama'),
            'detay' => $this->input->post('detay'),
			);
			
		$this->db->insert("kategoriler",$data);
		$this->session->set_flashdata("mesaj","Kategori kaydı gerçekleştirildi");
		redirect(base_url().'admin/kategoriler');
	}
	
	public function duzenle($id)
	{
		$query=$this->db->query("SELECT * FROM kategoriler WHERE Id= $id");
		$data["veri"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);
		
		$this->load->view('admin\kategoriler_duzenle_formu',$data);
	}
	public function guncelle($id)
	{
		$data=array(
			'başlık' => $this->input->post('başlık'),
			'keywords' => $this->input->post('keywords'),
			'açıklama' => $this->input->post('açıklama'),
            'durum' => $this->input->post('durum'),
            'detay' => $this->input->post('detay'),
			);
		$this->load->model('Database_Model');
		$this->Database_Model->update_data("kategoriler",$data,$id);
		
		redirect(base_url().'admin/kategoriler');
	}
	
	public function sil($id)
	{
		$this->db->query("DELETE FROM kategoriler WHERE Id= $id");
		redirect(base_url().'admin/kategoriler');
		
	}
	
}
