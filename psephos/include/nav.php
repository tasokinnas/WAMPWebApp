</header>
<?php 
	if($thisPage=="Home") { ?>
		<nav>
			<ul id="menu">
				<li class="navopt"><a class="navlink sel" href="index.php"><span></span>Home</a></li>
				<li class="navopt"><a class="navlink" href="query.php"><span></span>Query</a></li>
				<li class="navopt"><a class="navlink" href="register.php"><span></span>Register</a></li>
				<li class="navopt"><a class="navlink" href="contact.php"><span></span>Contact</a></li>
				<li class="navopt"><a class="navlink" href="about.php"><span></span>About</a></li>
			</ul>
		</nav>
<?php	
	} else if($thisPage=="Query") { ?>
		<nav>
			<ul id="menu">
				<li class="navopt"><a class="navlink" href="index.php"><span></span>Home</a></li>
				<li class="navopt"><a class="navlink sel" href="query.php"><span></span>Query</a></li>
				<li class="navopt"><a class="navlink" href="register.php"><span></span>Register</a></li>
				<li class="navopt"><a class="navlink" href="contact.php"><span></span>Contact</a></li>
				<li class="navopt"><a class="navlink" href="about.php"><span></span>About</a></li>
			</ul>
		</nav>
<?php	
	} else if($thisPage=="Register") { ?>
		<nav>
			<ul id="menu">
				<li class="navopt"><a class="navlink" href="index.php"><span></span>Home</a></li>
				<li class="navopt"><a class="navlink" href="query.php"><span></span>Query</a></li>
				<li class="navopt"><a class="navlink sel" href="register.php"><span></span>Register</a></li>
				<li class="navopt"><a class="navlink" href="contact.php"><span></span>Contact</a></li>
				<li class="navopt"><a class="navlink" href="about.php"><span></span>About</a></li>
			</ul>
		</nav>
<?php	
	} else if($thisPage=="Contact") { ?>
		<nav>
			<ul id="menu">
				<li class="navopt"><a class="navlink" href="index.php"><span></span>Home</a></li>
				<li class="navopt"><a class="navlink" href="query.php"><span></span>Query</a></li>
				<li class="navopt"><a class="navlink" href="register.php"><span></span>Register</a></li>
				<li class="navopt"><a class="navlink sel" href="contact.php"><span></span>Contact</a></li>
				<li class="navopt"><a class="navlink" href="about.php"><span></span>About</a></li>
			</ul>
		</nav>
<?php	
	} else if($thisPage=="About") { ?>
		<nav>
			<ul id="menu">
				<li class="navopt"><a class="navlink" href="index.php"><span></span>Home</a></li>
				<li class="navopt"><a class="navlink" href="query.php"><span></span>Query</a></li>
				<li class="navopt"><a class="navlink" href="register.php"><span></span>Register</a></li>
				<li class="navopt"><a class="navlink" href="contact.php"><span></span>Contact</a></li>
				<li class="navopt"><a class="navlink sel" href="about.php"><span></span>About</a></li>
			</ul>
		</nav>
<?php } ?>
<pre><?php /* var_dump($_SESSION); */ ?></pre>
	