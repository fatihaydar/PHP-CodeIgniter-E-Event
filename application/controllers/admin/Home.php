<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar',$data);

        $this->load->view('admin/ayarlar_duzenle_formu',$data);

		
	}

    public function videolar()
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
        $query=$this->db->query("SELECT * FROM videolar ORDER BY Id");
        $data["video"]=$query->result();
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar',$data);

        $this->load->view('admin/videolar',$data);


    }
    public function video_sil($id)
    {
        $this->db->query("DELETE FROM videolar WHERE Id= $id");
        $this->session->set_flashdata("mesaj"," Video Silindi..");
        redirect(base_url().'admin/home/videolar');

    }
    public function video_ekle()
    {
        $query=$this->db->query("SELECT adsoy FROM kullanıcılar ");
        $data["veri"]=$query->result();

        $query=$this->db->query("SELECT başlık FROM kategoriler ");
        $data["verii"]=$query->result();

        $query=$this->db->query("SELECT adsoy FROM uyeler ");
        $data["veriii"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar',$data);

        $this->load->view('admin/video_ekle',$data);

    }
    public function video_ekle_kaydet($id)
    {



        $l=$this->input->post('ytvideo');
        $kesit=substr($l,0,30);
        $yt="https://www.youtube.com/embed/";

        if ($kesit==$yt){

            $data=array(
                'video'=>$this->input->post('ytvideo'),
                'ekleyen_id'=>$id
            );

            $this->db->insert("videolar",$data);
            $this->session->set_flashdata("mesaj"," Video Ekleme Başarılı..");

            redirect(base_url().'admin/home/videolar');
        }
        else{
            $this->session->set_flashdata("mesaj"," Video Eklenemedi..");
            redirect(base_url().'admin/home/videolar');




        }
    }
	
}
