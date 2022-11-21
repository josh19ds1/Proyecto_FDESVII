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
			$stm = $this->pdo->prepare("SELECT * FROM usuario WHERE email = ? AND pass=?");
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
			          ->prepare("SELECT * FROM usuario WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
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

	public function Actualizar(usuario $data)
	{
		try 
		{
		$sql = "UPDATE usuario SET nombre = ?,apellidoP= ? 
		        WHERE id = ?";

		$this->pdo->prepare($sql)
		     ->execute(
				array( 
                    $data->nombre,
                    $data->apellido,
					$data->id
                )
			);
		$this->msg="Su registro se ha Actualizado exitosamente!&t=text-success";
		} catch (Exception $e) 
		{
			$this->msg="Error al actualizar los datos&t=text-danger";

		}
		return $this->msg;
	}

}