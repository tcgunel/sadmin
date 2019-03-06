<?php

namespace OmerKamcili\Sadmin;

use OmerKamcili\Sadmin\Components\Profile\ProfileMenu;
use OmerKamcili\Sadmin\Components\Sidebar\SideMenu;

/**
 * Interface BaseInterface
 *
 * @package OmerKamcili\Sadmin
 */
interface BaseInterface
{

    /**
     * @return SideMenu
     */
    public function sideBarMenu(): SideMenu;

    /**
     * @return ProfileMenu
     */
    public function profileMenu(): ProfileMenu;


}



