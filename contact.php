<?php include 'includes/head.php' ?>

	<!-- Pages -->
	<?php include 'includes/sections/contact/contact-head.php' ?>

	<section class="contact page">
		<div class="container">
			<h1>Excel Blinds</h1>
			<p><span class="spacer"></span></p>
			<p>Address</p>
			<p>Phone, Fax</p>
			<p>Email</p>
			<form class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<input type="text" name="name" placeholder="NAME" >
					<input type="text" name="phone" placeholder="PHONE" >
					<input type="email" name="email" placeholder="EMAIL" >
					<textarea name="message" placeholder="MESSAGE"></textarea>
					<input type="submit" value="SUBMIT">
				</div>
			</form>
		</div>
	</section>

	<?php include 'includes/sections/general/shoutout.php' ?>
	<!-- End Pages -->

<?php include 'includes/tail.php' ?>