<?php
$bodyMail =
"<html lang='es'>
	<head>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<title>Document</title>
	</head>
	<body>
		<table bgcolor='#222a3f' align='center' width='500px' height='20px'>
				<tr>
					<td>
						<font color='#ffffff' align='center'>
							<h1>Consulta desde la web</h1>
							<h3>{$asunto}</h3>
						</font>
					</td>
				</tr>
		</table>
					<table bgcolor='#223f28' align='center' width='500px' height='200px' bordercolor='#3f2238' border='2'cellspacing='3' cellpadding='3'>
						<tr height='30px'>
							<td width='20%'><font color='#B19B62'><b>Nombre</b></font></td>
							<td width='80%'><font color='#B19B62'>{$nombre}</font></td>
						</tr>
						<tr height='30px'>
							<td width='20%'><font color='#B19B62'><b>Apellido</b></font></td>
							<td width='80%'><font color='#B19B62'>{$apellido}</font></td>
						</tr>
						<tr height='30px'>
							<td width='20%'><font color='#B19B62'><b>Email</b></font></td>
							<td width='80%'><font color='#B19B62'>{$correo}</font></td>
						</tr>
						<tr height='30px'>
							<td width='20%'><font color='#B19B62'><b>Mensaje</b></font></td>
						</tr>
						<tr height='80px'>
							<td colspan='2'><font color='#B19B62'>{$consulta}</font></td>
						</tr>
					</table>
	</body>
</html>";
?>