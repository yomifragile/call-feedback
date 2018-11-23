<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'account_id' => 'required|numeric|exists:accounts,id',
            'agent_id' => 'required|numeric',
            'rating' => 'required|numeric',
            'feedback_desc' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'account_id.required' => 'Account number is required.',
            'agent_id.required' => 'AgentController name is required.',
            'rating.required' => 'Rating is required.',
            'feedback_desc.required' => 'FeedbackController is required.',
        ];
    }
}
