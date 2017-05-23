<?php
require_once 'PHPUnit/Autoload.php';

/**
 * This test class will test various miscelanious cases.
 *
 * @since May 19 2017
 */
class StructureTest extends PHPUnit_Framework_TestCase {
    /**
     * This test makes sure the required files and dirtectories exist.
     *
     * @since May 19 2017
     */
    public function testProjectStructure() {
        // Test directory structure
        $this->assertDirectoryExists(__DIR__ . DS . '..' . DS . 'content');
        $this->assertDirectoryExists(__DIR__ . DS . '..' . DS . 'thumbs');

        // Test required content files
        $this->assertFileExists(__DIR__ . DS . '..' . DS . 'content' . DS . 'site.txt');
    }
}
