<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>ONM 2018</title>

	<!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!-- Web Fonts -->
	
	<!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/blocks.css">
  <link rel="stylesheet" href="css/one.style.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="plugins/animate.css">
	<link rel="stylesheet" href="plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="plugins/owl-carousel2/assets/owl.carousel.css">
	
	<link rel="stylesheet" href="plugins/master-slider/masterslider/style/masterslider.css">
	<link rel="stylesheet" href="plugins/master-slider/u-styles/testimonials-1.css">

  <!-- CSS Theme -->
  <link rel="stylesheet" href="assets/css/index_style.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  
  <!-- mobile Fix -->
  <style>	
	@media only screen and (max-width: 500px) {
    .mobile_fix{
		display: inline;
	}
	.logo_fix {
		display:none;
		max-height: 1.4em;
	}
	.button_fix {
		font-size: 10px !important;
	}
	.g-mb-60{
	padding-bottom:0px; 
	margin-bottom:0px;
	}
}


	@media only screen and (min-width: 992px) {
    .menu-container ul {
	position:absolute; 
	bottom:0; 
	right:0;
	}
	#menu_fix li a {
		font-size:15px !important;
	}
	
}
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/search.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
.center {
    margin: auto;
    width: 40%;
	text-align: center;
    padding: 10px;
}
  </style>  

</head>

<body id="body" data-spy="scroll" data-target=".one-page-header" class="demo-lightbox-gallery lawyer-style">
	<main class="wrapper">
		<!-- Header -->
		<nav class="one-page-header navbar navbar-default navbar-fixed-top one-page-nav-scrolling one-page-nav__fixed" data-role="navigation">
			<div class="container">
				<div class="menu-container page-scroll">
					<p class="g-display-block g-mb-10 text-center">3 - 7 aprilie 2018</p>
					<h2 class="promo-block__item-text g-mb-60 text-center" style="letter-spacing:0; color:#336E7B;">Olimpiada Națională de Matematică</h2>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

				<a class="navbar-brand logo inline" href="index.html">
					<div>
					<img src="img/logo/logo-juniori.png" alt="Logo" style="max-width: 3.9em; position:absolute; top:0; right:0; margin-right:-1.6em;" class="logo_fix">
					<img src="img/logo/logo-seniori.png" alt="Logo" style="max-width: 5.2em; position:absolute; left:0; top:0;" class="logo_fix">
					<!--<img src="img/1.png" alt="" style="max-height: 100px;">
					<img src="img/2.jpg" alt="" style="max-height: 100px;">
					<img src="img/3.jpg" alt="" style="max-height: 100px;">
					<img src="img/4.png" alt="" style="max-height: 100px;">-->
					</div>
				</a>
						
					</a>
				</div>

				<!-- -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<div class="menu-container">
						<ul class="nav navbar-nav" id="menu_fix">
							<li class="page-scroll">
								<a href="index.html"><span data-hover="Acasa">Acasa</span></a>
							</li>
							<li class="page-scroll">
								<a href="program.html"><span data-hover="Organizare">Organizare</span></a>
							</li>
							<li class="page-scroll">
								<a href="participanti.php"><span data-hover="Concurenți">Concurenți</span></a>
							</li>
							<li class="page-scroll">
								<a href="subiecte.html"><span data-hover="Subiecte">Subiecte</span></a>
							</li>
							<li class="page-scroll">
								<a href="rezultate.html"><span data-hover="Rezultate">Rezultate</span></a>
							</li>
							<li class="page-scroll">
								<a href="parteneri.html"><span data-hover="Parteneri">Parteneri</span></a>
							</li>
							<li class="page-scroll">
							<a href="galerie.html" style="margin-right:3em;"><span data-hover="Galerie">Galerie        </span>        </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		<!-- End Header -->
<br><br><br>
<section id="our-cases">
<div class="container g-pt-100">
<!--Sectiune tabel participanti-->	
<?php
include("config.php");
$query = "SELECT id,nume,prenume,clasa,unit_inv,localitatea,prof_ind,initatal,cnp,sex,limbaconcurs,menpost,cazare,observatii,judetul FROM elevi ORDER BY LENGTH(clasa), clasa,nume,prenume"; //You don't need a ; like you do in SQL
$result = mysqli_query($db,$query) or die(mysqli_error($db));
echo "<br><br><br>";
echo"<div class='center'>";
echo "<input align='center' type='text' id='myInput' onkeyup='myFunction()' placeholder='Cautare participanti ...' title='Selectati un criteriu si cautati'>";
echo "<form action='' method = 'post' id='selectie'>
  <input type='radio' name='criteriu' value='0' onclick='check(this.value)' checked='checked'>Nume
  <input type='radio' name='criteriu' value='1' onclick='check(this.value)'>Prenume
  <input type='radio' name='criteriu' value='2' onclick='check(this.value)'>Clasa
  <input type='radio' name='criteriu' value='6' onclick='check(this.value)'>Judetul
  </form>";
