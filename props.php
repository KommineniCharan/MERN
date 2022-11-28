
<script type="text/javascript">

let emp = {

id : 101,
name : "Charan",
sal : 450000,
designation : "Web Developer"

}

let props = 0;

for(prop in emp){
	++props;
}

document.writeln(props);


</script>