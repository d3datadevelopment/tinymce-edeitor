<?php

/**
 * This file is part of O3-Shop TinyMCE editor module.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, version 3.
 *
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with O3-Shop.  If not, see <http://www.gnu.org/licenses/>
 *
 * @copyright  Copyright (c) 2022 OXID Marat Bedoev, bestlife AG
 * @copyright  Copyright (c) 2023 O3-Shop (https://www.o3-shop.com)
 * @license    https://www.gnu.org/licenses/gpl-3.0  GNU General Public License 3 (GPLv3)
 */

namespace O3\TinyMCE\Application\Controller\Admin;

use OxidEsales\Eshop\Application\Controller\Admin\AdminController;
use OxidEsales\Eshop\Core\Output;

class TinyHelper extends AdminController
{
    protected $_sThisTemplate = "TinyHelper.tpl";

    protected $_errors;
    protected $_content;

    public function render()
    {
        /** @var Output $oOutput */
        $oOutput = oxNew(Output::class);
        $oOutput->setCharset($this->getCharSet());
        $oOutput->setOutputFormat(Output::OUTPUT_FORMAT_JSON);
        $oOutput->sendHeaders();
        $oOutput->output('errors', $this->_errors);
        $oOutput->output('content', $this->_content);
        exit;
    }
}