<?php

/**
 * Test class for Wootook_Object.
 * Generated by PHPUnit on 2011-09-01 at 11:24:52.
 */
class Test_Wootook_ObjectTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Wootook_Object
     */
    protected $_object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->_object = new Wootook_Object();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @todo Implement testSetData().
     */
    public function testSetData()
    {
        $this->assertAttributeEmpty('_data', $this->_object);

        $this->_object->setData('test', true);
        $expected = array('test' => true);
        $this->assertAttributeEquals($expected, '_data', $this->_object);

        $this->_object->setData('test', 'testing');
        $expected = array('test' => 'testing');
        $this->assertAttributeEquals($expected, '_data', $this->_object);
    }

    /**
     * @requires testSetData
     */
    public function testGetData()
    {
        $this->_object->setData('test', 'testing');

        $this->assertEquals('testing', $this->_object->getData('test'));

        $this->_object->setData('test', true);
        $this->assertTrue($this->_object->getData('test'));

        $this->assertNull($this->_object->getData('testing'));
    }

    /**
     * @requires testSetData
     * @requires testGetData
     */
    public function testGetAllDatas()
    {
        $this->_object->setData('test', 'testing');

        $expected = array('test' => 'testing');
        $this->assertEquals($expected, $this->_object->getAllDatas());

        $this->_object->setData('test', true);
        $expected = array('test' => true);
        $this->assertEquals($expected, $this->_object->getAllDatas());
    }

    /**
     * @requires testSetData
     * @requires testGetData
     */
    public function testHasData()
    {
        $this->_object->setData('test', 'testing');

        $this->assertTrue($this->_object->hasData('test'));
        $this->assertFalse($this->_object->hasData('testing'));
    }

    /**
     * @requires testSetData
     */
    public function testAddData()
    {
        $this->_object->setData('test', 'testing');

        $expected = array(
            'test'     => 'testing',
            'testing'  => true,
            'legacies' => false
            );

        $this->_object->addData(array(
            'testing' => true,
            'legacies' => false
            ));
        $this->assertAttributeEquals($expected, '_data', $this->_object);

        $expected = array(
            'test'     => 'legacies',
            'testing'  => false,
            'legacies' => 'Wootook_Object'
            );

        $this->_object->addData($expected);
        $this->assertAttributeEquals($expected, '_data', $this->_object);
    }

    /**
     * @requires testSetData
     */
    public function testUnsetData()
    {
        $this->_object->setData('test', 'testing');
        $this->_object->setData('testing', true);
        $this->_object->setData('removed', 'me!');
        $this->_object->setData('legacies', false);

        $expected = array(
            'test'     => 'testing',
            'testing'  => true,
            'legacies' => false
            );

        $this->_object->unsetData('removed');
        $this->assertAttributeEquals($expected, '_data', $this->_object);
    }

    /**
     * @todo Implement testClearData().
     */
    public function testClearData()
    {
        $this->_object->setData('test', 'testing');
        $this->_object->setData('testing', true);
        $this->_object->setData('removed', 'me!');
        $this->_object->setData('legacies', false);

        $expected = array(
            'test'     => 'testing',
            'testing'  => true,
            'legacies' => false
            );

        $this->_object->clearData();
        $this->assertAttributeEmpty('_data', $this->_object);
    }

    /**
     * @requires testSetData
     * @requires testHasData
     */
    public function testOffsetExists()
    {
        $this->_object->setData('test', 'testing');

        $this->assertTrue(isset($this->_object['test']));
    }

    /**
     * @requires testSetData
     * @requires testGetData
     */
    public function testOffsetGet()
    {
        $this->_object->setData('test', 'testing');

        $this->assertEquals('testing', $this->_object['test']);
    }

    /**
     * @requires testGetData
     * @requires testSetData
     */
    public function testOffsetSet()
    {
        $this->_object['test'] = 'testing';

        $this->assertEquals('testing', $this->_object->getData('test'));
    }

    /**
     * @requires testSetData
     * @requires testGetData
     */
    public function testOffsetUnset()
    {
        $this->_object->setData('test', 'testing');

        unset($this->_object['test']);

        $this->assertAttributeEmpty('_data', $this->_object);
        $this->assertNull($this->_object->getData('test'));
    }
}
