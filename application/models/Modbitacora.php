<?php
class Modbitacora extends CI_Model
{
	private $idbitacora;
	private $nombre;
	private $fecha;
	private $manifiestos;
	private $idruta;
	private $idsucursal;
	private $identificador;
	public function __construct()
	{
		parent::__construct();
		$this->idbitacora=0;
		$this->nombre="";
		$this->fecha="";
		$this->manifiestos=array();
		$this->idruta=0;
		$this->idsucursal=0;
		$this->identificador="";
	}
	public function getIdbitacora() { return $this->idbitacora; }
	public function getNombre() { return $this->nombre; }
	public function getFecha() { return $this->fecha; }
	public function getManifiestos() { return $this->manifiestos; }
	public function getIdruta() { return $this->idruta; }
	public function getIdsucursal() { return $this->idsucursal; }
	public function getIdentificador() 
	{ 
		if($this->identificador!="")
			return $this->identificador; 
		return "Id: ".$this->idbitacora;
	}
	public function setIdbitacora($valor) { $this->idbitacora= intval($valor); }
	public function setNombre($valor) { $this->nombre= "".$valor; }
	public function setFecha($valor) { $this->fecha= "".$valor; }
	public function setManifiestos($valor) { if(is_array($valor)) $this->manifiestos=$valor; else array_push($this->manifiestos,$valor); }
	public function setIdruta($valor) { $this->idruta= intval($valor); }
	public function setIdsucursal($valor) { $this->idsucursal= intval($valor); }
	public function setIdentificador($valor) { $this->identificador= "".$valor; }
	public function getFromDatabase($id=0)
	{
		if($this->idbitacora==""||$this->idbitacora==0)
		{
			if($id>0)
				$this->idbitacora=$id;
			else
				return false;
		}
		$this->db->where('idbitacora',$this->idbitacora);
		$regs=$this->db->get('bitacora');
		$this->db->reset_query();
		if($regs->num_rows()==0)
			return false;
		$reg=$regs->row_array();
		$this->setIdbitacora($reg["idbitacora"]);
		$this->setNombre($reg["nombre"]);
		$this->setFecha($reg["fecha"]);
		$this->setIdentificador($reg["identificador"]);
		$this->db->where('idbitacora',$this->idbitacora);
		$regs=$this->db->get('relbitman');
		$this->db->reset_query();
		$this->setManifiestos(array());
		if($regs->num_rows()>0) foreach($regs->result_array() as $reg)
			$this->setManifiestos($reg["idmanifiesto"]);
		$this->db->where('idbitacora',$this->idbitacora);
		$regs=$this->db->get('relbitrut');
		$this->db->reset_query();
		if($regs->num_rows()>0) foreach($regs->result_array() as $reg)
			$this->setIdruta($reg["idruta"]);
		$this->db->where('idbitacora',$this->idbitacora);
		$regs=$this->db->get('relsucbit');
		$this->db->reset_query();
		if($regs->num_rows()>0) foreach($regs->result_array() as $reg)
			$this->setIdsucursal($reg["idsucursal"]);
		return true;
	}
	public function getFromInput()
	{
		$this->setIdbitacora($this->input->post("frm_bitacora_idbitacora"));
		$this->setNombre($this->input->post("frm_bitacora_nombre"));
		$this->setFecha($this->input->post("frm_bitacora_fecha"));
		$this->setManifiestos($this->input->post("frm_bitacora_manifiestos"));
		$this->setIdruta($this->input->post("frm_bitacora_idruta"));
		$this->setIdsucursal($this->input->post("frm_bitacora_idsucursal"));
		$this->setIdentificador($this->input->post("frm_bitacora_identificador"));
	}
	public function addToDatabase()
	{
		$data=array(
			"nombre"=>$this->nombre,
			"fecha"=>$this->fecha,
			"identificador"=>$this->identificador
		);
		$this->db->insert("bitacora",$data);
		$this->setIdbitacora($this->db->insert_id());
		$this->db->reset_query();
		if($this->idruta!="" && $this->idruta>0) {
			$this->db->insert("relbitrut",array(
				"idbitacora"=>$this->idbitacora,
				"idruta"=>$this->idruta
				));
			$this->db->reset_query();
		}
		$this->db->insert("relsucbit",array(
			"idbitacora"=>$this->idbitacora,
			"idsucursal"=>$this->idsucursal
			));
		$this->db->reset_query();
		if($this->manifiestos!=false) foreach($this->manifiestos as $man) {
			$this->db->insert("relbitman",array(
				"idbitacora"=>$this->idbitacora,
				"idmanifiesto"=>$man
			));
			$this->db->reset_query();
		}
	}
	public function updateToDatabase($id=0)
	{
		if($this->idbitacora==""||$this->idbitacora==0)
		{
			if($id>0)
				$this->idbitacora=$id;
			else
				return false;
		}
		$data=array(
			"nombre"=>$this->nombre,
			"fecha"=>$this->fecha,
			"identificador"=>$this->identificador
		);
		$this->db->where("idbitacora",$this->idbitacora);
		$this->db->update("bitacora",$data);
		$this->db->reset_query();
	}
	public function getAll($idsucursal=0, $filtros = array())
	{
		if($idsucursal>0)
			$this->db->where("idbitacora in (select idbitacora from relsucbit where idsucursal=$idsucursal)");
		if( isset( $filtros[ "identificador"] ) && "" != $filtros[ "identificador"] ) {
			$this->db->where( "( identificador like '%" . $filtros[ "identificador"] . "%' or nombre like '%" . $filtros[ "identificador"] . "%' )" );
		}
		if( isset( $filtros[ "ruta" ] ) && "" != $filtros[ "ruta" ] ) {
			$this->db->where( "idbitacora in ( select idbitacora from relbitrut where idruta in ( select idruta from ruta where identificador like '%" . $filtros[ "ruta" ] . "%' or nombre like '%" . $filtros[ "ruta" ] . "%' ) )" );
		}
		if( isset( $filtros[ "fecha" ] ) && "" != $filtros[ "fecha" ] ) {
			$this->db->where( "fecha", $filtros[ "fecha" ] );
		}
		$this->db->order_by('nombre');
		$regs=$this->db->get('bitacora');
		$this->db->reset_query();
		if($regs->num_rows()==0)
			return false;
		return $regs->result_array();
	}
	public function delete($id=0)
	{
		//Elimina la relacion con la ruta pero la deja viva
		//Elimina la relacion con la sucursal pero la deja viva
		//Elimina la relacion con el manifiesto pero lo deja vivo
		if($this->idbitacora==""||$this->idbitacora==0)
		{
			if($id>0)
				$this->idbitacora=$id;
			else
				return false;
		}
		$this->db->where('idbitacora',$this->idbitacora);
		$this->db->delete(array('relsucbit','relbitrut','relbitman','bitacora'));
		$this->db->reset_query();
	}
	public function nextIdentificador($idsucursal)
	{
		$idsuc=$idsucursal;
		$suc=new Modsucursal();
		$suc->setIdsucursal($idsuc);
		$suc->getFromDatabase();
		$regs=$this->db->query("SELECT MAX(CAST(REPLACE( identificador, '{$suc->getIniciales()}', '') AS UNSIGNED)) AS identificador FROM (`bitacora`) WHERE `identificador` like '{$suc->getIniciales()}%'");
		$max=($regs->num_rows()>0?intval($regs->row_array()["identificador"]):0);
		return $suc->getIniciales().($max+1);
	}
	public function getFromIdentificador($identificador)
	{
		$this->db->where("identificador",$identificador);
		$this->db->order_by('identificador');
		$regs=$this->db->get('bitacora');
		$this->db->reset_query();
		if($regs->num_rows()==0)
			return false;
		return $regs->result_array();
	}
}
?>
