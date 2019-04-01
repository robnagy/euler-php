<?php

namespace App\Contracts;

interface SolutionInterface
{
    /**
     * The main function that generates the
     * solution. Returns int or string.
     *
     * @return int|string
     */
    public function run();

    /**
     * Returns the log file generated if
     * the debug flag is set to true.
     *
     * @return void
     */
    public function getLog();
}
