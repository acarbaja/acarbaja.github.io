# -*- coding: utf-8 -*-

# Hershel Carbajal-Rodriguez
# 02-24-2020
# This file is used to process some raw excel data into
# a dictionary of dictionaries for each bug.
# Results are used in seasonalCatches.py.
# Northern/Southern fish/bug information compiled from the following websites:
# https://www.ign.com/wikis/animal-crossing-new-horizons/Fish_Guide:_Fish_List,_Sell_Price,_and_Fishing_Tips
# https://www.ign.com/wikis/animal-crossing-new-horizons/Bug_Guide:_Bugs_List,_Sell_Price,_and_Bug_Catching_Tips
# https://www.polygon.com/animal-crossing-new-horizons-switch-acnh-guide/2020/3/24/21191276/insect-bug-locations-times-month-day-list-critterpedia
# https://www.gamespot.com/articles/animal-crossing-new-horizons-bugs-guide/1100-6475001/
# data initially put into lists with this tool:
# https://shancarter.github.io/mr-data-converter/

months = ["Jan","Feb","Mar","Apr","May","June","July","Aug","Sept","Oct","Nov","Dec"];

#NORTHERN HEMISPHERE
#bugInfo = [{"Bug":"Agris Butterfly","Season":"Apr - Sept","Location":"Flying","Time":"8 AM - 5 PM","Price":3000},
#{"Bug":"Ant","Season":"All year","Location":"On rotten fruit and turnips","Time":"All day","Price":80},
#{"Bug":"Bagworm","Season":"All year","Location":"Shake tree","Time":"All day","Price":600},
#{"Bug":"Centipede","Season":"Sept - June","Location":"Hit rocks","Time":"5 PM - 11 PM","Price":430},
#{"Bug":"Citrus Long-Horned Beetle","Season":"All year","Location":"Tree stump","Time":"All day","Price":350},
#{"Bug":"Common Butterfly","Season":"Sept - June","Location":"Flying","Time":"4 AM - 7 PM","Price":160},
#{"Bug":"Cricket","Season":"Sept - Nov","Location":"Ground","Time":"5 PM - 8 AM","Price":130},
#{"Bug":"Damselfly","Season":"Nov - Feb","Location":"Flying","Time":"All day","Price":500},
#{"Bug":"Darner Dragonfly","Season":"Apr - Oct","Location":"Flying","Time":"8 AM - 5 PM","Price":230},
#{"Bug":"Diving Beetle","Season":"May - Sept","Location":"River","Time":"8 AM - 7 PM","Price":800},
#{"Bug":"Dung Beetle","Season":"Dec - Feb","Location":"Snowballs","Time":"All day","Price":2500},
#{"Bug":"Earth-Boring Dung Beetle","Season":"July - Sept","Location":"Ground","Time":"All day","Price":300},
#{"Bug":"Emperor Butterfly","Season":"Dec - Mar, June - Sept","Location":"Flying","Time":"5 PM - 8 AM","Price":4000},
#{"Bug":"Flea","Season":"Apr - Nov","Location":"On a flea-infested villager","Time":"All day","Price":70},
#{"Bug":"Fly","Season":"All year","Location":"On rotten fruit or garbage","Time":"All day","Price":60},
#{"Bug":"Grasshopper","Season":"July - Sept","Location":"Ground","Time":"8 AM - 5 PM","Price":160},
#{"Bug":"Hermit Crab","Season":"All year","Location":"Beach","Time":"7 PM - 8 AM","Price":1000},
#{"Bug":"Honeybee","Season":"Mar - July","Location":"Near flowers","Time":"8 AM - 5 PM","Price":200},
#{"Bug":"Ladybug","Season":"Mar - June, Oct","Location":"Flowers","Time":"8AM - 5PM","Price":200},
#{"Bug":"Long Locust","Season":"Apr - Nov","Location":"Ground","Time":"8 AM - 7 PM","Price":200},
#{"Bug":"Madagascan Sunset Moth","Season":"Apr - Sept","Location":"Flying","Time":"8 AM - 4 PM","Price":2500},
#{"Bug":"Man-Faced Stink Bug","Season":"Mar - Oct","Location":"Flowers","Time":"7 PM - 8 AM","Price":1000},
#{"Bug":"Mantis","Season":"Mar - Nov","Location":"Flowers","Time":"8 AM - 5 PM","Price":430},
#{"Bug":"Migratory Locust","Season":"Feb - May","Location":"Ground","Time":"8 AM - 7 PM","Price":200},
#{"Bug":"Mole Cricket","Season":"Nov - May","Location":"Underground","Time":"All day","Price":500},
#{"Bug":"Monarch Butterfly","Season":"Sept - Nov","Location":"Flying","Time":"4 AM - 5 PM","Price":140},
#{"Bug":"Mosquito","Season":"June - Sept","Location":"Flying","Time":"5 PM - 4 AM","Price":130},
#{"Bug":"Moth","Season":"All year","Location":"Lit windows","Time":"7 PM - 4 AM","Price":130},
#{"Bug":"Orchid Mantis","Season":"Mar - Nov","Location":"Flowers","Time":"8 AM - 5 PM","Price":2400},
#{"Bug":"Paper Kite Butterfly","Season":"All year","Location":"Flying","Time":"8 AM - 7 PM","Price":1000},
#{"Bug":"Peacock Butterfly","Season":"Mar - June","Location":"Near black, blue, or purple flowers","Time":"4 AM - 7 PM","Price":2500},
#{"Bug":"Pill Bug","Season":"Sept - June","Location":"Hit rocks","Time":"11 PM - 4 PM","Price":250},
#{"Bug":"Pondskater","Season":"May - Sept","Location":"River","Time":"8 AM - 7 PM","Price":130},
#{"Bug":"Queen Alexandra’s Birdwing","Season":"May - Sept","Location":"Flying","Time":"8 AM - 4 PM","Price":4000},
#{"Bug":"Rainbow Stag","Season":"June - Sept","Location":"Tree","Time":"7 PM - 8 AM","Price":6000},
#{"Bug":"Rajah Brooke’s Birdwing","Season":"Dec - Feb, Apr - Sept","Location":"Near black, blue, or purple flowers","Time":"8 AM - 5 PM","Price":2500},
#{"Bug":"Red Dragonfly","Season":"Sept - Oct","Location":"Flying","Time":"8 AM - 7 PM","Price":180},
#{"Bug":"Rosalia Batsei Beetle","Season":"May - June","Location":"Tree stump","Time":"All day","Price":3000},
#{"Bug":"Scorpion","Season":"May - Oct","Location":"Ground","Time":"6 PM - 5 AM","Price":8000},
#{"Bug":"Snail","Season":"All year","Location":"Rock (rain)","Time":"All day","Price":250},
#{"Bug":"Spider","Season":"All year","Location":"Shake tree","Time":"7 PM - 8 AM","Price":600},
#{"Bug":"Stinkbug","Season":"Mar - Oct","Location":"Flowers","Time":"All day","Price":120},
#{"Bug":"Tarantula","Season":"Nov - Apr","Location":"Ground","Time":"7 PM - 4 AM","Price":8000},
#{"Bug":"Tiger Beetle","Season":"Feb - Oct","Location":"Ground","Time":"All day","Price":1500},
#{"Bug":"Tiger Butterfly","Season":"Mar - Sept","Location":"Flying","Time":"4 AM - 7 PM","Price":240},
#{"Bug":"Violin Beetle","Season":"May - June, Sept - Nov","Location":"Tree stump","Time":"All day","Price":450},
#{"Bug":"Walker Cicada","Season":"Aug - Sept","Location":"Tree","Time":"8 AM - 4 PM","Price":400},
#{"Bug":"Walking Leaf","Season":"July - Sept","Location":"Ground","Time":"All day","Price":600},
#{"Bug":"Wasp","Season":"All year","Location":"Shake tree","Time":"All day","Price":2500},
#{"Bug":"Wharf Roach","Season":"All year","Location":"Beach (rocks)","Time":"All day","Price":200},
#{"Bug":"Yellow Butterfly","Season":"Mar - June, Sept - Oct","Location":"Flying","Time":"4 AM - 7 PM","Price":160}];
#

