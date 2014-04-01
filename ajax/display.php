<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ajax - search people</title>

</head>

<body> 
<script type="text/javascript">
function showNames(str)
{
if (str.length==0)
  { 
  document.getElementById("Names").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Names").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","list.php?letters="+str,true);
xmlhttp.send();
}
</script>
<p><b>Start typing letters in the input field below:</b></p>
<form> 
Letters: <input type="text" onkeyup="showNames(this.value)">
</form>
<p>Names we have: <span id="Names"></span></p>



</body>
</html>