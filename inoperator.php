
<script type="text/javascript">

const person = {
	id : 101,
	name : "Charan",
	age : 28, 
};

const haskey = 'name' in person;

if(haskey){
	document.writeln("The Key Exists");
}
else{
	document.writeln("The Key Does Not Exists");
}

</script>