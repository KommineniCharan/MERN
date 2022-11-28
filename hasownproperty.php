
<script type="text/javascript">

const person = {
	id : 101,
	name : "Charan",
	age : 28,
};

const haskey = person.hasOwnProperty("name");

if(haskey){
	document.writeln("Key Exists");
}
else{
	document.writeln("Key Doesn't Exists");
}

</script>