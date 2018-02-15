<?php
class Modcfdi_parte_informacionaduanera extends CI_Model
{
	private $idcfdi_parte;
	private $numeropedimento;
	
	public function __construct()
	{
		parent::__construct();

		$this->idcfdi_parte = 0;
		$this->numeropedimento = "";
	}
	public function getIdcfdi_parte() { return $this->idcfdi_parte; }
	public function getNumeropedimento() { return $this->numeropedimento; }
	public function setIdcfdi_parte( $valor ) { $this->idcfdi_parte = intval( $valor ); }
	public function setNumeropedimento( $valor ) { $this->numeropedimento = "" . $valor; }
	public function getFromDatabase($id=0)
	{
		$this->db->where('idcfdi_parte',$this->idcfdi_parte);
		$regs=$this->db->get('cfdi_parte_informacionaduanera');
		$this->db->reset_query();
		if($regs->num_rows()==0) {
			return false;
		}
		$reg=$regs->row_array();
		$this->setIdcfdi_parte( $reg[ "idcfdi_parte" ] );
		$this->setNumeropedimento( $reg[ "numeropedimento" ] );
		return true;
	}
	public function getFromInput()
	{
		$this->setIdcfdi_parte( $this->input->post( "frm_cfdi_parte_informacionaduanera_idcfdi_parte" ) );
		$this->setNumeropedimento( $this->input->post( "frm_cfdi_parte_informacionaduanera_numeropedimento" ) );
		return true;
	}
	public function addToDatabase()
	{
		$data=array(
			"idcfdi_parte" => $this->idcfdi_parte,
			"numeropedimento" => $this->numeropedimento
		);
		$this->db->insert('cfdi_parte_informacionaduanera', $data );
		$this->setIdcfdi_parte( $this->db->insert_id() );
		$this->db->reset_query();
	}
	public function updateToDatabase($id=0)
	{
		$data=array(
			"idcfdi_parte" => $this->idcfdi_parte,
			"numeropedimento" => $this->numeropedimento
		);
		$this->db->where( 'idcfdi_parte', $this->idcfdi_parte );
		$this->db->update( 'cfdi_parte_informacionaduanera', $data );
		$this->db->reset_query();
		return true;
	}
	public function getAll()
	{
		$this->db->order_by('numeropedimento');
		$regs=$this->db->get('cfdi_parte_informacionaduanera');
		$this->db->reset_query();
		if( $regs->num_rows() == 0 )
			return false;
		return $regs->result_array();
	}
	public function delete($id=0)
	{
		}
		$this->db->where('idcfdi_parte',$this->idcfdi_parte);
		$this->db->delete( array('cfdi_parte_informacionaduanera' ) );
		$this->db->reset_query();
	}
}
?>
