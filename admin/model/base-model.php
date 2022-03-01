<?php
require_once('bd/connection-bd.php');

class cls_operations {
	public $cnn;

	public function __construct() {
		$this->cnn = cls_connection::open_connection();
	}

	public function _read($sql) {
		$resul = $this->cnn->query($sql);
		$this->cnn->close();
		return($resul);
	}
 
	public function _action($sql){
		$query = $this->cnn->query($sql);
		$afec = $this->cnn->affected_rows;
		$this->cnn->close();
		return($afec);
	}
	public function _message_success(){
		return array("title"=>"Éxito","type"=>"success","text"=>"La operación ha sido realizada.");
	}
	public function _message_login(){
		return array("title"=>"Éxito","type"=>"true");
	}
	public function _message_nofound(){
		return array("title"=>"Error","type"=>"error","text"=>"Verifiva los datos ingresados, vuelva a intentar.");
	}
	public function _message_error(){
		return array("title"=>"Error","type"=>"error","text"=>"Ha ocurrido un incoveniente, vuelva a intentar.");
	}
	public function _message_error_image(){
		return array("title"=>"Error imagen","type"=>"error","text"=>"El formato de archivo no es permitido.");
	}

}

?>