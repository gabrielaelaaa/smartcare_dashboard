<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_cei extends CI_Model
{
    function getChartCeiPerRegion($region)
    {
        // $res = $this->db->query("select region, sum(promoter)as promoter, sum(passive)as passive, sum(detractor) as detractor from subscriber_cei sc
        // where region = '" . $region . "' group by region");
        $res = $this->db->query("select region, promoter ,  passive ,  detractor from subscriber_cei sc
        where region = '" . $region . "' limit 4");
        // daily between '2020-11-11' and '2020-11-15' and 
        if ($res->num_rows() > 0) {
            // $res_temp = [];
            // $i = 0 ; 
            // foreach($res->result_array() as $row){
            //     $res[$i] = 
            // }
            return [
                'status' => true,
                'data' => $res->result_array()
            ];
        } else {
            return [
                'status' => false,
                'msg' => "data tidak ada/kosong"
            ];
        }
    }

    function getDataChartAppLevel(){
        $res = $this->db->limit(4)->get('site_level_subs_segment_cei');
        return $res->result_array();
    }
}
