<?php
// Kay/SmileyBundle/Services/AppExtension.php

namespace Kay\SmileyBundle\Services;

use Kay\SmileyBundle\Services\Smiley;

class AppExtension extends \Twig_Extension
{
    private $smiley;

    public function __construct(Smiley $smiley)
    {
        $this->smiley = $smiley;
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        return array(
            'nl2brSmiley' => new \Twig_Filter_Method($this, 'nl2brSmileyFilter',
                array('is_safe' => array('html'))
            ),
            'dispSmiley' => new \Twig_Filter_Method($this, 'dispSmileyFilter',
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
     * @param $texte
     * @return string
     */
    public function dispSmileyFilter($texte)
    {
        $messageText = $this->smiley->checkSmiley($texte);
        return nl2br($messageText);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_extension';
    }
}