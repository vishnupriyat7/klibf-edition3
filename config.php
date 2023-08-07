<?php

$conn = mysqli_connect("localhost", "root", "Root@123", "login");

if (!$conn) {
    echo "Connection Failed";
}