<?php


class Wallet
{


    // public $coins = 'coin';

    private $bills;
    private $coins;

    public function addMoney($count)
    {
        if ($count > 2) {
            $this->bills = $count;
            echo "Bills: $this->bills" . '<br>';
        } else {
            $this->coins = $count;
            echo "Coins: $this->coins" . '<br>';
        }
    }

    public function calc()
    {
        return print_r($this->bills + $this->coins);
        // echo "SUM: $rez";
    }
}