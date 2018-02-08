<?php 
class ModCfdi_comprobante extends CI_Model
{
	private $idcfdi_comprobante;
	private $version;
	private $serie;
	private $folio;
	private $fecha;
	private $sello;
	private $formapago;
	private $formapago_sat_id;
	private $formapago_sat_txt;
	private $nocertificado;
	private $certificado;
	private $condicionesdelpago;
	private $subtotal;
	private $descuento;
	private $moneda;
	private $moneda_sat_id;
	private $moneda_sat_txt;
	private $tipocambio;
	private $total;
	private $tipodecomprobante;
	private $tipodecomprobante_sat_id;
	private $tipodecomprobante_sat_txt;
	private $metodopago;
	private $metodopago_sat_id;
	private $metodopago_sat_txt;
	private $lugarexpedicion;
	private $confirmacion;
	private $emisor_rfc;
	private $emisor_nombre;
	private $emisor_regimenfiscal;
	private $emisor_regimenfiscal_sat_id;
	private $emisor_regimenfiscal_sat_txt;
	private $receptor_rfc;
	private $receptor_nombre;
	private $receptor_residenciafiscal;
	private $receptor_numregidtrib;
	private $receptor_usocfdi;
	private $receptor_usocfdi_sat_id;
	private $receptor_usocfdi_sat_txt;
	private $uuid;
	private $impuestos_totalimpuestosretenidos;
	private $impuestos_totalimpuestostrasladados;
	private $xml;
	private $pdf;
	private $idmanifiesto;
	private $estadofactura;
	private $fechacancelacion;
	public function __construct()
 {
 		parent::__construct();
		$this->$version="";
		$this->$serie="";
		$this->$folio="";
		$this->$fecha="";
		$this->$sello="";
		$this->$formapago=0;
		$this->$formapago_sat_id="";
		$this->$formapago_sat_txt="";
		$this->$nocertificado="";
		$this->$certificado="";
		$this->$condicionesdelpago="";
		$this->$subtotal="";
		$this->$descuento="";
		$this->$moneda=0;
		$this->$moneda_sat_id="";
		$this->$moneda_sat_txt="";
		$this->$tipocambio="";
		$this->$total="";
		$this->$tipodecomprobante=0;
		$this->$tipodecomprobante_sat_id="";
		$this->$tipodecomprobante_sat_txt="";
		$this->$metodopago=0;
		$this->$metodopago_sat_id="";
		$this->$metodopago_sat_txt="";
		$this->$lugarexpedicion="";
		$this->$confirmacion="";
		$this->$emisor_rfc="";
		$this->$emisor_nombre="";
		$this->$emisor_regimenfiscal=0;
		$this->$emisor_regimenfiscal_sat_id="";
		$this->$emisor_regimenfiscal_sat_txt="";
		$this->$receptor_rfc="";
		$this->$receptor_nombre="";
		$this->$receptor_residenciafiscal="";
		$this->$receptor_numregidtrib="";
		$this->$receptor_usocfdi=0;
		$this->$receptor_usocfdi_sat_id="";
		$this->$receptor_usocfdi_sat_txt="";
		$this->$uuid="";
		$this->$impuestos_totalimpuestosretenidos="";
		$this->$impuestos_totalimpuestostrasladados="";
		$this->$xml="";
		$this->$pdf="";
		$this->$idmanifiesto=0;
		$this->$estadofactura=0;
		$this->$fechacancelacion="";
 }
 	public function getIdcfdi_comprobante() {return $this->idcfdi_comprobante;}
	public function getVersion() {return $this->version;}
	public function getSerie() {return $this->serie;}
	public function getFolio() {return $this->folio;}
	public function getFecha() {return $this->fecha;}
	public function getSello() {return $this->sello;}
	public function getFormapago() {return $this->formapago;}
	public function getFormapago_sat_id() {return $this->formapago_sat_id;}
	public function getFormapago_sat_txt() {return $this->formapago_sat_txt;}
	public function getNocertificado() {return $this->nocertificado;}
	public function getCertificado() {return $this->certificado;}
	public function getCondicionesdelpago() {return $this->condicionesdelpago;}
	public function getSubtotal() {return $this->subtotal;}
	public function getDescuento() {return $this->descuento;}
	public function getMoneda() {return $this->moneda;}
	public function getMoneda_sat_id() {return $this->moneda_sat_id;}
	public function getMoneda_sat_txt() {return $this->moneda_sat_txt;}
	public function getTipocambio() {return $this->tipocambio;}
	public function getTotal() {return $this->total;}
	public function getTipodecomprobante() {return $this->tipodecomprobante;}
	public function getTipodecomprobante_sat_id() {return $this->tipodecomprobante_sat_id;}
	public function getTipodecomprobante_sat_txt() {return $this->tipodecomprobante_sat_txt;}
	public function getMetodopago() {return $this->metodopago;}
	public function getMetodopago_sat_id() {return $this->metodopago_sat_id;}
	public function getMetodopago_sat_txt() {return $this->metodopago_sat_txt;}
	public function getLugarexpedicion() {return $this->lugarexpedicion;}
	public function getConfirmacion() {return $this->confirmacion;}
	public function getEmisor_rfc() {return $this->emisor_rfc;}
	public function getEmisor_nombre() {return $this->emisor_nombre;}
	public function getEmisor_regimenfiscal() {return $this->emisor_regimenfiscal;}
	public function getEmisor_regimenfiscal_sat_id() {return $this->emisor_regimenfiscal_sat_id;}
	public function getEmisor_regimenfiscal_sat_txt() {return $this->emisor_regimenfiscal_sat_txt;}
	public function getReceptor_rfc() {return $this->receptor_rfc;}
	public function getReceptor_nombre() {return $this->receptor_nombre;}
	public function getReceptor_residenciafiscal() {return $this->receptor_residenciafiscal;}
	public function getReceptor_numregidtrib() {return $this->receptor_numregidtrib;}
	public function getReceptor_usocfdi() {return $this->receptor_usocfdi;}
	public function getReceptor_usocfdi_sat_id() {return $this->receptor_usocfdi_sat_id;}
	public function getReceptor_usocfdi_sat_txt() {return $this->receptor_usocfdi_sat_txt;}
	public function getUuid() {return $this->uuid;}
	public function getImpuestos_totalimpuestosretenidos() {return $this->impuestos_totalimpuestosretenidos;}
	public function getImpuestos_totalimpuestostrasladados() {return $this->impuestos_totalimpuestostrasladados;}
	public function getXml() {return $this->xml;}
	public function getPdf() {return $this->pdf;}
	public function getIdmanifiesto() {return $this->idmanifiesto;}
	public function getEstadofactura() {return $this->estadofactura;}
	public function getFechacancelacion() {return $this->fechacancelacion;}
  	public function setIdcfdi_comprobante( $valor ) {$this->idcfdi_comprobante= intval($valor);}
	public function setVersion( $valor ) {$this->version="".$valor;}
	public function setSerie( $valor ) {$this->serie="".$valor;}
	public function setFolio( $valor ) {$this->folio="".$valor;}
	public function setFecha( $valor ) {$this->fecha="".$valor;}
	public function setSello( $valor ) {$this->sello="".$valor;}
	public function setFormapago( $valor ) {$this->formapago= intval($valor);}
	public function setFormapago_sat_id( $valor ) {$this->formapago_sat_id="".$valor;}
	public function setFormapago_sat_txt( $valor ) {$this->formapago_sat_txt="".$valor;}
	public function setNocertificado( $valor ) {$this->nocertificado="".$valor;}
	public function setCertificado( $valor ) {$this->certificado="".$valor;}
	public function setCondicionesdelpago( $valor ) {$this->condicionesdelpago="".$valor;}
	public function setSubtotal( $valor ) {$this->subtotal=floatval($valor);}
	public function setDescuento( $valor ) {$this->descuento=floatval($valor);}
	public function setMoneda( $valor ) {$this->moneda=intval($valor);}
	public function setMoneda_sat_id( $valor ) {$this->moneda_sat_id="".$valor;}
	public function setMoneda_sat_txt( $valor ) {$this->moneda_sat_txt="".$valor;}
	public function setTipocambio( $valor ) {$this->tipocambio=floatval($valor);}
	public function setTotal( $valor ) {$this->total=floatval($valor);}
	public function setTipodecomprobante( $valor ) {$this->tipodecomprobante=intval($valor);}
	public function setTipodecomprobante_sat_id( $valor ) {$this->tipodecomprobante_sat_id="".$valor;}
	public function setTipodecomprobante_sat_txt( $valor ) {$this->tipodecomprobante_sat_txt="".$valor;}
	public function setMetodopago( $valor ) {$this->metodopago=intval($valor);}
	public function setMetodopago_sat_id( $valor ) {$this->metodopago_sat_id="".$valor;}
	public function setMetodopago_sat_txt( $valor ) {$this->metodopago_sat_txt="".$valor;}
	public function setLugarexpedicion( $valor ) {$this->lugarexpedicion="".$valor;}
	public function setConfirmacion( $valor ) {$this->confirmacion="".$valor;}
	public function setEmisor_rfc( $valor ) {$this->emisor_rfc="".$valor;}
	public function setEmisor_nombre( $valor ) {$this->emisor_nombre="".$valor;}
	public function setEmisor_regimenfiscal( $valor ) {$this->emisor_regimenfiscal=intval($valor);}
	public function setEmisor_regimenfiscal_sat_id( $valor ) {$this->emisor_regimenfiscal_sat_id="".$valor;}
	public function setEmisor_regimenfiscal_sat_txt( $valor ) {$this->emisor_regimenfiscal_sat_txt="".$valor;}
	public function setReceptor_rfc( $valor ) {$this->receptor_rfc="".$valor;}
	public function setReceptor_nombre( $valor ) {$this->receptor_nombre="".$valor;}
	public function setReceptor_residenciafiscal( $valor ) {$this->receptor_residenciafiscal="".$valor;}
	public function setReceptor_numregidtrib( $valor ) {$this->receptor_numregidtrib="".$valor;}
	public function setReceptor_usocfdi( $valor ) {$this->receptor_usocfdi=intval($valor);}
	public function setReceptor_usocfdi_sat_id( $valor ) {$this->receptor_usocfdi_sat_id="".$valor;}
	public function setReceptor_usocfdi_sat_txt( $valor ) {$this->receptor_usocfdi_sat_txt="".$valor;}
	public function setUuid( $valor ) {$this->uuid="".$valor;}
	public function setImpuestos_totalimpuestosretenidos( $valor ) {$this->impuestos_totalimpuestosretenidos=floatval($valor);}
	public function setImpuestos_totalimpuestostrasladados( $valor ) {$this->impuestos_totalimpuestostrasladados=floatval($valor);}
	public function setXml( $valor ) {$this->xml="".$valor;}
	public function setPdf( $valor ) {$this->pdf="".$valor;}
	public function setIdmanifiesto( $valor ) {$this->idmanifiesto=intval($valor);}
	public function setEstadofactura( $valor ) {$this->estadofactura=intval($valor);}
	public function setFechacancelacion( $valor ) {$this->fechacancelacion="".$valor;}	
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
		$regs=$this->db->get('cfdi_comprobante');
		$this->db->reset_query();
		if($regs->num_rows()==0) {
		return false;
		}
		$reg=$regs->row_array();
		$this->setIdcfdi_comprobante($reg["idcfdi_comprobante"]);
		$this->setVersion($reg["version"]);
		$this->setSerie($reg["serie"]);
		$this->setFolio($reg["folio"]);
		$this->setFecha($reg["fecha"]);
		$this->setSello($reg["sello"]);
		$this->setFormapago($reg["formapago"]);
		$this->setFormapago_sat_id($reg["formapago_sat_id"]);
		$this->setFormapago_sat_txt($reg["formapago_sat_txt"]);
		$this->setNocertificado($reg["nocertificado"]);
		$this->setCertificado($reg["certificado"]);
		$this->setCondicionesdelpago($reg["condicionesdelpago"]);
		$this->setSubtotal($reg["subtotal"]);
		$this->setDescuento($reg["descuento"]);
		$this->setMoneda($reg["moneda"]);
		$this->setMoneda_sat_id($reg["moneda_sat_id"]);
		$this->setMoneda_sat_txt($reg["moneda_sat_txt"]);
		$this->setTipocambio($reg["tipocambio"]);
		$this->setTotal($reg["total"]);
		$this->setTipodecomprobante($reg["tipodecomprobante"]);
		$this->setTipodecomprobante_sat_id($reg["tipodecomprobante_sat_id"]);
		$this->setTipodecomprobante_sat_txt($reg["tipodecomprobante_sat_txt"]);
		$this->setMetodopago($reg["metodopago"]);
		$this->setMetodopago_sat_id($reg["metodopago_sat_id"]);
		$this->setMetodopago_sat_txt($reg["metodopago_sat_txt"]);
		$this->setLugarexpedicion($reg["lugarexpedicion"]);
		$this->setConfirmacion($reg["confirmacion"]);
		$this->setEmisor_rfc($reg["emisor_rfc"]);
		$this->setEmisor_nombre($reg["emisor_nombre"]);
		$this->setEmisor_regimenfiscal($reg["emisor_regimenfiscal"]);
		$this->setEmisor_regimenfiscal_sat_id($reg["emisor_regimenfiscal_sat_id"]);
		$this->setEmisor_regimenfiscal_sat_txt($reg["emisor_regimenfiscal_sat_txt"]);
		$this->setReceptor_rfc($reg["receptor_rfc"]);
		$this->setReceptor_nombre($reg["receptor_nombre"]);
		$this->setReceptor_residenciafiscal($reg["receptor_residenciafiscal"]);
		$this->setReceptor_numregidtrib($reg["receptor_numregidtrib"]);
		$this->setReceptor_usocfdi($reg["receptor_usocfdi"]);
		$this->setReceptor_usocfdi_sat_id($reg["receptor_usocfdi_sat_id"]);
		$this->setReceptor_usocfdi_sat_txt($reg["receptor_usocfdi_sat_txt"]);
		$this->setUuid($reg["uuid"]);
		$this->setImpuestos_totalimpuestosretenidos($reg["impuestos_totalimpuestosretenidos"]);
		$this->setImpuestos_totalimpuestostrasladados($reg["impuestos_totalimpuestostrasladados"]);
		$this->setXml($reg["xml"]);
		$this->setPdf($reg["pdf"]);
		$this->setIdmanifiesto($reg["idmanifiesto"]);
		$this->setEstadofactura($reg["estadofactura"]);
		$this->setFechacancelacion($reg["fechacancelacion"]);
		return true;
 	}
 public function getFromInput()
 {

 		$this->setIdcfdi_comprobante($this->input->post("frm_cfdi_comprobante_idcfdi_comprobante"));
		$this->setVersion($this->input->post("frm_cfdi_comprobante_version"));
		$this->setSerie($this->input->post("frm_cfdi_comprobante_serie"));
		$this->setFolio($this->input->post("frm_cfdi_comprobante_folio"));
		$this->setFecha($this->input->post("frm_cfdi_comprobante_fecha"));
		$this->setSello($this->input->post("frm_cfdi_comprobante_sello"));
		$this->setFormapago($this->input->post("frm_cfdi_comprobante_formapago"));
		$this->setFormapago_sat_id($this->input->post("frm_cfdi_comprobante_formapago_sat_id"));
		$this->setFormapago_sat_txt($this->input->post("frm_cfdi_comprobante_formapago_sat_txt"));
		$this->setNocertificado($this->input->post("frm_cfdi_comprobante_nocertificado"));
		$this->setCertificado($this->input->post("frm_cfdi_comprobante_certificado"));
		$this->setCondicionesdelpago($this->input->post("frm_cfdi_comprobante_condicionesdelpago"));
		$this->setSubtotal($this->input->post("frm_cfdi_comprobante_subtotal"));
		$this->setDescuento($this->input->post("frm_cfdi_comprobante_descuento"));
		$this->setMoneda($this->input->post("frm_cfdi_comprobante_moneda"));
		$this->setMoneda_sat_id($this->input->post("frm_cfdi_comprobante_moneda_sat_id"));
		$this->setMoneda_sat_txt($this->input->post("frm_cfdi_comprobante_moneda_sat_txt"));
		$this->setTipocambio($this->input->post("frm_cfdi_comprobante_tipocambio"));
		$this->setTotal($this->input->post("frm_cfdi_comprobante_total"));
		$this->setTipodecomprobante($this->input->post("frm_cfdi_comprobante_tipodecomprobante"));
		$this->setTipodecomprobante_sat_id($this->input->post("frm_cfdi_comprobante_tipodecomprobante_sat_id"));
		$this->setTipodecomprobante_sat_txt($this->input->post("frm_cfdi_comprobante_tipodecomprobante_sat_txt"));
		$this->setMetodopago($this->input->post("frm_cfdi_comprobante_metodopago"));
		$this->setMetodopago_sat_id($this->input->post("frm_cfdi_comprobante_metodopago_sat_id"));
		$this->setMetodopago_sat_txt($this->input->post("frm_cfdi_comprobante_metodopago_sat_txt"));
		$this->setLugarexpedicion($this->input->post("frm_cfdi_comprobante_lugarexpedicion"));
		$this->setConfirmacion($this->input->post("frm_cfdi_comprobante_confirmacion"));
		$this->setEmisor_rfc($this->input->post("frm_cfdi_comprobante_emisor_rfc"));
		$this->setEmisor_nombre($this->input->post("frm_cfdi_comprobante_emisor_nombre"));
		$this->setEmisor_regimenfiscal($this->input->post("frm_cfdi_comprobante_emisor_regimenfiscal"));
		$this->setEmisor_regimenfiscal_sat_id($this->input->post("frm_cfdi_comprobante_emisor_regimenfiscal_sat_id"));
		$this->setEmisor_regimenfiscal_sat_txt($this->input->post("frm_cfdi_comprobante_emisor_regimenfiscal_sat_txt"));
		$this->setReceptor_rfc($this->input->post("frm_cfdi_comprobante_receptor_rfc"));
		$this->setReceptor_nombre($this->input->post("frm_cfdi_comprobante_receptor_nombre"));
		$this->setReceptor_residenciafiscal($this->input->post("frm_cfdi_comprobante_receptor_residenciafiscal"));
		$this->setReceptor_numregidtrib($this->input->post("frm_cfdi_comprobante_receptor_numregidtrib"));
		$this->setReceptor_usocfdi($this->input->post("frm_cfdi_comprobante_receptor_usocfdi"));
		$this->setReceptor_usocfdi_sat_id($this->input->post("frm_cfdi_comprobante_receptor_usocfdi_sat_id"));
		$this->setReceptor_usocfdi_sat_txt($this->input->post("frm_cfdi_comprobante_receptor_usocfdi_sat_txt"));
		$this->setUuid($this->input->post("frm_cfdi_comprobante_uuid"));
		$this->setImpuestos_totalimpuestosretenidos($this->input->post("frm_cfdi_comprobante_impuestos_totalimpuestosretenidos"));
		$this->setImpuestos_totalimpuestostrasladados($this->input->post("frm_cfdi_comprobante_impuestos_totalimpuestostrasladados"));
		$this->setXml($this->input->post("frm_cfdi_comprobante_xml"));
		$this->setPdf($this->input->post("frm_cfdi_comprobante_pdf"));
		$this->setIdmanifiesto($this->input->post("frm_cfdi_comprobante_idmanifiesto"));
		$this->setEstadofactura($this->input->post("frm_cfdi_comprobante_estadofactura"));
		$this->setFechacancelacion($this->input->post("frm_cfdi_comprobante_fechacancelacion"));
 		return true;
 }
 public function addToDatabase()
 {
 $data=array(
 	"idcfdi_comprobante" => $this->idcfdi_comprobante,
	"version" => $this->version,
	"serie" => $this->serie,
	"folio" => $this->folio,
	"fecha" => $this->fecha,
	"sello" => $this->sello,
	"formapago" => $this->formapago,
	"formapago_sat_id" => $this->formapago_sat_id,
	"formapago_sat_txt" => $this->formapago_sat_txt,
	"nocertificado" => $this->nocertificado,
	"certificado" => $this->certificado,
	"condicionesdelpago" => $this->condicionesdelpago,
	"subtotal" => $this->subtotal,
	"descuento" => $this->descuento,
	"moneda" => $this->moneda,
	"moneda_sat_id" => $this->moneda_sat_id,
	"moneda_sat_txt" => $this->moneda_sat_txt,
	"tipocambio" => $this->tipocambio,
	"total" => $this->total,
	"tipodecomprobante" => $this->tipodecomprobante,
	"tipodecomprobante_sat_id" => $this->tipodecomprobante_sat_id,
	"tipodecomprobante_sat_txt" => $this->tipodecomprobante_sat_txt,
	"metodopago" => $this->metodopago,
	"metodopago_sat_id" => $this->metodopago_sat_id,
	"metodopago_sat_txt" => $this->metodopago_sat_txt,
	"lugarexpedicion" => $this->lugarexpedicion,
	"confirmacion" => $this->confirmacion,
	"emisor_rfc" => $this->emisor_rfc,
	"emisor_nombre" => $this->emisor_nombre,
	"emisor_regimenfiscal" => $this->emisor_regimenfiscal,
	"emisor_regimenfiscal_sat_id" => $this->emisor_regimenfiscal_sat_id,
	"emisor_regimenfiscal_sat_txt" => $this->emisor_regimenfiscal_sat_txt,
	"receptor_rfc" => $this->receptor_rfc,
	"receptor_nombre" => $this->receptor_nombre,
	"receptor_residenciafiscal" => $this->receptor_residenciafiscal,
	"receptor_numregidtrib" => $this->receptor_numregidtrib,
	"receptor_usocfdi" => $this->receptor_usocfdi,
	"receptor_usocfdi_sat_id" => $this->receptor_usocfdi_sat_id,
	"receptor_usocfdi_sat_txt" => $this->receptor_usocfdi_sat_txt,
	"uuid" => $this->uuid,
	"impuestos_totalimpuestosretenidos" => $this->impuestos_totalimpuestosretenidos,
	"impuestos_totalimpuestostrasladados" => $this->impuestos_totalimpuestostrasladados,
	"xml" => $this->xml,
	"pdf" => $this->pdf,
	"idmanifiesto" => $this->idmanifiesto,
	"estadofactura" => $this->estadofactura,
	"fechacancelacion" => $this->fechacancelacion
	 );
	 $this->db->insert('cfdi_comprobante', $data );
	 $this->setIdCampo( $this->db->insert_id() );
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
		"version" => $this->version,
		"serie" => $this->serie,
		"folio" => $this->folio,
		"fecha" => $this->fecha,
		"sello" => $this->sello,
		"formapago" => $this->formapago,
		"formapago_sat_id" => $this->formapago_sat_id,
		"formapago_sat_txt" => $this->formapago_sat_txt,
		"nocertificado" => $this->nocertificado,
		"certificado" => $this->certificado,
		"condicionesdelpago" => $this->condicionesdelpago,
		"subtotal" => $this->subtotal,
		"descuento" => $this->descuento,
		"moneda" => $this->moneda,
		"moneda_sat_id" => $this->moneda_sat_id,
		"moneda_sat_txt" => $this->moneda_sat_txt,
		"tipocambio" => $this->tipocambio,
		"total" => $this->total,
		"tipodecomprobante" => $this->tipodecomprobante,
		"tipodecomprobante_sat_id" => $this->tipodecomprobante_sat_id,
		"tipodecomprobante_sat_txt" => $this->tipodecomprobante_sat_txt,
		"metodopago" => $this->metodopago,
		"metodopago_sat_id" => $this->metodopago_sat_id,
		"metodopago_sat_txt" => $this->metodopago_sat_txt,
		"lugarexpedicion" => $this->lugarexpedicion,
		"confirmacion" => $this->confirmacion,
		"emisor_rfc" => $this->emisor_rfc,
		"emisor_nombre" => $this->emisor_nombre,
		"emisor_regimenfiscal" => $this->emisor_regimenfiscal,
		"emisor_regimenfiscal_sat_id" => $this->emisor_regimenfiscal_sat_id,
		"emisor_regimenfiscal_sat_txt" => $this->emisor_regimenfiscal_sat_txt,
		"receptor_rfc" => $this->receptor_rfc,
		"receptor_nombre" => $this->receptor_nombre,
		"receptor_residenciafiscal" => $this->receptor_residenciafiscal,
		"receptor_numregidtrib" => $this->receptor_numregidtrib,
		"receptor_usocfdi" => $this->receptor_usocfdi,
		"receptor_usocfdi_sat_id" => $this->receptor_usocfdi_sat_id,
		"receptor_usocfdi_sat_txt" => $this->receptor_usocfdi_sat_txt,
		"uuid" => $this->uuid,
		"impuestos_totalimpuestosretenidos" => $this->impuestos_totalimpuestosretenidos,
		"impuestos_totalimpuestostrasladados" => $this->impuestos_totalimpuestostrasladados,
		"xml" => $this->xml,
		"pdf" => $this->pdf,
		"idmanifiesto" => $this->idmanifiesto,
		"estadofactura" => $this->estadofactura,
		"fechacancelacion" => $this->fechacancelacion
	 );
	 $this->db->where( 'idcfdi_comprobante', $this->idcfdi_comprobante );
	 $this->db->update( 'cfdi_comprobante', $data );
	 $this->db->reset_query();
	 return true;
	 }
 public function getAll()
	 {
	 $this->db->order_by('fecha');
	 $regs=$this->db->get('cfdi_comprobante');
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
	 $this->db->delete( array('cfdi_comprobante' ) );
	 $this->db->reset_query();
	 }
	}
?>