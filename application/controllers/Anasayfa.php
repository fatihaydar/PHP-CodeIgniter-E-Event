<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anasayfa extends CI_Controller {

	public function __construct()
	{ 
			parent::__construct();
			$this->load->helper('url');
            $this->load->database();
        $this->load->model('Database_Model');


	}


	public function email_gonder()
    {

                $config = array(
                    "protocol"  =>"smtp",
                    "smtp_host" =>"ssl://smtp.gmail.com",
                    "smtp_port" =>"465",
                    "smtp_user" =>"",
                    "smtp_pass" =>"",
                    "charset"   =>"utf-8",
                    "mailtype"  =>"html",
                    "wordwrap"  => true,


                );

                $this->load->library("email",$config);


                $this->email->from("");
                $this->email->to("","");
                $this->email->subject("");
                $this->email->message("");
                $this->email->set_newline("\r\n");

                $send = $this->email->send();
                if ($send)
                {
                    echo "Gönderim işlemi Başarılı";

                }
                else {
                    echo "gönderim işlemi başarısız";
                    echo $this->email->print_debugger();


                }
            }



	public function index()
	{
        $query=$this->db->query("SELECT * FROM etkinlikler WHERE durum='active' ORDER BY Id LIMIT 6");
        $data["veri"]=$query->result();

        $query=$this->db->query("SELECT facebook,twitter,instagram,pinterest FROM ayarlar  ");
        $data["sosyal"]=$query->result();



        $query=$this->db->query("SELECT * FROM etkinlikler WHERE kategori='haber' ORDER BY Id desc LIMIT 1");
        $data["son"]=$query->result();

        $query=$this->db->query("SELECT * FROM etkinlikler WHERE kategori='aktivite' ORDER BY Id desc LIMIT 4");
        $data["aktivite"]=$query->result();

        $query=$this->db->query("SELECT * FROM etkinlikler WHERE kategori='haber' ORDER BY Id desc LIMIT 4");
        $data["haberr"]=$query->result();

        $query=$this->db->query("SELECT * FROM etkinlikler  ORDER BY Id desc LIMIT 4");
        $data["dort"]=$query->result();

        $query=$this->db->query("SELECT * FROM kategoriler  ORDER BY Id ");
        $data["kategori"]=$query->result();

        $query=$this->db->query("SELECT * FROM etkinlikler  WHERE kategori='duyuru'ORDER BY Id desc LIMIT 4");
        $data["veriii"]=$query->result();

        $query=$this->db->query("SELECT * FROM etkinlikler  WHERE kategori='katilim'ORDER BY Id desc LIMIT 4");
        $data["veriiii"]=$query->result();

        $query=$this->db->query("SELECT * FROM etkinlikler  WHERE kategori='makale' ORDER BY Id desc LIMIT 4");
        $data["makale"]=$query->result();

        $query=$this->db->query("SELECT * FROM etkinlikler  WHERE kategori='haber' ORDER BY Id desc LIMIT 8");
        $data["haber"]=$query->result();

        $query=$this->db->query("SELECT * FROM mesajlar  ORDER BY Id");
        $data["yorum"]=$query->result();

        $query=$this->db->query("SELECT * FROM dernek  ORDER BY Id");
        $data["verii"]=$query->result();

        $query=$this->db->query("SELECT * FROM bilgiler  ORDER BY Id");
        $data["bilgii"]=$query->result();



		$this->load->view('home\_header',$data);
        $this->load->view('home\anasayfa',$data);
		$this->load->view('home\_footer');





		
	}


    public function tumicerik()
    {


        $query=$this->db->query("SELECT * FROM dernek  ORDER BY Id");
        $data["verii"]=$query->result();

        $query=$this->db->query("SELECT facebook,twitter,instagram,pinterest FROM ayarlar  ");
        $data["sosyal"]=$query->result();

        $query=$this->db->query("SELECT * FROM bilgiler  ORDER BY Id");
        $data["bilgii"]=$query->result();

        $query=$this->db->query("SELECT * FROM etkinlikler  WHERE kategori='haber' ORDER BY Id desc LIMIT 8");
        $data["haber"]=$query->result();

        $query=$this->db->query("SELECT * FROM etkinlikler ORDER BY Id desc LIMIT 50");
        $data["icrk"]=$query->result();

        $query=$this->db->query("SELECT * FROM etkinlikler ORDER BY Id desc LIMIT 5");
        $data["etk"]=$query->result();

        $this->load->view('home\_header',$data);
        $this->load->view('home\tmicerik',$data);
        $this->load->view('home\_footer');

    }

    public function etkinlige_git($id)
    {

        $query=$this->db->query("SELECT * FROM etkinlikler WHERE Id= $id");
        $data["veri"]=$query->result();

        $query=$this->db->query("SELECT facebook,twitter,instagram,pinterest FROM ayarlar  ");
        $data["sosyal"]=$query->result();

        $query=$this->db->query("SELECT * FROM dernek  ORDER BY Id");
        $data["verii"]=$query->result();

        $query=$this->db->query("SELECT * FROM bilgiler  ORDER BY Id");
        $data["bilgii"]=$query->result();

        $query=$this->db->query("SELECT * FROM etkinlikler  WHERE kategori='haber' ORDER BY Id desc LIMIT 8");
        $data["haber"]=$query->result();

        $query=$this->db->query("SELECT * FROM etkinlik_resimler  WHERE etkinlik_id=$id");
        $data["foto"]=$query->result();
        $query=$this->db->query("SELECT * FROM etkinlikler ORDER BY Id desc LIMIT 5");
        $data["etk"]=$query->result();
        if ($this->session->uye_session["id"] != NULL) {
            $uye_id = $this->session->uye_session["id"];
            $query = $this->db->query("SELECT * FROM etk_katilim  WHERE etkinlik_id=$id and uye_id=$uye_id");
            $data["etkk"] = $query->result();
        }
        else{
            $data["etkk"]=NULL;
        }

        $this->load->view('home\_header',$data);
        $this->load->view('home\etkinlik_ayrinti',$data);
        $this->load->view('home\_footer');

    }

    public function uye_ol()
    {
        $query=$this->db->query("SELECT * FROM etkinlikler ORDER BY Id desc LIMIT 5");
        $data["etk"]=$query->result();

        $query=$this->db->query("SELECT facebook,twitter,instagram,pinterest FROM ayarlar  ");
        $data["sosyal"]=$query->result();

        $query=$this->db->query("SELECT * FROM dernek  ORDER BY Id");
        $data["verii"]=$query->result();

        $query=$this->db->query("SELECT * FROM bilgiler  ORDER BY Id");
        $data["bilgii"]=$query->result();

        $query=$this->db->query("SELECT * FROM etkinlikler  WHERE kategori='haber' ORDER BY Id desc LIMIT 8");
        $data["haber"]=$query->result();

        $this->load->view('home\_header',$data);
        $this->load->view('home\uye_kayit',$data);
        $this->load->view('home\_footer');

    }

    public function videolar()
    {
        $query=$this->db->query("SELECT * FROM dernek  ORDER BY Id");
        $data["verii"]=$query->result();

        $query=$this->db->query("SELECT facebook,twitter,instagram,pinterest FROM ayarlar  ");
        $data["sosyal"]=$query->result();

        $query=$this->db->query("SELECT * FROM bilgiler  ORDER BY Id");
        $data["bilgii"]=$query->result();

        $query=$this->db->query("SELECT * FROM etkinlikler  WHERE kategori='haber' ORDER BY Id desc LIMIT 8");
        $data["haber"]=$query->result();

        $query=$this->db->query("SELECT * FROM videolar ORDER BY Id desc LIMIT 50");
        $data["videoo"]=$query->result();

        $query=$this->db->query("SELECT * FROM etkinlikler ORDER BY Id desc LIMIT 5");
        $data["etk"]=$query->result();

        $this->load->view('home\_header',$data);
        $this->load->view('home\videolar',$data);
        $this->load->view('home\_footer');
    }

    public function uye_kaydet()
    {
        $tele=$this->input->post('tel');
        $sif=$this->input->post('sifre');
        $ad=$this->input->post('email');

        $tel = preg_replace('/[^0-9]/', '', $tele);





        $tuzunluk=strlen($tel);
        if ($tuzunluk != 11){
            header("Refresh: 1; url=http://www.fatihaydar.com/anasayfa/uye_ol");
            echo "Lütfen 11 haneli Telefon numaranızı girin..";
            die();
        }


        if(strstr($sif, " ")) {
            header("Refresh: 1; url=http://www.fatihaydar.com/anasayfa/uye_ol");
            echo "Lütfen geçerli bir şifre girin..";

            die(); }
        if(strstr($tel, " ")) {
            header("Refresh: 1; url=http://www.fatihaydar.com/anasayfa/uye_ol");
            echo "Lütfen geçerli bir telefon girin..";

            die(); }






        $adres=strstr($ad, '@', true);
        $uzunluk=strlen($adres);

        if ($uzunluk>30 || $uzunluk<6)
        {
            header("Refresh: 1; url=http://www.fatihaydar.com/anasayfa/uye_ol");
            echo "E-mail adresiniz en az 6 en fazla 30 karakterden oluşmalıdır...";

            die();
        }

        $sif=$this->input->post('sifre');

        $sifr=strlen($sif);
        if ($sifr<6 || $sifr>15)
        {
            header("Refresh: 1; url=http://www.fatihaydar.com/anasayfa/uye_ol");
            echo "Şifreniz en az 6 en fazla 15 karakterden oluşmalıdır...";

            die();
        }

        $query=$this->db->query("SELECT email FROM uyeler  WHERE email='$ad'");
        $te["email"]=$query->result();
        foreach ($te["email"] as $fe) {
            $yeni=$fe->email;

            if ($yeni == $ad) {
                header("Refresh: 1; url=http://www.fatihaydar.com/anasayfa/uye_ol");
                echo "Bu E-Mail ile daha önce kayıt olunmuş..";

                die();
            }

        }


             $data = array(
                 'adsoy' => $this->input->post('adsoy'),
                 'sifre' => $this->input->post('sifre'),
                 'email' => $this->input->post('email'),
                 'cinsiyet' => $this->input->post('cinsiyet'),
                 'tel' => $this->input->post('tel'),
             );
             $email = $this->input->post("email");
             $sifre = $this->input->post("sifre");

             $this->db->insert("uyeler", $data);
             $this->load->model('Database_Model');
             $result = $this->Database_Model->login("uyeler", $email, $sifre);
             $sess_array = array(
                 'id' => $result[0]->Id,
                 'adsoy' => $result[0]->adsoy,
                 'email' => $result[0]->email
             );
             // sessiona atama
             $this->session->set_userdata("uye_session", $sess_array);

             redirect(base_url() . 'anasayfa');


    }
    public function ayarlar_dernek($id)
    {
        $query=$this->db->query("SELECT * FROM dernek WHERE Id= $id");
        $data["veri"]=$query->result();
        $query=$this->db->query("SELECT * FROM dernek  ORDER BY Id");
        $data["verii"]=$query->result();
        $query=$this->db->query("SELECT * FROM bilgiler  ORDER BY Id");
        $data["bilgii"]=$query->result();
        $query=$this->db->query("SELECT * FROM etkinlikler  WHERE kategori='haber' ORDER BY Id desc LIMIT 8");
        $data["haber"]=$query->result();
        $query=$this->db->query("SELECT * FROM etkinlikler ORDER BY Id desc LIMIT 5");
        $data["etk"]=$query->result();

        $query=$this->db->query("SELECT facebook,twitter,instagram,pinterest FROM ayarlar  ");
        $data["sosyal"]=$query->result();

        $this->load->view('home\_header',$data);
        $this->load->view('home\dernek',$data);
        $this->load->view('home\_footer');
    }

    public function ayarlar_bilgi($id)
    {
        $query=$this->db->query("SELECT * FROM bilgiler WHERE Id= $id");
        $data["bilgi"]=$query->result();
        $query=$this->db->query("SELECT * FROM bilgiler  ORDER BY Id");
        $data["bilgii"]=$query->result();
        $query=$this->db->query("SELECT * FROM dernek  ORDER BY Id");
        $data["verii"]=$query->result();
        $query=$this->db->query("SELECT * FROM etkinlikler  WHERE kategori='haber' ORDER BY Id desc LIMIT 8");
        $data["haber"]=$query->result();
        $query=$this->db->query("SELECT * FROM etkinlikler ORDER BY Id desc LIMIT 5");
        $data["etk"]=$query->result();

        $query=$this->db->query("SELECT facebook,twitter,instagram,pinterest FROM ayarlar  ");
        $data["sosyal"]=$query->result();

        $this->load->view('home\_header',$data);
        $this->load->view('home\bilgiler',$data);
        $this->load->view('home\_footer');
    }

    public function giris_git()
    {
        $query=$this->db->query("SELECT * FROM etkinlikler ORDER BY Id desc LIMIT 5");
        $data["etk"]=$query->result();

        $query=$this->db->query("SELECT * FROM dernek  ORDER BY Id");
        $data["verii"]=$query->result();

        $query=$this->db->query("SELECT * FROM bilgiler  ORDER BY Id");
        $data["bilgii"]=$query->result();

        $query=$this->db->query("SELECT * FROM etkinlikler  WHERE kategori='haber' ORDER BY Id desc LIMIT 8");
        $data["haber"]=$query->result();

        $query=$this->db->query("SELECT facebook,twitter,instagram,pinterest FROM ayarlar  ");
        $data["sosyal"]=$query->result();
        $data["uyari"]=' ';
        $this->load->view('home\_header',$data);
        $this->load->view('home\giris',$data);
        $this->load->view('home\_footer');

    }

    public function giris_yap()
    {
        $email=$this->input->post("email");
        $sifre=$this->input->post("sifre");

        // Zararlı kodları temizler

        echo $email = $this->security->xss_clean($email);
        echo $sifre = $this->security->xss_clean($sifre);
        $this->load->model('Database_Model');
//        var_dump($sifre);
//        var_dump($email);
//        die();
        if($email and $sifre) {
            $result = $this->Database_Model->login("uyeler", $email, $sifre);

            if($result) {
                $sess_array = array(
                    'id' => $result[0]->Id,
                    'adsoy' => $result[0]->adsoy,
                    'email' => $result[0]->email
                );
                // sessiona atama
                $this->session->set_userdata("uye_session", $sess_array);
//              var_dump($sess_array);
//              die();
                redirect(base_url() . 'anasayfa');
            }
            else {
                $this->session->set_flashdata("mesaj", "Hatalı kullanıcı adı yada şifre!");
                $query=$this->db->query("SELECT * FROM etkinlikler ORDER BY Id desc LIMIT 5");
                $data["etk"]=$query->result();

                $query=$this->db->query("SELECT * FROM dernek  ORDER BY Id");
                $data["verii"]=$query->result();

                $query=$this->db->query("SELECT * FROM bilgiler  ORDER BY Id");
                $data["bilgii"]=$query->result();

                $query=$this->db->query("SELECT * FROM etkinlikler  WHERE kategori='haber' ORDER BY Id desc LIMIT 8");
                $data["haber"]=$query->result();

                $data["uyari"]='Hatalı email yada şifre!';

                $query=$this->db->query("SELECT facebook,twitter,instagram,pinterest FROM ayarlar  ");
                $data["sosyal"]=$query->result();

                $this->load->view('home\_header',$data);
                $this->load->view('home\giris',$data);
                $this->load->view('home\_footer');
            }
        }
        else
        {
            redirect(base_url().'anasayfa');
        }
//       }

    }



    public function bize_ulas()
    {
        $query=$this->db->query("SELECT iletişim FROM ayarlar ORDER BY Id");
        $data["iletisim"]=$query->result();
        $query=$this->db->query("SELECT * FROM etkinlikler ORDER BY Id desc LIMIT 5");
        $data["etk"]=$query->result();

        $query=$this->db->query("SELECT * FROM bilgiler  ORDER BY Id");
        $data["bilgii"]=$query->result();
        $query=$this->db->query("SELECT * FROM dernek  ORDER BY Id");
        $data["verii"]=$query->result();
        $query=$this->db->query("SELECT * FROM etkinlikler  WHERE kategori='haber' ORDER BY Id desc LIMIT 8");
        $data["haber"]=$query->result();

        $query=$this->db->query("SELECT facebook,twitter,instagram,pinterest FROM ayarlar  ");
        $data["sosyal"]=$query->result();

        $this->load->view('home\_header',$data);
        $this->load->view('home\bize_ulas',$data);
        $this->load->view('home\_footer');

    }

    public function resimekle($id)
    {
        $query=$this->db->query("SELECT * FROM bilgiler  ORDER BY Id");
        $data["bilgii"]=$query->result();
        $query=$this->db->query("SELECT * FROM dernek  ORDER BY Id");
        $data["verii"]=$query->result();
        $query=$this->db->query("SELECT * FROM etkinlikler  WHERE kategori='haber' ORDER BY Id desc LIMIT 8");
        $data["haber"]=$query->result();
        $query=$this->db->query("SELECT * FROM etkinlikler ORDER BY Id desc LIMIT 5");
        $data["etk"]=$query->result();

        $query=$this->db->query("SELECT facebook,twitter,instagram,pinterest FROM ayarlar  ");
        $data["sosyal"]=$query->result();
        $data["id"]=$id;
        $this->load->view('home\_header',$data);
        $this->load->view('home\uye_resimekle',$data);
        $this->load->view('home\_footer');
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

            $this->load->view('home\uye_resimekle', $error);
        }
        else
        {
            $data = $this->upload->data();
            $dosyaadi=$data["file_name"];
            //  $this->load->view('upload_success', $data);

            $data=array(
                'resim'=>$dosyaadi


            );
            $this->Database_Model->update_data("uyeler",$data,$id);
            $this->session->set_flashdata("mesaj","Profil resmi eklendi..");

            redirect(base_url().'anasayfa');
        }

    }

    public function galeriekle($id)
    {
        $query=$this->db->query("SELECT * FROM bilgiler  ORDER BY Id");
        $data["bilgii"]=$query->result();
        $query=$this->db->query("SELECT * FROM dernek  ORDER BY Id");
        $data["verii"]=$query->result();
        $query=$this->db->query("SELECT * FROM etkinlikler  WHERE kategori='haber' ORDER BY Id desc LIMIT 8");
        $data["haber"]=$query->result();
        $query=$this->db->query("SELECT * FROM etkinlikler ORDER BY Id desc LIMIT 5");
        $data["etk"]=$query->result();
        $query=$this->db->query("SELECT * FROM etkinlik_resimler WHERE  etkinlik_id=$id");
        $data["veriler"]=$query->result();

        $query=$this->db->query("SELECT facebook,twitter,instagram,pinterest FROM ayarlar  ");
        $data["sosyal"]=$query->result();
        $data["id"]=$id;
        $this->load->view('home\_header',$data);
        $this->load->view('home\etkinlik_galeriekle',$data);
        $this->load->view('home\_footer');
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

            $this->load->view('home/etkinlik_galeriekle',$data);
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

            redirect(base_url().'anasayfa');
        }

    }

    public function mesaj_kaydet()
    {
        $data=array(
            'adsoy'=>$this->input->post('adsoy'),
            'email'=>$this->input->post('email'),
            'mesaj'=>$this->input->post('mesaj'),
        );
        $data["durum"]="okunmadı";

        $this->db->insert("mesajlar",$data);

        redirect(base_url().'anasayfa');
    }

    public function etkinlik_katil($id)
    {
        $data=array(
            'etkinlik_id'=>$id,
            'uye_id'=>$this->session->uye_session["id"],
        );

        $this->db->insert("etk_katilim",$data);
        $uye_id=$this->session->uye_session["id"];

        $query=$this->db->query("SELECT * FROM etkinlikler WHERE Id= $id");
        $data["veri"]=$query->result();

        $query=$this->db->query("SELECT facebook,twitter,instagram,pinterest FROM ayarlar  ");
        $data["sosyal"]=$query->result();

        $query=$this->db->query("SELECT * FROM dernek  ORDER BY Id");
        $data["verii"]=$query->result();

        $query=$this->db->query("SELECT * FROM bilgiler  ORDER BY Id");
        $data["bilgii"]=$query->result();

        $query=$this->db->query("SELECT * FROM etkinlikler  WHERE kategori='haber' ORDER BY Id desc LIMIT 8");
        $data["haber"]=$query->result();

        $query=$this->db->query("SELECT * FROM etkinlik_resimler  WHERE etkinlik_id=$id");
        $data["foto"]=$query->result();
        $query=$this->db->query("SELECT * FROM etkinlikler ORDER BY Id desc LIMIT 5");
        $data["etk"]=$query->result();

        $query=$this->db->query("SELECT * FROM etk_katilim  WHERE etkinlik_id=$id and uye_id=$uye_id");
        $data["etkk"]=$query->result();

        $this->load->view('home\_header',$data);
        $this->load->view('home\etkinlik_ayrinti',$data);
        $this->load->view('home\_footer');

    }

    public function cikis()
    {
        $this->session->sess_destroy();

        redirect(base_url().'anasayfa');
    }

    public function video_sil($id)
    {
        $this->db->query("DELETE FROM videolar WHERE Id= $id");

        redirect(base_url().'anasayfa');

    }

    public function video_ekle($id)
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
        echo "Video Ekleme Başarılı..";
        header("Refresh: 0.5; url=http://www.fatihaydar.com/anasayfa");
        }
        else{
            header("Refresh: 1; url=http://www.fatihaydar.com/anasayfa");

            echo "Video eklenemedi lütfen talimatları tekrar uygulayın..";


        }
    }

    public function profil($idd)
    {


        $id2 = substr_replace($idd, '', -5);
        $id5  = substr($id2,5);
        $id=$id5;

        $query=$this->db->query("SELECT * FROM videolar WHERE ekleyen_id=$id");
        $data["videolar"]=$query->result();


        $query=$this->db->query("SELECT * FROM uyeler WHERE Id=$id");
        $data["veri"]=$query->result();
        $query=$this->db->query("SELECT * FROM etkinlikler  WHERE kategori='haber' ORDER BY Id desc LIMIT 8");
        $data["haber"]=$query->result();
        $query=$this->db->query("SELECT * FROM dernek  ORDER BY Id");
        $data["verii"]=$query->result();

        $query=$this->db->query("SELECT facebook,twitter,instagram,pinterest FROM ayarlar  ");
        $data["sosyal"]=$query->result();

        $query=$this->db->query("SELECT * FROM bilgiler  ORDER BY Id");
        $data["bilgii"]=$query->result();

        $query=$this->db->query("SELECT adsoy FROM uyeler  WHERE Id=$id");
        $rr=$query->result();

        foreach ($rr as $rs)
        {
            $query=$this->db->query("SELECT * FROM etkinlikler  WHERE editör_id='$rs->adsoy'");
            $data["icerik"]=$query->result();
        }
        $this->load->view('home\_header',$data);
        $this->load->view('home\profil',$data);
        $this->load->view('home\_footer');
    }

    public function profil_duzenle($id)
    {
        $data=array(
            'adsoy'=>$this->input->post('adsoy'),
            'sifre'=>$this->input->post('sifre'),
            'email'=>$this->input->post('email'),
            'tel'=>$this->input->post('tel'),
            'cinsiyet'=>$this->input->post('cinsiyet'),

        );
        $this->load->model('Database_Model');
        $this->Database_Model->update_data("uyeler",$data,$id);

        $query=$this->db->query("SELECT * FROM uyeler WHERE Id=$id");
        $data["veri"]=$query->result();
        $query=$this->db->query("SELECT * FROM etkinlikler  WHERE kategori='haber' ORDER BY Id desc LIMIT 8");
        $data["haber"]=$query->result();
        $query=$this->db->query("SELECT * FROM dernek  ORDER BY Id");

        $query=$this->db->query("SELECT facebook,twitter,instagram,pinterest FROM ayarlar  ");
        $data["sosyal"]=$query->result();
        $data["verii"]=$query->result();

        $query=$this->db->query("SELECT * FROM bilgiler  ORDER BY Id");
        $data["bilgii"]=$query->result();

        $this->load->view('home\_header',$data);
        $this->load->view('home\profil',$data);
        $this->load->view('home\_footer');
    }
    public function icerik_duzenleme($id)
    {
        $query=$this->db->query("SELECT * FROM etkinlikler  WHERE Id=$id");
        $data["icerikk"]=$query->result();

        $query=$this->db->query("SELECT facebook,twitter,instagram,pinterest FROM ayarlar  ");
        $data["sosyal"]=$query->result();

        $query=$this->db->query("SELECT * FROM etkinlik_resimler  WHERE etkinlik_id=$id");
        $data["foto"]=$query->result();

        $query=$this->db->query("SELECT * FROM etkinlikler  WHERE kategori='haber' ORDER BY Id desc LIMIT 8");
        $data["haber"]=$query->result();
        $query=$this->db->query("SELECT * FROM dernek  ORDER BY Id");
        $data["verii"]=$query->result();

        $query=$this->db->query("SELECT * FROM bilgiler  ORDER BY Id");
        $data["bilgii"]=$query->result();
        $query=$this->db->query("SELECT * FROM kategoriler  ORDER BY Id");
        $data["kategori"]=$query->result();

        $this->load->view('home\_header',$data);
        $this->load->view('home\icerik_duzenle',$data);
        $this->load->view('home\_footer');
    }
    public function icerik_duzenle($id)
    {
        $query=$this->db->query("SELECT * FROM etkinlikler  WHERE Id=$id");
        $rr=$query->result();
        foreach ($rr as $rs)
        {
            $data=array(
                'detay'=>$this->input->post('detay'),
                'başlık'=>$this->input->post('başlık'),
                'açıklama'=>$this->input->post('açıklama'),
                'kategori'=>$this->input->post('kategori'),
                'editör_id'=>$rs->editör_id,
                'keywords'=>$rs->keywords,
                'etkinlik_tarih'=>$rs->etkinlik_tarih,
                'durum'=>$rs->durum,
                'resim'=>$rs->resim,


                );

        }
        $this->load->model('Database_Model');

        $this->db->insert("bekleyen_etk",$data);

        $this->db->query("DELETE FROM etkinlikler WHERE Id= $id");

        redirect(base_url().'anasayfa');

    }
    public function icerik_ekle($id)
    {
        $query=$this->db->query("SELECT * FROM uyeler WHERE Id=$id");
        $data["veri"]=$query->result();


        $query=$this->db->query("SELECT facebook,twitter,instagram,pinterest FROM ayarlar  ");
        $data["sosyal"]=$query->result();
        $query=$this->db->query("SELECT * FROM etkinlikler  WHERE kategori='haber' ORDER BY Id desc LIMIT 8");
        $data["haber"]=$query->result();
        $query=$this->db->query("SELECT * FROM dernek  ORDER BY Id");
        $data["verii"]=$query->result();

        $query=$this->db->query("SELECT * FROM bilgiler  ORDER BY Id");
        $data["bilgii"]=$query->result();
        $query=$this->db->query("SELECT * FROM kategoriler  ORDER BY Id");
        $data["kategori"]=$query->result();


        $this->load->view('home\_header',$data);
        $this->load->view('home\icerik_ekle',$data);
        $this->load->view('home\_footer');
    }
    public function icerik_ekle_kaydet($id)
    {
        $query=$this->db->query("SELECT adsoy FROM uyeler WHERE Id=$id");
        $data["adsoy"]=$query->result();
        foreach($data["adsoy"] as $rc) {
        $data=array(
            'başlık'=>$this->input->post('başlık'),
            'keywords'=>$this->input->post('keywords'),
            'açıklama'=>$this->input->post('açıklama'),
            'detay'=>$this->input->post('detay'),
            'editör_id'=>$rc->adsoy,
            'kategori'=>$this->input->post('kategori'),


        );
        $data["sayi"]='onaylanmadı';
        }
        $this->db->insert("bekleyen_etk",$data);

        redirect(base_url().'anasayfa');
    }


    public function login()
    {


        $this->load->view('home\_header');
        $this->load->view('home\login');
        $this->load->view('home\_footer');

    }

    public function giris()
    {


        $this->load->view('home\_header');
        $this->load->view('home\giris');
        $this->load->view('home\_footer');

    }
    public function uyepanel()
    {
         $id=$this->session->uye_session["id"];
         $query=$this->db->query("SELECT * FROM uyeler WHERE Id=$id");
         $data["veri"]=$query->result();


        $this->load->view('home\uye_paneli',$data);


    }





    public function foto()
    {
        $query=$this->db->query("SELECT * FROM etkinlik_resimler  ORDER BY Id LIMIT 20");
        $data["fotog"]=$query->result();
        $query=$this->db->query("SELECT * FROM etkinlik_resimler  ORDER BY Id LIMIT 4");
        $data["fotogg"]=$query->result();

        $query=$this->db->query("SELECT * FROM etkinlikler  ORDER BY Id");
        $data["veri"]=$query->result();

        $query=$this->db->query("SELECT facebook,twitter,instagram,pinterest FROM ayarlar  ");
        $data["sosyal"]=$query->result();

        $query=$this->db->query("SELECT * FROM mesajlar  ORDER BY Id");
        $data["yorum"]=$query->result();

        $query=$this->db->query("SELECT * FROM dernek  ORDER BY Id");
        $data["verii"]=$query->result();

        $query=$this->db->query("SELECT * FROM bilgiler  ORDER BY Id");
        $data["bilgi"]=$query->result();

        $this->load->view('home/_header',$data);
        $this->load->view('home/foto',$data);
        $this->load->view('home/_footer');

    }
	
}
