<?php
namespace tests\unit\entities\Employee;
use app\entities\Employee\Events\EmployeeReinstated;
use app\entities\Employee\EmployeeBuilder;
use Codeception\Test\Unit;
class ReinstateTest extends Unit
{
    public function testSuccess()
    {
        $employee = EmployeeBuilder::instance()->archived()->build();
        $this->assertFalse($employee->isActive());
        $this->assertTrue($employee->isArchived());
        $employee->reinstate($date = new \DateTimeImmutable('2011-06-15'));
        $this->assertTrue($employee->isActive());
        $this->assertFalse($employee->isArchived());
        $this->assertNotEmpty($statuses = $employee->getStatuses());
        $this->assertTrue(end($statuses)->isActive());
        $this->assertNotEmpty($events = $employee->releaseEvents());
        $this->assertInstanceOf(EmployeeReinstated::class, end($events));
    }
    public function testNotArchived()
    {
        $employee = EmployeeBuilder::instance()->build();
        $this->expectExceptionMessage('Employee is not archived.');
        $employee->reinstate($date = new \DateTimeImmutable('2011-06-15'));
    }
}