#SOUTHERN HEMISPHERE
bugInfo = [{"Bug":"Agris Butterfly","Season":"Oct - Mar","Location":"Flying","Time":"8 AM - 5 PM","Price":3000},
{"Bug":"Atlas Moth","Season":"Oct - Mar","Location":"Tree","Time":"7 PM - 4 AM","Price":3000},
{"Bug":"Ant","Season":"All year","Location":"Rotten fruit or turnips","Time":"All day","Price":80},
{"Bug":"Bagworm","Season":"All year","Location":"Shake tree","Time":"All day","Price":600},
{"Bug":"Centipede","Season":"Mar - Dec","Location":"Hit rocks","Time":"All day","Price":430},
{"Bug":"Citrus Long-Horned Beetle","Season":"All year","Location":"Tree stump","Time":"All day","Price":350},
{"Bug":"Common Butterfly","Season":"Mar - Dec","Location":"Flying","Time":"4 AM - 7PM","Price":160},
{"Bug":"Cricket","Season":"Mar - May","Location":"Ground","Time":"5 PM - 8 AM","Price":130},
{"Bug":"Damselfly","Season":"May - Aug","Location":"Flying","Time":"All day","Price":500},
{"Bug":"Darner Dragonfly","Season":"Oct - Apr","Location":"Flying","Time":"8 AM - 5 PM","Price":230},
{"Bug":"Diving Beetle","Season":"Nov - Mar","Location":"River","Time":"8 AM - 7 PM","Price":800},
{"Bug":"Dung Beetle","Season":"June - Aug","Location":"Snowballs","Time":"All day","Price":2500},
{"Bug":"Earth-Boring Dung Beetle","Season":"Jan - Mar","Location":"Ground","Time":"All day","Price":300},
{"Bug":"Emperor Butterfly","Season":"Dec - Mar, June - Sept","Location":"Flying","Time":"5 PM - 8 AM","Price":4000},
{"Bug":"Flea","Season":"Oct - May","Location":"On a flea-infested Villager","Time":"All day","Price":70},
{"Bug":"Fly","Season":"All year","Location":"On rotten fruit or garbage","Time":"All day","Price":60},
{"Bug":"Grasshopper","Season":"Jan - Mar","Location":"Ground","Time":"8 AM - 5 PM","Price":160},
{"Bug":"Hermit Crab","Season":"All year","Location":"Beach","Time":"7 PM - 8 AM","Price":1000},
{"Bug":"Honeybee","Season":"Sept - Jan","Location":"Near flowers","Time":"8 AM - 5 PM","Price":200},
{"Bug":"Ladybug","Season":"Apr, Sept - Dec","Location":"Flowers","Time":"8 AM - 5 PM","Price":200},
{"Bug":"Long Locust","Season":"Oct - May","Location":"Ground","Time":"8 AM - 7 PM","Price":200},
{"Bug":"Madagascan Sunset Moth","Season":"Oct - Mar","Location":"Flying","Time":"8 AM - 4 PM","Price":2500},
{"Bug":"Man-Faced Stink Bug","Season":"Sept - Apr","Location":"Flowers","Time":"7 PM - 8 AM","Price":1000},
{"Bug":"Mantis","Season":"Sept - Apr","Location":"Flowers","Time":"8 AM - 5 PM","Price":430},
{"Bug":"Migratory Locust","Season":"Feb - May","Location":"Ground","Time":"8 AM - 7 PM","Price":200},
{"Bug":"Mole Cricket","Season":"May - Nov","Location":"Underground","Time":"All day","Price":500},
{"Bug":"Monarch Butterfly","Season":"Mar - May","Location":"Flying","Time":"4 AM - 5 PM","Price":140},
{"Bug":"Mosquito","Season":"Dec - Mar","Location":"Flying","Time":"5 PM - 4 AM","Price":130},
{"Bug":"Moth","Season":"All year","Location":"Lit windows","Time":"7 PM - 4 AM","Price":130},
{"Bug":"Orchid Mantis","Season":"Sept - May","Location":"Flowers","Time":"8 AM - 5 PM","Price":2400},
{"Bug":"Paper Kite Butterfly","Season":"All year","Location":"Flying","Time":"8 AM - 7 PM","Price":1000},
{"Bug":"Peacock Butterfly","Season":"Sept - Dec","Location":"Near black, blue, or purple flowers","Time":"4 AM - 7 PM","Price":2500},
{"Bug":"Pill Bug","Season":"Mar - Dec","Location":"Hit rocks","Time":"11 PM - 4 PM","Price":250},
{"Bug":"Pondskater","Season":"Nov - Mar","Location":"River","Time":"8 AM - 7 PM","Price":130},
{"Bug":"Queen Alexandra’s Birdwing","Season":"Nov - Mar","Location":"Flying","Time":"8 AM - 4 PM","Price":4000},
{"Bug":"Rainbow Stag","Season":"Dec - Mar","Location":"Tree","Time":"7 PM - 8 AM","Price":6000},
{"Bug":"Rajah Brooke’s Birdwing","Season":"June - Aug, Oct - Mar","Location":"Near black, blue, or purple flowers","Time":"8 AM - 5 PM","Price":2500},
{"Bug":"Red Dragonfly","Season":"Mar - Apr","Location":"Flying","Time":"8 AM - 7 PM","Price":180},
{"Bug":"Rosalia Batsei Beetle","Season":"Nov - Dec","Location":"Tree stump","Time":"All day","Price":3000},
{"Bug":"Scorpion","Season":"Nov - Apr","Location":"Ground","Time":"7 PM - 4 AM","Price":8000},
{"Bug":"Snail","Season":"All year","Location":"Rock (rain)","Time":"All day","Price":250},
{"Bug":"Spider","Season":"All year","Location":"Shake tree","Time":"7 PM - 8 AM","Price":600},
{"Bug":"Stinkbug","Season":"Sept - Apr","Location":"Flowers","Time":"All day","Price":120},
{"Bug":"Tarantula","Season":"May - Oct","Location":"Ground","Time":"7 PM - 4 AM","Price":8000},
{"Bug":"Tiger Beetle","Season":"Aug - Apr","Location":"Ground","Time":"All day","Price":1500},
{"Bug":"Tiger Butterfly","Season":"Sept - Mar","Location":"Flying","Time":"4 AM - 7 PM","Price":240},
{"Bug":"Violin Beetle","Season":"Mar - May, Nov - Dec","Location":"Tree stump","Time":"All day","Price":450},
{"Bug":"Walker Cicada","Season":"Feb - Mar","Location":"Tree","Time":"8 AM - 4 PM","Price":400},
{"Bug":"Walking Leaf","Season":"Jan - Mar","Location":"Ground","Time":"All day","Price":600},
{"Bug":"Walking Stick","Season":"Jan - May","Location":"Tree","Time":"4 AM - 8 PM, 4 PM - 8 AM","Price":600},
{"Bug":"Wasp","Season":"All year","Location":"Shake Tree","Time":"All day","Price":2500},
{"Bug":"Wharf Roach","Season":"All year","Location":"Beach (rocks)","Time":"All day","Price":200},
{"Bug":"Yellow Butterfly","Season":"Mar - Apr, Sept - Dec","Location":"Flying","Time":"4 AM - 7 PM","Price":160}];


