<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_dashboard extends CI_Model
{
    public function national_subscribers($month)
    {
        // $this->db->distinct();
        $this->db->select('DISTINCT ON(day) SUBSTRING(day FROM 0 FOR 11) as tanggal', FALSE);
        $this->db->select('sgsn_attach_subscriber_2g_3g + mme_attach_subscriber_4g as attach', FALSE);
        $this->db->select('sgsn_active_subscriber_2g_3g + mme_active_subscriber_4g as active', FALSE);
        $this->db->select('vlr_subscriber_register as vlr', FALSE);
        $this->db->select('sgsn_attach_subscriber_2g_3g as sgsn', FALSE);
        $this->db->from('core_kqi_daily_tot');
        $this->db->where("EXTRACT(MONTH FROM TO_TIMESTAMP(day, 'MM/DD/YYYY HH24:MI'))=" . $month);
        // $this->db->group_by("day");
        $q = $this->db->get();
        return $q;
    }
    public function voice_traffic_erlang($month)
    {
        // $this->db->distinct();
        $this->db->select('DISTINCT ON(day) SUBSTRING(day FROM 0 FOR 11) as tanggal', FALSE);
        $this->db->select('voice_erlang as total');
        $this->db->select('voice_traffic_erlang_jabotabek as jabotabek');
        $this->db->select('voice_traffic_erlang_cwj as cwj');
        $this->db->select('voice_traffic_erlang_ejbn as ejbn');
        $this->db->select('voice_traffic_erlang_sumatera as sumatera');
        $this->db->select('voice_traffic_erlang_kalisumapa as kalisumapa');
        $this->db->from('core_kqi_daily_tot');
        $this->db->where("EXTRACT(MONTH FROM TO_TIMESTAMP(day, 'MM/DD/YYYY HH24:MI'))=" . $month);
        $q = $this->db->get();
        return $q;
    }
    public function network_availability($month)
    {
        // $this->db->distinct();
        $this->db->select('DISTINCT ON(day) SUBSTRING(day FROM 0 FOR 11) as tanggal', FALSE);
        $this->db->select('network_availability_4g as fourg');
        $this->db->select('network_availability_3g as threeg');
        $this->db->select('network_availability_2g as twog');
        $this->db->from('ran_kqi_daily_tot');
        $this->db->where("EXTRACT(MONTH FROM TO_TIMESTAMP(day, 'MM/DD/YYY HH24:MI'))=" . $month);
        $q = $this->db->get();
        return $q;
    }

    public function get_top10app($date)
    {

        $sql = 'SELECT * FROM top10app_traffic where daily=? order by rank_no asc';
        $response = $this->db->query($sql, $date)->result_array();
        return $response;
    }
    function gettotaltraffic()
    {
        $ddate = date("Y-m-d");
        $date = new DateTime($ddate);
        $day_minus1 = date('Y-m-d', strtotime('-1 day'));
        $day_minus2 = date('Y-m-d', strtotime('-2 day'));
        $day_minus3 = date('Y-m-d', strtotime('-3 day'));
        $day_minus4 = date('Y-m-d', strtotime('-4 day'));
        $day_minus5 = date('Y-m-d', strtotime('-5 day'));
        $day_minus6 = date('Y-m-d', strtotime('-6 day'));
        $day_minus7 = date('Y-m-d', strtotime('-7 day'));
        // if ($region = "") {
        $query = "select * from kqi_4g_national where daily in ('" . $day_minus1 . "','" . $day_minus2 . "','" . $day_minus3 . "','" . $day_minus4 . "','" . $day_minus5 . "','" . $day_minus6 . "','" . $day_minus7 . "') order by daily desc";
        // }
        // echo $query;
        // } else {
        //     $query_week_now = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from cell_level_cei_5region clcr 
        //     where daily between date '" . $week_minus1 . "' and date '" . $week_now . "'";
        //     $query_minus1 = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from cell_level_cei_5region clcr 
        //     where daily between date '" . $week_minus2 . "' and date '" . $week_minus1 . "'";
        //     $query_minus2 = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from cell_level_cei_5region clcr 
        //     where daily between date '" . $week_minus3 . "' and date '" . $week_minus2 . "'";
        //     $query_minus3 = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from cell_level_cei_5region clcr 
        //     where daily between date '" . $week_minus4 . "' and date '" . $week_minus3 . "'";
        // }



        $res1 = $this->db->query($query)->result_array();
        // return $res1;

        // $result = [
        //     [
        //         'data' => $res1->row_array()
        //     ]
        // ];

        return [
            'status' => true,
            'data' => $res1
        ];
    }
}
