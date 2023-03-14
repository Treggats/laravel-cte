<?php declare(strict_types=1);

namespace Staudenmeir\LaravelCte\Connections;

use SingleStore\Laravel\Connect\Connection;

final class SinglestoreConnection extends Connection
{
    use CreatesQueryBuilder;
}
