<?php

$name = $argv[1];
include "configFront.php";

$path = "/Users/Samark/Sites/public/mk-front/";

define("new_dir", $path);
define("REPLACE", $name);
define("REPLACE_SM", strtolower($name));
define("REPLACE_SNC", from_camel_case($name));
define("REPLACE_URL", urlGen(REPLACE_SNC));
#define("PREFIX", $prefix);
define('providers', $providers);

#$criterias = replacePath($path_file['criterias']);
#define("CRITERIA", $criterias);

writefile($path, 'max.txt', 'maxcacompuer');
expand($path_file);
appendRoute($newRoute);
coppyView($view);

function writefile($path, $name)
{
    // file_put_contents(filename, data)
    $date = date('Y-m-d H:i:s');
    file_put_contents($path . $name, "max: " . $date . "\r\n", FILE_APPEND);
}

function appendRoute($pathRoute)
{
    $currentpaht = getcwd() . "/front/";
    $new_file = replaceFile($currentpaht . "NewRoute.php");

    file_put_contents(new_dir . $pathRoute, $new_file . "\r\n \r\n", FILE_APPEND);
}

function coppyView($path)
{
    $currentpath = getcwd() . "/view/";
    foreach (scandir($currentpath) as $key => $value) {

        if (is_file($currentpath . $value)) {
            $new_file = replaceFile($currentpath . $value);
            $update_file_path = writeTmpReal($new_file, $value);
            bb($update_file_path);

            $new_path = new_dir . $path;
            // bb($new_path);
            copyfilesView($new_path, $update_file_path, $value);
            bb($path . $value);
        }

    }

}
# check file exists

function checkFileExixt($file_name = '', $path)
{
    return (is_dir($path) or file_exists($path . $filename));
}
# file applend
function apped($file, $data)
{
    file_put_contents($file, $data . "\r\n", FILE_APPEND);
}

function expand($path_file)
{
    $currentpaht = getcwd() . "/front/";
    // echo $currentpaht;exit;
    foreach (scandir($currentpaht) as $key => $value) {

        if (is_file($currentpaht . "/" . $value)) {
            $_remove = str_replace([
                "{replace}",
                ".php",
                'Create',
                'Update',
                'Delete',
                'GetUpdate',
                'GetDetail',
                '',
            ], "", $value);

            $new_file_name = str_replace(["{replace}", ".php"], "", $value);

            $interfaces = '';
            $repos = '';
            foreach ($path_file as $pkey => $pvalue) {
                // bb($_remove);
                if ($_remove == "PostAjaxRequest") {
                    if (strstr($_remove, $pkey)) {
                        bb($_remove);
                    }
                    // bb($pkey);

                }
                if (strstr($_remove, $pkey)) {

                    $new_file = replaceFile($currentpaht . "/" . $value);
                    // bb($new_file);exit();

                    $update_file_path = writeTmp($new_file, REPLACE . $new_file_name);
                    // bb($update_file_path);exit();

                    $new_path = replacePath($pvalue);
                    $new_path = new_dir . $new_path;
                    bb($new_path . $new_file_name);
                    copyfiles($new_path, $update_file_path, REPLACE . $new_file_name);

                }
            }
            // coppyFIle();
        }
        // debug(file($currentpaht."\\".$value),1,1);
    }
}

function bb($txt)
{
    echo $txt . "\r\n";
}
function checkstring($str, $check)
{
    if (strpos($a, 'are') !== false) {
        echo 'true';
    }
}

function replaceFile($file_name)
{
    // bb(REPLACE_URL);exit;
    $file = file_get_contents($file_name);
    #$file = str_replace(["{prefix}"], PREFIX, $file);
    $file = str_replace(["{replace}"], REPLACE, $file);
    $file = str_replace(["{replace_sm}"], REPLACE_SM, $file);
    $file = str_replace(["{replace_snc}"], REPLACE_SNC, $file);
    $file = str_replace(["{replace_url}"], REPLACE_URL, $file);
    #$file = str_replace(["{criterias}"], CRITERIA, $file);

    return $file;
}
function replacePath($path)
{
    #$path = str_replace(["{prefix}"], PREFIX, $path);
    $path = str_replace(["{replace}"], REPLACE, $path);
    $path = str_replace(["{name}"], REPLACE, $path);
    return $path;
}
function writeTmp($data, $file_name = 'providers')
{
    if (!is_dir(getcwd() . "/tmp")) {
        mkdir('tmp', 0777, true);
    }
    $tmp_path = getcwd() . "/tmp/" . $file_name . ".php";
    file_put_contents($tmp_path, $data);
    return $tmp_path;
}
function copyfiles($path, $file, $new_name)
{
    if (!is_dir($path)) {
        mkdir($path, 0777, true);
    }
    copy($file, $path . $new_name . ".php");
}
function copyfilesView($path, $file, $new_name)
{
    if (!is_dir($path)) {
        mkdir($path, 0777, true);
    }
    copy($file, $path . $new_name);
}
function writeTmpReal($data, $file_name)
{
    if (!is_dir(getcwd() . "/tmp/" . REPLACE . "/")) {
        mkdir('tmp/' . REPLACE . '/', 0777, true);
    }
    $tmp_path = getcwd() . "/tmp/" . REPLACE . "/" . $file_name;
    file_put_contents($tmp_path, $data);
    return $tmp_path;
}

function writeProvider($inter, $repos)
{
    $providers = str_replace("{interfaces}", $inter, providers);
    $providers = str_replace("{storage}", $repos, providers);
    writeTmp($providers, 'providers' . REPLACE);

}
function debug($data, $v = false, $e = false)
{
    echo "<pre>";
    print_r($data);
    echo "\r\n";
    echo "</pre>";
    if ($v == true) {
        var_dump($data);
    }

    if ($e == true) {
        exit('DEBUG !');
    }

}
function from_camel_case($input)
{
    preg_match_all('!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $input, $matches);
    $ret = $matches[0];
    foreach ($ret as &$match) {
        $match = $match == strtoupper($match) ? strtolower($match) : lcfirst($match);
    }
    return implode('_', $ret);
}
function urlGen($input)
{
    return str_replace("_", '-', $input);
}
