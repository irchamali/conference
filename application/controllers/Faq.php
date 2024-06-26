<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('Visitor_model', 'visitor_model');
		$this->load->model('Home_model', 'home_model');
		$this->load->model('Site_model', 'site_model');
		// $this->load->model('Contact_model', 'contact_model');
		$this->visitor_model->count_visitor();
		$this->load->helper('text');
	}

	public function index()
	{
        $data['title'] = "FAQ Penyerahan Abstrak ICALS 2024";
		$data['desc'] = "Financial Crime in the Digital Era";

        $site = $this->site_model->get_site_data()->row_array();
		$data['site_name'] = $site['site_name'];
		$data['site_twitter'] = $site['site_twitter'];
		$data['site_image'] = $site['site_logo_big'];
		
		$site_info = $this->db->get('tbl_site', 1)->row();
		$data['logo'] =  $site_info->site_logo_header;
		$data['icon'] = $site_info->site_favicon;
		$data['header'] = $this->load->view('layout/header2', $data, TRUE);
		$data['footer'] = $this->load->view('layout/footer', '', TRUE);
		$this->load->view('faq_view', $data);
	}
}
