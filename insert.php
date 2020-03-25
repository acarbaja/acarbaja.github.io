<?php

// GET BUGS AND FISH DICTIONARIES
// $command = escapeshellcmd('python seasonalCatches.py');
// $output = shell_exec($command);
//
//
// $bugs = json_decode($output,true); #true flag for array lists
//
//
// $command = escapeshellcmd('python seasonalCatches.py 1');
// $output = shell_exec($command);
//
// $fishes = json_decode($output,true);


$submittedMonth = $_POST['month'];
$submittedHemisphere = $_POST['hemisphere'];
$prioritySort = (isset($_POST['prioritySort']))? "checked": "unchecked";
$moneySort = (isset($_POST['moneySort']))? "checked" : "unchecked";
$alphSort = (isset($_POST['alphSort']))? "checked" : "unchecked";


$validFish = array();
$validBugs = array();

$invalidFish = array();
$invalidBugs = array();

if ($submittedHemisphere == "North") {
    $bugs = json_decode('{"Rosalia Batsei Beetle": {"season": ["May", "June"], "price": 3000, "location": "Tree stump", "time": "All day"}, "Bagworm": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 600, "location": "Shake tree", "time": "All day"}, "Paper Kite Butterfly": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 1000, "location": "Flying", "time": "8 AM - 7 PM"}, "Ant": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 80, "location": "On rotten fruit and turnips", "time": "All day"}, "Emperor Butterfly": {"season": ["Dec", "Jan", "Feb", "Mar", "June", "July", "Aug", "Sept"], "price": 4000, "location": "Flying", "time": "5 PM - 8 AM"}, "Honeybee": {"season": ["Mar", "Apr", "May", "June", "July"], "price": 200, "location": "Near flowers", "time": "8 AM - 5 PM"}, "Ladybug": {"season": ["Mar", "Apr", "May", "June", "Oct"], "price": 200, "location": "Flowers", "time": "8AM - 5PM"}, "Cricket": {"season": ["Sept", "Oct", "Nov"], "price": 130, "location": "Ground", "time": "5 PM - 8 AM"}, "Citrus Long-Horned Beetle": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 350, "location": "Tree stump", "time": "All day"}, "Earth-Boring Dung Beetle": {"season": ["July", "Aug", "Sept"], "price": 300, "location": "Ground", "time": "All day"}, "Wharf Roach": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 200, "location": "Beach (rocks)", "time": "All day"}, "Migratory Locust": {"season": ["Feb", "Mar", "Apr", "May"], "price": 200, "location": "Ground", "time": "8 AM - 7 PM"}, "Peacock Butterfly": {"season": ["Mar", "Apr", "May", "June"], "price": 2500, "location": "Near black, blue, or purple flowers", "time": "4 AM - 7 PM"}, "Fly": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 60, "location": "On rotten fruit or garbage", "time": "All day"}, "Darner Dragonfly": {"season": ["Apr", "May", "June", "July", "Aug", "Sept", "Oct"], "price": 230, "location": "Flying", "time": "8 AM - 5 PM"}, "Mantis": {"season": ["Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov"], "price": 430, "location": "Flowers", "time": "8 AM - 5 PM"}, "Walker Cicada": {"season": ["Aug", "Sept"], "price": 400, "location": "Tree", "time": "8 AM - 4 PM"}, "Walking Stick": {"season": ["July", "Aug", "Sept", "Oct", "Nov"], "price": 600, "location": "Tree", "time": "4 AM - 8 AM, 5 PM - 7PM"}, "Rajah Brooke\u2019s Birdwing": {"season": ["Dec", "Jan", "Feb", "Apr", "May", "June", "July", "Aug", "Sept"], "price": 2500, "location": "Near black, blue, or purple flowers", "time": "8 AM - 5 PM"}, "Orchid Mantis": {"season": ["Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov"], "price": 2400, "location": "Flowers", "time": "8 AM - 5 PM"}, "Pill Bug": {"season": ["Sept", "Oct", "Nov", "Dec", "Jan", "Feb", "Mar", "Apr", "May", "June"], "price": 250, "location": "Hit rocks", "time": "11 PM - 4 PM"}, "Queen Alexandra\u2019s Birdwing": {"season": ["May", "June", "July", "Aug", "Sept"], "price": 4000, "location": "Flying", "time": "8 AM - 4 PM"}, "Wasp": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 2500, "location": "Shake tree", "time": "All day"}, "Grasshopper": {"season": ["July", "Aug", "Sept"], "price": 160, "location": "Ground", "time": "8 AM - 5 PM"}, "Mole Cricket": {"season": ["Nov", "Dec", "Jan", "Feb", "Mar", "Apr", "May"], "price": 500, "location": "Underground", "time": "All day"}, "Violin Beetle": {"season": ["May", "June", "Sept", "Oct", "Nov"], "price": 450, "location": "Tree stump", "time": "All day"}, "Dung Beetle": {"season": ["Dec", "Jan", "Feb"], "price": 2500, "location": "Snowballs", "time": "All day"}, "Long Locust": {"season": ["Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov"], "price": 200, "location": "Ground", "time": "8 AM - 7 PM"}, "Agris Butterfly": {"season": ["Apr", "May", "June", "July", "Aug", "Sept"], "price": 3000, "location": "Flying", "time": "8 AM - 5 PM"}, "Scorpion": {"season": ["May", "June", "July", "Aug", "Sept", "Oct"], "price": 8000, "location": "Ground", "time": "7 PM - 4 AM"}, "Spider": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 600, "location": "Shake tree", "time": "7 PM - 8 AM"}, "Tarantula": {"season": ["Nov", "Dec", "Jan", "Feb", "Mar", "Apr"], "price": 8000, "location": "Ground", "time": "7 PM - 4 AM"}, "Rainbow Stag": {"season": ["June", "July", "Aug", "Sept"], "price": 6000, "location": "Tree", "time": "7 PM - 8 AM"}, "Hermit Crab": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 1000, "location": "Beach", "time": "7 PM - 8 AM"}, "Yellow Butterfly": {"season": ["Mar", "Apr", "May", "June", "Sept", "Oct"], "price": 160, "location": "Flying", "time": "4 AM - 7 PM"}, "Snail": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 250, "location": "Rock (rain)", "time": "All day"}, "Atlas Moth": {"season": ["Apr", "May", "June", "July", "Aug", "Sept"], "price": 3000, "location": "Tree", "time": "7 PM - 4 AM"}, "Madagascan Sunset Moth": {"season": ["Apr", "May", "June", "July", "Aug", "Sept"], "price": 2500, "location": "Flying", "time": "8 AM - 4 PM"}, "Diving Beetle": {"season": ["May", "June", "July", "Aug", "Sept"], "price": 800, "location": "River", "time": "8 AM - 7 PM"}, "Flea": {"season": ["Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov"], "price": 70, "location": "On a flea-infested villager", "time": "All day"}, "Common Butterfly": {"season": ["Sept", "Oct", "Nov", "Dec", "Jan", "Feb", "Mar", "Apr", "May", "June"], "price": 160, "location": "Flying", "time": "4 AM - 7 PM"}, "Stinkbug": {"season": ["Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct"], "price": 120, "location": "Flowers", "time": "All day"}, "Man-Faced Stink Bug": {"season": ["Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct"], "price": 1000, "location": "Flowers", "time": "7 PM - 8 AM"}, "Pondskater": {"season": ["May", "June", "July", "Aug", "Sept"], "price": 130, "location": "River", "time": "8 AM - 7 PM"}, "Mosquito": {"season": ["June", "July", "Aug", "Sept"], "price": 130, "location": "Flying", "time": "5 PM - 4 AM"}, "Tiger Butterfly": {"season": ["Mar", "Apr", "May", "June", "July", "Aug", "Sept"], "price": 240, "location": "Flying", "time": "4 AM - 7 PM"}, "Damselfly": {"season": ["Nov", "Dec", "Jan", "Feb"], "price": 500, "location": "Flying", "time": "All day"}, "Red Dragonfly": {"season": ["Sept", "Oct"], "price": 180, "location": "Flying", "time": "8 AM - 7 PM"}, "Centipede": {"season": ["Sept", "Oct", "Nov", "Dec", "Jan", "Feb", "Mar", "Apr", "May", "June"], "price": 430, "location": "Hit rocks", "time": "5 PM - 11 PM"}, "Monarch Butterfly": {"season": ["Sept", "Oct", "Nov"], "price": 140, "location": "Flying", "time": "4 AM - 5 PM"}, "Walking Leaf": {"season": ["July", "Aug", "Sept"], "price": 600, "location": "Ground", "time": "All day"}, "Moth": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 130, "location": "Lit windows", "time": "7 PM - 4 AM"}, "Tiger Beetle": {"season": ["Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct"], "price": 1500, "location": "Ground", "time": "All day"}}', true);


    $fishes = json_decode('{"Koi": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 4000, "time": "4 PM - 9 AM", "shadow": "Large", "location": "Pond"}, "Pond Smelt": {"season": ["Dec", "Jan", "Feb"], "price": " ", "time": "All day", "shadow": "Small", "location": "River"}, "Suckerfish": {"season": ["June", "July", "Aug", "Sept"], "price": 1500, "time": "All day", "shadow": "(Fin)", "location": "Ocean"}, "Loach": {"season": ["Mar", "Apr", "May"], "price": 400, "time": "All day", "shadow": "Small", "location": "River"}, "Snapping Turtle": {"season": ["Apr", "May", "June", "July", "Aug", "Sept", "Oct"], "price": 5000, "time": "9 AM - 4 AM", "shadow": "", "location": "River"}, "Mahi-mahi": {"season": ["May", "June", "July", "Aug", "Sept", "Oct"], "price": 6000, "time": "All day", "shadow": "Large", "location": "Ocean"}, "Crawfish": {"season": ["Apr", "May", "June", "July", "Aug", "Sept"], "price": 200, "time": "All day", "shadow": "Medium", "location": "Pond"}, "Dace": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 240, "time": "4 PM - 9 AM", "shadow": "Medium", "location": "River"}, "Frog": {"season": ["May", "June", "July", "Aug"], "price": " ", "time": "All day", "shadow": "Small", "location": "Pond"}, "Tadpole": {"season": ["Mar", "Apr", "May", "June", "July"], "price": 100, "time": "All day", "shadow": "Smallest", "location": "Pond"}, "Surgeonfish": {"season": ["Apr", "May", "June", "July", "Aug", "Sept"], "price": 1000, "time": "All day", "shadow": "Small", "location": "Ocean"}, "Catfish": {"season": ["May", "June", "July", "Aug", "Sept", "Oct"], "price": 800, "time": "4 PM - 9 AM", "shadow": " ", "location": "Pond"}, "Bluegill": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 180, "time": "9 AM - 4 PM", "shadow": "Small", "location": "River"}, "Sea Butterfly": {"season": ["Dec", "Jan", "Feb", "Mar"], "price": 1000, "time": "All day", "shadow": "Smallest", "location": "Ocean"}, "Sturgeon": {"season": ["Sept", "Oct", "Nov", "Dec", "Jan", "Feb", "Mar"], "price": 10000, "time": "All day", "shadow": "Largest", "location": "River (mouth)"}, "Saw Shark": {"season": ["June", "July", "Aug", "Sept"], "price": 12000, "time": "4 PM - 9 AM", "shadow": "Largest (fin)", "location": "Ocean"}, "Horse Mackerel": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 150, "time": "All day", "shadow": "Small", "location": "Ocean"}, "Freshwater Goby": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 400, "time": "4 PM - 9 AM", "shadow": "Small", "location": "River"}, "Anchovy": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 200, "time": "4 AM - 9 PM", "shadow": "Small", "location": "Ocean"}, "Bitterling": {"season": ["Nov", "Dec", "Jan", "Feb", "Mar"], "price": 900, "time": "All day", "shadow": "Smallest", "location": "River"}, "Dab": {"season": ["Oct", "Nov", "Dec", "Jan", "Feb", "Mar", "Apr"], "price": 300, "time": "All day", "shadow": "Medium", "location": "Ocean"}, "Angelfish": {"season": ["May", "June", "July", "Aug", "Sept", "Oct"], "price": 3000, "time": "4 PM - 9 AM", "shadow": "Small", "location": "River"}, "Carp": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 300, "time": "All day", "shadow": "Large", "location": "Pond"}, "Killifish": {"season": ["Apr", "May", "June", "July", "Aug"], "price": 300, "time": "All day", "shadow": "Smallest", "location": "Pond"}, "Salmon": {"season": ["Sept"], "price": 700, "time": "All day", "shadow": "Small", "location": "River (mouth)"}, "Gar": {"season": ["July", "Aug", "Sept", "Oct"], "price": 6000, "time": "4 PM - 9 AM", "shadow": "Largest", "location": "Pond"}, "Soft-shelled Turtle": {"season": ["Aug", "Sept"], "price": 3750, "time": "4 PM - 9 AM", "shadow": "", "location": "River"}, "Ribbon Eel": {"season": ["June", "July", "Aug", "Sept", "Oct"], "price": 600, "time": "All day", "shadow": "Narrow", "location": "Ocean"}, "Barred Knifejaw": {"season": ["Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov"], "price": 5000, "time": "All day", "shadow": "Medium", "location": "Ocean"}, "Red Snapper": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 3000, "time": "All day", "shadow": "Medium", "location": "Ocean"}, "Dorado": {"season": ["June", "July", "Aug", "Sept"], "price": 15000, "time": "4 AM - 9 PM", "shadow": "X Large", "location": "River"}, "Goldfish": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 1300, "time": "All day", "shadow": "Smallest", "location": "Pond"}, "Pop-eyed Goldfish": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 1300, "time": "9 AM - 4 PM", "shadow": "Smallest", "location": "Pond"}, "Stringfish": {"season": ["Dec", "Jan", "Feb", "Mar"], "price": 15000, "time": "4 PM - 9 AM", "shadow": "Largest", "location": "River (Clifftop)"}, "Char": {"season": ["Mar", "Apr", "May", "June", "Sept", "Oct", "Nov"], "price": 3800, "time": "4 PM - 9 AM", "shadow": "Medium", "location": "River/Pond"}, "Football Fish": {"season": ["Nov", "Dec", "Jan", "Feb", "Mar"], "price": 2500, "time": "4 PM - 9 AM", "shadow": "Large", "location": "Ocean"}, "Hammerhead Shark": {"season": ["June", "July", "Aug", "Sept"], "price": 8000, "time": "4 PM - 9 AM", "shadow": "Largest (fin)", "location": "Ocean"}, "Pike": {"season": ["Sept", "Oct", "Nov", "Dec"], "price": 1800, "time": "All day", "shadow": "X Large", "location": "River"}, "Blowfish": {"season": ["Nov", "Dec", "Jan", "Feb"], "price": 5000, "time": "6 PM - 4 AM", "shadow": "Medium", "location": "Ocean"}, "Butterfly Fish": {"season": ["Apr", "May", "June", "July", "Aug", "Sept"], "price": 1000, "time": "All day", "shadow": "Small", "location": "Ocean"}, "Ocean Sunfish": {"season": ["July", "Aug", "Sept"], "price": 4000, "time": "4 AM - 9 PM", "shadow": "(Fin)", "location": "Ocean"}, "Tilapia": {"season": ["June", "July", "Aug", "Sept", "Oct"], "price": 800, "time": "All day", "shadow": " ", "location": "River"}, "Coelacanth": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 15000, "time": "All day", "shadow": "Largest", "location": "Ocean (rainy days)"}, "Betta": {"season": ["May", "June", "July", "Aug", "Sept", "Oct"], "price": 2500, "time": "9 AM - 4 PM", "shadow": "Small", "location": "River"}, "Sea Bass": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 400, "time": "All day", "shadow": "X Large", "location": "Ocean"}, "Arapaima": {"season": ["June", "July", "Aug", "Sept"], "price": 10000, "time": "4 PM - 9 AM", "shadow": "  ", "location": "River"}, "Yellow Perch": {"season": ["Oct", "Nov", "Dec", "Jan", "Feb", "Mar"], "price": 300, "time": "All day", "shadow": "Medium", "location": "River"}, "Barreleye": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 15000, "time": "9 PM - 4 AM", "shadow": "Small", "location": "Ocean"}, "Mitten Crab": {"season": ["Sept", "Oct", "Nov"], "price": 2000, "time": "4 PM - 9 AM", "shadow": "Small", "location": "River"}, "Giant Snakehead": {"season": ["June", "July", "Aug"], "price": " ", "time": "9 AM - 4 PM", "shadow": "X Large", "location": "Pond"}, "Crucian Carp": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 160, "time": "All day", "shadow": "Small", "location": "River"}, "Arowana": {"season": ["June", "July", "Aug", "Sept"], "price": 10000, "time": "4 PM - 9 AM", "shadow": "Large", "location": "River"}, "Oarfish": {"season": ["Dec", "Jan", "Feb", "Mar", "Apr", "May"], "price": 9000, "time": "All day", "shadow": "Largest", "location": "Ocean"}, "Saddled Bichir": {"season": ["Dec", "Jan", "Feb", "Mar"], "price": 4000, "time": "9 PM - 4 AM", "shadow": "Large", "location": "River"}, "Tuna": {"season": ["Nov", "Dec", "Jan", "Feb", "Mar", "Apr"], "price": 7000, "time": "All day", "shadow": "X Large", "location": "Pier"}, "Whale Shark": {"season": ["June", "July", "Aug", "Sept"], "price": 13000, "time": "All day", "shadow": "Largest (fin)", "location": "Ocean"}, "Sweetfish": {"season": ["July", "Aug", "Sept"], "price": 900, "time": "All day", "shadow": "Medium", "location": "River"}, "Giant Trevally": {"season": ["May", "June", "July", "Aug", "Sept", "Oct"], "price": " ", "time": "All day", "shadow": "Large", "location": "Pier"}, "Black Bass": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 400, "time": "All day", "shadow": "Large", "location": "River"}, "King Salmon": {"season": ["Sept"], "price": 1800, "time": "All day", "shadow": "Smallest", "location": "River (mouth)"}, "Blue Marlin": {"season": ["July", "Aug", "Sept", "Nov", "Dec", "Jan", "Feb", "Mar", "Apr"], "price": 10000, "time": "All day", "shadow": "X Large", "location": "Pier"}, "Rainbowfish": {"season": ["May", "June", "July", "Aug", "Sept", "Oct"], "price": 800, "time": "9 AM - 4 PM", "shadow": "Small", "location": "River"}, "Guppy": {"season": ["Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov"], "price": 1300, "time": "9 AM - 4 PM", "shadow": "Smallest", "location": "River"}, "Squid": {"season": ["Dec", "Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug"], "price": 500, "time": "All day", "shadow": "Medium", "location": "Ocean"}, "Zebra Turkeyfish": {"season": ["Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov"], "price": 500, "time": "All day", "shadow": "Medium", "location": "Ocean"}, "Great White Shark": {"season": ["June", "July", "Aug", "Sept"], "price": 15000, "time": "4 PM - 9 AM", "shadow": "Largest (fin)", "location": "Ocean"}, "Nibble Fish": {"season": ["May", "June", "July", "Aug", "Sept"], "price": 1500, "time": "9 AM - 4 PM", "shadow": "Small", "location": "River"}, "Napoleonfish": {"season": ["July", "Aug"], "price": 10000, "time": "4 AM - 9 PM", "shadow": "Largest", "location": "Ocean"}, "Pale Chub": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 160, "time": "9 AM - 4 PM", "shadow": "Smallest", "location": "River"}, "Cherry Salmon": {"season": ["Mar", "Apr", "May", "June", "Sept", "Oct", "Nov"], "price": 1000, "time": "All day", "shadow": "Medium", "location": "River"}, "Sea Horse": {"season": ["Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov"], "price": 1100, "time": "All day", "shadow": "Smallest", "location": "Ocean"}, "Ranchu Goldfish": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 4500, "time": "9 AM - 4 PM", "shadow": "Small", "location": "Pond"}, "Moray Eel": {"season": ["Aug", "Sept", "Oct"], "price": 2000, "time": "All day", "shadow": "X Large", "location": "Ocean"}, "Puffer Fish": {"season": ["July", "Aug", "Sept"], "price": 250, "time": "All day", "shadow": "Medium", "location": "Ocean"}, "Piranha": {"season": ["June", "July", "Aug", "Sept"], "price": 2500, "time": "9 AM - 4 PM, 9 PM - 4 PM", "shadow": "Small", "location": "River"}, "Clown Fish": {"season": ["Apr", "May", "June", "July", "Aug", "Sept"], "price": 650, "time": "All day", "shadow": "Smallest", "location": "Ocean"}, "Olive Flounder": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 800, "time": "All day", "shadow": "Large", "location": "Ocean"}, "Golden Trout": {"season": ["Mar", "Apr", "May", "June", "Sept", "Oct", "Nov"], "price": 15000, "time": "4 PM - 9 AM", "shadow": "Large", "location": "River (Clifftop)"}, "Neon Tetra": {"season": ["Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov"], "price": 500, "time": "9 AM - 4 PM", "shadow": "Smallest", "location": "River"}, "Ray": {"season": ["Aug", "Sept", "Oct", "Nov"], "price": 3000, "time": "4 AM - 9 PM", "shadow": "X Large", "location": "Ocean"}}', true);

#southern hemisphere selected
} else {
    $bugs = json_decode('{"Rosalia Batsei Beetle": {"season": ["Nov", "Dec"], "price": 3000, "location": "Tree stump", "time": "All day"}, "Bagworm": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 600, "location": "Shake tree", "time": "All day"}, "Paper Kite Butterfly": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 1000, "location": "Flying", "time": "8 AM - 7 PM"}, "Ant": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 80, "location": "Rotten fruit or turnips", "time": "All day"}, "Emperor Butterfly": {"season": ["Dec", "Jan", "Feb", "Mar", "June", "July", "Aug", "Sept"], "price": 4000, "location": "Flying", "time": "5 PM - 8 AM"}, "Honeybee": {"season": ["Sept", "Oct", "Nov", "Dec", "Jan"], "price": 200, "location": "Near flowers", "time": "8 AM - 5 PM"}, "Ladybug": {"season": ["Apr", "Sept", "Oct", "Nov", "Dec"], "price": 200, "location": "Flowers", "time": "8 AM - 5 PM"}, "Cricket": {"season": ["Mar", "Apr", "May"], "price": 130, "location": "Ground", "time": "5 PM - 8 AM"}, "Citrus Long-Horned Beetle": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 350, "location": "Tree stump", "time": "All day"}, "Earth-Boring Dung Beetle": {"season": ["Jan", "Feb", "Mar"], "price": 300, "location": "Ground", "time": "All day"}, "Wharf Roach": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 200, "location": "Beach (rocks)", "time": "All day"}, "Migratory Locust": {"season": ["Feb", "Mar", "Apr", "May"], "price": 200, "location": "Ground", "time": "8 AM - 7 PM"}, "Peacock Butterfly": {"season": ["Sept", "Oct", "Nov", "Dec"], "price": 2500, "location": "Near black, blue, or purple flowers", "time": "4 AM - 7 PM"}, "Fly": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 60, "location": "On rotten fruit or garbage", "time": "All day"}, "Darner Dragonfly": {"season": ["Oct", "Nov", "Dec", "Jan", "Feb", "Mar", "Apr"], "price": 230, "location": "Flying", "time": "8 AM - 5 PM"}, "Mantis": {"season": ["Sept", "Oct", "Nov", "Dec", "Jan", "Feb", "Mar", "Apr"], "price": 430, "location": "Flowers", "time": "8 AM - 5 PM"}, "Walker Cicada": {"season": ["Feb", "Mar"], "price": 400, "location": "Tree", "time": "8 AM - 4 PM"}, "Walking Stick": {"season": ["Jan", "Feb", "Mar", "Apr", "May"], "price": 600, "location": "Tree", "time": "4 AM - 8 AM, 5 PM - 7PM"}, "Rajah Brooke\u2019s Birdwing": {"season": ["June", "July", "Aug", "Oct", "Nov", "Dec", "Jan", "Feb", "Mar"], "price": 2500, "location": "Near black, blue, or purple flowers", "time": "8 AM - 5 PM"}, "Orchid Mantis": {"season": ["Sept", "Oct", "Nov", "Dec", "Jan", "Feb", "Mar", "Apr", "May"], "price": 2400, "location": "Flowers", "time": "8 AM - 5 PM"}, "Pill Bug": {"season": ["Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 250, "location": "Hit rocks", "time": "11 PM - 4 PM"}, "Queen Alexandra\u2019s Birdwing": {"season": ["Nov", "Dec", "Jan", "Feb", "Mar"], "price": 4000, "location": "Flying", "time": "8 AM - 4 PM"}, "Wasp": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 2500, "location": "Shake Tree", "time": "All day"}, "Grasshopper": {"season": ["Jan", "Feb", "Mar"], "price": 160, "location": "Ground", "time": "8 AM - 5 PM"}, "Mole Cricket": {"season": ["May", "June", "July", "Aug", "Sept", "Oct", "Nov"], "price": 500, "location": "Underground", "time": "All day"}, "Violin Beetle": {"season": ["Mar", "Apr", "May", "Nov", "Dec"], "price": 450, "location": "Tree stump", "time": "All day"}, "Dung Beetle": {"season": ["June", "July", "Aug"], "price": 2500, "location": "Snowballs", "time": "All day"}, "Long Locust": {"season": ["Oct", "Nov", "Dec", "Jan", "Feb", "Mar", "Apr", "May"], "price": 200, "location": "Ground", "time": "8 AM - 7 PM"}, "Agris Butterfly": {"season": ["Oct", "Nov", "Dec", "Jan", "Feb", "Mar"], "price": 3000, "location": "Flying", "time": "8 AM - 5 PM"}, "Scorpion": {"season": ["Nov", "Dec", "Jan", "Feb", "Mar", "Apr"], "price": 8000, "location": "Ground", "time": "7 PM - 4 AM"}, "Spider": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 600, "location": "Shake tree", "time": "7 PM - 8 AM"}, "Tarantula": {"season": ["May", "June", "July", "Aug", "Sept", "Oct"], "price": 8000, "location": "Ground", "time": "7 PM - 4 AM"}, "Rainbow Stag": {"season": ["Dec", "Jan", "Feb", "Mar"], "price": 6000, "location": "Tree", "time": "7 PM - 8 AM"}, "Hermit Crab": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 1000, "location": "Beach", "time": "7 PM - 8 AM"}, "Yellow Butterfly": {"season": ["Mar", "Apr", "Sept", "Oct", "Nov", "Dec"], "price": 160, "location": "Flying", "time": "4 AM - 7 PM"}, "Snail": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 250, "location": "Rock (rain)", "time": "All day"}, "Atlas Moth": {"season": ["Oct", "Nov", "Dec", "Jan", "Feb", "Mar"], "price": 3000, "location": "Tree", "time": "7 PM - 4 AM"}, "Madagascan Sunset Moth": {"season": ["Oct", "Nov", "Dec", "Jan", "Feb", "Mar"], "price": 2500, "location": "Flying", "time": "8 AM - 4 PM"}, "Diving Beetle": {"season": ["Nov", "Dec", "Jan", "Feb", "Mar"], "price": 800, "location": "River", "time": "8 AM - 7 PM"}, "Flea": {"season": ["Oct", "Nov", "Dec", "Jan", "Feb", "Mar", "Apr", "May"], "price": 70, "location": "On a flea-infested Villager", "time": "All day"}, "Common Butterfly": {"season": ["Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 160, "location": "Flying", "time": "4 AM - 7PM"}, "Stinkbug": {"season": ["Sept", "Oct", "Nov", "Dec", "Jan", "Feb", "Mar", "Apr"], "price": 120, "location": "Flowers", "time": "All day"}, "Man-Faced Stink Bug": {"season": ["Sept", "Oct", "Nov", "Dec", "Jan", "Feb", "Mar", "Apr"], "price": 1000, "location": "Flowers", "time": "7 PM - 8 AM"}, "Pondskater": {"season": ["Nov", "Dec", "Jan", "Feb", "Mar"], "price": 130, "location": "River", "time": "8 AM - 7 PM"}, "Mosquito": {"season": ["Dec", "Jan", "Feb", "Mar"], "price": 130, "location": "Flying", "time": "5 PM - 4 AM"}, "Tiger Butterfly": {"season": ["Sept", "Oct", "Nov", "Dec", "Jan", "Feb", "Mar"], "price": 240, "location": "Flying", "time": "4 AM - 7 PM"}, "Damselfly": {"season": ["May", "June", "July", "Aug"], "price": 500, "location": "Flying", "time": "All day"}, "Red Dragonfly": {"season": ["Mar", "Apr"], "price": 180, "location": "Flying", "time": "8 AM - 7 PM"}, "Centipede": {"season": ["Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 430, "location": "Hit rocks", "time": "All day"}, "Monarch Butterfly": {"season": ["Mar", "Apr", "May"], "price": 140, "location": "Flying", "time": "4 AM - 5 PM"}, "Walking Leaf": {"season": ["Jan", "Feb", "Mar"], "price": 600, "location": "Ground", "time": "All day"}, "Moth": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 130, "location": "Lit windows", "time": "7 PM - 4 AM"}, "Tiger Beetle": {"season": ["Aug", "Sept", "Oct", "Nov", "Dec", "Jan", "Feb", "Mar", "Apr"], "price": 1500, "location": "Ground", "time": "All day"}}', true);

    $fishes = json_decode('{"Koi": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 4000, "time": "4 PM - 9 AM", "shadow": "Large", "location": "Pond"}, "Pond Smelt": {"season": ["June", "July", "Aug"], "price": " ", "time": "All day", "shadow": "Small", "location": "River"}, "Suckerfish": {"season": ["Dec", "Jan", "Feb", "Mar"], "price": 1500, "time": "All day", "shadow": "(Fin)", "location": "Ocean"}, "Loach": {"season": ["Sept", "Oct", "Nov"], "price": 400, "time": "All day", "shadow": "Small", "location": "River"}, "Snapping Turtle": {"season": ["Oct", "Nov", "Dec", "Jan", "Feb", "Mar", "Apr"], "price": 5000, "time": "9 AM - 4 AM", "shadow": "", "location": "River"}, "Mahi-mahi": {"season": ["Nov", "Dec", "Jan", "Feb", "Mar", "Apr"], "price": 6000, "time": "All day", "shadow": "Large", "location": "Ocean"}, "Crawfish": {"season": ["Oct", "Nov", "Dec", "Jan", "Feb", "Mar"], "price": 200, "time": "All day", "shadow": "Medium", "location": "Pond"}, "Dace": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 240, "time": "4 PM - 9 AM", "shadow": "Medium", "location": "River"}, "Frog": {"season": ["Nov", "Dec", "Jan", "Feb"], "price": " ", "time": "All day", "shadow": "Small", "location": "Pond"}, "Tadpole": {"season": ["Sept", "Oct", "Nov", "Dec", "Jan"], "price": 100, "time": "All day", "shadow": "Smallest", "location": "Pond"}, "Surgeonfish": {"season": ["Oct", "Nov", "Dec", "Jan", "Feb", "Mar"], "price": 1000, "time": "All day", "shadow": "Small", "location": "Ocean"}, "Catfish": {"season": ["Nov", "Dec", "Jan", "Feb", "Mar", "Apr"], "price": 800, "time": "4 PM - 9 AM", "shadow": "", "location": "Pond"}, "Bluegill": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 180, "time": "9 AM - 4 PM", "shadow": "Small", "location": "River"}, "Sea Butterfly": {"season": ["June", "July", "Aug", "Sept"], "price": 1000, "time": "All day", "shadow": "Smallest", "location": "Ocean"}, "Sturgeon": {"season": ["Mar", "Apr", "May", "June", "July", "Aug", "Sept"], "price": 10000, "time": "All day", "shadow": "Largest", "location": "River (mouth)"}, "Saw Shark": {"season": ["Dec", "Jan", "Feb", "Mar"], "price": 12000, "time": "4 PM - 9 AM", "shadow": "Largest (fin)", "location": "Ocean"}, "Horse Mackerel": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 150, "time": "All day", "shadow": "Small", "location": "Ocean"}, "Freshwater Goby": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 400, "time": "4 PM - 9 AM", "shadow": "Small", "location": "River"}, "Anchovy": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 200, "time": "4 AM - 9 PM", "shadow": "Small", "location": "Ocean"}, "Bitterling": {"season": ["May", "June", "July", "Aug", "Sept"], "price": 900, "time": "All day", "shadow": "Smallest", "location": "River"}, "Dab": {"season": ["Apr", "May", "June", "July", "Aug", "Sept", "Oct"], "price": 300, "time": "All day", "shadow": "Medium", "location": "Ocean"}, "Angelfish": {"season": ["Nov", "Dec", "Jan", "Feb", "Mar", "Apr"], "price": 3000, "time": "4 PM - 9 AM", "shadow": "Small", "location": "River"}, "Carp": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 300, "time": "All day", "shadow": "Large", "location": "Pond"}, "Killifish": {"season": ["Oct", "Nov", "Dec", "Jan", "Feb"], "price": 300, "time": "All day", "shadow": "Smallest", "location": "Pond"}, "Salmon": {"season": ["Mar"], "price": 700, "time": "All day", "shadow": "Small", "location": "River (mouth)"}, "Gar": {"season": ["Jan", "Feb", "Mar", "Apr"], "price": 6000, "time": "4 PM - 9 AM", "shadow": "Largest", "location": "Pond"}, "Soft-shelled Turtle": {"season": ["Feb", "Mar"], "price": 3750, "time": "4 PM - 9 AM", "shadow": "", "location": "River"}, "Ribbon Eel": {"season": ["Dec", "Jan", "Feb", "Mar", "Apr"], "price": 600, "time": "All day", "shadow": "Narrow", "location": "Ocean"}, "Barred Knifejaw": {"season": ["Sept", "Oct", "Nov", "Dec", "Jan", "Feb", "Mar", "Apr", "May"], "price": 5000, "time": "All day", "shadow": "Medium", "location": "Ocean"}, "Red Snapper": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 3000, "time": "All day", "shadow": "Medium", "location": "Ocean"}, "Dorado": {"season": ["Dec", "Jan", "Feb", "Mar"], "price": 15000, "time": "4 AM - 9 PM", "shadow": "X Large", "location": "River"}, "Goldfish": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 1300, "time": "All day", "shadow": "Smallest", "location": "Pond"}, "Pop-eyed Goldfish": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 1300, "time": "9 AM - 4 PM", "shadow": "Smallest", "location": "Pond"}, "Stringfish": {"season": ["June", "July", "Aug", "Sept"], "price": 15000, "time": "4 PM - 9 AM", "shadow": "Largest", "location": "River (Clifftop)"}, "Char": {"season": ["Mar", "Apr", "May", "Sept", "Oct", "Nov", "Dec"], "price": 3800, "time": "4 PM - 9 AM", "shadow": "Medium", "location": "River/Pond"}, "Football Fish": {"season": ["May", "June", "July", "Aug", "Sept"], "price": 2500, "time": "4 PM - 9 AM", "shadow": "Large", "location": "Ocean"}, "Hammerhead Shark": {"season": ["Dec", "Jan", "Feb", "Mar"], "price": 8000, "time": "4 PM - 9 AM", "shadow": "Largest (fin)", "location": "Ocean"}, "Pike": {"season": ["Mar", "Apr", "May", "June"], "price": 1800, "time": "All day", "shadow": "X Large", "location": "River"}, "Blowfish": {"season": ["May", "June", "July", "Aug"], "price": 5000, "time": "6 PM - 4 AM", "shadow": "Medium", "location": "Ocean"}, "Butterfly Fish": {"season": ["Oct", "Nov", "Dec", "Jan", "Feb", "Mar"], "price": 1000, "time": "All day", "shadow": "Small", "location": "Ocean"}, "Ocean Sunfish": {"season": ["Jan", "Feb", "Mar"], "price": 4000, "time": "4 AM - 9 PM", "shadow": "(Fin)", "location": "Ocean"}, "Tilapia": {"season": ["Dec", "Jan", "Feb", "Mar", "Apr"], "price": 800, "time": "All day", "shadow": "", "location": "River"}, "Coelacanth": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 15000, "time": "All day", "shadow": "Largest", "location": "Ocean (rainy days)"}, "Betta": {"season": ["Nov", "Dec", "Jan", "Feb", "Mar", "Apr"], "price": 2500, "time": "9 AM - 4 PM", "shadow": "Small", "location": "River"}, "Sea Bass": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 400, "time": "All day", "shadow": "X Large", "location": "Ocean"}, "Arapaima": {"season": ["Dec", "Jan", "Feb", "Mar"], "price": 10000, "time": "4 PM - 9 AM", "shadow": "", "location": "River"}, "Yellow Perch": {"season": ["Apr", "May", "June", "July", "Aug", "Sept"], "price": 300, "time": "All day", "shadow": "Medium", "location": "River"}, "Barreleye": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 15000, "time": "9 PM - 4 AM", "shadow": "Small", "location": "Ocean"}, "Mitten Crab": {"season": ["Mar", "Apr", "May"], "price": 2000, "time": "4 PM - 9 AM", "shadow": "Small", "location": "River"}, "Giant Snakehead": {"season": ["Dec", "Jan", "Feb"], "price": " ", "time": "9 AM - 4 PM", "shadow": "X Large", "location": "Pond"}, "Crucian Carp": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 160, "time": "All day", "shadow": "Small", "location": "River"}, "Arowana": {"season": ["Dec", "Jan", "Feb", "Mar"], "price": 10000, "time": "4 PM - 9 AM", "shadow": "Large", "location": "River"}, "Oarfish": {"season": ["June", "July", "Aug", "Sept", "Oct", "Nov"], "price": 9000, "time": "All day", "shadow": "Largest", "location": "Ocean"}, "Saddled Bichir": {"season": ["June", "July", "Aug", "Sept"], "price": 4000, "time": "9 PM - 4 AM", "shadow": "Large", "location": "River"}, "Tuna": {"season": ["May", "June", "July", "Aug", "Sept", "Oct"], "price": 7000, "time": "All day", "shadow": "X Large", "location": "Pier"}, "Whale Shark": {"season": ["Dec", "Jan", "Feb", "Mar"], "price": 13000, "time": "All day", "shadow": "Largest (fin)", "location": "Ocean"}, "Sweetfish": {"season": ["Jan", "Feb", "Mar"], "price": 900, "time": "All day", "shadow": "Medium", "location": "River"}, "Giant Trevally": {"season": ["Nov", "Dec", "Jan", "Feb", "Mar", "Apr"], "price": " ", "time": "All day", "shadow": "Large", "location": "Pier"}, "Black Bass": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 400, "time": "All day", "shadow": "Large", "location": "River"}, "King Salmon": {"season": ["Mar"], "price": 1800, "time": "All day", "shadow": "Smallest", "location": "River (mouth)"}, "Blue Marlin": {"season": ["Jan", "Feb", "Mar", "May", "June", "July", "Aug", "Sept", "Oct", "Nov"], "price": 10000, "time": "All day", "shadow": "X Large", "location": "Pier"}, "Rainbowfish": {"season": ["Nov", "Dec", "Jan", "Feb", "Mar", "Apr"], "price": 800, "time": "9 AM - 4 PM", "shadow": "Small", "location": "River"}, "Guppy": {"season": ["Oct", "Nov", "Dec", "Jan", "Feb", "Mar", "Apr", "May"], "price": 1300, "time": "9 AM - 4 PM", "shadow": "Smallest", "location": "River"}, "Squid": {"season": ["June", "July", "Aug", "Sept", "Oct", "Nov", "Dec", "Jan", "Feb"], "price": 500, "time": "All day", "shadow": "Medium", "location": "Ocean"}, "Zebra Turkeyfish": {"season": ["Oct", "Nov", "Dec", "Jan", "Feb", "Mar", "Apr", "May"], "price": 500, "time": "All day", "shadow": "Medium", "location": "Ocean"}, "Great White Shark": {"season": ["Dec", "Jan", "Feb", "Mar"], "price": 15000, "time": "4 PM - 9 AM", "shadow": "Largest (fin)", "location": "Ocean"}, "Nibble Fish": {"season": ["Nov", "Dec", "Jan", "Feb", "Mar"], "price": 1500, "time": "9 AM - 4 PM", "shadow": "Small", "location": "River"}, "Napoleonfish": {"season": ["Jan", "Feb"], "price": 10000, "time": "4 AM - 9 PM", "shadow": "Largest", "location": "Ocean"}, "Pale Chub": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 160, "time": "9 AM - 4 PM", "shadow": "Smallest", "location": "River"}, "Cherry Salmon": {"season": ["Mar", "Apr", "May", "Sept", "Oct", "Nov", "Dec"], "price": 1000, "time": "All day", "shadow": "Medium", "location": "River"}, "Sea Horse": {"season": ["Oct", "Nov", "Dec", "Jan", "Feb", "Mar", "Apr", "May"], "price": 1100, "time": "All day", "shadow": "Smallest", "location": "Ocean"}, "Ranchu Goldfish": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 4500, "time": "9 AM - 4 PM", "shadow": "Small", "location": "Pond"}, "Moray Eel": {"season": ["Feb", "Mar", "Apr"], "price": 2000, "time": "All day", "shadow": "X Large", "location": "Ocean"}, "Puffer Fish": {"season": ["Jan", "Feb", "Mar"], "price": 250, "time": "All day", "shadow": "Medium", "location": "Ocean"}, "Piranha": {"season": ["Dec", "Jan", "Feb", "Mar"], "price": 2500, "time": "9 AM - 4 PM, 9 PM - 4 AM", "shadow": "Small", "location": "River"}, "Clown Fish": {"season": ["Oct", "Nov", "Dec", "Jan", "Feb", "Mar"], "price": 650, "time": "All day", "shadow": "Smallest", "location": "Ocean"}, "Olive Flounder": {"season": ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"], "price": 800, "time": "All day", "shadow": "Large", "location": "Ocean"}, "Golden Trout": {"season": ["Mar", "Apr", "May", "Sept", "Oct", "Nov", "Dec"], "price": 15000, "time": "4 PM - 9 AM", "shadow": "Large", "location": "River (Clifftop)"}, "Neon Tetra": {"season": ["Oct", "Nov", "Dec", "Jan", "Feb", "Mar", "Apr", "May"], "price": 500, "time": "9 AM - 4 PM", "shadow": "Smallest", "location": "River"}, "Ray": {"season": ["Feb", "Mar", "Apr", "May"], "price": 3000, "time": "4 AM - 9 PM", "shadow": "X Large", "location": "Ocean"}}', true);
}

