<!DOCTYPE html>
<html>
<style>

body {
	font-family: Arial, Helvetica, sans-serif ;
	}
	
	h1 {
  background-color: none;
  color: white;
}

* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password], input[type=Number], input[type=Address] {
  width: 60%;
  padding: 15px 20px;
  display: inline-block;
  border-style: solid;
  border-radius:30px;
  background: white;
   border: 2px solid #FFFFFF;
  height:50px;
  margin-top: 20px;
  margin-bottom: 20px;

}

input[type=text]:focus, input[type=password]:focus ,input[type=Number]:focus, input[type=Address]:focus {
	
  outline: none;
  

}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color:blue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border-radius: 25px;
  border: 2px solid #00000;
  cursor: pointer;
  width: 70%;
  height:50px;
  opacity: 0.9;
}

button:hover {
  opacity:5;

}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: red;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: center;
  width:100px;
}

/* Add padding to container elements */
.container {
  padding: 16px;
 
  
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }


 
}
</style>
<body>

<div  style="background-image: url(bg.jpg);> 
<form action="/action_page.php" >
  <div class="container" style="align-content : center">
  
    <b><h1>Sign Up</h1></b>
	
    <b><p style="color:white;">Please fill in this form to create an account."</p></b>
	
    <hr>
<center>
    <div><b><label  style="color:white" for="email"><b>Email: </b></label></b>
    <input type="text" placeholder="Enter Email" name="email" required></div>

    <div><b><label   style="color:white;"for="psw"><b>Password:</b></label></b>
    <input type="password" placeholder="Enter Password" name="psw" required></div>

    <div><b><label  style="color:white;" for="psw-repeat"><b>Re-Type:</b></label></b>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required></div>
	
	<div><b><label  style="color:white;" for="Telephone Number"><b>No Tel :</b></label></b>
    <input type="Number" placeholder="Telephone Number" name="Telephone Number" required></div>
	
	<div><b><label  style="color:white;" for="Address"><b>Address:</b></label></b>
    <input type="Address" placeholder="Address" name="Address" required></div>
    </center>
    <label>
     <b><p style="color:white;"> <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px" > Remember me</p><b>
    </label>
    <center>
    <b><p style="color:white;" >By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p></b>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
</center>
  </div>
</form>
</div></center>

</body>
</html>
