<?php
$output = shell_exec("cd /opt/bitnami/apache/htdocs && git pull origin main 2>&1");
echo "<pre>$output</pre>";
