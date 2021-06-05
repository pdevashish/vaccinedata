



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
<meta name="referrer" content="no-referrer" />
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WS31L1HTX5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WS31L1HTX5');
</script>

<style>.bd-placeholder-img{font-size:1.125rem;text-anchor:middle;-webkit-user-select:none;-moz-user-select:none;user-select:none}@media (min-width:768px){.bd-placeholder-img-lg{font-size:3.5rem}}</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>
<div class="container">
<header class="d-flex flex-wrap justify-content-center py-3 mb-1 border-bottom">
<a href="./index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
<span class="fs-4" style="font-weight:800;">UTTARAKHAND VACCINE DATA 💉</span>
</a>
<ul class="nav nav-pills">

<li class="nav-item"><a href="./index.php" class="btn btn-danger btn-sm" style="margin-left:5px; margin-top:2px;" role="button"><b>Dehradun </b></a></li>
<li class="nav-item"><a href="./chamoli.php" class="btn btn-danger btn-sm" style="margin-left:5px; margin-top:2px;" role="button"><b>Chamoli</b></a></li>
<li class="nav-item"><a href="./pauri.php" class="btn btn-danger btn-sm" style="margin-left:5px; margin-top:2px;" role="button"><b>Pauri</b></a></li>
</ul>

</header>
</div>





<main class="flex-shrink-0">
<div class="container">
<h1 class="mt-5">Vaccine Centers in Almora</h1>
<?php
$datetime1 = new DateTime('tomorrow');
echo "<small> NEXT 7 DAY</small>";

?>
<div class="table-responsive">
<h3 class="mt-5">18+ Vaccine <span style="color:red">(Almora - Uttarakhand)</span></h3>
<table class="table table-striped table-hover table-bordered">
<thead>
<tr>
<th scope="col">Hospital Name</th>
<th scope="col">Pincode</th>
<th scope="col">Available slot</th>
<th>1st Dose</th>
<th>2nd Dose</th>
<th scope="col">Age Limit</th>
<th scope="col">Date</th>
<th scope="col">Vaccine</th>
<th scope="col">Book Slot</th>
</tr>
</thead>
<tbody id="myTable">
</tbody>
</table>
<script>


	var myArray = []
	
	
		// date 
	var today = new Date();
var dd = today.getDate();

var mm = today.getMonth()+1; 
var yyyy = today.getFullYear();
if(dd<10) 
{
    dd='0'+dd;
} 

if(mm<10) 
{
    mm='0'+mm;
} 
today = dd+'-'+mm+'-'+yyyy;
	
	$.ajax({
	 
		method:'GET',
		url:'https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/calendarByDistrict?district_id=704&date='+today,
		success:function(response){
			myArray = response.centers
			buildTable(myArray)
			console.log(myArray)
		}
	})




	function buildTable(centers){
		var table = document.getElementById('myTable')
      
		for (var i = 0; i < centers.length; i++){
		    for (var j = 0; j < centers[i].sessions.length; j++){
			var age = `${centers[i].sessions[j].min_age_limit}`
			
			if ( age == 18 )
			{
			var row = `<tr>
			
			               
							<td> ${centers[i].name} </td>
							<td>${centers[i].pincode}</td>
							<td>${centers[i].sessions[j].available_capacity}</td>
							<td>${centers[i].sessions[j].available_capacity_dose1} </td>	
							<td>${centers[i].sessions[j].available_capacity_dose2} </td>
							<td>${centers[i].sessions[j].min_age_limit}+</td>
							<td>${centers[i].sessions[j].date}</td>
							<td>${centers[i].sessions[j].vaccine}<span style="color:red"> (${centers[i].fee_type})</span></td>
							<td><a href="https://selfregistration.cowin.gov.in/" target="_blank" class="btn btn-success btn-sm" style="color: #fff;"><b>💉 Book Slot</b></a></td>
							
					  </tr>`
			table.innerHTML += row
            }
         }
		}
	}

</script>

</div>


<div class="table-responsive">
<h3 class="mt-5">All Age Data <span style="color:red">(Almora - Uttarakhand)</span></h3>
<table class="table table-striped table-hover table-bordered">
<thead>
<tr>
<th scope="col">Hospital Name</th>
<th scope="col">Pincode</th>
<th scope="col">Available slot</th>
<th>1st Dose</th>
<th>2nd Dose</th>
<th scope="col">Age Limit</th>
<th scope="col">Date</th>
<th scope="col">Vaccine</th>
<th scope="col">Book Slot</th>
</tr>
</thead>
<tbody id="myTable1">
</tbody>
</table>
<script>


	var myArray1 = []
	
	// date 
	var today = new Date();
var dd = today.getDate();

var mm = today.getMonth()+1; 
var yyyy = today.getFullYear();
if(dd<10) 
{
    dd='0'+dd;
} 

if(mm<10) 
{
    mm='0'+mm;
} 
today = dd+'-'+mm+'-'+yyyy;
	
	$.ajax({
	 
		method:'GET',
		url:'https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/calendarByDistrict?district_id=704&date='+today,
		success:function(response1){
			myArray1 = response1.centers
			buildTable1(myArray1)
			console.log(myArray1)
		}
	})




	function buildTable1(centers){
		var table1 = document.getElementById('myTable1')
      
		for (var a = 0; a < centers.length; a++){
		    for (var b = 0; b < centers[a].sessions.length; b++){
			
			
		
			var row = `<tr>
			
			               
							<td> ${centers[a].name} </td>
							<td>${centers[a].pincode}</td>
							<td>${centers[a].sessions[b].available_capacity}</td>
							<td>${centers[a].sessions[b].available_capacity_dose1} </td>	
							<td>${centers[a].sessions[b].available_capacity_dose2} </td>
							<td>${centers[a].sessions[b].min_age_limit}+</td>
							<td>${centers[a].sessions[b].date}</td>
							<td>${centers[a].sessions[b].vaccine}<span style="color:red"> (${centers[a].fee_type})</span></td>
							<td><a href="https://selfregistration.cowin.gov.in/" target="_blank" class="btn btn-success btn-sm" style="color: #fff;"><b>💉 Book Slot</b></a></td>
							
					  </tr>`
			table1.innerHTML += row
            
         }
		}
	}

</script>

</div>
</main>
<footer class="footer mt-auto py-3 bg-light">
<div class="container">
<p><b>Disclaimer</b> - Above data might be inaccurate. Data source:- APISETU[dot]GOV[DOT]IN</p>
<span class="text-muted">Devashish Purohit</span>
</div>


</footer>


</body></html>