<?php

declare(strict_types=1);

namespace CaesarGustav\MauveApi\Requests\Orders;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateOrderRequest extends Request
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/orders';
    }
}
