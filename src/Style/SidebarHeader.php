<?php

declare(strict_types=1);

namespace CakeLte\Style;

use CakeLte\Style\StyleTrait;

class SidebarHeader implements StyleInterface
{
    use StyleTrait;
    private $_name = 'sidebar_header';

    public const STYLE_BG_DARK_PRIMARY = 'dark_primary';
    public const STYLE_BG_DARK_SECONDARY = 'dark_secondary';
    public const STYLE_BG_DARK_INFO = 'dark_info';
    public const STYLE_BG_DARK_SUCCESS = 'dark_success';
    public const STYLE_BG_DARK_DANGER = 'dark_danger';
    public const STYLE_BG_DARK_WARNING = 'dark_warning';
    public const STYLE_BG_DARK_WHITE = 'dark_white';

    public const STYLE_BG_LIGHT_PRIMARY = 'light_primary';
    public const STYLE_BG_LIGHT_SECONDARY = 'light_secondary';
    public const STYLE_BG_LIGHT_INFO = 'light_info';
    public const STYLE_BG_LIGHT_SUCCESS = 'light_success';
    public const STYLE_BG_LIGHT_DANGER = 'light_danger';
    public const STYLE_BG_LIGHT_WARNING = 'light_warning';
    public const STYLE_BG_LIGHT_WHITE = 'light_white';

    public const STYLE_BRAND_LIGHT = 'light';
    public const STYLE_BRAND_DARK = 'dark';

    private const CSS_CLASSES_BACKGROUND = [

        self::STYLE_BG_DARK_PRIMARY    => 'navbar-primary navbar-light',
        self::STYLE_BG_DARK_SECONDARY  => 'navbar-secondary navbar-light',
        self::STYLE_BG_DARK_INFO       => 'navbar-info navbar-light',
        self::STYLE_BG_DARK_SUCCESS    => 'navbar-success navbar-light',
        self::STYLE_BG_DARK_DANGER     => 'navbar-danger navbar-light',
        self::STYLE_BG_DARK_WARNING    => 'navbar-warning navbar-light',
        self::STYLE_BG_DARK_WHITE      => 'navbar-white navbar-light',

        self::STYLE_BG_LIGHT_PRIMARY    => 'navbar-primary navbar-dark',
        self::STYLE_BG_LIGHT_SECONDARY  => 'navbar-secondary navbar-dark',
        self::STYLE_BG_LIGHT_INFO       => 'navbar-info navbar-dark',
        self::STYLE_BG_LIGHT_SUCCESS    => 'navbar-success navbar-dark',
        self::STYLE_BG_LIGHT_DANGER     => 'navbar-danger navbar-dark',
        self::STYLE_BG_LIGHT_WARNING    => 'navbar-warning navbar-dark',
        self::STYLE_BG_LIGHT_WHITE      => 'navbar-white navbar-dark',
    ];

    private const CSS_CLASSES_BRAND = [
        self::STYLE_BRAND_LIGHT     => 'text-light',
        self::STYLE_BRAND_DARK      => 'text-dark',
    ];
}
