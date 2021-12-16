<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'         =>'required',
            'speaker_name' => 'required',
            'start_date'   => [
                'required',
                'date_format:d/m/Y H:i'
            ],
            'end_date' => [
                'required',
                'date_format:d/m/Y H:i',
                'after:' . $this->start_date ?? null
            ],
            'participants_limit' => ['numeric', "intenger", 'min:1'],
            'target_audience'    => ['required', 'max:150']
        ];
    }

    public function attributes()
    {
        return [
            'nome'               => 'name',
            'nome_palestrante'   => 'palestrante',
            'start_date'         => 'data de inicio',
            'end_date'           => 'data de fim',
            'participants_limit' => 'limite de participantes',
            'target_audience'    => 'público alvo'
        ];
    }

    public function messages()
    {
        return [
            'date_format' => 'O campo :attribute não corresponde ao formato 00/00/0000 00:00',
            'end_date.after' => 'A data final deve ser posterior a data inicial'
        ];
    }
}

