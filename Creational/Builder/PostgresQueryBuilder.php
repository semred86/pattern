<?php


namespace Patters\Creational\Builder;


class PostgresQueryBuilder extends MysqlQueryBuilder
{
    /**
     * Помимо прочего, PostgreSQL имеет несколько иной синтаксис LIMIT.
     */
    public function limit(int $start, int $offset): SQLQueryBuilder
    {
        parent::limit($start, $offset);

        $this->query->limit = " LIMIT " . $start . " OFFSET " . $offset;

        return $this;
    }

    // + тонны других переопределений...
}