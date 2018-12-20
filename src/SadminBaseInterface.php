<?php

namespace OmerKamcili\Sadmin;

use OmerKamcili\Sadmin\components\SadminProfileMenu;
use OmerKamcili\Sadmin\components\SadminSideMenu;

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



