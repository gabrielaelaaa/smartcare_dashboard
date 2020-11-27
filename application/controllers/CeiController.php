<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CeiController extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_cei', 'model');
        date_default_timezone_set("etc/GMT+8");
        // if($this->session->userdata('logged_in')!=TRUE) {
        //     redirect(base_url('login'), 'refresh');
        // }
    }
    public function index()
    {

        $data = [
            // 'search_csv_flag' => $this->db->query($sql, [$this->session->userdata('username')])->num_rows(),
            'username' => $this->session->userdata('username'),
            'role' => $this->session->userdata('role'),
            'konten' => 'cei',
            'title' => 'CEI Analysis',
        ];
        $this->load->view('template/layout', $data);
        // $ddate = date("Y-m-d");
        // $date = new DateTime($ddate);
        // $week = $date->format("W");
        // $data = array(
        //     'title' => 'Dashboard',
        // );
        // $this->load->view('cei', $data);
    }

    public function loadData()
    {
        $ddate = date("Y-m-d");
        $date = new DateTime($ddate);
        $week = (int)$date->format("W");
        $weeks = [];

        $dataCellLevelCei = $this->model->getChartCeiPerRegion();
        $dataSubscriber = $this->model->getSubcriberLevelCei();
        $dataAppCeiSiteLevel = $this->model->getDataAppCeiSiteLevel();

        for ($x = 0; $x < 4; $x++) {
            $weeks[$x] = $week;
            $week--;
        }
        sort($weeks);
        echo json_encode([
            'status' => true,
            'weeks' => $weeks,
            'dataCellLevelCEI' => $dataCellLevelCei,
            'dataSubcriberLevelCei' => $dataSubscriber,
            'dataAppCeiSiteLevel'=>$dataAppCeiSiteLevel
        ]);
    }

    public function getDataSubscriberCeiRegion()
    {
        $region = $this->input->post('region');
        // echo $region;
        // die;
        $status = false;
        switch ($region) {
            case "region1":
                $dataSubscriber = $this->model->getChartCeiPerRegion("EAST JAVA_BALI NUSRA");
                $status = $dataSubscriber['status'];
                break;
            case "region2":
                $dataSubscriber = $this->model->getChartCeiPerRegion("CENTRAL_WEST JAVA");
                $status = $dataSubscriber['status'];
                break;
            case "region3":
                $dataSubscriber = $this->model->getChartCeiPerRegion("JABOTABEK");
                $status = $dataSubscriber['status'];
                break;
            case "region4":
                $dataSubscriber = $this->model->getChartCeiPerRegion("KALISUMAPA");
                $status = $dataSubscriber['status'];
                break;
            case "region5":
                $dataSubscriber = $this->model->getChartCeiPerRegion("SUMATERA");
                $status = $dataSubscriber['status'];
                break;
            default:
                $dataSubscriber['msg'] = "Region tidak ditemukan";
        }

        $res = [
            "status" => $status,
            "msg" => $status == false ? $dataSubscriber['msg'] : "",
            "data" => $status == true ? $dataSubscriber['data'] : "",
        ];
        // $res = $region != null ? $this->model->getChartCeiPerRegion($region) : "data tidak di temukan";
        echo json_encode($res);
        // var_dump($data['data']);
        // die;
    }

    public function getDataAppCeiSiteLevel()
    {
        $region = $this->input->post('region');
        // echo $region;
        // die;
        $status = false;
        switch ($region) {
            case "region1":
                $dataSubscriber = $this->model->getDataAppCeiSiteLevel("EAST JAVA_BALI NUSRA");
                $status = $dataSubscriber['status'];
                break;
            case "region2":
                $dataSubscriber = $this->model->getDataAppCeiSiteLevel("CENTRAL_WEST JAVA");
                $status = $dataSubscriber['status'];
                break;
            case "region3":
                $dataSubscriber = $this->model->getDataAppCeiSiteLevel("JABOTABEK");
                $status = $dataSubscriber['status'];
                break;
            case "region4":
                $dataSubscriber = $this->model->getDataAppCeiSiteLevel("KALISUMAPA");
                $status = $dataSubscriber['status'];
                break;
            case "region5":
                $dataSubscriber = $this->model->getDataAppCeiSiteLevel("SUMATERA");
                $status = $dataSubscriber['status'];
                break;
            default:
                $dataSubscriber['msg'] = "Region tidak ditemukan";
        }

        $res = [
            "status" => $status,
            "msg" => $status == false ? $dataSubscriber['msg'] : "",
            "data" => $status == true ? $dataSubscriber['data'] : "",
        ];
        // $res = $region != null ? $this->model->getChartCeiPerRegion($region) : "data tidak di temukan";
        echo json_encode($res);
        // var_dump($data['data']);
        // die;
    }
    public function getSubcriberLevelCei()
    {
        $region = $this->input->post('region');
        // echo $region;
        // die;
        $status = false;
        switch ($region) {
            case "region1":
                $dataSubscriber = $this->model->getSubcriberLevelCei("EAST JAVA_BALI NUSRA");
                $status = $dataSubscriber['status'];
                break;
            case "region2":
                $dataSubscriber = $this->model->getSubcriberLevelCei("CENTRAL_WEST JAVA");
                $status = $dataSubscriber['status'];
                break;
            case "region3":
                $dataSubscriber = $this->model->getSubcriberLevelCei("JABOTABEK");
                $status = $dataSubscriber['status'];
                break;
            case "region4":
                $dataSubscriber = $this->model->getSubcriberLevelCei("KALISUMAPA");
                $status = $dataSubscriber['status'];
                break;
            case "region5":
                $dataSubscriber = $this->model->getSubcriberLevelCei("SUMATERA");
                $status = $dataSubscriber['status'];
                break;
            default:
                $dataSubscriber['msg'] = "Region tidak ditemukan";
        }

        $res = [
            "status" => $status,
            "msg" => $status == false ? $dataSubscriber['msg'] : "",
            "data" => $status == true ? $dataSubscriber['data'] : "",
        ];
        // $res = $region != null ? $this->model->getChartCeiPerRegion($region) : "data tidak di temukan";
        echo json_encode($res);
        // var_dump($data['data']);
        // die;
    }

    public function getDataAppLevel()
    {
        $data = $this->model->getDataAppCeiSiteLevel();
        $res = [
            'status' => true,
            'data' => $data,
        ];
        // $res = $region != null ? $this->model->getChartCeiPerRegion($region) : "data tidak di temukan";
        echo json_encode($res);
    }

    public function getTime()
    {
        $ddate = date("Y-m-d");
        $date = new DateTime($ddate);
        $week = (int)$date->format("W");

        $week_now = date('Y-m-d');
        $week_minus1 = date('Y-m-d', strtotime('-1 Thursday'));
        $week_minus2 = date('Y-m-d', strtotime('-2 Thursday'));
        $week_minus3 = date('Y-m-d', strtotime('-3 Thursday'));
        $week_minus4 = date('Y-m-d', strtotime('-4 Thursday'));

        $query_week_now = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from subscriber_cei clcr 
            where daily between date '" . $week_minus1 . "' and date '" . $week_now . "'";
        $query_minus1 = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from subscriber_cei clcr 
            where daily between date '" . $week_minus2 . "' and date '" . $week_minus1 . "'";
        $query_minus2 = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from subscriber_cei clcr 
            where daily between date '" . $week_minus3 . "' and date '" . $week_minus2 . "'";
        $query_minus3 = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from subscriber_cei clcr 
            where daily between date '" . $week_minus4 . "' and date '" . $week_minus3 . "'";

        $query_week_now = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from cell_level_cei_5region clcr 
            where daily between date '" . $week_minus1 . "' and date '" . $week_now . "'";
        $query_minus1 = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from cell_level_cei_5region clcr 
            where daily between date '" . $week_minus2 . "' and date '" . $week_minus1 . "'";
        $query_minus2 = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from cell_level_cei_5region clcr 
            where daily between date '" . $week_minus3 . "' and date '" . $week_minus2 . "'";
        $query_minus3 = "select AVG(promoter) as promoter, AVG(passive) as passive, AVG(detractor) as detractor from cell_level_cei_5region clcr 
            where daily between date '" . $week_minus4 . "' and date '" . $week_minus3 . "'";

        echo $query_week_now;
        echo "<br>";
        echo $query_minus1; 
        echo "<br>";
        echo $query_minus2; 
        echo "<br>";
        echo $query_minus3; 
    }
}
