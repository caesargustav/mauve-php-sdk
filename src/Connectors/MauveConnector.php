<?php

declare(strict_types=1);

namespace CaesarGustav\MauveApi\Connectors;

use Saloon\CachePlugin\Contracts\Cacheable;
use Saloon\CachePlugin\Contracts\Driver;
use Saloon\CachePlugin\Traits\HasCaching;
use Saloon\Http\Auth\BasicAuthenticator;
use Saloon\Http\Connector;

class MauveConnector extends Connector implements Cacheable
{
    use HasCaching;

    public function __construct(public readonly string $username, public readonly string $password, public readonly Driver $cacheDriver, public readonly int $cacheExpiryInSeconds = 3600) {}

    public function resolveBaseUrl(): string
    {
        return 'https://api.mauve.de';
    }

    protected function defaultAuth(): BasicAuthenticator
    {
        return new BasicAuthenticator($this->username, $this->password);
    }

    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
    }

    public function resolveCacheDriver(): Driver
    {
        return $this->cacheDriver;
    }

    public function cacheExpiryInSeconds(): int
    {
        return $this->cacheExpiryInSeconds;
    }
}
