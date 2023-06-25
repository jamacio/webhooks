<?php
echo $dir = $_GET['dir'];
echo shell_exec("cd $dir && git pull origin main && make build");
echo "<br>.";
echo "done.";
