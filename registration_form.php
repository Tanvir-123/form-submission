<!DOCTYPE html>
<html>
<body>

<?php

$firstname = $lastname = $gender = $birthday = $religion = $perAddress = $parAddress = $phone = $email = $homepage ="";
$firstnameerr = $lastnameerr = $gendererr = $birthdayerr = $religionerr = $phoneerr = $emailerr = $homepageerr ="";
$successfull="";

if($_SERVER['REQUEST_METHOD'] == "POST") {

    if(empty($_POST['fname'])) {
        $firstnameerr = "Please Fill up the firstname!";
    }

    else if(empty($_POST['lname'])) {                    
        $lastnameerr = "Please Fill up the lastname!";
        
    }

    else if(empty($_POST['gender'])) {                    
        $gendererr = "Please Fill up the gender!";
        
    }

    else if(empty($_POST['birthday'])) {                    
        $birthdayerr = "Please Fill up the birthday!";
        
    }

    else if(empty($_POST['phone'])) {                    
        $phoneerr = "Please Fill up the phone!";
    }

    else if(empty($_POST['email'])) {                    
        $emailerr = "Please Fill up the email!";
    }

    else if(empty($_POST['homepage'])) {                    
        $homepageerr = "Please Fill up the homepage";
    }

    else {
        $successfull="Registration Successfull";
    }

}
?>

<h1>form registration:</h1>

<br><br>
<?php echo $successfull ?>
<br><br>
 
<form action="" method="post">
 <fieldset>
 <legend>Basic Information:</legend>
 <label for="fname">First Name:</label>
 <input type="text" id="fname" name="fname"><br><br>
 <?php echo $firstnameerr ?> <br>
 <label for="lname">Last Name:</label>
 <input type="text" id="lname" name="lname"><br><br>
 <?php echo $lastnameerr ?> <br>
 <label for="gender">Gender:</label>
 <input type="radio" id="male" name="gender" value="male">
 <label for="male">Male</label>
 <input type="radio" id="female" name="gender" value="female">
 <label for="female">Female</label><br><br>
 <?php echo $gendererr ?> <br>
 <label for="birthday">Birthday:</label>
 <input type="date" id="birthday" name="birthday"><br><br>
 <?php echo $birthdayerr ?> <br>
 <label for="religion">Religion:</label> 
<select name="religion" id="religion">
 <option value="select">Select</option>
 <option value="Islam">Islam</option>
 <option value="Hindu">Hindu</option>
 <option value="Christian">Christian</option>
 <br>
 <?php echo $religionerr ?> <br>
 
</select> 
 </fieldset>

 <fieldset>
 <legend>Contact Information:</legend>
 <label for="perAddress">Personal Address:</label>
 <textarea id="perAddress" name="perAddress" rows="2" cols="30"> 
 </textarea>
 <br><br>
 <label for="parAddress">Parmanent Address:</label>
 <textarea id="parAddress" name="parAddress" rows="2" cols="30"> 
 </textarea> 
 <br><br>
 <label for="phone">Enter your phone number:</label>
<input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"> <br><br>
<?php echo $phoneerr ?> <br>
<label for="email">Email:</label>
 <input type="email" id="email" name="email"><br><br>
 <?php echo $emailerr ?> <br>
<label for="homepage">Personal Website Link:</label>
<input type="url" id="homepage" name="homepage"> 
<?php echo $homepageerr ?> <br>
 
 </fieldset>
 <input type="submit" value="Submit">
</form>

 
</body>
</html>