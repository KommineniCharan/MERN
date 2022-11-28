
<script type="text/javascript">

class Central{
	tax = 18;
	applyTax(){
		console.log("Apply Central Tax");
	}
}


class Andhra extends Central {
	tax = 28;
}

let a1 = new Andhra();
a1.applyTax();


class Goa extends Central{
	applyTax(){
		console.log("Apply Goa Tax");
	}
}

let g1 = new Goa();
g1.applyTax();


</script>