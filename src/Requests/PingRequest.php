<?php

namespace CaesarGustav\MauveApi\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class PingRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/ping';
    }
}
