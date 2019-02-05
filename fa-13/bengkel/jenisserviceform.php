<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
</head>

  <body>
<tr>
  <br>
  <center>

<td colspan="3">Jasa Service</td>
<hr width="100">
</center>
<br>
<br>
<br>

<form action="jenisservicesave.php" method="post">
  
<table border="0" width="30%" align="center" >
</tr>

<tr>
<td>Id JenisService</td><td>:</td><td>
<input type="text" name="idjenisservice" required=""></td>
</tr>


<tr>
<td>Jenis Service</td><td>:</td><td>
<input type="text" name="jenisservice" required=""></td>
</tr>

<tr>
<td>Jasa Service</td><td>:</td><td>
<input type="text" name="jasaservice" required=""></td>
</tr>

</tr>
<tr>
<td colspan="3" align="center">
  <br><br>
    <input type="submit" name="submit" value="submit">
    <input type="reset" name="reset" value="reset">
    <a href="home.php">Home</a>
    <br><br>
  <img src="foto/tam.jpg" height="300" width="300" align="left">

</td>
</tr>

</body>
</html>