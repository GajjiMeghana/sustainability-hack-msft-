 <?php
 include("../Includes/db.php");
 session_start();
 $sessphonenumber = $_SESSION['phonenumber'];
 $sql = "select * from farmerregistration where farmer_phone = '$sessphonenumber' ";
 $run_query = mysqli_query($con, $sql);
 while ($row = mysqli_fetch_array($run_query)) {
     $name = $row['farmer_name'];
     $phone = $row['farmer_phone'];
     $address = $row['farmer_address'];
     $pan = $row['farmer_pan'];
     $bank = $row['farmer_bank'];
     $state = $row['farmer_state'];
     $district = $row['farmer_district'];
 }


?> 



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Farmer Profile</title>
    <link rel="stylesheet" href="https:cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https:stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

     <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
     <script src="../portal_files/jquery.min.js.download"></script>
     <script src="../portal_files/popper.min.js.download"></script>
     <script src="../portal_files/bootstrap.min.js.download"></script>

    <style>
        h1 {
  background-color: #6ab04c;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  text-align: center;
  cursor: pointer;
  font-size: 36px;
  padding: 10px;
  color: white;
}

textarea {
  font-size: 24px;
  border-radius: 15px;
  text-align: center;
  border-color: #6ab04c;
  background-color: #f4f4f4;
  margin-top: 10px;
  padding: 10px;
}

.box {
  color: #264d00;
  width: 450px;
  line-height: 50px;
  margin: auto;
  text-align: center;
  margin-top: 50px;
  padding: 10px;
  border-style: solid;
  border-width: 5px;
  border-radius: 20px;
  border-color: #6ab04c;
  font-size: 24px;
}

body {
  background-color: #f0f0f0;
}

form {
  margin: 20px;
  padding: 20px;
  background-color: white;
  border-style: solid;
  border-width: 5px;
  border-radius: 20px;
  border-color: #6ab04c;
  box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

input {
  padding: 10px;
  margin: 10px;
  border-color: #6ab04c;
  display: inline-block;
  font-size: 20px;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  border-radius: 15px;
}

input[type="submit"] {
  cursor: pointer;
  font-size: 24px;
  font-weight: bold;
  color: white;
  background-color: #6ab04c;
  border-radius: 15px;
  border-color: #3e8a5d;
  width: 70%;
  transition: all 0.3s ease-in-out;
}

input[type="submit"]:hover {
  background-color: #3e8a5d;
  outline: none;
  border-color: #264d00;
  color: white;
  border-radius: 20%;
  border-style: outset;
  border-color: #264d00;
  font-weight: bold;
  width: 80%;
  font-size: 22px;
  box-shadow: 0 0 10px rgba(0,0,0,0.2);
}

.one {
  height: 100px;
  border-radius: 13px;
  background-color: #6ab04c;
}

.two {
  width: 100px;
  font-size: 34px;
  background: transparent;
  border: 3px;
  border-color: #6ab04c;
  border-style: solid;
  border-width: 2px;
  color: #6ab04c;
  text-align: center;
  margin-top: 10px;
  margin-bottom: 10px;
  padding: 5px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0,0,0,0.2);
}

.just {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  float: left;
            margin-left: 1%;
            margin: 20px;
            position: absolute;
            left: 0;
            top: 0px;
            text-shadow: 1px 1px 1px black;}

    </style>
    <link rel="stylesheet" href="https:cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    
    <div class="container-fluid" style="max-width:520px">
        <form action="EditProfile.php" method="post">
            <table align="center">
                <tr colspan=2>
                    <h1> FARMER'S PROFILE</h1>
                </tr>
                <tr align="center">
                    <td><label><b>Name :</b></label></td>
                    <td>
                        <!-- <textarea rows="2" column="10" disabled> <?php echo $name ?> </textarea> -->
                        <input type="text" readonly class="form-control-plaintext border border-dark" id="staticEmail" value="<?php echo $name?>">
                    <br></td>
                </tr>
                <tr align="center">
                    <td><label><b>Phone Number :</b></label></td>
                    <td><textarea rows="2" column="10" disabled> <?php echo $phone ?> </textarea><br></td>
                </tr>
                <tr align="center">
                    <td><label><b>Address :</b></label></td>
                    <td><textarea rows="3" column="56" disabled> <?php echo $address ?> </textarea><br></td>
                </tr>

                <tr align="center">
                    <td><label><b>State :</b></label></td>
                    <td><textarea rows="3" column="56" disabled> <?php echo $state ?> </textarea><br></td>
                </tr>
                <tr align="center">
                    <td><label><b>District :</b></label></td>
                    <td><textarea rows="3" column="56" disabled> <?php echo $district ?> </textarea><br></td>
                </tr>

                <tr align="center">
                    <td><label><b>Pan Number :</b></label></td>
                    <td><textarea rows="2" column="10" disabled> <?php echo $pan ?> </textarea><br></td>
                </tr>
                <tr align="center">
                    <td><label><b>Account Number :</b></label></td>
                    <td><textarea rows="2" column="10" disabled> <?php echo $bank ?> </textarea><br></td>
                </tr>

                <td colspan=2><input type="submit" name="editProf" value="Edit Profile"></td>
                </tr>
            </table>



        </form>

    </div>

</body>

</html>