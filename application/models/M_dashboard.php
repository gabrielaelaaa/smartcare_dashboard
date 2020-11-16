<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_dashboard extends CI_Model
{
    public function get_top10app($date)
    {

        $sql = 'SELECT * FROM top10app_traffic where daily=? order by rank_no asc';
        $response = $this->db->query($sql, $date)->result_array();
        return $response;
    }
}
