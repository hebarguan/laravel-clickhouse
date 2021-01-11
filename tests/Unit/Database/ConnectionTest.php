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
        $config =  [
            'host' => '10.51.8.39',
            'port' => '8123',
            'database' => 'za_dws',
            'username' => 'finance_test',
            'password' => 'zhenai.com',
        ];
        $connection = new Connection($config);

        var_dump($connection->query()->getConnection()->select("select ftime , contract_prefix, split_type, order_time, begin_time, split_month, order_id, memberid, cnt_month_days, product_id, sum(split_amt) split_amt from mytest where ftime >= '20210104' and ftime <= '20210110' group by ftime, contract_prefix, split_type, order_time, begin_time, split_month, order_id, memberid, cnt_month_days, product_id order by ftime desc limit 50 offset 0"));
    }
}
