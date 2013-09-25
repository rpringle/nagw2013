<?php
	// Define event var and attendees as array of attendee names
	$event = 'NAGW 2013 Conference';
	$attendees = array('Ron Pringle','Your Name Here');
	
?>
<html>
	<head>
	<title>List of Attendees at NAGW Git Session</title>
	</head>
	<body>
		<?php
			echo '<h1>'.$event.'</h1>'."\n";
			echo "<h2>Instructions</h2>";
			echo "<p>Please add your name to the attendees array in the code and increment the version number by one minor increment (i.e. version 1.1, 1.2, etc.). Commit your code, push the commit to your cloned repository and then issue a pull request to the master repository.</p>\n";
			echo "<p>Don't worry about messing anything up, that's why we're using Git in the first place!</p>\n";
			echo "<p>Need help? Contact me at <a href="mailto:pringler@bouldercolorado.gov">pringler@bouldercolorado.gov</a>.</p>\n";
			echo "<h2>Session attendee list</h2>\n";
			if (isset($attendees))
			{
				echo "<ul>\n";
				
				foreach($attendees as $attendee)
					echo '<li>'.$attendee.'</li>'."\n";
				}
				
				echo "</ul>\n";
			}
		?>
		<p>Version 1.0</p>
	</body>
</html>