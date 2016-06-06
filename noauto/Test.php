<?php

use COREPOS\pos\lib\FormLib;

class Test extends PHPUnit_Framework_TestCase
{
    public function testPlugin()
    {
        $obj = new MiscLogging();
    }

    public function testParser()
    {
        $p = new MiscLoggingParser();
        $this->assertEquals(false, $p->check('foo'));
        $this->assertEquals(true, $p->check('PLU'));

        $json = $p->parse('PLU');
        $this->assertEquals('goodBeep', $json['udpmsg']);
    }
}

