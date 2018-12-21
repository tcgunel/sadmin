<?php

namespace OmerKamcili\Sadmin;

use OmerKamcili\Sadmin\Components\Profile\SadminProfileMenu;
use OmerKamcili\Sadmin\Components\Sidebar\SadminSideMenu;

/**
 * Interface SadminBaseInterface
 *
 * @package OmerKamcili\Sadmin
 */
interface SadminBaseInterface
{

    /**
     * @return SadminSideMenu
     */
    public function sideBarMenu(): SadminSideMenu;

    /**
     * @return SadminProfileMenu
     */
    public function profilMenu(): SadminProfileMenu;


}



