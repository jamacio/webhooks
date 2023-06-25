<?php
echo $dir = $_GET['dir'];
echo shell_exec("cd $dir && pwd");
echo shell_exec("pwd");
// echo shell_exec("git pull origin main");
// echo shell_exec("make build");

echo "done.";
