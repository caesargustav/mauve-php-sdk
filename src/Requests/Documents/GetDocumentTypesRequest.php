<?php

declare(strict_types=1);

namespace CaesarGustav\MauveApi\Requests\Documents;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetDocumentTypesRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/document_types';
    }
}
