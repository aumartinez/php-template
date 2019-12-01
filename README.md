# php-template

An example of PHP templating techniques for static HTML

## Creating the template

Static HTML files are kept together in one single folder; not every element can be templated but from a view of most sites I've worked on we can keep the below templated elements:

1. Top HTML meta scripts, call to CSS files and JS scripts.
2. Top header sections which includes:
    - Top header section with site branding (logo) and social links
    - Navigation items
3. Page body content section
4. Page footer content section

Templated elements and page content elements are kept in different folders.

Pages are constructed with the <code>class-page.php</code> object as easy as just calling to each template constructor.

```php
<?php

require_once("inc/class-page.php");

$page = new Page();
$pageName = "home";

$page->titleExtra = "Home";

echo $page->getHtmlHead();
echo $page->getHtmlBody($pageName);
echo $page->getHtmlClose();

?>
```

Since the call to the templated elements is static no PHP script can be included in them, the class Page should be changed to include files instead of getting the file content string.

### Easter egg

Added a "collapsing" function using JS for the mobile navigation bar, initially thought that it could be done with CSS only, but you need to hard setup the height of the navigation menu to have the "transitioning" effect to work. Then JS is the best bet here (with legacy support for old browsers).

You may preview the result of this technique at:

https://accedo-gps.000webhostapp.com/demo/php-template/