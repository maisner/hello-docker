<?php

if ($_GET['info'] === 'php') {
  phpinfo();
  exit();
}

echo '<h1>Hello Docker</h1>';
