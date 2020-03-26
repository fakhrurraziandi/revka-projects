<?php 

return [
    'app' => [
        'title' => 'General',
        'desc' => 'All the general settings for application.',
        'icon' => 'glyphicon glyphicon-sunglasses',

        'elements' => [
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'app_name', // unique name for field
                'label' => 'App Name', // you know what label it is
                'rules' => 'required|min:2|max:50', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'CoolApp' // default value if you want
            ]
        ]
            ],

    'services_section_setting' => [
        'title' => 'Services Sections Setting',
        'desc' => 'All Services Sections Setting',
        'icon' => 'glyphicon glyphicon-sunglasses',

        'elements' => [
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'service_section__title', // unique name for field
                'label' => 'Title', // you know what label it is
                'rules' => 'required|min:2|max:50', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Our Services' // default value if you want
            ],
            [
                'type' => 'textarea', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'service_section__subtitle', // unique name for field
                'label' => 'Sub Title', // you know what label it is
                'rules' => 'required|min:2', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut doloremque, voluptatibus perferendis id nobis blanditiis dolorum ex aliquid.' // default value if you want
            ]
        ]
    ],

    'about_section_setting' => [
        'title' => 'About Sections Setting',
        'desc' => 'All About Sections Setting',
        'icon' => 'glyphicon glyphicon-sunglasses',

        'elements' => [
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'about_section__title', // unique name for field
                'label' => 'Title', // you know what label it is
                'rules' => 'required|min:2|max:50', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'About Us' // default value if you want
            ],
            [
                'type' => 'textarea', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'about_section__subtitle', // unique name for field
                'label' => 'Sub Title', // you know what label it is
                'rules' => 'required|min:2', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'We must understand what your needs are in order to offer.' // default value if you want
            ],
            [
                'type' => 'textarea', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'about_section__detail', // unique name for field
                'label' => 'Detail', // you know what label it is
                'rules' => 'required|min:2', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Revka Merupakan salah perusahaan IT Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium molestias aliquid repellendus illum, adipisci dicta sunt ratione numquam?' // default value if you want
            ],
            
        ]
    ],

    'value_section_setting' => [
        'title' => 'Value Sections Setting',
        'desc' => 'All Value Sections Setting',
        'icon' => 'glyphicon glyphicon-sunglasses',

        'elements' => [
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'value_section__title', // unique name for field
                'label' => 'Title', // you know what label it is
                'rules' => 'required|min:2|max:50', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Our Value' // default value if you want
            ],
            [
                'type' => 'textarea', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'value_section__subtitle', // unique name for field
                'label' => 'Sub Title', // you know what label it is
                'rules' => 'required|min:2', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, doloribus! Dolor provident voluptate qui iste sapiente! Consequuntur, corrupti?' // default value if you want
            ],
            
        ]
    ],

    
    'testimonial_section_setting' => [
        'title' => 'Testimonial Sections Setting',
        'desc' => 'All Testimonial Sections Setting',
        'icon' => 'glyphicon glyphicon-sunglasses',

        'elements' => [
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'testimonial_section__title', // unique name for field
                'label' => 'Title', // you know what label it is
                'rules' => 'required|min:2|max:50', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Clients Testimonials' // default value if you want
            ],
            [
                'type' => 'textarea', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'testimonial_section__subtitle', // unique name for field
                'label' => 'Sub Title', // you know what label it is
                'rules' => 'required|min:2', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, doloribus! Dolor provident voluptate qui iste sapiente! Consequuntur, corrupti?' // default value if you want
            ],
            
        ]
    ],

    'portofolio_section_setting' => [
        'title' => 'Portofolio Sections Setting',
        'desc' => 'All Portofolio Sections Setting',
        'icon' => 'glyphicon glyphicon-sunglasses',

        'elements' => [
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'portofolio_section__title', // unique name for field
                'label' => 'Title', // you know what label it is
                'rules' => 'required|min:2|max:50', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Our Portofolios' // default value if you want
            ],
            [
                'type' => 'textarea', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'portofolio_section__subtitle', // unique name for field
                'label' => 'Sub Title', // you know what label it is
                'rules' => 'required|min:2', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, doloribus! Dolor provident voluptate qui iste sapiente! Consequuntur, corrupti?' // default value if you want
            ],
            
        ]
    ],

    'contact_section_setting' => [
        'title' => 'Contact Sections Setting',
        'desc' => 'All Contact Sections Setting',
        'icon' => 'glyphicon glyphicon-sunglasses',

        'elements' => [
            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'contact_section__title', // unique name for field
                'label' => 'Title', // you know what label it is
                'rules' => 'required|min:2|max:50', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Our Portofolios' // default value if you want
            ],
            [
                'type' => 'textarea', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'contact_section__subtitle', // unique name for field
                'label' => 'Sub Title', // you know what label it is
                'rules' => 'required|min:2', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, doloribus! Dolor provident voluptate qui iste sapiente! Consequuntur, corrupti?' // default value if you want
            ],

            [
                'type' => 'textarea', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'contact_section__address', // unique name for field
                'label' => 'Address', // you know what label it is
                'rules' => 'required|min:2', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Jl. Jupiter Tengah 1 Bandung, Indonesia' // default value if you want
            ],

            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'contact_section__email', // unique name for field
                'label' => 'Email', // you know what label it is
                'rules' => 'required|min:2', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Customer@revka.id' // default value if you want
            ],

            [
                'type' => 'text', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'contact_section__phone_number', // unique name for field
                'label' => 'Phone Number', // you know what label it is
                'rules' => 'required|min:2', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '0813 2002 3346' // default value if you want
            ],

            
            
        ]
    ],

];