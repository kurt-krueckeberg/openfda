<?php
declare(strict_types=1);
namespace LanguageTools;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;

class RestApi {

   protected Client $client;  

   private $headers = array();
 
   public function __construct(ConfigFile $c, ProviderID $id)
   {      
       $params = $c->get_config($id);
       
       $this->client = new Client( ['base_uri' => $params['base_uri']]);

       $this->headers =  $params['headers'];
   }

   public function request(string $method, string $route, array $options = array()) : string
   {
       $options['headers'] = $this->headers;
 
       $response = $this->client->request($method, $route, $options);

       return $response->getBody()->getContents();
   }
}