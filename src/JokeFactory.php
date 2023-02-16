<?php

declare(strict_types=1);

namespace Sdm888\ChuckNorrisJokes;

class JokeFactory
{
    /** @var array<string> */
    protected array $jokes = [
        'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
        'Chuck Norris counted to infinity... Twice.',
        'Guns don\'t kill people. Chuck Norris kills People.',
    ];

    /**
     * @param array<string>|null $jokes
     */
    public function __construct(?array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke(): string
    {
        return $this->jokes[
            array_rand($this->jokes)
        ];
    }
}
