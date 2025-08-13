<?php

declare(strict_types=1);

namespace CaesarGustav\MauveApi\Connectors;

use Saloon\Http\Auth\BasicAuthenticator;
use Saloon\Http\Connector;

class MauveConnector extends Connector
{
    public function __construct(public readonly string $username, public readonly string $password) {}

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
}
