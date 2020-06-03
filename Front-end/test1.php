<?php
//index.php

$error = '';
$fname = '';
$date = '';
$phone= '';
$nationality = '';  
$gender  = '';
$admission = ''; 
$duration  = '';
$docname  = '';
$availability  = '';
$expertise  = '';
$environment  = '';
$staff  = '';
$facilities  = '';
$food  = '';
$review = '';
$preserve = '';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{
 if(empty($_POST["fname"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
 }
 else
 {
  $fname = clean_text($_POST["fname"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$fname))
  {
   $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }
 }

 if(empty($_POST["date"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your DOB</label></p>';
 }
 else
 {
  $date = clean_text($_POST["date"]);
 }

  if(empty($_POST["phone"]))
  {
    $error .= '<p><label class="text-danger">Enter your Phone number</label></p>';
  }
  else
  {
    $phone = clean_text($_POST["phone"]);
  }

  if(empty($_POST["nationality"]))
  {
    $error .= '<p><label class="text-danger">Nationality is required</label></p>';
  }
  else
  {
    $nationality = clean_text($_POST["nationality"]);
  }

  if(empty($_POST["gender"]))
  {
    $error .= '<p><label class="text-danger">Gender is required</label></p>';
  }
  else
  {
    $gender = clean_text($_POST["gender"]);
  }

  if(empty($_POST["admission"]))
  {
    $error .= '<p><label class="text-danger">Admission is required</label></p>';
  }
  else
  {
    $admission = clean_text($_POST["admission"]);
  }
  
  if(empty($_POST["duration"]))
  {
    $error .= '<p><label class="text-danger">Subject is required</label></p>';
  }
  else
  {
    $duration = clean_text($_POST["duration"]);
  }

  if(empty($_POST["docname"]))
  {
    $error .= '<p><label class="text-danger">Subject is required</label></p>';
  }
  else
  {
    $docname = clean_text($_POST["docname"]);
  }

  if(empty($_POST["availability"]))
  {
    $error .= '<p><label class="text-danger">Subject is required</label></p>';
  }
  else
  {
    $availability = clean_text($_POST["availability"]);
  }

  if(empty($_POST["expertise"]))
  {
    $error .= '<p><label class="text-danger">Subject is required</label></p>';
  }
  else
  {
    $expertise = clean_text($_POST["expertise"]);
  }
  
  if(empty($_POST["environment"]))
  {
    $error .= '<p><label class="text-danger">Subject is required</label></p>';
  }
  else
  {
    $environment = clean_text($_POST["environment"]);
  }

  if(empty($_POST["staff"]))
  {
    $error .= '<p><label class="text-danger">Subject is required</label></p>';
  }
  else
  {
    $staff = clean_text($_POST["staff"]);
  }

  if(empty($_POST["facilities"]))
  {
    $error .= '<p><label class="text-danger">Subject is required</label></p>';
  }
  else
  {
    $facilities = clean_text($_POST["facilities"]);
  }

  if(empty($_POST["food"]))
  {
    $error .= '<p><label class="text-danger">Subject is required</label></p>';
  }
  else
  {
    $food = clean_text($_POST["food"]);
  }

  if(empty($_POST["review"]))
  {
    $error .= '<p><label class="text-danger">Subject is required</label></p>';
  }
  else
  {
    $review = clean_text($_POST["review"]);
  }

  if(empty($_POST["preserve"]))
  {
    $error .= '<p><label class="text-danger">Subject is required</label></p>';
  }
  else
  {
    $preserve = clean_text($_POST["preserve"]);
  }

 

 if($error == '')
 {
  $file_open = fopen("test_Data.csv", "a");
  $no_rows = count(file("test_Data.csv"));
  if($no_rows > 1)
  {
   $no_rows = ($no_rows - 1) + 1;
  }
  $form_data = array(
   'fname' =>  $fname ,
   'date' =>   $date , 
   'phone' =>  $phone ,
   'nationality1' =>  $nationality,   
   'gender' => $gender , 
   'admission' => $admission , 
   'duration'=> $duration,  
   'docname' => $docname  ,
   'availability' => $availability,  
   'expertise' =>  $expertise , 
   'environment' =>  $environment , 
   'staff' =>  $staff,  
   'facilities'=> $facilities,  
   'food' => $food , 
   'review' => $review,  
   'preserve' => $preserve  
  );

  fputcsv($file_open, $form_data);
  $fname = ''; 
  $date  = '';
  $phone = '';
  $nationality  = ''; 
  $gender = ''; 
  $admission = ''; 
  $duration = ''; 
  $docname = ''; 
  $availability  = '';
  $expertise = ''; 
  $environment = ''; 
  $staff  = '';
  $facilities  = '';
  $food = ''; 
  $review = ''; 
  $preserve= '';
 }
}

?>
