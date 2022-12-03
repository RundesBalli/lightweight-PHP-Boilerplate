# :wrench: lightweight-PHP-Boilerplate
A lightweight PHP boilerplate and customizable code-foundation for building secure and dynamic websites with ease.  

---

## :nut_and_bolt: Preparation
First of all, clone or download the repository and rename the config file:  
```
git clone https://github.com/RundesBalli/lightweight-PHP-Boilerplate.git
cd ./lightweight-PHP-Boilerplate
mv ./includes/config.template.php ./includes/config.php
```
Put your configuration variables and/or sql credentials into this file. Then fill in the fields in the `includes/templates/template.tpl` file. Replace the image files in `public/assets/images` with your own logo and header graphics.  

---

## :eyes: Style
The HTML- and CSS-Template isn't styled at all. It's only the basic skeleton. You have to add your own style.  

---

## :question: How to use?
### :scroll: index.php
To add some pages to your website, you have to extend the `$routes` in the `includes/routing/routes.php`.
```php
$routes = array(
  'start'      => 'start.php',
  'foobar'     => 'foobar.php',
  '404'        => '404.php',
  '403'        => '403.php',
  'somePage'   => 'somePage.php'
);
```
If you want the page to be displayed in the navigation, you have to extend the `$nav` in `includes/generation/navigation.php`:
```php
$nav.= '<a href="/abc"'.($route == 'abc' ? $a : NULL).'>ABC</a>';
```
### :clipboard: Pages
To create a new page, you can simply copy the `pages/start.php` file. If you want to have a page title added to your template title, you have to set it with the `$title` variable.

---

## :smile: That's it!

---

### :keyboard: Issues and suggestions
Feel free to [open an issue](https://github.com/RundesBalli/lightweight-PHP-Boilerplate/issues/new) :blush:  
