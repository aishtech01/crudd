<?php 
//mendeklarasikan HOST
define('HOST', 'localhost');

//mendeklarasikan user database
define('USERDB', 'root');

//mendeklarasikan password database
define('PASSDB', '');

//mendeklarasikan nama database
define('DB', 'crudoop');

//membuat class database
class Database{

	private $mysql;
	
	public function __construct()
	{
		// menghubungkan PHP dengan MySQL
		return $this->mysql = new mysqli(HOST, USERDB, PASSDB, DB);
	}

	// meengambil seluruh data pada table
	public function getData($table = "")
	{
		$sql = "SELECT * FROM " . $table;
		$query = $this->mysql->query($sql);
		$reply = [];
		while($data = $query->fetch_assoc())
		{
			$reply[] = $data;
		}
		return $reply;
	}

	// mengambil satu data pada table
	public function getSingleData($table = "", $field = "", $keyword = "")
	{
		$sql = "SELECT * FROM " . $table . " WHERE " . $field . "='" . $keyword . "'";
		$query = $this->mysql->query($sql);
		$data = $query->fetch_assoc();
		return $data;
	}

	// memasukan data ke dalam database
	public function insertData($table = "", $username = "", $password = "", $level = "")
	{
		$sql = "INSERT INTO " . $table . " VALUES ('','" . $username . "', '" . $password . "', '" . $level . "')";
		$query = $this->mysql->query($sql);
		if(!$query)
		{
			echo "tidak dapat menyimpan, <a href='index.php'> Kembali</a>";
		}
			else
		{
			header('location: index.php');
		}
	}

	// menghapus data
	public function updateData($table = "", $username = "", $password = "", $level = "", $field = "", $keyword = "")
	{
		$sql = "UPDATE " . $table . " SET username='" . $username . "', password='" . $password . "', level='" . $level . "' WHERE " . $field . "='" . $keyword . "'";
		$query = $this->mysql->query($sql);
		if(!$query)
		{
			echo "tidak dapat memperbaharui, <a href='index.php'> Kembali</a>";
		}
			else
		{
			header('location: index.php');
		}
	}

	public function deleteData($table = "", $field = "", $keyword = "")
	{
		$sql = "DELETE FROM " . $table . " WHERE " . $field . "='" . $keyword . "'";
		$query = $this->mysql->query($sql);
		if(!$query)
		{
			echo "tidak dapat Menghapus, <a href='index.php'> Kembali</a>";
		}
			else
		{
			header('location: index.php');
		}
	}


}

