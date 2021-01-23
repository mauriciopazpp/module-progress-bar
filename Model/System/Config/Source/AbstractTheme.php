<?php
/**
 * @author Mauricio Paz Pacheco
 * @copyright Copyright © 2020 Mpaz. All rights reserved.
 * @package Mpaz_ProgressBar
 */

namespace Mpaz\ProgressBar\Model\System\Config\Source;

use \Magento\Framework\Option\ArrayInterface;

abstract class AbstractTheme implements ArrayInterface
{
    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        $return = [];
        foreach ($this->toOptionArray() as $o) {
            $return[$o['value']] = $o['label'];
        }
        return $return;
    }
}
