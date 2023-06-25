<?php
$dir = $_GET['dir'];
shell_exec("cd $dir");
echo shell_exec("pwd");
// echo shell_exec("git pull origin main");
// echo shell_exec("make build");

echo "done.";
