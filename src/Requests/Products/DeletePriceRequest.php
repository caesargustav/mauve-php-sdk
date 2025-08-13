<?php

declare(strict_types=1);

namespace CaesarGustav\MauveApi\Requests\Products;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeletePriceRequest extends Request
{
    protected Method $method = Method::DELETE;

    public function __construct(protected readonly string $sku) {}

    public function resolveEndpoint(): string
    {
        return '/prices/'.$this->sku;
    }
}
