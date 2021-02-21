<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CodeIgniter 3 with REST-SERVER</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter 3 with <span style="color: blue">REST-SERVER</span> !</h1>
    
	<div id="body">
		<p>source library : <a href="https://github.com/rendy-ananda/codeigniter3-with-restserver" target="_blank">rendy-ananda/codeigniter-restserver</a></p>
        <p>original by : <a href="https://github.com/chriskacerguis/codeigniter-restserver" target="_blank">chriskacerguis/codeigniter-restserver</a></p>
        
        <br>

		<p>Access this url for Example :</p>
		<code>http://localhost/your-project-name/index.php/api/users</code>

        <br>

        <p>Optional : rename <b>htaccess</b> file to <b>.htaccess</b> and edit your <b>config.php</b> for remove index.php. So you can access the url as below :</p>
        <code>http://localhost/your-project-name/api/users</code>

        <p class="footer">Created by : <a href="https://github.com/rendy-ananda/">Rendy</a></p>
	</div>
</div>

</body>
</html>