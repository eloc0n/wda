<!DOCTYPE html>
<html>

<?php include('templates/header.php'); 
	include('contactform.php');
?>

<body>
	
	<main>
		<section id="contact" class="contact">
			
			<div class="container">
				<div class="row">
					<div class="col-md-10  col-sm-12 mx-auto py-5 text-center">
						<h1>CONTACT US</h1>
						<div class="line blue"><span> </span></div>
						<p>Kefallinias 46, 11251, Athina, Attiki, Tel: 2108203827</p>

						<form action="contactform.php" method="POST">
						<div class="form-row">
							<div class="form-group col-md-6 mb-2">
								<input type="text" name="full_name" class="form-control" placeholder="Your Name" value="<?php echo htmlspecialchars($full_name) ?>" required>
								<div class="text-danger"><?php echo $errors['full_name']; ?></div>
							</div>
							<div class="form-group col-md-6 mb-2">
								<input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo htmlspecialchars($email) ?>" required>
								<div class="text-danger"><?php echo $errors['email']; ?></div>
							</div>
						</div>
						<div class="form-group">
							<textarea name="message" class="form-control" placeholder="Your Message"></textarea>
						</div>
						<div class="text-center">
							<button type="submit" name="submit" class="btn btn-warning mt-5">SEND MESSAGE</button>
						</div>
						</form>
					</div>
				</div>
			</div>
				
		</section>
	</main>

</body>
<?php include('templates/footer.php'); ?>
</html>