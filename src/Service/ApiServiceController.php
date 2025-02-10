<?php
namespace App\Service;

use Symfony\Flex\Response;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class ApiServiceController extends AbstractController
    {
        private const URL = "https://ghibli.rest/films";
        private HttpClientInterface $client;

        public function __construct(HttpClientInterface $client)
        {
            $this -> client = $client;
        }

        public function getAll():Array
        {
            $response = json_decode($this -> client->request('GET', self::URL)->getContent());
            return $response;
        }

        public function getOne($id):Response 
        {
            $response = json_decode($this -> client->request('GET', self::URL . $id)->getContent());
            return $response;
        }
    }
?>