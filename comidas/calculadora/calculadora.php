<!DOCTYPE html>
<html>

<head>
	<title>Arepera VTV</title>
	<link rel="shortcut icon" href="img/FAVicon.ico">
	<style>
		input[type="button"]:hover {
			background-color: white;
			cursor: pointer;
		}

		input[type="button"].arit {
			background-color: white;
		}

		input[type="button"].igual {
			background-color: white;
		}

		input[type="button"].clear {
			background-color: white;
		}

		form {
			background-color: black;
		}

		input[type="text"] {
			background-color: white;
			border: 0px;
			width: 250px;
			height: 40px;
			font-size: 20px;
			color: black;
			text-align: right;
			pointer-events: none;
		}

		input[name="txtcaja1"] {
			height: 20px;
			font-size: 16px;
		}

		input[name="txtcaja2"] {
			margin-bottom: 5px;
			font-size: 26px;
		}

		input[type="button"] {
			font-size: 18px;
			font-weight: lighter;
			font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, "sans-serif";
			width: 60px;
			border: 0px;
			height: 60px;
			color: black;
			background-color: white;
			margin-bottom: 5px;
		}

		body {


			background-color: black;
		}
	</style>
</head>

<body style="background:black no-repeat center center fixed;">
	<center>

		<form name="f1"><br>
			<input type="text" name="txtcaja1">
			<br>
			<input type="text" name="txtcaja2" value="0">
			<br>
			<input type="button" class="arit" onClick="arit('%')" value="%">
			<input type="button" onClick="raiz()" value="√">
			<input type="button" onClick="escribir('7')" value="x²">
			<input type="button" onClick="escribir('7')" value="¹/×">
			<br>
			<input type="button" class="clear" onClick="document.f1.txtcaja2.value='0'" value="CE">
			<input type="button" class="clear" onClick="document.f1.reset(); blocdel = false;" value="C">
			<input type="button" class="clear" onClick="deletecarac()" value="◄">

			<input type="button" class="arit" onClick="arit('/')" value="÷">
			<br>
			<input type="button" onclick="escribir(this.value)" value="7">
			<input type="button" onclick="escribir(this.value)" value="8">
			<input type="button" onclick="escribir(this.value)" value="9">
			<input type="button" class="arit" onClick="arit('*')" value="×">
			<br>
			<input type="button" onclick="escribir(this.value)" value="4">
			<input type="button" onclick="escribir(this.value)" value="5">
			<input type="button" onclick="escribir(this.value)" value="6">
			<input type="button" class="arit" onClick="arit('-')" value="-">
			<br>
			<input type="button" onclick="escribir(this.value)" value="1">
			<input type="button" onclick="escribir(this.value)" value="2">
			<input type="button" onclick="escribir(this.value)" value="3">
			<input type="button" class="arit" onClick="arit('+')" value="+">
			<br>
			<input type="button" class="arit" onClick="masmenos()" value="±">
			<input type="button" onclick="escribir(this.value)" value="0">
			<input type="button" onClick="escribir('.')" value=".">
			<input type="button" class="igual" onClick="calcular()" value="=">
			<br>
		</form>
	</center>
	<script type="text/javascript">
		var borrar = false;

		function deletecarac() {
			var caja2 = document.f1.txtcaja2.value;
			if (caja2 == "" || caja2 == "0" || caja2.length == 1 && blocdel != true) {
				document.f1.txtcaja2.value = "0";
			} else if (blocdel != true) {
				var res = caja2.substring(0, caja2.length - 1);
				document.f1.txtcaja2.value = res;
			}
		}

		function escribir(n) {
			var caja2 = document.f1.txtcaja2.value;
			if (borrar) {
				//alert("se borro");
				document.f1.txtcaja2.value = "";
				borrar = false;
				document.f1.txtcaja2.value = n;
			} else if (caja2 == "0" && n != ".") {
				cajao = caja2.replace("0", "")
				document.f1.txtcaja2.value = cajao + n;
			} else {
				document.f1.txtcaja2.value = caja2 + n;
			}
		}

		function raiz() {
			var caja1 = document.f1.txtcaja1.value;
			var caja2 = document.f1.txtcaja2.value;
			document.f1.txtcaja1.value = "Math.sqrt(" + caja2 + caja1 + ")";
			document.f1.txtcaja2.value = "";
		}

		function arit(o) {
			var caja1 = document.f1.txtcaja1.value;
			var caja2 = document.f1.txtcaja2.value;
			var unum = caja1.substring(caja1.length - 1);
			calcular()
			if (unum == "+" || unum == "-" || unum == "*" || unum == "/") {
				unum = unum.replace(unum, o);
				var res = caja1.substring(0, caja1.length - 1);
				document.f1.txtcaja1.value = res + unum;
			}
			if (caja1 == "" && caja2 != "") {
				document.f1.txtcaja1.value = caja2 + o;
			} else {
				document.f1.txtcaja1.value = caja1 + caja2 + o;
			}
			borrar = true;
		}

		function calcular() {
			var caja1 = document.f1.txtcaja1.value;
			var caja2 = document.f1.txtcaja2.value;
			document.f1.txtcaja2.value = eval(caja1 + caja2);
			document.f1.txtcaja1.value = "";
			borrar = true;
			blocdel = true;
		}

		function masmenos() {
			var caja2 = document.f1.txtcaja2.value;
			if (caja2 > 0) {
				document.f1.txtcaja2.value = "(-" + caja2 + ")";
			} else {
				cajaplus = caja2.replace(/[-|(|)]/g, "");
				document.f1.txtcaja2.value = cajaplus;
			}
		}
	</script>
</body>

</html>