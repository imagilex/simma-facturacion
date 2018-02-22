<?php

class Cfdi_concepto_informacionaduanera_test extends CI_Controller {
	public function test_set() {
		$this->load->model( "modcfdi_concepto_informacionaduanera" );
		$objeto = new Modcfdi_concepto_informacionaduanera();
		var_dump( $objeto );
		
		$objeto->setIdcfdi_concepto( "10" );
		$objeto->setNumeropedimento( "1000" );
		
		var_dump( $objeto );
	}
	public function test_get() {
		$this->load->model( "modcfdi_concepto_informacionaduanera" );
		$objeto = new Modcfdi_concepto_informacionaduanera();

		$objeto->setIdcfdi_concepto( "10" );
		$objeto->setNumeropedimento( "1000" );

		var_dump( "getIdcfdi_concepto", $objeto->getIdcfdi_concepto() );
		var_dump( "getNumeropedimento", $objeto->getNumeropedimento() );
	}
	function test_add() {
		$this->load->model( "modcfdi_concepto_informacionaduanera" );
		$objeto = new Modcfdi_concepto_informacionaduanera();

		$objeto->setIdcfdi_concepto( "10" );
		$objeto->setNumeropedimento( "1000" );

		$objeto->addToDatabase();

		var_dump( $objeto->getIdcfdi_concepto() );
	}
	public function test_getdb( $id = 0 ) {
		$this->load->model( "modcfdi_concepto_informacionaduanera" );
		$objeto = new Modcfdi_concepto_informacionaduanera();
		$objeto->getFromDatabase( $id );
		var_dump( $objeto );
	}
	public function test_update( $id = 0 ) {
		$this->load->model( "modcfdi_concepto_informacionaduanera" );
		$objeto = new Modcfdi_concepto_informacionaduanera();
		$objeto->getFromDatabase( $id );

		$objeto->setIdcfdi_concepto( "10" );
		$objeto->setNumeropedimento( "9999" );
		$objeto->setImpuesto( "9999" );
    
		$objeto->updateToDatabase();
	}
	public function test_delete( $id = 0 ) {
		$this->load->model( "modcfdi_concepto_informacionaduanera" );
		$objeto = new Modcfdi_concepto_informacionaduanera();
		$objeto->setIdcfdi_concepto( $id );
		$objeto->setIdcfdiparte( $id );
		$objeto->delete(  );
	}
	public function test_getall() {
		$this->load->model( "modcfdi_concepto_informacionaduanera" );
		$objeto = new Modcfdi_concepto_informacionaduanera();
		var_dump( $objeto->getAll() );
	}
}

?>