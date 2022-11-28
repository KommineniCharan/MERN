
<script type="text/javascript">

let emp = new Object({

name : "Charan",
sal : 65000,
locations : ["Bangalore", "Hyderabad", "Chennai"],
greet : function () {
	document.writeln("Hello.. Welcome to G-Rank");
},

});

document.writeln(typeof emp);

document.writeln("<br/>");

document.writeln(emp.name);

document.writeln("<br/>");

document.writeln(emp.sal);

document.writeln("<br/>");

document.writeln(emp.locations[0]);

document.writeln("<br/>");

emp.greet();


</script>





