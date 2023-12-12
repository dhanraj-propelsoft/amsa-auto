<section id="feadback" class="padding ptb-xs-40 img_bg1">
			<div class="container">
				<div class="row text-center mb-40 mb-xs-10">
					<div class="col-lg-6 offset-lg-3 sect-title">
						<h2><span>BOOK </span>YOUR SERVICE HERE</h2>
						<span class="title_bdr"><i class="ion-more"></i></span>

					</div>
				</div>
				<div class="row">

					<div class=" col-md-12 col-lg-12">

						<!-- Contact FORM -->
						<form name="mail" method="post" action="" class="quote-form" id="contact">
							<!-- IF MAIL SENT SUCCESSFULLY 
							<div id="success">
								<div role="alert" class="alert alert-success">
									<strong>Thanks</strong> for using our website. Your message has been sent.
								</div>
							</div>
							 END IF MAIL SENT SUCCESSFULLY -->
							<div class="row">
								<div class="col-md-4 col-lg-4">
									<div class="form-field">
										<input class="input-sm form-full" id="name" type="text" name="name" placeholder="Your Name" required>
									</div>
								</div>

								<div class="col-md-4 col-lg-4">
									<div class="form-field">
										<input class="input-sm form-full" id="email" type="text" name="email" placeholder="Email">
									</div>
								</div>

								<div class="col-md-4 col-lg-4">
									<div class="form-field">
										<input class="input-sm form-full" id="sub" type="text" name="mobile" placeholder="Mobile No" required>
									</div>
								</div>

								<div class="col-md-10 col-lg-10">
									<div class="form-field">
										<textarea class="form-full" id="message" rows="7" name="message" placeholder="Your Message" required></textarea>
									</div>
								</div>
								<div class="col-md-2 col-lg-2 d-flex align-items-center">
									<button class="bnt btn-text sent-but mt-xs-30" type="submit" id="submit" name="send">
										Send
									</button>
								</div>
							</div>
						</form>
						
							<?Php
						if(isset($_POST['send'])){ 
						   $name= $_POST["name"];
						   $email= $_POST["email"];
						   $mobile= $_POST["mobile"];
					      $headers  = 'MIME-Version: 1.0' . "\r\n";
              $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
             $headers .= "From: sudalaikani@amshacarcare.com";
		if(mail("sudalaikani@amshacarcare.com","Book A Service", "<html><head><title>Amsha  Car Care</title></head><body><table class=\"table table-striped table-bordered\"><tr><td>Name:</td><td>$name</td></tr><tr><td>Email:</td><td>$email</td></tr><tr><td>Mobile:</td><td>$mobile</td></tr><tr><td>Message:</td><td>".$_POST["message"]."</td></tr></table></body></html>", $headers))
		
		{ ?>
<script type="text/javascript">
    alert("Your Service book details sent successfully. We will get back to you shortly. ");
</script>        
			<div id="success">
								<div role="alert" class="alert alert-success">
									<strong>Thanks</strong> for using our website. Your message has been sent.
								</div>
							</div>
		<?php }
		else{ ?>
			<div id="success">
								<div role="alert" class="alert alert-danger">
									<strong>Thanks</strong> for using our website. Your message was not sent.,Please try again.
								</div>
							</div>
	<?php	}
						}
						?>
						
						<!-- END Contact FORM -->
					</div>

				</div>

			</div>
		</section>