<?php 
require("database.php");
class M_phonghoc extends database
{
	//Người dùng
	public function Doc_phonghoc()
	{
		$sql="select * from phong_hoc";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
		public function Doc_phonghoc_theo_IDPhong($id_phonghoc)
	{
		$sql="select * from phong_hoc where id_phonghoc=?";
		$this->setQuery($sql);
		$param=array($id_phonghoc);
		return $this->loadRow($param);
	}
	//Quản trị
}

?>