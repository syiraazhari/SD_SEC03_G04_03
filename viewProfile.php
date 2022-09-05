<?php
include 'database.php';
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>View Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" >

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<style>
body {
    background: #25162e
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}
input{
		margin-bottom : 14px;
}

.labels {
    font-size: 14px
	font-weight-bold
	margin-bottom : 14px;
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
button{
	margin-top : 25px;
width : 150px;
}

</style>
	</head>
	<body>
	<div class="container rounded bg-white mt-5 mb-5">
	<center>
    <div class="column">
        
        <div class="col-md-7 " style = "padding-left : 5%" ><div class="col-md-4 ">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Irdina</span><span class="text-black-50">irdina@gmail.com</span><span> </span></div>
        </div>
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile</h4>
                </div>
              
                <div class="row mt-3">
				<div class="col-md-12"><label class="labels">Full Name</label><input type="text" class="form-control" placeholder="Enter full name" value="" name="ic"></div>
					<div class="col-md-12"><label class="labels">Username</label><input type="text" class="form-control" placeholder="Enter username" value="" name="age"></div>
					<div class="col-md-12"><label class="labels">IC Number</label><input type="text" class="form-control" placeholder="Enter IC Number" value="" name="ic"></div>
					<div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Age</label><input type="text" class="form-control" placeholder="Enter age" value="" name="age"></div>
                    <div class="col-md-6"><label class="labels">Gender</label><input type="text" class="form-control" value="" placeholder="Enter gender" name="gender"></div>
					</div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="Enter address" value="" name="address"></div>
					<div><input type="text" class="form-control" placeholder="Enter address" value="" name="address2"></div>
					<div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="Enter postcode" value="" name="postcode"></div>
                    <div class="col-md-6"><label class="labels">State</label><input type="text" class="form-control" value="" placeholder="Enter state" name="state"></div>
					</div>
                    <div class="col-md-12"><label class="labels">Race</label><input type="text" class="form-control" placeholder="Race" value="" name="race"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Contact Number</label><input type="text" class="form-control" placeholder="Enter contact number" value="" name="contactNumber"></div>
                    <div class="col-md-6"><label class="labels">Email ID</label><input type="text" class="form-control" value="" placeholder="Enter email id" name="email"></div>
                </div>
				<div class="row mt-3">
                 <div class="col-md-6"><button class="btn btn-primary profile-button" type="button">Back</button></div>
				 <div class="col-md-6"><a href="editProfile.php"><button class="btn btn-primary profile-button" type="update" name="submit">Edit</button></a></div>
            </div>
        </div>
       
    </div>
	</center>
</div>
</div>

	</body>
</html>

