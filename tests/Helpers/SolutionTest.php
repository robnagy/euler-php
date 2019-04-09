<?php

use App\Helpers\SolutionHelper;

class SolutionTest extends TestCase
{
    public function testSolutionHelperSolutionExists()
    {
        $exists = 'BaseSolution.php';
        $expected = true;
        $this->assertEquals(
            $expected,
            SolutionHelper::solutionExists($exists)
        );
    }

    public function testSolutionHelperSolutionDoesNotExist()
    {
        $exists = 'Solutionx.php';
        $expected = false;
        $this->assertEquals(
            $expected,
            SolutionHelper::solutionExists($exists)
        );
    }

    public function testSolutionHelperMakeSolution()
    {
        $filename = 'testing.php';
        $filecontents = 'test';
        $expected = strlen($filecontents);
        $this->assertEquals(
            $expected,
            SolutionHelper::makeSolution($filename, $filecontents)
        );

        $filepath = SolutionHelper::PATH.'/'.$filename;
        $expected = file_get_contents($filepath);
        $this->assertEquals(
            $expected,
            $filecontents
        );
        unlink($filepath);
    }

}
