<?php
$dir = $_GET['dir'];
shell_exec("cd $file");
echo shell_exec("git pull origin main");
echo exec("make build");

echo "done.";
