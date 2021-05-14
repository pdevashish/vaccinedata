
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
today = yyyy+'-'+mm+'-'+dd;
var date = dd+'-'+mm+'-'+yyyy
	
	$.ajax({
	   
		method:'GET',
		url:'https://api.cowin.gov.in/api/v1/reports/v2/getPublicReports?state_id=35&district_id=697&date='+today,
		success:function(response1){
			myArray1 = response1.vaccinationDoneByTimeAgeWise
			buildTable1(myArray1)
			console.log(myArray1)
			
		}
	})




	function buildTable1(vaccinationDoneByTimeAgeWise){
		var table1 = document.getElementById('myTable1')
      
		for (var a = 0; a < vaccinationDoneByTimeAgeWise.length; a++){
		
			
			var row = `<tr>
			                <td> ${date}</td>
							<td> ${vaccinationDoneByTimeAgeWise[a].label}  </td>
							<td><span style="color:green">${vaccinationDoneByTimeAgeWise[a].total}</span></td>
							<td><span style="color:red">${vaccinationDoneByTimeAgeWise[a].vac_18_45}</span> </td>	
							<td><span style="color:green">${vaccinationDoneByTimeAgeWise[a].vac_45_60}</span> </td>
							<td><h6><span style="color:red"> ${vaccinationDoneByTimeAgeWise[a].vac_60_above} </span> </h6></td>
						
					  </tr>`
			table1.innerHTML += row
				
				
			
         
		}
	}




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
today = yyyy+'-'+mm+'-'+dd;
	
	$.ajax({
	   
		method:'GET',
		url:'https://api.cowin.gov.in/api/v1/reports/v2/getPublicReports?state_id=35&district_id=697&date='+today,
		success:function(response){
			myArray = response.getBeneficiariesGroupBy
			buildTable(myArray)
			console.log(myArray)
			
		}
	})




	function buildTable(getBeneficiariesGroupBy){
		var table = document.getElementById('myTable')
      
		for (var i = 0; i < getBeneficiariesGroupBy.length; i++){
		   
			
			var row = `<tr>
			
			              
							<td> ${getBeneficiariesGroupBy[i].title}  </td>
							<td><span style="color:green">${getBeneficiariesGroupBy[i].total}</span></td>
							<td><span style="color:red">${getBeneficiariesGroupBy[i].partial_vaccinated}</span> </td>	
							<td><span style="color:green">${getBeneficiariesGroupBy[i].totally_vaccinated}</span> </td>
							<td><h6><span style="color:red"> ${getBeneficiariesGroupBy[i].today} </span> Vaccinate Today</h6></td>
						
					  </tr>`
			table.innerHTML += row
				
				
			
         
		}
	}



