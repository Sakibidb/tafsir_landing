<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LeadsRequest;
use App\Models\Lead;
use App\Services\LeadsService;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\BackendController;



class LeadController extends BackendController
{
    public function __construct(public LeadsService $leadsService)
    {
        parent::__construct();
        $this->data['sitetitle'] = 'Leads';
    }
    public function index()
    {
        $leads = Lead::all();
        return view('admin.leads.index', compact('leads'));
    }

    public function create()
    {
        return view('frontend.modal');
    }

    public function store(LeadsRequest $request)
    {
        try {
            $lead = Lead::create($request->validated());
            return response()->json(['message' => 'Lead created successfully!'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong!'], 500);
        }
    }




    public function show(Lead $lead)
    {
        return view('admin.leads.view', compact('lead'));
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $leads = $this->leadsService->list($request);

            return Datatables::of($leads)
                ->addColumn('action', function ($lead) {
                    return action_button([
                        'view' => ['route' => route('leads.show', $lead)]
                    ]);
                })
                ->editColumn('phone', function ($lead) {
                    return $lead->country_code_with_phone;
                })
                ->editColumn('name', function ($lead) {
                    return $lead->name;
                })
                ->rawColumns(['action'])
                ->escapeColumns([])
                ->make(true);
        }
    }
}
