<?php

namespace CaesarGustav\MauveApi\Requests\Documents;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetDocumentPdfRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(protected readonly string $documentNumber) {}

    public function resolveEndpoint(): string
    {
        return '/documents/'.$this->documentNumber.'/pdf';
    }
}