$acnlMonths = array("Jan","Feb","Mar","Apr","May","June","July","Aug","Sept","Oct","Nov","Dec");
$submittedMonthIndex = array_search($submittedMonth, $acnlMonths);

foreach ($fishes as $name=>$fishInfo) {
    $allInfo = $fishInfo;
    $allInfo["name"] = $name;

    if (count($allInfo["season"]) == 12) {
        $allInfo["exp"] = 12; //larger than any other month
        $allInfo["season"] = "All year";
        array_push($validFish, $allInfo);
    } else {

        //check validity of our month
        if (in_array($submittedMonth, $fishInfo["season"])) {
            $indexOfCurrent = array_search($submittedMonth, $fishInfo["season"]);
            $yearlyIndex = array_search($submittedMonth, $acnlMonths);

            $i = $indexOfCurrent;

            // loop through valid fish months, and check to see how the user selected
            // month is from the next cutoff. For example, if the valid $acnlMonths
            // are ["Apr","May","Dec"] and the user selected month is "Apr",
            // the EXPiration date for the catch is a month away (so $allInfo["exp"]=1)
            while ($i < count($fishInfo["season"]) -1) {
                $indexOfCurrent = array_search($fishInfo["season"][$i], $acnlMonths);
                $nextFishMonth = $fishInfo["season"][$i+1];
                $indexOfNext = array_search($nextFishMonth, $acnlMonths);

                if ($indexOfNext - $indexOfCurrent > 1) {
                  //if current month is later in the year than our starting month
                  if($indexOfCurrent > $yearlyIndex){

                    $allInfo["exp"] = array_search($fishInfo["season"][$i], $acnlMonths) - $yearlyIndex;

                    break;
                  }
                  //if we aren't just going from december to january
                  if(!($indexOfCurrent == 11 && $indexOfNext==0)){
                    $countThroughDec = 11 -$yearlyIndex;
                    $countThroughDec += $indexOfCurrent +1; //count extra for 0 indexing
                    $allInfo["exp"] = $countThroughDec;

                    break;
                  }
                }


                if ($i == count($fishInfo["season"]) -2) {
                    //count through december if we pass it
                    if ($yearlyIndex > $indexOfCurrent) {

                        $countThroughDec = 11 - $yearlyIndex;
                        $countThroughDec += $indexOfNext + 1; //count extra for jan
                        $allInfo["exp"] = $countThroughDec;

                        break;
                    }

                    //otherwise, we do not pass through december
                    $allInfo["exp"] = $indexOfNext - $yearlyIndex;

                    break;
                }

                $i = $i + 1;
            }

            // if list of valid months is less than 2 and our user selected months
            // is present, that means validMonths = ["userSelectedMonth"]
            if (!isset($allInfo["exp"])) {
                $allInfo["exp"] = 0;
            }

            array_push($validFish, $allInfo);
        } else {
            array_push($invalidFish, $allInfo);
        }
    }
}

