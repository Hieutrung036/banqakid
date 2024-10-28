
<?php

return [
    'required' => 'Trường :attribute là bắt buộc.',
    'email' => 'Trường :attribute phải là một địa chỉ email hợp lệ.',
    'regex' => 'Số điện thoại không hợp lệ.',
   
    'string' => 'Trường :attribute phải là một chuỗi.',
    'between' => 'Trường :attribute phải nằm giữa :min và :max.',
    'confirmed' => 'Xác nhận :attribute không khớp.',
    'exists' => ':attribute không tồn tại',
    'custom' => [
        'sdt' => [
            'sdt.required' => 'Số điện thoại là bắt buộc.',
            'sdt.regex' => 'Số điện thoại không hợp lệ.',
        ],
        'email' => [
            'unique' => 'Địa chỉ email đã được sử dụng.',
        ],
        'matkhau' => [
            'min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
        ],
    ],
];


