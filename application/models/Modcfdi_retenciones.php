<?php
class Modcfdi_retenciones extends CI_Model
{
	private $idcfdi_comprobante;
	private $impuesto;
	private $impuesto_sat_id;
	private $impuesto_sat_txt;
	private $importe;
	public function __construct()
	{
		parent::__construct();
		$this->idcfdi_comprobante = 0;
		$this->impuesto = 0;
		$this->impuesto_sat_id = "";
		$this->impuesto_sat_txt = "";
		$this->importe = 0.0;
	}
	public function getIdcfdi_comprobante() { return $this->idcfdi_comprobante; }
	public function getImpuesto() { return $this->impuesto; }
	public function getImpuesto_sat_id() { return $this->impuesto_sat_id; }
	public function getImpuesto_sat_txt() { return $this->impuesto_sat_txt; }
	public function getImporte() { return $this->importe; }
	public function setIdcfdi_comprobante( $valor ) { $this->idcfdi_comprobante = intval( $valor ); }
	public function setImpuesto( $valor ) { $this->impuesto = intval( $valor ); }
	public function setImpuesto_sat_id( $valor ) { $this->impuesto_sat_id = "" . $valor; }
	public function setImpuesto_sat_txt( $valor ) { $this->impuesto_sat_txt = "" . $valor; }
	public function setImporte( $valor ) { $this->importe = floatval( $valor ); }
	public function getFromDatabase($id=0)
	{
		$this->db->where('idcfdi_comprobante',$this->idcfdi_comprobante);
		$regs=$this->db->get('cfdi_retenciones');
		$this->db->reset_query();
		if($regs->num_rows()==0) {
			return false;
		}
		$reg=$regs->row_array();
		$this->setIdcfdi_comprobante( $reg[ "idcfdi_comprobante" ] );
		$this->setImpuesto( $reg[ "impuesto" ] );
		$this->setImpuesto_sat_id( $reg[ "impuesto_sat_id" ] );
		$this->setImpuesto_sat_txt( $reg[ "impuesto_sat_txt" ] );
		$this->setImporte( $reg[ "importe" ] );
		return true;
	}
	public function getFromInput()
	{
		$this->setIdcfdi_comprobante( $this->input->post( "frm_cfdi_retenciones_idcfdi_comprobante" ) );
		$this->setImpuesto( $this->input->post( "frm_cfdi_retenciones_impuesto" ) );
		$this->setImpuesto_sat_id( $this->input->post( "frm_cfdi_retenciones_impuesto_sat_id" ) );
		$this->setImpuesto_sat_txt( $this->input->post( "frm_cfdi_retenciones_impuesto_sat_txt" ) );
		$this->setImporte( $this->input->post( "frm_cfdi_retenciones_importe" ) );
		return true;
	}
	public function addToDatabase()
	{
		$data=array(
			"idcfdi_comprobante" => $this->idcfdi_comprobante,
			"impuesto" => $this->impuesto,
			"impuesto_sat_id" => $this->impuesto_sat_id,
			"impuesto_sat_txt" => $this->impuesto_sat_txt,
			"importe" => $this->importe
		);
		$this->db->insert('cfdi_retenciones', $data );
		$this->db->reset_query();
	}
	public function updateToDatabase($id=0)
	{
		$data=array(
			"idcfdi_comprobante" => $this->idcfdi_comprobante,
			"impuesto" => $this->impuesto,
			"impuesto_sat_id" => $this->impuesto_sat_id,
			"impuesto_sat_txt" => $this->impuesto_sat_txt,
			"importe" => $this->importe
		);
		$this->db->where( 'idcfdi_comprobante', $this->idcfdi_comprobante );
		$this->db->update( 'cfdi_retenciones', $data );
		$this->db->reset_query();
		return true;
	}
	public function getAll()
	{
		$regs=$this->db->get('cfdi_retenciones');
		$this->db->reset_query();
		if( $regs->num_rows() == 0 )
			return false;
		return $regs->result_array();
	}
	public function delete($id=0)
	{
		$this->db->where('idcfdi_comprobante',$this->idcfdi_comprobante);
		$this->db->delete( array('cfdi_retenciones' ) );
		$this->db->reset_query();
	}
}
?>
