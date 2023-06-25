<?php
$dir = $_GET['dir'];
shell_exec("cd $file");
echo shell_exec("pwd");
echo shell_exec("git pull origin main");
echo shell_exec("docker-compose -f docker-compose.yml down && docker-compose -f docker-compose.yml up -d --build --remove-orphans");

echo "done.";
