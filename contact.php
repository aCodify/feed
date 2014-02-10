<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1.0">

<title>HERO contact</title>

<!-- BEGIN HEADER INCLUDE -->
<?php include "includes/page-header.php" ;?>
<!-- END HEADER INCLUDE -->

</head>
<body>

<!-- BEGIN LOGO + TAGLINE + MENU BUTTON INCLUDE -->
<?php include "includes/logo-tagline-menubutton.php" ;?>
<!-- END LOGO + TAGLINE + MENU BUTTON INCLUDE -->

<!-- BEGIN MAIN MENU -->
<div id="top-slide-menu"><div id="menu-wrap"><ul id="menu-main-menu" class="menu">

<!-- BEGIN MENU INCLUDE -->
<?php include "includes/menu.php" ;?>
<!-- END MENU INCLUDE -->

</ul></div></div>
<!-- END MAIN MENU -->

<div id="sitewrap">
<div id="pagewrap">
<div id="body">
<div id="content">




	<!--
	BEGIN EDITING HERE
	-->
				
		
		<!-- BEGIN GOOGLE MAPS -->
			<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Burj+Al+Arab+-+Jumeira+-+Dubai+-+United+Arab+Emirates&amp;aq=0&amp;oq=burj+al+arab&amp;sll=35.689675,51.425221&amp;sspn=0.005943,0.00868&amp;t=h&amp;ie=UTF8&amp;hq=Burj+Al+Arab+-+Jumeira+-+Dubai+-+United+Arab+Emirates&amp;ll=25.14114,55.185429&amp;spn=0.006295,0.006295&amp;output=embed"></iframe>
			<!-- END GOOGLE MAPS -->
			
			<!-- BEGIN TITLE -->
			<h1 class="page-title">Get in touch with us!</h1>
			<!-- END TITLE -->
			
			
			<!-- BEGIN CONTENT -->
			<div class="entry-content"><p>Here you can embed the appropriate map like seen above, or anything else you'd like, along with entering your other contact details. Perhaps simply like this:</p>

			  <p><strong>Phone:</strong> 039-887-9876<br>
				<strong>Email:</strong> name@domain.com<br>
				<strong>Address:</strong> 3924 Middle Harbour, Mountainair, Vermont</p>

			  <p>And, of course, there's a beautiful contact form complete with validation:</p>

			</div>
			<!-- END CONTENT -->
			
			
			<!-- BEGIN CONTACT FORM -->	
			<script type="text/javascript">                                         
				/* <![CDATA[ */
					jQuery(document).ready(function(){ // sends the data filled in the contact form to the php file and shows a message
						jQuery("#contact-form").submit(function(){
							var str = jQuery(this).serialize();
							jQuery.ajax({
							   type: "POST",
							   url: "includes/contact-send.php",
							   data: str,
							   success: function(msg)
							   {
									jQuery("#formstatus").ajaxComplete(function(event, request, settings){
										if(msg == 'OK'){ // Message Sent? Show the 'Thank You' message and hide the form
											result = '<div class="formstatusok">Your message has been sent.<br> Thank you!</div>';
											jQuery("#contactform-wrapper").hide();
										}
										else{
										if(msg == 'ERROR'){ // Problems? Show the 'Error' message
										result = '<div class="formstatuserror">Please make sure you have entered: <strong><br>-  your message<br>-  your name<br>-  a valid email address</strong></div>';
										}
										}
										jQuery(this).html(result);
									});
								}
							
							 });
							return false;
						});
					});
				/* ]]> */
			</script>
			
			
			<form id="contact-form" action="javascript:alert('success!');">
			<div id="formstatus"></div>
						
				<div id="contactform-wrapper">
				<div id="message-wrapper"><textarea name="message" id="message" placeholder="Type your message here.." ></textarea></div>
				<div id="name-wrapper"><input type="text" name="name" value="" id="name" placeholder="Name" /></div>
				<div id="mail-wrapper"><input type="text" name="email" value="" id="mail" placeholder="Email" /></div>
				<input type="submit" name="submit" value="Send!" id="contact-submit" />
				<div id="cancel-message"></div>
				</div>
			</form>
			
			
			<script> 
			<!-- BEGIN NAME, EMAIL FIELD FADE-IN -->
			jQuery('#name-wrapper,#mail-wrapper').hide();
			jQuery('#cancel-message').hide();
			jQuery('#formstatus').animate({opacity: 0}, 0);
			
			jQuery('#message').click(function() {
					jQuery('#name-wrapper,#mail-wrapper,#cancel-message').slideDown(200).animate({opacity: 1}, 100);
				});
			
			jQuery('#cancel-message').click(function() {
					jQuery('#name-wrapper,#mail-wrapper,#formstatus').animate({opacity: 0}, 100).slideUp(150);
					jQuery('#cancel-message').animate({opacity: 0}, 0).hide(0);
				});
				
			jQuery('#contact-submit').click(function() {
					jQuery('#formstatus').show(0).animate({opacity: 1}, 400).animate({opacity: 0.5}, 150).animate({opacity: 1}, 350);
				});
			<!-- END NAME, EMAIL FIELD FADE-IN -->
			
			<!-- BEGIN JUMP TO #footer ON #message CLICK -->
			jQuery('#message').click(function() {
			jQuery('html,body').animate({
				scrollTop: '+=' + jQuery('#cancel-message').offset().top + 'px'
			}, 'fast');
			});
			<!-- END JUMP TO #footer ON #message CLICK -->
			
			<!-- BEGIN AUTO-EXPAND TEXTAREA -->
			jQuery(document).ready(function() {
				jQuery( "textarea" ).autogrow();
			});
			<!-- END AUTO-EXPAND TEXTAREA -->
			</script>
			<!-- END CONTACT FORM -->
		
		
	<!--
	END EDITING HERE
	-->




</div>
</div>
</div>
</div>


<!-- BEGIN FOOTER INCLUDE -->
<?php include "includes/page-footer.php" ;?>
<!-- END FOOTER INCLUDE -->

</body>
</html>