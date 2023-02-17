<?php

declare(strict_types=1);

namespace Sdm888\ChuckNorrisJokes;

use GuzzleHttp\Client;

class JokeFactory
{
    protected const API_ENDPOINT = 'https://api.chucknorris.io/jokes/random';

    protected ?Client $client;

    public function __construct(?Client $client = null)
    {
        $this->client = $client ?? new Client();
    }

    public function getRandomJoke(): string
    {
        $response = $this->client->get(self::API_ENDPOINT);

        $content = json_decode($response->getBody()->getContents(), true);

        return $content['value'];
    }
}
