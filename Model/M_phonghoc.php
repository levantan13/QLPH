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

	public function getMenuKhuvuc()
	{
		$sql="select vt.*, GROUP_CONCAT(ph.id_phonghoc,':',ph.ten_ph_khongdau) AS kv_phong from vi_tri vt INNER JOIN phong_hoc ph ON vt.id_vitri=ph.id_vitri GROUP BY vt.id_vitri";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

		public function getMenu()
	{
		$sql="select lp.*,GROUP_CONCAT(ph.id_phonghoc,':',ph.ten_ph_khongdau) AS phong_hoc from loai_phong lp INNER JOIN phong_hoc ph ON lp.id_loaiphong=ph.id_loaiphong GROUP BY lp.id_loaiphong";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}	

	public function getloaiph()
	{
		$sql="select * from loai_phong";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
		public function getph()
	{
		$sql="select * from phong_hoc";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function getchitietph($key)
	{
		$sql="select * from phong_hoc where id_phonghoc=$key";
		$this->setQuery($sql);
		return $this->loadRow(array($key));
	}
	//Quản trị
}

?>
