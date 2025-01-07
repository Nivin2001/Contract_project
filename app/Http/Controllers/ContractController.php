<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Payment;
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
    // التحقق من صحة البيانات المدخلة
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

    // حساب المبالغ
    $total_value = $request->total_value; // القيمة الإجمالية من النموذج
    $paid_amount = $request->paid_amount; // المبلغ المدفوع من النموذج
    $remaining_amount = $total_value - $paid_amount; // المبلغ المتبقي

    // تخزين البيانات
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
    $contract->save(); // حفظ العقد في قاعدة البيانات

    // إعادة توجيه المستخدم بعد الحفظ مع رسالة تأكيد
    return redirect()->route('contracts.index', $contract->id)->with('success', 'تم حفظ العقد بنجاح!');
}



    // public function downloadPDF($id)
    // {
    //     $contract = Contract::findOrFail($id);
    //     $pdf = PDF::loadView('contracts.pdf', compact('contract'));
    //     return $pdf->download('contract-' . $contract->contract_number . '.pdf');
    // }
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
