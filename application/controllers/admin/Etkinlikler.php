<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etkinlikler extends CI_Controller {

	public function __construct()
	{ 
			parent::__construct();
			$this->load->helper(array('form','url'));
			$this->load->model('Database_Model');
			
			if (!$this->session->userdata("admin_session"))
			{
				redirect(base_url().'admin/login');
			}
	}
	public function index()
	{
		$query=$this->db->query("SELECT * FROM etkinlikler ORDER BY Id");
		$data["veri"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();

        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);
		$this->load->view('admin/etkinlikler_liste',$data);
	}
    public function bekleyen_etk()
    {
        $query=$this->db->query("SELECT * FROM bekleyen_etk ORDER BY Id");
        $data["veri"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);
        $this->load->view('admin/bekleyen_etk_liste',$data);
    }

    public function detay($id)
    {
        $query=$this->db->query("SELECT * FROM etkinlikler WHERE Id=$id");
        $data["detayy"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);

        $this->load->view('admin/detay_goster',$data);
    }

    public function katilanlar($id)
    {
        $query=$this->db->query("SELECT * FROM etk_katilim WHERE etkinlik_id=$id");
        $data["katilanlar"]=$query->result();


        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);

        $this->load->view('admin/katilanlar',$data);
    }

    public function bekleyen_detay($id)
    {
        $query=$this->db->query("SELECT * FROM bekleyen_etk WHERE Id=$id");
        $data["detayy"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);

        $this->load->view('admin/bkl_detay_goster',$data);
    }
    public function bekleyen_etk_onay($id)
    {
        $query=$this->db->query("SELECT * FROM bekleyen_etk WHERE Id=$id");
        $rr=$query->result();

        foreach ($rr as $rs)
        {

            $data=array(
                'detay'=>$rs->detay,
                'başlık'=>$rs->başlık,
                'açıklama'=>$rs->açıklama,
                'kategori'=>$rs->kategori,
                'editör_id'=>$rs->editör_id,
                'keywords'=>$rs->keywords,
                'etkinlik_tarih'=>$rs->etkinlik_tarih,
                'durum'=>$rs->durum,
                'resim'=>$rs->resim,


            );

        }

        $this->load->model('Database_Model');

        $this->db->insert("etkinlikler",$data);
        $this->db->query("DELETE FROM bekleyen_etk WHERE Id= $id");

        $query=$this->db->query("SELECT * FROM bekleyen_etk ORDER BY Id");
        $data["veri"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);

        $this->load->view('admin/bekleyen_etk_liste',$data);
    }









    public function resimekle($id)
    {
        $data["id"]=$id;
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);

        $this->load->view('admin/etkinlik_resimekle',$data);
    }
    public function resim_upload($id)
    {
        $data["id"]=$id;
        $config['upload_path']    ='./uploads/';
        $config['allowed_types']  ='gif|jpg|png';
        $config['max_size']       =1024;
        $config['max_width']      =1024;
        $config['max_height']     =768;

        $this->load->library('upload',$config);
        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('admin/etkinlik_resimekle', $error);
        }
        else
        {
            $data = $this->upload->data();
            $dosyaadi=$data["file_name"];
          //  $this->load->view('upload_success', $data);

            $data=array(
                'resim'=>$dosyaadi


            );
            $this->Database_Model->update_data("etkinlikler",$data,$id);
            $this->session->set_flashdata("mesaj"," Resim eklendi..");

            redirect(base_url().'admin/etkinlikler');
        }

    }
    public function galeriekle($id)
    {
        $query=$this->db->query("SELECT * FROM etkinlik_resimler WHERE  etkinlik_id=$id");
        $data["veriler"]=$query->result();
        $data["id"]=$id;
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);
        $this->load->view('admin/etkinlik_galeriekle',$data);
    }
    public function galeri_upload($id)
    {
        $data["id"]=$id;
        $config['upload_path']    ='./uploads/';
        $config['allowed_types']  ='gif|jpg|png';
        $config['max_size']       =1024;
        $config['max_width']      =1024;
        $config['max_height']     =768;

        $this->load->library('upload',$config);
        if ( !$this->upload->do_upload('userfile'))
        {
            $this->session->set_flashdata("mesaj","Hata oluştu...");
            $query=$this->db->query("SELECT * FROM etkinlik_resimler WHERE  etkinlik_id=$id");
            $data["veriler"]=$query->result();
            $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
            $data["sayi"]=$query->result();
            $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
            $data["sayi2"]=$query->result();
            $this->load->view('admin\_header');
            $this->load->view('admin\_sidebar',$data);

            $this->load->view('admin/etkinlik_galeriekle',$data);
        }
        else
        {
            $data = $this->upload->data();
           echo $dosyaadi=$data["file_name"];

            //  $this->load->view('upload_success', $data);

            $data=array(
                'etkinlik_id'=>$id,
                'resim'=>$dosyaadi


            );
            $this->load->model('Database_Model');
            $this->db->insert("etkinlik_resimler",$data);
            $this->session->set_flashdata("mesaj","Resim Eklendi..");

            redirect(base_url().'admin/etkinlikler');
        }

    }
    public function ekle_kaydet()
    {
        $data=array(
            'başlık'=>$this->input->post('başlık'),
            'keywords'=>$this->input->post('keywords'),
            'açıklama'=>$this->input->post('açıklama'),
            'detay'=>$this->input->post('detay'),
            'durum'=>$this->input->post('durum'),
            'editör_id'=>$this->input->post('editör_id'),
            'etkinlik_tarih'=>$this->input->post('etkinlik_tarih'),
            'kategori'=>$this->input->post('kategori'),

        );
        $this->session->set_flashdata("mesaj"," İçerik eklendi..");
        $this->db->insert("etkinlikler",$data);

        redirect(base_url().'admin/etkinlikler');
    }
    public function ekle()
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

        $this->load->view('admin/etkinlikler_ekle',$data);


    }

    public function isActiveSetter()
    {
        $data=array(
            'durum'=>$this->input->post('isActive') == "true" ? 'passive' : 'active',
        );

        $id       = $this->input->post("id");
        $this->Database_Model->update_data("etkinlikler",$data,$id);

    }

    public function galeri_sil($id)
    {
        $this->db->query("DELETE FROM etkinlik_resimler WHERE Id= $id");
        $this->session->set_flashdata("mesaj"," Resim Silindi..");
        redirect(base_url().'admin/etkinlikler');

    }
    public function sil($id)
    {
        $this->db->query("DELETE FROM etkinlikler WHERE Id= $id");
        $this->session->set_flashdata("mesaj"," İçerik silindi..");
        redirect(base_url().'admin/etkinlikler');

    }
    public function bkl_sil($id)
    {
        $this->db->query("DELETE FROM bekleyen_etk WHERE Id= $id");
        $this->session->set_flashdata("mesaj"," İçerik silindi..");
        redirect(base_url().'admin/etkinlikler/bekleyen_etk');

    }
	
	public function etkinlikler_guncelle($id)
	{
		$data=array(
			'başlık'=>$this->input->post('başlık'),
			'keywords'=>$this->input->post('keywords'),
			'açıklama'=>$this->input->post('açıklama'),
			'detay'=>$this->input->post('detay'),
            'durum'=>$this->input->post('durum'),
            'editör_id'=>$this->input->post('editör_id'),
            'etkinlik_tarih'=>$this->input->post('etkinlik_tarih'),
            'kategori'=>$this->input->post('kategori'),


			
		);
		$this->Database_Model->update_data("etkinlikler",$data,$id);
        $this->session->set_flashdata("mesaj"," İçerik güncellendi..");
		redirect(base_url().'admin/etkinlikler');	
	}
	public function duzenle($id)
	{
		$query=$this->db->query("SELECT * FROM etkinlikler WHERE Id= $id");
		$data["veri"]=$query->result();

        $query=$this->db->query("SELECT başlık FROM kategoriler ");
        $data["verii"]=$query->result();

        $query=$this->db->query("SELECT adsoy FROM uyeler ");
        $data["veriii"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);
		
		$this->load->view('admin\etkinlikler_duzenle_formu',$data);
	}

    public function bkl_duzenle($id)
    {
        $query=$this->db->query("SELECT * FROM bekleyen_etk WHERE Id= $id");
        $data["veri"]=$query->result();

        $query=$this->db->query("SELECT başlık FROM kategoriler ");
        $data["verii"]=$query->result();

        $query=$this->db->query("SELECT adsoy FROM uyeler ");
        $data["veriii"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);

        $this->load->view('admin\bkl_etkinlikler_duzenle_formu',$data);
    }

    public function bkl_etkinlikler_guncelle($id)
    {
        $data=array(
            'başlık'=>$this->input->post('başlık'),
            'keywords'=>$this->input->post('keywords'),
            'açıklama'=>$this->input->post('açıklama'),
            'detay'=>$this->input->post('detay'),
            'durum'=>$this->input->post('durum'),
            'editör_id'=>$this->input->post('editör_id'),
            'etkinlik_tarih'=>$this->input->post('etkinlik_tarih'),
            'kategori'=>$this->input->post('kategori'),



        );
        $this->Database_Model->update_data("bekleyen_etk",$data,$id);
        $query=$this->db->query("SELECT * FROM bekleyen_etk ORDER BY Id");
        $data["veri"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);
        $this->load->view('admin\bekleyen_etk_liste',$data);

    }
}
