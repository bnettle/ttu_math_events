 <?php
 
 $library_path = "../../../events_lib/";
 $relative_path_to_app = '../../';

 //library
 include($library_path . "./src/php/functions.php");

 //application
 include($relative_path_to_app . './src/php/ttu_math_events.php');

 
 Events::redirect_page(ttu_math_events::$current_year, ttu_math_events::$current_semester);
 

 ?>
