# Fork for minimal adjustments in STYLE options and fixing missing translation functions

# CakeLTE: AdminLTE plugin for CakePHP 4.x

## Getting Started

### Dependencies

- [FriendsOfCake/bootstrap-ui](https://github.com/FriendsOfCake/bootstrap-ui), transparently use Bootstrap 4 with CakePHP 4.
- [AdminLTE 3.2](https://adminlte.io/), bootstrap 4 admin theme.

### Installing

You can install this plugin into your CakePHP application using [composer](https://getcomposer.org).

The recommended way to install composer packages is:

```bash
composer require arodu/cakelte
```

## Configuration

You can load the plugin using the shell command:

```bash
bin/cake plugin load CakeLte
```

Or you can manually add the loading statement in the `src/Application.php` file of your application:

```php
public function bootstrap(){
    parent::bootstrap();
    $this->addPlugin('CakeLte');
}
```

## How to use

Copy the file `vendor/arodu/cakelte/config/cakelte.php` to `config/cakelte.php`
```bash
cp vendor/arodu/cakelte/config/cakelte.php config/cakelte.php
```
In this file you can change the cakelte configuration options


use trait into `src/View/AppView.php` _(Recomended)_
```php
namespace App\View;

use Cake\View\View;
use CakeLte\View\CakeLteTrait;

class AppView extends View{
  use CakeLteTrait;

  public $layout = 'CakeLte.default';

  public function initialize(): void{
      parent::initialize();
      $this->initializeCakeLte();
      //...
  }
}
```

or you can extends from CakeLteView

```php
namespace App\View;

use Cake\View\View;
use CakeLte\View\CakeLteView;

class AppView extends CakeLteView{

  public function initialize(): void{
    parent::initialize();
    //...
  }
}
```

Options layouts

- `CakeLte.default`
- `CakeLte.login`
- `CakeLte.top-nav`

### Create code from bake

```bash
bin/cake bake all [command] -t CakeLte

bin/cake bake template [command] -t CakeLte login
bin/cake bake template [command] -t CakeLte register
bin/cake bake template [command] -t CakeLte recovery
```

### To modify the template you can copy one or all the files within your project

Replace the files elements

- Layouts
  - `src/templates/layout/default.php`
  - `src/templates/layout/login.php`
  - `src/templates/layout/top-nav.php`
- Content
  - `src/templates/element/content/header.php`
- Header navbar
  - `src/templates/element/header/main.php`
  - `src/templates/element/header/menu.php`
  - `src/templates/element/header/messages.php`
  - `src/templates/element/header/notifications.php`
  - `src/templates/element/header/search-default.php`
  - `src/templates/element/header/search-block.php`
- Footer
  - `src/templates/element/footer/main.php`
- Left sidebar
  - `src/templates/element/sidebar/main.php`
  - `src/templates/element/sidebar/menu.php`
  - `src/templates/element/sidebar/search.php`
  - `src/templates/element/sidebar/user.php`
- Right sidebar
  - `src/templates/element/aside/main.php`

## Page debug

Link to debug

```php
echo $this->Html->link(__('CakeLTE debug page'), '/cake_lte/debug' );

// {your-url}/cake_lte/debug
```

![Page Debug with default layout](docs/page-debug_default.png)

![Page Debug with top-nav layour](docs/page-debug_top-nav.png)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details
