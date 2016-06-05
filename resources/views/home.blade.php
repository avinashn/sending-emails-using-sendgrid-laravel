<!DOCTYPE html>
<html>
<head>
<title>Sending mail using SendGrid - justLaravel.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default navbar-fixed-top">
			<ul class="nav navbar-nav">
				<li><a href="http://justlaravel.com/">justlaravel.com</a></li>
				<li><a href="http://justlaravel.com/demos/">Demos home</a></li>
			</ul>
		</nav>
		<br> <br> <br>
		<div class="w3-container">
			<p>
				This is a live demo of the application Sending mail using SendGrid
				in laravel which is described in this post.<a style="color: #e36c39"
					href="http://justlaravel.com/sending-emails-using-sendgrid-laravel/"
					target="_blank">Sending mail using SendGrid in Laravel</a>.
				Complete project source code is also available on github <a
					style="color: #e36c39"
					href="https://github.com/avinashn/sending-emails-using-sendgrid-laravel"
					target="_blank">here</a>
			</p>
		</div>
		@if($errors->any())
		<div class="w3-container w3-section w3-green">
			<span onclick="this.parentElement.style.display='none'"
				class="w3-closebtn">&times;</span>
			<h3>Success!</h3>
			<p>{{$errors->first()}}</p>
		</div>
		@endif

		<div class="w3-container w3-section w3-deep-orange">
			<h2 class="w3-margin">Sending emails using SendGrid Demo : Example 1</h2>
			<small class="w3-margin-12">Here you will enter some text and that
				text will be sent to the email id provided below.</small>
		</div>

		<form class="w3-container" action="sendemail" method="POST"
			role="email">
			{{ csrf_field() }}
			<p>
				<label>Enter Some Text</label>
			</p>
			<p>
				<textarea class="w3-input" type="text" name="message"></textarea>
			</p>

			<p>
				<label>Email</label> <input class="w3-input" name="toEmail"
					type="email" required>
			</p>
			<p>
				<input type="submit" class="w3-btn w3-orange" value="Send">
			</p>
		</form>
		<br>

		<div class="w3-container w3-section  w3-deep-orange">
			<h2>Sending emails using SendGrid Demo : Example 2</h2>
			<small>Here an email will be sent to the email id provided below.</small>
		</div>
		<form class="w3-container" action="sendemail" method="POST"
			role="email">
			{{ csrf_field() }}
			<p>
				<label>Email</label> <input name="toEmail" class="w3-input"
					type="email" required>
			</p>
			<p>
				<input type="submit" class="w3-btn w3-orange" value="Send">
			</p>
		</form>

</body>
</html>