<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use App\Helpers\SolutionHelper;

class MakeSolution extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:solution {solution_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new solution';

    protected $solution_class_name;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @param  \App\DripEmailer  $drip
     * @return mixed
     */
    public function handle()
    {
        $solution_class_name = 'Solution' . $this->argument('solution_id');
        $solution_file_name = $solution_class_name . '.php';

        if (SolutionHelper::solutionExists($solution_file_name)) {
            echo 'File already exists '.$solution_file_name.PHP_EOL;
        } else {
            if (SolutionHelper::makeSolution(
                $solution_file_name,
                SolutionHelper::solutionFileContents($solution_class_name)
            )) {
                echo 'Created file '.$solution_file_name.PHP_EOL;
            } else {
                echo 'Failure creating file '.$solution_file_name.PHP_EOL;
            }
        }
    }


}
