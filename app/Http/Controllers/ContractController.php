<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        return view('dashboard');
    }
    public function index()
    {

        $contracts = Contract::all();

        return view('contract.index', compact('contracts'));
    }

    public function search(Request $request)
    {

        $query = Contract::query();
        if ($request->filled('from_date')) {
            $query->where('start_date', '>=', $request->from_date);
        }
        if ($request->filled('to_date')) {
            $query->where('start_date', '<=', $request->to_date);
        }
        if ($request->filled('name')) {
            $query->where('guarantor_2', 'like', '%' . $request->name . '%');
        }
        if ($request->filled('price_quote_number')) {
            $query->where('price_quote_number', 'like', '%' . $request->price_quote_number . '%');
        }
        $contracts = $query->get();
        $total = $contracts->sum('total_value');
        $paid = $contracts->sum('paid_amount');
        $names = Contract::distinct()->pluck('guarantor_2');
        return view('contract.search', compact('contracts', 'total', 'paid', 'names'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $contract = new Contract();
        $total_value = old('total_value', $contract->total_value ?? 0);
        $paid_amount = old('paid_amount', $contract->paid_amount ?? 0);
        $remaining_amount = $total_value - $paid_amount;

        return view('contract.create', compact('users', 'contract', 'total_value', 'paid_amount', 'remaining_amount'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // التحقق من صحة المدخلات الخاصة بالعقد
        $validated = $request->validate([
            'contract_number' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'contract_date' => 'required|date',
            'representative_1' => 'required|string|max:255',
            'phone_1' => 'required|string|max:255',
            'guarantor_2' => 'required|string|max:255',
            'city_2' => 'required|string|max:255',
            'neighborhood' => 'required|string|max:255',
            'phone_2' => 'required|string|max:255',
            'implementation' => 'required|string|max:255',
            'wood_type' => 'required|string|max:255',
            'column_cladding' => 'required|string|max:255',
            'total_area' => 'required|numeric',
            'price_per_square_meter' => 'required|numeric',
            'work_duration' => 'required|string|max:255',
            'start_date' => 'required|date',
            'price_quote_number' => 'required|string|max:255',
            'quote_city' => 'required|string|max:255',
            'notes' => 'nullable|string',
        ]);
        $total_value = $request->total_value;
        $paid_amount = $request->paid_amount;
        $remaining_amount = $total_value - $paid_amount;

        $contract = new Contract();
        $contract->contract_number = $request->contract_number;
        $contract->city = $request->city;
        $contract->contract_date = $request->contract_date;
        $contract->representative_1 = $request->representative_1;
        $contract->phone_1 = $request->phone_1;
        $contract->guarantor_2 = $request->guarantor_2;
        $contract->city_2 = $request->city_2;
        $contract->neighborhood = $request->neighborhood;
        $contract->phone_2 = $request->phone_2;
        $contract->implementation = $request->implementation;
        $contract->wood_type = $request->wood_type;
        $contract->column_cladding = $request->column_cladding;
        $contract->total_area = $request->total_area;
        $contract->price_per_square_meter = $request->price_per_square_meter;
        $contract->total_value = $total_value;
        $contract->paid_amount = $paid_amount;
        $contract->remaining_amount = $remaining_amount;
        $contract->work_duration = $request->work_duration;
        $contract->start_date = $request->start_date;
        $contract->price_quote_number = $request->price_quote_number;
        $contract->quote_city = $request->quote_city;
        $contract->notes = $request->notes;
        $contract->save();
        if ($paid_amount > 0) {
            Payment::create([
                'contract_id' => $contract->id,
                'payment_date' => now(),
                'amount_paid' => $paid_amount,
            ]);
        }
          
    $pdf = PDF::loadView('pdf.contracts', compact('contract'));
    return $pdf->download('contract_' . $contract->contract_number . '_report.pdf');

        return redirect()->route('contracts.index')->with('success', 'تم حفظ العقد بنجاح!');
    }
    public function generatePdf()
    {
        $contracts = Contract::all();

        $pdf = PDF::loadView('pdf.contracts', compact('contracts'));
        return $pdf->download('contracts_report.pdf');
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
    public function edit($id)
    {
        $contract = Contract::findOrFail($id);
        $remaining_amount = $contract->total_value - $contract->paid_amount;
        $total_value = $contract->total_value;
        $paid_amount = $contract->paid_amount;

        return view('contract.edit', compact('contract', 'total_value', 'paid_amount', 'remaining_amount'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // التحقق من صحة المدخلات
        $validated = $request->validate([
            'contract_number' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'contract_date' => 'required|date',
            'representative_1' => 'required|string|max:255',
            'phone_1' => 'required|string|max:255',
            'guarantor_2' => 'required|string|max:255',
            'city_2' => 'required|string|max:255',
            'neighborhood' => 'required|string|max:255',
            'phone_2' => 'required|string|max:255',
            'implementation' => 'required|string|max:255',
            'wood_type' => 'required|string|max:255',
            'column_cladding' => 'required|string|max:255',
            'total_area' => 'required|numeric',
            'price_per_square_meter' => 'required|numeric',
            'work_duration' => 'required|string|max:255',
            'start_date' => 'required|date',
            'price_quote_number' => 'required|string|max:255',
            'quote_city' => 'required|string|max:255',
            'notes' => 'nullable|string',
            'total_value' => 'required|numeric',
            'paid_amount' => 'required|numeric',
        ]);

        $contract = Contract::findOrFail($id);

        $contract->update($validated);
        $remaining_amount = $contract->total_value - $contract->paid_amount;
        $contract->remaining_amount = $remaining_amount;
        $contract->save();
        if ($request->paid_amount > 0) {
            Payment::create([
                'contract_id' => $contract->id,
                'payment_date' => now(),
                'amount_paid' => $request->paid_amount,
            ]);
        }
        return redirect()->route('contracts.index')->with('success', 'تم تحديث العقد بنجاح');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $contract = Contract::findOrFail($id);
        $contract->delete();
        return redirect()->route('contracts.index')->with('success', 'contracts deleted successfully!');
    }
}
