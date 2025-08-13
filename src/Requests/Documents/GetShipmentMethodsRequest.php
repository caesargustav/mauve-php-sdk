<?php

declare(strict_types=1);

namespace CaesarGustav\MauveApi\Requests\Documents;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetShipmentMethodsRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/shipment_methods';
    }
}
