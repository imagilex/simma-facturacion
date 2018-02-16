<?php

class Cfdi_parte_informacionaduanera_test extends CI_Controller {
	public function test_set() {
		$this->load->model( "modcfdi_parte_informacionaduanera" );
		$objeto = new modcfdi_parte_informacionaduanera();
		var_dump( $objeto );

		$objeto->setIdcfdi_parte( "3" );
		$objeto->setNumeropedimento( "hgvhgt4334" );
		
		var_dump( $objeto );
	}
	public function test_get() {
		$this->load->model( "modcfdi_parte_informacionaduanera" );
		$objeto = new modcfdi_parte_informacionaduanera();

		$objeto->setIdcfdi_parte( "3" );
		$objeto->setNumeropedimento( "hgvhgt4334" );

		var_dump( "getIdcfdi_parte", $objeto->getIdcfdi_parte() );
		var_dump( "getNumeropedimento", $objeto->getNumeropedimento() );
	}
	function test_add() {
		$this->load->model( "modcfdi_parte_informacionaduanera" );
		$objeto = new modcfdi_parte_informacionaduanera();

		$objeto->setIdcfdi_parte( "3" );
		$objeto->setNumeropedimento( "hgvhgt4334" );

		$objeto->addToDatabase();

		var_dump( $objeto->getIdcfdi_parte() );
	}
	public function test_getdb( $id = 0 ) {
		$this->load->model( "modcfdi_parte_informacionaduanera" );
		$objeto = new modcfdi_parte_informacionaduanera();
		$objeto->setIdcfdi_parte( $id );
		$objeto->getFromDatabase( $id );
		var_dump( $objeto );
	}
	public function test_update( $id = 0 ) {
		$this->load->model( "modcfdi_parte_informacionaduanera" );
		$objeto = new modcfdi_parte_informacionaduanera();
		$objeto->getFromDatabase( $id );

		$objeto->setIdcfdi_parte( "3" );
		$objeto->setNumeropedimento( "hgvhgt555" );

		$objeto->updateToDatabase();
	}
	public function test_delete( $id = 0 ) {
		$this->load->model( "modcfdi_parte_informacionaduanera" );
		$objeto = new modcfdi_parte_informacionaduanera();
		$objeto->setIdcfdi_parte( $id );
		$objeto->delete( $id );
	}
	public function test_getall() {
		$this->load->model( "modcfdi_parte_informacionaduanera" );
		$objeto = new modcfdi_parte_informacionaduanera();
		var_dump( $objeto->getAll() );
	}
}

?>