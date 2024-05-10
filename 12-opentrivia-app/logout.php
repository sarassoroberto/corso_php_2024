<?php
session_start();
use service\autenticate\AutenticateService;
require 'vendor/autoload.php';
require 'autoload.php';

AutenticateService::logOut();
// print_r($_SESSION);
header("Location: index.php");