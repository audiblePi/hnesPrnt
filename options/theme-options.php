<?php
/* Theme Options page: */

$main_tab = array(
  "name" => "main_options",
  "title" => __("Theme Options"),
  'sections' => array(
                      'header' => array(
                                        'name' => 'header',
                                        'title' => __( 'Header Options' ),
                                        'description' => __( 'Set Options for Header used throughout site.')
                                        ),
                      'front_page_section1' => array(
                                                  'name' => 'front_page_section1',
                                                  'title' => __( 'Intro Section' ),
                                                  'description' => __( 'Section Content.')
                                                  ),
                      'front_page_section2' => array(
                                                  'name' => 'front_page_section2',
                                                  'title' => __( 'Printing Services Section' ),
                                                  'description' => __( 'Section Content.')
                                                  ),
                      'front_page_section3' => array(
                                                  'name' => 'front_page_section3',
                                                  'title' => __( 'Features Section' ),
                                                  'description' => __( 'Section Content.')
                                                  ),
                      'front_page_section4' => array(
                                                  'name' => 'front_page_section4',
                                                  'title' => __( 'Recent Projects Section' ),
                                                  'description' => __( 'Section Content.')
                                                  ),
                      'front_page_section5' => array(
                                                  'name' => 'front_page_section5',
                                                  'title' => __( 'Testimonials Section' ),
                                                  'description' => __( 'Section Content.')
                                                  ),
                      'business_information' => array(
                                                      'name' => 'business_information',
                                                      'title' => __( 'Business Information' ),
                                                      'description' => __( 'Set general business information about company.')
                                                      )
                      ),
);
register_theme_option_tab($main_tab);

$mainoptions = array(
  "site_logo" => array(
                      "tab" => "main_options",
                      "name" => "site_logo",
                      "title" => "Site Logo",
                      "description" => __( "Upload logo to be used in header" ),
                      "section" => "header",
                      "id" => "site_logo",
                      "type" => "image"
                    ),
  "tagline" => array(
                     "tab" => "main_options",
                     "name" => "tagline",
                     "title" => "Tag Line",
                     "description" => __( "Enter the company's tagline" ),
                     "section" => "header",
                     "id" => "tagline",
                     "type" => "text"
                     ),
  "phone_number" => array(
                     "tab" => "main_options",
                     "name" => "phone_number",
                     "title" => "Phone Number",
                     "description" => __( "Enter the company's phone number" ),
                     "section" => "header",
                     "id" => "phone_number",
                     "type" => "text"
                     ),
  "background" => array(
                     "tab" => "main_options",
                     "name" => "background",
                     "title" => "Background",
                     "description" => __( "Select a backgoround image (header and footer)" ),
                     "section" => "header",
                     "id" => "background",
                     "type" => "image"
                     ),







  
  "section1_content" => array(
                            "tab" => "main_options",
                            "name" => "section1_content",
                            "title" => "Content",
                            "description" => __( "Enter text." ),
                            "section" => "front_page_section1",
                            "id" => "section1_content",
                            "type" => "textarea"
                            ),








  "section2_title" => array(
                            "tab" => "main_options",
                            "name" => "section2_title",
                            "title" => "Title",
                            "description" => __( "Enter text." ),
                            "section" => "front_page_section2",
                            "id" => "section2_title",
                            "type" => "textarea"
                            ),









   "section3_title" => array(
                            "tab" => "main_options",
                            "name" => "section3_title",
                            "title" => "Title",
                            "description" => __( "Enter text." ),
                            "section" => "front_page_section3",
                            "id" => "section3_title",
                            "type" => "textarea"
                            ),









  "section4_title" => array(
                            "tab" => "main_options",
                            "name" => "section4_title",
                            "title" => "Title",
                            "description" => __( "Enter text." ),
                            "section" => "front_page_section4",
                            "id" => "section4_title",
                            "type" => "textarea"
                            ),
  










  
  "section5_title" => array(
                            "tab" => "main_options",
                            "name" => "section5_title",
                            "title" => "Title",
                            "description" => __( "Enter text." ),
                            "section" => "front_page_section5",
                            "id" => "section5_title",
                            "type" => "textarea"
                            ),









  "facebook" => array(
                     "tab" => "main_options",
                     "name" => "facebook",
                     "title" => "Facebook Profile",
                     "description" => __( "Enter the company Facebook URL" ),
                     "section" => "business_information",
                     "id" => "facebook",
                     "type" => "text"
                     ),
  "twitter" => array(
                    "tab" => "main_options",
                    "name" => "twitter",
                    "title" => "Twitter Profile",
                    "description" => __( "Enter the company Twitter" ),
                    "section" => "business_information",
                    "id" => "twitter",
                    "type" => "text"
                    ),
  "linkedin" => array(
                   "tab" => "main_options",
                   "name" => "linkedin",
                   "title" => "LinkedIn Profile",
                   "description" => __( "Enter the company LinkedIn URL" ),
                   "section" => "business_information",
                   "id" => "linkedin",
                   "type" => "text"
                   ),
  "googleplus" => array(
                   "tab" => "main_options",
                   "name" => "googleplus",
                   "title" => "Google+ Profile",
                   "description" => __( "Enter the company Google+ URL" ),
                   "section" => "business_information",
                   "id" => "googleplus",
                   "type" => "text"
                   ),
  "contact_email" => array(
                   "tab" => "main_options",
                   "name" => "contact_email",
                   "title" => "Contact Email",
                   "description" => __( "Enter the company contact email" ),
                   "section" => "business_information",
                   "id" => "contact_email",
                   "type" => "text"
                   ),
  "office_location" => array(
                            "tab" => "main_options",
                            "name" => "office_location",
                            "title" => "Office Location",
                            "description" => __( "Enter office location which will be used for displaying on Google Map for site." ),
                            "section" => "business_information",
                            "id" => "office_location",
                            "type" => "text"
                          )
);
register_theme_options($mainoptions);