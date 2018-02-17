<?php

class Cfdi_pago_test extends CI_Controller {
	public function test_set() {
		$this->load->model( "modcfdi_pago" );
		$objeto = new modcfdi_pago();
		var_dump( $objeto );

		$objeto->setIdcfdi_pago( "2" );
		$objeto->setIdcfdi_comprobante( "2" );
		$objeto->setFechapago( "2018-02-08 00:00:00" );
		$objeto->setFormadepagop( "18" );
		$objeto->setFormadepagop_sat_id( "03" );
		$objeto->setFormadepagop_sat_txt( "Transferencia electrónica de fondos" );
		$objeto->setMonedap( "21" );
		$objeto->setMonedap_sat_id( "MXN" );
		$objeto->setMonedap_sat_txt( "Peso Mexicano" );
		$objeto->setTipocambiop( "12.4" );
		$objeto->setMonto( "11.2" );
		$objeto->setNumoperacion( "ghf222" );
		$objeto->setRfcemisorctaord( "hg111" );
		$objeto->setNombancoordext( "hjgvygyj4444" );
		$objeto->setCtaordenante( "hygy333" );
		$objeto->setRfcemisorctaben( "yufty333" );
		$objeto->setCtabeneficiario( "uyfytv4232" );
		$objeto->setTipocadpago( "31" );
		$objeto->setTipocadpago_sat_id( "01" );
		$objeto->setTipocadpago_sat_txt( "SPEI" );
		$objeto->setCertpago( "fybwubf" );
		$objeto->setCadpago( "fegw" );
		$objeto->setSellopago( "jbib" );
		
		var_dump( $objeto );
	}
	public function test_get() {
		$this->load->model( "modcfdi_pago" );
		$objeto = new modcfdi_pago();

		$objeto->setIdcfdi_pago( "2" );
		$objeto->setIdcfdi_comprobante( "2" );
		$objeto->setFechapago( "02/01/1996" );
		$objeto->setFormadepagop( "18" );
		$objeto->setFormadepagop_sat_id( "03" );
		$objeto->setFormadepagop_sat_txt( "Transferencia electrónica de fondos" );
		$objeto->setMonedap( "21" );
		$objeto->setMonedap_sat_id( "MXN" );
		$objeto->setMonedap_sat_txt( "Peso Mexicano" );
		$objeto->setTipocambiop( "12.4" );
		$objeto->setMonto( "11.2" );
		$objeto->setNumoperacion( "ghf222" );
		$objeto->setRfcemisorctaord( "hg111" );
		$objeto->setNombancoordext( "hjgvygyj4444" );
		$objeto->setCtaordenante( "hygy333" );
		$objeto->setRfcemisorctaben( "yufty333" );
		$objeto->setCtabeneficiario( "uyfytv4232" );
		$objeto->setTipocadpago( "31" );
		$objeto->setTipocadpago_sat_id( "01" );
		$objeto->setTipocadpago_sat_txt( "SPEI" );
		$objeto->setCertpago( "fybwubf" );
		$objeto->setCadpago( "fegw" );
		$objeto->setSellopago( "jbib" );

		var_dump( "getIdcfdi_pago", $objeto->getIdcfdi_pago() );
		var_dump( "getIdcfdi_comprobante", $objeto->getIdcfdi_comprobante() );
		var_dump( "getFechapago", $objeto->getFechapago() );
		var_dump( "getFormadepagop", $objeto->getFormadepagop() );
		var_dump( "getFormadepagop_sat_id", $objeto->getFormadepagop_sat_id() );
		var_dump( "getFormadepagop_sat_txt", $objeto->getFormadepagop_sat_txt() );
		var_dump( "getMonedap", $objeto->getMonedap() );
		var_dump( "getMonedap_sat_id", $objeto->getMonedap_sat_id() );
		var_dump( "getMonedap_sat_txt", $objeto->getMonedap_sat_txt() );
		var_dump( "getTipocambiop", $objeto->getTipocambiop() );
		var_dump( "getMonto", $objeto->getMonto() );
		var_dump( "getNumoperacion", $objeto->getNumoperacion() );
		var_dump( "getRfcemisorctaord", $objeto->getRfcemisorctaord() );
		var_dump( "getNombancoordext", $objeto->getNombancoordext() );
		var_dump( "getCtaordenante", $objeto->getCtaordenante() );
		var_dump( "getRfcemisorctaben", $objeto->getRfcemisorctaben() );
		var_dump( "getCtabeneficiario", $objeto->getCtabeneficiario() );
		var_dump( "getTipocadpago", $objeto->getTipocadpago() );
		var_dump( "getTipocadpago_sat_id", $objeto->getTipocadpago_sat_id() );
		var_dump( "getTipocadpago_sat_txt", $objeto->getTipocadpago_sat_txt() );
		var_dump( "getCertpago", $objeto->getCertpago() );
		var_dump( "getCadpago", $objeto->getCadpago() );
		var_dump( "getSellopago", $objeto->getSellopago() );
	}
	function test_add() {
		$this->load->model( "modcfdi_pago" );
		$objeto = new modcfdi_pago();

		$objeto->setIdcfdi_pago( "2" );
		$objeto->setIdcfdi_comprobante( "2" );
		$objeto->setFechapago( "02/01/1996" );
		$objeto->setFormadepagop( "18" );
		$objeto->setFormadepagop_sat_id( "03" );
		$objeto->setFormadepagop_sat_txt( "Transferencia electrónica de fondos" );
		$objeto->setMonedap( "21" );
		$objeto->setMonedap_sat_id( "MXN" );
		$objeto->setMonedap_sat_txt( "Peso Mexicano" );
		$objeto->setTipocambiop( "12.4" );
		$objeto->setMonto( "11.2" );
		$objeto->setNumoperacion( "ghf222" );
		$objeto->setRfcemisorctaord( "hg111" );
		$objeto->setNombancoordext( "hjgvygyj4444" );
		$objeto->setCtaordenante( "hygy333" );
		$objeto->setRfcemisorctaben( "yufty333" );
		$objeto->setCtabeneficiario( "uyfytv4232" );
		$objeto->setTipocadpago( "31" );
		$objeto->setTipocadpago_sat_id( "01" );
		$objeto->setTipocadpago_sat_txt( "SPEI" );
		$objeto->setCertpago( "fybwubf" );
		$objeto->setCadpago( "fegw" );
		$objeto->setSellopago( "jbib" );

		$objeto->addToDatabase();

		var_dump( $objeto->getIdcfdi_pago() );
	}
	public function test_getdb( $id = 0 ) {
		$this->load->model( "modcfdi_pago" );
		$objeto = new modcfdi_pago();
		$objeto->getFromDatabase( $id );
		var_dump( $objeto );
	}
	public function test_update( $id = 0 ) {
		$this->load->model( "modcfdi_pago" );
		$objeto = new modcfdi_pago();
		$objeto->getFromDatabase( $id );

		$objeto->setIdcfdi_pago( "2" );
		$objeto->setIdcfdi_comprobante( "2" );
		$objeto->setFechapago( "02/02/1996" );
		$objeto->setFormadepagop( "18" );
		$objeto->setFormadepagop_sat_id( "03" );
		$objeto->setFormadepagop_sat_txt( "Transferencia electrónica de fondos" );
		$objeto->setMonedap( "21" );
		$objeto->setMonedap_sat_id( "MXN" );
		$objeto->setMonedap_sat_txt( "Peso Mexicano" );
		$objeto->setTipocambiop( "1.4" );
		$objeto->setMonto( "1.2" );
		$objeto->setNumoperacion( "ghf555" );
		$objeto->setRfcemisorctaord( "hg555" );
		$objeto->setNombancoordext( "hjgvygyj5555" );
		$objeto->setCtaordenante( "hygy555" );
		$objeto->setRfcemisorctaben( "yufty555" );
		$objeto->setCtabeneficiario( "uyfytv5555" );
		$objeto->setTipocadpago( "31" );
		$objeto->setTipocadpago_sat_id( "01" );
		$objeto->setTipocadpago_sat_txt( "SPEI" );
		$objeto->setCertpago( "fybwubf" );
		$objeto->setCadpago( "fegw" );
		$objeto->setSellopago( "jbib" );

		$objeto->updateToDatabase();
	}
	public function test_delete( $id = 0 ) {
		$this->load->model( "modcfdi_pago" );
		$objeto = new modcfdi_pago();
		$objeto->delete( $id );
	}
	public function test_getall() {
		$this->load->model( "modcfdi_pago" );
		$objeto = new modcfdi_pago();
		var_dump( $objeto->getAll() );
	}
}

?>