<?php

namespace CaesarGustav\MauveApi\Requests\Products;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetProductPricesRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(protected readonly string $sku) {}

    public function resolveEndpoint(): string
    {
        return '/prices/'.$this->sku;
    }
}
