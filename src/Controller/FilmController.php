<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\ApiServiceController;


#[Route('/')]
class FilmController extends AbstractController
{
    #[Route(name: 'index' , methods: ["GET"])]
    public function index(HttpClientInterface $client , ApiServiceController $api):Response
    {
        $films = $api -> getAll($client);
        return $this -> render ('home.html.twig' , [
            'films' => $films
        ]);
    }

    #[Route('/show/{id}' ,name: 'get_one_movie',  methods:['GET'] )]
    public function show($id ,HttpClientInterface $client):Response
    {
        $response = $client->request('GET','https://ghibli.rest/films?id=' . $id);
        return $this ->  render('home.html.twig' ,[
            'films' => json_decode($response->getContent())
        ]);
    }
}
?>