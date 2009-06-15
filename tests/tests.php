<?php

require_once 'PHPUnit/Framework.php';
require_once 'PHPUnit/Extensions/PhptTestSuite.php';
require_once 'Tiki_Render_Test.php';
require_once 'Tiki_Parser_Test.php';
 
class Framework_AllTests
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('PHPUnit Framework');
 
        /* almost all phpt tests are failling and need to be fixed
           before uncommenting the code below
        $phptTests = new PHPUnit_Extensions_PhptTestSuite('.');
        $suite->addTestSuite($phptTests); */

        $suite->addTestSuite('Text_Wiki_Parser_Tiki_Test');
        $suite->addTestSuite('Text_Wiki_Render_Tiki_Test');
 
        return $suite;
    }
}

?>