<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Http\Requests\LeadsRequest;
use App\Models\Lead;
use Exception;
use Illuminate\Support\Facades\Log;

class LeadsService
{
    public $leadFilter = ['name', 'email', 'phone', 'status'];

    /**
     *
     * @param Request $request
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function list(Request $request)
    {


        return Lead::orderBy('id','desc')->get();
    }

    public function store(LeadsRequest $request)
    {
        try {
            return Lead::create($request->validated());
        } catch (Exception $e) {
            Log::info($e->getMessage());
            throw new Exception($e->getMessage(), 422);
        }
    }
}
