<?php

// required headers

header("Access-Control-Allow-Origin: *");

header("Content-Type: application/json; charset=UTF-8");



	if(!isset($_GET['page_id'])) :

		$page_id = 'error404';

	else :

		$page_id = $_GET['page_id'];

	endif;



	$page_data = (object) [

	    "home" => (object) [

          "seo_title" => "Home Page | DOORS",

          "seo_description" => "",

          "hero" => (object) [

	          "type" => "home",

	          "image" => "img/home/hero.jpg",

	          "title" => html_entity_decode('<span class="hero_text_sl">Hero Text!</span><br />
						
	          	<small>Sub-Text 1</small><br />

			  <small>Sub-Text 2</small>'),

	          "form_title" => "Form Title",

	          "form_subtitle" => "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.",

	          "form_button_text" => "Get a Free Quote Now!",

	          "button" => (object) [

		          "url" => "get-a-quote",

		          "text" => "Get a Free Quote Now!"

	          ]

          ],

          "cta" => (object) [

	          "type" => "home"

          ],

          "content" => [

          	(object) [

		          "image" => (object) [

			          "url" => "img/home/content.jpg",

			          "side" => "right",

			          "gradient" => false

		          ],

		          "overlay_image" => (object) [

			          "url" => "",

			          "alt" => ""

		          ],

		          "entry_content" => html_entity_decode('<h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</h1>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  </p>



					<p>Minim legendos has te. Te semper fierent consequat eos. His tation accusamus et, cetero salutatus eu pro. Ne duo vidisse fuisset, id per tota inciderint, ne mea malis utamur. Pri fastidii mediocritatem cu. Nam in eirmod commune salutatus, eos eu nihil ubique invenire. Ex eam iusto facilisis, eam ubique salutatus cotidieque an. Vis sint sonet consectetuer cu, no sea deseruisse voluptatum, postea volumus electram vis ne. Augue adversarium mea at, usu wisi placerat menandri ei.</p>



					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>'),

		          "button" => (object) [

			          "url" => "get-a-quote",

			          "text" => "Get a Quote"

		          ]

	          ]

          ],

          "gallery" => (object) [

          	"type" => "main"

          ],

          "trust" => true,

          "whychoose" => true,

          "testimonials" => true,

          "subfooter" => true

        ],


		"product" => (object) [

			"seo_title" => "Products | Doors",
  
			"seo_description" => "",
  
			"hero" => (object) [
  
				"type" => "internal",
  
				"image" => "img/product/hero.jpg",
  
				"title" => "Product Page",
  
				"form_subtitle" => "Lorem ipsum dolor sit amet, vim in utroque oporteat senserit, id mea odio graece lucilius.",
  
				"form_button_text" => "Get a Free Estimate",
  
				"button" => (object) [
  
					"url" => "get-a-quote",
  
					"text" => "Get a Free Quote Now!"
  
				]
  
			],
  
			"cta" => (object) [
  
				"type" => "internal",
  
				"image" => "img/product/cta.jpg",
  
				"top_text" => "Internal CTA Headline",
  
				"bottom_text" => html_entity_decode('<p>Lorem ipsum dolor sit amet, vim in utroque oporteat senserit.</p>'),
  
				"button" => (object) [
  
					"url" => "specials",
  
					"text" => "Learn More"
  
				]
  
			],
  
			"content" => [
  
				(object) [
  
					"image" => (object) [
  
						"url" => "img/product/content-one.jpg",
  
						"side" => "right",
  
						"gradient" => false
  
					],
  
					"overlay_image" => (object) [
  
						"url" => "",
  
						"alt" => ""
  
					],
  
					"entry_content" => html_entity_decode('<h1>Lorem ipsum dolor sit amet, vim in utroque oporteat</h1>
  
			<p>Lorem ipsum dolor sit amet, vim in utroque oporteat senserit, id mea odio graece lucilius. Nec facer perpetua in. Te errem audire eum, dolore adipiscing cu vel, ut sed prima simul. Augue vitae molestie qui in, vim reque libris ea. Minim legendos has te. Te semper fierent consequat eos. His tation accusamus et, cetero salutatus eu pro. Ne duo vidisse fuisset, id per tota inciderint, ne mea malis utamur. Pri fastidii mediocritatem cu.</p>
  
			<p>Lorem ipsum dolor sit amet, vim in utroque oporteat senserit:</p>
  
			<ul>
  
			  <li>Soluta aperiam definitiones ut mel, mollis efficiantur no mei, detracto intellegam nec in.</li>
  
			  <li>Soluta aperiam definitiones ut mel, mollis efficiantur no mei, detracto intellegam nec in.</li>
  
			  <li>Soluta aperiam definitiones ut mel, mollis efficiantur no mei, detracto intellegam nec in.</li>
  
			</ul>'),
  
					"button" => (object) [
  
						"url" => "get-a-quote",
  
						"text" => "Start Here"
  
					]
  
				],
  
				(object) [
  
					"image" => (object) [
  
						"url" => "img/product/content-two.jpg",
  
						"side" => "left",
  
						"gradient" => false,
  
						"background_position" => "center"
  
					],
  
					"overlay_image" => (object) [
  
						"url" => "",
  
						"alt" => ""
  
					],
  
					"entry_content" => html_entity_decode('<h1>Lorem ipsum dolor sit amet, vim in utroque oporteat</h1>
  
			<p>Lorem ipsum dolor sit amet, vim in utroque oporteat senserit, id mea odio graece lucilius. Nec facer perpetua in. Te errem audire eum, dolore adipiscing cu vel, ut sed prima simul. Augue vitae molestie qui in, vim reque libris ea. Minim legendos has te. Te semper fierent consequat eos. His tation accusamus et, cetero salutatus eu pro. Ne duo vidisse fuisset, id per tota inciderint, ne mea malis utamur. Pri fastidii mediocritatem cu.</p>
  
			<p>Nam id probo eleifend, an duo facer prompta theophrastus. His ei quas docendi assentior. Iuvaret iudicabit repudiandae nam id, usu malis accusamus in.</p>'),
  
					"button" => (object) [
  
						"url" => "get-a-quote",
  
						"text" => "Get a Quote"
  
					]
  
				]
  
			],
  
			"gallery" => (object) [
  
				"type" => "main"
  
			],
  
			"trust" => false,
  
			"whychoose" => false,
  
			"testimonials" => true,
  
			"subfooter" => true
  
		],
		
		
		"why-choose-us" => (object) [

          "seo_title" => "Why Choose Us | Doors",

          "seo_description" => "",

          "hero" => (object) [

	          "type" => "internal",

	          "image" => "img/why-choose-us/hero.jpg",

	          "title" => "Why Choose Us",

	          "form_subtitle" => "Lorem ipsum dolor sit amet, vim in utroque oporteat senserit, id mea odio graece lucilius.",

	          "form_button_text" => "Get a Free Estimate",

	          "button" => (object) [

		          "url" => "get-a-quote",

		          "text" => "Get a Free Quote Now!"

	          ]

          ],

          "cta" => (object) [

	          "type" => "internal",

	          "image" => "img/why-choose-us/cta.jpg",

	          "top_text" => "Internal CTA Headline",

	          "bottom_text" => html_entity_decode('<p>Lorem ipsum dolor sit amet, vim in utroque oporteat senserit.</p>'),

	          "button" => (object) [

		          "url" => "specials",

		          "text" => "Learn More"

	          ]

          ],

          "content" => [

          	(object) [

		          "image" => (object) [

			          "url" => "img/why-choose-us/content-one.jpg",

			          "side" => "right",

			          "gradient" => false

		          ],

		          "overlay_image" => (object) [

			          "url" => "",

			          "alt" => ""

		          ],

		          "entry_content" => html_entity_decode('<h1>Lorem ipsum dolor sit amet, vim in utroque oporteat</h1>

          <p>Lorem ipsum dolor sit amet, vim in utroque oporteat senserit, id mea odio graece lucilius. Nec facer perpetua in. Te errem audire eum, dolore adipiscing cu vel, ut sed prima simul. Augue vitae molestie qui in, vim reque libris ea. Minim legendos has te. Te semper fierent consequat eos. His tation accusamus et, cetero salutatus eu pro. Ne duo vidisse fuisset, id per tota inciderint, ne mea malis utamur. Pri fastidii mediocritatem cu.</p>

          <p>Lorem ipsum dolor sit amet, vim in utroque oporteat senserit:</p>

          <ul>

            <li>Soluta aperiam definitiones ut mel, mollis efficiantur no mei, detracto intellegam nec in.</li>

            <li>Soluta aperiam definitiones ut mel, mollis efficiantur no mei, detracto intellegam nec in.</li>

            <li>Soluta aperiam definitiones ut mel, mollis efficiantur no mei, detracto intellegam nec in.</li>

          </ul>'),

		          "button" => (object) [

			          "url" => "get-a-quote",

			          "text" => "Start Here"

		          ]

	          ],

	          (object) [

		          "image" => (object) [

			          "url" => "img/why-choose-us/content-two.jpg",

			          "side" => "left",

			          "gradient" => false,

			          "background_position" => "center"

		          ],

		          "overlay_image" => (object) [

			          "url" => "",

			          "alt" => ""

		          ],

		          "entry_content" => html_entity_decode('<h1>Lorem ipsum dolor sit amet, vim in utroque oporteat</h1>

          <p>Lorem ipsum dolor sit amet, vim in utroque oporteat senserit, id mea odio graece lucilius. Nec facer perpetua in. Te errem audire eum, dolore adipiscing cu vel, ut sed prima simul. Augue vitae molestie qui in, vim reque libris ea. Minim legendos has te. Te semper fierent consequat eos. His tation accusamus et, cetero salutatus eu pro. Ne duo vidisse fuisset, id per tota inciderint, ne mea malis utamur. Pri fastidii mediocritatem cu.</p>

          <p>Nam id probo eleifend, an duo facer prompta theophrastus. His ei quas docendi assentior. Iuvaret iudicabit repudiandae nam id, usu malis accusamus in.</p>'),

		          "button" => (object) [

			          "url" => "get-a-quote",

			          "text" => "Get a Quote"

		          ]

	          ]

          ],

          "gallery" => (object) [

          	"type" => "main"

          ],

          "trust" => false,

          "whychoose" => false,

          "testimonials" => true,

          "subfooter" => true

        ],

		"specials" => (object) [

			"seo_title" => "Specials | Doors",
  
			"seo_description" => "",
  
			"hero" => (object) [
  
				"type" => "internal_no_form",
  
				"image" => "img/specials/hero.jpg",
  
				"title" => "Specials",
  
				"form_subtitle" => "Lorem ipsum dolor sit amet, vim in utroque oporteat senserit, id mea odio graece lucilius."
  
			],
  
			"cta" => false,
  
			"content" => [
  
				(object) [
  
					"entry_content" => html_entity_decode('<h1>Lorem ipsum dolor sit amet, vim in utroque oporteat senserit, id mea odio graece lucilius.</h1>
  
					  <p>Te errem audire eum, dolore adipiscing cu vel, ut sed prima simul. Augue vitae molestie qui in, vim reque libris ea.</p>'),
  
					"form_id" => "specials",
  
				],
  
				(object) [
  
					"entry_content" => html_entity_decode('<p><small><em>* Installation savings applies to installation labor only. Does not include material costs. Promotion may not be combined with any other offer. Not valid on prior sales. L.J. Stone, Inc. is neither a broker nor a lender. Subject to credit approval. Interest billed during the promo period, all interest waived if the purchase amount is paid before expiration of promo period. No min. monthly pmt. required during promo period. Greensky Plan #3128. NMLS #1416362</small></em></p>')
  
				]
  
				],
  
			"gallery" => (object) [
  
				"type" => "main"
  
			],
  
			"trust" => false,
  
			"whychoose" => false,
  
			"testimonials" => true,
  
			"subfooter" => true
  
		],

	    
		"financing" => (object) [

			"seo_title" => "Financing | Doors",
  
			"seo_description" => "",
  
			"hero" => (object) [
  
				"type" => "internal_no_form",
  
				"image" => "img/financing/hero.jpg",
  
				"title" => "Financing",
  
				"form_subtitle" => "Lorem ipsum dolor sit amet, vim in utroque oporteat senserit, id mea odio graece lucilius."
  
			],
  
			"cta" => false,
  
			"content" => [
  
				(object) [
  
					"entry_content" => html_entity_decode('<h1>Lorem ipsum dolor sit amet, vim in utroque oporteat senserit, id mea odio graece lucilius.</h1>
  
					  <p>Te errem audire eum, dolore adipiscing cu vel, ut sed prima simul. Augue vitae molestie qui in, vim reque libris ea.</p>'),
  
					"form_id" => "financing",
  
				],
  
				(object) [
  
					"entry_content" => html_entity_decode('<p><small><em>* Installation savings applies to installation labor only. Does not include material costs. Promotion may not be combined with any other offer. Not valid on prior sales. L.J. Stone, Inc. is neither a broker nor a lender. Subject to credit approval. Interest billed during the promo period, all interest waived if the purchase amount is paid before expiration of promo period. No min. monthly pmt. required during promo period. Greensky Plan #3128. NMLS #1416362</small></em></p>')
  
				]
  
				],
  
			"gallery" => (object) [
  
				"type" => "main"
  
			],
  
			"trust" => false,
  
			"whychoose" => false,
  
			"testimonials" => true,
  
			"subfooter" => true
  
		],
		
		

	    "contact-us" => (object) [

          "seo_title" => "Contact Us | Doors",

          "seo_description" => "",

          "hero" => (object) [

	          "type" => "internal_no_form",

	          "image" => "img/contact-us/hero.jpg",

	          "title" => "Contact",

	          "form_subtitle" => "Contact us today to get started!"

          ],

          "cta" => false,

          "content" => [

          	(object) [

		          "entry_content" => html_entity_decode('<h1>Contact Us</h1>

    		<p>Contact us today to learn more.</p>'),

					"contact" => true,

		          "form_id" => "contact"

	          ]

	          ],

          "gallery" => (object) [

          	"type" => "main"

          ],

          "trust" => false,

          "whychoose" => false,

          "testimonials" => true,

          "subfooter" => true

        ],

	    "get-a-quote" => (object) [

          "seo_title" => "Get a Quote | Doors",

          "seo_description" => "",

          "hero" => (object) [

	          "type" => "internal_no_form",

	          "image" => "img/get-a-quote/hero.jpg",

	          "title" => "Lorem ipsum dolor sit amet",

	          "form_subtitle" => "Get your no-obligation quote today!"

          ],

          "cta" => false,

          "content" => [

          	(object) [

		          "entry_content" => html_entity_decode('<h1>Lorem ipsum dolor sit amet, consectetur adipiscing</h1>

    		<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>'),

		          "form_id" => "hero"

	          ]

	          ],

          "gallery" => (object) [

          	"type" => "main"

          ],

          "trust" => false,

          "whychoose" => false,

          "testimonials" => true,

          "subfooter" => true

        ],

	    "thanks-quote" => (object) [

          "seo_title" => "Thank You | Doors",

          "seo_description" => "",

          "hero" => (object) [

	          "type" => "internal_no_form",

	          "image" => "img/thank-you/hero.jpg",

	          "title" => ""

          ],

          "cta" => (object) [

	          "type" => "home"

          ],

          "content" => [

          	(object) [

		          "entry_content" => html_entity_decode('<h1>Thank You</h1>

    		<p>We\'ve received your information! A representative will be contacting you shortly.</p>')

	          ]

	          ],

          "gallery" => (object) [

          	"type" => "main"

          ],

          "trust" => false,

          "whychoose" => false,

          "testimonials" => true,

          "subfooter" => true

        ],

	    "thanks-footer-quote" => (object) [

          "seo_title" => "Thank You | Doors",

          "seo_description" => "",

          "hero" => (object) [

	          "type" => "internal_no_form",

	          "image" => "img/thank-you/hero.jpg",

	          "title" => ""

          ],

          "cta" => (object) [

	          "type" => "home"

          ],

          "content" => [

          	(object) [

		          "entry_content" => html_entity_decode('<h1>Thank You</h1>

    		<p>We\'ve received your information! A representative will be contacting you shortly.</p>')

	          ]

	          ],

          "gallery" => (object) [

          	"type" => "main"

          ],

          "trust" => false,

          "whychoose" => false,

          "testimonials" => true,

          "subfooter" => true

        ],

	    "thanks-sticky-quote" => (object) [

          "seo_title" => "Thank You | Doors",

          "seo_description" => "",

          "hero" => (object) [

	          "type" => "internal_no_form",

	          "image" => "img/thank-you/hero.jpg",

	          "title" => ""

          ],

          "cta" => (object) [

	          "type" => "home"

          ],

          "content" => [

          	(object) [

		          "entry_content" => html_entity_decode('<h1>Thank You</h1>

    		<p>We\'ve received your information! A representative will be contacting you shortly.</p>')

	          ]

	          ],

          "gallery" => (object) [

          	"type" => "main"

          ],

          "trust" => false,

          "whychoose" => false,

          "testimonials" => true,

          "subfooter" => true

        ],

	    "thanks-financing" => (object) [

          "seo_title" => "Thank You | Doors",

          "seo_description" => "",

          "hero" => (object) [

	          "type" => "internal_no_form",

	          "image" => "img/thank-you/hero.jpg",

	          "title" => ""

          ],

          "cta" => (object) [

	          "type" => "home"

          ],

          "content" => [

          	(object) [

		          "entry_content" => html_entity_decode('<h1>Thank You</h1>

    		<p>We\'ve received your information! A representative will be contacting you shortly.</p>')

	          ]

	          ],

          "gallery" => (object) [

          	"type" => "main"

          ],

          "trust" => false,

          "whychoose" => false,

          "testimonials" => true,

          "subfooter" => true

        ],

	    "thanks-specials" => (object) [

          "seo_title" => "Thank You | Doors",

          "seo_description" => "",

          "hero" => (object) [

	          "type" => "internal_no_form",

	          "image" => "img/thank-you/hero.jpg",

	          "title" => ""

          ],

          "cta" => (object) [

	          "type" => "home"

          ],

          "content" => [

          	(object) [

		          "entry_content" => html_entity_decode('<h1>Thank You</h1>

    		<p>We\'ve received your information! A representative will be contacting you shortly.</p>')

	          ]

	          ],

          "gallery" => (object) [

          	"type" => "main"

          ],

          "trust" => false,

          "whychoose" => false,

          "testimonials" => true,

          "subfooter" => true

        ],

	    "thanks-contact" => (object) [

          "seo_title" => "Thank You | Doors",

          "seo_description" => "",

          "hero" => (object) [

	          "type" => "internal_no_form",

	          "image" => "img/thank-you/hero.jpg",

	          "title" => ""

          ],

          "cta" => (object) [

	          "type" => "home"

          ],

          "content" => [

          	(object) [

		          "entry_content" => html_entity_decode('<h1>Thank You</h1>

    		<p>We\'ve received your information! A representative will be contacting you shortly.</p>')

	          ]

	          ],

          "gallery" => (object) [

          	"type" => "main"

          ],

          "trust" => false,

          "whychoose" => false,

          "testimonials" => true,

          "subfooter" => true

        ],

	    "error404" => (object) [

	    	"header_code" => "HTTP/1.0 404 Not Found",

          "seo_title" => "404 Page",

          "seo_description" => "404 Page Description",

          "hero" => false,

          "cta" => false,

          "gallery" => false,

          "content" => [

          	(object) [

		          "entry_content" => html_entity_decode('<h1>Sorry, Page Could Not Be Found</h1>

          <p>We\'re sorry. This page could not be found. Please try navigating to another page.</p>')

	          ]

          ],

          "trust" => false,

          "whychoose" => false,

          "testimonials" => false,

          "subfooter" => true

        ]

	  ];

	if(empty($page_data->$page_id)) {

		$page_id = 'error404';

	}

	$data = (object) [

	    'page_data' => $page_data->$page_id

	  ];

	echo json_encode($data);