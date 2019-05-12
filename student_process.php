<?php 

// define variables and set to empty values
$FName_error = $MName_error = $LName_error = $SID_error = $Email_error = $Password_error = $PhoneNum_error = $Address_error = $Level_error = $Coursecode_error = "";
$FName = $MName = $LName = $SID = $Email = $Password = $PhoneNum = $Address = $Level = $Coursecode = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["FName"])) {
    $FName_error = "Name is required";
  } else {
    $FName = test_input($_POST["FName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$FName)) {
      $FName_error = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["MName"])) {
    $MName_error = "Name is required";
  } else {
    $MName = test_input($_POST["MName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$MName)) {
      $MName_error = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["FName"])) {
    $FName_error = "Name is required";
  } else {
    $FName = test_input($_POST["FName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/*$/",$FName)) {
      $FName_error = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["LName"])) {
    $LName_error = "Name is required";
  } else {
    $LName = test_input($_POST["LName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$LName)) {
      $LName_error = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["SID"])) {
    $SID_error = "SID is required";
  } else {
    $SID = test_input($_POST["SID"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[^0-9A-Za-z]*$/",$SID)) {
      $SID_error = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["Email"])) {
    $Email_error = "Email is required";
  } else {
    $Email = test_input($_POST["Email"]);
    // check if e-mail address is well-formed
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      $Email_error = "Invalid email format"; 
    }
  }

  if (empty($_POST["Password"])) {
    $Password_error = "Name is required";
  } else {
    $Password = test_input($_POST["Password"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$Password)) {
      $Password_error = "Only letters and white space allowed"; 
    }
  }



  if (empty($_POST["PhoneNum"])) {
    $PhoneNum_error = "Phone is required";
  } else {
    $PhoneNum = test_input($_POST["PhoneNum"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$PhoneNum)) {
      $PhoneNum_error = "Invalid phone number"; 
    }
  }

  if (empty($_POST["Address"])) {
    $Address_error = "address is required";
  } else {
    $Address = test_input($_POST["Address"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$Address)) {
      $Address_error = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["Level"])) {
    $Level_error = "Level is required";
  } else {
    $Level = test_input($_POST["Level"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[^0-9A-Za-z]*$/",$Level)) {
      $Level_error = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["Coursecode"])) {
    $Coursecode_error = "coursecode  is required";
  } else {
    $Coursecode = test_input($_POST["Coursecode"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$Coursecode)) {
      $Coursecode_error = "Only letters and white space allowed"; 
    }
  }


 
 
  
  if ($FName == '' and $MName == '' and $LName== '' and $SID == '' and $Email == '' and $Password== '' and $PhoneNum == '' and $Address == '' and $Level == '' and $Coursecode== ''){
      $message_body = '';
      unset($_POST['Submit']);
      foreach ($_POST as $key => $value){
          $message_body .=  "$key: $value\n";
      }
      
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}