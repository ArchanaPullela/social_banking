<div id='title_bar'>
	<ul>
		<li><a href="seindex.php">Home</a></li>
		<?php
			if(loggedin())
			{
		?>
		<li><a href="seprofile.php">Profile</a></li>
		<li><a href="serequest.php">Requests</a></li>
		<li><a href="semember.php">Members In the Network</a></li>
		<li><a href="sefrnds.php">Peers</a></li>
		<li><a href="se/display_dash.php">Dashboard</a></li>
		<li><a href="http://localhost/SOF/after_login.html">Navigate</a></li>

		<li><a href="selogout.php">Logout</a></li>


			<?php
			}
			else
			{
			?>
			<li><a href="selogin.php">Login</a></li>
			<li><a href="seregister.php">Register</a></li>
			<?php

			}

		


		?>




		<div class='clear'></div>

	</ul>


</div>