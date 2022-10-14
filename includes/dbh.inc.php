<?php

$serverName = "cryptowi_cryptousers";
$dBUsername = "cryptowi_crypto";
$dBpassword = "@Cr12345678#!";
$dBName = "cryptousers";

$conn = mysqli_connect($serverName, $dBUsername, $dBpassword, $dBName);

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}