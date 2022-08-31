<?php


namespace Patters\Creational\Builder;


class Director
{
    /**
     * @var SQLQueryBuilder
     */
    private SQLQueryBuilder $builder;

    /**
     * Директор работает с любым экземпляром строителя, который передаётся ему
     * клиентским кодом. Таким образом, клиентский код может изменить конечный
     * тип вновь собираемого продукта.
     */
    public function __construct(SQLQueryBuilder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * Директор может строить несколько вариаций продукта, используя одинаковые
     * шаги построения.
     */
    public function buildMinimalQuery(): void
    {
        $this->builder->select("users", ["name", "email", "password"])
            ->limit(2, 3);
    }

    public function buildFullFeaturedQuery(): void
    {
        $this->builder->select("users", ["name", "email", "password"])
            ->where("age", 18, ">")
            ->where("age", 30, "<")
            ->limit(10, 20);
    }

    /**
     * @return SQLQueryBuilder
     */
    public function getBuilder(): SQLQueryBuilder
    {
        return $this->builder;
    }
}