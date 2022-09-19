<?php


namespace Patters\Structural\Composite\menu;


class MenuGetter
{
    /**
     * @param array $dataset
     * @return Menu
     */
    public static function getMenu(array $dataset): Menu
    {
        $menu = new Menu('menu');
        foreach ($dataset as &$item) {
            if (!isset($item['element'])) {
                $item['element'] = new MenuElement($item['name']);
            }
            if (!$item['parent']) {
                $menu->add($item['element']);
            } else {
                $parent = &$dataset[$item['parent']];
                if (!isset($parent['element'])) {
                    $parent['element'] = new MenuElement($parent['name']);
                }
                $parent['element']->add($item['element']);
            }
        }
        return $menu;
    }
}