function indexPic()
{
     if(checkspace(document.form1.propic.value)) {
	document.form1.propic.focus();
    alert("图片地址不能空！");
	return false;
  }
     if(checkspace(document.form2.propic.value)) {
	document.form2.propic.focus();
    alert("图片地址不能空！");
	return false;
  }
     if(checkspace(document.form3.propic.value)) {
	document.form3.propic.focus();
    alert("图片地址不能空！");
	return false;
  }
     if(checkspace(document.form4.propic.value)) {
	document.form4.propic.focus();
    alert("图片地址不能空！");
	return false;
  }
}

function checknews()
{
     if(checkspace(document.form1.title.value)) {
	document.form1.title.focus();
    alert("新闻标题不能空！");
	return false;
  }
}

function checkcgal()
{
     if(checkspace(document.form1.title.value)) {
	document.form1.title.focus();
    alert("案例标题不能空！");
	return false;
  }
     if(checkspace(document.form1.propic.value)) {
	document.form1.propic.focus();
    alert("案例图片不能空！");
	return false;
  }
  
}


function checkspace(checkstr) {
  var str = '';
  for(i = 0; i < checkstr.length; i++) {
    str = str + ' ';
  }
  return (str == checkstr);
}
	function regInput(obj, reg, inputStr)
	{
		var docSel	= document.selection.createRange()
		if (docSel.parentElement().tagName != "INPUT")	return false
		oSel = docSel.duplicate()
		oSel.text = ""
		var srcRange	= obj.createTextRange()
		oSel.setEndPoint("StartToStart", srcRange)
		var str = oSel.text + inputStr + srcRange.text.substr(oSel.text.length)
		return reg.test(str)
	}
	
function test()
{
  if(!confirm('确认删除吗？')) return false;
}

function mm()
{
   var a = document.getElementsByTagName("input");
   if(a[0].checked==true){
   for (var i=0; i<a.length; i++)
      if (a[i].type == "checkbox") a[i].checked = false;
   }
   else
   {
   for (var i=0; i<a.length; i++)
      if (a[i].type == "checkbox") a[i].checked = true;
   }
}