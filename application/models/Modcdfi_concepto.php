<?php
class Modcdfi_comprobante extends CI_Model
{
	private $idcdfi_concepto;
	private $idcdfi_comprobante;
	private $claveprodserv;
	private $claveprodserv_sat_id;
	private $claveprodserv_sat_txt;
	private $noidentificacion;
	private $cantidad;
	private $claveunidad;
	private $claveunidad_sat_id;
	private $claveunidad_sat_txt;
	private $unidad;
	private $descripcion;
	private $valorunitario;
	private $importe;
	private $descuento;
	private $cuentapredial_numero;
	public function __construct()
	{
		parent::__construct();
		$this->$idcdfi_concepto = 0;
	 	$this->$idcdfi_comprobante = 0;
		$this->$claveprodserv = 0;
		$this->$claveprodserv_sat_id = "";
	 	$this->$claveprodserv_sat_txt = "";
		$this->$noidentificacion = "";
	 	$this->$cantidad = 0.0;
	 	$this->$claveunidad = 0;
	 	$this->$claveunidad_sat_id = "";
		$this->$claveunidad_sat_txt= "";
	 	$this->$unidad = 0;
	 	$this->$descripcion = "";
	 	$this->$valorunitario = 0.0;
		$this->$importe = 0.0;
	 	$this->$descuento = 0.0; 
	 	$this->$cuentapredial_numero = "";
	}
	//Definiciones de functiones get
	public function getIdcfdi_concepto() { return $this->idcdfi_concepto; }
	public function getIdcfdi_comprobante() { return $this->idcdfi_comprobante; }
	public function getClaveprodserv() { return $this->claveprodserv; }
	public function getClaveprodserv_sat_id() { return $this->claveprodserv_sat_id; }
	public function getClaveprodserv_sat_txt() { return $this->claveunidad_sat_txt; }
	public function getNoidentificacion() { return $this->noidentificacion; }
	public function getCantidad() { return $this->cantidad; }
	public function getClaveunidad() { return $this->claveunidad; }
	public function getClaveunidad_sat_id() { return $this->claveunidad_sat_id; }
	public function getClaveunidad_sat_txt() { return $this->claveunidad_sat_txt; }
	public function getUnidad() { return $this->unidad; }
	public function getDescripcion() { return $this->descripcion; }
	public function getValorunitario() { return $this->valorunitario; }
	public function getImporte() { return $this->importe; }
	public function getDescuento() { return $this->descuento; }
	public function getCuentapredial_numero() { return $this->cuentapredial_numero; }
	public function setIdcfdi_concepto($valor) { return $this->idcdfi_concepto = intval($valor); }
	public function setIdcfdi_comprobante($valor) { return $this->idcdfi_comprobante = intval($valor); }
	public function setClaveprodserv($valor) { return $this->claveprodserv = intval($valor); }
	public function setClaveprodserv_sat_id($valor) { return $this->claveprodserv_sat_id = "".$valor; }
	public function setClaveprodserv_sat_txt($valor) { return $this->claveunidad_sat_txt = "".$valor; }
	public function setNoidentificacion($valor) { return $this->noidentificacion = "".$valor; }
	public function setCantidad($valor) { return $this->cantidad = floatval( $valor ); }
	public function setClaveunidad($valor) { return $this->claveunidad = "".$valor; }
	public function setClaveunidad_sat_id($valor) { return $this->claveunidad_sat_id = "".$valor; }
	public function setClaveunidad_sat_txt($valor) { return $this->claveunidad_sat_txt = "".$valor; }
	public function setUnidad($valor) { return $this->unidad = "".$valor; }
	public function setDescripcion($valor) { return $this->descripcion = floatval( $valor ); }
	public function setValorunitario($valor) { return $this->valorunitario = floatval( $valor ); }
	public function setImporte($valor) { return $this->importe = floatval( $valor ); }
	public function setDescuento($valor) { return $this->descuento = floatval( $valor ); }
	public function setCuentapredial_numero($valor) { return $this->cuentapredial_numero = "".$valor; }
	public function getFromDatabase($id=0)
	{
		if( $this->idcdfi_concepto == "" || $this->idcdfi_concepto == 0 )
		{
			if( $id > 0)
				$this->idcdfi_concepto=$id;
			else
				return false;
		}
		$this->db->where('idcdfi_concepto',$this->idcdfi_concepto);
		$regs=$this->db->get('cfdi_concepto');
		$this->db->reset_query();
		if($regs->num_rows()==0) {
			return false;
		}
		$reg=$regs->row_array();
		$this->setIdcdi_concepto( $reg[ "idcdfi_concepto" ] );
		$this->setIdcfdi_comprobante( $reg[ "idcdfi_comprobante" ] );
		$this->setClaveprodserv( $reg[ "claveprodserv" ] );
		$this->setClaveprodserv_sat_id( $reg[ "claveprodserv_sat_id" ] );
		$this->setClaveunidad_sat_txt( $reg[ "claveprodserv_sat_txt" ] );
		$this->setNoidentificacion( $reg[ "noidentificacion" ] );
		$this->setCantidad( $reg[ "cantidad" ] );
		$this->setClaveunidad( $reg[ "claveunidad" ] );
		$this->setClaveunidad_sat_id( $reg[ "claveunidad_sat_id" ] );
		$this->setClaveunidad_sat_txt( $reg[ "claveunidad_sat_txt" ] );
		$this->setUnidad( $reg[ "unidad" ] );
		$this->setDescripcion( $reg[ "descripcion" ] );
		$this->setValorunitario( $reg[ "valorunitario" ] );
		$this->setImporte( $reg[ "importe" ] );
		$this->setDescuento( $reg[ "descuento" ] );
		$this->setCuentapredial_numero( $reg[ "cuentapredial_numero" ] );
		return true;
	}
	public function getFromInput()
	{
		$this->setIdcfdi_concepto( $this->input->post( "frm_cfdi_concepto_idcdfi_concepto" ) );
		$this->setIdcfdi_comprobante( $this->input->post( "frm_cfdi_concepto_idcdfi_comprobante" ) );
		$this->setClaveprodserv( $this->input->post( "frm_cfdi_concepto_claveprodserv" ) );
		$this->setClaveunidad_sat_id( $this->input->post( "frm_cfdi_concepto_claveprodserv_sat_id" ) );
		$this->setClaveunidad_sat_txt( $this->input->post( "frm_cfdi_concepto_claveprodserv_sat_txt" ) );
		$this->setNoidentificacion( $this->input->post( "frm_cfdi_concepto_noidentificacion" ) );
		$this->setCantidad( $this->input->post( "frm_cfdi_concepto_cantidad" ) );
		$this->setClaveunidad( $this->input->post( "frm_cfdi_concepto_claveunidad" ) );
		$this->setClaveunidad_sat_id( $this->input->post( "frm_cfdi_concepto_claveunidad_sat_id" ) );
		$this->setClaveunidad_sat_txt( $this->input->post( "frm_cfdi_concepto_claveunidad_sat_txt" ) );
		$this->setUnidad( $this->input->post( "frm_cfdi_concepto_unidad" ) );
		$this->setDescripcion( $this->input->post( "frm_cfdi_concepto_descripcion" ) );
		$this->setValorunitario( $this->input->post( "frm_cfdi_concepto_valorunitario" ) );
		$this->setImporte( $this->input->post( "frm_cfdi_concepto_importe" ) );
		$this->setDescuento( $this->input->post( "frm_cfdi_concepto_descuento" ) );
		$this->setCuentapredial_numero( $this->input->post( "frm_cfdi_concepto_cuentapredial_numero" ) );
		return true;
	}
	public function addToDatabase()
	{
		$data=array(
			"idcdfi_comprobante" => $this->idcdfi_comprobante,
			"claveprodserv" => $this->claveprodserv,
			"claveprodserv_sat_id" => $this->claveprodserv_sat_id,
			"claveprodserv_sat_txt" => $this->claveprodserv_sat_txt,
			"noidentificacion" => $this->noidentificacion,
			"cantidad" => $this->cantidad,
			"claveunidad" => $this->claveunidad,
			"claveunidad_sat_id" => $this->claveunidad_sat_id,
			"claveprodserv_sat_txt" => $this->claveprodserv_sat_txt,
			"unidad" => $this->unidad,
			"descripcion" => $this->descripcion,
			"valorunitario" => $this->valorunitario,
			"importe" => $this->importe,
			"descuento" => $this->descuento,
			"cuentapredial_numero" => $this->cuentapredial_numero
		);
		$this->db->insert('cfdi_concepto', $data );
		$this->setIdcfdi_concepto( $this->db->insert_id() );
		$this->db->reset_query();
	}
	public function updateToDatabase($id=0)
	{
		if( $this->idcdfi_concepto == "" || $this->idcdfi_concepto == 0)
		{
			if( $id > 0 )
				$this->idcdfi_concepto = $id;
			else
				return false;
		}
		$data=array(
			"idcdfi_comprobante" => $this->idcdfi_comprobante,
			"claveprodserv" => $this->claveprodserv,
			"claveprodserv_sat_id" => $this->claveprodserv_sat_id,
			"claveprodserv_sat_txt" => $this->claveprodserv_sat_txt,
			"noidentificacion" => $this->noidentificacion,
			"cantidad" => $this->cantidad,
			"claveunidad" => $this->claveunidad,
			"claveunidad_sat_id" => $this->claveunidad_sat_id,
			"claveprodserv_sat_txt" => $this->claveprodserv_sat_txt,
			"unidad" => $this->unidad,
			"descripcion" => $this->descripcion,
			"valorunitario" => $this->valorunitario,
			"importe" => $this->importe,
			"descuento" => $this->descuento,
			"cuentapredial_numero" => $this->cuentapredial_numero
		);
		$this->db->where( 'idcdfi_concepto', $this->idcdfi_concepto );
		$this->db->update( 'cfdi_concepto', $data );
		$this->db->reset_query();
		return true;
	}
	public function getAll()
	{
		$this->db->order_by('idcdfi_concepto');
		$regs=$this->db->get('cfdi_concepto');
		$this->db->reset_query();
		if( $regs->num_rows() == 0 )
			return false;
		return $regs->result_array();
	}
	public function delete($id=0)
	{
		if( $this->idcdfi_concepto == "" || $this->idcdfi_concepto == 0)
		{
			if( $id > 0 )
				$this->idcdfi_concepto = $id;
			else
				return false;
		}
		$this->db->where('idcdfi_concepto',$this->idcdfi_concepto);
		$this->db->delete( array('cfdi_concepto' ) );
		$this->db->reset_query();
	}
}
?>
