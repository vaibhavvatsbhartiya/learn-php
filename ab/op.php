<?php
$name ="Vaibhav vats is going to learn PHP";
echo $name;
echo '<br>';
echo '<br>';
echo '<br>';


// string ko ik sath use krne k lie apn log . (dot) ka use krte hai
echo "My " . "nam " . $name . ' hai';
echo '<br>';
echo '<br>';
echo '<br>';

// reverse the string
echo strrev($name);
echo '<br>';
echo '<br>';
echo '<br>';

//  search k lie use kre
echo strpos($name,"is");
echo '<br>';
echo '<br>';
echo '<br>';



//  replace  k lie use kre
echo str_replace("Vaibhav vats", "V2", $name);
echo '<br>';
echo '<br>';
echo '<br>';

// pre tag 'as it is ' data send kr dega with spaces
// trim  r or l right and left side s hta dega
echo rtrim("<pre>    Hehho         </pre> "); 
echo ltrim(" <pre>   Hehho          </pre>");

?>