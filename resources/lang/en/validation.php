<?php

/*

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |


    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => 'The :attribute must be a date after :date.',
    'alpha'                => 'The :attribute may only contain letters.',
    'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'The :attribute must be a date before :date.',
    'between'              => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'The :attribute confirmation does not match.',
    'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => 'The :attribute must be a valid email address.',
    'exists'               => 'The selected :attribute is invalid.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'The :attribute field is required.',
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'The :attribute field is required.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => 'The :attribute has already been taken.',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => 'The :attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |


    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |


    'attributes' => [],

];

// HUNGARIAN VALIDATION MESSAGES */

return [

    'accepted'             => 'A(z) :attribute el kell legyen fogadva!',
    'active_url'           => 'A(z) :attribute nem érvényes url!',
    'after'                => 'A(z) :attribute legalább :date utáni dátum kell, hogy legyen!',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => 'A(z) :attribute kizárólag betűket tartalmazhat!',
    'alpha_dash'           => 'A(z) :attribute kizárólag betűket, számokat és kötőjeleket tartalmazhat!',
    'alpha_num'            => 'A(z) :attribute kizárólag betűket és számokat tartalmazhat!',
    'array'                => 'A(z) :attribute egy tömb kell, hogy legyen!',
    'before'               => 'A(z) :attribute legalább :date előtti dátum kell, hogy legyen!',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => 'A(z) :attribute :min és :max közötti szám kell, hogy legyen!',
        'file'    => 'A(z) :attribute mérete :min és :max kilobájt között kell, hogy legyen!',
        'string'  => 'A(z) :attribute hossza :min és :max karakter között kell, hogy legyen!',
        'array'   => 'A(z) :attribute :min - :max közötti elemet kell, hogy tartalmazzon!',
    ],
    'boolean'              => 'A(z) :attribute mező csak true vagy false értéket kaphat!',
    'confirmed'            => 'A(z) :attribute nem egyezik a megerősítéssel.',
    'date'                 => 'A(z) :attribute nem érvényes dátum.',
    'date_format'          => 'A(z) :attribute nem egyezik az alábbi dátum formátummal :format!',
    'different'            => 'A(z) :attribute és :other értékei különbözőek kell, hogy legyenek!',
    'digits'               => 'A(z) :attribute :digits számjegyű kell, hogy legyen!',
    'digits_between'       => 'A(z) :attribute értéke :min és :max közötti számjegy lehet!',
    'dimensions'           => 'A(z) :attribute felbontása nem megfelelő.',
    'distinct'             => 'A(z) :attribute értékének egyedinek kell lennie!',
    'email'                => 'A(z) :attribute nem érvényes email formátum.',
    'exists'               => 'A(z) :attribute már létezik.',
    'file'                 => 'A(z) :attribute fájl kell, hogy legyen!',
    'filled'               => 'A(z) :attribute megadása kötelező!',
    'image'                => 'A(z) :attribute képfájl kell, hogy legyen!',
    'in'                   => 'A kiválasztott :attribute érvénytelen.',
    'in_array'             => 'A(z) :attribute értéke nem található a(z) :other értékek között.',
    'integer'              => 'A(z) :attribute értéke szám kell, hogy legyen!',
    'ip'                   => 'A(z) :attribute érvényes IP cím kell, hogy legyen!',
    'json'                 => 'A(z) :attribute érvényes JSON szöveg kell, hogy legyen!',
    'max'                  => [
        'numeric' => 'A(z) :attribute értéke nem lehet nagyobb, mint :max!',
        'file'    => 'A(z) :attribute mérete nem lehet több, mint :max kilobájt.',
        'string'  => 'A(z) :attribute hossza nem lehet több, mint :max karakter.',
        'array'   => 'A(z) :attribute legfeljebb :max elemet kell, hogy tartalmazzon.',
    ],
    'mimes'                => 'A(z) :attribute kizárólag az alábbi fájlformátumok egyike lehet: :values.',
    'mimetypes'            => 'A(z) :attribute kizárólag az alábbi fájlformátumok egyike lehet: :values.',
    'min'                  => [
        'numeric' => 'A(z) :attribute értéke nem lehet kisebb, mint :min!',
        'file'    => 'A(z) :attribute mérete nem lehet kevesebb, mint :min kilobájt.',
        'string'  => 'A(z) :attribute hossza nem lehet kevesebb, mint :min karakter.',
        'array'   => 'A(z) :attribute legalább :min elemet kell, hogy tartalmazzon.',
    ],
    'not_in'               => 'A(z) :attribute értéke érvénytelen.',
    'numeric'              => 'A(z) :attribute szám kell, hogy legyen!',
    'present'              => 'A(z) :attribute mező nem található!',
    'regex'                => 'A(z) :attribute formátuma érvénytelen.',
    'required'             => 'A(z) :attribute megadása kötelező!',
    'required_if'          => 'A(z) :attribute megadása kötelező, ha a(z) :other értéke :value!',
    'required_unless'      => 'A(z) :attribute megadása kötelező, ha a(z) :other értéke nem :values!',
    'required_with'        => 'A(z) :attribute megadása kötelező, ha a(z) :values érték létezik.',
    'required_with_all'    => 'A(z) :attribute megadása kötelező, ha a(z) :values értékek léteznek.',
    'required_without'     => 'A(z) :attribute megadása kötelező, ha a(z) :values érték nem létezik.',
    'required_without_all' => 'A(z) :attribute megadása kötelező, ha egyik :values érték sem létezik.',
    'same'                 => 'A(z) :attribute és :other mezőknek egyezniük kell!',
    'size'                 => [
        'numeric' => 'A(z) :attribute értéke :size kell, hogy legyen!',
        'file'    => 'A(z) :attribute mérete :size kilobájt kell, hogy legyen!',
        'string'  => 'A(z) :attribute hossza :size karakter kell, hogy legyen!',
        'array'   => 'A(z) :attribute :size elemet kell tartalmazzon!',
    ],
    'string'               => 'A(z) :attribute szövegnek kell legyen.',
    'timezone'             => 'A(z) :attribute nem létező időzona.',
    'unique'               => 'A(z) :attribute már foglalt.',
    'uploaded'             => 'A(z) :attribute feltöltése sikertelen.',
    'url'                  => 'A(z) :attribute érvénytelen link.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes'           => [
    //
    ],

];
