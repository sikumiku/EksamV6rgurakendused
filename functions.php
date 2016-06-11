<?php

function connect_database(){
	global $connection;
	$host="localhost";
	$user="test";
	$pass="t3st3r123";
	$db="test";
	$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust mootoriga- ".mysqli_error());
	mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));
}

function homepage() {
	include_once('home.html');
}

function gallery() {
	include_once('galerii.html');
}


function vorm() {
	$bg_color="#ffcce6";
	if (isset($_POST['bg_color']) && $_POST['bg_color']!="") {
    $bg_color=htmlspecialchars($_POST['bg_color']);}
	
	$text="Siia tuleb sinu tekst.";
	if (!empty($_POST["text"])) {
    $text=htmlspecialchars($_POST["text"]);}
	
	$text_color="#b3005c";
	if (!empty($_POST["text_color"])) {
    $text_color=htmlspecialchars($_POST["text_color"]);}
	
	$border_style="solid";
	if (!empty($_POST["border_style"])) {
    $border_style=htmlspecialchars($_POST["border_style"]);}
	
	$border_color="#b3005c";
	if (!empty($_POST["border_color"])) {
    $border_color=htmlspecialchars($_POST["border_color"]);}
	
	$border_width="2px";
	if (!empty($_POST["border_width"])) {
    $border_width=htmlspecialchars($_POST["border_width"]);}
	
	$border_radius="0px";
	if (!empty($_POST["border_radius"])) {
    $border_radius=htmlspecialchars($_POST["border_radius"]);}



    include_once('vorm.html');

}



?>