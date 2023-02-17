<?php

declare(strict_types=1);

namespace Sdm888\ChuckNorrisJokes\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Sdm888\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke(): void
    {
        $mock = new MockHandler([
            new Response(
                200,
                [],
                '{"value":"Chuck Norris beat the pebbles from the cement."}'
            ),
        ]);

        $handlerStack = HandlerStack::create($mock);
        $client = new Client(['handler' => $handlerStack]);

        $jokes = new JokeFactory($client);
        $joke = $jokes->getRandomJoke();

        self::assertSame('Chuck Norris beat the pebbles from the cement.', $joke);
    }
}