#NORTHERN HEMISPHERE
#fishInfo = [{"fish":"Bitterling","location":"River","shadow":"Smallest","price":900,"time":"All day","season":"Nov-Mar"},
#{"fish":"Pale Chub","location":"River","shadow":"Smallest","price":160,"time":"9 AM - 4 PM","season":"All year"},
#{"fish":"Crucian Carp","location":"River","shadow":"Small","price":160,"time":"All day","season":"All year"},
#{"fish":"Dace","location":"River","shadow":"Medium","price":240,"time":"4 PM - 9 AM","season":"All year"},
#{"fish":"Carp","location":"Pond","shadow":"Large","price":300,"time":"All day","season":"All year"},
#{"fish":"Koi","location":"Pond","shadow":"Large","price":4000,"time":"4 PM - 9 AM","season":"All year"},
#{"fish":"Goldfish","location":"Pond","shadow":"Smallest","price":1300,"time":"All day","season":"All year"},
#{"fish":"Pop-eyed Goldfish","location":"Pond","shadow":"Smallest","price":1300,"time":"9 AM - 4 PM","season":"All year"},
#{"fish":"Ranchu Goldfish","location":"Pond","shadow":"Small","price":4500,"time":"9 AM - 4 PM","season":"All year"},
#{"fish":"Killifish","location":"Pond","shadow":"Smallest","price":300,"time":"All day","season":"Apr-Aug"},
#{"fish":"Crawfish","location":"Pond","shadow":"Medium","price":200,"time":"All day","season":"Apr-Sept"},
#{"fish":"Soft-shelled Turtle","location":"River","shadow":"","price":3750,"time":"4 PM - 9 AM","season":"Aug-Sept"},
#{"fish":"Snapping Turtle","location":"River","shadow":"","price":5000,"time":"9 AM - 4 AM","season":"Apr-Oct"},
#{"fish":"Tadpole","location":"Pond","shadow":"Smallest","price":100,"time":"All day","season":"Mar-July"},
#{"fish":"Frog","location":"Pond","shadow":"Small","price":-1,"time":"All day","season":"May-Aug"},
#{"fish":"Freshwater Goby","location":"River","shadow":"Small","price":400,"time":"4 PM - 9 AM","season":"All year"},
#{"fish":"Loach","location":"River","shadow":"Small","price":400,"time":"All day","season":"Mar-May "},
#{"fish":"Catfish","location":"Pond","shadow":" ","price":800,"time":"4 PM - 9 AM","season":"May-Oct"},
#{"fish":"Giant Snakehead","location":"Pond","shadow":"X Large","price":-1,"time":"9 AM - 4 PM","season":"June-Aug"},
#{"fish":"Bluegill","location":"River","shadow":"Small","price":180,"time":"9 AM - 4 PM","season":"All year"},
#{"fish":"Yellow Perch","location":"River","shadow":"Medium","price":300,"time":"All day","season":"Oct-Mar"},
#{"fish":"Black Bass","location":"River","shadow":"Large","price":400,"time":"All day","season":"All year"},
#{"fish":"Tilapia","location":"River","shadow":" ","price":800,"time":"All day","season":"June-Oct"},
#{"fish":"Pike","location":"River","shadow":"X Large","price":1800,"time":"All day","season":"Sept-Dec"},
#{"fish":"Pond Smelt","location":"River","shadow":"Small","price":-1,"time":"All day","season":"Dec-Feb"},
#{"fish":"Sweetfish","location":"River","shadow":"Medium","price":900,"time":"All day","season":"July-Sept"},
#{"fish":"Cherry Salmon","location":"River","shadow":"Medium","price":1000,"time":"All day","season":"Mar-June, Sept-Nov"},
#{"fish":"Char","location":"River/Pond","shadow":"Medium","price":3800,"time":"4 PM - 9 AM","season":"Mar-June, Sept-Nov"},
#{"fish":"Golden Trout","location":"River (Clifftop)","shadow":"Large","price":15000,"time":"4 PM - 9 AM","season":"Mar-June, Sept-Nov"},
#{"fish":"Stringfish","location":"River (Clifftop)","shadow":"Largest","price":15000,"time":"4 PM - 9 AM","season":"Dec-Mar"},
#{"fish":"Salmon","location":"River (mouth)","shadow":"Small","price":700,"time":"All day","season":"Sept "},
#{"fish":"King Salmon","location":"River (mouth)","shadow":"Smallest","price":1800,"time":"All day","season":"Sept"},
#{"fish":"Mitten Crab","location":"River","shadow":"Small","price":2000,"time":"4 PM - 9 AM","season":"Sept-Nov"},
#{"fish":"Guppy","location":"River","shadow":"Smallest","price":1300,"time":"9 AM - 4 PM","season":"Apr-Nov"},
#{"fish":"Nibble Fish","location":"River","shadow":"Small","price":1500,"time":"9 AM - 4 PM","season":"May-Sept"},
#{"fish":"Angelfish","location":"River","shadow":"Small","price":3000,"time":"4 PM - 9 AM","season":"May-Oct"},
#{"fish":"Betta","location":"River","shadow":"Small","price":2500,"time":"9 AM - 4 PM","season":"May-Oct"},
#{"fish":"Neon Tetra","location":"River","shadow":"Smallest","price":500,"time":"9 AM - 4 PM","season":"Apr-Nov"},
#{"fish":"Rainbowfish","location":"River","shadow":"Small","price":800,"time":"9 AM - 4 PM","season":"May-Oct"},
#{"fish":"Piranha","location":"River","shadow":"Small","price":2500,"time":"9 AM - 4 PM, 9 PM - 4 AM","season":"June-Sept"},
#{"fish":"Arowana","location":"River","shadow":"Large","price":10000,"time":"4 PM - 9 AM","season":"June-Sept"},
#{"fish":"Dorado","location":"River","shadow":"X Large","price":15000,"time":"4 a.m - 9 PM","season":"June-Sept"},
#{"fish":"Gar","location":"Pond","shadow":"Largest","price":6000,"time":"4 PM - 9 AM","season":"July-Oct"},
#{"fish":"Arapaima","location":"River","shadow":"  ","price":10000,"time":"4 PM - 9 AM","season":"June-Sept"},
#{"fish":"Saddled Bichir","location":"River","shadow":"Large","price":4000,"time":"9 PM - 4 AM","season":"Dec-Mar"},
#{"fish":"Sturgeon","location":"River (mouth)","shadow":"Largest","price":10000,"time":"All day","season":"Sept-Mar"},
#{"fish":"Sea Butterfly","location":"Ocean","shadow":"Smallest","price":1000,"time":"All day","season":"Dec-Mar"},
#{"fish":"Sea Horse","location":"Ocean","shadow":"Smallest","price":1100,"time":"All day","season":"Apr-Nov"},
#{"fish":"Clown Fish","location":"Ocean","shadow":"Smallest","price":650,"time":"All day","season":"Apr-Sept"},
#{"fish":"Surgeonfish","location":"Ocean","shadow":"Small","price":1000,"time":"All day","season":"Apr-Sept"},
#{"fish":"Butterfly Fish","location":"Ocean","shadow":"Small","price":1000,"time":"All day","season":"Apr-Sept"},
#{"fish":"Napoleonfish","location":"Ocean","shadow":"Largest","price":10000,"time":"4 AM - 9 PM","season":"July-Aug"},
#{"fish":"Zebra Turkeyfish","location":"Ocean","shadow":"Medium","price":500,"time":"All day","season":"Apr-Nov"},
#{"fish":"Blowfish","location":"Ocean","shadow":"Medium","price":5000,"time":"6 PM - 4 AM","season":"Nov-Feb"},
#{"fish":"Puffer Fish","location":"Ocean","shadow":"Medium","price":250,"time":"All day","season":"July-Sept"},
#{"fish":"Anchovy","location":"Ocean","shadow":"Small","price":200,"time":"4 AM - 9 PM","season":"All year"},
#{"fish":"Horse Mackerel","location":"Ocean","shadow":"Small","price":150,"time":"All day","season":"All year"},
#{"fish":"Barred Knifejaw","location":"Ocean","shadow":"Medium","price":5000,"time":"All day","season":"Mar-Nov"},
#{"fish":"Sea Bass","location":"Ocean","shadow":"X Large","price":400,"time":"All day","season":"All year"},
#{"fish":"Red Snapper","location":"Ocean","shadow":"Medium","price":3000,"time":"All day","season":"All year"},
#{"fish":"Dab","location":"Ocean","shadow":"Medium","price":300,"time":"All day","season":"Oct-Apr"},
#{"fish":"Olive Flounder","location":"Ocean","shadow":"Large","price":800,"time":"All day","season":"All year"},
#{"fish":"Squid","location":"Ocean","shadow":"Medium","price":500,"time":"All day","season":"Dec-Aug"},
#{"fish":"Moray Eel","location":"Ocean","shadow":"X Large","price":2000,"time":"All day","season":"Aug-Oct"},
#{"fish":"Ribbon Eel","location":"Ocean","shadow":"Narrow","price":600,"time":"All day","season":"June-Oct"},
#{"fish":"Tuna","location":"Pier","shadow":"X Large","price":7000,"time":"All day","season":"Nov-Apr"},
#{"fish":"Blue Marlin","location":"Pier","shadow":"X Large","price":10000,"time":"All day","season":"July-Sept, Nov-Apr"},
#{"fish":"Giant Trevally","location":"Pier","shadow":"Large","price":-1,"time":"All day","season":"May-Oct"},
#{"fish":"Mahi-mahi","location":"Ocean","shadow":"Large","price":6000,"time":"All day","season":"May-Oct"},
#{"fish":"Ocean Sunfish","location":"Ocean","shadow":"(Fin)","price":4000,"time":"4 AM - 9 PM","season":"July-Sept"},
#{"fish":"Ray","location":"Ocean","shadow":"X Large","price":3000,"time":"4 AM - 9 PM","season":"Aug-Nov"},
#{"fish":"Saw Shark","location":"Ocean","shadow":"Largest (fin)","price":12000,"time":"4 PM - 9 AM","season":"June-Sept"},
#{"fish":"Hammerhead Shark","location":"Ocean","shadow":"Largest (fin)","price":8000,"time":"4 PM - 9 AM","season":"June-Sept"},
#{"fish":"Great White Shark","location":"Ocean","shadow":"Largest (fin)","price":15000,"time":"4 PM - 9 AM","season":"June-Sept"},
#{"fish":"Whale Shark","location":"Ocean","shadow":"Largest (fin)","price":13000,"time":"All day","season":"June-Sept"},
#{"fish":"Suckerfish","location":"Ocean","shadow":"(Fin)","price":1500,"time":"All day","season":"June-Sept"},
#{"fish":"Football Fish","location":"Ocean","shadow":"Large","price":2500,"time":"4 PM - 9 AM","season":"Nov-Mar"},
#{"fish":"Oarfish","location":"Ocean","shadow":"Largest","price":9000,"time":"All day","season":"Dec-May"},
#{"fish":"Barreleye","location":"Ocean","shadow":"Small","price":15000,"time":"9 PM - 4 AM","season":"All year"},
#{"fish":"Coelacanth","location":"Sea (rainy days)","shadow":"Largest","price":15000,"time":"All day","season":"All year"}];

