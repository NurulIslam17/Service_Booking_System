<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'service_id' => 'required|exists:services,id',
            'booking_date' => 'date|after_or_equal:today',
        ];
    }

    public function messages(): array
    {
        return [
            'service_id.required' => 'Service selection is required.',
            'service_id.exists' => 'Selected service does not exist.',
            'booking_date.required' => 'Booking date is required.',
            'booking_date.date' => 'Booking date must be a valid date.',
            'booking_date.after_or_equal' => 'You cannot book a service for a past date.',
        ];
    }

    public function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        throw new \Illuminate\Http\Exceptions\HttpResponseException(
            response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422)
        );
    }
}
