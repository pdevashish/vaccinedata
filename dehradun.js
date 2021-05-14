


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
		url:'https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/calendarByDistrict?district_id=697&date='+today,
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
			var slot = `${centers[i].sessions[j].available_capacity}`
			if ( age == 18 )
			{
				if ( slot > 0)
				{
			var row = `<tr>
			
			              
							<td> ${centers[i].name} </td>
							<td>${centers[i].pincode}</td>
							<td><span style="color:red">${centers[i].sessions[j].available_capacity} Slot available</span></td>	
							<td>${centers[i].sessions[j].min_age_limit}+</td>
							<td>${centers[i].sessions[j].date}</td>
							<td>${centers[i].sessions[j].vaccine}<span style="color:red"> (${centers[i].fee_type})</span></td>
							<td><a href="https://selfregistration.cowin.gov.in/" target="_blank" class="btn btn-success btn-sm" style="color: #fff;"><b>💉 Book Slot</b></a></td>
							
					  </tr>`
			table.innerHTML += row
				}
				else
				{
					var row = `<tr>
			
			              
							<td> ${centers[i].name} </td>
							<td>${centers[i].pincode}</td>
							<td>${centers[i].sessions[j].available_capacity} Slot available</td>	
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
	}

