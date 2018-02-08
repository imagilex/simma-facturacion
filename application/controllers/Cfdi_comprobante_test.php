<?php

class Cfdi_comprobante_test extends CI_Controller {
	public function test_set() {
		$this->load->model( "modcfdi_comprobante" );
		$objeto = new Modcfdi_comprobante();
		
		$objeto->setIdcfdi_comprobante("4");
		$objeto->idcfdi_comprobante();
		$objeto->setVersion("2.0");
		$objeto->setSerie("SerieX");
		$objeto->setFolio("Fol1");
		$objeto->setFecha("070218");
		$objeto->setSello("ASDFG12345");
		$objeto->setFormapago("126");
		$objeto->setFormapago_sat_id("03");
		$objeto->setFormapago_sat_txt("Transferencia electrónica de fondos");
		$objeto->setNocertificado("NO001");
		$objeto->setCertificado("CERTIFICADO");
		$objeto->setCondicionesdelpago("Ninguna");
		$objeto->setSubtotal("300");
		$objeto->setDescuento("200");
		$objeto->setMoneda("131");
		$objeto->setMoneda_sat_id("MXN");
		$objeto->setMoneda_sat_txt("Peso Mexicano");
		$objeto->setTipocambio("Alguno");
		$objeto->setTotal("100");
		$objeto->setTipodecomprobante("107");
		$objeto->setTipodecomprobante_sat_id("P");
		$objeto->setTipodecomprobante_sat_txt("Pago");
		$objeto->setMetodopago("130");
		$objeto->setMetodopago_sat_id("PPD");
		$objeto->setMetodopago_sat_txt("Pago en parcialidades o diferido");
		$objeto->setLugarexpedicion("EDOMEX");
		$objeto->setConfirmacion("YES");
		$objeto->setEmisor_rfc("ASDQWE123");
		$objeto->setEmisor_nombre("Carlos Eduardo");
		$objeto->setEmisor_regimenfiscal("160");
		$objeto->setEmisor_regimenfiscal_sat_id("501");
		$objeto->setEmisor_regimenfiscal_sat_txt("Genero");
		$objeto->setReceptor_rfc("JKLÑÑ123");
		$objeto->setReceptor_nombre("Dulce Melany");
		$objeto->setReceptor_residenciafiscal("Hidalgo");
		$objeto->setReceptor_numregidtrib("12345678");
		$objeto->setReceptor_usocfdi("139");
		$objeto->setReceptor_usocfdi_sat_id("P01");
		$objeto->setReceptor_usocfdi_sat_txt("Por definir");
		$objeto->setUuid("QWERTY");
		$objeto->setImpuestos_totalimpuestosretenidos("100");
		$objeto->setImpuestos_totalimpuestostrasladados("100");
		$objeto->setXml("Excelxml");
		$objeto->setPdf("Pdf");
		$objeto->setIdmanifiesto(" 204 ");
		$objeto->setEstadofactura("Bancarrota");
		$objeto->setFechacancelacion("080218");

		var_dump( $objeto );
	}
	public function test_get() {
		$this->load->model( "modcfdi_comprobante" );
		$objeto = new Modcfdi_comprobante();

		$objeto->setIdcfdi_comprobante( "1" );
		$objeto->setVersion( "2.0" );
		$objeto->setSerie( "SerieA" );
		$objeto->setFolio( "Fol8" );
		$objeto->setFormaPago( "124" );
		$objeto->setFormapago_sat_id( "01" );
		$objeto->setFormapago_sat_txt( "Efectivo" );
		$objeto->setIdmanifiesto( "205" );

		var_dump( "getIdcfdi_comprobante", $objeto->getIdcfdi_comprobante() );
		var_dump( "getVersion", $objeto->getVersion() );
		var_dump( "getSerie", $objeto->getSerie() );
		var_dump( "getFolio", $objeto->getFolio() );
		var_dump( "getFormaPago", $objeto->getFormaPago() );
		var_dump( "getFormapago_sat_id", $objeto->getFormapago_sat_id() );
		var_dump( "getFormapago_sat_txt", $objeto->getFormapago_sat_txt() );
		var_dump( "getIdmanifiesto", $objeto->getIdmanifiesto() );
	}
	function test_add() {
		$this->load->model( "modcfdi_comprobante" );
		$objeto = new Modcfdi_comprobante();

		$objeto->setIdcfdi_comprobante( "1" );
		$objeto->setVersion( "3.0" );
		$objeto->setSerie( "SerieB" );
		$objeto->setFolio( "Fol8" );
		$objeto->setFormaPago( "124" );
		$objeto->setFormapago_sat_id( "01" );
		$objeto->setFormapago_sat_txt( "Efectivo" );
		$objeto->setIdmanifiesto( "205" );

		$objeto->addToDatabase();

		var_dump( $objeto->getIdcfdi_comprobante() );
	}
	public function test_getdb( $id = 0 ) {
		$this->load->model( "modcfdi_comprobante" );
		$objeto = new Modcfdi_comprobante();
		$objeto->getFromDatabase( $id );
		var_dump( $objeto );
	}
	public function test_update( $id = 0 ) {
		$this->load->model( "modcfdi_comprobante" );
		$objeto = new Modcfdi_comprobante();
		$objeto->getFromDatabase( $id );

		$objeto->setVersion( "3.5" );
		$objeto->setSerie( "SerieX" );
		$objeto->setFolio( "Fol9" );
		$objeto->setFormaPago( "125" );
		$objeto->setFormapago_sat_id( "02" );
		$objeto->setFormapago_sat_txt( "Cheque nominativo" );
		$objeto->setIdmanifiesto( "206" );

		$objeto->updateToDatabase();
	}
	public function test_delete( $id = 0 ) {
		$this->load->model( "modcfdi_comprobante" );
		$objeto = new Modcfdi_comprobante();
		$objeto->delete( $id );
	}
	public function test_getall() {
		$this->load->model( "modcfdi_comprobante" );
		$objeto = new Modcfdi_comprobante();
		var_dump( $objeto->getAll() );
	}
}

?>