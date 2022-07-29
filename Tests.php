<?php

require __DIR__ . '/Calculator.php';

class Tests
{
    protected $fail = false;

    protected $calculator;

    public function __construct()
    {
        $this->calculator = new Calculator();
    }

    public function teste_the_soma_result()
    {
        $result = $this->calculator->soma(4, 2);

        $this->fail = $result !== 6;

        if ($this->fail) {
            exit(0);
        }
    }
}