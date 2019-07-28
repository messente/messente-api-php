# Messente API PHP Library

Run tests using `vendor/bin/phpspec run`.

Use the library in a project.

- Create a new composer project.
- Install the library.
- Install libraries that provide objects that implement `Psr\Http\Client\ClientInterface` and `Psr\Http\Message\RequestFactoryInterface`.
  - For example `Buzz\Client\Curl` and `Nyholm\Psr7\Factory\Psr17Factory`.
- Initialize and use the API.

```php
require_once __DIR__.'/vendor/autoload.php';
use Messente\Api\Configuration;
use Messente\Api\BlacklistApi;
use Nyholm\Psr7\Factory\Psr17Factory;
use Buzz\Client\Curl;

$config = new Configuration('YOUR_MESSENTE_API_USERNAME', 'YOUR_MESSENTE_API_PASSWORD');

$factory = new Psr17Factory();
$client = new Curl($factory);
$api = new BlacklistApi($config, $client, $factory);

try {
    $response = $api->fetchBlacklist();
    echo $response.PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling fetchBlacklist: ', $e, PHP_EOL;
}
```
