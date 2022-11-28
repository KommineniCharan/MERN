
let employees = [

{id: 101, name: "Charan", sal: 60000},
{id: 102, name: "Cherry", sal: 40000},

];

let createEmployee = (employee, callback) => {
console.log(employee);
setTimeout(() => {
 employees.push(employee);
 callback();
}, 2000);

};

let getEmployee = () => {
setTimeout(() => {

let employeeRows = "";

employees.forEach((employee) => {
 employeeRows += `<tr><td>${employee.id}</td>
 						<td>${employee.name}</td>
 						<td>${employee.sal}</td>
 					</tr>`
});

document.querySelector("#table_body").innerHTML = employeeRows;
}, 1000);

};

createEmployee({id: 103, name: "Kumar", sal: 30000}, getEmployee);


