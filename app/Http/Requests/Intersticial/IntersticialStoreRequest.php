<?php

namespace App\Http\Requests\Intersticial;

use Illuminate\Foundation\Http\FormRequest;

class IntersticialStoreRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  protected function prepareForValidation()
  {
    $this->merge([
      'intersticial' => [
        'name'              => $this->intersticial['name'],
        'client_id'         => $this->intersticial['client_id'],
        'creative_id'       => $this->intersticial['creative_id'],
        'business_model_id' => $this->intersticial['business_model_id'],
        'country_id'        => $this->intersticial['country_id'],
        'start_day'         => $this->intersticial['startDate'],
        'end_day'           => $this->intersticial['endDate'],
      ]
    ]);
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
   */
  public function rules(): array
  {
    return [
      //
    ];
  }
}