echo"</div>";
echo "<form method='post' action='editare.php'>";
echo "<table class='table table-striped table-responsive' id='myTable'>"; // start a table tag in the HTML
echo "<tr><th>Nume</th><th>Prenume</th><th>Clasa</th><th>Unitate Invatamant</th><th>Localitate</th><th>Profesor îndrumător</th><th>Judet</th></tr>";
while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr>
		<td>" . $row['nume'] . "</td>
		<td>" . $row['prenume'] . "</td>
		<td>" . $row['clasa'] . "</td>
		<td>" . $row['unit_inv'] . "</td>
		<td>" . $row['localitatea'] . "</td>
		<td>" . $row['prof_ind'] . "</td>
		<td>" . $row['judetul'] . "</td>


	 </tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
echo "</form>";
//mysql_close(); //Make sure to close out the database connection

?>
</div>
</section>
<!--Sectiune tabel participanti-->	
		

		<!-- Footer -->
		<footer style="border-top:4px solid #336E7B;">
			<!-- Contact && Links -->
			<section id="contact" class="g-theme-bg-color-1 g-text-color-2">
				<div class="container-fluid">
					<div class="row no-column-space equal-height-columns">
						<div class="col-sm-6 g-dp-table g-va-middle equal-height-column">
							<div class="g-pl-80 g-pr-80 g-pl-15--xs g-pr-15--xs g-pt-100 g-pb-50 g-dp-table-cell g-va-middle">
								<div class="g-heading-v9 g-mb-30">
									<h2 class="text-uppercase"><strong>Contact</strong></h2>
								</div>
								<ul class="list-unstyled g-fs-12 address-list text-uppercase">
									<li><i class="glyphicon glyphicon-earphone g-mr-15"></i> <em>Telefon:</em> <strong>+4 0261 712 175</strong></li>
									<li>
									<a href="contact.html">
									<button class="btn-u btn-block rounded" style="background-color:#336E7B; color:#fff; padding:10px;"><i class="glyphicon icon-pencil g-mr-15" style="color:#fff;"></i>Du-te la formularul de contact</button>
									</a>
									</li>
					<!--				<li><i class="fa fa-envelope g-mr-15"></i> <em>Email:</em> <strong>email@email.com</strong></li> 					-->
								</ul>
							</div>
						</div>
						
						<div class="col-sm-6 g-dp-table g-va-middle equal-height-column">
							<div class="g-pl-80 g-pr-80 g-pl-15--xs g-pr-15--xs g-pt-100 g-pb-50 g-dp-table-cell g-va-middle">
								<div class="g-heading-v9 g-mb-30">
								<h2 class="text-uppercase"><strong>Link-uri utile</strong></h2>
								</div>
								<ul class="row g-theme-text-color-1" style="color:#336E7B;">
							<li class="col-md-6"><i class="fa fa-circle"></i> <a href="program.html" style="color:#fff;">Program</a></li>
							<li class="col-md-6"><i class="fa fa-circle"></i> <a href="cazare.html" style="color:#fff;">Cazare</a></li>
							<li class="col-md-6"><i class="fa fa-circle"></i> <a href="locatii.html" style="color:#fff;">Locații de concurs</a></li>
							<li class="col-md-6"><i class="fa fa-circle"></i> <a href="comisii.html" style="color:#fff;">Comisii</a></li>
							<li class="col-md-6"><i class="fa fa-circle"></i> <a href="subiecte.html" style="color:#fff;">Subiecte</a></li>
							<li class="col-md-6"><i class="fa fa-circle"></i> <a href="rezultate.html" style="color:#fff;">Rezultate</a></li>
								</ul>
							</div>					
						</div>
						
						<div class="row text-right" style="margin-right:4em;">
							<p>
							3-7 aprilie 2018 <span class="mobile_fix"></br></span>&copy; Olimpiada Națională de Matematică
							</br>
							 | Satu Mare
							</p>
						</div>
					</div>
				</div>
				<!-- End Contact&&Links section -->
			</div>
			</section>
		</footer>
		<!-- End Footer -->
	</main>

	<!-- JS Global Compulsory -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<script src="plugins/jquery/jquery-migrate.min.js"></script>
	<script src="plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- JS Implementing Plugins -->
	<script src="plugins/smoothScroll.js"></script>
	<script src="plugins/jquery.easing.min.js"></script>
	<script src="plugins/master-slider/masterslider/masterslider.min.js"></script>
	<script src="plugins/countdown/jquery.plugin.js"></script>
	<script src="plugins/countdown/jquery.countdown.js"></script>
	

	<!-- JS Page Level-->
	<script src="assets/js/plugins/mslide.js"></script>
	
	<script>
var x=0;
function myFunction() 
{
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) 
  {
    td = tr[i].getElementsByTagName("td")[x];
    if (td) 
	{
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) 
	  {
        tr[i].style.display = "";
      } 
	  else 
	  {
		  tr[i].style.display = "none";
      } 
    }
 }
}
function select() {
    document.getElementById("selectie").submit();
}
function check(criteriu) {
    x=criteriu;
}
</script>
	<script>	
	$(function () {
	var austDay = new Date();
	austDay = new Date(2018, 4 - 1, 3);
	$('#defaultCountdown').countdown({until: austDay, format: 'D'});
	$('#year').text(austDay.getFullYear());
});
</script>

	<!-- JS Page Level-->
	<script src="assets/js/plugins/mslide.js"></script>
	
	<script src="js/app.js"></script>

	<script>
		jQuery(document).ready(function() {
			App.init();
			PageComingSoon.initPageComingSoon();
			new WOW().init();
		});
	</script>
</body>
</html>
