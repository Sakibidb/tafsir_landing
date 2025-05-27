<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Services\ContactsService;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\BackendController;



class ContactController extends BackendController
{
    public function __construct(public ContactsService $contactsService)
    {
        parent::__construct();
        $this->data['sitetitle'] = 'Contacts';
    }
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('frontend.modal');
    }

    public function store(ContactRequest $request)
    {
        try {
            $contact = Contact::create($request->validated());
            return response()->json(['message' => 'Contact created successfully!'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong!'], 500);
        }
    }




    public function show(Contact $contact)
    {
        return view('admin.contacts.view', compact('contact'));
    }

    public function list(Request $request)
{
    if (request()->ajax()) {
        $contacts = $this->contactsService->list($request);

        return Datatables::of($contacts)
            ->addColumn('action', function ($contact) {
                return action_button([
                    'view' => ['route' => route('contacts.show', $contact)]
                ]);
            })
            ->editColumn('name', fn($contact) => $contact->name)
            ->editColumn('email', fn($contact) => $contact->email)
            ->editColumn('note', fn($contact) => $contact->note)
            ->rawColumns(['action'])
            ->make(true);
    }
}

}
