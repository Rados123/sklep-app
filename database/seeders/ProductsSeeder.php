<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        [
            'name'=>'Adromischus Cooperi',
            'price'=>'15.00',
            'category'=>'Rosliny przyjazne dla zwierzat',
            'description'=>'Adromischus Cooperii to urokliwy sukulent o miesistych lisciach nakrapianych ciemniejszymi plamkami. Bedzie zadowolony ze slonecznego parapetu oraz wlasciciela, ktory raczej rzadko przypomina sobie o podlewaniu.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/11/adromischus-cooperii_10x10-1_1636195593-990x1320.jpg',

        ],
        [
            'name'=>'Aeschynanthus japhrolepis Twister',
            'price'=>'90.00',
            'category'=>'Rosliny przyjazne dla zwierzat',
            'description'=>'Aeschynanthus japhrolepis Twister to intrygujaca odmiana eszynantusa. Kaskady fantazyjnie poskrecanych, ciemnozielonych lisci, do ktorych w momencie kwitnienia dolaczaja czerwone kwiaty.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2020/09/09_17_2020_14_51_09.Zdjecie_1.125143-1152x1536.jpg',

        ],
        [
            'name'=>'Aeschynanthus Marmoratus',
            'price'=>'85.00',
            'category'=>'Rosliny przyjazne dla zwierzat',
            'description'=>'Aeschynanthus Marmoratus to bardzo intrygujaca odmiana eszynantusa. Gesty i zwisajacy pokroj typowy dla tego gatunku uzupelniaja oryginalne liscie ozdobione mozaikowym wzorem, ktory od spodu jest intensywnie bordowy.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2020/04/aeschynanthus-marmoratus_17x40-0-1152x1536.jpg',

        ],
        [
            'name'=>'Palma Areka',
            'price'=>'20.00',
            'category'=>'Rosliny przyjazne dla zwierzat',
            'description'=>'Bardzo atrakcyjna palma, z potencjalem na imponujacy wzrost; moze osiagnac nawet 2 metry w domowej uprawie. Przywoluje klimat kolonialnego salonu jak i wakacji w cieplych krajach. ',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/02/02_06_2021_14_12_52.Zdjecie_1.131321-2-1152x1536.jpg',

        ],
        [
            'name'=>'Asparagus Plumosus',
            'price'=>'25.00',
            'category'=>'Rosliny proste w pielegnacji',
            'description'=>'Nie przycinany rosnie bardzo szybko i zaanektuje kazda przestrzen. Ta nieco zapomniana roslina ucieszy milosnikow miejskiej dzungli, bo wystarczy pozwolic jej spontanicznie rosnac by w krotkim czasie cieszyc sie jej bujnym wygladem',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/12/asparagus-plumosus_6x18-1_1639208862-5-990x1320.jpg',

        ],
        [
            'name'=>'Peperomia pereskiifolia',
            'price'=>'35.00',
            'category'=>'Rosliny proste w pielegnacji',
            'description'=>'Miniaturowa Peperomia pereskiifolia to nieklopotliwa i szybko rosnaca roslinka, ktora odnajdzie sie swietnie na polce lub parapecie (najlepiej wystawy wschodniej).',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2022/01/peperomia-pereskiifolia_8x13-1_1642851240-990x1320.jpg',

        ],
        [
            'name'=>'Epipremnum Happy Leaf',
            'price'=>'35.00',
            'category'=>'Oczyszczajace powietrze',
            'description'=>'Ta cudowna pstrokacizna jest rownie prosta w pielegnacji co pozostale odmiany Epipremnum. Happy Leaf mozemy eksponowac w polaczeniu z innymi odmianami (Golden Photos, N’joy) dla efektu wielobarwnej kaskady.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/10/epipremnum-happy-leaf_12x20-1_1635581841-990x1320.jpg',

        ],
        [
            'name'=>'Zielistka',
            'price'=>'55.00',
            'category'=>'Oczyszczajace powietrze',
            'description'=>'Ta rzadka odmiana zielistki przyciaga wzrok fluoroscencyjnie pomaranczowymi lodygami, na ktorych osadzone sa dlugie, eleganckie, lancetowate liscie. Rozswietli kazde wnetrze.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2022/01/chlorophytum-green-orange_12x40-1_1642171707-990x1320.jpg',

        ],
        [
            'name'=>'Sansevieria Star Canary',
            'price'=>'70.00',
            'category'=>'Oczyszczajace powietrze',
            'description'=>'Sansevieria Star Canary – w tej odmianie sansewierii mlode liscie urzekaja kanarkowo-zoltym wybarwieniem lisci. Z czasem przechodza w dojrzala zielen, dzieki czemu na jednej roslinie mamy zawsze kontrastowe zestawienie kolorystyczne',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2020/07/sansevieria-star-canary_9x4-0-1152x1536.jpg',

        ],
        [
            'name'=>'Epipremnum Zlociste',
            'price'=>'60.00',
            'category'=>'Oczyszczajace powietrze',
            'description'=>'Epipremnum Zlociste(Aureum) jest jedna z 18 roslin, ktore w badaniu przeprowadzonym przez NASA wykazaly najsilniejsze dzialanie jako naturalny oczyszczacz powietrza. Latwa w uprawie roslina, dobra rowniez dla poczatkujacych! Do tego bardzo szybko rosnie.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2020/04/epipremnum-aureum_15x40-0-1152x1536.jpg',

        ],
        [
            'name'=>'Asplenium Crispy Wave',
            'price'=>'25.00',
            'category'=>'Oczyszczajace powietrze',
            'description'=>'Blyszczace, soczyscie zielone i pofalowane liscie ukladaja sie w dekoracyjna rozete. Pamietajmy ze Asplenium jest epifitem wiec ma bardzo delikatne korzenie. Zapewnijmy roslince luzne, przepuszczalne podloze, aby ich nie moczyla.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/04/asplenium-crispy-wave_6x15-1_1618649383-1152x1536.jpg',

        ],
        [
            'name'=>'Sansevieria Jade Pagoda',
            'price'=>'35.00',
            'category'=>'Oczyszczajace powietrze',
            'description'=>'Sansevieria Jade Pagoda to wyjatkowo dekoracyjna odmiana sansewierii o wyraznych, zlocistych obrzezach lisci. Sprawdzi sie na praktycznie kazdym stanowisku, nie straszny jej cien ani pelne slonce. Bohatersko zniesie lekkie przesuszenie.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2020/05/sansevieria-jade-pagoda_9x20-0-1152x1536.jpg',

        ],
        [
            'name'=>'Yucca (Juka)',
            'price'=>'55.00',
            'category'=>'Oczyszczajace powietrze',
            'description'=>'Choc na pierwszy rzut oka, Juki i Draceny sa do siebie bardzo podobne – sa to inne rosliny. Yuka wyroznia sie zdecydowanie sztywniejszymi liscmi i wieksza odpornoscia na przesuszenie i duze naslonecznienie.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/10/yucca_14x60-1_1635583666-990x1320.jpg',

        ],
        [
            'name'=>'Philodendron Pink Princess',
            'price'=>'65.00',
            'category'=>'Rosliny kolekcjonerskie',
            'description'=>'Philodendron Pink Princes, czyli rozowa ksiezniczka to kolekcjonerski kultywar filodendrona o bajecznych, rozowych wariegacjach. Filodendron Pink Princess jest nieklopotliwy w uprawie – nada sie jako pierwsza roslina kolekcjonerska! ',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/07/philodendron-pink-princess_6x12-1_1627111938-990x1320.jpg',

        ],
        [
            'name'=>'Chlorophytum Green Orange',
            'price'=>'45.00',
            'category'=>'Rosliny kolekcjonerskie',
            'description'=>'Ta rzadka odmiana zielistki przyciaga wzrok fluoroscencyjnie pomaranczowymi lodygami, na ktorych osadzone sa dlugie, eleganckie, lancetowate liscie. Rozswietli kazde wnetrze.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2022/01/chlorophytum-green-orange_12x40-1_1642171707-990x1320.jpg',

        ],
        [
            'name'=>'Philodendron brandtianum',
            'price'=>'79.00',
            'category'=>'Rosliny kolekcjonerskie',
            'description'=>'Philodendron brandtianum to kolekcjonerski filodendron pnacy o wyjatkowej urodzie. Jego liscie maja sercowaty ksztalt i sa bogato zdobione srebrzystymi, blyszczacymi smugami. Mlode liscie maja charakterystyczna pomaranczowa barwe.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/11/philodendron-brandtianum_11x25-1_1636194979-990x1320.jpg',

        ],
        [
            'name'=>'Hoya wayetii',
            'price'=>'85.00',
            'category'=>'Rosliny kolekcjonerskie',
            'description'=>'Hoya wayetii (kentiana) variegata to kolekcjonerska odmiana hoi, o wyjatkowych wydluzonych lisciach, z ciemniejszym obramowaniem. Nowe liscie tej woskownicy maja urocza rozowa barwe, ktora z czasem przechodzi w bardziej kremowy odcien.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/06/hoya-wayetii-kentiana-variegata_16x20-1_1623401145-990x1320.jpg',

        ],
        [
            'name'=>'Kalatea',
            'price'=>'35.00',
            'category'=>'Rosliny kolekcjonerskie',
            'description'=>'Unikatowa przedstawicielka marantowatych o ciemnych, atlasowych blaszkach lisciowych i jasnozielonych, niemal fluorescencyjnych pregowaniach. Roslina ta ma wysokie wymagania, jednak, jest zdecydowanie warta podjecia ryzyka.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/11/calathea-warsewiczii_6x15-1_1636197785-990x1320.jpg',

        ],
        [
            'name'=>'Homalomena Lemon Lime',
            'price'=>'100.00',
            'category'=>'Rosliny kolekcjonerskie',
            'description'=>'Kolekcjonerska, rzadka odmiana Homalomeny o sercowatych lisciach w barwie neonowej, pulsujacej zieleni i wyraznie zoltym unerwieniu. Wnosi atrakcyjny, energetyczny akcent kolorystyczny do kazdej przestrzeni.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2020/05/homalomena-lemon-lime_15x12-0-1152x1536.jpg',

        ],
        [
            'name'=>'Begonia Amphioxus',
            'price'=>'35.00',
            'category'=>'Rosliny kolekcjonerskie',
            'description'=>'Tropikalna pieknosc o podluznych lisciach, ozdobionych bordowymi plamkami. Wymaga specjalnego traktowania i wysokiej wilgotnosci. Nada sie do domowej szklarni lub terrarium. Polecamy raczej tym doswiadczonym kolekcjonerom.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/05/begonia-amphioxus_6x10-1_1622280978-1152x1536.jpg',

        ],
        [
            'name'=>'Philodendron Moonlight',
            'price'=>'235.00',
            'category'=>'Rosliny kolekcjonerskie',
            'description'=>'Philodendron Moonlight to rzadka, kolekcjonerska odmiana philodendrona, w ktorej pierwsze skrzypce graja duze i delikatnie marszczone, lekko fluoroscencyjne liscie. Najbardziej swietliste sa mlode listki, ktore przechodza w stonowana zielen.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/08/philodendron-moonlight_17x40-1_1628323276-990x1320.jpg',

        ],
        [
            'name'=>'Begonia corallina de lucerna',
            'price'=>'65.00',
            'category'=>'Rosliny kolekcjonerskie',
            'description'=>'Rzadka i wyjatkowa Begonia o duzych lisciach w kolorze glebokiej, butelkowej zieleni i pokrytych kontrastowymi, bialymi kropkami. Bedzie wdzieczna za podwyzszona wilgotnosc powietrza, ale nie serwujmy jej zraszania bo tego nie cierpi.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/08/begonia-corallina-de-lucerna_11x50-1_1628330799-990x1320.jpg',

        ],
        [
            'name'=>'Sadzonka Syngonium Chiapense',
            'price'=>'95.00',
            'category'=>'Rosliny kolekcjonerskie',
            'description'=>'Sadzonka Syngonium Chiapense do samodzielnego ukorzenienia. Jak wszystkie syngonia ukorzenia sie ekspresowo w wodzie z dodatkiem wegla aktywowanego. Ponadto bardzo szybko rosnie i ma naprawde spore liscie!',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/10/sadzonka-syngonium-chiapense_1x30-1_1634126153-990x1485.jpg',

        ],
        [
            'name'=>'Sadzonka Monstera adansonii variegata',
            'price'=>'350.00',
            'category'=>'Rosliny kolekcjonerskie',
            'description'=>'Sadzonka bardzo rzadko dostepnej, kolekcjonerskiej Monstery adansonii Variegata. Oprocz dziur typowych rowniez dla odmiany Monkey Mask, posiada wyrazne jasne wariegacje, ktore moga przybierac forme nieregularnych plamek lub wybarwienia half moon.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/10/sadzonka-monstera-adansonii-variegata_1x11-1_1634725651-990x1485.jpg',

        ],
        [
            'name'=>'Aglaonema Red Valentine',
            'price'=>'30.00',
            'category'=>'Cieniolubne rosliny doniczkowe',
            'description'=>'Aglaonema o nasyconych, intensywnych barwach. Podobnie jak jej kuzynki, nieklopotliwa i wdzieczna w uprawie.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/11/aglaonema-red-valentine_6x10-1_1636197761-990x1320.jpg',

        ],
        [
            'name'=>'Asplenium nidus Crissie',
            'price'=>'35.00',
            'category'=>'Cieniolubne rosliny doniczkowe',
            'description'=>'Wszystkie odmiany Asplenium sa przyjazne dla zwierzat i efektywne w oczyszczaniu powietrza z zanieczyszczen. Lubimy je tez za dekoracyjny, rozetowy pokroj i soczysta zielen lisci.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2022/01/asplenium-nidus-crissie_12x30-1_1642004011-990x1320.jpg',

        ],
        [
            'name'=>'Calathea roseopicta Rosy',
            'price'=>'20.00',
            'category'=>'Cieniolubne rosliny doniczkowe',
            'description'=>'Roslina idealna dla wszystkich fanow rozowych lisci. Niezwykle urocza i elegancka calathea roseopicta Rosy. Kalatee z powodu poruszajacych sie w ciagu doby blaszek lisciowych, zwane sa rowniez roslinami modlacymi sie.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2020/11/11_21_2020_15_27_09.Zdjecie_1.142810-1152x1536.jpg',

        ],
        [
            'name'=>'Skrzydlokwiat',
            'price'=>'35.00',
            'category'=>'Cieniolubne rosliny doniczkowe',
            'description'=>'Subtelna, elegancka roslina o dlugich lancetowatych lisciach i snieznobialych kwiatach. Skrzydlokwiat znajduje sie na liscie 18 roslin, ktore NASA uznala za wyjatkowo efektywne w zwalczaniu zanieczyszczen w naszych mieszkaniach.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/09/spathiphyllum_13x40-1_1632562367-990x1320.jpg',

        ],
        [
            'name'=>'Maranta Fascinator Tricolor',
            'price'=>'35.00',
            'category'=>'Cieniolubne rosliny doniczkowe',
            'description'=>'Ornamentalne, owalne liscie z charakterystycznymi czerwonymi zylkami to jej niewatpliwy atut. Ze wzgledu na niezwykla ceche jej lisci, ktore leza plasko w ciagu dnia, a na wieczor wznosza sie jak do modlitwy.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/07/marantha-fascinator-tricolor_12x25-1_1627112719-990x1320.jpg',

        ],
        [
            'name'=>'Fittonia Ruby Lime',
            'price'=>'25.00',
            'category'=>'Cieniolubne rosliny doniczkowe',
            'description'=>'Na malutkich listkach tej slicznotki spotyka sie limonkowa zielen i wyrazisty roz, tworzac kompozycje niczym z najpiekniejszej basni. Fittonia Ruby Lime wyglada pieknie zarowno solo, jak i w towarzystwie innych roslin np. w lesie w sloiku.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/06/fittonia-ruby-lime_8x10-1_1624689415-990x1320.jpg',

        ],
        [
            'name'=>'Maranta Leuconeura Kerchoveana',
            'price'=>'15.00',
            'category'=>'Cieniolubne rosliny doniczkowe',
            'description'=>'Zwana tez krolicza lapka – ta odmiana maranty posiada piekne jasnozielone liscie z ciemniejszymi znaczeniami biegnacymi po kazdej stronie glownej zyly. Maranta, podobnie jak Calathea nazywana jest czasami roslina modlitewna.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/05/marantha-leuconeura-kerchoveana_6x15-1_1620388189-1152x1536.jpg',

        ],
        [
            'name'=>'Sansevieria Zeylanica',
            'price'=>'35.00',
            'category'=>'Cieniolubne rosliny doniczkowe',
            'description'=>'Sansevieria Zeylanica to bardzo dekoracyjna sansewieria o ciekawym rysunku lisci. Sansevierie sa w naszych domach od lat, a odmiana zeylanica to klasyka gatunku. Egzotyczny i szlachetny wyglad wezownic pozwala wpasowac sie w rozne aranzacyjne trendy.',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/03/sansevieria-zeylanica_9x33-1_1614688138-1152x1536.jpg',

        ],
        [
            'name'=>'Oslonka Aslan 7×8 cm',
            'price'=>'15.00',
            'category'=>'Doniczki i Oslonki',
            'description'=>'Rozmiar S',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/11/oslonka-aslan_7x8-1_1637404579-990x1320.jpg',

        ],
        [
            'name'=>'Oslonka Arch 9×12 cm',
            'price'=>'15.00',
            'category'=>'Doniczki i Oslonki',
            'description'=>'Rozmiar S',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/12/oslonka-arch_9x12-1_1638608954-990x1320.jpg',

        ],
        [
            'name'=>'Oslonka Berber narrow 10×14 cm',
            'price'=>'25.00',
            'category'=>'Doniczki i Oslonki',
            'description'=>'Rozmiar S',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/09/oslonka-berber-narrow_10x14-1_1630749464-990x1320.jpg',

        ],
        [
            'name'=>'Oslonka Aslan 15×16 cm',
            'price'=>'45.00',
            'category'=>'Doniczki i Oslonki',
            'description'=>'Rozmiar M',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/11/oslonka-aslan_15x16-1_1637404754-990x1320.jpg',

        ],
        [
            'name'=>'Oslonka Belt 12×13 cm',
            'price'=>'45.00',
            'category'=>'Doniczki i Oslonki',
            'description'=>'Rozmiar M',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/12/oslonka-belt_12x13-1_1638612181-990x1320.jpg',

        ],
        [
            'name'=>'Oslonka Chalice 11×13 cm',
            'price'=>'40.00',
            'category'=>'Doniczki i Oslonki',
            'description'=>'Rozmiar M',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/10/oslonka-chalice_11x13-1_1634371020-990x1320.jpg',

        ],
        [
            'name'=>'Oslonka Boho Basket 23×22 cm',
            'price'=>'65.00',
            'category'=>'Doniczki i Oslonki',
            'description'=>'Rozmiar L',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/11/oslonka-boho-basket_23x22-1_1638009049-990x1320.jpg',

        ],
        [
            'name'=>'Doniczka plastikowa 22×18 cm',
            'price'=>'65.00',
            'category'=>'Doniczki i Oslonki',
            'description'=>'Rozmiar L',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/05/doniczka-plastikowa_22x18-1_1622269025-1152x1536.jpg',

        ],
        [
            'name'=>'Kwietnik metalowy Ib Laursen 20×15 cm',
            'price'=>'65.00',
            'category'=>'Doniczki i Oslonki',
            'description'=>'Rozmiar L',
            'gallery'=>'https://www.jungleboogie.pl/wp-content/uploads/2021/04/kwietnik-metalowy-ib-laursen_20x15-1_1618251796-1152x1536.jpg',

        ]
    ]);    
    }
}
