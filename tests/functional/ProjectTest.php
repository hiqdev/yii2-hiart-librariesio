<?php
/**
 * Libraries.io API implementation for yii2-hiart.
 *
 * @link      https://github.com/hiqdev/yii2-hiart-librariesio
 * @package   yii2-hiart-librariesio
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\hiart\librariesio\tests\functional;

use hiqdev\hiart\librariesio\models\Project;

class ProjectTest extends \PHPUnit\Framework\TestCase
{
    public function testFindByName()
    {
        $query = Project::find()->where(['q' => 'jquery']);
        $this->checkFound($query);
    }

    public function checkFound($query)
    {
        $models = $query->all();

        $this->assertGreaterThan(1, count($models));
        $this->assertInstanceOf(Project::class, reset($models));
    }
}
