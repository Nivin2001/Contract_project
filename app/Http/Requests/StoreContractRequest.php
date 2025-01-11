<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContractRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */



    public function rules()
    {
        return [
            'contract_number' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'contract_date' => 'required|date',
            'representative_1' => 'required|string|max:255',
            'phone_1' => 'required|string|max:255',
            ' guarantor_2' => 'required|string|max:255',
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
        ];
    }

    /**
     * Get custom error messages for validation.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'contract_number.required' => 'رقم العقد مطلوب.',
            'contract_number.string' => 'رقم العقد يجب أن يكون نص.',
            'contract_number.max' => 'رقم العقد لا يجب أن يتجاوز 255 حرف.',

            'city.required' => 'المدينة مطلوبة.',
            'city.string' => 'المدينة يجب أن تكون نص.',
            'city.max' => 'المدينة لا يجب أن تتجاوز 255 حرف.',

            'contract_date.required' => 'تاريخ العقد مطلوب.',
            'contract_date.date' => 'تاريخ العقد يجب أن يكون بتنسيق تاريخ صالح.',

            'representative_1.required' => 'اسم الممثل الأول مطلوب.',
            'representative_1.string' => 'اسم الممثل الأول يجب أن يكون نص.',
            'representative_1.max' => 'اسم الممثل الأول لا يجب أن يتجاوز 255 حرف.',

            'phone_1.required' => 'رقم الهاتف الأول مطلوب.',
            'phone_1.string' => 'رقم الهاتف الأول يجب أن يكون نص.',
            'phone_1.max' => 'رقم الهاتف الأول لا يجب أن يتجاوز 255 حرف.',

            'guarantor_2.required' => 'الضامن الثاني مطلوب.',
            'guarantor_2.string' => 'الضامن الثاني يجب أن يكون نص.',
            'guarantor_2.max' => 'الضامن الثاني لا يجب أن يتجاوز 255 حرف.',

            'city_2.required' => 'المدينة الثانية مطلوبة.',
            'city_2.string' => 'المدينة الثانية يجب أن تكون نص.',
            'city_2.max' => 'المدينة الثانية لا يجب أن تتجاوز 255 حرف.',

            'neighborhood.required' => 'الحي مطلوب.',
            'neighborhood.string' => 'الحي يجب أن يكون نص.',
            'neighborhood.max' => 'الحي لا يجب أن يتجاوز 255 حرف.',

            'phone_2.required' => 'رقم الهاتف الثاني مطلوب.',
            'phone_2.string' => 'رقم الهاتف الثاني يجب أن يكون نص.',
            'phone_2.max' => 'رقم الهاتف الثاني لا يجب أن يتجاوز 255 حرف.',

            'implementation.required' => 'نوع التنفيذ مطلوب.',
            'implementation.string' => 'نوع التنفيذ يجب أن يكون نص.',
            'implementation.max' => 'نوع التنفيذ لا يجب أن يتجاوز 255 حرف.',

            'wood_type.required' => 'نوع الخشب مطلوب.',
            'wood_type.string' => 'نوع الخشب يجب أن يكون نص.',
            'wood_type.max' => 'نوع الخشب لا يجب أن يتجاوز 255 حرف.',

            'column_cladding.required' => 'نوع تغليف الأعمدة مطلوب.',
            'column_cladding.string' => 'نوع تغليف الأعمدة يجب أن يكون نص.',
            'column_cladding.max' => 'نوع تغليف الأعمدة لا يجب أن يتجاوز 255 حرف.',

            'total_area.required' => 'المساحة الإجمالية مطلوبة.',
            'total_area.numeric' => 'المساحة الإجمالية يجب أن تكون رقم.',

            'price_per_square_meter.required' => 'السعر لكل متر مربع مطلوب.',
            'price_per_square_meter.numeric' => 'السعر لكل متر مربع يجب أن يكون رقم.',

            'work_duration.required' => 'مدة العمل مطلوبة.',
            'work_duration.string' => 'مدة العمل يجب أن تكون نص.',
            'work_duration.max' => 'مدة العمل لا يجب أن تتجاوز 255 حرف.',

            'start_date.required' => 'تاريخ البدء مطلوب.',
            'start_date.date' => 'تاريخ البدء يجب أن يكون بتنسيق تاريخ صالح.',

            'price_quote_number.required' => 'رقم عرض السعر مطلوب.',
            'price_quote_number.string' => 'رقم عرض السعر يجب أن يكون نص.',
            'price_quote_number.max' => 'رقم عرض السعر لا يجب أن يتجاوز 255 حرف.',

            'quote_city.required' => 'مدينة عرض السعر مطلوبة.',
            'quote_city.string' => 'مدينة عرض السعر يجب أن تكون نص.',
            'quote_city.max' => 'مدينة عرض السعر لا يجب أن تتجاوز 255 حرف.',

            'notes.string' => 'الملاحظات يجب أن تكون نص.',

            'total_value.required' => 'القيمة الإجمالية مطلوبة.',
            'total_value.numeric' => 'القيمة الإجمالية يجب أن تكون رقم.',

            'paid_amount.required' => 'المبلغ المدفوع مطلوب.',
            'paid_amount.numeric' => 'المبلغ المدفوع يجب أن يكون رقم.',
        ];
    }
}

