<?php
$keyid = 'AKIAJPMFMDTKJSVJKWFQ';
$secret = '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';
require 'vendor/autoload.php';
include 'functions.php';
use Aws\S3\S3Client;
$obkey = genstring();
$path = $_FILES['image']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);
$bucket = 'images.fourlevelsinfighter.com';
$keyname = "$obkey.$ext";

// $filepath should be absolute path to a file on disk						
$filepath = '/var/www/html/gotyourtoothpaste.com/images/test.jpg';
// Instantiate the client.
$s3 = S3Client::factory([
    'version' => 'latest',
    'region'  => 'us-west-1',
    'credentials' => array(
                 'key'    => $keyid,
                 'secret' => $secret,),
]);

// Upload a file.
$result = $s3->putObject(array(
    'Bucket'       => $bucket,
    'Key'          => $keyname,
    'SourceFile'   => $filepath,
    'ContentType'  => 'text/plain',
    'ACL'          => 'public-read',
    'StorageClass' => 'REDUCED_REDUNDANCY',
    'Metadata'     => array(    
        'param1' => 'value 1',
        'param2' => 'value 2'
    )
));

echo $result['ObjectURL'];
