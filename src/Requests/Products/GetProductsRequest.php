<?php

declare(strict_types=1);

namespace CaesarGustav\MauveApi\Requests\Products;

use Saloon\Enums\Method;
use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\Contracts\HasRequestPagination;
use Saloon\PaginationPlugin\Contracts\Paginatable;
use Saloon\PaginationPlugin\OffsetPaginator;

class GetProductsRequest extends Request implements HasRequestPagination, Paginatable
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/products';
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
