<?php
class Cfdi_comprobante_test extends CI_Controller {
	public function test_set() {
		$this->load->model( "modcfdi_comprobante" );
		$objeto = new Modcfdi_comprobante();
		
		$objeto->setIdcfdi_comprobante("1");
		$objeto->setVersion("2.0");
		$objeto->setSerie("SerieX");
		$objeto->setFolio("Fol1");
		$objeto->setFecha("2018-02-08 00:00:00");
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
		$objeto->setLugarexpedicion("EDOME");
		$objeto->setConfirmacion("YES");
		$objeto->setEmisor_rfc("ASDQWE123");
		$objeto->setEmisor_nombre("CarlosEduardo");
		$objeto->setEmisor_regimenfiscal("160");
		$objeto->setEmisor_regimenfiscal_sat_id("501");
		$objeto->setEmisor_regimenfiscal_sat_txt("Genero");
		$objeto->setReceptor_rfc("JKLÑÑ123");
		$objeto->setReceptor_nombre("Dulce Melany");
		$objeto->setReceptor_residenciafiscal("CDMX");
		$objeto->setReceptor_numregidtrib("12345678");
		$objeto->setReceptor_usocfdi("139");
		$objeto->setReceptor_usocfdi_sat_id("P01");
		$objeto->setReceptor_usocfdi_sat_txt("Por definir");
		$objeto->setUuid("QWERTY");
		$objeto->setImpuestos_totalimpuestosretenidos("100");
		$objeto->setImpuestos_totalimpuestostrasladados("100");
		$objeto->setXml("Excelxml");
		$objeto->setPdf("Pdf");
		$objeto->setIdmanifiesto(" 205 ");
		$objeto->setEstadofactura("120");
		$objeto->setFechacancelacion("080218");

		var_dump( $objeto );
	}
	public function test_get() {
		$this->load->model( "modcfdi_comprobante" );
		$objeto = new Modcfdi_comprobante();

		$objeto->setIdcfdi_comprobante("1");
		$objeto->setVersion("2.0");
		$objeto->setSerie("SerieX");
		$objeto->setFolio("Fol1");
		$objeto->setFecha("2018-02-08 00:00:00");
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
		$objeto->setLugarexpedicion("EDOME");
		$objeto->setConfirmacion("YES");
		$objeto->setEmisor_rfc("ASDQWE123");
		$objeto->setEmisor_nombre("CarlosEduardo");
		$objeto->setEmisor_regimenfiscal("160");
		$objeto->setEmisor_regimenfiscal_sat_id("501");
		$objeto->setEmisor_regimenfiscal_sat_txt("Genero");
		$objeto->setReceptor_rfc("JKLÑÑ123");
		$objeto->setReceptor_nombre("Dulce Melany");
		$objeto->setReceptor_residenciafiscal("CDMX");
		$objeto->setReceptor_numregidtrib("12345678");
		$objeto->setReceptor_usocfdi("139");
		$objeto->setReceptor_usocfdi_sat_id("P01");
		$objeto->setReceptor_usocfdi_sat_txt("Por definir");
		$objeto->setUuid("QWERTY");
		$objeto->setImpuestos_totalimpuestosretenidos("100");
		$objeto->setImpuestos_totalimpuestostrasladados("100");
		$objeto->setXml("Excelxml");
		$objeto->setPdf("Pdf");
		$objeto->setIdmanifiesto(" 205 ");
		$objeto->setEstadofactura("120");
		$objeto->setFechacancelacion("080218");
		
		var_dump("getIdcfdi_comprobante", $objeto->getIdcfdi_comprobante() );
		var_dump("getVersion", $objeto->getVersion() );
		var_dump("getSerie", $objeto->getSerie() );
		var_dump("getFolio", $objeto->getFolio() );
		var_dump("getFecha", $objeto->getFecha() );
		var_dump("getSello", $objeto->getSello() );
		var_dump("getFormapago", $objeto->getFormapago() );
		var_dump("getFormapago_sat_id", $objeto->getFormapago_sat_id() );
		var_dump("getFormapago_sat_txt", $objeto->getFormapago_sat_txt() );
		var_dump("getNocertificado", $objeto->getNocertificado() );
		var_dump("getCertificado", $objeto->getCertificado() );
		var_dump("getCondicionesdelpago", $objeto->getCondicionesdelpago() );
		var_dump("getSubtotal", $objeto->getSubtotal() );
		var_dump("getDescuento", $objeto->getDescuento() );
		var_dump("getMoneda", $objeto->getMoneda() );
		var_dump("getMoneda_sat_id", $objeto->getMoneda_sat_id() );
		var_dump("getMoneda_sat_txt", $objeto->getMoneda_sat_txt() );
		var_dump("getTipocambio", $objeto->getTipocambio() );
		var_dump("getTotal", $objeto->getTotal() );
		var_dump("getTipodecomprobante", $objeto->getTipodecomprobante() );
		var_dump("getTipodecomprobante_sat_id", $objeto->getTipodecomprobante_sat_id() );
		var_dump("getTipodecomprobante_sat_txt", $objeto->getTipodecomprobante_sat_txt() );
		var_dump("getMetodopago", $objeto->getMetodopago() );
		var_dump("getMetodopago_sat_id", $objeto->getMetodopago_sat_id() );
		var_dump("getMetodopago_sat_txt", $objeto->getMetodopago_sat_txt() );
		var_dump("getLugarexpedicion", $objeto->getLugarexpedicion() );
		var_dump("getConfirmacion", $objeto->getConfirmacion() );
		var_dump("getEmisor_rfc", $objeto->getEmisor_rfc() );
		var_dump("getEmisor_nombre", $objeto->getEmisor_nombre() );
		var_dump("getEmisor_regimenfiscal", $objeto->getEmisor_regimenfiscal() );
		var_dump("getEmisor_regimenfiscal_sat_id", $objeto->getEmisor_regimenfiscal_sat_id() );
		var_dump("getEmisor_regimenfiscal_sat_txt", $objeto->getEmisor_regimenfiscal_sat_txt() );
		var_dump("getReceptor_rfc", $objeto->getReceptor_rfc() );
		var_dump("getReceptor_nombre", $objeto->getReceptor_nombre() );
		var_dump("getReceptor_residenciafiscal", $objeto->getReceptor_residenciafiscal() );
		var_dump("getReceptor_numregidtrib", $objeto->getReceptor_numregidtrib() );
		var_dump("getReceptor_usocfdi", $objeto->getReceptor_usocfdi() );
		var_dump("getReceptor_usocfdi_sat_id", $objeto->getReceptor_usocfdi_sat_id() );
		var_dump("getReceptor_usocfdi_sat_txt", $objeto->getReceptor_usocfdi_sat_txt() );
		var_dump("getUuid", $objeto->getUuid() );
		var_dump("getImpuestos_totalimpuestosretenidos", $objeto->getImpuestos_totalimpuestosretenidos() );
		var_dump("getImpuestos_totalimpuestostrasladados", $objeto->getImpuestos_totalimpuestostrasladados() );
		var_dump("getXml", $objeto->getXml() );
		var_dump("getPdf", $objeto->getPdf() );
		var_dump("getIdmanifiesto", $objeto->getIdmanifiesto() );
		var_dump("getEstadofactura", $objeto->getEstadofactura() );
		var_dump("getFechacancelacion", $objeto->getFechacancelacion() );

	}
	function test_add() {
		$this->load->model( "modcfdi_comprobante" );
		$objeto = new Modcfdi_comprobante();

		$objeto->setIdcfdi_comprobante("1");
		$objeto->setVersion("2.0");
		$objeto->setSerie("SerieX");
		$objeto->setFolio("Fol1");
		$objeto->setFecha("2018-02-08 00:00:00");
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
		$objeto->setLugarexpedicion("EDOME");
		$objeto->setConfirmacion("YES");
		$objeto->setEmisor_rfc("ASDQWE123");
		$objeto->setEmisor_nombre("CarlosEduardo");
		$objeto->setEmisor_regimenfiscal("160");
		$objeto->setEmisor_regimenfiscal_sat_id("501");
		$objeto->setEmisor_regimenfiscal_sat_txt("Genero");
		$objeto->setReceptor_rfc("JKLÑÑ123");
		$objeto->setReceptor_nombre("Dulce Melany");
		$objeto->setReceptor_residenciafiscal("CDMX");
		$objeto->setReceptor_numregidtrib("12345678");
		$objeto->setReceptor_usocfdi("139");
		$objeto->setReceptor_usocfdi_sat_id("P01");
		$objeto->setReceptor_usocfdi_sat_txt("Por definir");
		$objeto->setUuid("QWERTY");
		$objeto->setImpuestos_totalimpuestosretenidos("100");
		$objeto->setImpuestos_totalimpuestostrasladados("100");
		$objeto->setXml("Excelxml");
		$objeto->setPdf("Pdf");
		$objeto->setIdmanifiesto(" 205 ");
		$objeto->setEstadofactura("120");
		$objeto->setFechacancelacion("080218");

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
		$objeto->setIdmanifiesto( "205" );

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