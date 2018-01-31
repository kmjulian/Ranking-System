<?php
class Regional_model extends CI_Model 
{

    function __construct()
    {
        parent:: __construct();
    }

    function get_regions()
    {
    	$this->db->select('*');
    	$this->db->from('region');

    	$query = $this->db->get();
    	return $query->result();
    }

    function get_provinces($regionId)
    {
        $this->db->select("*");
        $this->db->from('province');
        $this->db->where('regionId', $regionId);

        $query = $this->db->get();
        return $query->result();
    }

    function get_cities($provinceid)
    {
        $this->db->select('*');
        $this->db->from('city');
        $this->db->where('provinceid', $provinceid);

        $query = $this->db->get();
        return $query->result();
    }

    function get_barangays($cityId)
    {
        $this->db->select('*');
        $this->db->from('barangay');
        $this->db->where('cityId', $cityId);

        $query = $this->db->get();
        return $query->result();
    }

    function get_schools($barangayId)
    {
        $this->db->select('*');
        $this->db->from('school');
        $this->db->where('barangayId', $barangayId);

        $query = $this->db->get();
        return $query->result();
    }

    function ins_school($schoolName, $barangayId)
    {

        $data = array(
         'schoolName' => $schoolName,
         'barangayId' => $barangayId
        );

        $this->db->insert('school', $data);
    }
}