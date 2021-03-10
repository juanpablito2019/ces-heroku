<?php
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
    */

    'accepted' => 'El campo :attribute debe ser aceptado.',
    'active_url' => 'El campo :attribute no es una URL válida.',
    'after' => 'El campo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El campo :attribute solamente puede contener letras.',
    'alpha_dash' => 'El campo :attribute solamente puede contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El campo :attribute solamente puede contener letras y números.',
    'array' => 'El campo :attribute debe ser un arreglo.',
    'before' => 'El campo :attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El campo :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'numeric' => 'El campo :attribute debe estar entre :min y :max.',
        'file' => 'El campo :attribute debe estar entre :min y :max kilobytes.',
        'string' => 'El campo :attribute debe tener entre :min y :max caracteres.',
        'array' => 'El campo :attribute debe tener entre :min y :max elementos.',
    ],
    'boolean' => 'El campo :attribute debe ser falso o verdadero.',
    'confirmed' => 'El campo de confirmación :attribute no coincide.',
    'date' => 'El campo :attribute no es una fecha válida.',
    'date_equals' => 'El campo :attribute debe ser una fecha igual a :date.',
    'date_format' => 'El campo :attribute no coincide con el formato :format.',
    'different' => 'El campo :attribute y :other deben ser diferentes.',
    'digits' => 'El campo :attribute debe tener :digits dígitos.',
    'digits_between' => 'El campo :attribute debe estar entre :min y :max dígitos.',
    'dimensions' => 'El campo :attribute tiene dimensiones de imagen inválidas.',
    'distinct' => 'El campo :attribute tiene un valor duplicado.',
    'email' => 'El campo :attribute debe ser un correo electrónico válido.',
    'exists' => 'El campo seleccionado :attribute ya existe.',
    'file' => 'El campo :attribute debe ser un archivo.',
    'filled' => 'El campo :attribute debe tener un valor.',
    'gt' => [
        'numeric' => 'El campo :attribute debe ser mayor que :value.',
        'file' => 'El campo :attribute debe ser mayor que :value kilobytes.',
        'string' => 'El campo :attribute debe ser mayor que :value caracteres.',
        'array' => 'El campo :attribute debe ser mayor que :value items.',
    ],
    'gte' => [
        'numeric' => 'El campo :attribute debe ser mayor que o igual :value.',
        'file' => 'El campo :attribute debe ser mayor que o igual :value kilobytes.',
        'string' => 'El campo :attribute debe ser mayor que o igual :value caracteres.',
        'array' => 'El campo :attribute debe ser mayor que o igual :value items or more.',
    ],
    'image' => 'El campo :attribute debe ser una imagen.',
    'in' => 'El campo seleccionado :attribute es inválido.',
    'in_array' => 'El campo :attribute no existe en :other.',
    'integer' => 'El campo :attribute debe ser un entero.',
    'ip' => 'El campo :attribute debe ser una direccion de IP valida.',
    'ipv4' => 'El campo :attribute debe ser una direccion de IPv4 valida.',
    'ipv6' => 'El campo :attribute debe ser una direccion de IPv6 valida.',
    'json' => 'El campo :attribute debe ser un JSON valido.',
    'lt' => [
        'numeric' => 'El campo :attribute debe ser menor que :value.',
        'file' => 'El campo :attribute debe ser menor que :value kilobytes.',
        'string' => 'El campo :attribute debe ser menor que :value caracteres.',
        'array' => 'El campo :attribute debe ser menor que :value items.',
    ],
    'lte' => [
        'numeric' => 'El campo :attribute debe ser menor que o igual :value.',
        'file' => 'El campo :attribute debe ser menor que o igual :value kilobytes.',
        'string' => 'El campo :attribute debe ser menor que o igual :value caracteres.',
        'array' => 'El campo :attribute debe ser menor que o igual :value items.',
    ],
    'max' => [
        'numeric' => 'El campo :attribute no debería ser más grande que :max.',
        'file' => 'El campo :attribute no debería pesar más de :max kilobytes.',
        'string' => 'El campo :attribute no debería tener más de :max caracteres.',
        'array' => 'El campo :attribute no debería tener más de :max elementos.',
    ],
    'mimes' => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'numeric' => 'El campo :attribute debe ser por lo menos :min.',
        'file' => 'El campo :attribute debe tener minimo :min kilobytes.',
        'string' => 'El campo :attribute debe tener minimo :min caracteres.',
        'array' => 'El campo :attribute debe tener por lo menos :min items.',
    ],
    'not_in' => 'El campo seleccionado :attribute es inválido.',
    'not_regex' => 'El formato de :attribute es inválido.',
    'numeric' => 'El campo :attribute debe ser numérico',
    'present' => 'El campo :attribute field debe estar presente.',
    'regex' => 'El formato de el campo :attribute  es inválido.',
    'required' => 'El campo :attribute es obligatorio.',
    'required_if' => 'El campo :attribute es obligatorio cuando :other es :value.',
    'required_unless' => 'El campo :attribute es obligatorio al menos que :other esté en :values.',
    'required_with' => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all' => 'El campo :attribute es obligatorio cuando :values están presentes.',
    'required_without' => 'El campo :attribute es obligatorio cuando :values no está presente',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de los valores: :values está presente.',
    'same' => 'El campo :attribute y :other deben coincidir.',
    'size' => [
        'numeric' => 'El campo :attribute debe ser de :size.',
        'file' => 'El campo :attribute debe ser de :size kilobytes.',
        'string' => 'El campo :attribute debe ser de :size caracteres.',
        'array' => 'El campo :attribute debe contener :size elementos.',
    ],
    'starts_with' => 'El campo :attribute con uno de los siguientes valores: :values',
    'string' => 'El campo :attribute debe ser una cadena.',
    'timezone' => 'El campo :attribute debe ser una zona horaria válida.',
    'unique' => 'Ya existe un registro con este :attribute.',
    'uploaded' => 'Error al subir :attribute.',
    'url' => 'El formato de :attribute es inválido.',
    'uuid' => 'El campo :attribute debe ser un UUID válido.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name' => 'nombre',
        'permissions' => 'permisos',
        'password' => 'contraseña'
    ],

];