<?php

namespace TCGunel\Sadmin;

use TCGunel\Sadmin\Components\Profile\ProfileMenu;
use TCGunel\Sadmin\Components\Sidebar\SideMenu;

/**
 * Interface BaseInterface
 *
 * @package TCGunel\Sadmin
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



