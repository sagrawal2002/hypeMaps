<?php

function hj_places_get_marker_types() {
    $marker_types = array(
        "default" => elgg_echo("markertype:value:default"),
        "airport" => elgg_echo("markertype:value:airport"),
        "amusement_park" => elgg_echo("markertype:value:amusement_park"),
        "aquarium" => elgg_echo("markertype:value:aquarium"),
        "art_gallery" => elgg_echo("markertype:value:art_gallery"),
        "atm" => elgg_echo("markertype:value:atm"),
        "bakery" => elgg_echo("markertype:value:bakery"),
        "bank" => elgg_echo("markertype:value:bank"),
        "bar" => elgg_echo("markertype:value:bar"),
        "beauty_salon" => elgg_echo("markertype:value:beauty_salon"),
        "bicycle_store" => elgg_echo("markertype:value:bicycle_store"),
        "bowling_alley" => elgg_echo("markertype:value:bowling_alley"),
        "bus_station" => elgg_echo("markertype:value:bus_station"),
        "cafe" => elgg_echo("markertype:value:cafe"),
        "campground" => elgg_echo("markertype:value:campground"),
        "car_dealer" => elgg_echo("markertype:value:car_dealer"),
        "car_rental" => elgg_echo("markertype:value:car_rental"),
        "car_repair" => elgg_echo("markertype:value:car_repair"),
        "car_wash" => elgg_echo("markertype:value:car_wash"),
        "casino" => elgg_echo("markertype:value:casino"),
        "cemetery" => elgg_echo("markertype:value:cemetery"),
        "church" => elgg_echo("markertype:value:church"),
        "city_hall" => elgg_echo("markertype:value:city_hall"),
        "clothing_store" => elgg_echo("markertype:value:clothing_store"),
        "convenience_store" => elgg_echo("markertype:value:convenience_store"),
        "courthouse" => elgg_echo("markertype:value:courthouse"),
        "dentist" => elgg_echo("markertype:value:dentist"),
        "department_store" => elgg_echo("markertype:value:department_store"),
        "electrician" => elgg_echo("markertype:value:electrician"),
        "electronics_store" => elgg_echo("markertype:value:electronics_store"),
        "embassy" => elgg_echo("markertype:value:embassy"),
        "finance" => elgg_echo("markertype:value:finance"),
        "fire_station" => elgg_echo("markertype:value:fire_station"),
        "florist" => elgg_echo("markertype:value:florist"),
        "food" => elgg_echo("markertype:value:food"),
        "furniture_store" => elgg_echo("markertype:value:furniture_store"),
        "gas_station" => elgg_echo("markertype:value:gas_station"),
        "government_office" => elgg_echo("markertype:value:government_office"),
        "gym" => elgg_echo("markertype:value:gym"),
        "hardware_store" => elgg_echo("markertype:value:hardware_store"),
        "hospital" => elgg_echo("markertype:value:hospital"),
        "jewelry_store" => elgg_echo("markertype:value:jewelry_store"),
        "laundry" => elgg_echo("markertype:value:laundry"),
        "lawyer" => elgg_echo("markertype:value:lawyer"),
        "library" => elgg_echo("markertype:value:library"),
        "liquor_store" => elgg_echo("markertype:value:liquor_store"),
        "lodging" => elgg_echo("markertype:value:lodging"),
        "mosque" => elgg_echo("markertype:value:mosque"),
        "movie_rental" => elgg_echo("markertype:value:movie_rental"),
        "movie_theater" => elgg_echo("markertype:value:movie_theater"),
        "museum" => elgg_echo("markertype:value:museum"),
        "night_club" => elgg_echo("markertype:value:night_club"),
        "park" => elgg_echo("markertype:value:park"),
        "parking" => elgg_echo("markertype:value:parking"),
        "pharmacy" => elgg_echo("markertype:value:pharmacy"),
        "police" => elgg_echo("markertype:value:police"),
        "post_office" => elgg_echo("markertype:value:post_office"),
        "restaurant" => elgg_echo("markertype:value:restaurant"),
        "school" => elgg_echo("markertype:value:school"),
        "shoe_store" => elgg_echo("markertype:value:shoe_store"),
        "shopping_mall" => elgg_echo("markertype:value:shopping_mall"),
        "spa" => elgg_echo("markertype:value:spa"),
        "stadium" => elgg_echo("markertype:value:stadium"),
        "store" => elgg_echo("markertype:value:store"),
        "subway_station" => elgg_echo("markertype:value:subway_station"),
        "synagogue" => elgg_echo("markertype:value:synagogue"),
        "taxi_stand" => elgg_echo("markertype:value:taxi_stand"),
        "train_station" => elgg_echo("markertype:value:train_station"),
        "university" => elgg_echo("markertype:value:university"),
        "veterinary_care" => elgg_echo("markertype:value:veterinary_care"),
        "zoo" => elgg_echo("markertype:value:zoo")
    );

    $marker_types = elgg_trigger_plugin_hook('markertype:value:s', 'all', $marker_types, $marker_types);

    return $marker_types;
}
