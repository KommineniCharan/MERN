
<script type="text/javascript">

function oneSecond() {
setTimeout(function () {
	console.log("Sup!");
}, 2000);	
}

function stopWatch() {
setInterval(function () {
	console.log("Oooo Yaaa!");
}, 2000);
}

oneSecond();
stopWatch();

</script>