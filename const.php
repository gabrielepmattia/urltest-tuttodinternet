<?php
// META
$description = "Multiple urls tester free online tool by tuttodinternet";
$tags = "url, checker, tester, online, tool, status, code, multiple, textarea, 404, 301, redirect, free, dead, links, broken, testa, testare, url, multipli";
$ver = "1.1.1";

// URLS TESTED
$links_tested = "links_tested.txt";
$old_links_tested = file_get_contents($links_tested);

// REQUEST COUNTER
$req_old_link ="request.txt";
$req_old = file_get_contents($req_old_link);

// SETTINGS
$max_urls_allow = 50;

// TITLE REWRITE
$title = "";
$dir = $_SERVER['REQUEST_URI'];

 // Check if Changelog Page
$check = strpos($dir, 'changelog');
 if ( $check != NULL) {  $title1 = "| Changelog " ; }
 
 // Check if Changelog Page
$check = strpos($dir, 'check');
 if ( $check != NULL) {  $title1 = "| Results " ; }
 
 
?>