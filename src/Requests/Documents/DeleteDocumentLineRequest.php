<?php

namespace CaesarGustav\MauveApi\Requests\Documents;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteDocumentLineRequest extends Request
{
    protected Method $method = Method::DELETE;

    public function __construct(protected readonly string $documentNumber, protected readonly int $lineNumber) {}

    public function resolveEndpoint(): string
    {
        return '/documents/'.$this->documentNumber.'/document_lines/'.$this->lineNumber;
    }
}
