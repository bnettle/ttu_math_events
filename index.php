 <?php
 
//  //library
//  $library_path = "../events_lib/";
//  include($library_path . "./src/php/functions.php");
//  
//  //application
//  $relative_path_to_app = './';
//  include($relative_path_to_app . './src/php/ttu_math_events.php');
// 
// 
//  Events::redirect_page(ttu_math_events::$current_year, ttu_math_events::$current_semester);

$folder='all';
$year = '2020';
$semester = 'spring';

     echo '<!DOCTYPE html>';

     echo '<html>';
     echo '<head>';
     echo '<title> Redirecting </title>';
     echo '<meta http-equiv="refresh" content="0;url=./' . $folder .'/' . $year .'/' . $semester . '/' . '">';
     echo '</head>';
     echo '<body>';
     echo '</body>';
     echo '</html>';

 ?>
