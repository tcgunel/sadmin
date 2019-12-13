<?php

namespace OmerKamcili\Sadmin\Components\Generic\Paginations;

use OmerKamcili\Sadmin\Components\Interfaces\PaginationInterface;
use Illuminate\Support\Facades\View;

/**
 * Class CustomPagination
 * @package OmerKamcili\Sadmin\Components\Generic\Paginations
 */
class CustomPagination implements PaginationInterface
{

    /**
     * @var
     */
    public $nextPage = '';

    /**
     * @var
     */
    public $previousPage = '';

    /**
     * @var
     */
    public $pages;

    /**
     * @var
     */
    public $currentPage;

    /**
     * @return string
     */
    public function render(): string
    {

        View::share('paginator', $this);

        return View::make('component/pagination')->render();

    }


    /**
     * @return string
     */
    public function getNextPage(): string
    {

        return $this->nextPage;

    }

    /**
     * @return string
     */
    public function getPreviousPage(): string
    {

        return $this->previousPage;

    }

    /**
     * @return array
     */
    public function getPages(): array
    {

        return $this->pages;

    }

    /**
     * @param mixed $nextPage = ['label' => 'string', 'url' => 'string']
     */
    public function setNextPage($nextPage): void
    {

        $this->nextPage = $nextPage;

    }

    /**
     * @param mixed $previousPage = ['label' => 'string', 'url' => 'string']
     */
    public function setPreviousPage($previousPage): void
    {

        $this->previousPage = $previousPage;

    }

    /**
     * @param mixed $pages = array[1 => 'url', 2 => 'url']
     *
     */
    public function setPages($pages): void
    {

        $this->pages = $pages;

    }

    /**
     * @return int
     */
    public function getCurrentPage(): int
    {

        return $this->currentPage;

    }

    /**
     * @param mixed $currentPage
     */
    public function setCurrentPage($currentPage): void
    {

        $this->currentPage = $currentPage;

    }

    /**
     * @return string
     */
    public function __toString(): string
    {

        return $this->render();

    }


}