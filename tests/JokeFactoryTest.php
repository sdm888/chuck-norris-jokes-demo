<?php

declare(strict_types=1);

namespace Sdm888\ChuckNorrisJokes\Tests;

use Sdm888\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke(): void
    {
        $jokes = new JokeFactory(['This is a joke']);
        $joke = $jokes->getRandomJoke();

        self::assertSame('This is a joke', $joke);
    }

    /** @test */
    public function is_returns_a_predefined_joke(): void
    {
        $chuckNorrisJokes = [
            'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
            'Chuck Norris counted to infinity... Twice.',
            'Guns don\'t kill people. Chuck Norris kills People.',
        ];

        $jokes = new JokeFactory();
        $joke = $jokes->getRandomJoke();

        self::assertContains($joke, $chuckNorrisJokes);
    }
}
