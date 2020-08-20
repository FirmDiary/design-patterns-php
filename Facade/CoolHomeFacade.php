<?php
/**
 * @author: Azal.
 * @date: 2020/8/20
 * @time: 22:20
 */

namespace Facade;


class CoolHomeFacade
{
    /**
     * @var Television
     */
    public $television;

    /**
     * @var CoffeeMachine
     */
    public $coffeeMachine;

    /**
     * @var AirConditioning
     */
    public $airConditioning;

    public function __construct(
        Television $television,
        CoffeeMachine $coffeeMachine,
        AirConditioning $airConditioning
    )
    {
        $this->television = $television;
        $this->coffeeMachine = $coffeeMachine;
        $this->airConditioning = $airConditioning;
    }

    public function lookTv()
    {
        $this->airConditioning->open();
        $this->airConditioning->regulate(18);

        $this->coffeeMachine->open();
        $this->coffeeMachine->ingredients();
        $this->coffeeMachine->serveCoffee();

        $this->television->open();
        $this->television->switchToFavorite();
    }

    public function closeTv()
    {
        $this->airConditioning->close();

        $this->coffeeMachine->close();

        $this->television->close();
    }
}
