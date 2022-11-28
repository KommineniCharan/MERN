
<script type="text/javascript">
	
function Occurances(str, letter){
	count = 0;
	for(let i=0;i<str.length;i++){
		if(str.charAt(i) == letter){
			count +=1;
		}
	}
	return count;
	return str.split(" ").length;
}

//const x = prompt("Enter First Character ");
//const y = prompt("Enter Character To Check ");
//const result = Occurances(x, y);

const result = Occurances("Charan Kumar Kumar", "Kumar");
document.writeln(result);

</script>

