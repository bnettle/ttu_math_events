 
<?php 

// include($_SERVER['DOCUMENT_ROOT']."includes/people.php");
include("../../../events_lib/src/php/functions.php");

$dsn = "mysql:host=webwork.math.ttu.edu; dbname=deptweb";
$username = "readdeptweb";
$password = "byrt82fw";

//   echo render('Analysis', $dsn, $username, $password);
  echo Events::render('Control', $dsn, $username, $password);
//   echo render('all', $dsn, $username, $password);
//   echo render('grad', $dsn, $username, $password); 
//   echo render('office', $dsn, $username, $password); 
//   echo render('staff', $dsn, $username, $password); 
//   echo render('hornprof', $dsn, $username, $password); 
//   echo render('prof', $dsn, $username, $password); 
//   echo render('assoprof', $dsn, $username, $password); 
//   echo render('assiprof', $dsn, $username, $password); 
//   echo render('visit', $dsn, $username, $password); 
//   echo render('instruct_lect', $dsn, $username, $password); 
//   echo render('former', $dsn, $username, $password); 
//   echo render('advising', $dsn, $username, $password); 

?>