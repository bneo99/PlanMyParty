<?php
$oldldpath = getenv('LD_LIBRARY_PATH');
putenv("LD_LIBRARY_PATH=");
$output = "<pre>".shell_exec("/home/ubuntu/UCD_Assignment_Swinburne_Feb18_T1G3/update/update.sh")."</pre>";
putenv("LD_LIBRARY_PATH=$oldldpath");
echo $output;
?>