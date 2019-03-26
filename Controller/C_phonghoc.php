<?php
include('Model/M_phonghoc.php');
include('Model/pager.php');
class C_phonghoc
{ 
	
	public function index ()
	{
		$m_phonghoc=new M_phonghoc();
		$slide=$m_phonghoc->getSlide();
		$menu=$m_phonghoc->getMenu();
		$menukhuvuc=$m_phonghoc->getMenuKhuvuc();

		$trang_hientai=(isset($_GET['page']))?$_GET['page']:1;
		$pagination=new pagination(count($phonghoc),$trang_hientai,3,2);
		$paginationhtml=$pagination->showPagination();
		$limit=$pagination->$_nItemOnPage;
		$vitri=($trang_hientai-1)*$limit;
		$phonghoc=$m_phonghoc->getphbyidloaiph($idlp,$vitri,$limit);
		$phonghoc=$m_phonghoc->getph();
		return array('slide'=>$slide,'menu'=>$menu,'menukhuvuc'=>$menukhuvuc,'phonghoc'=>$phonghoc,'thanh_phantrang'=>$paginationhtml);
	}

	public function chitietphonghoc()
	{
		$id=$_GET["id"];
		$m_phonghoc=new M_phonghoc();
		$chitietph=$m_phonghoc->getchitietph($id);
		return array('chitietph'=>$chitietph);
	}

}
?>