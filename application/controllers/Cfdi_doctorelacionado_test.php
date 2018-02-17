<?php

class Cfdi_doctorelacionado_test extends CI_Controller {
	public function test_set() {
		$this->load->model( "modcfdi_doctorelacionado" );
		$objeto = new modcfdi_doctorelacionado();
		var_dump( $objeto );

		$objeto->setIdcfdi_pago( "2" );
		$objeto->setIddocumento( "4f4f4f" );
		$objeto->setSerie( "g3g4h3g4" );
		$objeto->setFolio( "a2a3s2a3s" );
		$objeto->setMonedadr( "21" );
		$objeto->setMonedadr_sat_id( "MXN" );
		$objeto->setMonedadr_sat_txt( "Peso Mexicano" );
		$objeto->setTipocambiodr( "42.2" );
		$objeto->setMetododepagodr( "20" );
		$objeto->setMetododepagodr_sat_id( "PPD" );
		$objeto->setMetododepagodr_sat_txt( "Pago en parcialidades o diferido" );
		$objeto->setNumparcialidad( "gft3y" );
		$objeto->setImpsaldoant( "12.2" );
		$objeto->setImppagado( "13.3" );
		$objeto->setImpsaldoinsoluto( "14.4" );
		
		var_dump( $objeto );
	}
	public function test_get() {
		$this->load->model( "modcfdi_doctorelacionado" );
		$objeto = new modcfdi_doctorelacionado();

		$objeto->setIdcfdi_pago( "2" );
		$objeto->setIddocumento( "4f4f4f" );
		$objeto->setSerie( "g3g4h3g4" );
		$objeto->setFolio( "a2a3s2a3s" );
		$objeto->setMonedadr( "21" );
		$objeto->setMonedadr_sat_id( "MXN" );
		$objeto->setMonedadr_sat_txt( "Peso Mexicano" );
		$objeto->setTipocambiodr( "42.2" );
		$objeto->setMetododepagodr( "20" );
		$objeto->setMetododepagodr_sat_id( "PPD" );
		$objeto->setMetododepagodr_sat_txt( "Pago en parcialidades o diferido" );
		$objeto->setNumparcialidad( "gft3y" );
		$objeto->setImpsaldoant( "12.2" );
		$objeto->setImppagado( "13.3" );
		$objeto->setImpsaldoinsoluto( "14.4" );

		var_dump( "getIdcfdi_pago", $objeto->getIdcfdi_pago() );
		var_dump( "getIddocumento", $objeto->getIddocumento() );
		var_dump( "getSerie", $objeto->getSerie() );
		var_dump( "getFolio", $objeto->getFolio() );
		var_dump( "getMonedadr", $objeto->getMonedadr() );
		var_dump( "getMonedadr_sat_id", $objeto->getMonedadr_sat_id() );
		var_dump( "getMonedadr_sat_txt", $objeto->getMonedadr_sat_txt() );
		var_dump( "getTipocambiodr", $objeto->getTipocambiodr() );
		var_dump( "getMetododepagodr", $objeto->getMetododepagodr() );
		var_dump( "getMetododepagodr_sat_id", $objeto->getMetododepagodr_sat_id() );
		var_dump( "getMetododepagodr_sat_txt", $objeto->getMetododepagodr_sat_txt() );
		var_dump( "getNumparcialidad", $objeto->getNumparcialidad() );
		var_dump( "getImpsaldoant", $objeto->getImpsaldoant() );
		var_dump( "getImppagado", $objeto->getImppagado() );
		var_dump( "getImpsaldoinsoluto", $objeto->getImpsaldoinsoluto() );
	}
	function test_add() {
		$this->load->model( "modcfdi_doctorelacionado" );
		$objeto = new modcfdi_doctorelacionado();

		$objeto->setIdcfdi_pago( "2" );
		$objeto->setIddocumento( "4f4f4f" );
		$objeto->setSerie( "g3g4h3g4" );
		$objeto->setFolio( "a2a3s2a3s" );
		$objeto->setMonedadr( "21" );
		$objeto->setMonedadr_sat_id( "MXN" );
		$objeto->setMonedadr_sat_txt( "Peso Mexicano" );
		$objeto->setTipocambiodr( "42.2" );
		$objeto->setMetododepagodr( "20" );
		$objeto->setMetododepagodr_sat_id( "PPD" );
		$objeto->setMetododepagodr_sat_txt( "Pago en parcialidades o diferido" );
		$objeto->setNumparcialidad( "gft3y" );
		$objeto->setImpsaldoant( "12.2" );
		$objeto->setImppagado( "13.3" );
		$objeto->setImpsaldoinsoluto( "14.4" );

		$objeto->addToDatabase();

		var_dump( $objeto->getIdcfdi_pago() );
	}
	public function test_getdb( $id = 0 ) {
		$this->load->model( "modcfdi_doctorelacionado" );
		$objeto = new modcfdi_doctorelacionado();
		$objeto->setIdcfdi_pago( $id );
		$objeto->getFromDatabase( $id );
		var_dump( $objeto );
	}
	public function test_update( $id = 0 ) {
		$this->load->model( "modcfdi_doctorelacionado" );
		$objeto = new modcfdi_doctorelacionado();
		$objeto->getFromDatabase( $id );

		$objeto->setIdcfdi_pago( "2" );
		$objeto->setIddocumento( "5f5f5f" );
		$objeto->setSerie( "g5g5h5g5" );
		$objeto->setFolio( "a5a5s5a5s" );
		$objeto->setMonedadr( "21" );
		$objeto->setMonedadr_sat_id( "MXN" );
		$objeto->setMonedadr_sat_txt( "Peso Mexicano" );
		$objeto->setTipocambiodr( "4.2" );
		$objeto->setMetododepagodr( "20" );
		$objeto->setMetododepagodr_sat_id( "PPD" );
		$objeto->setMetododepagodr_sat_txt( "Pago en parcialidades o diferido" );
		$objeto->setNumparcialidad( "g325y" );
		$objeto->setImpsaldoant( "1.2" );
		$objeto->setImppagado( "1.3" );
		$objeto->setImpsaldoinsoluto( "1.4" );

		$objeto->updateToDatabase();
	}
	public function test_delete( $id = 0 ) {
		$this->load->model( "modcfdi_doctorelacionado" );
		$objeto = new modcfdi_doctorelacionado();
		$objeto->setIdcfdi_pago( $id );
		$objeto->delete( $id );
	}
	public function test_getall() {
		$this->load->model( "modcfdi_doctorelacionado" );
		$objeto = new modcfdi_doctorelacionado();
		var_dump( $objeto->getAll() );
	}
}

?>