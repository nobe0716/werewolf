
<script language="javascript">
browserName = navigator.appName;
browserVer = parseInt(navigator.appVersion);
if(browserName == "Netscape" && browserVer >= 3){ init = "net"; }
else { init = "ie"; }


if(((init == "net")&&(browserVer >=3))||((init == "ie")&&(browserVer >= 4))){

 sn_on=new Image;
 sn_off=new Image;
 sn_on.src= "";
 sn_off.src= "";

 ss_on=new Image;
 ss_off=new Image;
 ss_on.src= "";
 ss_off.src= "";

 sc_on=new Image;
 sc_off=new Image;
 sc_on.src= "";
 sc_off.src= "";

}

function OnOff(name) {
if(((init == "net")&&(browserVer >=3))||((init == "ie")&&(browserVer >= 4))) {
  if(document.search[name].value=='on')
  {
   document.search[name].value='off';
   ImgSrc=eval(name+"_off.src");
   document[name].src=ImgSrc;
  }
  else
  {
   document.search[name].value='on';
   ImgSrc=eval(name+"_on.src");
   document[name].src=ImgSrc;
  }
 }
}
</script>

<script language="javascript">
  function reverse() {
   var i, chked=0;
   if(confirm('����� �����Ͻðڽ��ϱ�?\n\n������ ������ �ʴ´ٸ� ��Ҹ� �����ø� �������� �Ѿ�ϴ�'))
   {
    for(i=0;i<document.list.length;i++)
    {
     if(document.list[i].type=='checkbox')
     {
      if(document.list[i].checked) { document.list[i].checked=false; }
      else { document.list[i].checked=true; }
     }
    }
   }
   for(i=0;i<document.list.length;i++)
   {
    if(document.list[i].type=='checkbox')
    {
     if(document.list[i].checked) chked=1;
    }
   }
   if(chked) {
    if(confirm('���õ� �׸��� ���ðڽ��ϱ�?'))
     {
      document.list.selected.value='';
      document.list.exec.value='view_all';
      for(i=0;i<document.list.length;i++)
      {
       if(document.list[i].type=='checkbox')
       {
        if(document.list[i].checked)
        {
         document.list.selected.value=document.list[i].value+';'+document.list.selected.value;
        }
       }
      }
      document.list.submit();
      return true;
     }
    }
   }

 function delete_all() {
  var i, chked=0;
  for(i=0;i<document.list.length;i++)
  {
   if(document.list[i].type=='checkbox')
   {
    if(document.list[i].checked) chked=1;
    }
   }
  if(chked)
  {
    document.list.selected.value='';
    document.list.exec.value='delete_all';
    for(i=0;i<document.list.length;i++)
    {
     if(document.list[i].type=='checkbox')
     {
      if(document.list[i].checked)
      {
       document.list.selected.value=document.list[i].value+';'+document.list.selected.value;
      }
     }
    }
    window.open("select_list_all.php?id=<?=$id?>&selected="+document.list.selected.value,"�Խù�����","width=260,height=180,toolbars=no,resize=no,scrollbars=no");
  }
  else {alert('������ �Խù��� �����Ͽ� �ֽʽÿ�');}
 }

 function category_change(obj) {
  var myindex=obj.selectedIndex;
  document.search.category.value=obj.options[myindex].value;
  document.search.submit();
  return true;
 }

//-->
</script>