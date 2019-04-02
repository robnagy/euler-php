<?php

namespace App\Http\Controllers;

use App\Contracts\SolutionServiceInterface;
use Illuminate\Http\Request;


class SolutionController extends Controller
{
    protected $solutionService;

    /**
     * Create a new controller instance.
     * Injects the SolutionService.
     *
     * @return void
     */
    public function __construct(SolutionServiceInterface $solutionService)
    {
        $this->solutionService = $solutionService;
    }

    /**
     * Generates the response for solution
     * requested by $solution_id.
     *
     * @param integer $solution_id
     * @param Request $request
     * @return void
     */
    public function get(int $solution_id, Request $request)
    {
        $debug = $request->get('debug', false);
        $solution = $this->solutionService->getSolution($solution_id, $debug);

        $result = [];
        $result['problem'] = $solution_id;
        $result['solution'] = $solution->run();
        if ($debug) $result['log'] = $solution->getLog();

        return json_encode($result);
    }
}
