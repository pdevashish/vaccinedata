



<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Vaccine Centers in Uttarakhand</title>
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
<link rel="icon" href="./favicon.ico" type="image/x-icon">

<meta property="og:type" content="website">
<meta property="og:url" content="">
<meta property="og:title" content="Find real time vaccination center for 18+ age - Uttarakhand Vaccine Data">
<meta property="og:description" content="Get notified by Email / SMS whenever slots open up ">
<meta property="og:image" content="#">

<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="#">
<meta property="twitter:title" content="Find real time vaccination center for 18+ age - Uttarakhand Vaccine Data">
<meta property="twitter:description" content="Get notified by Email / SMS whenever slots open up ">
<meta property="twitter:image" content="#">
<link href="./bootstrap.min.css.pagespeed.ce.u4STbXx3AL.css" rel="stylesheet">
<meta name="theme-color" content="#7952b3">

<script type="text/javascript" async="" src="./analytics.js.download"></script><script async="" src="./js"></script>
<style>.bd-placeholder-img{font-size:1.125rem;text-anchor:middle;-webkit-user-select:none;-moz-user-select:none;user-select:none}@media (min-width:768px){.bd-placeholder-img-lg{font-size:3.5rem}}</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WS31L1HTX5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WS31L1HTX5');
</script>
</head>
<body>
<div class="container">
<header class="d-flex flex-wrap justify-content-center py-3 mb-1 border-bottom">
<a href="./index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
<span class="fs-4" style="font-weight:800;">UTTARAKHAND VACCINE DATA ????</span>
</a>
<ul class="nav nav-pills">

<li class="nav-item"><a href="./dehradunpin.php" class="btn btn-danger btn-sm" style="margin-left:5px; margin-top:2px;" role="button"><b>Dehradun Pin based data</b></a></li>
<li class="nav-item"><a href="./ddnnext7day.php" class="btn btn-danger btn-sm" style="margin-left:5px; margin-top:2px;" role="button"><b>Dehradun Next 7 day data</b></a></li>
</ul>
</header>
</div>





<main class="flex-shrink-0">
<div class="container">
<?php
$datetime1 = new DateTime('today');
echo "<h1 class="."mt-5".">Vaccine Centers in Dehradun Date: " .$datetime1->format('d-m-Y'). "</h1>";

?>
<div class="table-responsive">
<h3 class="mt-5">18+ Vaccine <span style="color:red">Dehradun</span></h3>
<table class="table table-striped table-hover table-bordered">
<?PHP



echo "<th> S.No </th>";
echo "<th> Center Name </th>";
// echo "<th> Center Address </th>";
echo "<th> Pin code </th>";
echo "<th>Availibility</th>";
echo "<th>Age</th>";
echo "<th> Vaccine </th>";

echo "<th>Date</th>";
echo "<th> Book Slot </th></tr>";

$datetime = new DateTime('today');

$date1= $datetime->format('d-m-Y');;
$ch = curl_init("https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/findByDistrict?district_id=697&date=$date1");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$result= curl_exec ($ch);
curl_close($ch);
$ddn = json_decode($result);
$count1=$ddn->sessions;
$size= sizeof($count1);
$finalsize=$size-1;

$new=0;

for ($i = 0; $i <= $finalsize; $i++) {
  
$minagelimit = $ddn->sessions[$i]->min_age_limit;
if($minagelimit==18)
{
	$sno1= $new+1;
	$new++;
	
$centername = $ddn->sessions[$i]->name;
$address = $ddn->sessions[$i]->address;
$pin = $ddn->sessions[$i]->pincode;
$availablecapacity = $ddn->sessions[$i]->available_capacity;

$vaccine = $ddn->sessions[$i]->vaccine;
$feetype = $ddn->sessions[$i]->fee_type;
$date1 = $ddn->sessions[$i]->date;



echo "<tr>";
echo "<td> $sno1 </td>";
echo "<td> $centername </td>";
// echo "<td> $address </td>";
echo "<td> $pin </td>";
echo "<td> $availablecapacity </td>";
echo "<td> $minagelimit </td>";
echo "<td> $vaccine <span style="."color:green".">($feetype)</span></td>";
echo "<td> $date1 </td>";
?>
<td><a href="https://selfregistration.cowin.gov.in/" target="_blank" class="btn btn-success btn-sm" style="color: #fff;"><b>???? Book Now</b></a></td>
<?php


}

}

echo "</tr></table>";


?>


<h3 class="mt-5">All age Vaccine <span style="color:red">Dehradun</span></h3>
<table class="table table-striped table-hover table-bordered">
<?PHP



echo "<th> S.No </th>";
echo "<th> Center Name </th>";
// echo "<th> Center Address </th>";
echo "<th> Pin code </th>";
echo "<th>Availibility</th>";
echo "<th>Age</th>";
echo "<th> Vaccine </th>";
echo "<th>Date</th>";
echo "<th> Book Slot </th>";

echo "</tr>";

$datetime = new DateTime('today');

$date1= $datetime->format('d-m-Y');;

$ch = curl_init("https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/findByDistrict?district_id=697&date=$date1");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$result= curl_exec ($ch);
curl_close($ch);
$ddn = json_decode($result);
$count1=$ddn->sessions;
$size= sizeof($count1);
$finalsize=$size-1;

