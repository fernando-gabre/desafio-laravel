<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => ['string','required','min:3','max:255'],
            'category_id' => ['required','integer','exists:categories,id'],
            'value' => ['required','numeric','min:0']
        ];
    }
    public function messages(){
        
        return[
        
            'name.required' => 'O campo nome é obrigatório',
            'name.string' => 'Nome inválido',
            'name.min' => 'o campo nome deve ter no mínimo 3 caracteres',
            'name.max' => 'O campo nome deve ter no máximo 255 caracteres',

            'category_id.required' => 'A categoria é obrigatório', 
            'category_id.integer' => 'Categoria inválida', 
            'category_id.exists' => 'Categoria não existe',
            
            'value.required' => 'O valor é  obrigatório',
            'value.numeric' => 'O valor é inválido',
            'value.min' => 'o valor é inválido' 
        
        ];
    }
}
