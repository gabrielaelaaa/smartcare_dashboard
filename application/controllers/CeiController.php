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

        for ($x = 0; $x < 4; $x++) {
            $weeks[$x] = $week;
            $week--;
        }
        sort($weeks);
        echo json_encode([
            'status' => true,
            'weeks' => $weeks
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
        $data = $this->model->getDataChartAppLevel();
        $res = [
            'status' => true,
            'data' => $data,
        ];
        // $res = $region != null ? $this->model->getChartCeiPerRegion($region) : "data tidak di temukan";
        echo json_encode($res);
    }

    public function getTime()
    {
        // $week_start = strtotime('last Sunday', time());
        // $week_end = strtotime('next Sunday', time());

        // $month_start = strtotime('first day of this month', time());
        // $month_end = strtotime('last day of this month', time());

        // $year_start = strtotime('first day of January', time());
        // $year_end = strtotime('last day of December', time());
        // echo "The time is " . date("H:i:s") . "<br/>";
        // echo date('D, M jS Y', $week_start) . '<br/>';
        // echo date('D, M jS Y', $week_end) . '<br/>';

        // echo date('D, M jS Y', $month_start) . '<br/>';
        // echo date('D, M jS Y', $month_end) . '<br/>';

        // echo date('D, M jS Y', $year_start) . '<br/>';
        // echo date('D, M jS Y', $year_end) . '<br/>';
        // echo strtotime("last Monday");

        $ddate = date("Y-m-d");
        // echo $ddate;
        // $ddate = "2012-10-18";
        $date = new DateTime($ddate);
        $week = $date->format("W");
        // echo "Weeknummer: $week";
        // echo "<br>";
        echo "Weeknummer: " . $week;

        echo "<br>";
        echo date('Y-m-d'); //last Thursday
        echo "<br>";
        echo date('Y-m-d', strtotime('-1 Thursday')); //last Thursday
        echo "<br>";
        echo date('Y-m-d', strtotime('-2 Thursday')); //two Thursdays ago
        echo "<br>";
        echo date('Y-m-d', strtotime('-3 Thursday')); //two Thursdays ago
        // echo "<br>";
        // echo date('Y-m-d', strtotime('+1 Thursday')); //next Monday
        // echo "<br>";
        // echo date('Y-m-d', strtotime('Wednesday')); //next Monday

        // $now = new DateTime();
        // $now->setTimezone(new DateTimeZone('etc/GMT+8'));
        // echo $now->format('g:i A');
    }
}
