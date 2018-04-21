<?php
include 'GenfileInterface.php';
include 'GenerateFile.php';

function dump($data)
{
    print_r($data);
}

$namespace = $argv[1];
// $namespace = $_GET['arg'];
$path = "/Users/Samark/Sites/public/poc-genfile/";
$genfile = new samark\genfile\GenerateFile($namespace);
$genfile->setPath($path);
$genfile->excute();
dump($genfile);
