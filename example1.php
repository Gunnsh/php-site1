<?php
function &checkName(&$name)
{
    if($name === "admin") $name = "Tom";
    return $name;
}
  
$userName = "admin"; 
$checkedName = &checkName($userName);
echo "<br />userName: $userName";
echo "<br />checkedName: $checkedName";
?>