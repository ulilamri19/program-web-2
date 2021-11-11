<!DOCTYPE html>
<html>
<head><title>Operator Aritmatika</title></head>
<body>
<h1>Aritmatika</h1>
<body bgcolor="green">
<form method="post">
<table>
	<tr>
		<td align="center"><b>Angka 1<b></td>
		<td><b>Operator</b></td>
		<td align="center"><b>Angka 2<b></td>
	</tr>
	<tr>
		<td><input type="number" name="angka1" value="" required placeholder= "Masukkan Angka"/></td>
		<td align="center"><select name="operator">
		<option></option>
		<option value ="+">+</option>
		<option value ="-">-</option>
		<option value ="*">*</option>
		<option value ="/">/</option>
		</select></td>
		<td><input type="number" name="angka2" value="" required placeholder= "Masukkan Angka"/></td>
		<td>=</td>

		<?php
			if(isset($_POST['angka1']) or isset($_POST['angka2']) ){
			$angka1 = $_POST['angka1'];
			$angka2 = $_POST['angka2'];
			}else{
			$angka1 = "0";
			$angka2 = "0";
			}
			if(isset($_POST['operator'])){
			$operator =$_POST['operator'];
			}else{
			$operator ="";
			}
			switch($operator){
			case "+":
				$hasil = $_POST["angka1"] + $_POST["angka2"];
			break;
			case "-":
				$hasil = $_POST["angka1"] - $_POST["angka2"];
			break;
			case "*":
				$hasil = $_POST["angka1"] * $_POST["angka2"];
			break;
			case "/":
				$hasil = $_POST["angka1"] / $_POST["angka2"];
			break;
			}
		?>
		<td><input type="text" name="hasil"  value="<?=$hasil;?>"></td>
		<td><input type="submit" name="Aritmatika" value="Hitung"></td>
	</tr>

</table>
</form>
</body>
</html>