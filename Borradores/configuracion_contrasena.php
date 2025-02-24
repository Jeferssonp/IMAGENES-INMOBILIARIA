<?php
error_reporting(E_ALL || E_NOTICE);
ini_set("display_errors",1);
abstract class Conectar
{

	protected $dbh;

	public function Conexion()

	{
		
		require_once(dirname(__FILE__).'/database.php');

			try
			{
				
				$this->dbh=new PDO($server,$username,$password, $database);
				$this->dbh->exec("SET NAMES'UTF8'");
				$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $this->dbh;

				echo "conexion exitosa";
				var_dump($_POST);
				var_dump($server,$username,$password, $database);

			} catch(PDOException $e) {

				die("error de conexion".$e->getMessage() );

			}
	}

	public  function VerificaPassword($CONTRASENA, $CONFIRMAR_CONTRASENA) 
	  {
	        

	       if(password_verify($CONTRASENA, $CONFIRMAR_CONTRASENA) ):

	       return true;

	       	else:

	       	return false;


	       endif;

	  }

	public function ruta()
    {
        return "./inciodesesion.php";
    }

    public function limpiarcampo($campo)
    {
    	$campo=strip_tags(trim(htmlspecialchars($campo, ENT_QUOTES, "ISO-8859-1")));
    	return $campo;
    }

   
}
?>