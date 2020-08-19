<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Inbox as Model;
use Illuminate\Http\Request;
use Systemson\ApiMaker\ApiResourceTrait;

class InboxController extends Controller
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
}
