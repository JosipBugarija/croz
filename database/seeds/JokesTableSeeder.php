<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JokesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jokes')->insert([
            [
                'content' => 'Plavuša se hvali prijateljicama:<br>- Moj sin ide na satove engleskog, njemačkog i algebre, ... sine dođi, reci tetama nešto na algebarskom ...',
                'category_id' => 4
            ],[
                'content' => 'Dolazi Mujo kod doktora kad na vratima piše: "Prvi put 100 maraka, a drugi put 50". Uđe on i kaže:<br>- Evo ti mene opet doktore.',
                'category_id' => 1
            ],[
                'content' => 'Chuck Norris moze obrisat Recycle Bin!.',
                'category_id' => 2
            ],[
                'content' => 'Kako se zove grčki bog bežanja sa časova?<br>- Odeon.',
                'category_id' => 3
            ],[
                'content' => 'Chuck Norris je umro prije 10 godina, ali Smrt još nije našla hrabrosti da mu to kaže.',
                'category_id' => 2
            ],[
                'content' => '- Dijete mi je polomilo novi iPhone, tako da ga sada poklanjam.<br>- Dijete ima osam godina i plave oci, ne dajte mu elektroniku u ruke.',
                'category_id' => 5
            ],[
                'content' => 'Chuck Norris je pojeo rođendansku tortu prije nego što je saznao da je unutra striptizeta.',
                'category_id' => 2
            ],[
                'content' => 'Ptiča Mujo Hasi:<br>- Zamisli jarane mog ludog komšiju Ibra. Zvoni mi na vrata u 2 ujutru. Toliko sam se uplašio da mi zamalo bušilica nije ispala na nogu.',
                'category_id' => 1
            ],[
                'content' => '- Zahvaljujući krizi opet sam na nogama.<br>- Banka mi oduzela auto.',
                'category_id' => 5
            ],[
                'content' => 'Zašto plavuša liže sat?<br>- čula je da tik tak osvježava dah.',
                'category_id' => 4
            ],[
                'content' => 'Liječnik pacijentu:<br>- Apsolutno morate prestati pušiti.<br>- Zašto doktore? Imam li nešto na plućima?<br>- Ne! Svaki puta kad dođete kod mene pregorite mi tepih.',
                'category_id' => 5
            ],[
                'content' => 'Došao narednik u policiju javiti policajcima:<br>- Pobjego je zatvorenik iz ćelije broj 8!<br>- Hvala Bogu, danima nas je živciralo to struganje rešetaka.',
                'category_id' => 7
            ],[
                'content' => 'Dolazi čovjek u prodavnicu auto delova:<br>- Dobar dan, mogu li dobiti 4 ratkapne za Yuga?<br>- Može, zvuči kao fer zamena.',
                'category_id' => 5
            ],[
                'content' => 'Chuk Norris je jabukom ogulio nož.',
                'category_id' => 2
            ],[
                'content' => 'Plavuša zove telefonom radio stanicu i biva uključena u radio program:<br>- Želela bih da pozdravim svoje roditelje, a posebno Mamu i Tatu!',
                'category_id' => 4
            ],[
                'content' => 'Zove šef Muju u svoju kancelariju:<br>- Mujo, rekao si svojim kolegama da sam glupan, nesposobnjaković i blefer, Je li tako?<br>- Pa šefe tako je, ali ja to rekao nisam!',
                'category_id' => 1
            ],[
                'content' => '- Ljubavi, varao sam te - kaže muž ženi.<br>- I ja tebe! - odgovara ona.<br>- Prvi april! - kaže muž.<br>- Deveti februar - odgovara ona.',
                'category_id' => 5
            ],[
                'content' => 'Pitali policajca što je to što po vodi ide a ne brćka, a po šumi ide a ne šuška?<br>- Da nije možda zagonetka? - odgovori policajac?',
                'category_id' => 7
            ],[
                'content' => 'Trči žena za tramvajem i dere se:<br>-Stani molim te žurim na posao<br>Ljudi u tramvaju se počeli derati na vozača i on stao te ona ušla u tamvaj i kaže:<br>- Hvala vam puno, ajmo sad karte na pregled.',
                'category_id' => 5
            ],[
                'content' => 'Kaže otac Perici:<br>- Ako dobiješ jedinicu danas iz matematike, mi se više ne znamo.<br>Vrati se Perica kasnije iz škole i kaže ocu:<br>- Bok, tko si ti?',
                'category_id' => 6
            ],[
                'content' => 'Zaustavi policajac vozača:<br>- Da li ste nešto popili?<br>- Popio sam jedan kapućino<br>- A da nisu ipak bila dva-tri kapućina? - Kaže policajac i sumnjičavo vrti glavom.',
                'category_id' => 7
            ],[
                'content' => 'Gleda plavuša meni u kafiću.<br>- Oprostite, što vam je to hibiskus?<br>- To je čaj.<br>- Onda jedan hibiskus od kamilice!',
                'category_id' => 4
            ],[
                'content' => 'Izlazi policajac iz pekare i nailazi na svog prijatelja pa mu kaže:<br>- Ako pogodiš koliko imam krafni u džepu dam ti obje!',
                'category_id' => 7
            ],[
                'content' => 'Učiteljica pita Pericu:<br>- Tko je razbio prozor?<br>- Zar stvarno mislite da ću odati vlastitog brata? - kaže Perica.',
                'category_id' => 3
            ],[
                'content' => 'Pričaju dve plavuše i nije prošlo mnogo dotaknu se teme sexa:<br>- Ja sam izgubila nevinost sa 12! Kaže prva.<br>- Dvanaest?! Ja samo sa trojicom.',
                'category_id' => 4
            ],
        ]);
    }
}