<?php

class Cfdi_parte_test extends CI_Controller {
	public function test_set() {
		$this->load->model( "modcfdi_parte" );
		$objeto = new modcfdi_parte();
		var_dump( $objeto );

		$objeto->setIdcfdi_parte( "2" );
		$objeto->setIdcfdi_concepto( "3" );
		$objeto->setClaveprodserv( "111" );
		$objeto->setClaveprodserv_sat_id( "24131513" );
		$objeto->setClaveprodserv_sat_txt( "Refrigerante" );
		$objeto->setNoidentificacion( "34234yf" );
		$objeto->setCantidad( "12.3" );
 		$objeto->setUnidad( "343bb3h3" );
		$objeto->setDescripcion( "hjhhjbbjfdvind" );
		$objeto->setValorunitario( "23.1" );
		$objeto->setImporte( "21.4" );
		
		var_dump( $objeto );
	}
	public function test_get() {
		$this->load->model( "modcfdi_parte" );
		$objeto = new modcfdi_parte();

		$objeto->setIdcfdi_parte( "2" );
		$objeto->setIdcfdi_concepto( "3" );
		$objeto->setClaveprodserv( "111" );
		$objeto->setClaveprodserv_sat_id( "24131513" );
		$objeto->setClaveprodserv_sat_txt( "Refrigerante" );
		$objeto->setNoidentificacion( "34234yf" );
		$objeto->setCantidad( "12.3" );
 		$objeto->setUnidad( "343bb3h3" );
		$objeto->setDescripcion( "hjhhjbbjfdvind" );
		$objeto->setValorunitario( "23.1" );
		$objeto->setImporte( "21.4" );

		var_dump( "getIdcfdi_parte", $objeto->getIdcfdi_parte() );
		var_dump( "getIdcfdi_concepto", $objeto->getIdcfdi_concepto() );
		var_dump( "getClaveprodserv", $objeto->getClaveprodserv() );
		var_dump( "getClaveprodserv_sat_id", $objeto->getClaveprodserv_sat_id() );
		var_dump( "getClaveprodserv_sat_txt", $objeto->getClaveprodserv_sat_txt() );
		var_dump( "getNoidentificacion", $objeto->getNoidentificacion() );
		var_dump( "getUnidad", $objeto->getUnidad() );
		var_dump( "getDescripcion", $objeto->getDescripcion() );
		var_dump( "getValorunitario", $objeto->getValorunitario() );
		var_dump( "getImporte", $objeto->getImporte() );
	}
	function test_add() {
		$this->load->model( "modcfdi_parte" );
		$objeto = new modcfdi_parte();

		$objeto->setIdcfdi_concepto( "3" );
		$objeto->setClaveprodserv( "111" );
		$objeto->setClaveprodserv_sat_id( "24131513" );
		$objeto->setClaveprodserv_sat_txt( "Refrigerante" );
		$objeto->setNoidentificacion( "34234yf" );
		$objeto->setCantidad( "12.3" );
 		$objeto->setUnidad( "343bb3h3" );
		$objeto->setDescripcion( "hjhhjbbjfdvind" );
		$objeto->setValorunitario( "23.1" );
		$objeto->setImporte( "21.4" );

		$objeto->addToDatabase();

		var_dump( $objeto->getIdcfdi_parte() );
	}
	public function test_getdb( $id = 0 ) {
		$this->load->model( "modcfdi_parte" );
		$objeto = new modcfdi_parte();
		$objeto->getFromDatabase( $id );
		var_dump( $objeto );
	}
	public function test_update( $id = 0 ) {
		$this->load->model( "modcfdi_parte" );
		$objeto = new modcfdi_parte();
		$objeto->getFromDatabase( $id );

		$objeto->setIdcfdi_concepto( "3" );
		$objeto->setClaveprodserv( "111" );
		$objeto->setClaveprodserv_sat_id( "24131513" );
		$objeto->setClaveprodserv_sat_txt( "Refrigerante" );
		$objeto->setNoidentificacion( "55555yf" );
		$objeto->setCantidad( "12.3" );
 		$objeto->setUnidad( "343bb3h3" );
		$objeto->setDescripcion( "hjhhjbbjfdvind" );
		$objeto->setValorunitario( "23.1" );
		$objeto->setImporte( "21.4" );

		$objeto->updateToDatabase();
	}
	public function test_delete( $id = 0 ) {
		$this->load->model( "modcfdi_parte" );
		$objeto = new modcfdi_parte();
		$objeto->delete( $id );
	}
	public function test_getall() {
		$this->load->model( "modcfdi_parte" );
		$objeto = new modcfdi_parte();
		var_dump( $objeto->getAll() );
	}
}

?>