<?php
class Modcfdi_relacionado extends CI_Model
{
	private $idcfdi_comprobante;
	private $tiporelacion;
	private $tiporelacion_sat_id;
	private $tiporelacion_sat_txt;
	private $idcfdi_comprobante_relacionado;
	private $uuid;
	public function __construct()
	{
		parent::__construct();
		$this->idcfdi_comprobante = 0;
		$this->tiporelacion = 0;
		$this->tiporelacion_sat_id = "";
		$this->tiporelacion_sat_txt = "";
		$this->idcfdi_comprobante_relacionado = 0;
		$this->uuid = "";
	}
	public function getIdcfdi_comprobante() {return $this->idcfdi_comprobante;}
	public function getTiporelacion() {return $this->tiporelacion;}
	public function getTiporelacion_sat_id() {return $this->tiporelacion_sat_id;}
	public function getTiporelacion_sat_txt() {return $this->tiporelacion_sat_txt;}
	public function getIdcfdi_comprobante_relacionado() {return $this->idcfdi_comprobante_relacionado;}
	public function getUuid() {return $this->uuid;}

	public function setIdcfdi_comprobante($valor) {$this->idcfdi_comprobante= intval($valor);}
	public function setTiporelacion($valor) {$this->tiporelacion= intval($valor);}
	public function setTiporelacion_sat_id($valor) {$this->tiporelacion_sat_id= "".$valor;}
	public function setTiporelacion_sat_txt($valor) {$this->tiporelacion_sat_txt= "".$valor;}
	public function setIdcfdi_comprobante_relacionado($valor) {$this->idcfdi_comprobante_relacionado= intval($valor);}
	public function setUuid($valor) {$this->uuid= "".$valor;}

public function getFromDatabase($id=0)
	{
		$regs=$this->db->get('cfdi_relacionado');
		$this->db->reset_query();
		if($regs->num_rows()==0) {
			return false;
		}
		$reg=$regs->row_array();
		$this->setIdcfdi_comprobante($reg["idcfdi_comprobante"]);
		$this->setTiporelacion($reg["tiporelacion"]);
		$this->setTiporelacion_sat_id($reg["tiporelacion_sat_id"]);
		$this->setTiporelacion_sat_txt($reg["tiporelacion_sat_txt"]);
		$this->setIdcfdi_comprobante_relacionado($reg["idcfdi_comprobante_relacionado"]);
		$this->setUuid($reg["uuid"]);

		return true;
	}
public function getFromInput()
	{
		$this->setIdcfdi_comprobante($this->input->post("idcfdi_comprobante"));
		$this->setTiporelacion($this->input->post("tiporelacion"));
		$this->setTiporelacion_sat_id($this->input->post("tiporelacion_sat_id"));
		$this->setTiporelacion_sat_txt($this->input->post("tiporelacion_sat_txt"));
		$this->setIdcfdi_comprobante_relacionado($this->input->post("idcfdi_comprobante_relacionado"));
		$this->setUuid($this->input->post("uuid"));
		return true;
	}
public function addToDatabase()
	{
		$data=array(
			"idcfdi_comprobante" => $this->idcfdi_comprobante,
			"tiporelacion" => $this->tiporelacion,
			"tiporelacion_sat_id" => $this->tiporelacion_sat_id,
			"tiporelacion_sat_txt" => $this->tiporelacion_sat_txt,
			"idcfdi_comprobante_relacionado" => $this->idcfdi_comprobante_relacionado,
			"uuid" => $this->uuid,
		);
		$this->db->insert('cfdi_relacionado', $data );
		$this->db->reset_query();
	}
public function updateToDatabase($id=0)
	{
		$data=array(
			"idcfdi_comprobante" => $this->idcfdi_comprobante,
			"tiporelacion" => $this->tiporelacion,
			"tiporelacion_sat_id" => $this->tiporelacion_sat_id,
			"tiporelacion_sat_txt" => $this->tiporelacion_sat_txt,
			"idcfdi_comprobante_relacionado" => $this->idcfdi_comprobante_relacionado,
			"uuid" => $this->uuid,
		);
		$this->db->update( 'cfdi_comprobante', $data );
		$this->db->reset_query();
		return true;
	}
public function getAll()
	{
		$regs=$this->db->get('cfdi_relacionado');
		$this->db->order_by('uuid');
		$this->db->reset_query();
		if( $regs->num_rows() == 0 )
			return false;
		return $regs->result_array();
	}
public function delete($id=0)
	{
		$this->db->where('idcfdi_comprobante',$this->idcfdi_comprobante);
		$this->db->delete( array('cfdi_relacionado' ) );
		$this->db->reset_query();
	}
}
?>