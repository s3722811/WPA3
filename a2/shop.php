<!DOCTYPE html>
<html lang='en'>
  <head>
  	<link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
	<script src="myscript.js"></script>
  </head>

  <body>

    <header>
      <div class="container">
			<img src="Rabbit-logo.png" alt="logo" width="200">
			<h1 id="shopname"> B-rabbitty Clothing </h1>	
	  </div>
    </header>

    <nav>	
      <div class="navTab">	
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="shop.php">Shop</a></li>
				<li><a href="product.php">Product</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>
	  </div>
    </nav>
	<br>
	

	
    <main id="shopContainer">	

		<div class="shopItems">
		<img src="BlueRabbitOnesie.jpg" alt="logo" width="200">
		
		 <label class="shopLabel">Rabbit Onesie ($59.99)</label>
		 
		<br>
		
	
		<select id="rabbitO">
		<option value="">Select a Size</option>
		<option value="small">Small</option>
		<option value="meduim">Meduim</option>
		<option value="Large">Large</option>	
		</select>
		
		<button class="shopButton" id="rabbitButton" onclick='task(1)'>Buy</button>
		
		</div>
		
		<div class="shopItems">
		<img src="PandaOnesie.jpg" alt="logo" width="200">
		
		 <label class="shopLabel">Panda Onesie ($49.99)</label>
		 
		<br>
		
		<select id="pandaO">
		<option size="select">Select a Size</option>
		<option size="small">Small</option>
		<option size="meduim">Meduim</option>
		<option size="Large">Large</option>	
		</select>
		<button class="shopButton" id='pandaButton' onclick='task(2)'>Buy</button>
		</div>
		
		<div class="shopItems">
		<img src="PikachuOnesie.jpg" alt="logo" width="200">
		
		 <label class="shopLabel">Pikachu Onesie ($49.99)</label>
		 
		<br>
		
		<select id="pikachuO">
		<option size="select">Select a Size</option>
		<option size="small">Small</option>
		<option size="meduim">Meduim</option>
		<option size="Large">Large</option>	
		</select>
		<button class="shopButton" id='pikachuButton' onclick='task(3)'>Buy</button>
		</div>
      <article id='Website Under Construction'>
  
      </article>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Yousef Fares, s3724131 <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
