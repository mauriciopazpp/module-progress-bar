<?php
/**
 * @author kiri
 * @date 1/4/15
 */

namespace Mpaz\ProgressBar\Model;

interface ConfigInterface
{
    /**
     * @param string $type
     *
     * @return string
     */
    public function getThemeFileName($type = '');

    /**
     * @param string $type
     *
     * @return string
     */
    public function getCustomCSS($type = '');

    /**
     * @return bool
     */
    public function isFrontendEnabled();
}
