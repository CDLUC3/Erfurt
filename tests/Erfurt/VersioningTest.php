<?php
require_once 'test_base.php';
require_once 'Erfurt/Versioning.php';

/**
 * Test class for Erfurt_Versioning.
 * Generated by PHPUnit on 2008-12-18 at 21:54:10.
 */
class Erfurt_VersioningTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Erfurt_Versioning
     * @access protected
     */
    protected $_object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     *
     * @access protected
     */
    protected function setUp()
    {
        $this->_object = new Erfurt_Versioning();
    }
    
    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     *
     * @access protected
     */
    protected function tearDown()
    {
    }

    public function testIsVersioningEnabledByDefault() 
    {
        $this->assertTrue($this->_object->isVersioningEnabled());
    }
    
    public function testIsVersioningEnabledAfterDisabled()
    {
        $this->_object->enableVersioning(false);
        $this->assertFalse($this->_object->isVersioningEnabled());
    }
    
    public function testIsVersioningEnabledAfterEnabledWithNoParam() 
    {
        $this->_object->enableVersioning();
        $this->assertTrue($this->_object->isVersioningEnabled());
    }
    
    public function testIsVersioningEnabledAfterEnabledWithParamTrue()
    {
        $this->_object->enableVersioning(true);
        $this->assertTrue($this->_object->isVersioningEnabled());
    }
    
    public function testIsActionStartedByDefault()
    {
        $this->assertFalse($this->_object->isActionStarted());
    }
    
    public function testIsActionStartedAfterStartAction()
    {
        $this->_object->startAction(Erfurt_Versioning::STATEMENT_ADDED);
        
        $this->assertTrue($this->_object->isActionStarted());
    }
    
    public function testIsActionStartedAfterStartAndEndAction()
    {
        $this->_object->startAction(Erfurt_Versioning::STATEMENT_REMOVED);
        $this->_object->endAction();
        
        $this->assertFalse($this->_object->isActionStarted());
    }
    
    public function testEndActionWithoutStartAction()
    {
        try {
            $this->_object->endAction();
            
            // Should not happen if exception is thrown as expected.
            $this->fail();
        } catch (Exception $e) {
            // If we are here everything went right... so we do nothing.
        }
    }
    
    public function testStartActionWhileActionIsRunning()
    {
        try {
            $this->_object->startAction(Erfurt_Versioning::STATEMENT_ADDED);
            
            // The following should fail.
            $this->_object->startAction(Erfurt_Versioning::STATEMENT_REMOVED);
            $this->fail();
        } catch (Exception $e) {
            // If we are here everything went right... so we do nothing.
        }
    }
    
    /**
     * @todo Implement testGetLastModifiedForResource().
     */
    public function testGetLastModifiedForResource() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testGetHistoryForModel().
     */
    public function testGetHistoryForModel() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testGetHistoryForResource().
     */
    public function testGetHistoryForResource() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testGetHistoryForUser().
     */
    public function testGetHistoryForUser() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testSetLimit().
     */
    public function testSetLimit() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testOnAddStatement().
     */
    public function testOnAddStatement() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testOnAddMultipleStatements().
     */
    public function testOnAddMultipleStatements() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testOnDeleteMatchingStatements().
     */
    public function testOnDeleteMatchingStatements() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testOnDeleteMultipleStatements().
     */
    public function testOnDeleteMultipleStatements() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testRollbackAction().
     */
    public function testRollbackAction() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }
}
