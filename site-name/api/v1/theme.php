<?php 

// required headers

header("Access-Control-Allow-Origin: *");

header("Content-Type: application/json; charset=UTF-8");



$phone_number = '0000000000';

	$company_info = (object) [

	    "name" => "Company Name",

	    "phone_number" => $phone_number,

        "logos" => (object) [

          "main_logo" => "img/main-logo.png",

          "white_logo" => "img/main-logo.png"

        ],

        "google_maps_api_key" => " ",

        "default_maps_marker" => "img/marker.png",

        "favicon" => "img/favicon.png",

        "tracking_head_tag" => html_entity_decode("
        
        <!-- Google Tag Manager Head Code Starts -->


        <!-- Google Tag Manager Head Code Ends -->
        
        "),

        "tracking_body_tag" => html_entity_decode('
        
        <!-- Google Tag Manager Body Code Starts -->


        <!-- Google Tag Manager Body Code Ends -->
        
    
        '),

        "scripts_body_tag" => html_entity_decode("
        <!-- Call Rail Script Starts --> 
        
        <!-- Call Rail Script Ends -->
        
        "),

        "do_not_index" => true

  ];

  $ppc_info = (object) [ //Uncomment for phone number switching or city switching

        /*"source_cookie_phone_numbers" => (object) [

          "ppc" => "8888888888",

          "googleppc" => "9999999999"

        ],*/

        "city_cookie_text" => (object) [

          "boston" => "Boston",

          "medford" => "Medford"

        ]

  ];

  $main_menu = (object) [

    (object) [

      "menu_title" => "Product",

      "menu_link" => "product"

    ],

    (object) [

      "menu_title" => "Why Choose Us",

      "menu_link" => "why-choose-us"

    ],

    (object) [

      "menu_title" => "Financing",

      "menu_link" => "financing"

    ],

    (object) [

      "menu_title" => "Specials",

      "menu_link" => "specials"

    ],

    (object) [

      "menu_title" => "Contact Us",

      "menu_link" => "contact-us"

    ]

  ];

  $footer_menu = (object) [

    "title" => 'Main Menu',

    "items" => [

      (object) [

        "menu_title" => "Why Choose Us",

        "menu_link" => "why-choose-us"

      ],

      (object) [

        "menu_title" => "Financing",

        "menu_link" => "financing"

      ],

      (object) [

        "menu_title" => "Specials",

        "menu_link" => "specials"

      ],

      (object) [

        "menu_title" => "Contact Us",

        "menu_link" => "contact-us"

      ]
      

    ]

  ];

  $mobile_bar_menu = (object) [

      (object) [

        "id" => "first_mobile_buttom",

        "menu_title" => "Get a Free Estimate",

        "menu_link" => "get-a-quote"

      ],

      (object) [

        "id" => "last_mobile_button",

        "menu_title" => "Contact Us Today",

        "menu_link" => "tel:" . $phone_number

      ]

  ];

	$theme_content = (object) [

        "home_ctas" => [

          (object) [

            "id" => "cta_left",

            "image_url" => "img/home/cta-left.jpg",

            "top_text" => "CTA Left Text",

            "bottom_text" => html_entity_decode('<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>'),

            "button" => (object) [

              "url" => "specials",

              "text" => "Learn More"

            ]

          ],

          (object) [

            "id" => "cta_right",

            "image_url" => "img/home/cta-right.jpg",

            "top_text" => "CTA Right Text",

            "bottom_text" => html_entity_decode('<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>'),

            "button" => (object) [

              "url" => "specials",

              "text" => "Learn More"

            ]

          ]

            

        ],

        "trust" => (object) [

          "title" => "Trust Title",

          "subtitle" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.",

          "form_trust" => [

            (object) [

            "url" => "img/trust-logo/trust-one.png",

            "alt" => "Trust Logo 1",

            ],

            (object) [

            "url" => "img/trust-logo/trust-two.png",

            "alt" => "Trust Logo 2",

            ],

            (object) [

            "url" => "img/trust-logo/trust-three.png",

            "alt" => "Trust Logo 3",

            ],

          ]

        ],

        "whychoose" => (object) [

            "image_url" => "img/home/whychooseus-content.jpg",

            "top_text" => "Why Choose Us",

            "content" => html_entity_decode('<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>'),

            "button" => (object) [

              "url" => "why-choose-us",

              "text" => "Learn More"

            ]            

        ],

        "testimonials" => (object) [

            "top_text" => "What Our Clients Are Saying",

            "bottom_text" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",

            "reviews" => [

              // Paste Testimonials Within The Quotation Marks

              (object) [

                "author" => "Name 1",

                "rating" => 5,

                "content" => html_entity_decode('<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>')

              ],

              (object) [

                "author" => "Name 2",

                "rating" => 5,

                "content" => html_entity_decode('<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>')

              ],

              (object) [

                "author" => "Name 3",

                "rating" => 5,

                "content" => html_entity_decode('<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>')

              ]       

            ]

        ],

        "subfooter" => (object) [

          "directions_button" => (object) [

            "url" => "contact-us",

            "text" => "Get Directions"

            ],

            "form"=> (object) [

            'title' => 'Sub-footer Form Title',

            'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.',

            'buttontext' => 'Get a Free Quote Now!'

            ]

            ],

        "bottom_bar" => (object) [

          "text" => "Contact Us Now:"

          ],

        "sticky" => (object) [

            "form"=> (object) [

              'buttontext' => 'Get a Free Quote'

            ]

          ]

	];

	$social_networks = [

        (object) [

          "icon_class" => "fa-twitter",

          "url" => "#"

        ],

        (object) [

          "icon_class" => "fa-facebook",

          "url" => "#"

        ]

	];

  $locations = [

        (object) [

          "footer_description" => html_entity_decode('<strong class="location-title">Location 1 </strong><br />2701 N Rocky Point Dr <br />Tampa, FL 33607'),

          'phone_number' => $phone_number,

          "description" => html_entity_decode('<strong>Location 1</strong><br /> 2701 N Rocky Point Dr <br />Tampa, FL 33607'),

          "lat" => "27.9647277",

          "lng" => "-82.5712834",

          "hours_of_operation" => html_entity_decode('
          <p class="hourssection"><strong>Monday - Friday: </strong> <span  class="time"> 9:00AM - 6:00PM </span><br /></p>
          <p class="hourssection"><strong>Sunday: </strong> <span  class="time">Closed</span><br /></p>
          ')

        ],

        (object) [

          "footer_description" => html_entity_decode('<strong class="location-title">Location 2</strong> <br />2701 N Rocky Point Dr <br />Tampa, FL 33607'),

          'phone_number' => $phone_number,

          "description" => html_entity_decode("<strong>Southern New England</strong><br /> 2701 N Rocky Point Dr <br />Tampa, FL 33607"),

            "lat" => "42.058630",

            "lng" => "-71.296170",

            "hours_of_operation" => html_entity_decode('
            <p class="hourssection"><strong>Monday - Friday: </strong> <span  class="time"> 9:00AM - 6:00PM </span><br /></p>
            <p class="hourssection"><strong>Sunday: </strong> <span  class="time">Closed</span><br /></p>
            ')

        ]

  ];

	$trust = [

        (object) [

            "url" => "img/brands-logo/one.png",

            "link_url" => "",

            "alt" => "Brand logo"

        ],
        (object) [

          "url" => "img/brands-logo/two.png",

          "link_url" => "",

          "alt" => "Brand logo"

      ],
        (object) [

          "url" => "img/brands-logo/three.png",

          "link_url" => "",

          "alt" => "Brand logo"

      ]

	];


	echo json_encode($data);