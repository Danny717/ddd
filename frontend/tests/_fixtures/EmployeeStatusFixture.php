<?php


namespace app\tests\_fixtures;


use yii\test\ActiveFixture;

class EmployeeStatusFixture extends ActiveFixture
{
    public $tableName = '{{%sql_employee_statuses}}';
    public $dataFile = '@frontend-tests/_fixtures/data/employee_statuses.php';
}