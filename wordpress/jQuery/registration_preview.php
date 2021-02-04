<html>
<head>
	<title>Sending data through post</title>
	<style type="text/css">
		ul{ border:1px solid black; list-style:none;
			margin:0pt;padding:0pt;float:left;
			font-family:Verdana, Arial, Helvetica,
			sans-serif;font-size:12px;width:400px; }
			li{padding:10px 5px;border-bottom:1px solid black;}
			label{width:100px;text-align:right;margin-right:10px;
				float:left;}
				#response {display:none;}
			</style>
</head>
<body>
<form>
	<ul id="information">
		<li><label>Email:</label>
			<input type="text" name="email"/></li>
			<li><label>Full Name</label>
				<input type="text" name="fullName"/></li>
				<li>
					<label>Sex</label>
					<input type="radio" name="sex" value="Male"
					checked="checked"/>Male
					<input type="radio" name="sex" value="Female"/>Female
				</li>
				<li>
					<label>Country</label>
					<select name="country">
						<option value="India">India</option>
						<option value="UK">UK</option>
						<option value="US">USA</option>
					</select>
				</li>
				<li>
					<input type="button" value="GO" name="submit"/>
				</li>
			</ul>
			<p id="response"></p>
		</form>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function ()
			{
				$('input:button').click(function()
				{
					var data = $('form').serialize();
					$.post(
						'registration_process.php',
						data,
						function(data)
						{
							$('#information').hide();
							$('#response').html(data).show();
						},
						'html'
						);
				});
			});
		</script>
	</body>
	</html>