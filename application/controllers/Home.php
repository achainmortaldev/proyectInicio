<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Base_Controller 
{
	protected $base_url = "";
	public function __construct()
    {
        parent::__construct();
        $this->base_url = $this->config->base_url();
    }
	
	public function index()
	{
		$data['base_public'] = $this->base_url."public/";
		$data['base_root'] = $this->base_url;
		echo $this->templates->render('home/index', $data);
	}
}
