<?php

declare(strict_types=1);

namespace CaesarGustav\MauveApi\Requests\Orders;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateOrderPaymentRequest extends Request
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(protected readonly string $orderNumber) {}

    public function resolveEndpoint(): string
    {
        return '/orders/'.$this->orderNumber.'/payments';
    }
}
