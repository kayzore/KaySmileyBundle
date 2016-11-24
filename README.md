SmileyBundle
============

[![Latest Stable Version](https://poser.pugx.org/kay/smileybundle/v/stable)](https://packagist.org/packages/kay/smileybundle)
[![Total Downloads](https://poser.pugx.org/kay/smileybundle/downloads)](https://packagist.org/packages/kay/smileybundle)
[![License](https://poser.pugx.org/kay/smileybundle/license)](https://packagist.org/packages/kay/smileybundle)

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of SmileyBundle:

```console
$ composer require kay/smileybundle dev-master
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Kay\SmileyBundle\KaySmileyBundle(),
        );
    }
}
```

Step 3: Usage
-------------------------

Read the full documentation of SmileyBundle [In the wiki](https://github.com/kayzore/KaySmileyBundle/wiki)