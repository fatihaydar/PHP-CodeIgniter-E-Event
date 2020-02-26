<?php
class Database_model extends CI_Model {
		public function __construct()
		{
				parent::__construct();
				
		}	
		public function login ($tablo,$email,$sifre)
		{
			$this->db->select("*");
			$this->db->from($tablo);
			$this->db->where('email',$email);
			$this->db->where('sifre',$sifre);
			$this->db->limit(1);
			$query = $this->db->get();
			
			if ($query->num_rows()==1){
				return $query->result();
			} else {
				return false;
			}
		}
	public function update_data($tablo,$data,$id)
	{
		$this->db->where('Id',$id);
		$this->db->update($tablo,$data);
		return true;
	}
    public function insert_data($data,$tablo)
    {

        $this->db->insert($tablo,$data);
        return true;
    }
	function get_etkinlikler()
	{
		$query = $this->db->query('SELECT etkinlikler.*, kategori.başlık as katbaşlık
		FROM etkinlikler
		INNER JOIN kategori ON etkinlikler.kategori=kategori.Id
		order by başlık ' );
		
		return $query->result();
	}
	
	function get_etkinlik($id)
	{
		$query = $this->db->query('SELECT etkinlikler.*, kategori.başlık as katbaşlık
		FROM etkinlikler
		INNER JOIN kategori ON etkinlikler.kategori=kategori.Id
		WHERE etkinlikler.Id= '.$id );
		
		return $query->result();
	}	

}