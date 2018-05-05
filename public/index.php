<?php

if ($_POST['info'] === 'php') {
  phpinfo();
  exit();
}

echo '<h1>Hello Docker</h1>';
