<?php
/**
 * @author Mauricio Paz Pacheco
 * @copyright Copyright © 2020 Mpaz. All rights reserved.
 * @package Mpaz_ProgressBar
 */

namespace Mpaz\ProgressBar\Block\Plugin\Frontend\Page;

use \Mpaz\ProgressBar\Block\Plugin\AbstractPace;
use \Mpaz\ProgressBar\Block\Page\RequireJs\Interceptor;

class RequireJs extends AbstractPace
{
    /**
     * There is also the possibility to add a block to head.additional but then
     * pace would be added a little bit later to the page instead of right after
     * the <head> tag.
     *
     * @param Interceptor $subject
     * @param string $html
     *
     * @return string
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterToHtml(Interceptor $subject, $html)
    {
        return ($this->_isAllowedFrontend($subject) ? $this->_getPaceHtml() : '') . PHP_EOL . $html;
    }
}
