<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Outbox as Model;
use Illuminate\Http\Request;
use Systemson\ApiMaker\ApiResourceTrait;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class OutboxController extends Controller
{
    use ApiResourceTrait;

    public function index(Request $request)
    {
        return response()->json(
            $this->list(
                Model::class,
                $request
            )
        );
    }

    public function show($id)
    {
        return response()->json(
            $this->find(
                Model::class,
                $id
            )
        );
    }

    public function store(Request $request)
    {
        $number = $request->get('number');
        $message = $request->get('message');

        $process = new Process(['gammu-smsd-inject', 'TEXT', $number, '-text', $message]);
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $output = array_filter(explode(PHP_EOL, $process->getOutput()));

        return response()->json([
            'status' => 'success',
            'message' => end($output),
        ]);
    }
}