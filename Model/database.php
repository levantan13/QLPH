<?php
class database
{
	//biến PDO
	var $_dbh='';
	//biến nhận sql
	var $_sql='';
	//biến satament
	var $_cursor= NULL;

	private $servername='localhost';
	private $username='root';
	private $password='';
	private $dbname='ql_phonghoc';

	// Hàm Kết Nối
	function Ketnoi()
	{
		// Kiểm tra nếu chưa kết nối thì thực hiện kết nối
		if (!$this->_dbh)
		{
			// Kết nối			
			try 
			{
				$this->_dbh = new PDO("mysql:host=$servername;$dbname;charset=utf8", $username, $password);
				$this->_dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
			}
			catch(PDOException $e)
			{
				echo "Error: " . $e->getMessage();
				die();
			}
		}
	}
	//nhận câu lệnh
	public function setQuery($sql)
	{
		$this->_sql=$sql;
	}
	//function execute the query
	public function execute($options=array())
	{
		$this->_cursor=$this->_dbh->prepare($this->_sql);
		if(!$options)
		{
			for($i=0;$i<count($options);$i++)
			{
				$this->_cursor->bindParam($i+1,$options[$i]);
			}
		}
		$this->_cursor->execute();
		return $this->_cursor;
	}
	//Function load data on table
	public function loadAllRows($options=array())
	{
		if(!$options)
		{
			if(!$_result=$this->execute())
				return false;
		}
		else
		{
			if(!$_result=$this->execute($options))
				return false;
		}
		return $_result->fetchAll(PDO::FETCH_OBJ);
	}

	//Function load 1 data on table	
	public function loadRow($options=array())
	{
		if(!$options)
		{
			if(!$_result=$this->execute())
				return false;
		}
		else
		{
			if(!$_result=$this->execute($options))
				return false;
		}
		return $_result->fetch(PDO::FETCH_OBJ);
	}

	//Function count the record on table
		public function loadRecord($options=array())
	{
		if(!$options)
		{
			if(!$_result=$this->execute())
				return false;
		}
		else
		{
			if(!$_result=$this->execute($options))
				return false;
		}
		return $_result->fetch(PDO::FETCH_COLUMN);
	}

	//Function get lastID
	public function getLastID()
	{
		return $this->_dbh->lastInsertID();
	}
	public function NgatKetNoi()
	{
		$this->_dbh=null;
	}
}
?>