<?php
/**
 * Created by PhpStorm.
 * User: lpc8
 * Date: 8/20/14
 * Time: 9:28 AM
 */
class User {
    protected  $a;

    function __construct()
    {
        $a=100;
        echo $a;
    }
    public function info()
    {
        return $this;
    }
}

class PracticeTest extends TestCase{

    public function testItWorks(){
            $this->assertTrue(true);


    }
    public function testHellowWorld()
    {

        $greeting="Hello World";
        $this->assertTrue($greeting==="Hello World",$greeting);
        echo "hello";
    }

    public function testAssertEquals()
    {
        $greeting = "Hello World";
        $value1 = 0;
        $value2 = null;
        $this->assertEquals("Hello World",$greeting);
        $this->assertEquals(0,$value1);
        $this->assertEquals(0,$value2);
        $this->assertEquals(null,$value2);


    }

        public function testAssertSame()
        {

            $value1=0;
            $value2=null;
            $this->assertSame(0,$value1);
            $this->assertSame(null,$value2);
            //$this->assertSame(0,$value2); false
        }
        public function testAssertContains()
        {
            $name=["shuvrow","rashedul","bhuiyan"];
            $this->assertContains("shuvrow",$name);

        }
        public function testAssertArrayHasKey()
        {
            $name=
                ['parents'=>'joe',
                    'children' =>['mike','teasy']];
            $this->assertArrayHasKey('parents',$name);
        }

        public function testAssertInternalType()
        {
            $number=9;
            $this->assertInternalType('integer',$number);

        }
        public function testInstanceOf()
        {
            $user_object = new User();
            $this->assertInstanceOf('User',$user_object->info());

        }

}