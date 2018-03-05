<?php
class Prefacturacionlibre extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if(!($this->modsesion->logedin()))
			header("location: ".base_url("sesiones/logout"));
	}
	public function index($idcliente=0,$idgenerador=0)
	{
		$this->load->model('modcliente');
		$this->load->model('modgenerador');
		$head=$this->load->view('html/head',array(),true);
		$menumain=$this->load->view('menu/menumain',array(),true);
		$filtros=array(
			"identificador"=>$this->input->post('frm_prefer_identificador'),
			"generador"=>$this->input->post('frm_prefer_generador')
		);
		$generadores=$this->modgenerador->getAllFiltered($filtros);
		$generadores=$generadores!==false?$generadores:array();
		$body=$this->load->view('Prefacturacionlibre/index',array(
			"menumain"=>$menumain,
			"filtros"=>$filtros,
			),true);
		$this->load->view('html/html',array("head"=>$head,"body"=>$body));
	}



	/*public function index()

	{
		$this->load->model('modcliente');
		$this->load->model('modgenerador');
		$head=$this->load->view('html/head',array(),true);
		$menumain=$this->load->view('menu/menumain',array(),true);
		$generador=($idgenerador>0?$this->modgenerador->getAll($idgenerador):array());
		$filtros=array(
			"identificador"=>$this->input->post('frm_prefer_identificador'),
		);

	}*/
}
?>