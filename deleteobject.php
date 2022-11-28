
<script type="text/javascript">

let product = {
name : "Himalaya",
price : 300,
item : "Soap",
quantity : 6,
};

delete product.name;

let txt = "";
for (let x in product) {
  txt += product[x] + " ";
};

document.writeln(txt);

document.writeln("<br/>");

document.writeln(Object.keys(product));

document.writeln("<br/>");

document.writeln(Object.values(product));

</script>