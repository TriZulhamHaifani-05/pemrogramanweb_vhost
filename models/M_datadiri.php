<?php
defined('BASEPATH')OR exit('no direct script acces allowed');

class M_datadiri extends CI_model{

	public function getdatadiri()
	{
		//cara 1
		return $this->db->get('tbl_datadiri',1)->row();

		// //cara 2
		// $this->db->select('*');
		// $this->db->from('tbl_datadiri');
		// $this->db->limit(1);
		// return $this->db->get()->row();

		// //cara 3
		// $query="SELECT * FROM tbl_datadiri limit 1";
		// return $this->db->query('$query')->row();
	}

	public function getdataorganisasi()
	{
		//cara 1
		return $this->db->get('tbl_organisasi');

		// //cara 2
		// $this->db->select('*');
		// $this->db->from('tbl_organisasi');
		// $this->db->limit(1);
		// return $this->db->get()->row();

		// //cara 3
		// $query="SELECT * FROM tbl_organisasi limit 1";
		// return $this->db->query('$query')->row();
	}

	public function getdatakeahlian()
	{
		//cara 1
		return $this->db->get('tbl_keahlian');

		// //cara 2
		// $this->db->select('*');
		// $this->db->from('tbl_keahlian');
		// $this->db->limit(1);
		// return $this->db->get()->row();

		// //cara 3
		// $query="SELECT * FROM tbl_keahlian limit 1";
		// return $this->db->query('$query')->row();
	}
	
}