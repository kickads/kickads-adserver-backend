<?php

namespace App\Http\Requests\OpportunityBranding;

use Illuminate\Foundation\Http\FormRequest;

class OpportunityBrandingStoreRequest extends FormRequest
{
//  protected function failedValidation(Validator $validator)
//  {
//    throw new HttpResponseException(jsend_error($validator->errors()));
//  }

  public function rules(): array
  {
    return [
      'deals_branding_id'       => ['required', 'integer'],
      'country_id'              => ['required', 'integer'],
      'purchase_models_id'      => ['required', 'integer'],
      'product'                 => ['required'],
      'start_date'              => ['required', 'date'],
      'end_date'                => ['required', 'date'],
      'targeting'               => ['required'],
      'comment'                 => ['required'],
      'device_id'               => ['required', 'integer'],
      'format_id'               => ['required', 'integer'],
      'action_id'               => ['required', 'integer'],
      'gross_agency_commission' => ['required', 'integer'],
      'format_options'          => ['required'],
      'gross_rate'              => ['required', 'numeric'],
      'net_rate'                => ['required', 'numeric'],
      'available_rate'          => ['required', 'numeric'],
      'budget'                  => ['required', 'numeric'],
      'net_budget'              => ['required', 'numeric'],
      'available_budget'        => ['required', 'numeric'],
      'goal_units'              => ['required', 'numeric'],
      'is_multi_carrier'        => ['required', 'boolean'],
    ];
  }

  public function authorize(): bool
  {
    return true;
  }
}
