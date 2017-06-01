<?php
/**
 * Libraries.io API implementation for yii2-hiart.
 *
 * @link      https://github.com/hiqdev/yii2-hiart-librariesio
 * @package   yii2-hiart-librariesio
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\hiart\librariesio;

/**
 * Libraries.io API implementation.
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class ActiveQuery extends \hiqdev\hiart\ActiveQuery
{
    public function count($q = '*', $db = null)
    {
        $this->count = $q;

        $response = $this->limit(1)->searchBatch($db);
        $totals = $response->getHeader('total');

        return reset($totals);
    }
}
