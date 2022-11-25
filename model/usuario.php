<?php
class Usuario
{
	private $pdo;
	private $msg;
    
    public $id;
	public $nombre;
    public $apellido;
	public $apellidoM;
	public $ocupacion;
	public $cedula;
	public $IEEE;
	public $sexo;
	public $articulo;
	public $IUE;
	public $UDF;
	public $dayins;
	public $costo;
	public $telefono;             
    public $email;
    public $pass;
	public $pais;
	public $provincia;
	public $distrito;
	public $restablecer;


	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Db::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function Registrar(usuario $data)
	{
		try 
		{
		$sql = "INSERT INTO usuario (nombre,apellidoP,apellidoM,ocupacion,cedula,IEEE,sexo,articulo,IEU,UDF,costo,telefono,email,ciudad,pais,provincia,distrito) 
		        VALUES (?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array( 
                    $data->nombre,
                    $data->apellido,
					$data->apellidoM,
					$data->ocupacion,
					$data->cedula,
					$data->IEEE,
					$data->sexo,
					$data->articulo,
					$data->IEU,
					$data->UDF,
					$data->costo,
					$data->telefono, 
                    $data->email, 
                    $data->ciudad,
					$data->pais, 
                    $data->provincia, 
                    $data->distrito
                )
			);
		$this->msg="Su registro se ha guardado exitosamente!&t=text-success";
		} catch (Exception $e) 
		{
			if ($e->errorInfo[1] == 1062) { // error 1062 es de duplicación de datos 
				$this->msg="Correo electrónico ya está registrado en el sistema&t=text-danger";
			 } else {
				$this->msg=$e;
			 }
		}
		return $this->msg;
	}

	public function Consultar(usuario $data)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM coladm WHERE email = ? AND pass=?");
			$stm->execute(array($data->email, $data->pass));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	public function ConsultarC(usuario $data)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM coladm WHERE email = ? AND pass=?");
			$stm->execute(array($data->email, $data->pass));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM coladm WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	public function ObtenerUsuario()
	{
		try 
		{
			$stm = $this->pdo->prepare("SELECT * FROM usuario ORDER BY id DESC LIMIT 1");
			          
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	public function ObtenerTodosLosUsuarios()
	{
		try 
		{
			$stm = $this->pdo->prepare("SELECT * FROM usuario");
			          
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	
	public function ConsultarEmail($email)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM usuario WHERE email = ?");
			$stm->execute(array($email));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function IncluirHash(usuario $data)
	{
		try 
		{
		$sql = "UPDATE usuario SET restablecer = ?";

		$this->pdo->prepare($sql)
		     ->execute(
				array( 
                    $data->restablecer,
					$data->email
                )
			);
			$this->msg="ok";
		} catch (Exception $e) 
		{
			$this->msg="Error";

		}
		return $this->msg;
	}

}