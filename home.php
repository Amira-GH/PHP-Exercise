<!DOCTYPE html>
<html>
<head>
<title> PHP Page </title>
<style>
.fields{
    display: flex;
    flex-direction: row;

}
h3{
   margin-left:235px;
   margin-top:50px

}
.registerField{
    margin-left: 30px;
    margin-bottom:450px;

}

#fullname
{
    margin-left: 80px;
}

#Username{
    margin-left: 85px;
}

#password{
    margin-left: 90px;
}

#ConfirmPassword{
    margin-left: 22px;
}

#Email{
    margin-left: 120px;
}

#Phone{
    margin-left: 115px;
}

#DateOfBirth{
    margin-left: 60px;
}

#SocialSecurityNumber{
    margin-left: 30px;
}

.submit{
    margin-left: 135px;
    margin-top: 50px;
}

.loginfield{
    margin-left: 750px;
    margin-top: -650px;
}

.login{
    margin-left: 160px;
    margin-top: 50px;
}

.vl{
    border-left: 4px solid gray;
    height: 850px;
    margin-top: -1270px;
    margin-left: 700px;
}

.ul{
    margin-left: 420px;
    margin-top: -500px;
}

.display{
    margin-left:50px;
    margin-top:40px;
}




</style>
</head>
<body>
<div class="fields">
<h3> Registration field <h3>
<h3> Login field <h3>
</div>


<div class="registerField">
<form action="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label>Full name<span class="note">*</span>:</label>
  <input type="text" id="fullname"  name="full_name" value="<?php echo $_POST['full_name']; ?>"><br/><br/>
  <?php echo "<p>".$msg_fullname."</p>";?>

 <label>Username<span class="note">*</span>:</label>
 <input type="text" id="Username" name="Username" value="<?php echo $_POST['Username']; ?>"/><br/><br/>
 <?php echo "<p>".$msg_username."</p>";?>

 <label>Password<span class="note">*</span>:</label>
 <input type="password" id="password" name="Password" value="<?php echo $_POST['Password']; ?>"/><br/><br/>
 <?php echo "<p>".$msg_password."</p>";?>

 <label>Confirm Password<span class="note">*</span>:</label>
 <input type="password" id="ConfirmPassword" name="ConfirmPassword" value="<?php echo $_POST['ConfirmPassword']; ?>"/><br/><br/>
 <?php echo "<p>".$msg_confirmpassword."</p>";?>

 <label>Email<span class="note">*</span>:</label>
 <input type="text" id="Email" name="Email" value="<?php echo $_POST['Email']; ?>"/><br/><br/>
 <?php echo "<p>".$msg_Email."</p>";?>


 <label>Phone<span class="note">*</span>:</label>
 <input type="phone" id="Phone" name="Phone" value="<?php echo $_POST['Phone']; ?>"/><br/><br/>
 <?php echo "<p>".$msg_Phone."</p>";?>



 <label>Date Of Birth<span class="note">*</span>:</label>
 <input type="date" id="DateOfBirth" name="DateOfBirth" value="<?php echo $_POST['DateOfBirth']; ?>"/><br/><br/>
 <?php echo "<p>".$msg_DateOfBirth."</p>";?>


 <label>Social Security Number<span class="note">*</span>:</label>
 <input type="text" id="SocialSecurityNumber" name="SocialSecurityNumber" value="<?php echo $_POST['SocialSecurityNumber']; ?>"/><br/><br/>
 <?php echo "<p>".$msg_SocialSecurityNumber."</p>";?>


 <button type="Submit" class="submit" name="registerButton">Submit</button>

 </form>



 <div class="display">

 <?php
   if (isset($_POST['registerButton'])) {
        if(empty($_POST['full_name'])){
            $msg_fullname = "You must supply your full name";
            echo $msg_fullname;
            echo "<br/>";
        }
        else{
            echo "Fullname : \t\t\t";
            echo $_POST['full_name'] ;
            echo "<br/>";
        }
        if(empty($_POST['Username'])){
            $msg_username = "You must supply your username";
            echo $msg_username;
            echo "<br/>";
        }
        else{ 
            echo "Username : \t\t";  
            echo $_POST['Username'];
            echo "<br/>";
        }
        if (empty($_POST['Password'])){
            $msg_password = "You must supply your password";
            echo $msg_password;
            echo "<br/>";
        }
        else{
            echo "Password : \t\t";  
            echo $_POST['Password'];
            echo "<br/>";
        }

        if (empty($_POST['ConfirmPassword'])){
            $msg_confirmpassword = "You must supply your Confirm Password";
            echo $msg_confirmpassword;
            echo "<br/>";
        }
        else{
            echo "Confirm Password : \t\t";  
            echo $_POST['ConfirmPassword'];
            echo "<br/>";
        }

        if (empty($_POST['Email'])){
            $msg_Email = "You must supply your Email";
            echo $msg_Email;
            echo "<br/>";
        }
        else{
            echo "Email : \t\t";  
            echo $_POST['Email'];
            echo "<br/>";
        }

        if (empty($_POST['Phone'])){
            $msg_Phone = "You must supply your Phone";
            echo $msg_Phone;
            echo "<br/>";
        }
        else{
            echo "Phone : \t\t";  
            echo $_POST['Phone'];
            echo "<br/>";
        }

        if (empty($_POST['DateOfBirth'])){
            $msg_DateOfBirth = "You must supply your Date Of Birth";
            echo $msg_DateOfBirth;
            echo "<br/>";
        }
        else{
            echo "Date Of Birth : \t\t";  
            echo $_POST['DateOfBirth'];
            echo "<br/>";
        }

        if (empty($_POST['SocialSecurityNumber'])){
            $SocialSecurityNumber = "You must supply your Date Of Social Security Number";
            echo $SocialSecurityNumber;
            echo "<br/>";
        }
        else{
            echo "Social Security Number : \t\t";  
            echo $_POST['SocialSecurityNumber'];echo "<br/>";
            echo "<br/>";
        }


    }
 
    $input = array("fullname" => $_POST['full_name'], 
        "Username" => $_POST['Username'],
        "Password" => $_POST['Password'],
        "ConfirmPassword" => $_POST['ConfirmPassword'],
        "Email" => $_POST['Email'],
        "Phone" => $_POST['Phone'],
        "DateOfBirth" => $_POST['DateOfBirth'],
        "SocialSecurityNumber" => $_POST['SocialSecurityNumber'],
    )



 ?>

</div>


</div>



<div class="vl">
</div>

<div class="loginfield">
 <form action="" method="post">

 <label for="Username">Username:</label>
 <input type="text" id="Username"/><br/><br/>


 <label for="Password">Password:</label>
 <input type="password" id="password"/><br/><br/>

 <button type="Submit" class="login" name="Login"> Login</button>

 </form>
</div>


</body>
</html>