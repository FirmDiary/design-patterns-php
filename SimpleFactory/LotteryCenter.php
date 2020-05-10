<?php
/**
 * @author: Azal.
 * @date: 2020/5/10
 * @time: 16:20
 */


namespace SimpleFactory;

class LotteryCenter
{
    private $prize = [
        [
            'code' => 666,
            'type' => 1,
        ],
        [
            'code' => 999,
            'type' => 2,
        ]
    ];

    public function convert($code)
    {
        $prize = null;
        foreach ($this->prize as $item) {
            if ($item['code'] == $code) {
                $prize = $item;
                break;
            }
        }
        if (!$prize) {
            echo '兑换码不存在!';
            return;
        }

        $prizeFactory = PrizeFactory::generatePrize($prize['type']);
        $prize = $prizeFactory->convert();


        //    分发奖品
        echo $prize . '兑换成功!';
    }

}
