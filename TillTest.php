<?php
require_once './Till.php';

class TillTest extends \PHPUnit\Framework\TestCase
{
    public function testTillEmpty()
    {
        $till = new Till();
        $this->assertEquals(0,$till->getTotal());
    }

    public function testOneBakedBeans()
    {
        $till = new Till();
        $till->scanItem("Baked Beans");
        $this->assertEquals(75,$till->getTotal());
    }

    public function testOneSpaghettiHoops()
    {
        $till = new Till();
        $till->scanItem("Spaghetti Hoops");
        $this->assertEquals(80, $till->getTotal());
    }

    public function testBOGOF()
    {
        $till = new Till();
        $till->scanItem("Baked Beans");
        $till->scanItem("Baked Beans");
        $this->assertEquals(75, $till->getTotal());
    }

    public function testThreeBakedBeans()
    {
        $till = new Till();
        $till->scanItem("Baked Beans");
        $till->scanItem("Baked Beans");
        $till->scanItem("Baked Beans");
        $this->assertEquals(150, $till->getTotal());

    }

    public function testFourBakedBeans()
    {
        $till = new Till();
        $till->scanItem("Baked Beans");
        $till->scanItem("Baked Beans");
        $till->scanItem("Baked Beans");
        $this->assertEquals(150, $till->getTotal());

    }

   public function testBTGTHP()
    {
        $till = new Till();
        $till->scanItem("Spaghetti Hoops");
        $till->scanItem("Spaghetti Hoops");
        $till->scanItem("Spaghetti Hoops");
        $this->assertEquals(200, $till->getTotal());
    }

    public function testTwoBTGTHP()
    {
        $till = new Till();
        $till->scanItem("Spaghetti Hoops");
        $till->scanItem("Spaghetti Hoops");
        $till->scanItem("Spaghetti Hoops");
        $till->scanItem("Spaghetti Hoops");
        $till->scanItem("Spaghetti Hoops");
        $till->scanItem("Spaghetti Hoops");
        $this->assertEquals(400, $till->getTotal());
    }

    public function testTwoBeansThreeHoops()
    {
        $till = new Till();
        $till->scanItem("Baked Beans");
        $till->scanItem("Baked Beans");
        $till->scanItem("Spaghetti Hoops");
        $till->scanItem("Spaghetti Hoops");
        $till->scanItem("Spaghetti Hoops");
        $this->assertEquals(275, $till->getTotal());
    }

}