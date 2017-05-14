<?php


function sanitize_output($buffer) {

  $search = array(
    '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
    '/[^\S ]+\</s',     // strip whitespaces before tags, except space
    '/(\s)+/s',         // shorten multiple whitespace sequences
    '/<!--(.|\s)*?-->/' // Remove HTML comments
  );

  $replace = array(
    '>',
    '<',
    '\\1',
    ''
  );

  $buffer = preg_replace($search, $replace, $buffer);

  return $buffer;
}

ob_start("sanitize_output");



$site_background_image = "/assets/images/bg.jpg";
$site_google_map_api = "AIzaSyBifc4q3Rgjph4MgJ1AZNCvyNi8EyPPy4M";

$social_link = [
  "fb" => "http://facebook.com",
  "tw" => "http://twitter.com",
  "fq" => "http://foursquare.com",
  "ig" => "http://instagram.com",
];

$nav_menu = [
  [
    "label" => "home",
    "link"  => "/"
  ],
  [
    "label" => "menu",
    "link"  => "/menu"
  ],
  [
    "label" => "reservation",
    "link"  => "/reservation"
  ],
  [
    "label" => "blog",
    "link"  => "/blog"
  ],
  [
    "label" => "contact",
    "link"  => "/contact"
  ],
];


$menu_food = [
  [
    "name" => "SALADS",
    "lists" => [
      [
        "name" => "GREEN FIELDS SALAD",
        "price" => "$13"
      ],
      [
        "name" => "FIVE TOMATOES SALAD",
        "price" => "$13"
      ],
      [
        "name" => "SUMMER VEGETABLES SALAD",
        "price" => "$15"
      ],
      [
        "name" => "ROASTED BROCCOLI & COLIFLOWER SALAD",
        "price" => "$13"
      ]
    ]
  ],
  [
    "name" => "SOUPS",
    "lists" => [
      [
        "name" => "BEETROOT AND CREAM SOUP",
        "price" => "$17"
      ],
      [
        "name" => "BEETROOT AND CREAM SOUP",
        "price" => "$17"
      ],
    ]
  ],
  [
    "name" => "MAINS",
    "lists" => [
      [
        "name" => "PESTO LAMB CUTLETS WITH SPRING RATATOUILLE",
        "price" => "$25"
      ],
      [
        "name" => "ROAST CAPSICUM, TOMATO AND GARLIC STEAK",
        "price" => "$23"
      ],
      [
        "name" => "SPICE - RUBBED STEAK WITH BAKED JACKET POTATOES",
        "price" => "$25"
      ],
      [
        "name" => "SPICE - CRUSTED CHICKEN SLICES",
        "price" => "$15"
      ],
      [
        "name" => "GOLDEN ROASTED LEMON AND TARRAGON CHICKEN",
        "price" => "$18"
      ],
    ]
  ],
];



$blog = [

  [
    "topic" => "MOTHERʼS DAY LUNCH",
    "datetime" => "14 MAY 17 l 11:00 AM - 3:00 PM",
    "thump" => "/assets/images/thump1.jpg",
    "description" => "Celebrate the leading Lady in your life with a love - filled 5 course menu. Weʼll take care of everything, so you can focus on whatʼs ..."
  ],
  [
    "topic" => "SMOOTHIES WEEK",
    "datetime" => "23 MAY 17 l 9:30 AM - 2:30 PM",
    "thump" => "/assets/images/thump2.jpg",
    "description" => "Weʼve crafted three unique smoothies to pair with our signature meze, itʼs up to you to decide for Smoothies Week at Planet Griddle"
  ]

];

