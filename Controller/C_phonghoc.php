<?php
include('Model/M_phonghoc.php');
class C_phonghoc
{ 
	
	public function index ()
	{
		$m_phonghoc=new M_phonghoc();
		$slide=$m_phonghoc->getSlide();
		$menu=$m_phonghoc->getMenu();
		$menukhuvuc=$m_phonghoc->getMenuKhuvuc();
		return array('slide'=>$slide,'menu'=>$menu,'menukhuvuc'=>$menukhuvuc);
	}
	public function chitietphonghoc()
	{
		$key=$_GET["key"];
		$m_phonghoc=new M_phonghoc();
		$chitietph=$m_phonghoc->getchitietph($key);
		return array('chitietph'=>$chitietph);
	}
}
?>