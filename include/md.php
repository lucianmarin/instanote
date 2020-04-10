<?php
	function md($file) {
		$text = '';

		foreach(explode("\n\n", $file) as $line) {
			if (trim($line)) {
				$text .= '<p>'.str_replace("\n", "<br>", trim($line)).'</p>';
			}
		}

		$rules = array(
			'/(\*\*|__)(.*?)\1/' => '<strong>\2</strong>',
			'/(\*|_)(.*?)\1/' => '<em>\2</em>',
			'/`(.*?)`/' => '<code>\1</code>',
			'/!\[([^\[]+)\]\(([^\)]+)\)/' => '<img src=\'\2\' alt=\'\1\'>',
			'/\[([^\[]+)\]\(([^\)]+)\)/' => '<a href="$2">$1</a>'
		);

		foreach($rules as $regex => $replacement) {
			$text = preg_replace($regex, $replacement, $text);
		}

		return $text;
	}
?>
