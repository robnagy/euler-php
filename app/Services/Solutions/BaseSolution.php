<?php

namespace App\Services\Solutions;

use Illuminate\Support\Facades\Log;


class BaseSolution
{
    protected $debug;
    protected $log;

    /**
     * Constructor function, sets debug value.
     *
     * @param boolean $debug
     */
    public function __construct(bool $debug = false)
    {
        $this->debug = $debug;
        $this->log = [];
    }

    /**
     * Log function, checks if class $debug
     * is enabled and outputs to PHP
     * error log and class $log.
     *
     * @param string $message
     * @param mixed $values
     * @return void
     */
    protected function log(string $message, $values = null) : void
    {
        if ($this->debug) {
            $this->log[] = [$message => $values];

            if ($values)
                $values = is_string($values) ? $values : json_encode($values);

            Log::debug($message.' '.$values);
        }
    }

    /**
     * Returns the class $log var
     *
     * @return array
     */
    public function getLog() : array
    {
        return $this->log;
    }
}
