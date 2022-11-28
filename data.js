
let employees = [

{id: 101, name: "Charan", sal: 60000},
{id: 102, name: "Kumar", sal: 40000},
{id: 103, name: "Cherry", sal: 30000},
{id: 104, name: "Kommineni", sal: 36000},
{id: 105, name: "Srujana", sal: 10000},
{id: 106, name: "Chandana", sal: 70000},

];


function display() {

let tbody =document.getElementById('table_body');
let rows = "";

for(emp of employees){
	
rows = rows + 
				`<tr><td>${emp.id}</td>
				<td>${emp.name}</td>
				<td>${emp.sal}</td>
		  		</tr>`;

}

tbody.innerHTML = rows;

}






