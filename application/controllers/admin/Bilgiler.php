<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bilgiler extends CI_Controller {

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
        $query=$this->db->query("SELECT * FROM bilgiler ORDER BY adıı");
        $data["veri"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);

        $this->load->view('admin\bilgiler',$data);
		
	}

    public function sil($id)
    {
        $this->db->query("DELETE FROM bilgiler WHERE Id= $id");
        $this->session->set_flashdata("mesaj"," Silme işlemi gerçekleşti..");
        redirect(base_url().'admin/bilgiler');

    }
    public function duzenle($id)
    {
        $query=$this->db->query("SELECT * FROM bilgiler WHERE Id= $id");
        $data["veri"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);

        $this->load->view('admin\bilgiler_duzenle',$data);
    }

    public function guncelle($id)
    {
        $data=array(
            'adıı' => $this->input->post('adıı'),
            'içerikk' => $this->input->post('içerikk'),

        );
        $this->load->model('Database_Model');
        $this->Database_Model->update_data("bilgiler",$data,$id);
        $this->session->set_flashdata("mesaj"," Güncelleme işlemi gerçekleşti..");
        redirect(base_url().'admin/bilgiler');
    }
    public function ekle()
    {

        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);
        $this->load->view('admin\bilgiler_ekle');


    }
    public function ekle_kaydet()
    {
        $data=array(
            'adıı' => $this->input->post('adıı'),
            'içerikk' => $this->input->post('içerikk'),

        );

        $this->db->insert("bilgiler",$data);
        $this->session->set_flashdata("mesaj","Ekleme gerçekleşti..");
        redirect(base_url().'admin/bilgiler');
    }
	
}
