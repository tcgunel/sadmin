<?php

namespace TCGunel\Sadmin\Components\Generic;

use Illuminate\Support\Facades\View;

/**
 * Class TableProgress
 *
 * @package TCGunel\Sadmin\Components\Generic
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

        $this->view = 'sadmin::' . config('sadmin.theme') . '/' . $this->view;

    }

    /**
     * @param string $url
     * @param string $icon
     * @param string $colorType
     * @param string $class
     * @param string $target
     */
    public function addItem(string $url, string $icon, string $colorType, string $class = '', string $target = '')
    {

        $this->items[] = [
            'url'       => $url,
            'icon'      => $icon,
            'colorType' => $colorType,
            'class'     => $class,
            'target'    => $target,
        ];

    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param mixed $data
     *
     * @return string
     */
    public function render($data = null)
    {

        $items = $this->getItems();

        foreach ($items as $key => $foo) {

            $url = $items[$key]['url'];

            foreach ($data as $dataKey => $dataValue) {

                if (in_array(gettype($dataValue), ['boolean', 'integer', 'double', 'string', 'float'])) {

                    $url = str_replace('{' . $dataKey . '}', $dataValue, $url);

                }

            }

            $items[$key]['url'] = $url;

        }

        return View::make($this->view, ['items' => $items])->render();

    }


}
