<?php

namespace CaesarGustav\MauveApi\Requests\Documents;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateDocumentParcelLabelRequest extends Request
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(protected readonly string $documentNumber) {}

    public function resolveEndpoint(): string
    {
        return '/documents/'.$this->documentNumber.'/parcel_labels';
    }
}
