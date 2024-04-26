<?php
session_unset();
session_destroy();
header('location: doner login.html');
?>