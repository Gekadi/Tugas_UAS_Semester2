<?php

// definisikan variabel
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = 'root';
$DB_NAME = 'list_film';
// $SITE = 'http://localhost/WPUTS-2201010549';

// Koneksi ke database
$mysqli = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

// start session
session_start();

// Memeriksa koneksi
if ($mysqli->connect_errno) {
    die("Failed to connect to MySQL: " . $mysqli->connect_error);
}