 <?php

  class ttu_math_seminars {
 
 public static  $institution = 'Texas Tech University';
 public static  $department = 'Department of Mathematics and Statistics';
 public static  $icon_in_toolbar = './src/img/favicon.ico';

 public static $discipline_array = array(
 'algebra_and_number_theory' => 'Algebra and Number Theory', 
 'analysis'                  => 'Analysis', 
 'applied_math'              => 'Applied Mathematics',
 'biomath'                   => 'Biomathematics',
 'geometry'                  => 'Geometry',
 'image_analysis'            => 'Image Analysis',
 'logic_topology'            => 'Logic-Topology',
 'math_club'                 => 'Math Club',
 'math_ed'                   => 'Mathematics Education',
 'prep_for_profession'       => 'Preparation for the Profession',
 'real_algebraic_geometry'   => 'Real-Algebraic Geometry', 
 'statistics'                => 'Statistics' 
 );

 }
 
 
 ///@todo write a function that checks that the directories of the inputs are there

 // for file in   algebra_and_number_theory  analysis  applied_math  biomath  geometry  image_analysis  logic_topology  math_club  math_ed prep_for_profession  real_algebraic_geometry; do cd $file; touch about.txt; cd ../; done

 ?>
