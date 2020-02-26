<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dernegimiz extends CI_Controller {

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
        $query=$this->db->query("SELECT * FROM dernek ORDER BY adıı");
        $data["veri"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();

        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);

        $this->load->view('admin\dernegimiz',$data);
		
	}

    public function sil($id)
    {
        $this->db->query("DELETE FROM dernek WHERE Id= $id");
        redirect(base_url().'admin/dernegimiz');

    }
    public function duzenle($id)
    {
        $query=$this->db->query("SELECT * FROM dernek WHERE Id= $id");
        $data["veri"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);

        $this->load->view('admin\dernegimiz_duzenle',$data);
    }

    public function guncelle($id)
    {
        $data=array(
            'adıı' => $this->input->post('adıı'),
            'içerik' => $this->input->post('içerik'),

        );
        $this->load->model('Database_Model');
        $this->Database_Model->update_data("dernek",$data,$id);

        redirect(base_url().'admin/dernegimiz');
    }
    public function ekle()
    {
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);

        $this->load->view('admin\dernegimiz_ekle');


    }
    public function ekle_kaydet()
    {
        $data=array(
            'adıı' => $this->input->post('adıı'),
            'içerik' => $this->input->post('içerik'),

        );

        $this->db->insert("dernek",$data);
        $this->session->set_flashdata("mesaj","Kategori kaydı gerçekleştirildi");
        redirect(base_url().'admin/dernegimiz');
    }
	
}
