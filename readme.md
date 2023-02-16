# Chuck Norris Jokes Demo Library

Create Chuck Norris jokes in your next PHP project.

## Installation

Require the package using Composer:

```bash
composer require sdm888/chuck-norris-jokes-demo
```

## Usage

```php
use Sdm888\ChuckNorrisJokes\JokeFactory;

$jokes = new JokeFactory();

$joke = $jokes->getRandomJoke();
```

## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](./LICENSE.md)