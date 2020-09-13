# :wrench: lightweight-PHP-Boilerplate
A lightweight PHP boilerplate and customizable code-foundation for building secure and dynamic websites with ease.  

---

## :nut_and_bolt: Preparation
First of all, clone or download the repository and rename the two template files:  
```
git clone https://github.com/RundesBalli/lightweight-PHP-Boilerplate.git
cd ./lightweight-PHP-Boilerplate
mv ./public/inc/config.template.php ./public/inc/config.php
mv ./public/src/template.template.tpl ./public/src/template.tpl
```
Then fill in the variables, array elements and placeholders in both files and replace the image files in `public/src` with your own logo and header graphics.  

---

## :eyes: Style
The HTML- and CSS-Template isn't styled at all. It's only the basic skeleton. You have to add your own style.  

---

## :question: How to use?
### :scroll: index.php
To add some pages to your website, you have to extend the `$pageArray` in the `public/index.php`.
```php
$pageArray = array(
  'start'      => 'start.php',
  'foobar'     => 'foobar.php',
  '404'        => '404.php',
  '403'        => '403.php',
  'somePage'   => 'somePage.php'
);
```
If you want the page to be displayed in the navigation, you have to extend the `$nav`:
```php
$nav.= "<a href='/somePage'".($getp == "somePage" ? $a : NULL).">Some other page</a>".PHP_EOL;
```
### :clipboard: Pages
To create a new page, you can simply copy the `public/inc/start.php` or the `public/inc/foobar.php`. If you want to have a page title added to your template title, you have to set it with the `$title` variable. If the page should have it's own og-tags, you can overwrite the `$ogMeta` array from the config file as shown in `public/inc/foobar.php`.

---

## :blush: That's it!
