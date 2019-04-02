<?php

namespace App\Helpers;

class SolutionHelper
{
    const PATH = './app/Services/Solutions';

    public static function solutionExists(string $solutionFileName)
    {
        return in_array($solutionFileName, self::getSolutions());
    }

    public static function getSolutions()
    {
        return $files = scandir(self::PATH);
    }

    public static function makeSolution(string $solution_file_name, string $contents)
    {
        $solution_file_name = self::PATH.'/'.$solution_file_name;
        return file_put_contents($solution_file_name, $contents);
    }

    public static function solutionFileContents(string $solution_class_name) : string
    {
        return "<?php

namespace App\Services\Solutions;

use App\Contracts\SolutionInterface;

class ".$solution_class_name." extends BaseSolution implements SolutionInterface
{
    public function run()
    {

    }
}
";
    }
}
