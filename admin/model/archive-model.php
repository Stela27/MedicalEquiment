<?php
require_once("base-model.php");

class clsUser extends clsBase{
    private $sql;
    private $result;
    private $rows;
    private $message;

    private $extensions = array("IMAGE"=> array("png","jpeg","jpg"),
                                "MUSIC"=> array("mp3","mp4","wav","wma"),
                                "VIDEO"=> array("mp4","avi","mpeg","mwv"),
                                "DOCUMENT"=> array("pdf","docx","pptx","ppsx","xlsx")
                                );

    private $extension_archive;
    private $type_archive;
    private $file_archive;
    private $tmp_archive;
    private $name_archive;
    private $route_archive;

    private $directory;
    private $returned_id;
    
    private $id;
    private $user;
    private $image;
    private $password;
    private $rol;

    public function setId($_id){$this->id=$_id;}
    public function setUser($_user){$this->user=$_user;}
    public function setImage($_image){$this->image=$_image;}
    public function setPassword($_password){$this->password=$_password;}
    public function setRol($_rol){$this->rol = $_rol;}

    public function setTypeArchive($_type_archive){$this->type_archive=$_type_archive;}
    public function setExtensionArchive($_extension_archive){$this->extension_archive=$_extension_archive;}
    public function setFileArchive($_file_archive){$this->file_archive=$_file_archive;}
    public function setTmpArchive($_tmp_archive){$this->tmp_archive=$_tmp_archive;}

    public function __construct() {
            parent::__construct();
            $this->rows=array();
            $this->directory='../view/img/users/';
    }
    public function read_rows(){
        $this->sql = "CALL sp_user_read();"; 
        $this->result=$this->db->query($this->sql);

        while($row=$this->result->fetch_assoc()){
             $this->rows[]=$row;
        }
        $this->close_connection();
        return $this->rows;
    }
    public function insert_rows(){
        $this->extension_archive = pathinfo($this->file_archive, PATHINFO_EXTENSION);
        
        if($this->validate_archive()){

            $this->name_archive = $this->type_archive .'.'. $this->extension_archive;

            $this->sql = "CALL sp_user_create('$this->user','$this->password','$this->name_archive','$this->rol');"; 
            $this->result=$this->db->query($this->sql);

            if($this->result){

                $this->returned_id = $this->result->fetch_assoc();
                $this->route_archive = $this->directory.$this->returned_id['clave'].'_'.$this->name_archive;
                move_uploaded_file($this->tmp_archive, $this->route_archive);

                $this->message=$this->message_success();
            }else{
                $this->message=$this->message_error();
            }

            $this->close_connection();
        }else{
             $this->message=$this->message_error_image();
        }
        return $this->message;
    }
    public function update_rows(){
        if($this->file_archive != ""){

        $this->extension_archive = pathinfo($this->file_archive, PATHINFO_EXTENSION);
        if($this->validate_archive()){

            $this->name_archive = $this->id.'_'.$this->type_archive .'.'. $this->extension_archive;

            $this->sql = "CALL sp_user_update_with_image('$this->id','$this->user','$this->password','$this->name_archive','$this->rol');"; 
            $this->result=$this->db->query($this->sql);

            if($this->result){

                $this->route_archive = $this->directory.$this->name_archive;
                unlink($this->directory.$this->image);
                move_uploaded_file($this->tmp_archive, $this->route_archive);

                $this->message=$this->message_success();
            }else{
                $this->message=$this->message_error();
            }

            $this->close_connection();
        }else{
             $this->message=$this->message_error_image();
        }
    }else{
            $this->sql = "CALL sp_user_update_without_image('$this->id','$this->user','$this->password','$this->rol');"; 
            $this->result=$this->db->query($this->sql);

            if($this->result){
                $this->message=$this->message_success();
            }else{
                $this->message=$this->message_error();
            }
            $this->close_connection();
    }
        return $this->message;
    }
    public function delete_rows(){
        $this->sql = "CALL sp_user_delete('$this->id');"; 
        $this->result=$this->db->query($this->sql);
        if($this->result){
             unlink($this->directory.$this->image);
            $this->message=$this->message_success();
        }else{
            $this->message=$this->message_error();
        }
        $this->close_connection();
        return $this->message;
    }
    public function validate_archive(){
        return (in_array($this->extension_archive,$this->extensions[$this->type_archive]));
    }
}
?>