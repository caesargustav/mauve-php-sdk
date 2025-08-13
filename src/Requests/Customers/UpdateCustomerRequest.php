<?php

declare(strict_types=1);

namespace CaesarGustav\MauveApi\Requests\Customers;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdateCustomerRequest extends Request
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function __construct(protected readonly string $customerNumber) {}

    public function resolveEndpoint(): string
    {
        return '/customers/'.$this->customerNumber;
    }
}
