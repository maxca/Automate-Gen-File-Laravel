<?php

$name = $argv[1];
include "config.php";
// $path = "/Users/Samark/Sites/public/mk-front/";
// $path = "/Users/Samark/Sites/public/tsisfacebook/";
$path = "/Users/Samark/Sites/public/mk-api/";
// var_dump($path);exit;

define("new_dir", $path);
define("REPLACE", $name);
define("REPLACE_SM", strtolower($name));
define("REPLACE_SNC", fromCamelCase($name));
#define("PREFIX", $prefix);
define('providers', $providers);

#$criterias = replacePath($path_file['criterias']);
#define("CRITERIA", $criterias);

writefile($path, 'max.txt', 'maxcacompuer');
expand($path_file);
function writefile($path, $name)
{
    // file_put_contents(filename, data)
    file_put_contents($path . $name, 'test2' . "\r\n\r\n\r\n", FILE_APPEND);
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
    $currentpaht = getcwd() . "/app";
    // echo $currentpaht;exit;
    foreach (scandir($currentpaht) as $key => $value) {
        // bb($value);
        if (is_file($currentpaht . "/" . $value)) {
            $_remove = str_replace(["{replace}", ".php", 'Create', 'Update', 'Get', 'Delete'], "", $value);
            $new_file_name = str_replace(["{replace}", ".php"], "", $value);

            $interfaces = '';
            $repos = '';
            foreach ($path_file as $pkey => $pvalue) {
                // bb($pkey);
                // bb($_remove);
                if (strstr($pkey, $_remove)) {

                    $new_file = replaceFile($currentpaht . "/" . $value);
                    // bb($new_file);exit();

                    $update_file_path = writeTmp($new_file, REPLACE . $new_file_name);
                    // bb($update_file_path);exit();

                    $new_path = replacePath($pvalue);
                    $new_path = new_dir . $new_path;
                    // bb($new_path);exit();
                    // copyfiles($new_path, $currentpaht . "\\" . $value, "test" . $_remove);
                    if (strstr("model", $new_file_name)) {
                        copyfiles($new_path, $update_file_path, REPLACE);
                    } else {
                        copyfiles($new_path, $update_file_path, REPLACE . $new_file_name);
                    }

                    echo $currentpaht . $value . "\r\n";
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
    // bb($file_name);
    $file = file_get_contents($file_name);
    #$file = str_replace(["{prefix}"], PREFIX, $file);
    $file = str_replace(["{replace}"], REPLACE, $file);
    $file = str_replace(["{replace_sm}"], REPLACE_SM, $file);
    $file = str_replace(["{replace_snc}"], REPLACE_SNC, $file);
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
function fromCamelCase($input)
{
    preg_match_all('!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $input, $matches);
    $ret = $matches[0];
    foreach ($ret as &$match) {
        $match = $match == strtoupper($match) ? strtolower($match) : lcfirst($match);
    }
    return implode('_', $ret);
}
