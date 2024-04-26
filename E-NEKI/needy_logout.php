<?php
session_unset();
session_destroy();
header('location: needy login.html');
?>