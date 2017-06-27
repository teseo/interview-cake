<?php
declare(strict_types=1);

namespace InterviewCake;


class AppleStock
{
    public function getMaxProfit(array $stockPricesYesterday): int
    {

        if (count($stockPricesYesterday) < 2) return -1;

        $minPrice = $stockPricesYesterday[0];
        $maxProfit = $stockPricesYesterday[1] - $stockPricesYesterday[0];

        $totalPrices = count($stockPricesYesterday);
        for ($i = 1; $i < $totalPrices; $i++) {

            $currentPrice = $stockPricesYesterday[$i];
            $potentialProfit = $currentPrice - $minPrice;
            $maxProfit = max($maxProfit, $potentialProfit);
            $minPrice = min($minPrice, $currentPrice);

        }

        return $maxProfit;
    }
}