<?php

namespace CaesarGustav\MauveApi\Requests\Categories;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetCategoryChildrenRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(protected readonly int $id) {}

    public function resolveEndpoint(): string
    {
        return '/categories/'.$this->id.'/children';
    }
}
