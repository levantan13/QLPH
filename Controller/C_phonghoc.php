<?php
include('Model/M_phonghoc.php');
class C_phonghoc
{ 
	
	public function index ()
	{
		$m_phonghoc=new M_phonghoc();
		$slide=$m_phonghoc->getSlide();
		$dsphong=$m_phonghoc->getPH();
		return array('slide'=>$slide,'dsphong'=>$dsphong);
	}
}
?>