<?php

use Patters\Creational\Builder\Director;
use Patters\Creational\Builder\MysqlQueryBuilder;
use Patters\Creational\Builder\PostgresQueryBuilder;
use Patters\Creational\Builder\SQLQueryBuilder;

require_once "../../vendor/autoload.php";

function clientCode(Director $director)
{
    $builder = $director->getBuilder();
    echo $builder->select('user', ['*'])
        ->limit(3, 5)
        ->getSQL();

    echo "\n";

    $director->buildMinimalQuery();
    echo $builder->getSQL();

    echo "\n";

    $director->buildFullFeaturedQuery();
    echo $builder->getSQL();

}


/**
 * Приложение выбирает подходящий тип строителя запроса в зависимости от текущей
 * конфигурации или настроек среды.
 */
// if ($_ENV['database_type'] == 'postgres') {
//     $builder = new PostgresQueryBuilder(); } else {
//     $builder = new MysqlQueryBuilder(); }
//
// clientCode($builder);


echo "Testing MySQL query builder:\n";
clientCode(new Director(new MysqlQueryBuilder()));

echo "\n\n";

echo "Testing PostgresSQL query builder:\n";
clientCode(new Director(new PostgresQueryBuilder()));