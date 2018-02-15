<?php
class Modcfdi_traslados extends CI_Model
{
	private $idcfdi_comprobante;
	private $impuesto;
	private $impuesto_sat_id;
	private $impuesto_sat_txt;
	private $tipofactor;
	private $tipofactor_sat_id;
	private $tipofactor_sat_txt;
	private $tasaocuota;
	private $importe;
	public function __construct()
	{
		parent::__construct();
		$this->idcfdi_comprobante = 0;
		$this->impuesto = 0;
		$this->impuesto_sat_id = "";
		$this->impuesto_sat_txt = "";
		$this->tipofactor = 0;
		$this->tipofactor_sat_id = "";
		$this->tipofactor_sat_txt = "";
		$this->tasaocuota = "";
		$this->importe = "";
	}
	public function getIdcfdi_comprobante() {return $this->idcfdi_comprobante;}
	public function getImpuesto() {return $this->impuesto;}
	public function getImpuesto_sat_id() {return $this->impuesto_sat_id;}
	public function getImpuesto_sat_txt() {return $this->impuesto_sat_txt;}
	public function getTipofactor() {return $this->tipofactor;}
	public function getTipofactor_sat_id() {return $this->tipofactor_sat_id;}
	public function getTipofactor_sat_txt() {return $this->tipofactor_sat_txt;}
	public function getTasaocuota() {return $this->tasaocuota;}
	public function getImporte() {return $this->importe;}
	public function setIdcfdi_comprobante($valor) {$this->idcfdi_comprobante= intval($valor);}
	public function setImpuesto($valor) {$this->impuesto= intval($valor);}
	public function setImpuesto_sat_id($valor) {$this->impuesto_sat_id= "".$valor;}
	public function setImpuesto_sat_txt($valor) {$this->impuesto_sat_txt= "".$valor;}
	public function setTipofactor($valor) {$this->tipofactor= intval($valor);}
	public function setTipofactor_sat_id($valor) {$this->tipofactor_sat_id= "".$valor;}
	public function setTipofactor_sat_txt($valor) {$this->tipofactor_sat_txt= "".$valor;}
	public function setTasaocuota($valor) {$this->tasaocuota= floatval($valor);}
	public function setImporte($valor) {$this->importe= floatval($valor);}
	public function getFromDatabase($id=0)
	{
		if( $this->idcfdi_comprobante == "" || $this->idcfdi_comprobante == 0 )
		{
			if( $id > 0)
				$this->idcfdi_comprobante=$id;
			else
				return false;
		}
		$this->db->where('idcfdi_comprobante',$this->idcfdi_comprobante);
		$regs=$this->db->get('cfdi_traslados');
		$this->db->reset_query();
		if($regs->num_rows()==0) {
			return false;
		}
		$reg=$regs->row_array();
		$this->setIdcfdi_comprobante($reg["idcfdi_comprobante"]);
		$this->setImpuesto($reg["impuesto"]);
		$this->setImpuesto_sat_id($reg["impuesto_sat_id"]);
		$this->setImpuesto_sat_txt($reg["impuesto_sat_txt"]);
		$this->setTipofactor($reg["tipofactor"]);
		$this->setTipofactor_sat_id($reg["tipofactor_sat_id"]);
		$this->setTipofactor_sat_txt($reg["tipofactor_sat_txt"]);
		$this->setTasaocuota($reg["tasaocuota"]);
		$this->setImporte($reg["importe"]);
		return true;
	}
public function getFromInput()
	{
		$this->setIdcfdi_comprobante($this->input->post("frm_cfdi_traslados_idcfdi_comprobante"));
		$this->setImpuesto($this->input->post("frm_cfdi_traslados_impuesto"));
		$this->setImpuesto_sat_id($this->input->post("frm_cfdi_traslados_impuesto_sat_id"));
		$this->setImpuesto_sat_txt($this->input->post("frm_cfdi_traslados_impuesto_sat_txt"));
		$this->setTipofactor($this->input->post("frm_cfdi_traslados_tipofactor"));
		$this->setTipofactor_sat_id($this->input->post("frm_cfdi_traslados_tipofactor_sat_id"));
		$this->setTipofactor_sat_txt($this->input->post("frm_cfdi_traslados_tipofactor_sat_txt"));
		$this->setTasaocuota($this->input->post("frm_cfdi_traslados_tasaocuota"));
		$this->setImporte($this->input->post("frm_cfdi_traslados_importe"));
		return true;
	}
public function addToDatabase()
	{
		$data=array(
			"idcfdi_comprobante" => $this->idcfdi_comprobante,
			"impuesto" => $this->impuesto,
			"impuesto_sat_id" => $this->impuesto_sat_id,
			"impuesto_sat_txt" => $this->impuesto_sat_txt,
			"tipofactor" => $this->tipofactor,
			"tipofactor_sat_id" => $this->tipofactor_sat_id,
			"tipofactor_sat_txt" => $this->tipofactor_sat_txt,
			"tasaocuota" => $this->tasaocuota,
			"importe" => $this->importe,
		);
		$this->db->insert('cfdi_traslados', $data );
		$this->setIdcfdi_comprobante( $this->db->insert_id() );
		$this->db->reset_query();
	}
public function updateToDatabase($id=0)
	{
		if( $this->idcfdi_comprobante == "" || $this->idcfdi_comprobante == 0)
		{
			if( $id > 0 )
				$this->idcfdi_comprobante = $id;
			else
				return false;
		}
		$data=array(
			"idcfdi_comprobante" => $this->idcfdi_comprobante,
			"impuesto" => $this->impuesto,
			"impuesto_sat_id" => $this->impuesto_sat_id,
			"impuesto_sat_txt" => $this->impuesto_sat_txt,
			"tipofactor" => $this->tipofactor,
			"tipofactor_sat_id" => $this->tipofactor_sat_id,
			"tipofactor_sat_txt" => $this->tipofactor_sat_txt,
			"tasaocuota" => $this->tasaocuota,
			"importe" => $this->importe,
		);
		$this->db->where( 'idcfdi_comprobante', $this->idcfdi_comprobante );
		$this->db->update( 'cfdi_traslados', $data );
		$this->db->reset_query();
		return true;
	}
public function getAll()
	{
		$this->db->order_by('');
		$regs=$this->db->get('cfdi_traslados');
		$this->db->reset_query();
		if( $regs->num_rows() == 0 )
			return false;
		return $regs->result_array();
	}
public function delete($id=0)
	{
		if( $this->idcfdi_comprobante == "" || $this->idcfdi_comprobante == 0)
		{
			if( $id > 0 )
				$this->idcfdi_comprobante = $id;
			else
				return false;
		}
		$this->db->where('idcfdi_comprobante',$this->idcfdi_comprobante);
		$this->db->delete( array('cfdi_traslados' ) );
		$this->db->reset_query();
	}
}
?>