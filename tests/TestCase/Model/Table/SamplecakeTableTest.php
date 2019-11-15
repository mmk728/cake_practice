<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SamplecakeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SamplecakeTable Test Case
 */
class SamplecakeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SamplecakeTable
     */
    public $Samplecake;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Samplecake'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Samplecake') ? [] : ['className' => SamplecakeTable::class];
        $this->Samplecake = TableRegistry::getTableLocator()->get('Samplecake', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Samplecake);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