foreach ($bugs as $name=>$bugInfo) {
    $allInfo = $bugInfo;
    $allInfo["name"] = $name;

    if (count($allInfo["season"]) == 12) {
        $allInfo["exp"] = 12; //larger than any other month
        $allInfo["season"] = "All year";
        array_push($validBugs, $allInfo);
    } else {


    //check if exists in array or not
        if (in_array($submittedMonth, $bugInfo["season"])) {
            $indexOfCurrent = array_search($submittedMonth, $bugInfo["season"]);
            $yearlyIndex = array_search($submittedMonth, $acnlMonths);


            $i = $indexOfCurrent;

            while ($i < count($bugInfo["season"]) -1) {
                $indexOfCurrent = array_search($bugInfo["season"][$i], $acnlMonths);

                $nextFishMonth = $bugInfo["season"][$i+1];

                $indexOfNext = array_search($nextFishMonth, $acnlMonths);


                if ($indexOfNext - $indexOfCurrent > 1) {
                  //if current month is later in the year than our starting month
                  if($indexOfCurrent > $yearlyIndex){

                    $allInfo["exp"] = array_search($fishInfo["season"][$i], $acnlMonths) - $yearlyIndex;

                    break;
                  }
                  //if we aren't just going from december to january
                  if(!($indexOfCurrent == 11 && $indexOfNext==0)){
                    $countThroughDec = 11 -$yearlyIndex;
                    $countThroughDec += $indexOfCurrent +1; //count extra for 0 indexing
                    $allInfo["exp"] = $countThroughDec;

                    break;
                  }
                }
                if ($i == count($bugInfo["season"]) -2) {
                    //count through december if we pass it
                    if ($yearlyIndex > $indexOfCurrent) {

                        $countThroughDec = 11 - $yearlyIndex;
                        $countThroughDec += $indexOfNext + 1; //count extra for jan
                        $allInfo["exp"] = $countThroughDec;

                        break;
                    }

                    //otherwise, we do not pass through december
                    $allInfo["exp"] = $indexOfNext - $yearlyIndex;

                    break;
                }

                $i = $i + 1;
            }

            if (!isset($allInfo["exp"])) {
                $allInfo["exp"] = 0;
            }

            array_push($validBugs, $allInfo);
        } else {
            array_push($invalidBugs, $allInfo);
        }
    }
}