for ($i = 0; $i <= $finalsize; $i++) {
  

$centername = $ddn->sessions[$i]->name;
$address = $ddn->sessions[$i]->address;
$pin = $ddn->sessions[$i]->pincode;
$availablecapacity = $ddn->sessions[$i]->available_capacity;
$minagelimit = $ddn->sessions[$i]->min_age_limit;
$vaccine = $ddn->sessions[$i]->vaccine;
$feetype = $ddn->sessions[$i]->fee_type;
$date1 = $ddn->sessions[$i]->date;


$sno= $i+1;
echo "<tr>";
echo "<td> $sno </td>";
echo "<td> $centername </td>";
// echo "<td> $address </td>";
echo "<td> $pin </td>";
echo "<td> $availablecapacity </td>";
echo "<td> $minagelimit </td>";
echo "<td> $vaccine <span style="."color:green".">($feetype)</span></td>";
echo "<td> $date1 </td>";
?>
<td><a href="https://selfregistration.cowin.gov.in/" target="_blank" class="btn btn-success btn-sm" style="color: #fff;"><b>???? Book Now</b></a></td>
<?php


}
echo "</tr></table>";


?>



</div>
</div>

<div class="container">
<?php
$datetime1 = new DateTime('tomorrow');
echo "<h1 class="."mt-5".">Vaccine Centers in Dehradun Date: " .$datetime1->format('d-m-Y'). "</h1>";

?>
<div class="table-responsive">
<h3 class="mt-5">18+ Vaccine <span style="color:red">Dehradun</span></h3>
<table class="table table-striped table-hover table-bordered">
<?PHP



echo "<th> S.No </th>";
echo "<th> Center Name </th>";
// echo "<th> Center Address </th>";
echo "<th> Pin code </th>";
echo "<th>Availibility</th>";
echo "<th>Age</th>";
echo "<th> Vaccine </th>";
 echo "<th>Date</th>";
echo "<th> Book Slot </th>";
//
echo "</tr>";

$datetime = new DateTime('tomorrow');

$date1= $datetime->format('d-m-Y');;
$ch = curl_init("https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/findByDistrict?district_id=697&date=$date1");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$result= curl_exec ($ch);
curl_close($ch);
$ddn = json_decode($result);
$count1=$ddn->sessions;
$size= sizeof($count1);
$finalsize=$size-1;

$new=0;

for ($i = 0; $i <= $finalsize; $i++) {
  
$minagelimit = $ddn->sessions[$i]->min_age_limit;
if($minagelimit==18)
{
	$sno1= $new+1;
	$new++;
	
$centername = $ddn->sessions[$i]->name;
$address = $ddn->sessions[$i]->address;
$pin = $ddn->sessions[$i]->pincode;
$availablecapacity = $ddn->sessions[$i]->available_capacity;

$vaccine = $ddn->sessions[$i]->vaccine;
$feetype = $ddn->sessions[$i]->fee_type;
$date1 = $ddn->sessions[$i]->date;



echo "<tr>";
echo "<td> $sno1 </td>";
echo "<td> $centername </td>";
// echo "<td> $address </td>";
echo "<td> $pin </td>";
echo "<td> $availablecapacity </td>";
echo "<td> $minagelimit </td>";
echo "<td> $vaccine <span style="."color:green".">($feetype)</span></td>";
echo "<td> $date1 </td>";
?>
<td><a href="https://selfregistration.cowin.gov.in/" target="_blank" class="btn btn-success btn-sm" style="color: #fff;"><b>???? Book Now</b></a></td>
<?php
// 

}

}

echo "</tr></table>";


?>


<h3 class="mt-5">All age Vaccine <span style="color:red">Dehradun</span></h3>
<table class="table table-striped table-hover table-bordered">
<?PHP



echo "<th> S.No </th>";
echo "<th> Center Name </th>";
// echo "<th> Center Address </th>";
echo "<th> Pin code </th>";
echo "<th>Availibility</th>";
echo "<th>Age</th>";
echo "<th> Vaccine </th>";
echo "<th>Date</th>";
echo "<th> Book Slot </th>";
echo "</tr>";
// 

$datetime = new DateTime('tomorrow');

$date1= $datetime->format('d-m-Y');;

$ch = curl_init("https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/findByDistrict?district_id=697&date=$date1");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$result= curl_exec ($ch);
curl_close($ch);
$ddn = json_decode($result);
$count1=$ddn->sessions;
$size= sizeof($count1);
$finalsize=$size-1;

for ($i = 0; $i <= $finalsize; $i++) {
  

$centername = $ddn->sessions[$i]->name;
$address = $ddn->sessions[$i]->address;
$pin = $ddn->sessions[$i]->pincode;
$availablecapacity = $ddn->sessions[$i]->available_capacity;
$minagelimit = $ddn->sessions[$i]->min_age_limit;
$vaccine = $ddn->sessions[$i]->vaccine;
$feetype = $ddn->sessions[$i]->fee_type;
$date1 = $ddn->sessions[$i]->date;


$sno= $i+1;
echo "<tr>";
echo "<td> $sno </td>";
echo "<td> $centername </td>";
// echo "<td> $address </td>";
echo "<td> $pin </td>";
echo "<td> $availablecapacity </td>";
echo "<td> $minagelimit </td>";
echo "<td> $vaccine <span style="."color:green".">($feetype)</span></td>";
echo "<td> $date1 </td>";
?>
<td><a href="https://selfregistration.cowin.gov.in/" target="_blank" class="btn btn-success btn-sm" style="color: #fff;"><b>???? Book Now</b></a></td>
<?php
// 

}
echo "</tr></table>";


?>



</div>
</div>
</main>
<footer class="footer mt-auto py-3 bg-light">
<div class="container">
<p><b>Disclaimer</b> - Above data might be inaccurate. Data source:- APISETU[dot]GOV[DOT]IN</p>
<span class="text-muted">Devashish Purohit-ddn</span>
</div>


</footer>
<!-- pdevashish@pm.me | Devashish purohit-->

</body></html>