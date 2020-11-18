<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {
    public function national_subscribers($month) {
        // $this->db->distinct();
        $this->db->select('DISTINCT ON(day) SUBSTRING(day FROM 0 FOR 11) as tanggal', FALSE);
        $this->db->select('sgsn_attach_subscriber_2g_3g + mme_attach_subscriber_4g as attach', FALSE);
        $this->db->select('sgsn_active_subscriber_2g_3g + mme_active_subscriber_4g as active', FALSE);
        $this->db->select('vlr_subscriber_register as vlr', FALSE);
        $this->db->select('sgsn_attach_subscriber_2g_3g as sgsn', FALSE);
        $this->db->from('core_kqi_daily_tot');
        $this->db->where("EXTRACT(MONTH FROM TO_TIMESTAMP(day, 'MM/DD/YYYY HH24:MI'))=".$month);
        // $this->db->group_by("day");
        $q = $this->db->get();
        return $q;
    }
    public function voice_traffic_erlang($month) {
        // $this->db->distinct();
        $this->db->select('DISTINCT ON(day) SUBSTRING(day FROM 0 FOR 11) as tanggal', FALSE);
        $this->db->select('voice_erlang as total');
        $this->db->select('voice_traffic_erlang_jabotabek as jabotabek');
        $this->db->select('voice_traffic_erlang_cwj as cwj');
        $this->db->select('voice_traffic_erlang_ejbn as ejbn');
        $this->db->select('voice_traffic_erlang_sumatera as sumatera');
        $this->db->select('voice_traffic_erlang_kalisumapa as kalisumapa');
        $this->db->from('core_kqi_daily_tot');
        $this->db->where("EXTRACT(MONTH FROM TO_TIMESTAMP(day, 'MM/DD/YYYY HH24:MI'))=".$month);
        $q = $this->db->get();
        return $q;
    }
    public function network_availability($month) {
        // $this->db->distinct();
        $this->db->select('DISTINCT ON(day) SUBSTRING(day FROM 0 FOR 11) as tanggal', FALSE);
        $this->db->select('network_availability_4g as fourg');
        $this->db->select('network_availability_3g as threeg');
        $this->db->select('network_availability_2g as twog');
        $this->db->from('ran_kqi_daily_tot');
        $this->db->where("EXTRACT(MONTH FROM TO_TIMESTAMP(day, 'MM/DD/YYY HH24:MI'))=".$month);
        $q = $this->db->get();
        return $q;
    }
    public function get_top10app($date)
    {

        $sql = 'SELECT * FROM top10app_traffic where daily=? order by rank_no asc';
        $response = $this->db->query($sql, $date)->result_array();
        return $response;

    }
}
