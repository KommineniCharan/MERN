
<script type="text/javascript">

/*var a = parseInt(prompt("Enter A Value "));
var b = parseInt(prompt("Enter B Value"));

var temp;

temp = a;
a = b;
b = temp;

document.writeln(`Value of A After Swapping ${a}`);
document.writeln(`Value of B After Swapping ${b}`);*/



/*var a = parseInt(prompt("Enter A Value "));
var b = parseInt(prompt("Enter B Value"));

[a, b] = [b, a];

document.writeln(`Value of A After Swapping ${a}`);
document.writeln(`Value of B After Swapping ${b}`);*/


var a = parseInt(prompt("Enter A Value "));
var b = parseInt(prompt("Enter B Value"));

a = a + b;
b = a - b;
a = a - b;

document.writeln(`Value of A After Swapping ${a}`);
document.writeln(`Value of B After Swapping ${b}`);

</script>