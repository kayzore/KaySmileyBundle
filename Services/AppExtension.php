<?php
// Kay/SmileyBundle/Services/AppExtension.php

namespace Kay\SmileyBundle\Services;

class AppExtension extends \Twig_Extension
{
    /**
     * @return array
     */
    public function getFilters()
    {
        return array(
            'nl2brSmiley' => new \Twig_Filter_Method($this, 'nl2brSmileyFilter',
                array('is_safe' => array('html'))
            ),
        );
    }

    /**
     * @param $texte
     * @return string
     */
    public function nl2brSmileyFilter($texte)
    {
        return nl2br($texte);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_extension';
    }
}