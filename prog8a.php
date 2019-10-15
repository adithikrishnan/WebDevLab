<?php 
if(isset($_POST['res'])) {
	$res = $_POST['display'];
	$res = eval('return' .$res. ';');
}
?>

<html>
	<head>
		<title> Simple Calculator Using php </title>
		<style>
		input {
		background-color: #ff0000;
		border:none;
		color:white;
		width:100%;
		padding:15px 32px;
		text-align:center;
		font-size:15px;
		}
		</style>
	</head>
	<body>
		<center>
			<h2> Calculator Using Php </h2>
			<form name="Calculator" method="post">
				<table>
		 			<tr>
						<td colspan="4">
						<input type="text" name="display" value="<?php if(isset($res)) { echo $res;} ?> ">
						</td>
					</tr>
					<tr>
						<td> <input type = "button" value="1" onclick="Calculator.display.value+='1'"> </td>
						<td> <input type = "button" value="2" onclick="Calculator.display.value+='2'"> </td>
						<td> <input type = "button" value="3" onclick="Calculator.display.value+='3'"> </td>
						<td> <input type = "button" value="+" onclick="Calculator.display.value+='+'"> </td>
					</tr>
					<tr>
						<td> <input type = "button" value="4" onclick="Calculator.display.value+='4'"> </td>
						<td> <input type = "button" value="5" onclick="Calculator.display.value+='5'"> </td>
						<td> <input type = "button" value="6" onclick="Calculator.display.value+='6'"> </td>
						<td> <input type = "button" value="-" onclick="Calculator.display.value+='-'"> </td>
					</tr>
					<tr>
						<td> <input type = "button" value="7" onclick="Calculator.display.value+='7'"> </td>
						<td> <input type = "button" value="8" onclick="Calculator.display.value+='8'"> </td>
						<td> <input type = "button" value="9" onclick="Calculator.display.value+='9'"> </td>
						<td>  <input type = "button" value="*" onclick="Calculator.display.value+='*'"> </td>
					</tr>
					<tr>
						<td> <input type = "button" value="C" onclick="Calculator.display.value=' '"> </td>
						<td> <input type = "button" value="0" onclick="Calculator.display.value+='0'"> </td>
						<td> <input type = "submit" value="=" name="res"> </td>
						<td>  <input type = "button" value="/" onclick="Calculator.display.value+='/'"> </td>
					</tr>
				</table>	
			</form>
		</center>
	</body>
</html>
