<?php

declare(strict_types=1);

namespace CaesarGustav\MauveApi\Requests\Documents;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateDocumentLineRequest extends Request
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(protected readonly string $documentNumber) {}

    public function resolveEndpoint(): string
    {
        return '/documents/'.$this->documentNumber.'/document_lines';
    }
}
