<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Model {
	
	
	public function galleryname($tab)
	{
		$this->db->select("*");
		$this->db->from($tab);
		$qry=$this->db->get();
		return $qry->result_array();
	}

	public function photo($tab)
	{	$this->db->select("*");
		$this->db->from('event evt');
		$this->db->join('event_details evd','evt.eventid=evd.parent_cateid');
		$qry=$this->db->get();
		return $qry->result_array();
	}

	}