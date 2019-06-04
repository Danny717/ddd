<?php


namespace app\tests\unit\repositories;

use app\repositories\SqlEmployeeRepository;
use app\repositories\Hydrator;
use app\tests\_fixtures\EmployeeFixture;
use app\tests\_fixtures\EmployeePhoneFixture;
use app\tests\_fixtures\EmployeeStatusFixture;
use ProxyManager\Factory\LazyLoadingValueHolderFactory;

class SqlEmployeeRepositoryTest extends BaseRepositoryTest
{
    /**
     * @var \UnitTester
     */
    public $tester;

    public function _before()
    {
        $this->tester->haveFixtures([
            'employee' => EmployeeFixture::class,
            'phone' => EmployeePhoneFixture::class,
            'status' => EmployeeStatusFixture::class,
        ]);

        $this->repository = new SqlEmployeeRepository(\Yii::$app->db, new Hydrator(),new LazyLoadingValueHolderFactory());
    }
}