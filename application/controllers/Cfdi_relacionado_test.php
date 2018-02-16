<?php

class Cfdi_relacionado_test extends CI_Controller {
	public function test_set() {
		$this->load->model( "modcfdi_relacionado" );
		$objeto = new Modcfdi_relacionado();
		var_dump( $objeto );
		
		$objeto->setIdcfdi_comprobante( "10" );
		$objeto->setTiporelacion( "136" );
		$objeto->setTiporelacion_sat_id( "01" );
		$objeto->setTiporelacion_sat_txt( "Nota de crédito de los documentos relacionados" );
		$objeto->setIdcfdi_comprobante_relacionado( "10" );
		$objeto->setUuid( "1000" );
		
		var_dump( $objeto );
	}
	public function test_get() {
		$this->load->model( "modcfdi_relacionado" );
		$objeto = new Modcfdi_relacionado();

		$objeto->setIdcfdi_comprobante( "10" );
		$objeto->setTiporelacion( "136" );
		$objeto->setTiporelacion_sat_id( "01" );
		$objeto->setTiporelacion_sat_txt( "Nota de crédito de los documentos relacionados" );
		$objeto->setIdcfdi_comprobante_relacionado( "10" );
		$objeto->setUuid( "1000" );

		var_dump("getIdcfdi_comprobante", $objeto->getIdcfdi_comprobante() );
		var_dump("getTiporelacion", $objeto->getTiporelacion() );
		var_dump("getTiporelacion_sat_id", $objeto->getTiporelacion_sat_id() );
		var_dump("getTiporelacion_sat_txt", $objeto->getTiporelacion_sat_txt() );
		var_dump("getIdcfdi_comprobante_relacionado", $objeto->getIdcfdi_comprobante_relacionado( ) );
		var_dump("getUuid", $objeto->getUuid() );
	}
	function test_add() {
		$this->load->model( "modcfdi_relacionado" );
		$objeto = new Modcfdi_relacionado();

		$objeto->setIdcfdi_comprobante( "10" );
		$objeto->setTiporelacion( "136" );
		$objeto->setTiporelacion_sat_id( "01" );
		$objeto->setTiporelacion_sat_txt( "Nota de crédito de los documentos relacionados" );
		$objeto->setIdcfdi_comprobante_relacionado( "10" );
		$objeto->setUuid( "1000" );

		$objeto->addToDatabase();

		var_dump( $objeto->getIdcfdi_comprobante() );
	}
	public function test_getdb( $id = 0 ) {
		$this->load->model( "modcfdi_relacionado" );
		$objeto = new Modcfdi_relacionado();
		$objeto->getFromDatabase( $id );
		var_dump( $objeto );
	}
	public function test_update( $id = 0 ) {
		$this->load->model( "modcfdi_relacionado" );
		$objeto = new Modcfdi_relacionado();
		$objeto->getFromDatabase( $id );

		$objeto->setIdcfdi_comprobante( "10" );
		$objeto->setTiporelacion( "136" );
		$objeto->setTiporelacion_sat_id( "04" );
		$objeto->setTiporelacion_sat_txt( "Sustitución de los CFDI previos" );
		$objeto->setIdcfdi_comprobante_relacionado( "10" );
		$objeto->setUuid( "9999" );

		$objeto->updateToDatabase();
	}
	public function test_delete( $id = 0 ) {
		$this->load->model( "modcfdi_relacionado" );
		$objeto = new Modcfdi_relacionado();
		$objeto->setIdcfdi_comprobante( $id );
		$objeto->delete(  );
	}
	public function test_getall() {
		$this->load->model( "modcfdi_relacionado" );
		$objeto = new Modcfdi_relacionado();
		var_dump( $objeto->getAll() );
	}
}

?>