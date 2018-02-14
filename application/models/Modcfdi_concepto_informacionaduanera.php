<?php
class Modcfdi_concepto_informacionaduanera extends CI_Model
{
	private $idcfdi_concepto;
	private $numeropedimento;
	public function __construct()
	{
		parent::__construct();
		$this->idcfdi_concepto = 0;
		$this->numeropedimento = "";
	}
	public function getIdcfdi_concepto() {return $this->idcfdi_concepto;}
	public function getNumeropedimento() {return $this->numeropedimento;}

	public function setIdcfdi_concepto($valor) {$this->idcfdi_concepto= intval($valor);}
	public function setNumeropedimento($valor) {$this->numeropedimento= "".$valor;}

public function getFromDatabase($id=0)
	{
		$regs=$this->db->get('cfdi_concepto_informacionaduanera');
		$this->db->reset_query();
		if($regs->num_rows()==0) {
			return false;
		}
		$reg=$regs->row_array();
		$this->setIdcfdi_concepto($reg["idcfdi_concepto"]);
		$this->setNumeropedimento($reg["numeropedimento"]);
		return true;
	}
public function getFromInput()
	{
		$this->setIdcfdi_concepto($this->input->post("frm_cfdi_concepto_informacionaduanera_idcfdi_concepto"));
		$this->setNumeropedimento($this->input->post("frm_cfdi_concepto_informacionaduanera_numeropedimento"));
		return true;
	}
public function addToDatabase()
	{
		$data=array(
			"idcfdi_concepto" => $this->idcfdi_concepto,
			"numeropedimento" => $this->numeropedimento,
		);
		$this->db->insert('cfdi_concepto_informacionaduanera', $data );
		$this->db->reset_query();
	}
public function updateToDatabase($id=0)
	{
		$data=array(
			"idcfdi_concepto" => $this->idcfdi_concepto,
			"numeropedimento" => $this->numeropedimento,
		);
		$this->db->update( 'cfdi_concepto_informacionaduanera', $data );
		$this->db->reset_query();
		return true;
	}
public function getAll()
	{
		$regs=$this->db->get('cfdi_concepto_informacionaduanera');
		$this->db->reset_query();
		if( $regs->num_rows() == 0 )
			return false;
		return $regs->result_array();
	}
public function delete($id=0)
	{
		$this->db->where('idcfdi_concepto',$this->idcfdi_concepto);
		$this->db->delete( array('cfdi_concepto_informacionaduanera' ) );
		$this->db->reset_query();
	}
}
?>