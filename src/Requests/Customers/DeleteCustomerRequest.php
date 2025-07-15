<?php

namespace CaesarGustav\MauveApi\Requests\Customers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteCustomerRequest extends Request
{
    protected Method $method = Method::DELETE;

    public function __construct(protected readonly string $customerNumber) {}

    public function resolveEndpoint(): string
    {
        return '/customers/'.$this->customerNumber;
    }
}
