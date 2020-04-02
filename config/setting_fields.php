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


            [
                'type' => 'textarea', // input fields type
                'data' => 'string', // data type, string, int, boolean
                'name' => 'contact_section__google_map_embedded_script', // unique name for field
                'label' => 'Google Map Embedded Script', // you know what label it is
                'rules' => 'required|min:2', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5254036543893!2d107.65880851532476!3d-6.947178369942726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8227918c261%3A0x3936e8e0a71663e3!2sJl.%20Jupiter%20Tengah%20III%2C%20Sekejati%2C%20Kec.%20Buahbatu%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040286!5e0!3m2!1sen!2sid!4v1584994705283!5m2!1sen!2sid" frameborder="0" style="border:0; height: 100%; width: 100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>' // default value if you want
            ],

            
            
        ]
    ],

    'social_media_setting' => [
        'title' => 'Social Media Setting',
        'desc' => 'All Social Media Setting',
        'icon' => 'glyphicon glyphicon-sunglasses',

        'elements' => [
            [
                'type' => 'textarea', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'social_media__facebook_url', // unique name for field
                'label' => 'Facebook URL', // you know what label it is
                'rules' => 'required|min:2|max:50', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'https://www.facebook.com/' // default value if you want
            ],
            [
                'type' => 'textarea', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'social_media__twitter_url', // unique name for field
                'label' => 'Twitter URL', // you know what label it is
                'rules' => 'required|min:2', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'https://twitter.com/' // default value if you want
            ],
            [
                'type' => 'textarea', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'social_media__instagram_url', // unique name for field
                'label' => 'Instagram URL', // you know what label it is
                'rules' => 'required|min:2', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'https://instagram.com/' // default value if you want
            ],
            [
                'type' => 'textarea', // input fields type
                'data' => 'text', // data type, string, int, boolean
                'name' => 'social_media__youtube_url', // unique name for field
                'label' => 'Youtube URL', // you know what label it is
                'rules' => 'required|min:2', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'https://youtube.com/' // default value if you want
            ],
            
        ]
    ],

];