#SOUTHERN HEMISPHERE
fishInfo = [{"fish":"Bitterling","location":"River","shadow":"Smallest","price":900,"time":"All day","season":"May-Sept"},
{"fish":"Pale Chub","location":"River","shadow":"Smallest","price":160,"time":"9 AM - 4 PM","season":"All year"},
{"fish":"Crucian Carp","location":"River","shadow":"Small","price":160,"time":"All day","season":"All year"},
{"fish":"Dace","location":"River","shadow":"Medium","price":240,"time":"4 PM - 9 AM","season":"All year"},
{"fish":"Carp","location":"Pond","shadow":"Large","price":300,"time":"All day","season":"All year"},
{"fish":"Koi","location":"Pond","shadow":"Large","price":4000,"time":"4 PM - 9 AM","season":"All year"},
{"fish":"Goldfish","location":"Pond","shadow":"Smallest","price":1300,"time":"All day","season":"All year"},
{"fish":"Pop-eyed Goldfish","location":"Pond","shadow":"Smallest","price":1300,"time":"9 AM - 4 PM","season":"All year"},
{"fish":"Ranchu Goldfish","location":"Pond","shadow":"Small","price":4500,"time":"9 AM - 4 PM","season":"All year"},
{"fish":"Killifish","location":"Pond","shadow":"Smallest","price":300,"time":"All day","season":"Oct-Feb"},
{"fish":"Crawfish","location":"Pond","shadow":"Medium","price":200,"time":"All day","season":"Oct-Mar"},
{"fish":"Soft-shelled Turtle","location":"River","shadow":"","price":3750,"time":"4 PM - 9 AM","season":"Feb-Mar"},
{"fish":"Snapping Turtle","location":"River","shadow":"","price":5000,"time":"9 AM - 4 AM","season":"Oct-Apr"},
{"fish":"Tadpole","location":"Pond","shadow":"Smallest","price":100,"time":"All day","season":"Sept-Jan"},
{"fish":"Frog","location":"Pond","shadow":"Small","price":-1,"time":"All day","season":"Nov-Feb"},
{"fish":"Freshwater Goby","location":"River","shadow":"Small","price":400,"time":"4 PM - 9 AM","season":"All year"},
{"fish":"Loach","location":"River","shadow":"Small","price":400,"time":"All day","season":"Sept-Nov"},
{"fish":"Catfish","location":"Pond","shadow":"","price":800,"time":"4 PM - 9 AM","season":"Nov-Apr"},
{"fish":"Giant Snakehead","location":"Pond","shadow":"X Large","price":-1,"time":"9 AM - 4 PM","season":"Dec-Feb"},
{"fish":"Bluegill","location":"River","shadow":"Small","price":180,"time":"9 AM - 4 PM","season":"All year"},
{"fish":"Yellow Perch","location":"River","shadow":"Medium","price":300,"time":"All day","season":"Apr-Sept"},
{"fish":"Black Bass","location":"River","shadow":"Large","price":400,"time":"All day","season":"All year"},
{"fish":"Tilapia","location":"River","shadow":"","price":800,"time":"All day","season":"Dec-Apr"},
{"fish":"Pike","location":"River","shadow":"X Large","price":1800,"time":"All day","season":"Mar-June"},
{"fish":"Pond Smelt","location":"River","shadow":"Small","price":-1,"time":"All day","season":"June-Aug"},
{"fish":"Sweetfish","location":"River","shadow":"Medium","price":900,"time":"All day","season":"Jan-Mar"},
{"fish":"Cherry Salmon","location":"River","shadow":"Medium","price":1000,"time":"All day","season":"Mar-May, Sept-Dec"},
{"fish":"Char","location":"River/Pond","shadow":"Medium","price":3800,"time":"4 PM - 9 AM","season":"Mar-May, Sept-Dec"},
{"fish":"Golden Trout","location":"River (Clifftop)","shadow":"Large","price":15000,"time":"4 PM - 9 AM","season":"Mar-May, Sept-Dec"},
{"fish":"Stringfish","location":"River (Clifftop)","shadow":"Largest","price":15000,"time":"4 PM - 9 AM","season":"June-Sept"},
{"fish":"Salmon","location":"River (mouth)","shadow":"Small","price":700,"time":"All day","season":"Mar"},
{"fish":"King Salmon","location":"River (mouth)","shadow":"Smallest","price":1800,"time":"All day","season":"Mar"},
{"fish":"Mitten Crab","location":"River","shadow":"Small","price":2000,"time":"4 PM - 9 AM","season":"Mar-May"},
{"fish":"Guppy","location":"River","shadow":"Smallest","price":1300,"time":"9 AM - 4 PM","season":"Oct-May"},
{"fish":"Nibble Fish","location":"River","shadow":"Small","price":1500,"time":"9 AM - 4 PM","season":"Nov-Mar"},
{"fish":"Angelfish","location":"River","shadow":"Small","price":3000,"time":"4 PM - 9 AM","season":"Nov-Apr"},
{"fish":"Betta","location":"River","shadow":"Small","price":2500,"time":"9 AM - 4 PM","season":"Nov-Apr"},
{"fish":"Neon Tetra","location":"River","shadow":"Smallest","price":500,"time":"9 AM - 4 PM","season":"Oct-May"},
{"fish":"Rainbowfish","location":"River","shadow":"Small","price":800,"time":"9 AM - 4 PM","season":"Nov-Apr"},
{"fish":"Piranha","location":"River","shadow":"Small","price":2500,"time":"9 AM - 4 PM, 9 PM - 4 AM","season":"Dec-Mar"},
{"fish":"Arowana","location":"River","shadow":"Large","price":10000,"time":"4 PM - 9 AM","season":"Dec-Mar"},
{"fish":"Dorado","location":"River","shadow":"X Large","price":15000,"time":"4 a.m - 9 PM","season":"Dec-Mar"},
{"fish":"Gar","location":"Pond","shadow":"Largest","price":6000,"time":"4 PM - 9 AM","season":"Jan-Apr"},
{"fish":"Arapaima","location":"River","shadow":"","price":10000,"time":"4 PM - 9 AM","season":"Dec-Mar"},
{"fish":"Saddled Bichir","location":"River","shadow":"Large","price":4000,"time":"9 PM - 4 AM","season":"June-Sept"},
{"fish":"Sturgeon","location":"River (mouth)","shadow":"Largest","price":10000,"time":"All day","season":"Mar-Sept"},
{"fish":"Sea Butterfly","location":"Ocean","shadow":"Smallest","price":1000,"time":"All day","season":"June-Sept"},
{"fish":"Sea Horse","location":"Ocean","shadow":"Smallest","price":1100,"time":"All day","season":"Oct-May"},
{"fish":"Clown Fish","location":"Ocean","shadow":"Smallest","price":650,"time":"All day","season":"Oct-Mar"},
{"fish":"Surgeonfish","location":"Ocean","shadow":"Small","price":1000,"time":"All day","season":"Oct-Mar"},
{"fish":"Butterfly Fish","location":"Ocean","shadow":"Small","price":1000,"time":"All day","season":"Oct-Mar"},
{"fish":"Napoleonfish","location":"Ocean","shadow":"Largest","price":10000,"time":"4 AM - 9 PM","season":"Jan-Feb"},
{"fish":"Zebra Turkeyfish","location":"Ocean","shadow":"Medium","price":500,"time":"All day","season":"Oct-May"},
{"fish":"Blowfish","location":"Ocean","shadow":"Medium","price":5000,"time":"6 PM - 4 AM","season":"May-Aug"},
{"fish":"Puffer Fish","location":"Ocean","shadow":"Medium","price":250,"time":"All day","season":"Jan-Mar"},
{"fish":"Anchovy","location":"Ocean","shadow":"Small","price":200,"time":"4 AM - 9 PM","season":"All year"},
{"fish":"Horse Mackerel","location":"Ocean","shadow":"Small","price":150,"time":"All day","season":"All year"},
{"fish":"Barred Knifejaw","location":"Ocean","shadow":"Medium","price":5000,"time":"All day","season":"Sept-May"},
{"fish":"Sea Bass","location":"Ocean","shadow":"X Large","price":400,"time":"All day","season":"All year"},
{"fish":"Red Snapper","location":"Ocean","shadow":"Medium","price":3000,"time":"All day","season":"All year"},
{"fish":"Dab","location":"Ocean","shadow":"Medium","price":300,"time":"All day","season":"Apr-Oct"},
{"fish":"Olive Flounder","location":"Ocean","shadow":"Large","price":800,"time":"All day","season":"All year"},
{"fish":"Squid","location":"Ocean","shadow":"Medium","price":500,"time":"All day","season":"June-Feb"},
{"fish":"Moray Eel","location":"Ocean","shadow":"X Large","price":2000,"time":"All day","season":"Feb-Apr"},
{"fish":"Ribbon Eel","location":"Ocean","shadow":"Narrow","price":600,"time":"All day","season":"Dec-Apr"},
{"fish":"Tuna","location":"Pier","shadow":"X Large","price":7000,"time":"All day","season":"May-Oct"},
{"fish":"Blue Marlin","location":"Pier","shadow":"X Large","price":10000,"time":"All day","season":"Jan-Mar, May-Nov"},
{"fish":"Giant Trevally","location":"Pier","shadow":"Large","price":-1,"time":"All day","season":"Nov-Apr"},
{"fish":"Mahi-mahi","location":"Ocean","shadow":"Large","price":6000,"time":"All day","season":"Nov-Apr"},
{"fish":"Ocean Sunfish","location":"Ocean","shadow":"(Fin)","price":4000,"time":"4 AM - 9 PM","season":"Jan-Mar"},
{"fish":"Ray","location":"Ocean","shadow":"X Large","price":3000,"time":"4 AM - 9 PM","season":"Feb-May"},
{"fish":"Saw Shark","location":"Ocean","shadow":"Largest (fin)","price":12000,"time":"4 PM - 9 AM","season":"Dec-Mar"},
{"fish":"Hammerhead Shark","location":"Ocean","shadow":"Largest (fin)","price":8000,"time":"4 PM - 9 AM","season":"Dec-Mar"},
{"fish":"Great White Shark","location":"Ocean","shadow":"Largest (fin)","price":15000,"time":"4 PM - 9 AM","season":"Dec-Mar"},
{"fish":"Whale Shark","location":"Ocean","shadow":"Largest (fin)","price":13000,"time":"All day","season":"Dec-Mar"},
{"fish":"Suckerfish","location":"Ocean","shadow":"(Fin)","price":1500,"time":"All day","season":"Dec-Mar"},
{"fish":"Football Fish","location":"Ocean","shadow":"Large","price":2500,"time":"4 PM - 9 AM","season":"May-Sept"},
{"fish":"Oarfish","location":"Ocean","shadow":"Largest","price":9000,"time":"All day","season":"June-Nov"},
{"fish":"Barreleye","location":"Ocean","shadow":"Small","price":15000,"time":"9 PM - 4 AM","season":"All year"},
{"fish":"Coelacanth","location":"Ocean (rainy days)","shadow":"Largest","price":15000,"time":"All day","season":"All year"}];


