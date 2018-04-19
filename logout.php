<?php
 session_start();
 unset($_SESSION['userName']);
 unset($_SESSION['accType']);
 header('Location: /');
 ?>