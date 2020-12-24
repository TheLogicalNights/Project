<?php

$servername = "localhost";
$username = "root";
$password = "swapnil123";
$dbname = "IACTS";
$result = false;

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Error : " . mysqli_connect_error());
} else {
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $form = $_POST['form'];
    if ($form == 1) {
      $name = $_POST['name'];
      $phnno = $_POST['phnno'];
      $mailid = $_POST['email'];
      $speciality = $_POST['speciality'];
      $hospital = $_POST['hospital'];
      $iactsno = $_POST['iactsno'];
      $medregno = $_POST['medregno'];
      $address = $_POST['address'];
      $area = $_POST['area'];
      $city = $_POST['city'];
      $pincode = $_POST['pincode'];
      $state = $_POST['state'];

      $query = "insert into form1(name , mob_no , email , speciallity , hospital , iacts_no , med_reg_no , address , area , city , pincode , state) values ('$name','$phnno','$mailid','$speciality','$hospital','$iactsno','$medregno','$address','$area','$city','$pincode','$state')";
      $result = mysqli_query($conn, $query);
      if ($result) {
      } else {
        die("Error : " . mysqli_error($conn));
      }
    } elseif ($form == 2) {
      $name = $_POST['name'];
      $phnno = $_POST['phnno'];
      $mailid = $_POST['email'];
      $speciality = $_POST['speciality'];
      $hospital = $_POST['hospital'];
      $medregno = $_POST['medregno'];
      $address = $_POST['address'];
      $area = $_POST['area'];
      $city = $_POST['city'];
      $pincode = $_POST['pincode'];
      $state = $_POST['state'];

      $query = "insert into form2(name,mob_no,email,speciallity,hospital,med_reg_no,address,area,city,pincode,state) values ('$name','$phnno','$mailid','$speciality','$hospital','$medregno','$address','$area','$city','$pincode','$state')";
      $result = mysqli_query($conn, $query);
      if ($result) {
      } else {
        die("Error : " . mysqli_error($conn));
      }
    } else {
      $name = $_POST['name'];
      $phnno = $_POST['phnno'];
      $mailid = $_POST['email'];
      $speciality = $_POST['speciality'];
      $hospital = $_POST['hospital'];
      $medregno = $_POST['medregno'];
      $address = $_POST['address'];
      $area = $_POST['area'];
      $city = $_POST['city'];
      $pincode = $_POST['pincode'];
      $state = $_POST['state'];

      $query = "insert into form3(name,mob_no,email,speciallity,hospital,med_reg_no,address,area,city,pincode,state) values ('$name','$phnno','$mailid','$speciality','$hospital','$medregno','$address','$area','$city','$pincode','$state')";
      $result = mysqli_query($conn, $query);
      if ($result) 
      {
      
      } 
      else 
      {
        die("Error : " . mysqli_error($conn));
      }
      if(isset($_FILES))
      {
        $filename = $_FILES["upload3"]["name"];
        $tmp_filename = $_FILES["upload3"]["tmp_name"];
        $error = $_FILES["upload3"]["error"];

        if($error>0)
        {
          die("Error : Unable to upload file");
        }
        else{
           move_uploaded_file($tmp_filename,"Files/".$filename);
           
        }

      }
      }
    }
  }
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="./CSS/style.css">
  <script>
    function validate1() {
      var name = document.getElementById('name').value;
      var phnno = document.getElementById('phnno').value;
      var mail = document.getElementById('email').value;
      var special = document.getElementById('speciality').value;
      var hospital = document.getElementById('hospital').value;
      var iactsno = document.getElementById('iactsno').value;
      var medregno = document.getElementById('medregno').value;
      var address = document.getElementById('address').value;
      var area = document.getElementById('area').value;
      var city = document.getElementById('city').value;
      var pincode = document.getElementById('pincode').value;
      var state = document.getElementById('state').value;

      if (name == "" || phnno == "" || mail == "" || special == "" || hospital == "" || iactsno == "" || medregno == "" || address == "" || area == "" || city == "" || pincode == "" || state == "") {
        alert("Error : Please fill all the details..");
        return false;
      }
    }
    function validate2() {
      var name2 = document.getElementById('name2').value;
      var phnno2 = document.getElementById('phnno2').value;
      var mail2 = document.getElementById('email2').value;
      var special2 = document.getElementById('speciality2').value;
      var hospital2 = document.getElementById('hospital2').value;
      var medregno2 = document.getElementById('medregno2').value;
      var address2 = document.getElementById('address2').value;
      var area2 = document.getElementById('area2').value;
      var city2 = document.getElementById('city2').value;
      var pincode2 = document.getElementById('pincode2').value;
      var state2 = document.getElementById('state2').value;

      if (name2 == "" || phnno2 == "" || mail2 == "" || special2 == "" || hospital2 == "" || medregno2 == "" || address2 == "" || area2 == "" || city2 == "" || pincode2 == "" || state2 == "") {
        alert("Error : Please fill all the details..");
        return false;
      }
    }
    function validate3() {
      var name3 = document.getElementById('name3').value;
      var phnno3 = document.getElementById('phnno3').value;
      var mail3 = document.getElementById('email3').value;
      var special3 = document.getElementById('speciality3').value;
      var hospital3 = document.getElementById('hospital3').value;
      var medregno3 = document.getElementById('medregno3').value;
      var address3 = document.getElementById('address3').value;
      var area3 = document.getElementById('area3').value;
      var city3 = document.getElementById('city3').value;
      var pincode3 = document.getElementById('pincode3').value;
      var state3 = document.getElementById('state3').value;

      if (name3 == "" || phnno3 == "" || mail3 == "" || special3 == "" || hospital3 == "" || medregno3 == "" || address3 == "" || area3 == "" || city3 == "" || pincode3 == "" || state3 == "") {
        alert("Error : Please fill all the details..");
        return false;
      }
    }

  </script>
  <title>IACTS | PYMENT</title>
