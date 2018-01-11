<?php

class Absen
{	

	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	public function start($nip)
		{
		   	$response = $this->response;
			
			try
			{
			    /*
				$stmt1 = $this->conn->prepare("SELECT * FROM tb_login_karyawan WHERE email = :email");
				$stmt1->execute(array(':email'=>$email));
				$result=$stmt1->fetchAll(PDO::FETCH_ASSOC);
				*/
				
				$stmt2 = $this->conn->prepare("INSERT INTO tb_absen (no_NIP, start_at) VALUES (:nip, NOW())");
				$stmt2->execute(array(':nip'=>$nip));
				//$stmt2->execute(array(':nip'=>$result[0]['no_ktp']));
				

				$response->status = '200';
                
			}
			
			catch(PDOException $e)
			{
				//echo $e->getMessage();
				$response->status = '500';
				$str = $e->getMessage();
				$response->error = $str;
			}
			
			return $response;
		}

}	
?>