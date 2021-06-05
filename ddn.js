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
		url:'https://cdn-api.co-vin.in/api/v2/appointment/sessions/calendarByDistrict?district_id=697&date='+today,
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
			var av= `${centers[i].sessions[j].available_capacity}`
			var ci= `${centers[i].center_id}`
			var type  = `${centers[i].fee_type}`
			if ( age == 18 )
			{
			if (type == 'Free')
				{
					if (av > 0)
				{
			var row = `<tr>
			
			                
							<td> ${centers[i].name}<br><b>Address:- </b><span style="color:blue"> ${centers[i].address} </span> <br><b>Pincode:- </b><span style="color:red">${centers[i].pincode}</span></td>
							
							<td>${centers[i].sessions[j].available_capacity}</td>
							<td>${centers[i].sessions[j].available_capacity_dose1}</td>
							<td>${centers[i].sessions[j].available_capacity_dose2}</td>
							<td>${centers[i].sessions[j].min_age_limit}</td>
							<td>${centers[i].sessions[j].date}</td>
							<td>${centers[i].sessions[j].vaccine} <br><span style="color:green">(${centers[i].fee_type})</span></td>
							
					  </tr>`
			table.innerHTML += row
				}
				}
			}
         }
		}
	}