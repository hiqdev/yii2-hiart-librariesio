<?php
/**
 * Libraries.io API implementation for yii2-hiart.
 *
 * @link      https://github.com/hiqdev/yii2-hiart-librariesio
 * @package   yii2-hiart-librariesio
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\hiart\librariesio\models;

use hiqdev\hiart\librariesio\ActiveRecord;

/**
 * Project.
 * See [documentation](https://libraries.io/api#project).
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class Project extends ActiveRecord
{
    public function rules()
    {
        return [
            ['name', 'string'],
            ['platform', 'string'],
            ['description', 'string'],
            ['homepage', 'url'],
            ['repository_url', 'url'],
            ['normalized_licenses', 'each', 'rule' => ['string']],
            ['rank', 'integer'],
            ['latest_release_published_at', 'datetime', 'timestampAttribute' => 'latest_release_published_at'],
            ['latest_release_number', 'string'],
            ['language', 'string'],
            ['status', 'string'],
            ['package_manager_url', 'url'],
            ['stars', 'integer'],
            ['forks', 'integer'],
            ['keywords', 'each', 'rule' => ['string']],
        ];
    }
}
