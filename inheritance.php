
<script type="text/javascript">

class Central{
	constructor(){
		console.log("Parent Class Constructor");
	}
}

class State extends Central{
	constructor(){
		super();
		console.log("Child Class Constructor");
	}
}

new State();

</script>