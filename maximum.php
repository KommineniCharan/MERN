
<script type="text/javascript">

function max(arr) {
  var max = arr[0];
  for (var i = 1; i <= arr.length - 1; i++) {
  	if(arr[i] >= max){
  		max = arr[i];
  }
}

return max;

}

let result = max([10, 25, 36, 38, 78]);
document.writeln(result);

let result2 = max([66, 999, 777,68]);
document.writeln(result2);

</script>