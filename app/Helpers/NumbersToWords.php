<?php

namespace App\Helpers;

class NumbersToWords
{
    protected $words = [
        [
            'zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine',
            'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen',
            'eighteen', 'nineteen',
        ],
        [
            'zero', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety',
        ],
        'hundred',
        'thousand',
    ];

    protected $num = '';
    protected $original = '';
    protected $response = '';

    public function __construct(int $num)
    {
        if ($num > 9999) {
            throw new \Exception('Number larger than max allowed (9999)');
        }
        $this->num = (string) $num;
        $this->original = (string) $num;
    }

    public function convert(): string
    {
        while (strlen($this->num) > 0) {
            switch (strlen($this->num)) {
                case 4:
                    $this->handleThousands();
                    break;
                case 3:
                    $this->handleHundreds();
                    break;
                case 2:
                    $this->handleTens();
                    break;
                case 1:
                    $this->handleSingleDigit();
                    break;
            }
        }
        return $this->response;
    }

    protected function handleThousands()
    {
        if ($this->num % 1000 === 0) {
            $this->response .= $this->words[0][$this->num[0]] . ' ' . $this->words[3];
            $this->num = '';
        } else {
            $this->response .= $this->words[0][$this->num[0]] . ' ' . $this->words[3];
            if ($this->num[1] === '0') {
                $this->response .= ' and ';
                if ($this->num[2] === '0') {
                    $this->num = substr($this->num, 3);

                } else {
                    $this->num = substr($this->num, 2);
                }
            } else {
                $this->response .= ' ';
                $this->num = substr($this->num, 1);
            }
        }
    }

    protected function handleHundreds()
    {
        if ($this->num % 100 === 0) {
            $this->response .= $this->words[0][$this->num[0]] . ' ' . $this->words[2];
            $this->num = '';
        } else {
            $this->response .= $this->words[0][$this->num[0]] . ' ' . $this->words[2] . ' and ';
            if ($this->num[1] === '0') {
                $this->num = substr($this->num, 2);
            } else {
                $this->num = substr($this->num, 1);
            }
        }
    }

    protected function handleTens()
    {
        if ((int) $this->num < 20) {
            $this->response .= $this->words[0][(int) $this->num];
            $this->num = '';
        } else {
            $this->response .= $this->words[1][$this->num[0]];
            if ($this->num % 10 === 0) {
                $this->num = '';
            } else {
                $this->response .= ' ';
                $this->num = substr($this->num, 1);
            }
        }
    }

    protected function handleSingleDigit()
    {
        $this->response .= $this->words[0][$this->num[0]];
        $this->num = '';
    }
}