tempDict = {};
bugsReformatted = {};

for bug in bugInfo:
    name = bug["Bug"];
    
    tempDict["season"] = bug["Season"];
    tempDict["location"] = bug["Location"];
    
    monthList = [];
    times = bug["Season"].split(",");
    
    for time in times:
        if time=="All year":
            monthList = range(12); #1-12 in list
            
        elif time.find("-") != -1:
            startAndEndMonths = time.split("-");
            startMonth = startAndEndMonths[0].strip();
            endMonth = startAndEndMonths[1].strip();
            
            startIndex = months.index(startMonth);
            endIndex = months.index(endMonth);
            
            #if we pass december, loop around. otherwise normal range
            if startIndex > endIndex:
                monthList += range(startIndex,12); 
                monthList += range(0,endIndex + 1);
            else:
                monthList += range(startIndex,endIndex+1);
        #single month
        else:
            monthList += [months.index(time.strip())];
            
    tempDict["season"] = monthList;
    tempDict["price"] = bug["Price"];
    tempDict["time"] = bug["Time"];
    
    bugsReformatted[name] = tempDict;
    tempDict = {};
    
tempDict = {};
fishReformatted = {};



for fish in fishInfo:
    name = fish["fish"];
    
    tempDict["season"] = fish["season"];
    tempDict["location"] = fish["location"];
    
    monthList = [];
    times = fish["season"].split(",");
    
    for time in times:
        if time=="All year":
            monthList = range(12); #1-12 in list
            
        elif time.find("-") != -1:
            startAndEndMonths = time.split("-");
            startMonth = startAndEndMonths[0].strip();
            endMonth = startAndEndMonths[1].strip();
            
            startIndex = months.index(startMonth);
            endIndex = months.index(endMonth);
            
            #if we pass december, loop around. otherwise normal range
            if startIndex > endIndex:
                monthList += range(startIndex,12); 
                monthList += range(0,endIndex + 1);
            else:
                monthList += range(startIndex,endIndex+1);
        #single month
        else:
            monthList += [months.index(time.strip())];
            
    tempDict["season"] = monthList;
    tempDict["price"] =  " " if fish["price"] == -1 else fish["price"];
    tempDict["shadow"] = fish["shadow"];
    tempDict["time"] = fish["time"];
    
    fishReformatted[name] = tempDict;
    tempDict = {};

print fishReformatted;