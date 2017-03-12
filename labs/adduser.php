<?php
	

		$servername = "localhost";
		$username = "root";
		$password = "root";
		$database = "lab";

		$connection = mysqli_connect($servername, $username, $password, $database);

		$query = "INSERT INTO users (username, password) VALUES ('" . $_POST["username"] . "', '" . $_POST["password"] . "')";

		$result = mysqli_query($connection, $query);
		$connection->close();
		header('Location: databases.php');
?>


<div class="blog">
	<div class="date">
		<p class="detail">02.09.17 <span class="name">/ Photography</span> </p>
	</div>
	<div class="blog-text">
		<a href="posts.php"><h3>Fly Reel</h3>
		<p>Went to the Hacker Lab last night for a introduction to photography class.  Learned how to use hot lights and strobe lights along with a grey background to take professional pictures with my iphone.  The fly reel pictured on my blog page is the first picture I took with my iphone in the photo booth.  Looking forward to learning more about photography!</p></a>
	</div>
</div>

<div class="blog">
	<div class="date">
		<p class="detail">02.08.17 <span class="name">/ Commence Blog</span> </p>
	</div>
	<div class="blog-text">
		<h3>Free Pizza</h3>
		<p>First day of creating my professional blog with PHP and CSS.  Hanging out at the Urban Hive eating free pizza, drinking Kombucha and celebrating one of the members contract with the EPA.</p>
	</div>
</div>


<div class="blog">
	<div class="date">
		<p class="detail">02.07.17 <span class="name">/ Back-End</span> </p>
	</div>
	<div class="blog-text">
		<h3>First Day</h3>
		<p>First day of Back-End bootcamp at the Hacker Lab in Midtown, Sacramento.  Re-united with the minions of John Kurnett.  Started the process of learning PHP and created wire frame model to create our own blog page.  We met a possible future client who is interested in giving us some of his workload with Wordpress.  First night was very successful.</p>
	</div>
</div>

<div class="blog">
	<div class="date">
		<p class="detail">02.06.17 <span class="name">/ Treehouse</span> </p>
	</div>
	<div class="blog-text">
		<h3>Portfolio</h3>
		<p>Completed the 'How to Make a Website' using basic HTML and CSS with <i>Treehouse.com</i>. Finished my professional portfolio and learned how to buy a domain name and host my website at <a href="http://brennangrout.com/"><i>brennangrout.com</i><a>.</p>
	</div>
</div>

<div class="blog">
	<div class="date">
		<p class="detail">02.06.17 <span class="name">/ Meetup</span> </p>
	</div>
	<div class="blog-text">
		<h3>Code 4 Sac</h3>
		<p>Went to Code 4 Sacramento meetup at the Urban Hive.  Met more programmers and discussed working on a website for the city which gives people access to affordable living downtown.</p>
	</div>
</div>
