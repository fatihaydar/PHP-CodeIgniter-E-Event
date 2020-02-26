<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uyeler extends CI_Controller {

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
		$query=$this->db->query("SELECT * FROM kullanıcılar ORDER BY adsoy");
		$data["veriler"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);
		$this->load->view('admin\uyeler_liste',$data);
	}
	
	public function ekle()
	{
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);
		
		$this->load->view('admin\uyeler_ekle');
		
		
	}
	public function ekle_kaydet()
	{
		$data=array(
			'adsoy' => $this->input->post('adsoy'),
			'email' => $this->input->post('email'),
			'sifre' => $this->input->post('sifre'),
            'yetki' => $this->input->post('yetki'),

			);

		$this->db->insert("kullanıcılar",$data);
		$this->session->set_flashdata("mesaj","Kullanıcı kaydı gerçekleştirildi");
		redirect(base_url().'admin/uyeler');
	}
	
	public function duzenle($id)
	{
		$query=$this->db->query("SELECT * FROM kullanıcılar WHERE Id= $id");
		$data["veri"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM mesajlar WHERE durum='okunmadi'");
        $data["sayi"]=$query->result();
        $query=$this->db->query("SELECT COUNT(*) FROM bekleyen_etk WHERE sayi='onaylanmadı'");
        $data["sayi2"]=$query->result();
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar',$data);
		
		$this->load->view('admin\uyeler_duzenle_formu',$data);
	}
	public function guncelle($id)
	{
		$data=array(
			'adsoy' => $this->input->post('adsoy'),
			'email' => $this->input->post('email'),
			'sifre' => $this->input->post('sifre'),
            'yetki' => $this->input->post('yetki'),
			);

		$this->load->model('Database_Model');
		$this->Database_Model->update_data("kullanıcılar",$data,$id);
        $this->session->set_flashdata("mesaj"," Kullanıcı güncellendi..");
		redirect(base_url().'admin/uyeler');
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

        $this->load->view('admin/uyeler_resimekle',$data);
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

            $this->load->view('admin/uyeler_resimekle', $error);
        }
        else
        {
            $data = $this->upload->data();
            $dosyaadi=$data["file_name"];
            //  $this->load->view('upload_success', $data);

            $data=array(
                'resim'=>$dosyaadi


            );
            $this->Database_Model->update_data("kullanıcılar",$data,$id);
            $this->session->set_flashdata("mesaj"," Resim eklendi..");

            redirect(base_url().'admin/uyeler');
        }

    }
	
	public function sil($id)
	{
		$this->db->query("DELETE FROM kullanıcılar WHERE Id= $id");
		redirect(base_url().'admin/uyeler');
        $this->session->set_flashdata("mesaj"," Kullanıcı silindi..");
	}

}
