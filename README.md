# PHP API Client for Mauve Mailorder API

[API Documentation](https://api.mauve.de/swagger-ui)

## Usage:

```php
<?php

require_once 'vendor/autoload.php';

use CaesarGustav\MauveApi\Connectors\MauveConnector;
use CaesarGustav\MauveApi\Requests\GetProductsRequest;

$mauve = new MauveConnector(username: 'username', password: 'password');
$request = new GetProductsRequest;

$response = $mauve->send($request);
```

See `src/Requests` for all possible requests. The payload can be found in the API documentation by Mauve.
