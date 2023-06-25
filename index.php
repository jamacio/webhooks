<?php
echo $dir = $_GET['dir'];
echo shell_exec("cd $dir && git pull origin main && make build  >/dev/null 2>&1 &");
echo "<br>.";
echo "done.";
