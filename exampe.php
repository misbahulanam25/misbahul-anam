<!DOCTYPE html>
<html>
<head>
	<title>php example</title>
</head>
<body>
	<h4> NAMA: MISBAHUL ANAM </h4>
	<form>
		<table>
			<tr>
				<td> nama </td>
				<td> <input type="text" name="nama"> </td>
				<td> <input type="submit" value="cek"></td>

			</tr>
		</table>
	</form> 
	<i><code>tanpa form action</code><i>


	<form action ="latihanhari6part1-action.php" method="post">
		<table>
			<tr>
				<td>nama</td>
				<td> <input type="text" name="nama" placeholder=" isikan nama saya"></td>
				<td> <input type="submit" name="submit" value="cek"></td>
			</tr>
		</table>
		<i> <code>menggunakan form action</code> </i>

<br>
<form method="post">
	<td> <input type="text" name="nama" placeholder="isikan nama saya"> </td>
	<td> <input type="submit" name="submit" value="cek"> </td>

		<?php
				echo @$_GET['nama'];
				echo "<br/>";
				echo @$_GET['submit'];
		?>


</body>
</html>