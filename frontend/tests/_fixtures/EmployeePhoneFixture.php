<?php


namespace app\tests\_fixtures;


use yii\test\ActiveFixture;

class EmployeePhoneFixture extends ActiveFixture
{
    public $tableName = '{{%sql_employee_phones}}';
    public $dataFile = '@frontend-tests/_fixtures/data/employee_phones.php';
}