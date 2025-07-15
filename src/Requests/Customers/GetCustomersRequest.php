<?php

namespace CaesarGustav\MauveApi\Requests\Customers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetCustomersRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/customers';
    }
}
