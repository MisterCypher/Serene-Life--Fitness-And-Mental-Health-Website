<!doctype html>
<html profile="http://www.w3.org/2005/10/profile">
	<head>
		<title>Recipe Book</title>

		<!-- basics -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
		
		<!-- font and styles -->
		<link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,400i,700,700i,900" rel="stylesheet"> 
		<link href="stylesheet.css" rel="stylesheet" type="text/css">

		<!-- jquery -->
		<!-- loads the recipes and adds the selected one below -->
		<script
			src="https://code.jquery.com/jquery-3.3.1.min.js"
			integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			crossorigin="anonymous">
		</script>
	</head>

	<body>
		<div id="wrapper" class="index">
			
			<!-- table of contents -->
			<section id="toc">
				<h1 id="mainTitle">Recipe Book</h1>
				<p id="navigation"></p>

				<ul> <!-- your recipes will go here --> </ul>
			</section>
			
			
		</div>
	</body>

	<!-- combo php/js to get all recipes in the folder -->
	<script>
		<?php $files = array_map('basename', glob('recipes/*.md')); ?>
  	let files = <?php echo json_encode($files) ?>;
	</script>
	
	<!-- javascript does the rest :) -->
	<script src="utils.js"></script>
	<script src="list-recipes.js"></script>
</html>

