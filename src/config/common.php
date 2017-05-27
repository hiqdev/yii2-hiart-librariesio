<?php
/**
 * Libraries.io API implementation for yii2-hiart.
 *
 * @link      https://github.com/hiqdev/yii2-hiart-librariesio
 * @package   yii2-hiart-librariesio
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

return empty($params['hiart-librariesio.enabled']) ? [] : [
    'components' => [
        $params['hiart-librariesio.dbname'] => array_filter([
            'class' => \hiqdev\hiart\librariesio\Connection::class,
            'requestClass' => $params['hiart-librariesio.requestClass'] ?: $params['hiart.requestClass'],
            'name' => $params['hiart-librariesio.dbname'],
            'auth' => $params['hiart-librariesio.auth'],
        ]),
    ],
    'container' => [
        'singletons' => [
            \hiqdev\hiart\librariesio\ConnectionInterface::class => function () {
                return Yii::$app->get(Yii::$app->params['hiart-librariesio.dbname']);
            },
        ],
    ],
];
