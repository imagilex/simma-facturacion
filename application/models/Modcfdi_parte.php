<?php
class Modcfdi_parte extends CI_Model
{
	private $idcfdi_parte;
	private $idcfdi_comprobante;
	private $claveprodserv;
	private $claveprodserv_sat_id;
	private $claveprodserv_sat_txt;
	private $noidentificacion;
	private $cantidad;
	private $unidad;
	private $descripcion;
	private $valorunitario;
	private $importe;

	public function __construct()
	{
		parent::__construct();

		$this->idcfdi_parte = 0;
		$this->idcfdi_comprobante = 0;
		$this->claveprodserv = 0;
		$this->claveprodserv_sat_id = "";
		$this->claveprodserv_sat_txt = "";
		$this->noidentificacion = "";
		$this->cantidad = 0.0;
		$this->unidad = "";
		$this->descripcion = "";
		$this->valorunitario = 0.0;
		$this->importe = 0.0;
	}
	public function getIdcfdi_parte() { return $this->idcfdi_parte; }
	public function getIdcfdi_comprobante() { return $this->idcfdi_comprobante; }
	public function getClaveprodserv() { return $this->claveprodserv; }
	public function getClaveprodserv_sat_id() { return $this->claveprodserv_sat_id; }
	public function getClaveprodserv_sat_txt() { return $this->claveprodserv_sat_txt; }
	public function getNoidentificacion() { return $this->noidentificacion; }
	public function getCantidad() { return $this->cantidad; }
	public function getUnidad() { return $this->unidad; }
	public function getDescripcion() { return $this->descripcion; }
	public function getValorunitario() { return $this->valorunitario; }
	public function getImporte() { return $this->importe; }
	public function setIdcfdi_parte( $valor ) { $this->idcfdi_parte = intval( $valor ); }
	public function setIdcfdi_comprobante( $valor ) { $this->idcfdi_comprobante = intval( $valor ); }
	public function setClaveprodserv( $valor ) { $this->claveprodserv = intval( $valor ); }
	public function setClaveprodserv_sat_id( $valor ) { $this->claveprodserv_sat_id = "" . $valor; }
	public function setClaveprodserv_sat_txt( $valor ) { $this->claveprodserv_sat_txt = "" . $valor; }
	public function setNoidentificacion( $valor ) { $this->noidentificacion = "" . $valor; }
	public function setCantidad( $valor ) { $this->cantidad = floatval( $valor ); }
	public function setUnidad( $valor ) { $this->unidad = "" . $valor; }
	public function setDescripcion( $valor ) { $this->descripcion = "" . $valor; }
	public function setValorunitario( $valor ) { $this->valorunitario = floatval( $valor ); }
	public function setImporte( $valor ) { $this->importe = floatval( $valor ); }
	public function getFromDatabase($id=0)
	{
		if( $this->idcfdi_parte == "" || $this->idcfdi_parte == 0 )
		{
			if( $id > 0)
				$this->idcfdi_parte=$id;
			else
				return false;
		}
		$this->db->where('idcfdi_parte',$this->idcfdi_parte);
		$regs=$this->db->get('cfdi_parte');
		$this->db->reset_query();
		if($regs->num_rows()==0) {
			return false;
		}
		$reg=$regs->row_array();
		$this->setIdcfdi_parte( $reg[ "idcfdi_parte" ] );
		$this->setIdcfdi_comprobante( $reg[ "idcfdi_comprobante" ] );
		$this->setClaveprodserv( $reg[ "claveprodserv" ] );
		$this->setClaveprodserv_sat_id( $reg[ "claveprodserv_sat_id" ] );
		$this->setClaveprodserv_sat_txt( $reg[ "claveprodserv_sat_txt" ] );
		$this->setNoidentificacion( $reg[ "noidentificacion" ] );
		$this->setCantidad( $reg[ "cantidad" ] );
		$this->setUnidad( $reg[ "unidad" ] );
		$this->setDescripcion( $reg[ "descripcion" ] );
		$this->setValorunitario( $reg[ "valorunitario" ] );
		$this->setImporte( $reg[ "importe" ] );
		return true;
	}
	public function getFromInput()
	{
		$this->setIdcfdi_parte( $this->input->post( "frm_cfdi_parte_idcfdi_parte" ) );
		$this->setIdcfdi_comprobante( $this->input->post( "frm_cfdi_parte_idcfdi_comprobante" ) );
		$this->setClaveprodserv( $this->input->post( "frm_cfdi_parte_claveprodserv" ) );
		$this->setClaveprodserv_sat_id( $this->input->post( "frm_cfdi_parte_claveprodserv_sat_id" ) );
		$this->setClaveprodserv_sat_txt( $this->input->post( "frm_cfdi_parte_claveprodserv_sat_txt" ) );
		$this->setNoidentificacion( $this->input->post( "frm_cfdi_parte_noidentificacion" ) );
		$this->setCantidad( $this->input->post( "frm_cfdi_parte_cantidad" ) );
		$this->setUnidad( $this->input->post( "frm_cfdi_parte_unidad" ) );
		$this->setDescripcion( $this->input->post( "frm_cfdi_parte_descripcion" ) );
		$this->setValorunitario( $this->input->post( "frm_cfdi_parte_valorunitario" ) );
		$this->setImporte( $this->input->post( "frm_cfdi_parte_importe" ) );
		return true;
	}
	public function addToDatabase()
	{
		$data=array(
			"idcfdi_comprobante" => $this->idcfdi_comprobante,
			"claveprodserv" => $this->claveprodserv,
			"claveprodserv_sat_id" => $this->claveprodserv_sat_id,
			"claveprodserv_sat_txt" => $this->claveprodserv_sat_txt,
			"noidentificacion" => $this->noidentificacion,
			"cantidad" => $this->cantidad,
			"unidad" => $this->unidad,
			"descripcion" => $this->descripcion,
			"valorunitario" => $this->valorunitario,
			"importe" => $this->importe
		);
		$this->db->insert('cfdi_parte', $data );
		$this->setIdcfdi_parte( $this->db->insert_id() );
		$this->db->reset_query();
	}
	public function updateToDatabase($id=0)
	{
		if( $this->idcfdi_parte == "" || $this->idcfdi_parte == 0 )
		{
			if( $id > 0)
				$this->idcfdi_parte=$id;
			else
				return false;
		}
		$data=array(
			"idcfdi_comprobante" => $this->idcfdi_comprobante,
			"claveprodserv" => $this->claveprodserv,
			"claveprodserv_sat_id" => $this->claveprodserv_sat_id,
			"claveprodserv_sat_txt" => $this->claveprodserv_sat_txt,
			"noidentificacion" => $this->noidentificacion,
			"cantidad" => $this->cantidad,
			"unidad" => $this->unidad,
			"descripcion" => $this->descripcion,
			"valorunitario" => $this->valorunitario,
			"importe" => $this->importe
		);
		$this->db->where( 'idcfdi_parte', $this->idcfdi_parte );
		$this->db->update( 'cfdi_parte', $data );
		$this->db->reset_query();
		return true;
	}
	public function getAll()
	{
		$this->db->order_by('claveprodserv_sat_id');
		$regs=$this->db->get('cfdi_parte');
		$this->db->reset_query();
		if( $regs->num_rows() == 0 )
			return false;
		return $regs->result_array();
	}
	public function delete($id=0)
	{
		if( $this->idcfdi_parte == "" || $this->idcfdi_parte == 0 )
		{
			if( $id > 0)
				$this->idcfdi_parte=$id;
			else
				return false;
		}
		$this->db->where('idcfdi_parte',$this->idcfdi_parte);
		$this->db->delete( array('cfdi_parte' ) );
		$this->db->reset_query();
	}
}
?>
