
<script type="text/javascript">

const arry = [1, 3, 5, 9, 1, 5];

const check = arry => arry.filter((item, index) => arry.indexOf(item)!== index)
const dup = check(arry);

document.writeln(dup); 

const rem = arry => arry.filter((item, index) => arry.indexOf(item) === index)
const remove = rem(arry);
document.writeln(remove);

</script>