<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reclamo extends Base_Controller 
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
		echo $this->templates->render('reclamo/index', $data);
	}

	public function recepcion()
	{
		$data['base_public'] = $this->base_url."public/";
		$data['base_root'] = $this->base_url;
		echo $this->templates->render('reclamo/recepcion', $data);
	}

	public function derivacion()
	{
		$data['base_public'] = $this->base_url."public/";
		$data['base_root'] = $this->base_url;
		echo $this->templates->render('reclamo/derivacion', $data);
	}

	public function pronunciamiento()
	{
		$data['base_public'] = $this->base_url."public/";
		$data['base_root'] = $this->base_url;
		echo $this->templates->render('reclamo/pronunciamiento', $data);
	}

	public function comunicacion()
	{
		$data['base_public'] = $this->base_url."public/";
		$data['base_root'] = $this->base_url;
		echo $this->templates->render('reclamo/comunicacion', $data);
	}
}