function expSortWithMoney($a, $b)
{
    $diff = $a['exp'] - $b['exp'];

    if ($diff==0) {
        return critterMoneySort($a, $b);
    }

    return $diff;
}

function expSort($a, $b)
{
    $diff = $a['exp'] - $b['exp'];
    return $diff;
}
function critterMoneySort($a, $b)
{
    if ($b["price"] == $a["price"]) {
        return 0;
    }
    return $b["price"] > $a["price"];
}

function priceSort($a, $b)
{
    return $b["price"] > $a["price"];
}

function critterNameSort($a, $b)
{
    return $a["name"] > $b["name"];
}

//sort by exp first, then money, then name
function sortWithAll($a, $b)
{
    $expRank = expSort($a, $b);

    if ($expRank == 0) {
        $moneyRank = critterMoneySort($a, $b);
        if ($moneyRank ==0) {
            return critterNameSort($a, $b);
        } else {
            return $moneyRank;
        }
    }
    return $expRank;
}

//sort with money first then alphabetize
function sortWithMoneyAndAlph($a, $b)
{
    $aPrice = $a["price"];
    $bPrice = $b["price"];
    if (is_numeric($aPrice) and is_numeric($bPrice)) {
        $diff = $aPrice- $bPrice;
    } elseif (is_numeric($aPrice)) {
        $diff= 1; //only a is a nmber
    } else {
        $diff = -1; //only b is a number
    }


    $moneyRank = priceSort($a, $b);
    if ($diff == 0) {
        return critterNameSort($a, $b);
    }
    return $moneyRank;
}

