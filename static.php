



<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Vaccine Centers in Uttarakhand</title>
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
<link rel="icon" href="./favicon.ico" type="image/x-icon">

<meta property="og:type" content="website">
<meta property="og:url" content="https://vaccinedata.site/">
<meta property="og:title" content="Find real time vaccination center for 18+ age - Uttarakhand Vaccine Data">
<meta property="og:description" content="Get Real time data of Vaccine Drive - Uttarakhand ">
<meta property="og:image" content="https://vaccinedata.site/vaccine.png">

<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://vaccinedata.site">
<meta property="twitter:title" content="Find real time vaccination center for 18+ age - Uttarakhand Vaccine Data">
<meta property="twitter:description" content="Get notified by Email / SMS whenever slots open up ">
<meta property="twitter:image" content="https://vaccinedata.site/vaccine.png">
<link href="./bootstrap.min.css.pagespeed.ce.u4STbXx3AL.css" rel="stylesheet">
<meta name="theme-color" content="#7952b3">


<style>.bd-placeholder-img{font-size:1.125rem;text-anchor:middle;-webkit-user-select:none;-moz-user-select:none;user-select:none}@media (min-width:768px){.bd-placeholder-img-lg{font-size:3.5rem}}</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="./static.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WS31L1HTX5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WS31L1HTX5');
</script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>
<div class="container">
<header class="d-flex flex-wrap justify-content-center py-3 mb-1 border-bottom">
<a href="./index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
<span class="fs-4" style="font-weight:800;">UTTARAKHAND VACCINE DATA 💉 </span>
</a>
<ul class="nav nav-pills">

<li class="nav-item"><a href="./index.php" class="btn btn-danger btn-sm" style="margin-left:5px; margin-top:2px;" role="button"><b>Dehradun</b></a></li>
<li class="nav-item"><a href="./chamoli.php" class="btn btn-danger btn-sm" style="margin-left:5px; margin-top:2px;" role="button"><b>Chamoli</b></a></li>

<li class="nav-item"><a href="./almora.php" class="btn btn-danger btn-sm" style="margin-left:5px; margin-top:2px;" role="button"><b>Almora</b></a></li>
</ul>

</header>
</div>





<main class="flex-shrink-0">
<div class="container">

<?php
$datetime1 = new DateTime('today');
echo "<h1 class="."mt-5".">Vaccine Static Dehradun Date: " .$datetime1->format('d-m-Y'). "</h1>";
?>
<div class="table-responsive">
<h3 class="mt-5">Today Vaccination Data <span style="color:red">(Dehradun - Uttarakhand)</span></h3>
<table class="table table-striped table-hover table-bordered">
<thead>
<tr>
<th scope="col">Date</th>
<th scope="col">Time</th>
<th scope="col">Total Vaccinate</th>
<th scope="col">18-45 Age group</th>
<th scope="col">45-60 Age Group </th>
<th scope="col">60+ Age group</th>

</tr>
</thead>
<tbody id="myTable1">
</tbody>
</table>


</div>


<div class="table-responsive">
<h3 class="mt-5">Static of All Center <span style="color:red">(Dehradun - Uttarakhand)</span></h3>
<h6> </h6>

<table class="table table-striped table-hover table-bordered">
<thead>
<tr>
<th scope="col">Center Name</th>
<th scope="col">Total Vaccination</th>
<th scope="col">Partial Vaccination</th>
<th scope="col">Full Vaccination</th>
<th scope="col">Today</th>

</tr>
</thead>
<tbody id="myTable">
</tbody>
</table>

</div>


<!-- 
</main> -->
<footer class="footer mt-auto py-3 bg-light">
<div class="container">
<p><b>Disclaimer</b> - Above data might be inaccurate or delay due to late update from COWIN API. Data source:- COWIN[dot]GOV[DOT]IN</p>
<span class="text-muted">Devashish Purohit</span>
</div>


</footer>


</body></html>