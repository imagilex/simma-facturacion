<?php
class Modcfdi_pago extends CI_Model
{
	private $idcfdi_pago;
	private $idcfdi_comprobante;
	private $fechapago;
	private $formadepagop;
	private $formadepagop_sat_id;
	private $formadepagop_sat_txt;
	private $monedap;
	private $monedap_sat_id;
	private $monedap_sat_txt;
	private $tipocambiop;
	private $monto;
	private $numoperacion;
	private $rfcemisorctaord;
	private $nombancoordext;
	private $ctaordenante;
	private $rfcemisorctaben;
	private $ctabeneficiario;
	private $tipocadpago;
	private $tipocadpago_sat_id;
	private $tipocadpago_sat_txt;
	private $certpago;
	private $cadpago;
	private $sellopago;
	public function __construct()
	{
		parent::__construct();
		$this->idcfdi_pago = 0;
		$this->idcfdi_comprobante = 0;
		$this->fechapago = "";
		$this->formadepagop = 0;
		$this->formadepagop_sat_id = "";
		$this->formadepagop_sat_txt = "";
		$this->monedap = 0;
		$this->monedap_sat_id = "";
		$this->monedap_sat_txt = "";
		$this->tipocambiop = 0.0;
		$this->monto = 0.0;
		$this->numoperacion = "";
		$this->rfcemisorctaord = "";
		$this->nombancoordext = "";
		$this->ctaordenante = "";
		$this->rfcemisorctaben = "";
		$this->ctabeneficiario = "";
		$this->tipocadpago = 0;
		$this->tipocadpago_sat_id = "";
		$this->tipocadpago_sat_txt = "";
		$this->certpago = "";
		$this->cadpago = "";
		$this->sellopago = "";
	}
	public function getIdcfdi_pago() { return $this->idcfdi_pago; }
	public function getIdcfdi_comprobante() { return $this->idcfdi_comprobante; }
	public function getFechapago() { return $this->fechapago; }
	public function getFormadepagop() { return $this->formadepagop; }
	public function getFormadepagop_sat_id() { return $this->formadepagop_sat_id; }
	public function getFormadepagop_sat_txt() { return $this->formadepagop_sat_txt; }
	public function getMonedap() { return $this->monedap; }
	public function getMonedap_sat_id() { return $this->monedap_sat_id; }
	public function getMonedap_sat_txt() { return $this->monedap_sat_txt; }
	public function getTipocambiop() { return $this->tipocambiop; }
	public function getMonto() { return $this->monto; }
	public function getNumoperacion() { return $this->numoperacion; }
	public function getRfcemisorctaord() { return $this->rfcemisorctaord; }
	public function getNombancoordext() { return $this->nombancoordext; }
	public function getCtaordenante() { return $this->ctaordenante; }
	public function getRfcemisorctaben() { return $this->rfcemisorctaben; }
	public function getCtabeneficiario() { return $this->ctabeneficiario; }
	public function getTipocadpago() { return $this->tipocadpago; }
	public function getTipocadpago_sat_id() { return $this->tipocadpago_sat_id; }
	public function getTipocadpago_sat_txt() { return $this->tipocadpago_sat_txt; }
	public function getCertpago() { return $this->certpago; }
	public function getCadpago() { return $this->cadpago; }
	public function getSellopago() { return $this->sellopago; }
	public function setIdcfdi_pago( $valor ) { $this->idcfdi_pago = intval( $valor ); }
	public function setIdcfdi_comprobante( $valor ) { $this->idcfdi_comprobante = intval( $valor ); }
	public function setFechapago( $valor ) { $this->fechapago = "" . $valor; }
	public function setFormadepagop( $valor ) { $this->formadepagop = intval( $valor ); }
	public function setFormadepagop_sat_id( $valor ) { $this->formadepagop_sat_id = "" . $valor; }
	public function setFormadepagop_sat_txt( $valor ) { $this->formadepagop_sat_txt = "" . $valor; }
	public function setMonedap( $valor ) { $this->monedap = intval( $valor ); }
	public function setMonedap_sat_id( $valor ) { $this->monedap_sat_id = "" . $valor; }
	public function setMonedap_sat_txt( $valor ) { $this->monedap_sat_txt = "" . $valor; }
	public function setTipocambiop( $valor ) { $this->tipocambiop = floatval( $valor ); }
	public function setMonto( $valor ) { $this->monto = floatval( $valor ); }
	public function setNumoperacion( $valor ) { $this->numoperacion = "" . $valor; }
	public function setRfcemisorctaord( $valor ) { $this->rfcemisorctaord = "" . $valor; }
	public function setNombancoordext( $valor ) { $this->nombancoordext = "" . $valor; }
	public function setCtaordenante( $valor ) { $this->ctaordenante = "" . $valor; }
	public function setRfcemisorctaben( $valor ) { $this->rfcemisorctaben = "" . $valor; }
	public function setCtabeneficiario( $valor ) { $this->ctabeneficiario = "" . $valor; }
	public function setTipocadpago( $valor ) { $this->tipocadpago = intval( $valor ); }
	public function setTipocadpago_sat_id( $valor ) { $this->tipocadpago_sat_id = "" . $valor; }
	public function setTipocadpago_sat_txt( $valor ) { $this->tipocadpago_sat_txt = "" . $valor; }
	public function setCertpago( $valor ) { $this->certpago = "" . $valor; }
	public function setCadpago( $valor ) { $this->cadpago = "" . $valor; }
	public function setSellopago( $valor ) { $this->sellopago = "" . $valor; }
	public function getFromDatabase($id=0)
	{
		if( $this->idcfdi_pago == "" || $this->idcfdi_pago == 0 )
		{
			if( $id > 0)
				$this->idcfdi_pago=$id;
			else
				return false;
		}
		$this->db->where('idcfdi_pago',$this->idcfdi_pago);
		$regs=$this->db->get('cfdi_pago');
		$this->db->reset_query();
		if($regs->num_rows()==0) {
			return false;
		}
		$reg=$regs->row_array();
		$this->setIdcfdi_pago( $reg[ "idcfdi_pago" ] );
		$this->setIdcfdi_comprobante( $reg[ "idcfdi_comprobante" ] );
		$this->setFechapago( $reg[ "fechapago" ] );
		$this->setFormadepagop( $reg[ "formadepagop" ] );
		$this->setFormadepagop_sat_id( $reg[ "formadepagop_sat_id" ] );
		$this->setFormadepagop_sat_txt( $reg[ "formadepagop_sat_txt" ] );
		$this->setMonedap( $reg[ "monedap" ] );
		$this->setMonedap_sat_id( $reg[ "monedap_sat_id" ] );
		$this->setMonedap_sat_txt( $reg[ "monedap_sat_txt" ] );
		$this->setTipocambiop( $reg[ "tipocambiop" ] );
		$this->setMonto( $reg[ "monto" ] );
		$this->setNumoperacion( $reg[ "numoperacion" ] );
		$this->setRfcemisorctaord( $reg[ "rfcemisorctaord" ] );
		$this->setNombancoordext( $reg[ "nombancoordext" ] );
		$this->setCtaordenante( $reg[ "ctaordenante" ] );
		$this->setRfcemisorctaben( $reg[ "rfcemisorctaben" ] );
		$this->setCtabeneficiario( $reg[ "ctabeneficiario" ] );
		$this->setTipocadpago( $reg[ "tipocadpago" ] );
		$this->setTipocadpago_sat_id( $reg[ "tipocadpago_sat_id" ] );
		$this->setTipocadpago_sat_txt( $reg[ "tipocadpago_sat_txt" ] );
		$this->setCertpago( $reg[ "certpago" ] );
		$this->setCadpago( $reg[ "cadpago" ] );
		$this->setSellopago( $reg[ "sellopago" ] );
		return true;
	}
	public function getFromInput()
	{
		$this->setIdcfdi_pago( $this->input->post( "frm_cfdi_pago_idcfdi_pago" ) );
		$this->setIdcfdi_comprobante( $this->input->post( "frm_cfdi_pago_idcfdi_comprobante" ) );
		$this->setFechapago( $this->input->post( "frm_cfdi_pago_fechapago" ) );
		$this->setFormadepagop( $this->input->post( "frm_cfdi_pago_formadepagop" ) );
		$this->setFormadepagop_sat_id( $this->input->post( "frm_cfdi_pago_formadepagop_sat_id" ) );
		$this->setFormadepagop_sat_txt( $this->input->post( "frm_cfdi_pago_formadepagop_sat_txt" ) );
		$this->setMonedap( $this->input->post( "frm_cfdi_pago_monedap" ) );
		$this->setMonedap_sat_id( $this->input->post( "frm_cfdi_pago_monedap_sat_id" ) );
		$this->setMonedap_sat_txt( $this->input->post( "frm_cfdi_pago_monedap_sat_txt" ) );
		$this->setTipocambiop( $this->input->post( "frm_cfdi_pago_tipocambiop" ) );
		$this->setMonto( $this->input->post( "frm_cfdi_pago_monto" ) );
		$this->setNumoperacion( $this->input->post( "frm_cfdi_pago_numoperacion" ) );
		$this->setRfcemisorctaord( $this->input->post( "frm_cfdi_pago_rfcemisorctaord" ) );
		$this->setNombancoordext( $this->input->post( "frm_cfdi_pago_nombancoordext" ) );
		$this->setCtaordenante( $this->input->post( "frm_cfdi_pago_ctaordenante" ) );
		$this->setRfcemisorctaben( $this->input->post( "frm_cfdi_pago_rfcemisorctaben" ) );
		$this->setCtabeneficiario( $this->input->post( "frm_cfdi_pago_ctabeneficiario" ) );
		$this->setTipocadpago( $this->input->post( "frm_cfdi_pago_tipocadpago" ) );
		$this->setTipocadpago_sat_id( $this->input->post( "frm_cfdi_pago_tipocadpago_sat_id" ) );
		$this->setTipocadpago_sat_txt( $this->input->post( "frm_cfdi_pago_tipocadpago_sat_txt" ) );
		$this->setCertpago( $this->input->post( "frm_cfdi_pago_certpago" ) );
		$this->setCadpago( $this->input->post( "frm_cfdi_pago_tipocadpago") );
		$this->setSellopago( $this->input->post( "frm_cfdi_pago_sellopago" ) );
		return true;
	}
	public function addToDatabase()
	{
		$data=array(
			"idcfdi_comprobante" => $this->idcfdi_comprobante,
			"fechapago" => $this->fechapago,
			"formadepagop" => $this->formadepagop,
			"formadepagop_sat_id" => $this->formadepagop_sat_id,
			"formadepagop_sat_txt" => $this->formadepagop_sat_txt,
			"monedap" => $this->monedap,
			"monedap_sat_id" => $this->monedap_sat_id,
			"monedap_sat_txt" => $this->monedap_sat_txt,
			"tipocambiop" => $this->tipocambiop,
			"monto" => $this->monto,
			"numoperacion" => $this->numoperacion,
			"rfcemisorctaord" => $this->rfcemisorctaord,
			"nombancoordext" => $this->nombancoordext,
			"ctaordenante" => $this->ctaordenante,
			"rfcemisorctaben" => $this->rfcemisorctaben,
			"ctabeneficiario" => $this->ctabeneficiario,
			"tipocadpago" => $this->tipocadpago,
			"tipocadpago_sat_id" => $this->tipocadpago_sat_id,
			"tipocadpago_sat_txt" => $this->tipocadpago_sat_txt,
			"certpago" => $this->certpago,
			"cadpago" => $this->cadpago,
			"sellopago" => $this->sellopago
		);
		$this->db->insert('cfdi_pago', $data );
		$this->setIdcfdi_pago( $this->db->insert_id() );
		$this->db->reset_query();
	}
	public function updateToDatabase($id=0)
	{
		if( $this->idcfdi_pago == "" || $this->idcfdi_pago == 0 )
		{
			if( $id > 0)
				$this->idcfdi_pago=$id;
			else
				return false;
		}
		$data=array(
			"idcfdi_comprobante" => $this->idcfdi_comprobante,
			"fechapago" => $this->fechapago,
			"formadepagop" => $this->formadepagop,
			"formadepagop_sat_id" => $this->formadepagop_sat_id,
			"formadepagop_sat_txt" => $this->formadepagop_sat_txt,
			"monedap" => $this->monedap,
			"monedap_sat_id" => $this->monedap_sat_id,
			"monedap_sat_txt" => $this->monedap_sat_txt,
			"tipocambiop" => $this->tipocambiop,
			"monto" => $this->monto,
			"numoperacion" => $this->numoperacion,
			"rfcemisorctaord" => $this->rfcemisorctaord,
			"nombancoordext" => $this->nombancoordext,
			"ctaordenante" => $this->ctaordenante,
			"rfcemisorctaben" => $this->rfcemisorctaben,
			"ctabeneficiario" => $this->ctabeneficiario,
			"tipocadpago" => $this->tipocadpago,
			"tipocadpago_sat_id" => $this->tipocadpago_sat_id,
			"tipocadpago_sat_txt" => $this->tipocadpago_sat_txt,
			"certpago" => $this->certpago,
			"cadpago" => $this->cadpago,
			"sellopago" => $this->sellopago
		);
		$this->db->where( 'idcfdi_pago', $this->idcfdi_pago );
		$this->db->update( 'cfdi_pago', $data );
		$this->db->reset_query();
		return true;
	}
	public function getAll()
	{
		$this->db->order_by('fechapago');
		$regs=$this->db->get('cfdi_pago');
		$this->db->reset_query();
		if( $regs->num_rows() == 0 )
			return false;
		return $regs->result_array();
	}
	public function delete($id=0)
	{
		if( $this->idcfdi_pago == "" || $this->idcfdi_pago == 0 )
		{
			if( $id > 0)
				$this->idcfdi_pago=$id;
			else
				return false;
		}
		$this->db->where('idcfdi_pago',$this->idcfdi_pago);
		$this->db->delete( array('cfdi_pago' ) );
		$this->db->reset_query();
	}
}
?>
