<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<script type="text/javascript">

let num = 0;
let divisible = 7;
num = parseInt(prompt("Enter the number "));

if(num % divisible == 0){
	document.writeln(`${num} is divisible by 7`);
}
else {
	document.writeln(`${num} is not divisible by 7`);
}

</script>

</body>
</html>