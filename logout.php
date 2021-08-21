<?php
session_start();
unset($_SESSION["user"]);

header('Location: /htdocs-update/index.php');