<?php

namespace OmerKamcili\Sadmin\Components\Generic;

use Illuminate\Support\Facades\View;

/**
 * Class TableProgress
 *
 * @package OmerKamcili\Sadmin\Components\Generic
 */
class TableProgress
{

    /**
     * @var
     */
    public $items;

    /**
     * @var string
     */
    private $view = 'component/table-buttons';

    /**
     * TableProgress constructor.
     */
    public function __construct()
    {

        $this->view = config('sadmin.theme') . '/' . $this->view;

    }

    /**
     * @param string $url
     * @param string $icon
     * @param string $colorType
     * @param string $class
     */
    public function addItem(string $url, string $icon, string $colorType, string $class = ''): void
    {

        $this->items[] = [
            'url'       => $url,
            'icon'      => $icon,
            'colorType' => $colorType,
            'class'     => $class,
        ];

    }

    /**
     * @return mixed
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param mixed $data
     *
     * @return string
     */
    public function render($data = null): string
    {

        $items = $this->getItems();

        foreach ($items as $key => $foo) {

            $url = $items[$key]['url'];

            foreach ($data as $dataKey => $dataValue) {

                $url = str_replace('{' . $dataKey . '}', $dataValue, $url);

            }

            $items[$key]['url'] = $url;

        }

        return View::make($this->view, ['items' => $items])->render();

    }


}