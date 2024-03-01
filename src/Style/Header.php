<?php

declare(strict_types=1);

namespace CakeLte\Style;

use CakeLte\Style\StyleTrait;

class Header implements StyleInterface
{
    use StyleTrait;
    private $_name = 'header';

    public const STYLE_PRIMARY = 'primary';
    public const STYLE_SECONDARY = 'secondary';
    public const STYLE_INFO = 'info';
    public const STYLE_SUCCESS = 'success';
    public const STYLE_DANGER = 'danger';
    public const STYLE_WARNING = 'warning';
    public const STYLE_WHITE = 'white';
    public const STYLE_DARK = 'dark';
    /** @deprecated STYLE_BLACK is deprecated, use STYLE_DARK insted*/
    public const STYLE_BLACK = self::STYLE_DARK;

    public const STYLE_DARK_PRIMARY = 'dark_primary';
    public const STYLE_DARK_SECONDARY = 'dark_secondary';
    public const STYLE_DARK_INFO = 'dark_info';
    public const STYLE_DARK_SUCCESS = 'dark_success';
    public const STYLE_DARK_DANGER = 'dark_danger';
    public const STYLE_DARK_WARNING = 'dark_warning';
    public const STYLE_DARK_WHITE = 'dark_white';

    public const STYLE_LIGHT_PRIMARY = 'light_primary';
    public const STYLE_LIGHT_SECONDARY = 'light_secondary';
    public const STYLE_LIGHT_INFO = 'light_info';
    public const STYLE_LIGHT_SUCCESS = 'light_success';
    public const STYLE_LIGHT_DANGER = 'light_danger';
    public const STYLE_LIGHT_WARNING = 'light_warning';
    public const STYLE_LIGHT_WHITE = 'light_white';

    private const CSS_CLASSES = [
        self::STYLE_PRIMARY => 'navbar-primary navbar-light',
        self::STYLE_SECONDARY => 'navbar-secondary navbar-light',
        self::STYLE_INFO => 'navbar-info navbar-light',
        self::STYLE_SUCCESS => 'navbar-success navbar-light',
        self::STYLE_DANGER => 'navbar-danger navbar-light',
        self::STYLE_WARNING => 'navbar-warning navbar-light',
        self::STYLE_WHITE => 'navbar-white navbar-light',
        self::STYLE_DARK => 'navbar-dark navbar-light',

        self::STYLE_DARK_PRIMARY    => 'navbar-primary navbar-light',
        self::STYLE_DARK_SECONDARY  => 'navbar-secondary navbar-light',
        self::STYLE_DARK_INFO       => 'navbar-info navbar-light',
        self::STYLE_DARK_SUCCESS    => 'navbar-success navbar-light',
        self::STYLE_DARK_DANGER     => 'navbar-danger navbar-light',
        self::STYLE_DARK_WARNING    => 'navbar-warning navbar-light',
        self::STYLE_DARK_WHITE      => 'navbar-white navbar-light',

        self::STYLE_LIGHT_PRIMARY    => 'navbar-primary navbar-dark',
        self::STYLE_LIGHT_SECONDARY  => 'navbar-secondary navbar-dark',
        self::STYLE_LIGHT_INFO       => 'navbar-info navbar-dark',
        self::STYLE_LIGHT_SUCCESS    => 'navbar-success navbar-dark',
        self::STYLE_LIGHT_DANGER     => 'navbar-danger navbar-dark',
        self::STYLE_LIGHT_WARNING    => 'navbar-warning navbar-dark',
        self::STYLE_LIGHT_WHITE      => 'navbar-white navbar-dark',
    ];
}
