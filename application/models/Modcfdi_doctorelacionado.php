<?php
class Modcfdi_doctorelacionado extends CI_Model
{
	private $idcfdi_pago;
	private $iddocumento;
	private $serie;
	private $folio;
	private $monedadr;
	private $monedadr_sat_id;
	private $monedadr_sat_txt;
	private $tipocambiodr;
	private $metododepagodr;
	private $metododepagodr_sat_id;
	private $metododepagodr_sat_txt;
	private $numparcialidad;
	private $impsaldoant;
	private $imppagado;
	private $impsaldoinsoluto;
	public function __construct()
	{
		parent::__construct();
		$this->idcfdi_pago = 0;
		$this->iddocumento = "";
		$this->serie = "";
		$this->folio = "";
		$this->monedadr = 0;
		$this->monedadr_sat_id = "";
		$this->monedadr_sat_txt = "";
		$this->tipocambiodr = 0.0;
		$this->metododepagodr = 0;
		$this->metododepagodr_sat_id = "";
		$this->metododepagodr_sat_txt = "";
		$this->numparcialidad = 0;
		$this->impsaldoant = 0.0;
		$this->imppagado = 0.0;
		$this->impsaldoinsoluto = 0.0;

	}
	public function getIdcfdi_pago() { return $this->idcfdi_pago; }
	public function getIddocumento() { return $this->iddocumento; }
	public function getSerie() { return $this->serie; }
	public function getFolio() { return $this->folio; }
	public function getMonedadr() { return $this->monedadr; }
	public function getMonedadr_sat_id() { return $this->monedadr_sat_id; } 
	public function getMonedadr_sat_txt() { return $this->monedadr_sat_txt; }
	public function getTipocambiodr() { return $this->tipocambiodr; }
	public function getMetododepagodr() { return $this->metododepagodr; }
	public function getMetododepagodr_sat_id() { return $this->metododepagodr_sat_id; }
	public function getMetododepagodr_sat_txt() { return $this->metododepagodr_sat_txt; }
	public function getNumparcialidad() { return $this->numparcialidad; }
	public function getImpsaldoant() { return $this->impsaldoant; }
	public function getImppagado() { return $this->imppagado; }
	public function getImpsaldoinsoluto() { return $this->impsaldoinsoluto; }
	public function setIdcfdi_pago( $valor ) { $this->idcfdi_pago = intval( $valor );}
	public function setIddocumento( $valor ) { $this->iddocumento = "" . $valor;}
	public function setSerie( $valor ) { $this->serie = "" . $valor;}
	public function setFolio( $valor ) { $this->folio = "" . $valor;}
	public function setMonedadr( $valor ) { $this->monedadr = intval( $valor );}
	public function setMonedadr_sat_id( $valor ) { $this->monedadr_sat_id = "" . $valor;} 
	public function setMonedadr_sat_txt( $valor ) { $this->monedadr_sat_txt = "" . $valor;}
	public function setTipocambiodr( $valor ) { $this->tipocambiodr = floatval( $valor );}
	public function setMetododepagodr( $valor ) { $this->metododepagodr = intval( $valor );}
	public function setMetododepagodr_sat_id( $valor ) { $this->metododepagodr_sat_id = "" . $valor;} 
	public function setMetododepagodr_sat_txt( $valor ) { $this->metododepagodr_sat_txt = "" . $valor;} 
	public function setNumparcialidad( $valor ) { $this->numparcialidad = intval( $valor );}
	public function setImpsaldoant( $valor ) { $this->impsaldoant = floatval( $valor );}
	public function setImppagado( $valor ) { $this->imppagado = floatval( $valor );}
	public function setImpsaldoinsoluto( $valor ) { $this->impsaldoinsoluto = floatval( $valor );}
	public function getFromDatabase($id=0)
	{
		$this->db->where('idcfdi_pago',$this->idcfdi_pago);
		$regs=$this->db->get('cfdi_doctorelacionado');
		$this->db->reset_query();
		if($regs->num_rows()==0) {
			return false;
		}
		$reg=$regs->row_array();
		$this->setIdcfdi_pago( $reg[ "idcfdi_pago" ] );
		$this->setIddocumento( $reg[ "iddocumento" ] );
		$this->setSerie( $reg[ "serie" ] );
		$this->setFolio( $reg[ "folio" ] );
		$this->setMonedadr( $reg[ "monedadr" ] );
		$this->setMonedadr_sat_id( $reg[ "monedadr_sat_id" ] );
		$this->setMonedadr_sat_txt( $reg[ "monedadr_sat_txt" ] );
		$this->setTipocambiodr( $reg[ "tipocambiodr" ] );
		$this->setMetododepagodr( $reg[ "metododepagodr" ] );
		$this->setMetododepagodr_sat_id( $reg[ "metododepagodr_sat_id" ] );
		$this->setMetododepagodr_sat_txt( $reg[ "metododepagodr_sat_txt" ] );
		$this->setNumparcialidad( $reg[ "numparcialidad" ] );
		$this->setImpsaldoant( $reg[ "impsaldoant" ] );
		$this->setImppagado( $reg[ "imppagado" ] );
		$this->setImpsaldoinsoluto( $reg[ "impsaldoinsoluto" ] );

		return true;
	}
	public function getFromInput()
	{
		$this->setIdcfdi_pago( $this->input->post( "frm_tabla_cfdi_doctorelacionado_idcfdi_pago" ) );
		$this->setIddocumento( $this->input->post( "frm_tabla_cfdi_doctorelacionado_iddocumento" ) );
		$this->setSerie( $this->input->post( "frm_tabla_cfdi_doctorelacionado_serie" ) );
		$this->setFolio( $this->input->post( "frm_tabla_cfdi_doctorelacionado_folio" ) );
		$this->setMonedadr( $this->input->post( "frm_tabla_cfdi_doctorelacionado_monedadr" ) );
		$this->setMonedadr_sat_id( $this->input->post( "frm_tabla_cfdi_doctorelacionado_monedadr_sat_id" ) );
		$this->setMonedadr_sat_txt( $this->input->post( "frm_tabla_cfdi_doctorelacionado_monedadr_sat_txt" ) );
		$this->setTipocambiodr( $this->input->post( "frm_tabla_cfdi_doctorelacionado_tipocambiodr" ) );
		$this->setMetododepagodr( $this->input->post( "frm_tabla_cfdi_doctorelacionado_metododepagodr" ) );
		$this->setMetododepagodr_sat_id( $this->input->post( "frm_tabla_cfdi_doctorelacionado_metododepagodr_sat_id" ) );
		$this->setMetododepagodr_sat_txt( $this->input->post( "frm_tabla_cfdi_doctorelacionado_metododepagodr_sat_txt" ) );
		$this->setNumparcialidad( $this->input->post( "frm_tabla_cfdi_doctorelacionado_numparcialidad" ) );
		$this->setImpsaldoant( $this->input->post( "frm_tabla_cfdi_doctorelacionado_impsaldoant" ) );
		$this->setImppagado( $this->input->post( "frm_tabla_cfdi_doctorelacionado_imppagado" ) );
		$this->setImpsaldoinsoluto( $this->input->post( "frm_tabla_cfdi_doctorelacionado_impsaldoinsoluto" ) );
		return true;
	}
	public function addToDatabase()
	{
		$data=array(
			"idcfdi_pago" => $this->idcfdi_pago,
			"iddocumento" => $this->iddocumento,
			"serie" => $this->serie,
			"folio" => $this->folio,
			"monedadr" => $this->monedadr,
			"monedadr_sat_id" => $this->monedadr_sat_id,
			"monedadr_sat_txt" => $this->monedadr_sat_txt,
			"tipocambiodr" => $this->tipocambiodr,
			"metododepagodr" => $this->metododepagodr,
			"metododepagodr_sat_id" => $this->metododepagodr_sat_id,
			"metododepagodr_sat_txt" => $this->metododepagodr_sat_txt,
			"numparcialidad" => $this->numparcialidad,
			"impsaldoant" => $this->impsaldoant,
			"imppagado" => $this->imppagado,
			"impsaldoinsoluto" => $this->impsaldoinsoluto
		);
		$this->db->insert('cfdi_doctorelacionado', $data );
		$this->db->reset_query();
	}
	public function updateToDatabase($id=0)
	{
		$data=array(
			"idcfdi_pago" => $this->idcfdi_pago,
			"iddocumento" => $this->iddocumento,
			"serie" => $this->serie,
			"folio" => $this->folio,
			"monedadr" => $this->monedadr,
			"monedadr_sat_id" => $this->monedadr_sat_id,
			"monedadr_sat_txt" => $this->monedadr_sat_txt,
			"tipocambiodr" => $this->tipocambiodr,
			"metododepagodr" => $this->metododepagodr,
			"metododepagodr_sat_id" => $this->metododepagodr_sat_id,
			"metododepagodr_sat_txt" => $this->metododepagodr_sat_txt,
			"numparcialidad" => $this->numparcialidad,
			"impsaldoant" => $this->impsaldoant,
			"imppagado" => $this->imppagado,
			"impsaldoinsoluto" => $this->impsaldoinsoluto
		);
		$this->db->where( 'idcfdi_pago', $this->idcfdi_pago );
		$this->db->update( 'cfdi_doctorelacionado', $data );
		$this->db->reset_query();
		return true;
	}
	public function getAll()
	{
		$regs=$this->db->get('cfdi_doctorelacionado');
		$this->db->reset_query();
		if( $regs->num_rows() == 0 )
			return false;
		return $regs->result_array();
	}
	public function delete($id=0)
	{
		$this->db->where('idcfdi_pago',$this->idcfdi_pago);
		$this->db->delete( array('cfdi_doctorelacionado' ) );
		$this->db->reset_query();
	}
}
?>
