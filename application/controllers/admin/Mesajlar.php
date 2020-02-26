<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesajlar extends CI_Controller {

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
		$query=$this->db->query("SELECT * FROM mesajlar ORDER BY adsoy");
        $data["veriler"]=$query->result();

        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);
		$this->load->view('admin\mesajlar_liste',$data);
	}
    public function oku($id)
    {


        $data["durum"]="okundu";
        $this->load->model('Database_Model');
        $this->Database_Model->update_data("mesajlar",$data,$id);
        $query=$this->db->query("Select * from mesajlar WHERE Id= $id");
        $data["oku"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);
        $this->load->view('admin\mesajlar_oku',$data);


    }


	

	public function guncelle($id)
	{
		$data=array(
			'adsoy' => $this->input->post('adsoy'),
			'email' => $this->input->post('email'),
			'durum' => $this->input->post('durum'),
			);
		$this->load->model('Database_Model');
		$this->Database_Model->update_data("mesjalar",$data,$id);
        $this->session->set_flashdata("mesaj"," Güncelleme gerçekleşti..");
		redirect(base_url().'admin/mesajlar');
	}
	
	public function sil($id)
	{
		$this->db->query("DELETE FROM mesajlar WHERE Id= $id");
        $this->session->set_flashdata("mesaj"," Silme işlemi gerçekleşti..");
		redirect(base_url().'admin/mesajlar');
		
	}
	
}
