<?php


namespace app\tests\_fixtures;


use yii\test\ActiveFixture;

class EmployeeFixture extends ActiveFixture
{
    public $tableName = '{{%sql_employees}}';
    public $dataFile = '@frontend-tests/_fixtures/data/employees.php';
}