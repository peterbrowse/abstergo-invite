<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Abstergo Entertainment - Employee Registration</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="main-container">
            <div class="main wrapper clearfix">
            	<div class="form-holder">
            		<div class="form-header">
            			<img class="left" src="./img/black_header_logo.png" />
            			<img class="right" src="./img/header_buttons.png" />
            		</div>
            		<div class="form-content-area">
            			<div class="screen screen-one">
	            			<div class="form-content-area-inner">
		            			<img class="white_logo_img" src="./img/white_header_logo.png" />
								<h1>Welcome.</h1>
		            			<p>ANIMUS PROJECT LABORATORY<br />
TOUR COMMENCES 19.09.13</p>
	            			</div>
							<div class="form-content-button-area">
		            			<div class="button-holder accept_button">
			            			<div class="button">
			            				<p>
				            				Accept<br/>
				            				Invitation
			            				</p>
			            			</div>
		            			</div>
		            			<a href="mailto:ubisoftuk@ubisoft.com,LEM-Ubisoft@ketchum.com?subject=Decline/Refer Invitation"><div class="button-holder">
			            			<div class="button">
			            				<p>
				            				Decline/Refer<br/>
				            				Invitation
			            				</p>
			            			</div>
		            			</div>
		            			</a>
							</div>
            			</div>
            			<div class="screen screen-two">
	            			<div class="form-content-area-inner">
		            			<img class="white_logo_img" src="./img/white_header_logo.png" />
								<h1>SIGN IN TO BEGIN REGISTRATION.</h1>
		            			<p>Enter the email address we contacted you on, TO PROCEED TO THE NEXT STAGE OF YOUR REGISTRATION.</p>
		            			<form class="eSForm" id="emailSubmitForm" method="post" action="">
									<fieldset>
										<label for="userEmailAddress">Email Address:</label>
										<input id="userEmailAddress" name="userEmailAddress" size="20" class="required email" />
									</fieldset>
						 		</form>
						 		<div class="error-message"></div>
	            			</div>
							<div class="form-content-button-area">
		            			<div class="button-holder email_submit_button">
			            			<div class="button">
			            				<p>
				            				Confirm<br/>
				            				Identification
			            				</p>
			            			</div>
		            			</div>
							</div>
            			</div>
            			<div class="screen screen-three">
	            			<div class="form-content-area-inner">
		            			<img class="white_logo_img" src="./img/white_header_logo.png" />
								<h1>TO GAIN ENTRY TO THE ANIMUS PROJECT LABORATORY YOU WILL NEED A VALID ID CARD.</h1>
		            			<p>Complete the required details below, ONCE APPROVED YOUR ID WILL BE POSTED TO YOU.</p>
		            			<form class="userDetailsForm" id="userDetailsForm" method="post" action="">
									<fieldset>
										<label for="userFirstName">First Name:</label>
										<input id="userFirstName" name="userFirstName" size="20" class="required" />
										<label for="userLastName">Last Name:</label>
										<input id="userLastName" name="userLastName" size="20" class="required" />
										<input id="userCompany" name="userCompany" size="20" type="hidden" />
										<input id="userKnownEmailAddress" name="userKnownEmailAddress" size="20" type="hidden" />
										<input id="replyTo" name="replyTo" type="hidden" />
										<label for="userAddressLineOne">Address Line 1:</label>
										<input id="userAddressLineOne" name="userAddressLineOne" size="20" class="required" />
										<label for="userAddressLineTwo">Address Line 2:</label>
										<input id="userAddressLineTwo" name="userAddressLineTwo" size="20" />
										<label for="userAddressLineTwo">Address Line 3:</label>
										<input id="userAddressLineThree" name="userAddressLineThree" size="20" />
										<label for="userAddressCity">Town/City:</label>
										<input id="userAddressCity" name="userAddressCity" size="20" class="required" />
										<label for="userAddressPostcode">Postcode:</label>
										<input id="userAddressPostcode" name="userAddressPostcode" size="20" class="required" />
									</fieldset>
						 		</form>
						 		<div class="error-message"></div>
	            			</div>
							<div class="form-content-button-area">
		            			<div class="button-holder details_submit_button">
			            			<div class="button">
			            				<p>
				            				Submit<br/>
				            				Information
			            				</p>
			            			</div>
		            			</div>
							</div>
            			</div>
            		</div>
            	</div>
            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

		<script type="text/javascript" src="js/threejs/stats.min.js"></script>
		<script type="text/javascript" src="js/threejs/three.min.js"></script>
		<script type="text/javascript" src="js/drawer.js"></script>
		<script type="text/javascript" src="js/jquery.validate.js"></script>
		<script type="text/javascript" src="js/additional-methods.min.js"></script>
		<script type="text/javascript" src="js/jquery.form.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
