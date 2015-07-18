<?php
/**
 * Created by PhpStorm.
 * User: brandonellis
 * Date: 15-07-17
 * Time: 8:33 PM
 */

$subjectPrefix = '[Web Inquiry Form]';
$emailTo       = 'brandonellis.nmg@gmail.com';
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	$name    = stripslashes( trim( $_POST['form-name'] ) );
	$email   = stripslashes( trim( $_POST['form-email'] ) );
	$phone   = stripslashes( trim( $_POST['form-tel'] ) );
	$subject = stripslashes( trim( $_POST['form-assunto'] ) );
	$message = stripslashes( trim( $_POST['form-mensagem'] ) );
	$pattern = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';
	if ( preg_match( $pattern, $name ) || preg_match( $pattern, $email ) || preg_match( $pattern, $subject ) ) {
		die( "Header injection detected" );
	}
	$emailIsValid = preg_match( '/^[^0-9][A-z0-9._%+-]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/', $email );
	if ( $name && $email && $emailIsValid && $subject && $message ) {
		$subject = "$subjectPrefix $subject";
		$body    = "Name: $name <br /> Email: $email <br /> Phone: $phone <br /> Message: $message";
		$headers = 'MIME-Version: 1.1' . PHP_EOL;
		$headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
		$headers .= "From: $name <$email>" . PHP_EOL;
		$headers .= "Return-Path: $emailTo" . PHP_EOL;
		$headers .= "Reply-To: $email" . PHP_EOL;
		$headers .= "X-Mailer: PHP/" . phpversion() . PHP_EOL;
		mail( $emailTo, $subject, $body, $headers );
		$emailSent = true;
	} else {
		$hasError = true;
	}
}

if ( ! empty( $emailSent ) ): ?>
	<div class="col-xs-12" style="padding:0 !important;">
		<div class="alert alert-success text-center">Your message has been successfully sent.</div>
	</div>
<?php else: ?>
	<?php if ( ! empty( $hasError ) ): ?>
		<div class="col-xs-12" style="padding:0 !important;">
			<div class="alert alert-danger text-center">We're sorry there was an error sending your message. </div>
		</div>
	<?php endif; ?>
	<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" id="contact-form" class="form-horizontal" role="form" method="post">
		<div class="form-group">
			<label for="name" class="col-xs-3 control-label">Name</label>

			<div class="col-xs-9">
				<input type="text" class="form-control" id="form-name" name="form-name" placeholder="Name" required>
			</div>
		</div>
		<div class="form-group">
			<label for="tel" class="col-xs-3 control-label">Phone</label>

			<div class="col-xs-9">
				<input type="tel" class="form-control" id="form-tel" name="form-tel" placeholder="Phone">
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-xs-3 control-label">Email</label>

			<div class="col-xs-9">
				<input type="email" class="form-control" id="form-email" name="form-email" placeholder="Email" required>
			</div>
		</div>
		<div class="form-group">
			<label for="comments" class="col-xs-3 control-label">Comments</label>

			<div class="col-xs-9">
				<textarea class="form-control" rows="3" id="form-comments" name="form-comments" placeholder="Comments" required></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="col-xs-offset-3 col-xs-9">
				<button type="submit" class="btn btn-default">Submit</button>
			</div>
		</div>
	</form>
<?php endif; ?>
<script type="text/javascript" src="js/contact-form.js"></script>