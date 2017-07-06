<!DOCTYPE html>
<html>
    <head>
    
    	<!-- CSS -->
        <link href="view/pages/login/login_view.css" rel="stylesheet">

    </head>
    <body>
        <div class="container">
        	<img src=""/>
        </div>
        <div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 text-center">
					<div class="search-box">
						<div class="caption">
							<h3>Login</h3>
							<p></p>
						</div>
						<form action="?model=user&action=log_in" method="post" class="loginForm">
							<div class="input-group">
								<input type="text" id="user_name" class="form-control" placeholder="User Name" name="user_name">

								<input type="password" id="user_pswd" class="form-control" placeholder="Password" name="user_pswd">
								<!--
								<label for='remb'>Remember Me (30 Days)</label>
								<input type="checkbox" id="remb" class="form-remb" value="remb" />
								-->
								<input type="submit" id="submit" class="form-control" value="Submit">

							</div>
						</form>
					</div>
				</div>
				<div class="col-md-4">
					<div class="aro-pswd_info">
						<div id="pswd_info">
							<h4>Password must be requirements</h4>
							<ul>
								<li id="letter" class="invalid">At least <strong>one letter</strong></li>
								<li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
								<li id="number" class="invalid">At least <strong>one number</strong></li>
								<li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
								<li id="space" class="invalid">be<strong> use [~,!,@,#,$,%,^,&,*,-,=,.,;,']</strong></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 text-center">
		        	<a href="">
		        		<p>Forgot Password</p>
		        	</a>
		        </div>
	        </div>
        </div>
        
        <!-- Javascript -->
        <script src="view/pages/login/login_view.js"></script>

    </body>
</html>
