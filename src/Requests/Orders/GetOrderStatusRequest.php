<?php

namespace CaesarGustav\MauveApi\Requests\Orders;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetOrderStatusRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(protected readonly string $orderNumber) {}

    public function resolveEndpoint(): string
    {
        return '/orders/'.$this->orderNumber.'/status';
    }
}
