<?php
	include 'include/context.php';

	$to = "marin.lucian@gmail.com";
	$sent = isset($_GET['sent']);

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$email = stripslashes($_POST['email']);
		$name = stripslashes($_POST['name']);
		$subject = stripslashes($_POST['subject']);

		$message = stripslashes($_POST['message']) . PHP_EOL;
		$message .= "--" . PHP_EOL;
		$message .= "Sent from lucianmarin.com" . PHP_EOL;

		$headers = "From: $name <$email>" . PHP_EOL;
		$headers .= "Reply-To: $email" . PHP_EOL;
		$headers .= "Cc: $to" . PHP_EOL;

		mail($to, $subject, $message, $headers);

		header('Location: /contact.php?sent');
		exit;
	}
?>

<? include 'include/header.php'; ?>
<? include 'include/menu.php'; ?>

<div class="main">
	<div class="center">
		<? if($sent): ?>
			<div class="content">
				<h4><a href="contact.php">Message sent</a></h4>
				<p class="quote">See what I’m doing now on <a href="https://sublevel.net/lucian/">Sublevel</a>...</p>
				<p class="note">...or wait for an answer.</p>
			</div>
		<? else: ?>
			<form action="<?= $self ?>" method="post" autocomplete="off">
				<input type="email" name="email" placeholder="Email"
					required />
				<input type="text" name="subject" placeholder="Subject"
					required />
				<textarea name="message" placeholder="Message" rows="4" cols="80"
					oninput="expand(this)" required></textarea>
				<input type="text" name="name" placeholder="Name"
					class="last" required />
				<input type="submit" value="Send" />
			</form>
		<? endif; ?>
	</div>
</div>

<? include 'include/footer.php'; ?>
