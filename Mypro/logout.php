<?php
session_start();
session_unset();
session_destroy();
echo "You have already logged in."
?>