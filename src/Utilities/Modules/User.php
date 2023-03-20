<?php

namespace Ls\ClientAssistant\Utilities\Modules;

use Illuminate\Support\Collection;
use Ls\ClientAssistant\Core\API;
use Ls\ClientAssistant\Core\Contracts\Filterable;
use Ls\ClientAssistant\Core\Contracts\Searchable;
use Ls\ClientAssistant\Helpers\Response;

class User implements Filterable, Searchable
{
    public static function getUser(int $id, array $with = []): Collection
    {
        $response = API::guzzle()->get(API::uri('v1/users'), [
            's' => $id,
        ]);

        return Response::single($response);
    }

    public static function getUsers(array $with = [], int $perPage = 20)
    {

    }

    public static function filter(array $keyValues = [], array $with = [], int $perPage = 20, $orderBy = 'latest')
    {
        // TODO: Implement filter() method.
    }

    public static function search(string $keyword, array $columns = [], array $with = [], int $perPage = 20)
    {
        // TODO: Implement search() method.
    }
}