
<script type="text/javascript">

const person = {
name : "Charan",
email : "charank347@gmail.com",
age : 28,
};

const login = {
username : "Cherry",
password : "Cherry@123",
email : "charankumar.grank@gmail.com",
}

const user = {
...person, ...login,
};

console.log(user);

</script>