<?php

namespace Parse;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2013-08-08 at 17:04:07.
 */
class DataObjectTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var DataObject
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers Parse\DataObject::save
     * @todo   Implement testSave().
     */
    public function testSave() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Parse\DataObject::get
     */
    public function testGet() {
        // Get an array of all
        $collateralAll = new DataObject('Collateral');
        $pageOne = $collateralAll->get(5);
        $this->assertTrue(is_array($pageOne->results));
        $this->assertEquals(5, count($pageOne->results));
        $this->assertEquals(5, $pageOne->perPage);
        $this->assertEquals(1, $pageOne->page);
        $this->assertGreaterThan(5, $pageOne->count);
        
        $pageTwo = $collateralAll->get(5, 15);
        $this->assertTrue(is_array($pageTwo->results));
        $this->assertEquals(5, count($pageTwo->results));
        $this->assertEquals(5, $pageTwo->perPage);
        $this->assertEquals(4, $pageTwo->page);
        $this->assertGreaterThan(5, $pageTwo->count);
        
        // Get Specific
        $collateralSpecific = new DataObject('Collateral');
        $collateralSpecific->objectId = 'lCYTB4yye4';
        $collateralSpecific->get();
        
        $this->assertEquals('Dominion Game Rules', $collateralSpecific->FileName);
        
        $collateralWhere = new DataObject('Collateral');
        $collateralWhere->where('ManufacturerID', '1dCn8785mK');
        $collection = $collateralWhere->get();
        $this->assertTrue(is_array($collection->results));
        
        $this->assertEquals('Dominion Game Rules', $collection->results[0]->FileName);
        
    }

    /**
     * @covers Parse\DataObject::update
     * @todo   Implement testUpdate().
     */
    public function testUpdate() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Parse\DataObject::increment
     * @todo   Implement testIncrement().
     */
    public function testIncrement() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Parse\DataObject::decrement
     * @todo   Implement testDecrement().
     */
    public function testDecrement() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Parse\DataObject::delete
     * @todo   Implement testDelete().
     */
    public function testDelete() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Parse\DataObject::addInclude
     * @todo   Implement testAddInclude().
     */
    public function testAddInclude() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Parse\DataObject::where
     * @todo   Implement testWhere().
     */
    public function testWhere() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

}
