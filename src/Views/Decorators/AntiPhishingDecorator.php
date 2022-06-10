<?php

namespace Datamweb\AntiPhishing\Views\Decorators;

use CodeIgniter\View\ViewDecoratorInterface;

/**
* --------------------------------------------------------------------------
* CodeIgniter CodeIgniter Shield Anti Phishing language.
* --------------------------------------------------------------------------
*
* @package         shield-anti-phishing
* @collection      Best Datamweb Tools CI4(BDT-CI4)
* @author          Pooya Parsa Dadashi(@datamweb)
* @link            https://datamweb.ir
* @github_link     https://github.com/datamweb/shield-anti-phishing
* @since           Version 1.0.0
* @datepublic      2022-06-10 | 1401/03/20
* 
*/

class AntiPhishingDecorator implements ViewDecoratorInterface
{
    public static function decorate(string $html): string
    {
        // Modify the output here

        return $html;
    }
}