<?php 
include('database.php');
class M_phonghoc extends database
{
	//Người dùng
	public function getSlide()
	{
		$sql="select * from slide";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function getMenu()
	{
		$sql="select lp.*, GROUP_CONCAT(ph.id_phonghoc,':',ph.ten_phonghoc_khongdau) AS phong_hoc from loai_phong lp INNER JOIN phong_hoc ph ON lp.id_loaiphong=ph.id_loaiphong GROUP BY lp.id_loaiphong ";
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
