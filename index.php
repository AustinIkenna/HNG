<!DOCTYPE html>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="main.css" />
    <title>HNG Internship 4</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>
    <header>
        <div class="headerBanner">
            <p>Lagos, Nigeria</p>
            <p>
				<?php
				echo  date("D, M j Y");
				?>			
			</p>
            <h3>
				<?php
				echo  date("h:i:sa");
				?>
			</h3>
        </div>
    </header>
    <section>
        <div class="container">
			<div class="containerHeading"><!-- heading/title -->
				<h3>HNG</h3>
				<h3>Internship 4</h3>
				<button>SIGN UP</button>
			</div>
			<div class="containerImage"><!-- container Image -->
    			<img src="images/HNG.jpg" alt="" width="100%">
    		</div>
        </div>
    </section>
</body>

</html>