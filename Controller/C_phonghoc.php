<?php
include('Model/M_phonghoc.php');
class C_phonghoc
{ 
	
	public function index ()
	{
		$m_phonghoc=new M_phonghoc();
		$slide=$m_phonghoc->getSlide();
		$menu=$m_phonghoc->getMenu();
		return array('slide'=>$slide,'menu'=>$menu);
	}
}
?>