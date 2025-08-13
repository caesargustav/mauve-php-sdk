<?php

declare(strict_types=1);

namespace CaesarGustav\MauveApi\Requests\Products;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdateProductMetaTagsRequest extends Request
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function __construct(protected readonly string $sku) {}

    public function resolveEndpoint(): string
    {
        return '/products'.$this->sku.'/meta_tags';
    }
}
