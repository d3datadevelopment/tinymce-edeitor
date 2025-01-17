<?php

/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright (C) 2022 Marat Bedoev, bestlife AG
 * @copyright (C) 2023 O3-Shop (https://www.o3-shop.com)
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author    D3 Data Development - Daniel Seifert <info@shopmodule.com>
 * @link      https://www.oxidmodule.com
 */

declare(strict_types=1);

namespace O3\TinyMCE\Application\Core\TinyMCE\Options;

use O3\TinyMCE\Application\Model\Constants;
use OxidEsales\Eshop\Core\Exception\FileException;
use OxidEsales\Eshop\Core\Registry;

class BaseUrl extends AbstractOption
{
    protected string $key = 'base_url';

    /**
     * @return string
     */
    public function get(): string
    {
        try {
            return Registry::getConfig()->getActiveView()->getViewConfig()->getModuleUrl(
                Constants::OXID_MODULE_ID,
                'out/tinymce/'
            );
        } catch (FileException) {
            return '';
        }
    }

    /**
     * @return bool
     */
    public function isQuoted(): bool
    {
        return true;
    }
}
