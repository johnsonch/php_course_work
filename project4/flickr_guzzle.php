<?php
    require 'vendor/autoload.php';

    use GuzzleHttp\Client;
    use GuzzleHttp\Post\PostBody;
    use GuzzleHttp\Stream\StreamInterface;
    use GuzzleHttp\Exception\RequestException;

    define('FLICKR_URL', 'https://api.flickr.com/services/feeds/photos_public.gne?format=json');

    $client = new Client();

    try{

        $response = $client->request('GET', FLICKR_URL, [ ]);
        echo "<pre>";
        print_r($response->getBody());
        echo "</pre>";
        $response_body = $response->getBody();
        $decoded_body = json_decode($response_body);

    } catch (RequestException $e){
        echo "HTTP Request failed\n";
        echo "<pre>";
        print_r($e->getRequest());
        echo "</pre>";
        if ($e->hasResponse()) {
            echo $e->getResponse();
        }
    }

?>
