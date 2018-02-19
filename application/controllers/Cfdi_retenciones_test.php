<?php
class Cfdi_retenciones_test extends CI_Controller {
	public function test_set() {
		$this->load->model( "modcfdi_retenciones" );
		$objeto = new Modcfdi_retenciones();
		var_dump( $objeto );
		
		$objeto->setIdcfdi_comprobante("2");
		$objeto->setImpuesto("128");
		$objeto->setImpuesto_sat_id("002");
		$objeto->setImpuesto_sat_txt("IVA");
		$objeto->setImporte("12.34");
	
		var_dump( $objeto );
	}
	public function test_get() {
		$this->load->model( "modcfdi_retenciones" );
		$objeto = new Modcfdi_retenciones();

		$objeto->setIdcfdi_comprobante("2");
		$objeto->setImpuesto("128");
		$objeto->setImpuesto_sat_id("002");
		$objeto->setImpuesto_sat_txt("IVA");
		$objeto->setImporte("12.34");

		var_dump( "getIdcfdi_comprobante", $objeto->getIdcfdi_comprobante() );
		var_dump( "getImpuesto", $objeto->getImpuesto() );
		var_dump( "getImpuesto_sat_id", $objeto->getImpuesto_sat_id() );
		var_dump( "getImpuesto_sat_txt", $objeto->getImpuesto_sat_txt() );
		var_dump( "getImporte", $objeto->getImporte() );
	}
	function test_add() {
		$this->load->model( "modcfdi_retenciones" );
		$objeto = new Modcfdi_retenciones();

		$objeto->setIdcfdi_comprobante("2");
		$objeto->setImpuesto("128");
		$objeto->setImpuesto_sat_id("002");
		$objeto->setImpuesto_sat_txt("IVA");
		$objeto->setImporte("12.34");
		$objeto->addToDatabase();

		var_dump( $objeto->getIdcfdi_comprobante() );
	}
	public function test_getdb( $id = 0 ) {
		$this->load->model( "modcfdi_retenciones" );
		$objeto = new Modcfdi_retenciones();
		$objeto->setIdcfdi_comprobante( $id );
		$objeto->getFromDatabase( $id );
		var_dump( $objeto );
	}
	public function test_update( $id = 0 ) {
		$this->load->model( "modcfdi_retenciones" );
		$objeto = new Modcfdi_retenciones();
		$objeto->getFromDatabase( $id );

		$objeto->setIdcfdi_comprobante("2");
		$objeto->setImpuesto("128");
		$objeto->setImpuesto_sat_id("002");
		$objeto->setImpuesto_sat_txt("IVA");
		$objeto->setImporte("123.34");

		$objeto->updateToDatabase();
	}
	public function test_delete( $id = 0 ) {
		$this->load->model( "modcfdi_retenciones" );
		$objeto = new Modcfdi_retenciones();
		$objeto->setIdcfdi_comprobante( $id );
		$objeto->delete( $id );
	}
	public function test_getall() {
		$this->load->model( "modcfdi_retenciones" );
		$objeto = new Modcfdi_retenciones();
		var_dump( $objeto->getAll() );
	}
}

?>