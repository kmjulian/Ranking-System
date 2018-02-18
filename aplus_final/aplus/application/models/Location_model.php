<?php
class Location_model extends CI_Model 
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

    function validate_location($regionId, $provinceId, $cityId, $barangayId, $schoolId)
    {
        $array = array(
                'region.regionId' => $regionId,
                'province.provinceId' => $provinceId,
                'city.cityId' => $cityId,
                'barangay.barangayId' => $barangayId,
                'school.schoolId' => $schoolId
            );

        $this->db->select('*');
        $this->db->from('region');
        $this->db->join('province', 'region.regionId = province.regionId', 'left');
        $this->db->join('city', 'province.provinceId = city.provinceId', 'left');
        $this->db->join('barangay', 'city.cityId = barangay.cityId', 'left');
        $this->db->join('school', 'barangay.barangayId = school.barangayId', 'left');
        $this->db->where($array);

        $query = $this->db->get();
        return $query->result();
    }
}