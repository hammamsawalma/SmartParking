<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<style>
	td input[type=button]
        {
        background : url("111.png") no-repeat center;
		background-size: 200px 200px ; 
        width : 256px;
        height :256px;
        border : none;
        color : transparent;
        font-size : 0; 
		placeholder="https://google.com"

        }
	</style>
<body>
<h1 style="text-align: center; color: #2D18E5;">	Kocaeli Akıllı Otopark Sistemi 
</h1>
<p style="text-align: center; color: #F37406;">Atrık Kocaeli'nde aracınıza otopark yeri bulmanız daha kolay!</p>
<p style="text-align: center; color: #0E0E0F;">Ayrıca, ücretli otoparklar için ödemenizi buradan yapıp yerinizi reserve edebilirsiniz.</p>
<p style="text-align: center; color: #F1080F;">Aşağıdaki butona tıklayarak, aracınıza boş otopark bulabilirsiniz. </p>
<table width="264" height="134" border="1" align="center">
  <tbody>
    <tr>
		<td><input name="click" type="button" id="click" value=""><a href="Otopark.php"></a></td>
    </tr>
  </tbody>
</table>
<p style="text-align: center; color: #2D18E5;">&nbsp;</p>
<p style="text-align: center; color: #2D18E5;">&nbsp;</p>
</body>
</html>

<?php 
function open () {
location.href = "http://www.google.com";
}
?>
