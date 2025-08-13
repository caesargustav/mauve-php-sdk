<?php

declare(strict_types=1);

namespace CaesarGustav\MauveApi\Requests\Customers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetCustomerRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(protected readonly string $customerNumber) {}

    public function resolveEndpoint(): string
    {
        return '/customers/'.$this->customerNumber;
    }
}
