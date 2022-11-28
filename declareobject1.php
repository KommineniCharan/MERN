
<script type="text/javascript">

const employee = {
	name : "Charan",
	sal : 60000,
};

const new_Employee = Object.assign({}, employee);

console.log(new_Employee);

console.log(employee);

new_Employee.name = "Kumar";

console.log(new_Employee.name);

console.log(employee.name);

</script>

