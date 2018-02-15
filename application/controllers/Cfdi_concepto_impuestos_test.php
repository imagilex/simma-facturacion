<?php

class Cfdi_concepto_impuestos_test extends CI_Controller {
	public function test_set() {
		$this->load->model( "modcfdi_concepto_impuestos" );
		$objeto = new Modcfdi_concepto_impuestos();
		var_dump( $objeto );
		
		$objeto->setIdcfdi_concepto("3");
		$objeto->setTipo("B");
		$objeto->setBase("2.4");
		$objeto->setImpuesto("128");
		$objeto->setImpuesto_sat_id("002");
		$objeto->setImpuesto_sat_txt("IVA");
		$objeto->setTipofactor("135");
		$objeto->setTipofactor_sat_id("Tasa");
		$objeto->setTipofactor_sat_txt("Tasa");
		$objeto->setImporte("3.4");
		
		var_dump( $objeto );
	}
	public function test_get() {
		$this->load->model( "modcfdi_concepto_impuestos" );
		$objeto = new Modcfdi_concepto_impuestos();

		$objeto->setIdcfdi_concepto("3");
		$objeto->setTipo("B");
		$objeto->setBase("2.4");
		$objeto->setImpuesto("128");
		$objeto->setImpuesto_sat_id("002");
		$objeto->setImpuesto_sat_txt("IVA");
		$objeto->setTipofactor("135");
		$objeto->setTipofactor_sat_id("Tasa");
		$objeto->setTipofactor_sat_txt("Tasa");
		$objeto->setImporte("3.4");
		
		var_dump( "getIdcfdi_concepto", $objeto->getIdcfdi_concepto() );
		var_dump( "getTipo", $objeto->getTipo() );
		var_dump( "getBase", $objeto->getBase() );
		var_dump( "getImpuesto", $objeto->getImpuesto() );
		var_dump( "getImpuesto_sat_id", $objeto->getImpuesto_sat_id() );
		var_dump( "getImpuesto_sat_txt", $objeto->getImpuesto_sat_txt() );
		var_dump( "getTipofactor", $objeto->getTipofactor() );
		var_dump( "getTipofactor_sat_id", $objeto->getTipofactor_sat_id() );
		var_dump( "getTipofactor_sat_txt", $objeto->getTipofactor_sat_txt() );
		var_dump( "getImporte", $objeto->getImporte() );
	}
	function test_add() {
		$this->load->model( "modcfdi_concepto_impuestos" );
		$objeto = new Modcfdi_concepto_impuestos();

		$objeto->setIdcfdi_concepto("3");
		$objeto->setTipo("C");
		$objeto->setBase("2.4");
		$objeto->setImpuesto("128");
		$objeto->setImpuesto_sat_id("002");
		$objeto->setImpuesto_sat_txt("IVA");
		$objeto->setTipofactor("135");
		$objeto->setTipofactor_sat_id("Tasa");
		$objeto->setTipofactor_sat_txt("Tasa");
		$objeto->setImporte("3.4");
		$objeto->addToDatabase();

		var_dump( $objeto->getIdcfdi_concepto() );
	}
	public function test_getdb( $id = 0 ) {
		$this->load->model( "modcfdi_concepto_impuestos" );
		$objeto = new Modcfdi_concepto_impuestos();
		$objeto->getFromDatabase( $id );
		var_dump( $objeto );
	}
	public function test_update( $id = 0 ) {
		$this->load->model( "modcfdi_concepto_impuestos" );
		$objeto = new Modcfdi_concepto_impuestos();
		$objeto->getFromDatabase( $id );

		$objeto->setIdcfdi_concepto("3");
		$objeto->setTipo("C");
		$objeto->setBase("23.4");
		$objeto->setImpuesto("128");
		$objeto->setImpuesto_sat_id("002");
		$objeto->setImpuesto_sat_txt("IVA");
		$objeto->setTipofactor("135");
		$objeto->setTipofactor_sat_id("Tasa");
		$objeto->setTipofactor_sat_txt("Tasa");
		$objeto->setImporte("31.4");
		

		$objeto->updateToDatabase();
	}
	public function test_delete( $id = 0 ) {
		$this->load->model( "modcfdi_concepto_impuestos" );
		$objeto = new Modcfdi_concepto_impuestos();
		$objeto->delete( $id );
	}
	public function test_getall() {
		$this->load->model( "modcfdi_concepto_impuestos" );
		$objeto = new Modcfdi_concepto_impuestos();
		var_dump( $objeto->getAll() );
	}
}

?>