function sortWithPriorityAndAlph($a, $b)
{
    $priorityRank = expSort($a, $b);

    if ($priorityRank == 0) {
        return critterNameSort($a, $b);
    }
    return $priorityRank;
}


  if ($prioritySort == "checked" and $moneySort == "checked" and $alphSort == "checked") {
      usort($validFish, 'sortWithAll');
      usort($validBugs, 'sortWithAll');
  } elseif ($prioritySort == "checked"  and $alphSort == "checked") {
      usort($validFish, 'sortWithPriorityAndAlph');
      usort($validBugs, 'sortWithPriorityAndAlph');
  } elseif ($moneySort == "checked"  and $alphSort == "checked") {
      usort($validFish, 'sortWithMoneyAndAlph');
      usort($validBugs, 'sortWithMoneyAndAlph');
  } elseif ($prioritySort == "checked") {
      usort($validFish, 'expSortWithMoney');
      usort($validBugs, 'expSortWithMoney');
  } elseif ($moneySort == "checked") {
      usort($validFish, 'priceSort');
      usort($validBugs, 'priceSort');
  } elseif ($alphSort == "checked") {
      usort($validFish, 'critterNameSort');
      usort($validBugs, 'critterNameSort');
  } else {
      sort($validFish);
      sort($validBugs);
  }

  // who cares about our invalid fish and bugs!!
  sort($invalidFish);
  sort($invalidBugs);

$output = array("validFish"=>$validFish,"invalidFish"=>$invalidFish,"validBugs"=>$validBugs,"invalidBugs"=>$invalidBugs);

// print_r($output);

 echo json_encode($output, true);
