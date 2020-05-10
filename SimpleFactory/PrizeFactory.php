<?php
/**
 * @author: Azal.
 * @date: 2020/5/10
 * @time: 16:24
 */

namespace SimpleFactory;

class PrizeFactory
{
    const PRIZE_COUPON = 1; //优惠券奖品
    const PRIZE_CASH = 2; //现金奖品

    public static function generatePrize($type)
    {
        switch ($type) {
            case self::PRIZE_COUPON:
                return new CouponPrize();
            case self::PRIZE_CASH:
                return new CashPrize();
            default:
                return null;
        }
    }

}
