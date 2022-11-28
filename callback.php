
<script type="text/javascript">

function greeting(name){
	alert("Hello " + name);
}

function processUserInput(callback) {
	var name = prompt("Please Enter Your Name");
	callback(name);
}

processUserInput(greeting);

</script>