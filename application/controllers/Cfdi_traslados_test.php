<?php

class Cfdi_traslados_test extends CI_Controller {
	public function test_set() {
		$this->load->model( "modcfdi_traslados" );
		$objeto = new Modcfdi_traslados();
		var_dump( $objeto );
		
		$objeto->setIdcfdi_comprobante( "10" );
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

		$objeto->setIdcfdi_comprobante( "10" );
		$objeto->setImpuesto( "128" );
		$objeto->setImpuesto_sat_id( "002" );
		$objeto->setImpuesto_sat_txt( "IVA" );
		$objeto->setTipofactor( "135" );
		$objeto->setTipofactor_sat_id( "Tasa" );
		$objeto->setTipofactor_sat_txt( "Tasa" );
		$objeto->setTasaocuota( "100" );
		$objeto->setImporte( "150" );

		var_dump( "getIdcfdi_comprobante", $objeto->getIdcfdi_comprobante() );
		var_dump( "getImpuesto", $objeto->getImpuesto() );
		var_dump( "getImpuesto_sat_id", $objeto->getImpuesto_sat_id() );
		var_dump( "getImpuesto_sat_txt", $objeto->getImpuesto_sat_txt() );
		var_dump( "getTipofactor", $objeto->getTipofactor() );
		var_dump( "getTipofactor_sat_id", $objeto->getTipofactor_sat_id() );
		var_dump( "getTipofactor_sat_txt", $objeto->getTipofactor_sat_txt() );
		var_dump( "getTasaocuota", $objeto->getTasaocuota() );
		var_dump( "getImporte", $objeto->getImporte() );
	}
	function test_add() {
		$this->load->model( "modcfdi_traslados" );
		$objeto = new Modcfdi_traslados();

		$objeto->setIdcfdi_comprobante( "10" );
		$objeto->setImpuesto( "128" );
		$objeto->setImpuesto_sat_id( "002" );
		$objeto->setImpuesto_sat_txt( "IVA" );
		$objeto->setTipofactor( "135" );
		$objeto->setTipofactor_sat_id( "Tasa" );
		$objeto->setTipofactor_sat_txt( "Tasa" );
		$objeto->setTasaocuota( "100" );
		$objeto->setImporte( "150" );

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

		$objeto->setIdcfdi_comprobante( "11" );
		$objeto->setImpuesto( "128" );
		$objeto->setImpuesto_sat_id( "002" );
		$objeto->setImpuesto_sat_txt( "IVA" );
		$objeto->setTipofactor( "135" );
		$objeto->setTipofactor_sat_id( "Tasa" );
		$objeto->setTipofactor_sat_txt( "Tasa" );
		$objeto->setTasaocuota( "999" );
		$objeto->setImporte( "111" );

		$objeto->updateToDatabase();
	}
	public function test_delete( $id = 0 ) {
		$this->load->model( "modcfdi_traslados" );
		$objeto = new Modcfdi_traslados();
		$objeto->setIdcfdi_comprobante( $id );
		$objeto->delete(  );
	}
	public function test_getall() {
		$this->load->model( "modcfdi_traslados" );
		$objeto = new Modcfdi_traslados();
		var_dump( $objeto->getAll() );
	}
}

?>