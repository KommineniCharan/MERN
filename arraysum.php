
<script type="text/javascript">

function sum(arr) {
	var sum = 0;
	for(num of arr){
		sum = sum + num;
	}
	return sum;
}

let result = sum([30, 10, 40, 60, 60]);
document.writeln(result);

</script>