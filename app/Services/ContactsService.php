<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Exception;
use Illuminate\Support\Facades\Log;

class ContactsService
{
    public $contactFilter = ['name', 'email', 'note'];

    /**
     *
     * @param Request $request
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function list(Request $request)
    {


        return Contact::orderBy('id','desc')->get();
    }

    public function store(ContactRequest $request)
    {
        try {
            return Contact::create($request->validated());
        } catch (Exception $e) {
            Log::info($e->getMessage());
            throw new Exception($e->getMessage(), 422);
        }
    }
}
