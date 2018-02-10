<?php
class Modcfdi_concepto_impuestos extends CI_Model
{
	private $idcfdi_concepto;
	private $tipo;
	private $base;
	private $impuesto;
	private $impuesto_sat_id;
	private $impuesto_sat_txt;
	private $tipofactor;
	private $tipofactor_sat_id;
	private $tipofactor_sat_txt;
	private $importe;
	public function __construct()
	{
		parent::__construct();
		$this->idcfdi_concepto = 0;
		$this->tipo = "";
		$this->base = 0.0;
		$this->impuesto = 0;
		$this->impuesto_sat_id = "";
		$this->impuesto_sat_txt = "";
		$this->tipofactor = 0;
		$this->tipofactor_sat_id = "";
		$this->tipofactor_sat_txt = "";
		$this->importe = 0.0;
	}
	public function getIdcfdi_concepto() { return $this->idcfdi_concepto; }
	public function getTipo() { return $this->tipo; }
	public function getBase() { return $this->base; }
	public function getImpuesto() { return $this->impuesto; }
	public function getImpuesto_sat_id() { return $this->impuesto_sat_id; }
	public function getImpuesto_sat_txt() { return $this->impuesto_sat_txt; }
	public function getTipofactor() { return $this->tipofactor; }
	public function getTipofactor_sat_id() { return $this->tipofactor_sat_id; }
	public function getTipofactor_sat_txt() { return $this->tipofactor_sat_txt; }
	public function getImporte() { return $this->importe; }

	public function setIdcfdi_concepto( $valor ) { $this->idcfdi_concepto = intval( $valor ); }
	public function setTipo( $valor ) { $this->tipo = "".$valor; }
	public function setBase( $valor ) { $this->base = floatval( $valor ); }
	public function setImpuesto( $valor ) { $this->impuesto = intval( $valor ); }
	public function setImpuesto_sat_id( $valor ) { $this->impuesto_sat_id = "".$valor; }
	public function setImpuesto_sat_txt( $valor ) { $this->impuesto_sat_txt = "".$valor; }
	public function setTipofactor( $valor ) { $this->tipofactor = intval( $valor ); }
	public function setTipofactor_sat_id( $valor ) { $this->tipofactor_sat_id = "".$valor; }
	public function setTipofactor_sat_txt( $valor ) { $this->tipofactor_sat_txt = "".$valor; }
	public function setImporte( $valor ) { $this->importe = floatval( $valor ); }
	public function getFromDatabase($id=0)
	{
		if( $this->idcfdi_concepto == "" || $this->idcfdi_concepto == 0 )
		{
			if( $id > 0)
				$this->idcfdi_concepto=$id;
			else
				return false;
		}
		$this->db->where('idcfdi_concepto',$this->idcfdi_concepto);
		$regs=$this->db->get('cfdi_concepto_impuestos');
		$this->db->reset_query();
		if($regs->num_rows()==0) {
			return false;
		}
		$reg=$regs->row_array();
		$this->setIdcfdi_concepto( $reg[ "idcfdi_concepto" ] );
		$this->setTipo( $reg[ "tipo" ] );
		$this->setBase( $reg[ "base" ] );
		$this->setImpuesto( $reg[ "impuesto" ] );
		$this->setImpuesto_sat_id( $reg[ "impuesto_sat_id" ] );
		$this->setImpuesto_sat_txt( $reg[ "impuesto_sat_txt" ] );
		$this->setTipofactor( $reg[ "tipofactor" ] );
		$this->setTipofactor_sat_id( $reg[ "tipofactor_sat_id" ] );
		$this->setTipofactor_sat_txt( $reg[ "tipofactor_sat_txt" ] );
		$this->setImporte( $reg[ "importe" ] );
		return true;
	}
	public function getFromInput()
	{
		$this->set( $this->input->post( "frm_cfdi_concepto_impuestos_idcfdi_concepto" ) );
		$this->set( $this->input->post( "frm_cfdi_concepto_impuestos_tipo" ) );
		$this->set( $this->input->post( "frm_cfdi_concepto_impuestos_base" ) );
		$this->set( $this->input->post( "frm_cfdi_concepto_impuestos_impuesto" ) );
		$this->set( $this->input->post( "frm_cfdi_concepto_impuestos_impuesto_sat_id" ) );
		$this->set( $this->input->post( "frm_cfdi_concepto_impuestos_impuesto_sat_txt" ) );
		$this->set( $this->input->post( "frm_cfdi_concepto_impuestos_tipofactor" ) );
		$this->set( $this->input->post( "frm_cfdi_concepto_impuestos_tipofactor_sat_id" ) );
		$this->set( $this->input->post( "frm_cfdi_concepto_impuestos_tipofactor_sat_txt" ) );
		$this->set( $this->input->post( "frm_cfdi_concepto_impuestos_importe" ) );
		return true;
	}
	public function addToDatabase()
	{
		$data=array(
			"idcfdi_concepto" => $this->idcfdi_concepto,
			"tipo" => $this->tipo,
			"base" => $this->base,
			"impuesto" => $this->impuesto,
			"impuesto_sat_id" => $this->impuesto_sat_id,
			"impuesto_sat_txt" => $this->impuesto_sat_txt,
			"tipofactor" => $this->tipofactor,
			"tipofactor_sat_id" => $this->tipofactor_sat_id,
			"tipofactor_sat_txt" => $this->tipofactor_sat_txt,
			"importe" => $this->importe
		);
		$this->db->insert('cfdi_concepto_impuestos', $data );
		$this->setIdcfdi_concepto( $this->db->insert_id() );
		$this->db->reset_query();
	}
	public function updateToDatabase($id=0)
	{
		if( $this->idcfdi_concepto == "" || $this->idcfdi_concepto == 0)
		{
			if( $id > 0 )
				$this->idcfdi_concepto = $id;
			else
				return false;
		}
		$data=array(
			"idcfdi_concepto" => $this->idcfdi_concepto,
			"tipo" => $this->tipo,
			"base" => $this->base,
			"impuesto" => $this->impuesto,
			"impuesto_sat_id" => $this->impuesto_sat_id,
			"impuesto_sat_txt" => $this->impuesto_sat_txt,
			"tipofactor" => $this->tipofactor,
			"tipofactor_sat_id" => $this->tipofactor_sat_id,
			"tipofactor_sat_txt" => $this->tipofactor_sat_txt,
			"importe" => $this->importe
		);
		$this->db->where( 'idcfdi_concepto', $this->idcfdi_concepto );
		$this->db->update( 'cfdi_concepto_impuestos', $data );
		$this->db->reset_query();
		return true;
	}
	public function getAll()
	{
		$this->db->order_by('tipo');
		$regs=$this->db->get('cfdi_concepto_impuestos');
		$this->db->reset_query();
		if( $regs->num_rows() == 0 )
			return false;
		return $regs->result_array();
	}
	public function delete($id=0)
	{
		if( $this->idcfdi_concepto == "" || $this->idcfdi_concepto == 0)
		{
			if( $id > 0 )
				$this->idcfdi_concepto = $id;
			else
				return false;
		}
		$this->db->where('idcfdi_concepto',$this->idcfdi_concepto);
		$this->db->delete( array('cfdi_concepto_impuestos' ) );
		$this->db->reset_query();
	}
}
?>
