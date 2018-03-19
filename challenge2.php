<?php

print 'Simple calculator' ."\n";

menu:

print "|----Menu----| ". "\n";
print "| 1. Addition +". "\n";
print "| 2. Soustraction - ". "\n";
print "| 3. Multiplication x ". "\n";
print "| 4. Division / ". "\n";
print "| 5. Exit ". "\n";
$option = fwrite(STDOUT," choose function: ");
$option = trim(fgets(STDIN));

if ($option == 1)
{
  $in1='';
  $in2='';
  while(!is_numeric($in1)){
   print "enter number 1: ";
   $in1 = trim(fgets(STDIN));
 }
   while(!is_numeric($in2)){
   print "enter number 2: ";
   $in2 = trim(fgets(STDIN));
 }
   $out = $in1 + $in2;

 }
   elseif
 ($option == 2)
{
  $in1='';
  $in2='';
  while(!is_numeric($in1)){
   print "enter number 1: ";
   $in1 = trim(fgets(STDIN));
  }
   while(!is_numeric($in2)){
   print "enter number 2: ";
   $in2 = trim(fgets(STDIN));
  }
   $out = $in1 - $in2;

}

 elseif ($option == 3)
{
  $in1='';
  $in2='';
  while(!is_numeric($in1)){
   print "enter number 1: ";
   $in1 = trim(fgets(STDIN));
 }
   while(!is_numeric($in2)){
   print "enter number 2: ";
   $in2 = trim(fgets(STDIN));
 }
   $out = $in1 * $in2;

 }
  elseif
 ($option == 4)
{
  $in1='';
  $in2='';
  while(!is_numeric($in1)){
   print "enter number 1: ";
   $in1 = trim(fgets(STDIN));
 }
   while(!is_numeric($in2)){
   print "enter number 2: ";
   $in2 = trim(fgets(STDIN));
 }
   $out = $in1 / $in2;

}
 elseif ($option == 5)
{
   exit;
 }
   else
 {
  echo 'wrong option!!!'."\n";
  goto menu;

}


echo "|---->Function result is: $out"."\n";
goto menu;

?>
