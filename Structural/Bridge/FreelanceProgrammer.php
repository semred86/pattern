<?php


namespace Patters\Structural\Bridge;


class FreelanceProgrammer extends Programmer
{

    public function earnMoney()
    {
        echo "Получаем оплату за выполненный заказ";
    }
}