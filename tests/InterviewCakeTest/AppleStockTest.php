<?php

use InterviewCake\AppleStock;

class AppleStockTest extends PHPUnit_Framework_TestCase
{
    /**
     * appleStock plate instance.
     *
     * @var InterviewCake\AppleStock
     */
    private $appleStock;

    /**
     * Instantiate the InterviewCake.
     */
    public function setUp()
    {
        // Create a new Interview Cake instance.
        $this->appleStock = new AppleStock();
    }

    /**
     * Ensure that the Interview Cake can be resolved from the unit test
     */
    public function testInterviewCakeCanBeResolved()
    {
        $this->assertTrue($this->appleStock instanceof \InterviewCake\AppleStock);
    }

    /**
     * Ensure that Default value matches.
     */
    public function testDefaultValueMatches()
    {
        $stockPricesYesterday = [10, 7, 5, 8, 11, 9];
        $result = $this->appleStock->getMaxProfit($stockPricesYesterday);
        $this->assertEquals(6, $result);
    }
    /**
     * Ensure that Default value matches.
     */
    public function testNegativeProfitWhenPricesAreAlwaysFalling()
    {
        $stockPricesYesterday = [10, 9, 8, 5, 3, 2];
        $result = $this->appleStock->getMaxProfit($stockPricesYesterday);
        $this->assertEquals(-1, $result);
    }
}