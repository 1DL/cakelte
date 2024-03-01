<?php

declare(strict_types=1);

namespace CakeLte\Style;

use CakeLte\Style\StyleTrait;

class SidebarHeader implements StyleInterface
{
    use StyleTrait;
    private $_name = 'sidebar_header';

    public const STYLE_BG_DARK_PRIMARY      = 'navbar-primary navbar-light';
    public const STYLE_BG_DARK_SECONDARY    = 'navbar-secondary navbar-light';
    public const STYLE_BG_DARK_INFO         = 'navbar-info navbar-light';
    public const STYLE_BG_DARK_SUCCESS      = 'navbar-success navbar-light';
    public const STYLE_BG_DARK_DANGER       = 'navbar-danger navbar-light';
    public const STYLE_BG_DARK_WARNING      = 'navbar-warning navbar-light';
    public const STYLE_BG_DARK_WHITE        = 'navbar-white navbar-light';

    public const STYLE_BG_LIGHT_PRIMARY     = 'navbar-primary navbar-dark';
    public const STYLE_BG_LIGHT_SECONDARY   = 'navbar-secondary navbar-dark';
    public const STYLE_BG_LIGHT_INFO        = 'navbar-info navbar-dark';
    public const STYLE_BG_LIGHT_SUCCESS     = 'navbar-success navbar-dark';
    public const STYLE_BG_LIGHT_DANGER      = 'navbar-danger navbar-dark';
    public const STYLE_BG_LIGHT_WARNING     = 'navbar-warning navbar-dark';
    public const STYLE_BG_LIGHT_WHITE       = 'navbar-white navbar-dark';

    public const STYLE_BRAND_LIGHT          = 'text-light';
    public const STYLE_BRAND_DARK           = 'text-dark';
}
