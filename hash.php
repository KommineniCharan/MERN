
<script type="text/javascript">

const bcrypt = require("bcryptjs");

let user = {
name : "Charan",
email : "charank347@gmail.com",
password : "1234",
credit : "123456789",
};

let salt = bcrypt.genSaltSync(10);
let newpassword = bcrypt.hashSync(user.password, salt);
let newcc = bcrypt.hashSync(user.credit, salt);

let newuser = {...user, password: newpassword, credit: newcc};
console.log(newuser);

let result = bcrypt.compareSync("1234", newuser.password);

if(result){
	console.log("Login Successfull");
}
else{
	console.log("Login Failed");
}

</script>

