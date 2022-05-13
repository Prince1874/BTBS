<?php
$con = new mysqli('localhost', 'pkm', 'prince', 'BUS');
if ($con->connect_error) {
    die($con->connect_error);
}