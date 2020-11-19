<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
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
		$this->load->model('M_dashboard');

		if($this->session->userdata('logged_in')!=TRUE) {

			redirect(base_url('login'), 'refresh');
		}
	}
	public function index()
	{
		// $data = array(
		// 	'title'=>'Dashboard'
		// );
		// $this->load->view('dashboard', $data);
		$data = [

			'username' => $this->session->userdata('username'),
			'role' => $this->session->userdata('role'),
			'konten' => 'dashboard',
			'title' => 'Dashboard',
			'natsubscriber' => json_encode($this->M_dashboard->national_subscribers(11)->result()),
			'voicetraffic' => json_encode($this->M_dashboard->voice_traffic_erlang(11)->result()),
			'networkavailability' => json_encode($this->M_dashboard->network_availability(11)->result())
		];
		$this->load->view('template/layout', $data);
	}
	public function network_availability()
	{
		// $data = array(
		// 	'title'=>'Dashboard'
		// );
		// $this->load->view('dashboard', $data);
		$data = [
			// 'search_csv_flag' => $this->db->query($sql, [$this->session->userdata('username')])->num_rows(),
			'username' => $this->session->userdata('username'),
			'role' => $this->session->userdata('role'),
			'konten' => 'network_availability',
			'title' => 'Network Availability',
		];
		$this->load->view('template/layout', $data);
	}
	public function traffic_monitoring()
	{
		$data = [
			// 'search_csv_flag' => $this->db->query($sql, [$this->session->userdata('username')])->num_rows(),
			'username' => $this->session->userdata('username'),
			'role' => $this->session->userdata('role'),
			'konten' => 'traffic_monitoring',
			'title' => 'Traffic Monitoring',
		];
		$this->load->view('template/layout', $data);
	}
	public function top10app()
	{
		$date = $this->input->post('date');
		// echo $date;
		$data = $this->M_dashboard->get_top10app($date);
		echo json_encode($data);
	}
}
