
<script type="text/javascript">

const employee = {
name : "Charan",
Sal : 60000,
};

const new_Employee = { ...employee };

console.log(new_Employee);
console.log(employee);

new_Employee.name = "Kumar";

console.log(new_Employee.name);
console.log(employee.name);


</script>