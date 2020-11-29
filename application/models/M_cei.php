<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_cei extends CI_Model
{
    function getChartCeiPerRegion($region = "")
    {
        $ddate = date("Y-m-d");
        $date = new DateTime($ddate);
        $week = (int)$date->format("W");

        $week_now = date('Y-m-d');
        $week_minus1 = date('Y-m-d', strtotime('-1 Thursday'));
        $week_minus2 = date('Y-m-d', strtotime('-2 Thursday'));
        $week_minus3 = date('Y-m-d', strtotime('-3 Thursday'));
        $week_minus4 = date('Y-m-d', strtotime('-4 Thursday'));
        if ($region != "") {
            $query_week_now = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from cell_level_cei_5region clcr 
            where daily between date '" . $week_minus1 . "' and date '" . $week_now . "' and region = '" . $region . "'";
            $query_minus1 = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from cell_level_cei_5region clcr 
            where daily between date '" . $week_minus2 . "' and date '" . $week_minus1 . "' and region = '" . $region . "'";
            $query_minus2 = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from cell_level_cei_5region clcr 
            where daily between date '" . $week_minus3 . "' and date '" . $week_minus2 . "' and region = '" . $region . "'";
            $query_minus3 = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from cell_level_cei_5region clcr 
            where daily between date '" . $week_minus4 . "' and date '" . $week_minus3 . "' and region = '" . $region . "'";
        } else {
            $query_week_now = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from cell_level_cei_5region clcr 
            where daily between date '" . $week_minus1 . "' and date '" . $week_now. "'";
            $query_minus1 = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from cell_level_cei_5region clcr 
            where daily between date '" . $week_minus2 . "' and date '" . $week_minus1. "'";
            $query_minus2 = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from cell_level_cei_5region clcr 
            where daily between date '" . $week_minus3 . "' and date '" . $week_minus2. "'";
            $query_minus3 = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from cell_level_cei_5region clcr 
            where daily between date '" . $week_minus4 . "' and date '" . $week_minus3. "'";
        }



        $res1 = $this->db->query($query_week_now);
        $res2 = $this->db->query($query_minus1);
        $res3 = $this->db->query($query_minus2);
        $res4 = $this->db->query($query_minus3);

        $result = [
            [
                'week' => $week,
                'data' => $res1->row_array()
            ],
            [
                'week' => --$week,
                'data' => $res2->row_array()
            ],
            [
                'week' => --$week,
                'data' => $res3->row_array()
            ],
            [
                'week' => --$week,
                'data' => $res4->row_array()
            ],
        ];

        return [
            'status' => true,
            'data' => $result
        ];
    }

    function getSubcriberLevelCei($region = "")
    {
        $ddate = date("Y-m-d");
        $date = new DateTime($ddate);
        $week = (int)$date->format("W");

        $week_now = date('Y-m-d');
        $week_minus1 = date('Y-m-d', strtotime('-1 Thursday'));
        $week_minus2 = date('Y-m-d', strtotime('-2 Thursday'));
        $week_minus3 = date('Y-m-d', strtotime('-3 Thursday'));
        $week_minus4 = date('Y-m-d', strtotime('-4 Thursday'));

        if ($region != "") {
            $query_week_now = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from subscriber_cei clcr 
            where daily between date '" . $week_minus1 . "' and date '" . $week_now . "' and region = '" . $region . "'";
            $query_minus1 = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from subscriber_cei clcr 
            where daily between date '" . $week_minus2 . "' and date '" . $week_minus1 . "' and region = '" . $region . "'";
            $query_minus2 = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from subscriber_cei clcr 
            where daily between date '" . $week_minus3 . "' and date '" . $week_minus2 . "' and region = '" . $region . "'";
            $query_minus3 = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from subscriber_cei clcr 
            where daily between date '" . $week_minus4 . "' and date '" . $week_minus3 . "' and region = '" . $region . "'";
        } else {
            $query_week_now = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from subscriber_cei clcr 
            where daily between date '" . $week_minus1 . "' and date '" . $week_now. "'";
            $query_minus1 = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from subscriber_cei clcr 
            where daily between date '" . $week_minus2 . "' and date '" . $week_minus1. "'";
            $query_minus2 = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from subscriber_cei clcr 
            where daily between date '" . $week_minus3 . "' and date '" . $week_minus2. "'";
            $query_minus3 = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from subscriber_cei clcr 
            where daily between date '" . $week_minus4 . "' and date '" . $week_minus3. "'";
        }


        $res1 = $this->db->query($query_week_now);
        $res2 = $this->db->query($query_minus1);
        $res3 = $this->db->query($query_minus2);
        $res4 = $this->db->query($query_minus3);

        $result = [
            [
                'week' => $week,
                'data' => $res1->row_array()
            ],
            [
                'week' => --$week,
                'data' => $res2->row_array()
            ],
            [
                'week' => --$week,
                'data' => $res3->row_array()
            ],
            [
                'week' => --$week,
                'data' => $res4->row_array()
            ],
        ];

        return [
            'status' => true,
            'data' => $result
        ];
    }

    function getDataAppLevelCei($region = "",$week="")
    {
        // $ddate = date("Y-m-d");
        // $date = new DateTime($ddate);
        // // $week = (int)$date->format("W");

        // $week_now = date('Y-m-d');
        // $week_minus1 = date('Y-m-d', strtotime('-1 Thursday'));

        
        if($week != ""){
            $date_normal = date( "Y-m-d", strtotime("2020"."W".$week."1") );
            $date_custom_last = date("Y-m-d", strtotime($date_normal. ' Thursday'));
            $date_custom_first = date("Y-m-d", strtotime($date_custom_last . '-1 Thursday'));
            if ($region != "") {
                $query = "select AVG(sc.s0s) as s0s ,AVG(sc.s60s) as s60s ,avg(sc.s70s) s70s,avg(sc.s80s) s80s,avg(sc.s90s) s90s,sc.region, si.service_names from service_cei sc 
                INNER JOIN service_info si 
                ON sc.service_id = si.service_id 
                where daily between date '" . $date_custom_first . "' and date '" . $date_custom_last. "' and region = '" . $region . "'
                group by sc.region, service_names order by service_names asc ";
            }else{
                $query = "select AVG(sc.s0s) as s0s ,AVG(sc.s60s) as s60s ,avg(sc.s70s) s70s,avg(sc.s80s) s80s,avg(sc.s90s) s90s,sc.region, si.service_names from service_cei sc 
                INNER JOIN service_info si 
                ON sc.service_id = si.service_id 
                where daily between date '" . $date_custom_first . "' and date '" . $date_custom_last. "'
                group by sc.region, service_names order by service_names asc ";
            }
    
            // echo $date_custom;
        }else{
            $query = "select AVG(sc.s0s) as s0s ,AVG(sc.s60s) as s60s ,avg(sc.s70s) s70s,avg(sc.s80s) s80s,avg(sc.s90s) s90s,sc.region, si.service_names from service_cei sc 
            INNER JOIN service_info si 
            ON sc.service_id = si.service_id 
           
            group by sc.region, service_names order by service_names asc ";
        }
        // $week_minus2 = date('Y-m-d', strtotime('-2 Thursday'));
        // $week_minus3 = date('Y-m-d', strtotime('-3 Thursday'));
        // $week_minus4 = date('Y-m-d', strtotime('-4 Thursday'));
        // $query_week_now = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from service_cei 
        //                     where daily between date '" . $week_minus1 . "' and date '" . $week_now . "' and region = '" . $region . "'";
        // $query_minus1 = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from service_cei 
        //                     where daily between date '" . $week_minus2 . "' and date '" . $week_minus1 . "' and region = '" . $region . "'";
        // $query_minus2 = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from service_cei 
        //                     where daily between date '" . $week_minus3 . "' and date '" . $week_minus2 . "' and region = '" . $region . "'";
        // $query_minus3 = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from service_cei 
        //                     where daily between date '" . $week_minus4 . "' and date '" . $week_minus3 . "' and region = '" . $region . "'";
      

       


        $res1 = $this->db->query($query)->result_array();
        // $res2 = $this->db->query($query_minus1);
        // $res3 = $this->db->query($query_minus2);
        // $res4 = $this->db->query($query_minus3);

        // $result = [
        //     [
        //         'week' => $week,
        //         'data' => $res1->row_array()
        //     ],
        //     [
        //         'week' => --$week,
        //         'data' => $res2->row_array()
        //     ],
        //     [
        //         'week' => --$week,
        //         'data' => $res3->row_array()
        //     ],
        //     [
        //         'week' => --$week,
        //         'data' => $res4->row_array()
        //     ],
        // ];

        return [
            'status' => true,
            'data' => $res1
        ];
    }

    function getDataChartAppLevel()
    {
        $res = $this->db->limit(4)->get('site_level_subs_segment_cei');
        return $res->result_array();
    }
}
