<?php

/**
 * Plugin Name: Rekognition Plugin
 * Plugin URI: http://www.chinmayamission.com/wp-content/plugin/wp_rekognition
 * Version: 0.1
 * Author: Radhika
 * Author URI: http://www.chinmayamission.com
 * License: GPL2
 */





require('vendor/autoload.php');
//require('vendor/aws/aws-sdk-php/compatibility-test.php');

use Aws\Credentials\CredentialProvider;
use Aws\Rekognition\RekognitionClient;
use Aws\Exception\AwsException;


$client= getClient();
getCollection($client);



function getClient () {
	$bucketName = 'examplebucket24';
	$client = new RekognitionClient([
    	'region'      => 'us-west-2',
    	'version'     => 'latest',
    	'credentials' => [
        'key'    => 'AKIAJOZIHRQ22SGRNNEA',
        'secret' => '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'
    	]
	]);	
 	return $client;

}



function getCollection($client){
	/*try {
	    $result = $client->getBucketCors([
	        'Bucket' => $bucketName, // REQUIRED
	    ]);
	    var_dump($result);
	    print_r($result);
	} catch (AwsException $e) {
	    // output error message if fails
	    error_log($e->getMessage());
	}*/
			
	$result = $client->listCollections([
    'MaxResults' => 2,
]);
	print_r($result);
}

?>
