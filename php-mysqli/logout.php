<?php

include_once __DIR__ . '/session.php';

session_unset();
session_destroy();

header('Location: ./login.php');
