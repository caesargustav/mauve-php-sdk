<?php

declare(strict_types=1);

namespace CaesarGustav\MauveApi\Requests\Products;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdateOrCreateProductPricesRequest extends Request
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return '/prices';
    }
}
