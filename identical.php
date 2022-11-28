
<script type="text/javascript">
	
function identical(arr) {

var first = arr[0];

for (var i = 1; i <= arr.length - 1; i++) {
	
	if(arr[i] != first){
		return false;
	}
}

return true;

}

let result = identical([10, 25, 36, 38, 78, 78]);
document.writeln(result);

let result2 = identical([10, 10]);
document.writeln(result2);

</script>