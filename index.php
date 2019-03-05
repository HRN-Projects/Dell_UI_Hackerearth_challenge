<!DOCTYPE html>
<html>
<head>
	<title>Dell UI</title>
	<meta charset="utf-8">
	<meta name="viewport" content='width=device-width, initial-scale=1'>

	<!--Bootstrap CDN Links -->
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
	<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>

	<!-- Font Awesome Icons Link -->
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="ui.css">

	<!-- typed js -->
	<script src='js/src/typed.js'></script>
</head>
<body'>

	<!-- Header Container-->
	<div class='container-fluid header-back'>
		<div class='header-overlay'>
			<div class='header-text'>
				<h1 class='text-center'><strong>Eurpoean Restaurants</strong></h1>	
				<!--h2>Craving for : <span class='typed'></span></h2>

				<Typed JS>
				<script type="text/javascript">
					$('document').ready(function() {
						var typed = new Typed('.typed',{
							strings:["Italian","Chinese","Indian","Turkish","American"],
							backspeed:50,
							typespeed: 40,
							loop: true
						});
					});
				</script-->
			</div>
		</div>
	</div>

	<!-- Main Container -->
	<div class='container-fluid main-contain'>
		
		<!-- Searching Bar div -->
		<div class='search-div container-fluid'>
			<div class='row text-center'>
				<div class='col-lg-1 col-md-3 col-sm-3'>
				</div>
				<div class='col-lg-10 col-md-6 col-sm-6'>
					<form class='searcher form-inline'>
						<div class='form-group'>
							<input type='text' class='form-control' name='foodSearch' placeholder="Restaurants, Cuisines ...">
							<button class='btn btn-default srchBtn' name='search' type='submit'><span class='fa fa-search'></span></button>	
						</div>
					</form>				
				</div>
				<div class='col-lg-1 col-md-3 col-sm-3'>
				</div>								
			</div>
		</div>


		<!-- restaurants home page div -->
		<div class='places-home'>

			<div class='sort-div text-right'>
				<div class='btn-group'>
					<button type='button' class='btn btn-default'><span class='fa fa-sort'></span>&nbsp;Sort</button>
					<button type='button' class='btn btn-default'><span class='fa fa-filter'></span>&nbsp;Filter</button>
				</div>
			</div><br/>

			<div class='row home-row'>
				<div class='col-lg-1 col-md-1 col-sm-2'>
				</div>
		
				<div class='col-lg-10 col-md-10 col-sm-8'>
					<div class='places-row row'>
<?php

	$pics = array('res1.jpg','res2.jpg','res3.jpg','res4.jpg');


	$f = fopen("res.csv","r");
	
	$k = 8;

	while($k>0)
	{
		$k--; 

		$result = fgetcsv($f);

		$tags = explode(",", $result[2]);
?>

						<div class='col-lg-6 col-md-6 col-sm-6'>
							<div class='place-card'>
								<div class='places-card-row row'>
									<div class='col-lg-4 col-md-4 col-sm-4'>
										<div class='place-pic'>
											<img src='<?php echo $pics[array_rand($pics)];  ?>' height="100%" width='100%'>
										</div>								
									</div>
									<div class='col-lg-8 col-md-4 col-sm-4'>
										<div class='place-details'>
											<h4 class='place-name'><?php echo $result[0]; ?></h4>
											<p class='place-city'><?php echo $result[1]; ?></p>
											<p><span class='badge badge-set'><span class='fa fa-star'></span>&nbsp;&nbsp;<?php echo $result[4]; ?></span></p>
											<hr class='h-sep'/>
											<p class='place-cuisine'>
<?php
		for($i = 0; $i < (count($tags)-1); $i++)
		{
			echo "<span class='badge tags-badge'>".$tags[$i]."</span>&nbsp;";
		}
?>										</div>
									</div>
								</div><hr class='h-sep'/>
								<div class='place-review'>
									<p><?php echo $result[5]; ?> Reviews</p>
								</div>
							</div>					
						</div>

<?php
		$result = '';
	}

	fclose($f);	

?>
					</div>					
					<br/>
					<div class='pagin-div text-center'>
						<ul class='pagination pagination-md'>
							<li class='active'><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#">7</a></li>																	
						</ul>
					</div>
				</div>
		
				<div class='col-lg-1 col-md-1 col-sm-2'>
				</div>								
			</div>
		</div>

	</div>

</body>
</html>