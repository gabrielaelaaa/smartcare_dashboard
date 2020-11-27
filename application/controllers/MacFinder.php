<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MacFinder extends CI_Controller
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
		$this->load->model('M_macfinder');
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
            'konten' => 'mac_finder',
            'title' => 'Mac Address Finder'
        ];
        $this->load->view('template/layout', $data);

    }
    public function showran()
    {
        $draw = intval($this->input->post("draw"));
        $start = intval($this->input->post("start"));
        $length = intval($this->input->post("length"));
        $order = $this->input->post("order");
        $search= $this->input->post("search");
        $search = $search['value'];
        $col = 0;
        $dir = "";
        if(!empty($order))
        {
            foreach($order as $o)
            {
                $col = $o['column'];
                $dir= $o['dir'];
            }
        }

        if($dir != "asc" && $dir != "desc")
        {
            $dir = "desc";
        }
        $valid_columns = array(
            0=>'id',
            1=>'vendor',
            2=>'ne_name',
            3=>'vlan_id',
            4=>'vlan_port',
            5=>'ipormask',
            6=>'next_hop',
            7=>'mask',
            8=>'mac_address',
            9=>'user_label'
        );
        $search_columns = array(
            0=>'vendor',
            1=>'ne_name',
            2=>'vlan_id',
            3=>'vlan_port',
            4=>'ipormask',
            5=>'next_hop',
            6=>'mask',
            7=>'mac_address',
            8=>'user_label'
        );
        if(!isset($valid_columns[$col]))
        {
            $order = null;
        }
        else
        {
            $order = $valid_columns[$col];
        }
        if($order !=null)
        {
            $this->db->order_by($order, $dir);
        }
        
        if(!empty($search))
        {
            $x=0;
            foreach($search_columns as $sterm)
            {
                if($x==0)
                {
                    $this->db->like($sterm,$search);
                }
                else
                {
                    $this->db->or_like($sterm,$search);
                }
                $x++;
            }                 
        }
        $this->db->limit($length,$start);
        $ran = $this->db->get("ran_mac");
        $data = array();
        foreach($ran->result() as $rows)
        {

            $data[]= array(
                $rows->id,
                $rows->vendor,
                $rows->ne_name,
                $rows->vlan_id,
                $rows->vlan_port,
                $rows->ipormask,
                $rows->next_hop,
                $rows->mask,
                $rows->mac_address,
                $rows->user_label,
                '<a href="#" class="btn btn-warning mr-1">Edit</a>
                 <a href="#" class="btn btn-danger mr-1">Delete</a>'
            );     
        }
        $total_ran = $this->totalRan();
        $output = array(
            "draw" => $draw,
            "recordsTotal" => $total_ran,
            "recordsFiltered" => $total_ran,
            "data" => $data
        );
        echo json_encode($output);
        exit();
    }
    public function totalRan()
    {
        $query = $this->db->select("COUNT(*) as num")->get("ran_mac");
        $result = $query->row();
        if(isset($result)) return $result->num;
        return 0;
    }
    public function showmicrowave()
    {
        $draw = intval($this->input->post("draw"));
        $start = intval($this->input->post("start"));
        $length = intval($this->input->post("length"));
        $order = $this->input->post("order");
        $search= $this->input->post("search");
        $search = $search['value'];
        $col = 0;
        $dir = "";
        if(!empty($order))
        {
            foreach($order as $o)
            {
                $col = $o['column'];
                $dir= $o['dir'];
            }
        }

        if($dir != "asc" && $dir != "desc")
        {
            $dir = "desc";
        }
        $valid_columns = array(
            0=>'id',
            1=>'vendor',
            2=>'ip_address',
            3=>'ne_name',
            4=>'slot_port',
            5=>'mac_address',
            6=>'vlan',
            7=>'interface'
        );
        $search_columns = array(
            0=>'vendor',
            1=>'ip_address',
            2=>'ne_name',
            3=>'slot_port',
            4=>'mac_address',
            5=>'vlan',
            6=>'interface'
        );
        if(!isset($valid_columns[$col]))
        {
            $order = null;
        }
        else
        {
            $order = $valid_columns[$col];
        }
        if($order !=null)
        {
            $this->db->order_by($order, $dir);
        }
        
        if(!empty($search))
        {
            $x=0;
            foreach($search_columns as $sterm)
            {
                if($x==0)
                {
                    $this->db->like($sterm,$search);
                }
                else
                {
                    $this->db->or_like($sterm,$search);
                }
                $x++;
            }                 
        }
        $this->db->limit($length,$start);
        $ran = $this->db->get("microwave_mac");
        $data = array();
        foreach($ran->result() as $rows)
        {

            $data[]= array(
                $rows->id,
                $rows->vendor,
                $rows->ip_address,
                $rows->ne_name,
                $rows->slot_port,
                $rows->mac_address,
                $rows->vlan,
                $rows->interface,
                '<a href="#" class="btn btn-warning mr-1">Edit</a>
                 <a href="#" class="btn btn-danger mr-1">Delete</a>'
            );     
        }
        $total_ran = $this->totalMicrowave();
        $output = array(
            "draw" => $draw,
            "recordsTotal" => $total_ran,
            "recordsFiltered" => $total_ran,
            "data" => $data
        );
        echo json_encode($output);
        exit();
    }
    public function totalMicrowave()
    {
        $query = $this->db->select("COUNT(*) as num")->get("microwave_mac");
        $result = $query->row();
        if(isset($result)) return $result->num;
        return 0;
    }
}
