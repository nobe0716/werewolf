<?
/***************************************************************************
 * ���� ���� include
 **************************************************************************/
	include "_head.php";

	if(strpos($HTTP_HOST,':') <> false)	$HTTP_HOST =	substr($HTTP_HOST,0,strpos($HTTP_HOST,':'));
	if(!eregi($HTTP_HOST,$HTTP_REFERER)) Error("���������� ���� �����Ͽ� �ֽñ� �ٶ��ϴ�.");

/***************************************************************************
 * �Խù� ���� ó��
 **************************************************************************/

// �������� ������
	$s_data=mysql_fetch_array(mysql_query("select * from $t_board"."_$id where no='$no'"));

	if($s_data[ismember]||$is_admin||$member[level]<=$setup[grant_delete]) {
		if($s_data[ismember]!=$member[no]&&!$is_admin&&$member[level]>$setup[grant_delete]) Error("������ ������ �����ϴ�");
		$title="���� �����Ͻðڽ��ϱ�?";
  	} else {
		$title=stripslashes($s_data[name])."���� ���� �����մϴ�.<br>��й�ȣ�� �Է��Ͽ� �ֽʽÿ�";
		$input_password="<input type=password name=password size=20 maxlength=20 class=input>";
	}

	$target="delete_ok.php";

	$a_list="<a href=zboard.php?$href$sort>";
  
	$a_view="<a href=# onclick=history.back()>";

	head();

	include $dir."/ask_password.php";

	foot();
 
 	include "_foot.php";
?>