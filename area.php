
<script type="text/javascript">

/*const base = prompt("Enter Base Value ");
const height = prompt("Enter Height Value ");
const area = (base*height)/2;
document.writeln(`Area of a triangle is ${area}`);*/

const side1 = parseInt(prompt("Enter Side1 Value "));
const side2 = parseInt(prompt("Enter Side2 Value "));
const side3 = parseInt(prompt("Enter Side3 Value "));

const s =  (side1 + side2 + side3)/2;
const area = Math.sqrt(s * (s-side1) * (s-side2) * (s-side3));
document.writeln(`Area of a Triangle is ${area}`);

</script>

