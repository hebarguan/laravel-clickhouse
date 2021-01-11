<?php

declare(strict_types=1);

namespace ItStably\LaravelClickHouse\Tests\Database;

use PHPUnit\Framework\TestCase;
use ItStably\LaravelClickHouse\Database\Connection;
use ItStably\LaravelClickHouse\Database\Query\Builder;

class ConnectionTest extends TestCase
{
    public function testQuery()
    {
        $connection = new Connection(['host' => 'localhost']);

        $this->assertInstanceOf(Builder::class, $connection->query());
    }
}
