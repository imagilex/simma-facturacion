<?php

class Cfdi_traslados_test extends CI_Controller {
	public function test_set() {
		$this->load->model( "modcfdi_traslados" );
		$objeto = new Modcfdi_traslados();
		var_dump( $objeto );
		
		$objeto->setIdcfdi_comprobante( "1" );
		$objeto->setImpuesto( "128" );
		$objeto->setImpuesto_sat_id( "002" );
		$objeto->setImpuesto_sat_txt( "IVA" );
		$objeto->setTipofactor( "135" );
		$objeto->setTipofactor_sat_id( "Tasa" );
		$objeto->setTipofactor_sat_txt( "Tasa" );
		$objeto->setTasaocuota( "100" );
		$objeto->setImporte( "150" );
		
		var_dump( $objeto );
	}
	public function test_get() {
		$this->load->model( "modcfdi_traslados" );
		$objeto = new Modcfdi_traslados();

		$objeto->setIdcfdi_comprobante( "1" );
		$objeto->setImpuesto( "128" );
		$objeto->setImpuesto_sat_id( "002" );
		$objeto->setImpuesto_sat_txt( "IVA" );
		$objeto->setTipofactor( "135" );
		$objeto->setTipofactor_sat_id( "Tasa" );
		$objeto->setTipofactor_sat_txt( "Tasa" );
		$objeto->setTasaocuota( "100" );
		$objeto->setImporte( "150" );

		var_dump( "getIdcfdi_comprobante", $objeto->getIdcfdi_comprobante() );
		var_dump( "get", $objeto->get() );
		var_dump( "get", $objeto->get() );
		var_dump( "get", $objeto->get() );
		var_dump( "get", $objeto->get() );
		var_dump( "get", $objeto->get() );
		var_dump( "get", $objeto->get() );
		var_dump( "get", $objeto->get() );
	}
	function test_add() {
		$this->load->model( "modcfdi_traslados" );
		$objeto = new Modcfdi_traslados();

		$objeto->setIdcfdi_comprobante( "1" );
		$objeto->set( "3.0" );
		$objeto->set( "SerieB" );
		$objeto->set( "Fol8" );
		$objeto->set( "124" );
		$objeto->set( "01" );
		$objeto->set( "Efectivo" );
		$objeto->set( "205" );

		$objeto->addToDatabase();

		var_dump( $objeto->getIdcfdi_comprobante() );
	}
	public function test_getdb( $id = 0 ) {
		$this->load->model( "modcfdi_traslados" );
		$objeto = new Modcfdi_traslados();
		$objeto->getFromDatabase( $id );
		var_dump( $objeto );
	}
	public function test_update( $id = 0 ) {
		$this->load->model( "modcfdi_traslados" );
		$objeto = new Modcfdi_traslados();
		$objeto->getFromDatabase( $id );

		$objeto->set( "3.5" );
		$objeto->set( "SerieX" );
		$objeto->set( "Fol9" );
		$objeto->set( "125" );
		$objeto->set( "02" );
		$objeto->set( "Cheque nominativo" );
		$objeto->set( "206" );

		$objeto->updateToDatabase();
	}
	public function test_delete( $id = 0 ) {
		$this->load->model( "modcfdi_traslados" );
		$objeto = new Modcfdi_traslados();
		$objeto->delete( $id );
	}
	public function test_getall() {
		$this->load->model( "modcfdi_traslados" );
		$objeto = new Modcfdi_traslados();
		var_dump( $objeto->getAll() );
	}
}

?>