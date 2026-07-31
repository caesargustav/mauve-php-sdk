<?php

declare(strict_types=1);

namespace CaesarGustav\MauveApi\Requests\Categories;

use Saloon\Enums\Method;
use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\Contracts\HasRequestPagination;
use Saloon\PaginationPlugin\OffsetPaginator;

class GetCategoryProductsRequest extends Request implements HasRequestPagination
{
    protected Method $method = Method::GET;

    public function __construct(protected readonly int $id) {}

    public function resolveEndpoint(): string
    {
        return '/categories/'.$this->id.'/products';
    }

    public function paginate(Connector $connector): OffsetPaginator
    {
        return new class(connector: $connector, request: $this) extends OffsetPaginator
        {
            protected ?int $perPageLimit = 500;

            protected function isLastPage(Response $response): bool
            {
                return $this->perPageLimit !== $response->collect('products')->count();
            }

            protected function getPageItems(Response $response, Request $request): array
            {
                return $response->json('products') ?? [];
            }
        };
    }
}
