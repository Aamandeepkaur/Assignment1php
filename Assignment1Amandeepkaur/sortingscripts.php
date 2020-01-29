<?php
  $text=explode(" ","Lorem ipsum dolor sit ametconsectetur adipiscing elit, sed do eiusmod 
tempor incididunt ut labore etdolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
mollit anim id est laborum. ");
natcasesort($text);
foreach($text as $txt){
    echo "$txt<br/>";

}
?>