<?php

declare(strict_types=1);

namespace CaesarGustav\MauveApi\Requests\Products;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetAvailabilitiesRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/availabilities';
    }
}
