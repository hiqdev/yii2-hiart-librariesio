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
        $query = Project::find()->where(['q' => 'jquery'])->limit(2);
        $this->checkFound($query);
    }

    public function checkFound($query)
    {
        $models = $query->all();

        $this->assertSame(2, count($models));
        $this->assertInstanceOf(Project::class, reset($models));
    }
}
