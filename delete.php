<?php
	include 'include/context.php';

	$id = isset($_GET['id']) ? $_GET['id'] : 0;

	if ($auth and $id) {
		$notes = get_notes();
		unset($notes[$id]);
		put_notes($notes);
	}

	redirect();
?>
