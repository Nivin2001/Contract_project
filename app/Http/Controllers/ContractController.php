<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        return view('dashboard');
    }
    public function index(Request $request)
    {
        $query = Contract::query();
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('contract_number', 'like', '%' . $search . '%')
                  ->orWhere('contract_date', 'like', '%' . $search . '%');
        }
        $contracts = $query->with(['party1', 'party2'])->get();

        return view('contract.index', compact('contracts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $contract = new Contract();
        return view('contract.create', compact('users', 'contract'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'party_1' => 'required|exists:users,id',
            'party_2' => 'required|exists:users,id',
            'contract_number' => 'required|unique:contracts,contract_number',
            'contract_date' => 'required|date',
            'contract_address' => 'required|string',
            'wood_type' => 'required|string',
            'column_cladding' => 'required|string',
            'total_value' => 'required|numeric',
            'paid_amount' => 'required|numeric',
            'work_duration' => 'required|integer',
            'price_quote_number' => 'required|string',
        ]);
        $remaining_amount = $request->total_value - $request->paid_amount;
        $validated['remaining_amount'] = $remaining_amount;
        Contract::create($validated);
        return redirect()->route('contracts.index')->with('success', 'تم إضافة العقد بنجاح!');
        // return redirect()->route('contracts.pdf', ['id' => $contract->id]);
    }

    public function downloadPDF($id)
    {
        $contract = Contract::findOrFail($id);
        $pdf = PDF::loadView('contracts.pdf', compact('contract'));
        return $pdf->download('contract-' . $contract->contract_number . '.pdf');
    }
    /**
     * Display the specified resource.
     */
    public function show(Contract $contract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contract $contract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contract $contract)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contract $contract)
    {
        //
    }
}
