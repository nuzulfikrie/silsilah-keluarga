<?php

return [

    /*
    |---------------------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi
    |---------------------------------------------------------------------------------------
    |
    | Baris bahasa berikut ini berisi standar pesan kesalahan yang digunakan oleh
    | kelas validasi. Beberapa aturan mempunyai multi versi seperti aturan 'size'.
    | Jangan ragu untuk mengoptimalkan setiap pesan yang ada di sini.
    |
    */

    "accepted"             => "Isian :attribute mesti diterima.",
    "active_url"           => "Isian :attribute bukan URL yang sah.",
    "after"                => "Isian :attribute mesti tarikh selepas :date.",
    'after_or_equal'       => 'Isian :attribute mesti tarikh selepas atau sama dengan :date.',
    "alpha"                => "Isian :attribute hanya boleh mengandungi huruf.",
    "alpha_dash"           => "Isian :attribute hanya boleh mengandungi huruf, nombor, dan sengkang.",
    "alpha_num"            => "Isian :attribute hanya boleh mengandungi huruf dan nombor.",
    "array"                => "Isian :attribute mesti berupa array.",
    "before"               => "Isian :attribute mesti tarikh sebelum :date.",
    'before_or_equal'      => 'Isian :attribute mesti tarikh sebelum atau sama dengan :date.',
    "between"              => [
        "numeric" => "Isian :attribute mesti antara :min dan :max.",
        "file"    => "Isian :attribute mesti antara :min dan :max kilobait.",
        "string"  => "Isian :attribute mesti antara :min dan :max aksara.",
        "array"   => "Isian :attribute mesti antara :min dan :max item.",
    ],
    "boolean"              => "Isian :attribute mesti benar atau salah",
    "confirmed"            => "Pengesahan :attribute tidak sepadan.",
    "date"                 => "Isian :attribute bukan tarikh yang sah.",
    "date_format"          => "Isian :attribute tidak sepadan dengan format :format.",
    "different"            => "Isian :attribute dan :other mesti berbeza.",
    "digits"               => "Isian :attribute mesti mengandungi :digits digit.",
    "digits_between"       => "Isian :attribute mesti antara :min dan :max digit.",
    'dimensions'           => 'Dimensi imej :attribute tidak sah.',
    'distinct'             => 'Isian :attribute adalah duplikat.',
    "email"                => "Isian :attribute mesti alamat emel yang sah.",
    "exists"               => "Isian :attribute yang dipilih tidak sah.",
    'file'                 => 'Isian :attribute mesti berupa fail.',
    "filled"               => "Ruangan isian :attribute diperlukan.",
    "image"                => "Isian :attribute mesti imej.",
    "in"                   => "Isian :attribute yang dipilih tidak sah.",
    'in_array'             => 'Isian :attribute tidak wujud dalam :other.',
    "integer"              => "Isian :attribute mesti nombor bulat.",
    "ip"                   => "Isian :attribute mesti alamat IP yang sah.",
    'ipv4'                 => 'Isian :attribute mesti alamat IPv4 yang sah.',
    'ipv6'                 => 'Isian :attribute mesti alamat IPv6 yang sah.',
    'json'                 => 'Isian :attribute mesti rentetan JSON yang sah.',
    "max"                  => [
        "numeric" => "Isian :attribute tidak boleh melebihi :max.",
        "file"    => "Isian :attribute tidak boleh melebihi :max kilobait.",
        "string"  => "Isian :attribute tidak boleh melebihi :max aksara.",
        "array"   => "Isian :attribute tidak boleh melebihi :max item.",
    ],
    "mimes"                => "Isian :attribute mesti jenis dokumen: :values.",
    'mimetypes'            => 'Isian :attribute mesti jenis dokumen: :values.',
    "min"                  => [
        "numeric" => "Isian :attribute mesti sekurang-kurangnya :min.",
        "file"    => "Isian :attribute mesti sekurang-kurangnya :min kilobait.",
        "string"  => "Isian :attribute mesti sekurang-kurangnya :min aksara.",
        "array"   => "Isian :attribute mesti sekurang-kurangnya :min item.",
    ],
    "not_in"               => "Isian :attribute yang dipilih tidak sah.",
    "numeric"              => "Isian :attribute mesti nombor.",
    'present'              => 'Isian :attribute mesti wujud.',
    "regex"                => "Format isian :attribute tidak sah.",
    "required"             => "Ruangan ini diperlukan.",
    "required_if"          => "Ruangan ini diperlukan apabila :other adalah :value.",
    'required_unless'      => 'Ruangan ini diperlukan kecuali :other adalah :values.',
    "required_with"        => "Ruangan ini diperlukan apabila terdapat :values.",
    "required_with_all"    => "Ruangan ini diperlukan apabila terdapat :values.",
    "required_without"     => "Ruangan ini diperlukan apabila tiada :values.",
    "required_without_all" => "Ruangan ini diperlukan apabila tiada :values.",
    "same"                 => "Isian :attribute dan :other mesti sama.",
    "size"                 => [
        "numeric" => "Isian :attribute mesti berukuran :size.",
        "file"    => "Isian :attribute mesti berukuran :size kilobait.",
        "string"  => "Isian :attribute mesti berukuran :size aksara.",
        "array"   => "Isian :attribute mesti mengandungi :size item.",
    ],
    "string"               => "Isian :attribute mesti rentetan.",
    "timezone"             => "Isian :attribute mesti zon masa yang sah.",
    "unique"               => "Isian :attribute telah wujud sebelum ini.",
    'uploaded'             => 'Isian :attribute gagal dimuat naik.',
    "url"                  => "Format isian :attribute tidak sah.",

    /*
    |---------------------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi Kustom
    |---------------------------------------------------------------------------------------
    |
    | Di sini Anda dapat menentukan pesan validasi kustom untuk atribut dengan menggunakan
    | konvensi "attribute.rule" dalam penamaan baris. Hal ini membuat cepat dalam
    | menentukan spesifik baris bahasa kustom untuk aturan atribut yang diberikan.
    |
    */

    'user' => [
        'replacement_user_id' => [
            'required' => 'Diperlukan.',
        ],
    ],

    /*
    |---------------------------------------------------------------------------------------
    | Kustom Validasi Atribut
    |---------------------------------------------------------------------------------------
    |
    | Baris bahasa berikut digunakan untuk menukar atribut 'place-holders'
    | dengan sesuatu yang lebih bersahabat dengan pembaca seperti Alamat Surel daripada
    | "surel" saja. Ini benar-benar membantu kita membuat pesan sedikit bersih.
    |
    */

    'attributes' => [],

];