</head>

<body>
  <img src="../img/header.jpg" class="img-fluid mx-auto d-block" alt="Responsive image">
  <div class="box">
    <div class="imageContainer">
      <img src="../img/heart1.jpg" alt="" srcset="">
      <img src="../img/heart2.jpg" alt="" srcset="">
      <img src="../img/heart3.jpg" alt="" srcset="">
    </div>
    <div class="tabContainer">
      <div class="buttonContainer">
        <button onclick="showPanel(0,0)">Delegate IACTS Member</button>
        <button onclick="showPanel(1,1)">Delegate Non Member</button>
        <button onclick="showPanel(2,2)">PG Student</button>
      </div>
      <div class="tabPanel">
        <form name="form1" action="/Project/Src/index.php" method="POST" onsubmit="return validate1()">
          <input type="hidden" name="form" value="1" id="hidden">

          <label for="name" class="labels">Name*</label><label for="phnno" class="labels">Mobile No*</label><br>
          <input type="text" name="name" id="name" class="textFields"> <input type="text" name="phnno" id="phnno"
            class="textFields">

          <label for="name" class="labels">Email*</label><label for="speciality" class="labels">Speciality*</label><br>
          <input type="email" name="email" id="email" class="textFields"> <input type="text" name="speciality"
            id="speciality" class="textFields">

          <label for="name" class="labels">Hospital*</label><label for="iactsno" class="labels">IACTS No*</label><br>
          <input type="text" name="hospital" id="hospital" class="textFields"> <input type="text" name="iactsno"
            id="iactsno" class="textFields">

          <label for="name" class="labels">Medical Registeration No*</label><label for="address"
            class="labels">Address*</label><br>
          <input type="text" name="medregno" id="medregno" class="textFields"> <input type="text" name="address"
            id="address" class="textFields">

          <label for="area" class="labels">Area*</label><label for="city" class="labels">City*</label><br>
          <input type="text" name="area" id="area" class="textFields"> <select name="city" id="city" class="textFields">
            <option value="">Select</option>
            <option value="Pune">Pune</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Delhi">Delhi</option>
            <option value="Satara">Satara</option>
            <option value="Kolhapur">Kolhapur</option>
            <option value="Chennai">Chennai</option>
            <option value="Kanpur">Kanpur</option>
            <option value="Banglore">Banglore</option>
            <option value="Hydrabad">Hydrabad</option>
            <option value="Kolkata">Kolkata</option>
            <option value="Surat">Surat</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Nagpur">Nagpur</option>
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="Thane">Thane</option>
            <option value="Indore">Indore</option>
            <option value="Bhopal">Bhopal</option>
            <option value="Agra">Agra</option>
            <option value="Meerut">Meerut</option>
            <option value="Nashik">Nashik</option>
          </select>

          <label for="pincode" class="labels">Pincode*</label><label for="state" class="labels">State*</label><br>
          <input type="text" name="pincode" id="pincode" class="textFields"> <select name="state" id="state"
            class="textFields">
            <option value="">Select</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Odisha">Odisha</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Telangana">Telangana</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Uttarakhand">Uttarakhand</option>
            <option value="West Bengal">West Bengal</option>
          </select>
          <input type="submit" value="PROCEED TO PAY" class="payButton">
        </form>
      </div>
      <div class="tabPanel">
        <form name="form2" action="/Project/Src/index.php" method="POST" onsubmit="return validate2()">
          <input type="hidden" name="form" value="2" id="hidden">
          <input type="hidden" name="iactsno" id="iactsno" class="textFields" value="2">
          <label for="name2" class="labels">Name*</label><label for="phnno2" class="labels">Mobile No*</label><br>
          <input type="text" name="name" id="name2" class="textFields"> <input type="text" name="phnno" id="phnno2"
            class="textFields">

          <label for="email2" class="labels">Email*</label><label for="speciality2"
            class="labels">Speciality*</label><br>
          <input type="email" name="email" id="email2" class="textFields"> <input type="text" name="speciality"
            id="speciality2" class="textFields">

          <label for="hospital2" class="labels">Hospital*</label><label for="medregno2" class="labels">Medical
            Registeration
            No*</label><br>
          <input type="text" name="hospital" id="hospital2" class="textFields"> <input type="text" name="medregno"
            id="medregno2" class="textFields">

          <label for="address2" class="labels">Address*</label><label for="area2" class="labels">Area*</label><br>
          <input type="text" name="address" id="address2" class="textFields"><input type="text" name="area" id="area2"
            class="textFields">

          <label for="city2" class="labels">City*</label><label for="pincode2" class="labels">Pincode*</label><br>
          <select name="city" id="city2" class="textFields">
            <option value="">Select</option>
            <option value="Pune">Pune</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Delhi">Delhi</option>
            <option value="Satara">Satara</option>
            <option value="Kolhapur">Kolhapur</option>
            <option value="Chennai">Chennai</option>
            <option value="Kanpur">Kanpur</option>
            <option value="Banglore">Banglore</option>
            <option value="Hydrabad">Hydrabad</option>
            <option value="Kolkata">Kolkata</option>
            <option value="Surat">Surat</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Nagpur">Nagpur</option>
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="Thane">Thane</option>
            <option value="Indore">Indore</option>
            <option value="Bhopal">Bhopal</option>
            <option value="Agra">Agra</option>
            <option value="Meerut">Meerut</option>
            <option value="Nashik">Nashik</option>
          </select>
          <input type="text" name="pincode" id="pincode2" class="textFields">
          <label for="state2" class="labels">State*</label><br>
          <select name="state" id="state2" class="textFields">
            <option value="">Select</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Odisha">Odisha</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Telangana">Telangana</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Uttarakhand">Uttarakhand</option>
            <option value="West Bengal">West Bengal</option>
          </select>
          <input type="submit" value="PROCEED TO PAY" class="payButton">
        </form>
      </div>
      <div class="tabPanel">
        <form name="form3" action="/Project/Src/index.php" method="POST" enctype="multipart/form-data"
          onsubmit="return validate3()">
          <input type="hidden" name="form" value="3" id="hidden">
          <label for="name3" class="labels">Name*</label><label for="phnno3" class="labels">Mobile No*</label><br>
          <input type="text" name="name" id="name3" class="textFields"> <input type="text" name="phnno" id="phnno3"
            class="textFields">

          <label for="email3" class="labels">Email*</label><label for="speciality3"
            class="labels">Speciality*</label><br>
          <input type="email" name="email" id="email3" class="textFields"> <input type="text" name="speciality"
            id="speciality3" class="textFields">

          <label for="hospital3" class="labels">Hospital*</label><label for="medregno3" class="labels">Medical
            Registeration
            No*</label><br>
          <input type="text" name="hospital" id="hospital3" class="textFields"> <input type="text" name="medregno"
            id="medregno3" class="textFields">

          <label for="address3" class="labels">Address*</label><label for="area3" class="labels">Area*</label><br>
          <input type="text" name="address" id="address3" class="textFields"><input type="text" name="area" id="area3"
            class="textFields">

          <label for="city3" class="labels">City*</label><label for="pincode3" class="labels">Pincode*</label><br>
          <select name="city" id="city3" class="textFields">
            <option value="">Select</option>
            <option value="Pune">Pune</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Delhi">Delhi</option>
            <option value="Satara">Satara</option>
            <option value="Kolhapur">Kolhapur</option>
            <option value="Chennai">Chennai</option>
            <option value="Kanpur">Kanpur</option>
            <option value="Banglore">Banglore</option>
            <option value="Hydrabad">Hydrabad</option>
            <option value="Kolkata">Kolkata</option>
            <option value="Surat">Surat</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Nagpur">Nagpur</option>
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="Thane">Thane</option>
            <option value="Indore">Indore</option>
            <option value="Bhopal">Bhopal</option>
            <option value="Agra">Agra</option>
            <option value="Meerut">Meerut</option>
            <option value="Nashik">Nashik</option>
          </select>
          <input type="text" name="pincode" id="pincode3" class="textFields">
          <label for="state3" class="labels">State*</label><label for="upload3" class="labels">Upload letter from
            hospital
            HOD*</label><br>
          <select name="state" id="state3" class="textFields">
            <option value="">Select</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Odisha">Odisha</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Telangana">Telangana</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Uttarakhand">Uttarakhand</option>
            <option value="West Bengal">West Bengal</option>
          </select>
          <input type="file" name="upload3" id="upload3" class="uploadFile">
          <input type="submit" value="PROCEED TO PAY" class="payButton">
        </form>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="./JavaScript/myScript.js"></script>
</body>

</html>