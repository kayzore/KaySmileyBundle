<?php
// Kay/SmileyBundle/Services/Smiley.php

namespace Kay\SmileyBundle\Services;

class Smiley
{
    private $assets;

    public function __construct($assets)
    {
        $this->assets = $assets;
    }

    public function getSmileyListJson()
    {
        $smileyArray = $this->getSmileyList('Lettre');
        $smileyArraySymbole = $this->getSmileyList('SymboleForLettre');
        for($i = 0; count($smileyArray) != $i; $i++) {
            $data[] = array('name' => $smileyArray[$i], 'urlSmiley' => $this->assets->getUrl('/bundles/kaysmiley/images/'.$smileyArray[$i].'.png'), 'symbole' => $smileyArraySymbole[$i]);
        }
        $data = json_encode($data);
        return $data;
    }

    public function getSmileyList($type)
    {
        $smileyArray = array();
        if($type == 'Symbole'){
            $smileyArray = array(
                'o_O',
                'O_o',
                ':)',
                ':(',
                ':P',
                ':p',
                ':D',
                ':O',
                ':o',
                ';)',
                ':3'
            );
        }
        elseif($type == 'Lettre'){
            $smileyArray = array(
                'choque2',
                'choque2-inverse',
                'happy1',
                'bad1',
                'langue1',
                'big-happy1',
                'choque1',
                'clin-doeil1',
                'mignon1'
            );
        }
        elseif($type == 'SymboleForLettre'){
            $smileyArray = array(
                'o_O',
                'O_o',
                ':)',
                ':(',
                ':P',
                ':D',
                ':O',
                ';)',
                ':3'
            );
        }
        return $smileyArray;
    }

    public function checkSmiley($texte){
        $smileyArray = $this->getSmileyList('Symbole');
        $smileyImgArray = array(
            ' <img src="'.$this->assets->getUrl('/bundles/kaysmiley/images/choque2.png').'" class="kaySmileyImg">',
            ' <img src="'.$this->assets->getUrl('/bundles/kaysmiley/images/choque2-inverse.png').'" class="kaySmileyImg">',
            ' <img src="'.$this->assets->getUrl('/bundles/kaysmiley/images/happy1.png').'" class="kaySmileyImg">',
            ' <img src="'.$this->assets->getUrl('/bundles/kaysmiley/images/bad1.png').'" class="kaySmileyImg">',
            ' <img src="'.$this->assets->getUrl('/bundles/kaysmiley/images/langue1.png').'" class="kaySmileyImg">',
            ' <img src="'.$this->assets->getUrl('/bundles/kaysmiley/images/langue1.png').'" class="kaySmileyImg">',
            ' <img src="'.$this->assets->getUrl('/bundles/kaysmiley/images/big-happy1.png').'" class="kaySmileyImg">',
            ' <img src="'.$this->assets->getUrl('/bundles/kaysmiley/images/choque1.png').'" class="kaySmileyImg">',
            ' <img src="'.$this->assets->getUrl('/bundles/kaysmiley/images/choque1.png').'" class="kaySmileyImg">',
            ' <img src="'.$this->assets->getUrl('/bundles/kaysmiley/images/clin-doeil1.png').'" class="kaySmileyImg">',
            ' <img src="'.$this->assets->getUrl('/bundles/kaysmiley/images/mignon1.png').'" class="kaySmileyImg">'
        );
        $texteFormat = str_replace($smileyArray, $smileyImgArray, $texte);
        return $texteFormat;
    }
}