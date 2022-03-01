<?php
class cls_connection{
	
	public static function open_connection(){	
		$link = new mysqli("localhost", "root", "", "bd_equipomedico");	
		// $link = new mysqli("localhost", "quehabid_user-equipo", "hU5aFkud^~P@", "quehabid_equipo"); 

		return $link;
	} 
}
?>