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
class Connection extends \hiqdev\hiart\rest\Connection implements ConnectionInterface
{
    public $queryBuilderClass = QueryBuilder::class;

    public $baseUri = 'https://libraries.io/api';

    public static $dbname = 'librariesio';

    public $name = 'librariesio';

    public static function getDb($name = null, $class = ConnectionInterface::class)
    {
        return parent::getDb($name, $class);
    }
}
