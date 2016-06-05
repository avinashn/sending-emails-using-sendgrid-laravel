<!DOCTYPE html>
<body>
	<h2>Demo mail from JustLaravel</h2>
	
	@if(isset($bodyMessage))
	<div class="w3-container w3-orange">
		<p>
			<b>The data you have entered is :</b><span
				style="color: #e36c39; background: #EEE";> {{ $bodyMessage }}</span>
		</p>
	</div>
	@endif
	
	<p>Below are some links related to this post :</p>
	<ul style="list-style-type: disc">
		<li>Post Link : justlaravel.com/sending-emails-using-sendgrid-laravel</li>
		<li>Github Link :
			github.com/avinashn/sending-emails-using-sendgrid-laravel</li>
	</ul>
	
	<p>Below are some useful links from justlaravel.com :</p>
	<ul style="list-style-type: disc">
		<li><a href="http://justlaravel.com/posts/">All Posts</a></li>
		<li><a href="http://justlaravel.com/demos/">All Demos</a></li>
	</ul>
</body>
</html>