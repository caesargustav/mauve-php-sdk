<?php

namespace CaesarGustav\MauveApi\Requests\Orders;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateOrderPrescriptionImageRequest extends Request
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(protected readonly string $orderNumber) {}

    public function resolveEndpoint(): string
    {
        return '/orders/'.$this->orderNumber.'/prescription_images';
    }
}
