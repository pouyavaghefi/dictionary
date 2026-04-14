<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;
class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $words = [
            [
                'language_id' => 4,
                'word' => 'samen',
                'meaning_en' => 'together',
            ],
            [
                'language_id' => 4,
                'word' => 'waarschijnlijk',
                'meaning_en' => 'probably',
            ],
            [
                'language_id' => 4,
                'word' => 'vraag',
                'meaning_en' => 'question',
            ],
            [
                'language_id' => 4,
                'word' => 'duidelijk',
                'meaning_en' => 'clear',
            ],
            [
                'language_id' => 4,
                'word' => 'wordt',
                'meaning_en' => 'becomes / is',
            ],
            [
                'language_id' => 4,
                'word' => 'volgens',
                'meaning_en' => 'according to',
            ],
            [
                'language_id' => 4,
                'word' => 'tussen',
                'meaning_en' => 'between',
            ],
            [
                'language_id' => 4,
                'word' => 'onderhandeld',
                'meaning_en' => 'negotiated',
            ],
            [
                'language_id' => 4,
                'word' => 'voorstel',
                'meaning_en' => 'proposal / suggestion',
            ],
            [
                'language_id' => 4,
                'word' => 'waarmee',
                'meaning_en' => 'with which',
            ],
            [
                'language_id' => 4,
                'word' => 'eindigen',
                'meaning_en' => 'to end',
            ],
            [
                'language_id' => 4,
                'word' => 'gebaseerd',
                'meaning_en' => 'based',
            ],
            [
                'language_id' => 4,
                'word' => 'gebruikt',
                'meaning_en' => 'used',
            ],
            [
                'language_id' => 4,
                'word' => 'uiteindelijk',
                'meaning_en' => 'finally / eventually',
            ],
            [
                'language_id' => 4,
                'word' => 'kernwapen',
                'meaning_en' => 'nuclear weapon',
            ],
            [
                'language_id' => 4,
                'word' => 'gestolen',
                'meaning_en' => 'stolen',
            ],
            [
                'language_id' => 4,
                'word' => 'verrijkt',
                'meaning_en' => 'enriched',
            ],
            [
                'language_id' => 4,
                'word' => 'verplaatst',
                'meaning_en' => 'moved / relocated',
            ],
            [
                'language_id' => 4,
                'word' => 'daarvoor',
                'meaning_en' => 'for that / before that',
            ],
            [
                'language_id' => 4,
                'word' => 'bepaalde',
                'meaning_en' => 'certain / specific',
            ],
            [
                'language_id' => 4,
                'word' => 'tagen',
                'meaning_en' => 'days (archaic / poetic)',
            ],
            [
                'language_id' => 4,
                'word' => 'eindresultaat',
                'meaning_en' => 'final result',
            ],
            [
                'language_id' => 4,
                'word' => 'ondertussen',
                'meaning_en' => 'meanwhile',
            ],
            [
                'language_id' => 4,
                'word' => 'publiekerlijk',
                'meaning_en' => 'publicly',
            ],
            [
                'language_id' => 4,
                'word' => 'ontkent',
                'meaning_en' => 'denies',
            ],
            [
                'language_id' => 4,
                'word' => 'onderhandeling',
                'meaning_en' => 'negotiation',
            ],
            [
                'language_id' => 4,
                'word' => 'stiekem',
                'meaning_en' => 'secretly / sneakily',
            ],
            [
                'language_id' => 4,
                'word' => 'toch',
                'meaning_en' => 'yet / still / however',
            ],
            [
                'language_id' => 4,
                'word' => 'feit',
                'meaning_en' => 'fact',
            ],
            [
                'language_id' => 4,
                'word' => 'onderhandelen',
                'meaning_en' => 'to negotiate',
            ],
            [
                'language_id' => 1,
                'word' => 'benevolent',
                'meaning_en' => 'kind and with positive intentions',
            ],
            [
                'language_id' => 1,
                'word' => 'prostrate',
                'meaning_en' => 'lying stretched out on the ground with ones face downwards',
            ],
            [
                'language_id' => 1,
                'word' => 'bow',
                'meaning_en' => 'a knot tied with two loops and two loose ends, used especially for tying shoelaces and decorative ribbons',
            ],
            [
                'language_id' => 1,
                'word' => 'propagate',
                'meaning_en' => 'breed specimens of (a plant or animal) by natural processes from the parent stock',
            ],
            [
                'language_id' => 1,
                'word' => 'omnipotent',
                'meaning_en' => 'having unlimited power',
            ],
            [
                'language_id' => 1,
                'word' => 'omniscient',
                'meaning_en' => 'knowing everything',
            ],
            [
                'language_id' => 1,
                'word' => 'lycanthrope',
                'meaning_en' => '(in folk tales) a person able to transform into a wolf / a werewolf',
            ],
            [
                'language_id' => 1,
                'word' => 'retribution',
                'meaning_en' => 'punishment inflicted on someone as vengeance for a wrong or criminal act',
            ],
            [
                'language_id' => 1,
                'word' => 'undertake',
                'meaning_en' => 'commit oneself to and begin / take on',
            ],
            [
                'language_id' => 1,
                'word' => 'enraged',
                'meaning_en' => 'very angry / furious',
            ],
            [
                'language_id' => 1,
                'word' => 'almighty',
                'meaning_en' => 'having complete power',
            ],
            [
                'language_id' => 1,
                'word' => 'wrathful',
                'meaning_en' => 'full of or characterized by intense anger',
            ],
            [
                'language_id' => 1,
                'word' => 'crop',
                'meaning_en' => 'a cultivated plant that is grown on a large scale commercially, especially a cereal, fruit, or vegetable',
            ],
            [
                'language_id' => 1,
                'word' => 'treasure',
                'meaning_en' => 'a quantity of precious metals, gems, or other valuable objects',
            ],
            [
                'language_id' => 1,
                'word' => 'devour',
                'meaning_en' => 'eat hungrily or quickly',
            ],
            [
                'language_id' => 1,
                'word' => 'mystical',
                'meaning_en' => 'relating to mystics or religious mysticism',
            ],
            [
                'language_id' => 4,
                'word' => 'minder',
                'meaning' => 'کمتر',
            ],
            [
                'language_id' => 4,
                'word' => 'minder',
                'meaning' => 'کمتر',
            ],
            [
                'language_id' => 4,
                'word' => 'interesse',
                'meaning_en' => 'interest',
            ],
            [
                'language_id' => 4,
                'word' => 'gekozen',
                'meaning_en' => 'chosen',
            ],
            [
                'language_id' => 4,
                'word' => 'kandidaten',
                'meaning_en' => 'candidates',
            ],
            [
                'language_id' => 4,
                'word' => 'voort',
                'meaning_en' => 'further',
            ],
            [
                'language_id' => 4,
                'word' => 'zetten',
                'meaning_en' => 'continue',
            ],
            [
                'language_id' => 4,
                'word' => 'betekent',
                'meaning_en' => 'means',
            ],
            [
                'language_id' => 4,
                'word' => 'helaas',
                'meaning_en' => 'unfortunately',
            ],
            [
                'language_id' => 4,
                'word' => 'afwijzen',
                'meaning_en' => 'reject',
            ],
            [
                'language_id' => 4,
                'word' => 'afwijzen',
                'meaning_en' => 'reject',
            ],
            [
                'language_id' => 4,
                'word' => 'motivatie',
                'meaning_en' => 'motivation',
            ],
            [
                'language_id' => 4,
                'word' => 'inzet',
                'meaning_en' => 'effort',
            ],
            [
                'language_id' => 4,
                'word' => 'simpleweg',
                'meaning_en' => 'simply',
            ],
            [
                'language_id' => 4,
                'word' => 'kwestie',
                'meaning_en' => 'matter',
            ],
            [
                'language_id' => 4,
                'word' => 'motivatie',
                'meaning_en' => 'motivation',
            ],
            [
                'language_id' => 4,
                'word' => 'aansluiting',
                'meaning_en' => 'connection',
            ],
            [
                'language_id' => 4,
                'word' => 'specifieke',
                'meaning_en' => 'specific',
            ],
            [
                'language_id' => 4,
                'word' => 'wensen',
                'meaning_en' => 'wishes',
            ],
            [
                'language_id' => 4,
                'word' => 'hierover',
                'meaning_en' => 'about this',
            ],
            [
                'language_id' => 4,
                'word' => 'bell',
                'meaning_en' => 'call',
            ],
            [
                'language_id' => 4,
                'word' => 'vacature',
                'meaning_en' => 'vacancy',
            ],
            [
                'language_id' => 4,
                'word' => 'nog',
                'meaning_en' => 'still / also',
            ],
            [
                'language_id' => 4,
                'word' => 'verdere',
                'meaning_en' => 'further',
            ],
            [
                'language_id' => 4,
                'word' => 'sollicitaties',
                'meaning_en' => 'applications',
            ],
            [
                'language_id' => 4,
                'word' => 'groeten',
                'meaning_en' => 'greetings / regards',
            ],
            [
                'language_id' => 4,
                'word' => 'de groente',
                'meaning_en' => 'the vegetables',
            ],
            [
                'language_id' => 4,
                'word' => 'het brood',
                'meaning_en' => 'the bread',
            ],
            [
                'language_id' => 4,
                'word' => 'de boterham',
                'meaning_en' => 'the slice of bread',
            ],

            [
                'language_id' => 4,
                'word' => 'het fruit',
                'meaning_en' => 'the fruits',
            ],
            [
                'language_id' => 4,
                'word' => 'opdrachtgever',
                'meaning_en' => 'client / employer',
            ],
            [
                'language_id' => 1,
                'word' => 'jurist',
                'meaning_en' => 'an expert in or writer on law',
            ],
            [
                'language_id' => 1,
                'word' => 'occultation',
                'meaning' => 'غیبت',
            ],
            [
                'language_id' => 1,
                'word' => 'pious',
                'meaning_en' => 'devoutly religious',
            ],
            [
                'language_id' => 1,
                'word' => 'pious',
                'meaning_en' => 'devoutly religious',
            ],
            [
                'language_id' => 1,
                'word' => 'conviction',
                'meaning' => 'محکومیت',
            ],
            [
                'language_id' => 1,
                'word' => 'pilgrim',
                'meaning' => 'حاجی',
            ],
            [
                'language_id' => 1,
                'word' => 'ferment',
                'meaning' => 'تخمیر شدن',
            ],
            [
                'language_id' => 1,
                'word' => 'contest',
                'meaning_en' => 'engage in competition to attain',
            ],
            [
                'language_id' => 1,
                'word' => 'interpretation',
                'meaning_en' => 'the action of explaining the meaning of something',
            ],
            [
                'language_id' => 1,
                'word' => 'bundle',
                'meaning_en' => 'a collection of things or quantity of material tied or wrapped up together',
            ],
            [
                'language_id' => 1,
                'word' => 'contested',
                'meaning' => 'مورد بحث',
            ],
            [
                'language_id' => 1,
                'word' => 'preacher',
                'meaning_en' => 'a person who preaches, especially a minister of religion',
            ],
            [
                'language_id' => 1,
                'word' => 'formative',
                'meaning' => 'شکل دهنده',
            ],
            [
                'language_id' => 1,
                'word' => 'designate',
                'meaning_en' => 'appoint (someone) to a specified office or post',
            ],
            [
                'language_id' => 1,
                'word' => 'implausibly',
                'meaning_en' => 'doing or saying something in a way that is difficult to believe',
            ],
            [
                'language_id' => 1,
                'word' => 'edorsed',
                'meaning_en' => 'declare ones public approval or support of',
            ],
            [
                'language_id' => 1,
                'word' => 'flawed',
                'meaning_en' => 'having or characterized by a fundamental weakness or imperfection',
            ],
            [
                'language_id' => 1,
                'word' => 'reverberate',
                'meaning_en' => '(of a loud noise) be repeated several times as an echo',
            ],
            [
                'language_id' => 1,
                'word' => 'call off',
                'meaning_en' => 'cancel an event or agreement',
            ],
            [
                'language_id' => 1,
                'word' => 'excursion',
                'meaning_en' => 'a short journey or trip, especially one taken as a leisure activity',
            ],
            [
                'language_id' => 1,
                'word' => 'to commend',
                'meaning_en' => 'a formal expression used to offer sincere praise, admiration, or approval for someones actions, efforts, or qualities',
            ],
            [
                'language_id' => 1,
                'word' => 'winding road',
                'meaning_en' => 'a formal expression used to offer sincere praise, admiration, or approval for someones actions, efforts, or qualities',
            ],
            [
                'language_id' => 1,
                'word' => 'tenure',
                'meaning_en' => 'the conditions under which land or buildings are held or occupied',
            ],
            [
                'language_id' => 1,
                'word' => 'vindicate',
                'meaning_en' => 'clear (someone) of blame or suspicion',
            ],
            [
                'language_id' => 1,
                'word' => 'proliferation',
                'meaning_en' => 'rapid increase in the number or amount of something',
            ],
            [
                'language_id' => 1,
                'word' => 'legitimately',
                'meaning_en' => 'in a way that conforms to the law or to rules',
            ],
            [
                'language_id' => 1,
                'word' => 'deciphering',
                'meaning_en' => 'the process of converting obscure, coded, or illegible information into plain, understandable language',
            ],
            [
                'language_id' => 1,
                'word' => 'magnum',
                'meaning_en' => 'a wine bottle of twice the standard size',
            ],
            [
                'language_id' => 1,
                'word' => 'snuck in',
                'meaning_en' => 'to enter a place quietly, secretly or without permission to avoid being noticed',
            ],
            [
                'language_id' => 1,
                'word' => 'crossey',
                'meaning' => 'صلیب',
            ],
            [
                'language_id' => 1,
                'word' => 'smuggle',
                'meaning_en' => 'move goods illegally',
            ],
            [
                'language_id' => 1,
                'word' => 'obscenity',
                'meaning' => 'وقاحت',
            ],
            [
                'language_id' => 1,
                'word' => 'vocational education',
                'meaning_en' => 'specialized training designed to teach specific skills, knowledge, and competencies for a particular trade, occupation, or career',
            ],
            [
                'language_id' => 1,
                'word' => 'disgrace',
                'meaning_en' => 'loss of reputation or respect as the result of a dishonourable action',
            ],
            [
                'language_id' => 1,
                'word' => 'cuckblocking',
                'meaning' => 'جلوگیری از برقراری رابطه جنسی یا صمیمی میان دو نفر',
            ],
            [
                'language_id' => 4,
                'word' => 'pakje',
                'meaning' => 'جعبه کوچک',
            ],
            [
                'language_id' => 4,
                'word' => 'poffertje',
                'meaning' => 'پنکیک کوچک',
            ],
            [
                'language_id' => 4,
                'word' => 'precise',
                'meaning' => 'دقیقا',
            ],
            [
                'language_id' => 4,
                'word' => 'samen',
                'meaning' => 'باهم',
            ],
            [
                'language_id' => 4,
                'word' => 'school',
                'meaning' => 'مدرسه',
            ],
            [
                'language_id' => 4,
                'word' => 'toetje',
                'meaning' => 'دسر',
            ],
            [
                'language_id' => 4,
                'word' => 'uitgenodigd',
                'meaning' => 'دعوت کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'uitnoodiging',
                'meaning' => 'دعوت',
            ],
            [
                'language_id' => 4,
                'word' => 'volk',
                'meaning' => 'سیب زمینی',
            ],
            [
                'language_id' => 4,
                'word' => 'weliswaar',
                'meaning' => 'اگرچه درست است',
            ],
            [
                'language_id' => 4,
                'word' => 'zeeziek',
                'meaning' => 'دریازدگی',
            ],
            [
                'language_id' => 4,
                'word' => 'zorg',
                'meaning' => 'نگرانی',
            ],
            [
                'language_id' => 4,
                'word' => 'afgezegd',
                'meaning' => 'رد کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'ballet',
                'meaning' => 'باله',
            ],
            [
                'language_id' => 4,
                'word' => 'berlijn',
                'meaning' => 'برلین',
            ],
            [
                'language_id' => 4,
                'word' => 'bevalt',
                'meaning' => 'خوش آمدن',
            ],
            [
                'language_id' => 4,
                'word' => 'cadeau',
                'meaning' => 'کادو',
            ],
            [
                'language_id' => 4,
                'word' => 'chocola',
                'meaning' => 'شکلات',
            ],
            [
                'language_id' => 4,
                'word' => 'cultuur',
                'meaning' => 'فرهنگ',
            ],
            [
                'language_id' => 4,
                'word' => 'dank',
                'meaning' => 'تشکر',
            ],
            [
                'language_id' => 4,
                'word' => 'ding',
                'meaning' => 'چیز',
            ],
            [
                'language_id' => 4,
                'word' => 'echt',
                'meaning' => 'اینجا',
            ],
            [
                'language_id' => 4,
                'word' => 'etentje',
                'meaning' => 'خوراک',
            ],
            [
                'language_id' => 4,
                'word' => 'fraai',
                'meaning' => 'زیبا / قشنگ',
            ],
            [
                'language_id' => 4,
                'word' => 'gekookt',
                'meaning' => 'پختن',
            ],
            [
                'language_id' => 4,
                'word' => 'geschaakt',
                'meaning' => 'شطرنج بازی کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'gesmaakt',
                'meaning' => 'مزه دادن',
            ],
            [
                'language_id' => 4,
                'word' => 'gezeild',
                'meaning' => 'قایق رانی',
            ],
            [
                'language_id' => 4,
                'word' => 'gisteren',
                'meaning' => 'دیروز',
            ],
            [
                'language_id' => 4,
                'word' => 'hartelijk',
                'meaning' => '',
            ],
            [
                'language_id' => 4,
                'word' => 'aardappel',
                'meaning' => 'سیب زمینی',
            ],
            [
                'language_id' => 4,
                'word' => 'tennissen',
                'meaning' => 'تنیس بازی کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'trouwens',
                'meaning' => 'ضمنا',
            ],
            [
                'language_id' => 4,
                'word' => 'uitdagend',
                'meaning' => 'چالش برانگیز',
            ],
            [
                'language_id' => 4,
                'word' => 'vanavond',
                'meaning' => 'امشب',
            ],
            [
                'language_id' => 4,
                'word' => 'varen',
                'meaning' => 'راندن با قایق سواری',
            ],
            [
                'language_id' => 4,
                'word' => 'verliezer',
                'meaning' => 'بازنده',
            ],
            [
                'language_id' => 4,
                'word' => 'weer',
                'meaning' => 'هوا',
            ],
            [
                'language_id' => 4,
                'word' => 'weerbericht',
                'meaning' => 'گزارش وضعیت هوا',
            ],
            [
                'language_id' => 4,
                'word' => 'weersvrwachting',
                'meaning' => 'پیش بینی وضع هوا',
            ],
            [
                'language_id' => 4,
                'word' => 'westen',
                'meaning' => 'غرب',
            ],
            [
                'language_id' => 4,
                'word' => 'windkracht',
                'meaning' => 'درجه شدت باد',
            ],
            [
                'language_id' => 4,
                'word' => 'windsurfen',
                'meaning' => 'بادموج سواری',
            ],
            [
                'language_id' => 4,
                'word' => 'wint',
                'meaning' => 'پیروز شدن',
            ],
            [
                'language_id' => 4,
                'word' => 'zet af',
                'meaning' => 'خاموش کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'zin hebben',
                'meaning' => 'دوست داشتن',
            ],
            [
                'language_id' => 4,
                'word' => 'zonnig',
                'meaning' => 'آفتابی',
            ],
            [
                'language_id' => 4,
                'word' => 'zwemmen',
                'meaning' => 'شنا کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'af en toe',
                'meaning' => 'گاهی',
            ],
            [
                'language_id' => 4,
                'word' => 'boord',
                'meaning' => 'اینجا',
            ],
            [
                'language_id' => 4,
                'word' => 'bui',
                'meaning' => 'رگبار',
            ],
            [
                'language_id' => 4,
                'word' => 'dagje',
                'meaning' => 'یک روز تمام',
            ],
            [
                'language_id' => 4,
                'word' => 'dolgraag',
                'meaning' => 'از صمیم قلب',
            ],
            [
                'language_id' => 4,
                'word' => 'draait',
                'meaning' => 'چرخیدن',
            ],
            [
                'language_id' => 4,
                'word' => 'er is een kans op',
                'meaning' => 'امکان پذیر است',
            ],
            [
                'language_id' => 4,
                'word' => 'ervaring',
                'meaning' => 'تجربه',
            ],
            [
                'language_id' => 4,
                'word' => 'fietstocht',
                'meaning' => 'تور دوچرخه سواری',
            ],
            [
                'language_id' => 4,
                'word' => 'gauw',
                'meaning' => 'تند',
            ],
            [
                'language_id' => 4,
                'word' => 'hoeft niet',
                'meaning' => 'مجبور نبودن',
            ],
            [
                'language_id' => 4,
                'word' => 'knmi',
                'meaning' => 'سازمان هواشناسی هلند',
            ],
            [
                'language_id' => 4,
                'word' => 'maken',
                'meaning' => 'کردن / انجام دادن',
            ],
            [
                'language_id' => 4,
                'word' => 'neemt toe',
                'meaning' => 'شدت گرفتن',
            ],
            [
                'language_id' => 4,
                'word' => 'noorden',
                'meaning' => 'شمال',
            ],
            [
                'language_id' => 4,
                'word' => 'onweren',
                'meaning' => 'رعد و برق',
            ],
            [
                'language_id' => 4,
                'word' => 'overtuigen',
                'meaning' => 'قانع کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'paardrijden',
                'meaning' => 'اسب سواری کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'ruize maken',
                'meaning' => 'دعوا کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'schaakspel',
                'meaning' => 'بازی شطرنج',
            ],
            [
                'language_id' => 4,
                'word' => 'schaken',
                'meaning' => 'شطرنج بازی کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'schip',
                'meaning' => 'کشتی',
            ],
            [
                'language_id' => 4,
                'word' => 'schip',
                'meaning' => 'کشتی',
            ],
            [
                'language_id' => 4,
                'word' => 'slecht',
                'meaning' => 'بد',
            ],
            [
                'language_id' => 4,
                'word' => 'spannend',
                'meaning' => 'هیجان انگیز',
            ],
            [
                'language_id' => 4,
                'word' => 'spel',
                'meaning' => 'بازی',
            ],
            [
                'language_id' => 4,
                'word' => 'sportief',
                'meaning' => 'اهل ورزش',
            ],
            [
                'language_id' => 4,
                'word' => 'storm',
                'meaning' => 'طوفان',
            ],
            [
                'language_id' => 4,
                'word' => 'strandwandeling',
                'meaning' => 'پیاده روی در ساحل',
            ],
            [
                'language_id' => 4,
                'word' => 'afrekenen',
                'meaning' => 'پرداختن',
            ],
            [
                'language_id' => 4,
                'word' => 'afspraak',
                'meaning' => 'قرار گذاشتن',
            ],
            [
                'language_id' => 4,
                'word' => 'alleen maar',
                'meaning' => 'تنها / فقط',
            ],
            [
                'language_id' => 4,
                'word' => 'bed and breakfast',
                'meaning' => 'پانسیون ایربی اند بی',
            ],
            [
                'language_id' => 4,
                'word' => 'bestellen',
                'meaning' => 'سفارش دادن',
            ],
            [
                'language_id' => 4,
                'word' => 'dik',
                'meaning' => 'فربه',
            ],
            [
                'language_id' => 4,
                'word' => 'doe maar',
                'meaning' => 'را به من بده',
            ],
            [
                'language_id' => 4,
                'word' => 'duitse',
                'meaning' => 'مرد / زن آلمانی',
            ],
            [
                'language_id' => 4,
                'word' => 'duitsland',
                'meaning' => 'آلمان',
            ],
            [
                'language_id' => 4,
                'word' => 'duur',
                'meaning' => 'گران',
            ],
            [
                'language_id' => 4,
                'word' => 'duvel',
                'meaning' => 'نوعی آبجو',
            ],
            [
                'language_id' => 4,
                'word' => 'een glaasje te veel op hebben',
                'meaning' => 'یک پیک بیشتر از حد سر کشیدن',
            ],
            [
                'language_id' => 4,
                'word' => 'eindelijk',
                'meaning' => 'بالاخره',
            ],
            [
                'language_id' => 4,
                'word' => 'eten',
                'meaning' => 'خوردن',
            ],
            [
                'language_id' => 4,
                'word' => 'fles',
                'meaning' => 'شیشه',
            ],
            [
                'language_id' => 4,
                'word' => 'geweldig',
                'meaning' => 'عالی',
            ],
            [
                'language_id' => 4,
                'word' => 'gezellig',
                'meaning' => 'باحال',
            ],
            [
                'language_id' => 4,
                'word' => 'hapje',
                'meaning' => 'اسنک',
            ],
            [
                'language_id' => 4,
                'word' => 'koop',
                'meaning' => 'خریدن',
            ],
            [
                'language_id' => 4,
                'word' => 'kwartiertje',
                'meaning' => 'یک ربع ساعت',
            ],
            [
                'language_id' => 4,
                'word' => 'luister',
                'meaning' => 'شنیدن',
            ],
            [
                'language_id' => 4,
                'word' => 'over',
                'meaning' => 'تا درباره ی',
            ],
            [
                'language_id' => 4,
                'word' => 'persoon',
                'meaning' => 'شخص',
            ],
            [
                'language_id' => 4,
                'word' => 'pintje',
                'meaning' => 'آبجوی کوچک',
            ],
            [
                'language_id' => 4,
                'word' => 'plan',
                'meaning' => 'نقشه',
            ],
            [
                'language_id' => 4,
                'word' => 'proost',
                'meaning' => 'به سلامتی',
            ],
            [
                'language_id' => 4,
                'word' => 'raam',
                'meaning' => 'پنجره',
            ],
            [
                'language_id' => 4,
                'word' => 'slapen',
                'meaning' => 'خوابیدن',
            ],
            [
                'language_id' => 4,
                'word' => 'spa rood',
                'meaning' => 'آب معدنی',
            ],
            [
                'language_id' => 4,
                'word' => 'taai',
                'meaning' => 'سفت',
            ],
            [
                'language_id' => 4,
                'word' => 'tafeltje',
                'meaning' => 'میز کوچک',
            ],
            [
                'language_id' => 4,
                'word' => 'tot uw dienst',
                'meaning' => 'آماده خدمت',
            ],
            [
                'language_id' => 4,
                'word' => 'trappist',
                'meaning' => 'نوعی آبجو',
            ],
            [
                'language_id' => 4,
                'word' => 'uur',
                'meaning' => 'ساعت',
            ],
            [
                'language_id' => 4,
                'word' => 'vlees',
                'meaning' => 'گوشت',
            ],
            [
                'language_id' => 4,
                'word' => 'vrij',
                'meaning' => 'آزاد',
            ],
            [
                'language_id' => 4,
                'word' => 'wacht',
                'meaning' => 'منتظر ماندن',
            ],
            [
                'language_id' => 4,
                'word' => 'wintje',
                'meaning' => 'شراب کوچک',
            ],
            [
                'language_id' => 4,
                'word' => 'wit',
                'meaning' => 'سفید',
            ],
            [
                'language_id' => 4,
                'word' => 'woonboot',
                'meaning' => 'خانه قایقی',
            ],
            [
                'language_id' => 4,
                'word' => 'plein',
                'meaning' => 'میدان',
            ],
            [
                'language_id' => 4,
                'word' => 'plek',
                'meaning' => 'جا / محل / مکان',
            ],

            [
                'language_id' => 4,
                'word' => 'schelde',
                'meaning' => 'رودخانه',
            ],
            [
                'language_id' => 4,
                'word' => 'stad',
                'meaning' => 'شهر',
            ],
            [
                'language_id' => 4,
                'word' => 'stadsgids',
                'meaning' => 'کتابجه',
            ],

            [
                'language_id' => 4,
                'word' => 'zout',
                'meaning' => 'شور',
            ],
            [
                'language_id' => 4,
                'word' => 'nodig hebben',
                'meaning' => 'نیاز داشتن',
            ],
            [
                'language_id' => 4,
                'word' => 'oeil',
                'meaning' => 'ای وای',
            ],
            [
                'language_id' => 4,
                'word' => 'opaatje',
                'meaning' => 'بابابزرگ',
            ],
            [
                'language_id' => 4,
                'word' => 'ouders',
                'meaning' => 'والدین',
            ],
            [
                'language_id' => 4,
                'word' => 'reist',
                'meaning' => 'سفر کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'schattig',
                'meaning' => 'شیرین',
            ],
            [
                'language_id' => 4,
                'word' => 'scheiden',
                'meaning' => 'جداشدن',
            ],
            [
                'language_id' => 4,
                'word' => 'schrijf',
                'meaning' => 'جداشدن',
            ],
            [
                'language_id' => 4,
                'word' => 'het spijt me',
                'meaning' => 'متاسفم',
            ],
            [
                'language_id' => 4,
                'word' => 'studie',
                'meaning' => 'تحصیل',
            ],
            [
                'language_id' => 4,
                'word' => 'stuur op',
                'meaning' => 'فرستادن',
            ],
            [
                'language_id' => 4,
                'word' => 'tweeling',
                'meaning' => 'دوقلو',
            ],
            [
                'language_id' => 4,
                'word' => 'vast',
                'meaning' => 'حتما',
            ],
            [
                'language_id' => 4,
                'word' => 'vriend',
                'meaning' => 'دوست',
            ],
            [
                'language_id' => 4,
                'word' => 'wanneer',
                'meaning' => 'چه وقت',
            ],
            [
                'language_id' => 4,
                'word' => 'zich',
                'meaning' => 'ضمیر انعکاسی',
            ],
            [
                'language_id' => 4,
                'word' => 'zit',
                'meaning' => 'نشستن',
            ],
            [
                'language_id' => 4,
                'word' => 'zo',
                'meaning' => 'این طور',
            ],
            [
                'language_id' => 4,
                'word' => 'antwoordt',
                'meaning' => 'پاسخ دادن',
            ],
            [
                'language_id' => 4,
                'word' => 'belt op',
                'meaning' => 'تلفن کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'bemoei je',
                'meaning' => 'دخالت کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'braaf',
                'meaning' => 'مهربان',
            ],
            [
                'language_id' => 4,
                'word' => 'contact',
                'meaning' => 'تماس',
            ],
            [
                'language_id' => 4,
                'word' => 'echtpaar',
                'meaning' => 'زن و شوهر',
            ],
            [
                'language_id' => 4,
                'word' => 'doe',
                'meaning' => 'انجام دادن',
            ],
            [
                'language_id' => 4,
                'word' => 'er',
                'meaning' => 'آنجا',
            ],
            [
                'language_id' => 4,
                'word' => 'erg',
                'meaning' => 'زیاد',
            ],
            [
                'language_id' => 4,
                'word' => 'eruitzien',
                'meaning' => 'به نظر رسیدن',
            ],
            [
                'language_id' => 4,
                'word' => 'fotootje',
                'meaning' => 'عکس کوچولو',
            ],
            [
                'language_id' => 4,
                'word' => 'fout',
                'meaning' => 'غلط',
            ],
            [
                'language_id' => 4,
                'word' => 'geluk',
                'meaning' => 'خوشبختی',
            ],
            [
                'language_id' => 4,
                'word' => 'gezin',
                'meaning' => 'خانواده',
            ],
            [
                'language_id' => 4,
                'word' => 'hoor',
                'meaning' => 'شنیدن',
            ],
            [
                'language_id' => 4,
                'word' => 'jammer',
                'meaning' => 'حیف',
            ],
            [
                'language_id' => 4,
                'word' => 'kleinzoon',
                'meaning' => 'نوه پسری',
            ],
            [
                'language_id' => 4,
                'word' => 'laat',
                'meaning' => 'دیر',
            ],
            [
                'language_id' => 4,
                'word' => 'lief',
                'meaning' => 'عزیز',
            ],
            [
                'language_id' => 4,
                'word' => 'meer',
                'meaning' => 'زیاد',
            ],
            [
                'language_id' => 4,
                'word' => 'mogen',
                'meaning' => 'اجازه داشتن',
            ],
            [
                'language_id' => 4,
                'word' => 'naar',
                'meaning' => 'نزد',
            ],
            [
                'language_id' => 4,
                'word' => 'niets',
                'meaning' => 'هیچ',
            ],
            [
                'language_id' => 4,
                'word' => 'grootvader',
                'meaning' => 'پدربزرگ',
            ],
            [
                'language_id' => 4,
                'word' => 'jarig zijn',
                'meaning' => 'تولد داشتن',
            ],
            [
                'language_id' => 4,
                'word' => 'aan het',
                'meaning' => 'اینجا',
            ],
            [
                'language_id' => 4,
                'word' => 'bellen',
                'meaning' => 'تلفن کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'best wel',
                'meaning' => 'تا حدی',
            ],
            [
                'language_id' => 4,
                'word' => 'betekent',
                'meaning' => 'معنادادن',
            ],
            [
                'language_id' => 4,
                'word' => 'bijvoorbeeld',
                'meaning' => 'به عنوان مثال',
            ],
            [
                'language_id' => 4,
                'word' => 'denkt',
                'meaning' => 'فکر کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'dat',
                'meaning' => 'که',
            ],
            [
                'language_id' => 4,
                'word' => 'doof',
                'meaning' => 'ناشنوا',
            ],
            [
                'language_id' => 4,
                'word' => 'diits',
                'meaning' => 'آلمانی',
            ],
            [
                'language_id' => 4,
                'word' => 'durven',
                'meaning' => 'جرات کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'enzovoort',
                'meaning' => 'غیره',
            ],
            [
                'language_id' => 4,
                'word' => 'fauteuil',
                'meaning' => 'صندلی',
            ],
            [
                'language_id' => 4,
                'word' => 'frankrijk',
                'meaning' => 'فرانسه',
            ],
            [
                'language_id' => 4,
                'word' => 'frans',
                'meaning' => 'فرانسوی',
            ],
            [
                'language_id' => 4,
                'word' => 'grapjas',
                'meaning' => 'بی مزه',
            ],
            [
                'language_id' => 4,
                'word' => 'knutselen',
                'meaning' => 'کاردستی درست کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'knuffelen',
                'meaning' => 'ناز و نوازش کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'moeilijk',
                'meaning' => 'دشوار',
            ],
            [
                'language_id' => 4,
                'word' => 'gemakkelijk',
                'meaning' => 'ساده',
            ],
            [
                'language_id' => 4,
                'word' => 'liever',
                'meaning' => 'بهتر',
            ],
            [
                'language_id' => 4,
                'word' => 'nederlands',
                'meaning' => 'زبان هلندی',
            ],
            [
                'language_id' => 4,
                'word' => 'punaise',
                'meaning' => 'پونز',
            ],
            [
                'language_id' => 4,
                'word' => 'leren',
                'meaning' => 'آموختن',
            ],
            [
                'language_id' => 4,
                'word' => 'leraar',
                'meaning' => 'آموزگار',
            ],
            [
                'language_id' => 4,
                'word' => 'of',
                'meaning' => 'یا',
            ],
            [
                'language_id' => 4,
                'word' => 'aan de beurt',
                'meaning' => 'نوبت',
            ],
            [
                'language_id' => 4,
                'word' => 'aanbieding',
                'meaning' => 'عرضه',
            ],
            [
                'language_id' => 4,
                'word' => 'afspreken',
                'meaning' => 'قرار گذاشتن',
            ],
            [
                'language_id' => 4,
                'word' => 'alleen',
                'meaning' => 'فقط',
            ],
            [
                'language_id' => 4,
                'word' => 'magazijn',
                'meaning_en' => 'warehouse',
            ],
            [
                'language_id' => 4,
                'word' => 'medewerker',
                'meaning_en' => 'worker',
            ],

            [
                'language_id' => 4,
                'word' => 'beertje',
                'meaning' => 'کمی',
            ],
            [
                'language_id' => 4,
                'word' => 'belegen',
                'meaning' => 'کمی مانده',
            ],
            [
                'language_id' => 4,
                'word' => 'betalen',
                'meaning' => 'پرداختن',
            ],
            [
                'language_id' => 4,
                'word' => 'boodschappenlijstje',
                'meaning' => 'لیست خرید',
            ],
            [
                'language_id' => 4,
                'word' => 'contant',
                'meaning' => 'نقد',
            ],
            [
                'language_id' => 4,
                'word' => 'deze',
                'meaning' => 'این',
            ],
            [
                'language_id' => 4,
                'word' => 'doet u maar',
                'meaning' => 'را به من بدهید',
            ],
            [
                'language_id' => 4,
                'word' => 'drop',
                'meaning' => 'آب نبات شیرین بیان',
            ],
            [
                'language_id' => 4,
                'word' => 'ga uw gang',
                'meaning' => 'هر طور میل شماست',
            ],
            [
                'language_id' => 4,
                'word' => 'genoeg',
                'meaning' => 'کافی',
            ],
            [
                'language_id' => 4,
                'word' => 'het maakt niet uit',
                'meaning' => 'فرقی نمی کند',
            ],
            [
                'language_id' => 4,
                'word' => 'half',
                'meaning' => 'نیم',
            ],
            [
                'language_id' => 4,
                'word' => 'hard',
                'meaning' => 'غلیظ',
            ],
            [
                'language_id' => 4,
                'word' => 'heerlijk',
                'meaning' => 'عالی',
            ],
            [
                'language_id' => 4,
                'word' => 'kan',
                'meaning' => 'توانستن',
            ],
            [
                'language_id' => 4,
                'word' => 'kost',
                'meaning' => 'قیمت داشتن',
            ],
            [
                'language_id' => 4,
                'word' => 'krijgt',
                'meaning' => 'دریافت کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'misschien',
                'meaning' => 'شاید',
            ],
            [
                'language_id' => 4,
                'word' => 'neefje',
                'meaning' => 'پسر برادر',
            ],
            [
                'language_id' => 4,
                'word' => 'klant',
                'meaning' => 'مشتری',
            ],
            [
                'language_id' => 4,
                'word' => 'nichtje',
                'meaning' => 'دختر خواهر',
            ],
            [
                'language_id' => 4,
                'word' => 'ons',
                'meaning' => 'صد گرم',
            ],
            [
                'language_id' => 4,
                'word' => 'pinnen',
                'meaning' => 'با کارت بانکی',
            ],
            [
                'language_id' => 4,
                'word' => 'plezier',
                'meaning' => 'خوشی',
            ],
            [
                'language_id' => 4,
                'word' => 'pond',
                'meaning' => 'پوند',
            ],
            [
                'language_id' => 4,
                'word' => 'proeft',
                'meaning' => 'امتحان کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'samen',
                'meaning' => 'جمعا',
            ],
            [
                'language_id' => 4,
                'word' => 'snoep',
                'meaning' => 'شیرینی',
            ],
            [
                'language_id' => 4,
                'word' => 'streek',
                'meaning' => 'منطقه',
            ],
            [
                'language_id' => 4,
                'word' => 'vandaag',
                'meaning' => 'امروز',
            ],
            [
                'language_id' => 4,
                'word' => 'vlaams',
                'meaning' => 'فلامانی',
            ],
            [
                'language_id' => 4,
                'word' => 'zuid-tirool',
                'meaning' => 'تیرول جنوبی',
            ],
            [
                'language_id' => 4,
                'word' => 'zuivelproduct',
                'meaning' => 'فراورده های لبنی',
            ],
            [
                'language_id' => 4,
                'word' => 'volgend',
                'meaning' => 'بعدی',
            ],
            [
                'language_id' => 4,
                'word' => 'terug',
                'meaning' => 'برگشت',
            ],
            [
                'language_id' => 4,
                'word' => 'kwark',
                'meaning' => 'کوارک',
            ],
            [
                'language_id' => 4,
                'word' => 'room',
                'meaning' => 'خامه',
            ],
            [
                'language_id' => 4,
                'word' => 'halfvolle melk',
                'meaning' => 'شیر کم چرب',
            ],
            [
                'language_id' => 4,
                'word' => 'de thee',
                'meaning_en' => 'the tea',
            ],
            [
                'language_id' => 4,
                'word' => 'het bier',
                'meaning_en' => 'the beer',
            ],
            [
                'language_id' => 4,
                'word' => 'de wijn',
                'meaning_en' => 'the wine',
            ],
            [
                'language_id' => 4,
                'word' => 'het water',
                'meaning_en' => 'the water',
            ],
            [
                'language_id' => 4,
                'word' => 'de aardappel',
                'meaning_en' => 'the potato',
            ],
            [
                'language_id' => 4,
                'word' => 'het vlees',
                'meaning_en' => 'the meat',
            ],
            [
                'language_id' => 4,
                'word' => 'de kip',
                'meaning_en' => 'the chicken',
            ],
            [
                'language_id' => 4,
                'word' => 'de friet',
                'meaning_en' => 'the french fries',
            ],
            [
                'language_id' => 4,
                'word' => 'de kroket',
                'meaning_en' => 'meat croquette',
            ],
            [
                'language_id' => 4,
                'word' => 'het snoep',
                'meaning_en' => 'the sweets',
            ],
            [
                'language_id' => 4,
                'word' => 'boerenkool',
                'meaning_en' => 'kale',
            ],
            [
                'language_id' => 4,
                'word' => 'deze',
                'meaning_en' => 'this',
            ],
            [
                'language_id' => 4,
                'word' => 'deze',
                'meaning_en' => 'this',
            ],
            [
                'language_id' => 4,
                'word' => 'verdienen',
                'meaning_en' => 'to earn',
            ],
            [
                'language_id' => 4,
                'word' => 'voorspeld',
                'meaning_en' => 'predicted',
            ],
            [
                'language_id' => 4,
                'word' => 'oplevert',
                'meaning_en' => 'yields / delivers',
            ],
            [
                'language_id' => 4,
                'word' => 'wordt',
                'meaning_en' => 'becomes / is',
            ],
            [
                'language_id' => 4,
                'word' => 'daarmee',
                'meaning_en' => 'with that / thereby',
            ],
            [
                'language_id' => 4,
                'word' => 'zou',
                'meaning_en' => 'would',
            ],
            [
                'language_id' => 4,
                'word' => 'winstgevend',
                'meaning_en' => 'profitable',
            ],
            [
                'language_id' => 4,
                'word' => 'mogelijk',
                'meaning_en' => 'possible',
            ],
            [
                'language_id' => 4,
                'word' => 'mannen badkamer',
                'meaning_en' => 'men’s bathroom',
            ],
            [
                'language_id' => 4,
                'word' => 'behang',
                'meaning_en' => 'wallpaper',
            ],
            [
                'language_id' => 4,
                'word' => 'zelfs',
                'meaning_en' => 'even',
            ],
            [
                'language_id' => 4,
                'word' => 'tuin',
                'meaning_en' => 'garden',
            ],
            [
                'language_id' => 4,
                'word' => 'weer',
                'meaning_en' => 'again / weather',
            ],
            [
                'language_id' => 4,
                'word' => 'zitten',
                'meaning_en' => 'to sit',
            ],
            [
                'language_id' => 4,
                'word' => 'de mensen',
                'meaning_en' => 'the people',
            ],
            [
                'language_id' => 4,
                'word' => 'betaal',
                'meaning_en' => 'pay',
            ],
            [
                'language_id' => 4,
                'word' => 'zo een',
                'meaning_en' => 'such a',
            ],
            [
                'language_id' => 4,
                'word' => 'tijdens',
                'meaning_en' => 'during',
            ],
            [
                'language_id' => 4,
                'word' => 'openingswedstrijd',
                'meaning_en' => 'opening match',
            ],
            [
                'language_id' => 4,
                'word' => 'zit',
                'meaning_en' => 'sit / is sitting',
            ],
            [
                'language_id' => 4,
                'word' => 'dicht',
                'meaning_en' => 'closed / near',
            ],
            [
                'language_id' => 4,
                'word' => 'stadion',
                'meaning_en' => 'stadium',
            ],
            [
                'language_id' => 4,
                'word' => 'letterlijk',
                'meaning_en' => 'literally',
            ],
            [
                'language_id' => 4,
                'word' => 'loopt',
                'meaning_en' => 'walks / is walking',
            ],
            [
                'language_id' => 4,
                'word' => 'voordeur',
                'meaning_en' => 'front door',
            ],
            [
                'language_id' => 4,
                'word' => 'uit',
                'meaning_en' => 'out',
            ],
            [
                'language_id' => 4,
                'word' => 'steekt',
                'meaning_en' => 'sticks / points',
            ],
            [
                'language_id' => 4,
                'word' => 'verwacht',
                'meaning_en' => 'expect / expected',
            ],
            [
                'language_id' => 4,
                'word' => 'steden',
                'meaning_en' => 'cities',
            ],
            [
                'language_id' => 4,
                'word' => 'zullen',
                'meaning_en' => 'will / shall',
            ],
            [
                'language_id' => 4,
                'word' => 'bezoeken',
                'meaning_en' => 'to visit',
            ],
            [
                'language_id' => 4,
                'word' => 'hopen',
                'meaning_en' => 'hope',
            ],
            [
                'language_id' => 4,
                'word' => 'daar',
                'meaning_en' => 'there',
            ],
            [
                'language_id' => 4,
                'word' => 'flink',
                'meaning_en' => 'big / considerable / strong',
            ],
            [
                'language_id' => 4,
                'word' => 'aan',
                'meaning_en' => 'on / at / to',
            ],
            [
                'language_id' => 4,
                'word' => 'die',
                'meaning_en' => 'that',
            ],
            [
                'language_id' => 4,
                'word' => 'waar',
                'meaning_en' => 'where',
            ],
            [
                'language_id' => 4,
                'word' => 'daar',
                'meaning_en' => 'there',
            ],
            [
                'language_id' => 4,
                'word' => 'wanneer',
                'meaning_en' => 'when',
            ],
            [
                'language_id' => 4,
                'word' => 'dan',
                'meaning_en' => 'the vegetables',
            ],
            [
                'language_id' => 4,
                'word' => 'een pakje boter',
                'meaning' => 'یک بسته کره',
            ],
            [
                'language_id' => 4,
                'word' => 'een fles melk',
                'meaning' => 'یک شیشه شیر',
            ],
            [
                'language_id' => 4,
                'word' => 'ham',
                'meaning' => 'ژامبون',
            ],
            [
                'language_id' => 4,
                'word' => 'ook',
                'meaning' => 'همچنین',
            ],
            [
                'language_id' => 4,
                'word' => 'nooit',
                'meaning' => 'هرگز',
            ],
            [
                'language_id' => 4,
                'word' => 'mensen',
                'meaning' => 'مردم',
            ],
            [
                'language_id' => 4,
                'word' => 'neem',
                'meaning' => 'برداشتن',
            ],
            [
                'language_id' => 4,
                'word' => 'nog',
                'meaning' => 'هنوز',
            ],
            [
                'language_id' => 4,
                'word' => 'ongeluk',
                'meaning' => 'سانحه',
            ],
            [
                'language_id' => 4,
                'word' => 'opvolger',
                'meaning' => 'جانشین',
            ],
            [
                'language_id' => 4,
                'word' => 'opvolgster',
                'meaning' => 'جانشین زن',
            ],
            [
                'language_id' => 4,
                'word' => 'soms',
                'meaning' => 'گاهی',
            ],
            [
                'language_id' => 4,
                'word' => 'stom',
                'meaning' => 'احمق',
            ],
            [
                'language_id' => 4,
                'word' => 'toch',
                'meaning' => 'چرا (پاسخ مثبت به پرسش منفی)',
            ],
            [
                'language_id' => 4,
                'word' => 'veel',
                'meaning' => 'زیاد',
            ],
            [
                'language_id' => 4,
                'word' => 'vind',
                'meaning' => 'یافتن',
            ],
            [
                'language_id' => 4,
                'word' => 'volgens',
                'meaning' => 'بلند',
            ],
            [
                'language_id' => 4,
                'word' => 'voor',
                'meaning' => 'قبل',
            ],
            [
                'language_id' => 4,
                'word' => 'vragen',
                'meaning' => 'پرسیدن',
            ],
            [
                'language_id' => 4,
                'word' => 'waarom',
                'meaning' => 'پرسیدن',
            ],
            [
                'language_id' => 4,
                'word' => 'vragenuur',
                'meaning_en' => 'question hour',
            ],
            [
                'language_id' => 4,
                'word' => 'hoogtepunt',
                'meaning_en' => 'highlight / peak',
            ],
            [
                'language_id' => 4,
                'word' => 'basisschool',
                'meaning_en' => 'primary school',
            ],
            [
                'language_id' => 4,
                'word' => 'slimme',
                'meaning_en' => 'smart / clever',
            ],
            [
                'language_id' => 4,
                'word' => 'beantwoorden',
                'meaning_en' => 'to answer',
            ],
            [
                'language_id' => 4,
                'word' => 'vraag',
                'meaning_en' => 'question',
            ],
            [
                'language_id' => 4,
                'word' => 'duidelijk',
                'meaning_en' => 'clear',
            ],
            [
                'language_id' => 4,
                'word' => 'wordt',
                'meaning_en' => 'becomes / is',
            ],
            [
                'language_id' => 4,
                'word' => 'volgens',
                'meaning_en' => 'according to',
            ],
            [
                'language_id' => 4,
                'word' => 'tussen',
                'meaning_en' => 'between',
            ],
            [
                'language_id' => 4,
                'word' => 'onderhandeld',
                'meaning_en' => 'negotiated',
            ],
            [
                'language_id' => 4,
                'word' => 'voorstel',
                'meaning_en' => 'proposal / suggestion',
            ],
            [
                'language_id' => 4,
                'word' => 'waarmee',
                'meaning_en' => 'with which',
            ],
            [
                'language_id' => 4,
                'word' => 'eindigen',
                'meaning_en' => 'to end',
            ],
            [
                'language_id' => 4,
                'word' => 'gebaseerd',
                'meaning_en' => 'based',
            ],
            [
                'language_id' => 4,
                'word' => 'gebruikt',
                'meaning_en' => 'used',
            ],
            [
                'language_id' => 4,
                'word' => 'uiteindelijk',
                'meaning_en' => 'finally / eventually',
            ],
            [
                'language_id' => 4,
                'word' => 'kernwapen',
                'meaning_en' => 'nuclear weapon',
            ],
            [
                'language_id' => 4,
                'word' => 'gestolen',
                'meaning_en' => 'stolen',
            ],
            [
                'language_id' => 4,
                'word' => 'verrijkt',
                'meaning_en' => 'enriched',
            ],
            [
                'language_id' => 4,
                'word' => 'verplaatst',
                'meaning_en' => 'moved / relocated',
            ],
            [
                'language_id' => 4,
                'word' => 'daarvoor',
                'meaning_en' => 'for that / before that',
            ],
            [
                'language_id' => 4,
                'word' => 'bepaalde',
                'meaning_en' => 'certain / specific',
            ],
            [
                'language_id' => 4,
                'word' => 'tagen',
                'meaning_en' => 'days (archaic / poetic)',
            ],
            [
                'language_id' => 4,
                'word' => 'eindresultaat',
                'meaning_en' => 'final result',
            ],
            [
                'language_id' => 4,
                'word' => 'ondertussen',
                'meaning_en' => 'meanwhile',
            ],
            [
                'language_id' => 4,
                'word' => 'publiekerlijk',
                'meaning_en' => 'publicly',
            ],
            [
                'language_id' => 4,
                'word' => 'ontkent',
                'meaning_en' => 'denies',
            ],
            [
                'language_id' => 4,
                'word' => 'onderhandeling',
                'meaning_en' => 'negotiation',
            ],
            [
                'language_id' => 4,
                'word' => 'stiekem',
                'meaning_en' => 'secretly / sneakily',
            ],
            [
                'language_id' => 4,
                'word' => 'toch',
                'meaning_en' => 'yet / still / however',
            ],
            [
                'language_id' => 4,
                'word' => 'blijdschap',
                'meaning_en' => 'happiness / joy',
            ],
            [
                'language_id' => 4,
                'word' => 'uitspraak',
                'meaning_en' => 'statement / verdict',
            ],
            [
                'language_id' => 4,
                'word' => 'gerechtsgebouw',
                'meaning_en' => 'courthouse',
            ],
            [
                'language_id' => 4,
                'word' => 'zelfmoord',
                'meaning_en' => 'suicide',
            ],
            [
                'language_id' => 4,
                'word' => 'pleegden',
                'meaning_en' => 'fostered / cared for',
            ],
            [
                'language_id' => 4,
                'word' => 'socialemediagebruik',
                'meaning_en' => 'social media usage',
            ],
            [
                'language_id' => 4,
                'word' => 'bepalend',
                'meaning_en' => 'decisive / determining',
            ],
            [
                'language_id' => 4,
                'word' => 'zaak',
                'meaning_en' => 'case / matter',
            ],
            [
                'language_id' => 4,
                'word' => 'draait',
                'meaning_en' => 'turns / revolves',
            ],
            [
                'language_id' => 4,
                'word' => 'werd',
                'meaning_en' => 'became / was',
            ],
            [
                'language_id' => 4,
                'word' => 'aangespannen',
                'meaning_en' => 'strained / filed (a case)',
            ],
            [
                'language_id' => 4,
                'word' => 'anoniem',
                'meaning_en' => 'anonymous',
            ],
            [
                'language_id' => 4,
                'word' => 'blijf',
                'meaning_en' => 'stay / remain',
            ],
            [
                'language_id' => 4,
                'word' => 'verslaafd',
                'meaning_en' => 'addicted',
            ],
            [
                'language_id' => 4,
                'word' => 'raakte',
                'meaning_en' => 'touched / got involved',
            ],
            [
                'language_id' => 4,
                'word' => 'krijgt',
                'meaning_en' => 'receives / gets',
            ],
            [
                'language_id' => 4,
                'word' => 'klachten',
                'meaning_en' => 'complaints',
            ],
            [
                'language_id' => 4,
                'word' => 'reageert',
                'meaning_en' => 'reacts / responds',
            ],
            [
                'language_id' => 4,
                'word' => 'wettelijke',
                'meaning_en' => 'legal / statutory',
            ],
            [
                'language_id' => 4,
                'word' => 'veranderingen',
                'meaning_en' => 'changes / modifications',
            ],
            [
                'language_id' => 4,
                'word' => 'zoals',
                'meaning_en' => 'such as / like',
            ],
            [
                'language_id' => 4,
                'word' => 'lopen',
                'meaning_en' => 'to walk / to run (figuratively: to take place)',
            ],
            [
                'language_id' => 4,
                'word' => 'duizenden',
                'meaning_en' => 'thousands',
            ],
            [
                'language_id' => 4,
                'word' => 'kans',
                'meaning_en' => 'chance / opportunity',
            ],
            [
                'language_id' => 4,
                'word' => 'bedrijven',
                'meaning_en' => 'companies / businesses',
            ],
            [
                'language_id' => 4,
                'word' => 'verliezen',
                'meaning_en' => 'to lose',
            ],
            [
                'language_id' => 4,
                'word' => 'zomaar',
                'meaning_en' => 'just like that / randomly',
            ],
            [
                'language_id' => 4,
                'word' => 'ertoe',
                'meaning_en' => 'to it / to that',
            ],
            [
                'language_id' => 4,
                'word' => 'bewegen',
                'meaning_en' => 'to move',
            ],
            [
                'language_id' => 1,
                'word' => 'deranged',
                'meaning_en' => 'uncontrolled',
            ],
            [
                'language_id' => 1,
                'word' => 'equity',
                'meaning_en' => 'the quality of being fair and just',
            ],
            [
                'language_id' => 4,
                'word' => 'verslavend',
                'meaning_en' => 'addictive',
            ],
            [
                'language_id' => 4,
                'word' => 'te maken',
                'meaning_en' => 'to do / to deal with',
            ],
            [
                'language_id' => 4,
                'word' => 'uitgelaten',
                'meaning_en' => 'expressed / let out',
            ],
            [
                'language_id' => 4,
                'word' => 'feit',
                'meaning_en' => 'fact',
            ],
            [
                'language_id' => 4,
                'word' => 'onderhandelen',
                'meaning_en' => 'to negotiate',
            ],
            [
                'language_id' => 4,
                'word' => 'hemd',
                'meaning_en' => 'shirt',
            ],
            [
                'language_id' => 4,
                'word' => 'zeilfabriek',
                'meaning' => 'کارخانه بادبان سازی',
            ],
            [
                'language_id' => 4,
                'word' => 'zelfs',
                'meaning' => 'حتی',
            ],
            [
                'language_id' => 4,
                'word' => 'ziekenhuis',
                'meaning' => 'بیمارستان',
            ],
            [
                'language_id' => 4,
                'word' => 'zoekt',
                'meaning' => 'جستجو کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'aanbieden',
                'meaning' => 'تعارف کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'afdeling',
                'meaning' => 'بخش',
            ],
            [
                'language_id' => 4,
                'word' => 'al',
                'meaning' => 'هنوز',
            ],
            [
                'language_id' => 4,
                'word' => 'altijd',
                'meaning' => 'همیشه',
            ],
            [
                'language_id' => 4,
                'word' => 'ambacht',
                'meaning' => 'پیشه وری',
            ],
            [
                'language_id' => 4,
                'word' => 'arts',
                'meaning' => 'پزشک',
            ],
            [
                'language_id' => 4,
                'word' => 'baas',
                'meaning' => 'رییس',
            ],
            [
                'language_id' => 4,
                'word' => 'bazin',
                'meaning' => 'رییس زن',
            ],
            [
                'language_id' => 4,
                'word' => 'bang',
                'meaning' => 'ترسیدن',
            ],
            [
                'language_id' => 4,
                'word' => 'bang zijn',
                'meaning' => 'ترسیدن از',
            ],
            [
                'language_id' => 4,
                'word' => 'bedrijf',
                'meaning' => 'شرکت',
            ],
            [
                'language_id' => 4,
                'word' => 'begrijp',
                'meaning' => 'فهمیدن',
            ],
            [
                'language_id' => 4,
                'word' => 'beter',
                'meaning' => 'بهتر',
            ],
            [
                'language_id' => 4,
                'word' => 'biertje',
                'meaning' => 'آبجوی کوچک',
            ],
            [
                'language_id' => 4,
                'word' => 'boekhouder',
                'meaning' => 'حسابدار',
            ],
            [
                'language_id' => 4,
                'word' => 'boekhoudster',
                'meaning' => 'حسابدار زن',
            ],
            [
                'language_id' => 4,
                'word' => 'biertje',
                'meaning' => 'آبجوی کوچک',
            ],
            [
                'language_id' => 4,
                'word' => 'collega',
                'meaning' => 'همکار',
            ],
            [
                'language_id' => 4,
                'word' => 'dan',
                'meaning' => 'در اینصورت',
            ],
            [
                'language_id' => 4,
                'word' => 'toen',
                'meaning_en' => 'then',
            ],
            [
                'language_id' => 4,
                'word' => 'terwijl',
                'meaning_en' => 'while',
            ],
            [
                'language_id' => 4,
                'word' => 'zo',
                'meaning_en' => 'like this',
            ],
            [
                'language_id' => 4,
                'word' => 'hoeveel',
                'meaning_en' => 'how much',
            ],
            [
                'language_id' => 4,
                'word' => 'de bloem',
                'meaning_en' => 'the flower',
            ],
            [
                'language_id' => 4,
                'word' => 'waarom',
                'meaning_en' => 'why',
            ],
            [
                'language_id' => 4,
                'word' => 'daarom',
                'meaning_en' => 'thats why',
            ],
            [
                'language_id' => 4,
                'word' => 'behalve',
                'meaning_en' => 'except',
            ],
            [
                'language_id' => 4,
                'word' => 'want',
                'meaning_en' => 'because',
            ],
            [
                'language_id' => 4,
                'word' => 'omdat',
                'meaning_en' => 'because',
            ],
            [
                'language_id' => 4,
                'word' => 'maar',
                'meaning_en' => 'but',
            ],
            [
                'language_id' => 4,
                'word' => 'groenten',
                'meaning_en' => 'the vegetables',
            ],
            [
                'language_id' => 4,
                'word' => 'fantastisch',
                'meaning' => 'عالی',
            ],
            [
                'language_id' => 4,
                'word' => 'geen',
                'meaning' => 'علامت منفی نامعین',
            ],
            [
                'language_id' => 4,
                'word' => 'ineens',
                'meaning' => 'ناگهان',
            ],
            [
                'language_id' => 4,
                'word' => 'intussen',
                'meaning' => 'در این فاصله',
            ],
            [
                'language_id' => 4,
                'word' => 'jaar',
                'meaning' => 'سال',
            ],
            [
                'language_id' => 4,
                'word' => 'jong',
                'meaning' => 'جوان',
            ],
            [
                'language_id' => 4,
                'word' => 'kent',
                'meaning' => 'شناختن',
            ],
            [
                'language_id' => 4,
                'word' => 'dat klopt',
                'meaning' => 'درست است',
            ],
            [
                'language_id' => 4,
                'word' => 'meestal',
                'meaning' => 'اغلب',
            ],
            [
                'language_id' => 4,
                'word' => 'stapel',
                'meaning' => 'تلنبار',
            ],
            [
                'language_id' => 4,
                'word' => 'station',
                'meaning' => 'ایستگاه راه آهن',
            ],
            [
                'language_id' => 4,
                'word' => 'stel voor',
                'meaning' => 'پیشنهاد کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'straatjes',
                'meaning' => 'خیابان های کوچک',
            ],
            [
                'language_id' => 4,
                'word' => 'tentoonstelling',
                'meaning' => 'نمایشگاه',
            ],
            [
                'language_id' => 4,
                'word' => 'tip',
                'meaning' => 'اینجا / توصیه / راهنمایی',
            ],
            [
                'language_id' => 4,
                'word' => 'toevallig',
                'meaning' => 'اتفاقی',
            ],
            [
                'language_id' => 4,
                'word' => 'uitkrant',
                'meaning' => 'تقویم رویدادهای فرهنگی هنری',
            ],
            [
                'language_id' => 4,
                'word' => 'binnen',
                'meaning' => 'درون',
            ],
            [
                'language_id' => 4,
                'word' => 'buiten',
                'meaning' => 'بیرون',
            ],
            [
                'language_id' => 4,
                'word' => 'vergeet',
                'meaning' => 'فراموش کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'verklap',
                'meaning' => 'لو دادن',
            ],
            [
                'language_id' => 4,
                'word' => 'vertrek',
                'meaning' => 'حرکت کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'wandelen',
                'meaning' => 'گردش کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'winkelen',
                'meaning' => 'خرید کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'bezoeken',
                'meaning' => 'دیدار کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'buurt',
                'meaning' => 'کوی محله',
            ],
            [
                'language_id' => 4,
                'word' => 'evenement',
                'meaning' => 'رویداد',
            ],
            [
                'language_id' => 4,
                'word' => 'dat geeft niet',
                'meaning' => 'مهم نیست',
            ],
            [
                'language_id' => 4,
                'word' => 'diamantbeurs',
                'meaning' => 'بورس الماس',
            ],
            [
                'language_id' => 4,
                'word' => 'dienst voor toerisme',
                'meaning' => 'اداره اطلاعات جهانگردی',
            ],
            [
                'language_id' => 4,
                'word' => 'ga mee',
                'meaning' => 'همراه رفتن',
            ],
            [
                'language_id' => 4,
                'word' => 'halen',
                'meaning' => 'به دست آوردن',
            ],
            [
                'language_id' => 4,
                'word' => 'hoge',
                'meaning' => 'بلندی',
            ],
            [
                'language_id' => 4,
                'word' => 'joods',
                'meaning' => 'یهودی',
            ],
            [
                'language_id' => 4,
                'word' => 'kaai',
                'meaning' => 'اسکله',
            ],
            [
                'language_id' => 4,
                'word' => 'de kaas',
                'meaning_en' => 'the cheese',
            ],
            [
                'language_id' => 4,
                'word' => 'de hagelslag',
                'meaning_en' => 'the chocolate sprinkles',
            ],
            [
                'language_id' => 4,
                'word' => 'de pindakaas',
                'meaning_en' => 'the peanut butter',
            ],
            [
                'language_id' => 4,
                'word' => 'kater',
                'meaning' => 'خماری',
            ],
            [
                'language_id' => 4,
                'word' => 'koosjer',
                'meaning' => 'کوشر',
            ],
            [
                'language_id' => 4,
                'word' => 'langs',
                'meaning' => 'در امتداد',
            ],
            [
                'language_id' => 4,
                'word' => 'lezen',
                'meaning' => 'خواندن',
            ],
            [
                'language_id' => 4,
                'word' => 'markt',
                'meaning' => 'بازار',
            ],
            [
                'language_id' => 4,
                'word' => 'morgen',
                'meaning' => 'فردا',
            ],
            [
                'language_id' => 4,
                'word' => 'museum',
                'meaning' => 'موزه',
            ],
            [
                'language_id' => 4,
                'word' => 'plattegrond',
                'meaning' => 'نقشه',
            ],
            [
                'language_id' => 4,
                'word' => 'ontdek',
                'meaning' => 'کشف کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'mijn',
                'meaning' => 'مال من',
            ],
            [
                'language_id' => 4,
                'word' => 'moet',
                'meaning' => 'مجبور بودن',
            ],
            [
                'language_id' => 4,
                'word' => 'nee',
                'meaning' => 'نه',
            ],
            [
                'language_id' => 4,
                'word' => 'niet',
                'meaning' => 'علامت منفی',
            ],
            [
                'language_id' => 4,
                'word' => 'net',
                'meaning' => 'همین حالا',
            ],
            [
                'language_id' => 4,
                'word' => 'nou',
                'meaning' => 'اینجا',
            ],
            [
                'language_id' => 4,
                'word' => 'nu',
                'meaning' => 'حالا',
            ],
            [
                'language_id' => 4,
                'word' => 'op',
                'meaning' => 'روی',
            ],
            [
                'language_id' => 4,
                'word' => 'oud',
                'meaning' => 'پیر',
            ],
            [
                'language_id' => 4,
                'word' => 'staat',
                'meaning' => 'قرار داشتن',
            ],
            [
                'language_id' => 4,
                'word' => 'straks',
                'meaning' => 'به زودی',
            ],
            [
                'language_id' => 4,
                'word' => 'studeert',
                'meaning' => 'تحصیل',
            ],
            [
                'language_id' => 4,
                'word' => 'terras',
                'meaning' => 'تراس',
            ],
            [
                'language_id' => 4,
                'word' => 'tot',
                'meaning' => 'تا',
            ],
            [
                'language_id' => 4,
                'word' => 'uit',
                'meaning' => 'از',
            ],
            [
                'language_id' => 4,
                'word' => 'uitstekend',
                'meaning' => 'عالی',
            ],
            [
                'language_id' => 4,
                'word' => 'uw',
                'meaning' => 'مال شما',
            ],
            [
                'language_id' => 4,
                'word' => 'vader',
                'meaning' => 'پدر',
            ],
            [
                'language_id' => 4,
                'word' => 'vakantie',
                'meaning' => 'تعطیلات',
            ],
            [
                'language_id' => 4,
                'word' => 'van',
                'meaning' => 'از',
            ],
            [
                'language_id' => 4,
                'word' => 'voel',
                'meaning' => 'احساس کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'voorstellen',
                'meaning' => 'معرفی کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'waar',
                'meaning' => 'کجا',
            ],
            [
                'language_id' => 4,
                'word' => 'waarvandaan',
                'meaning' => 'از کجا',
            ],
            [
                'language_id' => 4,
                'word' => 'weer',
                'meaning' => 'دوباره',
            ],
            [
                'language_id' => 4,
                'word' => 'werk',
                'meaning' => 'کار کردن',
            ],
            [
                'language_id' => 4,
                'word' => 'wilt',
                'meaning' => 'مایل بودن',
            ],
            [
                'language_id' => 4,
                'word' => 'woont',
                'meaning' => 'سکونت داشتن',
            ],
            [
                'language_id' => 4,
                'word' => 'word',
                'meaning' => 'شدن',
            ],
            [
                'language_id' => 4,
                'word' => 'zeg',
                'meaning' => 'گفتن',
            ],
            [
                'language_id' => 4,
                'word' => 'zien',
                'meaning' => 'دیدن',
            ],
            [
                'language_id' => 4,
                'word' => 'zijn',
                'meaning' => 'بودن',
            ],
            [
                'language_id' => 4,
                'word' => 'aangenaam',
                'meaning' => 'خوشوقتم',
            ],
            [
                'language_id' => 4,
                'word' => 'buiten',
                'meaning' => 'بیرون',
            ],
            [
                'language_id' => 4,
                'word' => 'centrum',
                'meaning' => 'مرکز',
            ],
            [
                'language_id' => 4,
                'word' => 'champagne',
                'meaning' => 'شامپاین',
            ],
            [
                'language_id' => 4,
                'word' => 'daar',
                'meaning' => 'آنجا',
            ],
            [
                'language_id' => 4,
                'word' => 'dank je',
                'meaning' => 'سپاسگزارم',
            ],
            [
                'language_id' => 4,
                'word' => 'dochter',
                'meaning' => 'دختر',
            ],
            [
                'language_id' => 4,
                'word' => 'drinken',
                'meaning' => 'آشامیدن',
            ],
            [
                'language_id' => 4,
                'word' => 'een',
                'meaning' => 'یک',
            ],
            [
                'language_id' => 4,
                'word' => 'elkaar zien',
                'meaning' => 'یکدیگر رادیدن',
            ],
            [
                'language_id' => 4,
                'word' => 'en',
                'meaning' => 'و',
            ],
            [
                'language_id' => 4,
                'word' => 'even',
                'meaning' => 'دفعه',
            ],
            [
                'language_id' => 4,
                'word' => 'flink',
                'meaning' => 'زرنگ',
            ],
            [
                'language_id' => 4,
                'word' => 'gaat',
                'meaning' => 'رفتن',
            ],
            [
                'language_id' => 4,
                'word' => 'glaasje',
                'meaning' => 'پیاله',
            ],
            [
                'language_id' => 4,
                'word' => 'goed',
                'meaning' => 'خوب',
            ],
            [
                'language_id' => 4,
                'word' => 'graag',
                'meaning' => 'با میل',
            ],
            [
                'language_id' => 4,
                'word' => 'iets',
                'meaning' => 'کمی',
            ],
            [
                'language_id' => 4,
                'word' => 'in',
                'meaning' => 'در',
            ],
            [
                'language_id' => 4,
                'word' => 'kantoor',
                'meaning' => 'دفتر',
            ],
            [
                'language_id' => 4,
                'word' => 'kelner',
                'meaning' => 'گارسون',
            ],
            [
                'language_id' => 4,
                'word' => 'kijk',
                'meaning' => 'دیدن',
            ],
            [
                'language_id' => 4,
                'word' => 'kinderen',
                'meaning' => 'فرزندان',
            ],
            [
                'language_id' => 4,
                'word' => 'komt',
                'meaning' => 'آمدن',
            ],
            [
                'language_id' => 4,
                'word' => 'lekker',
                'meaning' => 'لذیذ',
            ],
            [
                'language_id' => 4,
                'word' => 'leuk',
                'meaning' => 'عالی',
            ],
            [
                'language_id' => 4,
                'word' => 'maar',
                'meaning' => 'اما',
            ],
            [
                'language_id' => 4,
                'word' => 'mogen',
                'meaning' => 'اجازه داشتن',
            ],
            [
                'language_id' => 4,
                'word' => 'meneer',
                'meaning' => 'آقا',
            ],
            [
                'language_id' => 4,
                'word' => 'mevrouw',
                'meaning' => 'خانم',
            ],
            [
                'language_id' => 4,
                'word' => 'met',
                'meaning' => 'با',
            ],
            [
                'language_id' => 1,
                'word' => 'vocational',
                'meaning_en' => 'relating to an occupation or employment',
            ],
            [
                'language_id' => 1,
                'word' => 'weeder',
                'meaning' => 'زمین کار',
            ],
            [
                'language_id' => 1,
                'word' => 'treason',
                'meaning' => 'خیانت ملی',
            ],
            [
                'language_id' => 1,
                'word' => 'shreds',
                'meaning' => 'تکه ها',
            ],
            [
                'language_id' => 1,
                'word' => 'severe',
                'meaning' => 'شدید',
            ],
            [
                'language_id' => 1,
                'word' => 'arsenal',
                'meaning_en' => 'a collection of weapons and military equipment.',
            ],
            [
                'language_id' => 1,
                'word' => 'meadow',
                'meaning' => 'چمنزار',
            ],
            [
                'language_id' => 1,
                'word' => 'Contraction',
                'meaning' => 'درد زایمان',
            ],
            [
                'language_id' => 1,
                'word' => 'cradle',
                'meaning_en' => 'hold gently and protectively.',
            ],
            [
                'language_id' => 1,
                'word' => 'perpetuate',
                'meaning_en' => 'make (something) continue indefinitely.',
            ],
            [
                'language_id' => 1,
                'word' => 'shredded',
                'meaning_en' => 'torn or cut into shreds.',
            ],
            [
                'language_id' => 1,
                'word' => 'bob',
                'meaning_en' => 'make a quick, short movement up and down.',
            ],
            [
                'language_id' => 1,
                'word' => 'spare',
                'meaning_en' => 'give (something of which one has enough) to (someone)',
            ],
            [
                'language_id' => 1,
                'word' => 'escalation',
                'meaning_en' => 'increase in the intensity or seriousness of something bad such as conflict or tension; intensification.',
            ],
            [
                'language_id' => 1,
                'word' => 'spinal cord',
                'meaning_en' => 'it runs from your brain to your lower back',
            ],
            [
                'language_id' => 1,
                'word' => 'beseach',
                'meaning_en' => 'ask (someone) urgently and fervently to do something; implore; entreat.',
            ],
            [
                'language_id' => 1,
                'word' => 'forfeit',
                'meaning_en' => 'lose or be deprived of (property or a right or privilege) as a penalty for wrongdoing.',
            ],
            [
                'language_id' => 1,
                'word' => 'prosperity',
                'meaning_en' => 'the state of being prosperous.',
            ],
            [
                'language_id' => 1,
                'word' => 'chapel',
                'meaning_en' => 'a small building or room used for Christian worship in a school, prison, hospital, or large private house.',
            ],
            [
                'language_id' => 1,
                'word' => 'overrun',
                'meaning_en' => 'being populated in huge numbers or occupied in some way',
            ],
            [
                'language_id' => 1,
                'word' => 'constitution',
                'meaning' => 'قانون اساسی',
            ],
            [
                'language_id' => 1,
                'word' => 'dumpy',
                'meaning_en' => 'short and fat',
            ],
            [
                'language_id' => 1,
                'word' => 'labyrinth',
                'meaning' => 'هزارتو',
            ],
            [
                'language_id' => 1,
                'word' => 'constitutionally',
                'meaning_en' => 'in a way that is in accordance with a political constitution.',
            ],
            [
                'language_id' => 1,
                'word' => 'authoritarianism',
                'meaning_en' => 'a form of government characterized by the concentration of power in a leader or elite group not constitutionally accountable to the public',
            ],
            [
                'language_id' => 1,
                'word' => 'rebuff',
                'meaning_en' => 'reject (someone or something) in an abrupt or ungracious manner.',
            ],
            [
                'language_id' => 1,
                'word' => 'utterance',
                'meaning_en' => 'a spoken word, statement, or vocal sound.',
            ],
            [
                'language_id' => 1,
                'word' => 'hereby',
                'meaning_en' => 'as a result of this document or utterance.',
            ],
            [
                'language_id' => 1,
                'word' => 'countrywoman',
                'meaning_en' => 'a woman from the same country as someone else.',
            ],
            [
                'language_id' => 1,
                'word' => 'scrutiny',
                'meaning_en' => 'critical observation or examination.',
            ],
            [
                'language_id' => 1,
                'word' => 'spotlight',
                'meaning_en' => 'a lamp projecting a narrow, intense beam of light directly on to a place or person, especially a performer on stage.',
            ],
            [
                'language_id' => 1,
                'word' => 'comparable',
                'meaning_en' => 'able to be linked to another',
            ],
            [
                'language_id' => 1,
                'word' => 'wield',
                'meaning_en' => 'hold and use',
            ],
            [
                'language_id' => 1,
                'word' => 'stalemate',
                'meaning_en' => 'bring or cause to reach stalemate',
            ],
            [
                'language_id' => 1,
                'word' => 'underway',
                'meaning_en' => 'having started and in progress',
            ],
            [
                'language_id' => 1,
                'word' => 'contentious',
                'meaning_en' => 'causing an agreement',
            ],
            [
                'language_id' => 1,
                'word' => 'controversial',
                'meaning_en' => 'public disagreement',
            ],
            [
                'language_id' => 1,
                'word' => 'bypass',
                'meaning_en' => 'detour, diversion',
            ],
            [
                'language_id' => 1,
                'word' => 'wrangling',
                'meaning_en' => 'engagement in a large agreement',
            ],
            [
                'language_id' => 1,
                'word' => 'recuitment',
                'meaning_en' => 'action of enlisting new poeple',
            ],
            [
                'language_id' => 1,
                'word' => 'rational',
                'meaning_en' => 'based on or in accordance with reason or logic',
            ],
            [
                'language_id' => 1,
                'word' => 'blossom',
                'meaning_en' => 'a flower or a mass of flowers',
            ],
            [
                'language_id' => 1,
                'word' => 'collate',
                'meaning_en' => 'collect and combine',
            ],
            [
                'language_id' => 1,
                'word' => 'juvenile',
                'meaning_en' => 'youngster',
            ],
            [
                'language_id' => 1,
                'word' => 'intent',
                'meaning_en' => 'intention',
            ],
            [
                'language_id' => 1,
                'word' => 'gracefully',
                'meaning_en' => 'elegant way',
            ],
            [
                'language_id' => 1,
                'word' => 'instill',
                'meaning_en' => 'gradually but firmly established',
            ],
            [
                'language_id' => 1,
                'word' => 'crop',
                'meaning_en' => 'cutivated plant',
            ],
            [
                'language_id' => 1,
                'word' => 'disquite',
                'meaning_en' => 'feeling of worry',
            ],
            [
                'language_id' => 1,
                'word' => 'ushered',
                'meaning_en' => 'showed',
            ],
            [
                'language_id' => 1,
                'word' => 'unsettle',
                'meaning_en' => 'causing to feel anxious and uneasy',
            ],
            [
                'language_id' => 1,
                'word' => 'flaw',
                'meaning_en' => 'a mark or other imperfection which mares a substance',
            ],
            [
                'language_id' => 1,
                'word' => 'inspection',
                'meaning_en' => 'careful examination or scrutiny',
            ],
            [
                'language_id' => 1,
                'word' => 'ripple',
                'meaning_en' => 'a small wave or series of waves on the surface of water caused by light breeze',
            ],
            [
                'language_id' => 1,
                'word' => 'breeze',
                'meaning_en' => 'gentle wind',
            ],
            [
                'language_id' => 1,
                'word' => 'mahogany',
                'meaning' => 'چوب ماهان',
            ],
            [
                'language_id' => 1,
                'word' => 'accompaniment',
                'meaning_en' => 'a musical part which supports or partners an instrument, voice, or group.',
            ],
            [
                'language_id' => 1,
                'word' => 'gauge',
                'meaning_en' => 'an instrument that measures and gives visual display of the amount',
            ],
            [
                'language_id' => 1,
                'word' => 'austerity',
                'meaning_en' => 'sternness or severity of manner or attitude.',
            ],
            [
                'language_id' => 1,
                'word' => 'bollocks',
                'meaning_en' => 'used to express annoyance, contempt, or disagreement.',
            ],
            [
                'language_id' => 1,
                'word' => 'severity',
                'meaning' => 'شدت',
                'meaning_en' => 'the fact or condition of being severe.',
            ],
            [
                'language_id' => 1,
                'word' => 'sternness ',
                'meaning' => 'عبوسی',
            ],
            [
                'language_id' => 1,
                'word' => 'ingrained',
                'meaning_en' => '(of a habit, belief, or attitude) firmly fixed or established; difficult to change.',
            ],
            [
                'language_id' => 1,
                'word' => 'anachronistic',
                'meaning_en' => 'belonging or appropriate to a period other than that being portrayed.',
            ],
            [
                'language_id' => 1,
                'word' => 'vigour',
                'meaning_en' => 'physical strength and good health.',
            ],
            [
                'language_id' => 1,
                'word' => 'rejuvenate',
                'meaning_en' => 'give new energy or vigour to; revitalize.',
            ],
            [
                'language_id' => 1,
                'word' => 'abrupt',
                'meaning_en' => 'sudden and unexpected.',
            ],
            [
                'language_id' => 1,
                'word' => 'castrate',
                'meaning_en' => 'remove the testicles of (a male animal or man).',
            ],
            [
                'language_id' => 1,
                'word' => 'impersonately',
                'meaning_en' => 'pretend to be another person for fun',
            ],
            [
                'language_id' => 1,
                'word' => 'haul',
                'meaning_en' => 'pull with effort',
            ],
            [
                'language_id' => 1,
                'word' => 'velvet',
                'meaning_en' => 'a closely woven fabric of silk, cotton, or nylon, that has a thick short pile on one side.',
            ],
            [
                'language_id' => 1,
                'word' => 'woven',
                'meaning' => 'بافت',
            ],
            [
                'language_id' => 1,
                'word' => 'downplay',
                'meaning_en' => 'make (something) appear less important than it really is',
            ],
            [
                'language_id' => 1,
                'word' => 'authoritarian',
                'meaning_en' => 'favouring or enforcing strict obedience to authority at the expense of personal freedom.',
            ],
            [
                'language_id' => 1,
                'word' => 'alienated',
                'meaning_en' => 'experiencing or inducing feelings of isolation or estrangement.',
            ],
            [
                'language_id' => 1,
                'word' => 'dispersion',
                'meaning' => 'پراکندگی',
            ],
            [
                'language_id' => 1,
                'word' => 'overthrow',
                'meaning_en' => 'remove forcibly from power.',
            ],
            [
                'language_id' => 1,
                'word' => 'connotation',
                'meaning_en' => 'an idea or feeling which a word invokes for a person in addition to its literal or primary meaning.',
            ],
            [
                'language_id' => 1,
                'word' => 'woven fabric',
                'meaning_en' => 'Woven fabric is any textile formed by weaving. Woven fabrics, often created on a loom, are made of many threads woven in a warp and weft.',
            ],
            [
                'language_id' => 1,
                'word' => 'diaspora',
                'meaning_en' => 'the dispersion or spread of a people from their original homeland.',
            ],
            [
                'language_id' => 1,
                'word' => 'rewording',
                'meaning_en' => 'process of the expressing someone elses ideas or writting',
            ],
            [
                'language_id' => 1,
                'word' => 'agony',
                'meaning_en' => 'extreme physical mental suffering',
            ],
            [
                'language_id' => 1,
                'word' => 'mercenary',
                'meaning_en' => 'making money at the expenses of ethics',
            ],
            [
                'language_id' => 1,
                'word' => 'ethics',
                'meaning_en' => 'branch of knowledge that deals with moral principles',
            ],
            [
                'language_id' => 1,
                'word' => 'decapitated',
                'meaning' => 'سر بریدن',
            ],
            [
                'language_id' => 1,
                'word' => 'profound',
                'meaning_en' => 'very greate or intense',
            ],
            [
                'language_id' => 1,
                'word' => 'couterpart',
                'meaning_en' => 'a person or thing corresponds to or has the same function as naother person or thing in a different place or situation',
            ],
            [
                'language_id' => 1,
                'word' => 'vain',
                'meaning_en' => 'having or showing an excessively high opinion of ones appearance, abilities, or worth.',
                'meaning' => 'بیهوده',
            ],
            [
                'language_id' => 1,
                'word' => 'wander',
                'meaning_en' => 'walking aimless'
            ],
            [
                'language_id' => 1,
                'word' => 'tangible',
                'meaning_en' => 'perceptible by touch'
            ],
            [
                'language_id' => 1,
                'word' => 'preliminary',
                'meaning_en' => 'taking place before an action or event'
            ],
            [
                'language_id' => 1,
                'word' => 'whim',
                'meaning_en' => 'a sudden desire or change of mind'
            ],
            [
                'language_id' => 1,
                'word' => 'fortification',
                'meaning_en' => 'military construction'
            ],
            [
                'language_id' => 1,
                'word' => 'topographic',
                'meaning_en' => 'relating to the arrangement of the physical features of an area'
            ],
            [
                'language_id' => 1,
                'word' => 'aerial photo',
                'meaning_en' => 'taking of photographs from an aircraft or other airborne platforms'
            ],
            [
                'language_id' => 1,
                'word' => 'censuses',
                'meaning' => 'سرشماری'
            ],
            [
                'language_id' => 1,
                'word' => 'confidential',
                'meaning_en' => 'intended to be kept secret'
            ],
            [
                'language_id' => 1,
                'word' => 'distortion',
                'meaning_en' => 'the action of distorting or the state of being distorted'
            ],
            [
                'language_id' => 1,
                'word' => 'distortion',
                'meaning_en' => 'give misleading or false account or impression of'
            ],
            [
                'language_id' => 1,
                'word' => 'comprehension',
                'meaning_en' => 'ability to understand sth'
            ],
            [
                'language_id' => 1,
                'word' => 'rehab',
                'meaning_en' => 'a course of treatment for drug'
            ],
            [
                'language_id' => 1,
                'word' => 'rehabilitation',
                'meaning_en' => 'restoring someone to health'
            ],
            [
                'language_id' => 1,
                'word' => 'rehearse',
                'meaning_en' => 'practise (a play, piece of music, or other work) for later public performance.'
            ],
            [
                'language_id' => 1,
                'word' => 'smog',
                'meaning_en' => 'fog or haze intensified by smoke or other atmospheric pollutants.'
            ],
            [
                'language_id' => 1,
                'word' => 'intensify',
                'meaning_en' => 'become or make more intense.'
            ],
            [
                'language_id' => 1,
                'word' => 'delegation',
                'meaning_en' => 'a body of delegates or representatives; a deputation.'
            ],
            [
                'language_id' => 1,
                'word' => 'hesitant',
                'meaning_en' => 'tentative, unsure, or slow in acting or speaking.'
            ],
            [
                'language_id' => 1,
                'word' => 'tentative',
                'meaning_en' => 'not certain or fixed; provisional.'
            ],
            [
                'language_id' => 1,
                'word' => 'tentative',
                'meaning_en' => 'not certain or fixed; provisional.'
            ],
            [
                'language_id' => 1,
                'word' => 'usher out',
                'meaning_en' => 'end ones encounter with somebody by causing or permitting the person to leave'
            ],
            [
                'language_id' => 1,
                'word' => 'crucify',
                'meaning_en' => 'put (someone) to death by nailing or binding them to a cross, especially as an ancient punishment.'
            ],
            [
                'language_id' => 1,
                'word' => 'hazardous',
                'meaning_en' => 'risky; dangerous.'
            ],
            [
                'language_id' => 1,
                'word' => 'archbishop',
                'meaning_en' => 'the chief bishop responsible for a large district.'
            ],
            [
                'language_id' => 1,
                'word' => 'district',
                'meaning' => 'منطقه'
            ],
            [
                'language_id' => 1,
                'word' => 'archbishop',
                'meaning_en' => 'the chief bishop responsible for a large district.'
            ],
            [
                'language_id' => 1,
                'word' => 'anointed',
                'meaning_en' => 'nominated or chosen as successor to or leading candidate for a position.'
            ],
            [
                'language_id' => 1,
                'word' => 'conscientiousness',
                'meaning_en' => 'the quality of wishing to do ones work or duty well and thoroughly.'
            ],
            [
                'language_id' => 1,
                'word' => 'anticyclone',
                'meaning' => 'واچرخند',
                'meaning_en' => 'a weather system with high barometric pressure at its centre, around which air slowly circulates in a clockwise (northern hemisphere) or anticlockwise (southern hemisphere) direction. Anticyclones are associated with calm, fine weather.'
            ],
            [
                'language_id' => 1,
                'word' => 'abrupt',
                'meaning_en' => 'sudden and unexpected.'
            ],
            [
                'language_id' => 1,
                'word' => 'halt',
                'meaning_en' => 'bring or come to an abrupt stop.'
            ],
            [
                'language_id' => 1,
                'word' => 'mantle',
                'meaning_en' => 'a loose sleeveless cloak or shawl, worn especially by women.'
            ],
            [
                'language_id' => 1,
                'word' => 'proclaim',
                'meaning_en' => 'announce officially or publicly.'
            ],
            [
                'language_id' => 1,
                'word' => 'murmur',
                'meaning_en' => 'a low continuous background noise.'
            ],
            [
                'language_id' => 1,
                'word' => 'faint',
                'meaning_en' => '(of a sight, smell, or sound) barely perceptible.'
            ],
            [
                'language_id' => 1,
                'word' => 'twinkling',
                'meaning_en' => 'shining with a gleam that changes from bright to faint.'
            ],
            [
                'language_id' => 1,
                'word' => 'deputation',
                'meaning' => 'نمایندگان'
            ],
            [
                'language_id' => 1,
                'word' => 'forward-looking',
                'meaning_en' => 'favouring innovation and development; progressive.'
            ],
            [
                'language_id' => 1,
                'word' => 'foreshore',
                'meaning' => 'پیش از ساحل'
            ],
            [
                'language_id' => 1,
                'word' => 'abundance',
                'meaning_en' => 'very large quantity of sth',
                'meaning' => 'فراوانی'
            ],
            [
                'language_id' => 1,
                'word' => 'reliant',
                'meaning_en' => 'dependent'
            ],
            [
                'language_id' => 1,
                'word' => 'elaborate',
                'meaning' => 'به تفصیل'
            ],
            [
                'language_id' => 1,
                'word' => 'arbitrarily',
                'meaning_en' => 'on the basis of random choice or personal whim, rather than any reason or system.'
            ],
            [
                'language_id' => 1,
                'word' => 'outbreak',
                'meaning_en' => 'unwelcome occurrence'
            ],
            [
                'language_id' => 1,
                'word' => 'cartography',
                'meaning_en' => 'the art, science, and technology of making and studying maps and charts, serving as a visual representation of spatial data'
            ],
            [
                'language_id' => 1,
                'word' => 'perceptible',
                'meaning_en' => 'able to be seen and noticed'
            ],
            [
                'language_id' => 1,
                'word' => 'distilling',
                'meaning_en' => 'the process of making spirits or an essence by distilling',
                'meaning' => 'تقطیر کردن'
            ],
            [
                'language_id' => 1,
                'word' => 'devoid',
                'meaning_en' => 'entirely lacking',
                'meaning' => 'خالی'
            ],
            [
                'language_id' => 1,
                'word' => 'rigorous',
                'meaning_en' => 'extremely thorough & careful',
                'meaning' => 'سختگیر'
            ],
            [
                'language_id' => 1,
                'word' => 'asymptotic',
                'meaning_en' => 'refers to the behavior of a function, formula, or system as its input variable approaches a specific limit, usually infinity or zero'
            ],
            [
                'language_id' => 1,
                'word' => 'a nibble',
                'meaning_en' => 'to eat or chew in small bits',
            ],
            [
                'language_id' => 1,
                'word' => 'gnaw',
                'meaning_en' => 'bite at or nibble something persistently.',
            ],
            [
                'language_id' => 1,
                'word' => 'elude',
                'meaning_en' => 'escape from or avoid (a danger, enemy, or pursuer), typically in a skilful or cunning way.',
            ],
            [
                'language_id' => 1,
                'word' => 'focal point',
                'meaning_en' => 'the point at which rays or waves meet after reflection or refraction, or the point from which diverging rays or waves appear to proceed.',
            ],
            [
                'language_id' => 1,
                'word' => 'reinstate',
                'meaning_en' => 'restore (someone or something) to their former position or state.',
            ],
            [
                'language_id' => 1,
                'word' => 'disdainfully',
                'meaning_en' => 'acting with strong contempt, scorn, or disapproval, treating someone or something as unworthy of respect or attention',
            ],
            [
                'language_id' => 1,
                'word' => 'contempt',
                'meaning_en' => 'the feeling that a person or a thing is worthless or beneath consideration.',
            ],
            [
                'language_id' => 1,
                'word' => 'disdain',
                'meaning_en' => 'the feeling that someone or something is unworthy of ones consideration or respect.',
            ],
            [
                'language_id' => 1,
                'word' => 'spurn',
                'meaning_en' => 'reject with disdain or contempt.',
            ],
            [
                'language_id' => 1,
                'word' => 'adoptive',
                'meaning_en' => '(of a child or parent) in that relationship by adoption.',
            ],
            [
                'language_id' => 1,
                'word' => 'snub',
                'meaning_en' => 'rebuff, ignore, or spurn disdainfully.',
            ],
            [
                'language_id' => 1,
                'word' => 'unanimous',
                'meaning_en' => '(of two or more people) fully in agreement.',
            ],
            [
                'language_id' => 1,
                'word' => 'investiture',
                'meaning_en' => 'the action of formally investing a person with honours or rank.',
            ],
            [
                'language_id' => 1,
                'word' => 'ornament',
                'meaning_en' => 'make (something) look more attractive by adding decorative items.',
            ],
            [
                'language_id' => 1,
                'word' => 'sceptre',
                'meaning_en' => 'an ornamented staff carried by rulers on ceremonial occasions as a symbol of sovereignty.',
            ],
            [
                'language_id' => 1,
                'word' => 'thrill',
                'meaning_en' => 'a sudden feeling of excitement and pleasure.',
            ],
            [
                'language_id' => 1,
                'word' => 'wreckage',
                'meaning_en' => 'the remains of something that has been badly damaged or destroyed.',
            ],
            [
                'language_id' => 1,
                'word' => 'mid-flight',
                'meaning_en' => 'Occurring in the middle portion of a flight.',
            ],
            [
                'language_id' => 1,
                'word' => 'labour',
                'meaning_en' => 'work, especially physical work.',
            ],
            [
                'language_id' => 1,
                'word' => 'transcendent',
                'meaning_en' => 'beyond or above the range of normal or physical human experience.',
            ],
            [
                'language_id' => 1,
                'word' => 'disavow',
                'meaning_en' => 'deny any responsibility or support for.',
            ],
            [
                'language_id' => 1,
                'word' => 'barge in',
                'meaning_en' => 'to suddenly and rudely interrupt or disturb (something or someone)',
            ],
            [
                'language_id' => 1,
                'word' => 'soiled goods',
                'meaning_en' => 'dirty or not in perfect condition because they have been in a shop for a long time',
            ],
            [
                'language_id' => 1,
                'word' => 'preside',
                'meaning_en' => 'be in the position of authority in a meeting or other gathering.',
            ],
            [
                'language_id' => 1,
                'word' => 'righteous',
                'meaning' => 'نیکوکار',
            ],
            [
                'language_id' => 1,
                'word' => 'indignation',
                'meaning_en' => 'a strong, righteous feeling of anger and annoyance caused by what is perceived as unfair, unjust, or mean treatment.',
            ],
            [
                'language_id' => 1,
                'word' => 'outrage',
                'meaning_en' => 'an extremely strong reaction of anger, shock, or indignation.',
            ],
            [
                'language_id' => 1,
                'word' => 'scandal',
                'meaning_en' => 'an action or event regarded as morally or legally wrong and causing general public outrage.',
            ],
            [
                'language_id' => 1,
                'word' => 'tainted',
                'meaning_en' => 'contaminate or pollute (something).',
            ],
            [
                'language_id' => 1,
                'word' => 'redress',
                'meaning_en' => 'remedy or set right (an undesirable or unfair situation).',
            ],
            [
                'language_id' => 1,
                'word' => 'sue',
                'meaning_en' => 'institute legal proceedings against (a person or institution), typically for redress.',
            ],
            [
                'language_id' => 1,
                'word' => 'descendent',
                'meaning_en' => 'descending from an ancestor.',
            ],
            [
                'language_id' => 1,
                'word' => 'aerial',
                'meaning_en' => 'existing, happening, or operating in the air.',
            ],
            [
                'language_id' => 1,
                'word' => 'gaping wound',
                'meaning_en' => 'open wide',
            ],
            [
                'language_id' => 1,
                'word' => 'withered',
                'meaning_en' => '(of a plant) dry and shrivelled.',
            ],
            [
                'language_id' => 1,
                'word' => 'lenient',
                'meaning_en' => '(of a punishment or person in authority) more merciful or tolerant than expected.',
            ],
            [
                'language_id' => 1,
                'word' => 'indulgent',
                'meaning_en' => 'having or indicating a readiness or over-readiness to be generous to or lenient with someone.',
            ],
            [
                'language_id' => 1,
                'word' => 'sternness',
                'meaning_en' => 'the quality of being severe, strict, or uncompromising in manner, attitude, or appearance',
            ],
            [
                'language_id' => 1,
                'word' => 'austerity',
                'meaning_en' => 'sternness or severity of manner or attitude.',
            ],
            [
                'language_id' => 1,
                'word' => 'shrivelled',
                'meaning_en' => 'wrinkled and shrunken, especially as a result of loss of moisture or old age.',
            ],
            [
                'language_id' => 1,
                'word' => 'resurrection',
                'meaning_en' => 'the action or fact of restoring a dead person to life, or of being restored to life.',
            ],
            [
                'language_id' => 1,
                'word' => 'inferno',
                'meaning_en' => 'a large fire that is dangerously out of control.',
            ],
            [
                'language_id' => 1,
                'word' => 'dismal',
                'meaning_en' => 'causing a mood of gloom or depression; depressing; dreary.',
            ],
            [
                'language_id' => 1,
                'word' => 'loveless',
                'meaning_en' => 'having no feelings of love.',
            ],
            [
                'language_id' => 1,
                'word' => 'joyless',
                'meaning_en' => 'not giving or feeling any pleasure or satisfaction; grim or dismal.',
            ],
            [
                'language_id' => 1,
                'word' => 'thin-lipped',
                'meaning_en' => 'having mean-looking thin lips',
            ],
            [
                'language_id' => 1,
                'word' => 'prong',
                'meaning' => 'شاخه ها',
            ],
            [
                'language_id' => 1,
                'word' => 'catapult',
                'meaning_en' => 'a forked stick with an elastic band fastened to the two prongs, used by children for shooting small stones',
            ],
            [
                'language_id' => 1,
                'word' => 'ice-veined',
                'meaning_en' => 'a person who is able to stay very calm and not get nervous even in stressful situations',
            ],
            [
                'language_id' => 1,
                'word' => 'vein',
                'meaning' => 'سیاهرگ',
                'meaning_en' => 'any of the tubes forming part of the blood circulation system of the body, carrying in most cases oxygen-depleted blood towards the heart',
            ],
            [
                'language_id' => 1,
                'word' => 'grievous',
                'meaning_en' => '(of something bad) very severe or serious.',
            ],
            [
                'language_id' => 1,
                'word' => 'reconcile',
                'meaning_en' => 'restore friendly relations between.',
            ],
            [
                'language_id' => 1,
                'word' => 'obedience',
                'meaning_en' => 'compliance with an order, request, or law or submission to anothers authority',
            ],
            [
                'language_id' => 1,
                'word' => 'autocratic',
                'meaning_en' => 'relating to a ruler who has absolute power.',
            ],
            [
                'language_id' => 1,
                'word' => 'abrupt',
                'meaning_en' => 'sudden and unexpected.',
            ],
            [
                'language_id' => 1,
                'word' => 'faint',
                'meaning_en' => '(of a sight, smell, or sound) barely perceptible.',
            ],
            [
                'language_id' => 1,
                'word' => 'intensify',
                'meaning_en' => 'become or make more intense.',
            ],
            [
                'language_id' => 1,
                'word' => 'overstep',
                'meaning_en' => 'pass beyond or exceed (a limit or standard).',
            ],
            [
                'language_id' => 1,
                'word' => 'stickler',
                'meaning_en' => 'a person who insists on a certain quality or type of behaviour.',
            ],
            [
                'language_id' => 1,
                'word' => 'befall',
                'meaning_en' => '(especially of something bad) happen to (someone).',
            ],
            [
                'language_id' => 1,
                'word' => 'pledge',
                'meaning_en' => 'a solemn promise or undertaking.',
            ],
            [
                'language_id' => 1,
                'word' => 'summon',
                'meaning_en' => 'order (someone) to be present.',
            ],
            [
                'language_id' => 1,
                'word' => 'mortality',
                'meaning_en' => 'the state of being subject to death.',
            ],
            [
                'language_id' => 1,
                'word' => 'avoirdupois',
                'meaning' => 'دستگاه آوواردوپوآ',
                'meaning_en' => 'a system of weights based on a pound of 16 ounces or 7,000 grains, widely used in English-speaking countries.',
            ],
            [
                'language_id' => 1,
                'word' => 'ounce',
                'meaning_en' => 'a unit of weight of one sixteenth of a pound avoirdupois (approximately 28 grams).',
            ],
            [
                'language_id' => 1,
                'word' => 'clumsily',
                'meaning_en' => 'in an awkward and careless way.',
            ],
            [
                'language_id' => 1,
                'word' => 'flounder',
                'meaning_en' => 'struggle or stagger clumsily in mud or water.',
            ],
            [
                'language_id' => 1,
                'word' => 'murmur',
                'meaning_en' => 'a low continuous background noise.',
            ],
            [
                'language_id' => 1,
                'word' => 'anticyclone',
                'meaning' => 'پادچَرخَند',
            ],
            [
                'language_id' => 1,
                'word' => 'abdicate',
                'meaning_en' => '(of a monarch) renounce ones throne.',
            ],
            [
                'language_id' => 1,
                'word' => 'obsequiousness',
                'meaning_en' => 'The quality or state of being obsequious; ready obedience',
            ],
            [
                'language_id' => 1,
                'word' => 'abdication',
                'meaning_en' => 'the formal act of stepping down from something, especially a king giving up the throne',
            ],
            [
                'language_id' => 1,
                'word' => 'allude',
                'meaning_en' => 'suggest or call attention to indirectly; hint at.',
            ],
            [
                'language_id' => 1,
                'word' => 'abundantly',
                'meaning_en' => 'in large quantities; plentifully.',
            ],
            [
                'language_id' => 1,
                'word' => 'crowned',
                'meaning_en' => 'ceremonially place a crown on the head of (someone) in order to invest them as a monarch.',
            ],
            [
                'language_id' => 1,
                'word' => 'ration',
                'meaning_en' => 'allow each person to have only a fixed amount of (a commodity).',
            ],
            [
                'language_id' => 1,
                'word' => 'attainment',
                'meaning_en' => 'the action or fact of achieving a goal towards which one has worked.',
            ],
            [
                'language_id' => 1,
                'word' => 'accession',
                'meaning_en' => 'the attainment or acquisition of a position of rank or power.',
            ],
            [
                'language_id' => 1,
                'word' => 'consort',
                'meaning_en' => 'a wife, husband, or companion, in particular the spouse of a reigning monarch.',
            ],
            [
                'language_id' => 1,
                'word' => 'coronation',
                'meaning_en' => 'the ceremony of crowning a sovereign or a sovereigns consort.',
            ],
            [
                'language_id' => 1,
                'word' => 'clumsy',
                'meaning_en' => 'awkward in movement',
            ],
            [
                'language_id' => 1,
                'word' => 'boundary',
                'meaning_en' => 'a live which makes the limits of an area',
            ],
            [
                'language_id' => 1,
                'word' => 'distinguishing',
                'meaning_en' => 'characterstic of one thing or a person',
            ],
            [
                'language_id' => 1,
                'word' => 'despair',
                'meaning_en' => 'the complete loss or absence of hope',
            ],
            [
                'language_id' => 1,
                'word' => 'incentive',
                'meaning_en' => 'a thing that motivates or encourages someone to do something',
            ],
            [
                'language_id' => 1,
                'word' => 'counterarguments',
                'meaning_en' => 'an argument or set of reasons put forward to oppose an idea or theory developed in another argument',
            ],
            [
                'language_id' => 1,
                'word' => 'irrefutable',
                'meaning_en' => 'undeniable',
            ],
            [
                'language_id' => 1,
                'word' => 'proponent',
                'meaning_en' => 'a person who advocates a theory',
            ],
            [
                'language_id' => 1,
                'word' => 'advocate',
                'meaning_en' => 'a person who publicly supports a policy',
            ],
            [
                'language_id' => 1,
                'word' => 'exiled',
                'meaning_en' => 'having been expelled an barred',
            ],
            [
                'language_id' => 1,
                'word' => 'expelled',
                'meaning_en' => 'officialy make someone leave',
            ],
            [
                'language_id' => 1,
                'word' => 'barred',
                'meaning_en' => 'closed secured',
            ],
            [
                'language_id' => 1,
                'word' => 'fractional',
                'meaning_en' => 'relatinv to or expressed as a fraction',
            ],
            [
                'language_id' => 1,
                'word' => 'deficit',
                'meaning' => 'کسری بودجه',
            ],
            [
                'language_id' => 1,
                'word' => 'meridiem',
                'meaning' => 'پیش از نیم‌روز',
            ],
            [
                'language_id' => 1,
                'word' => 'heralded',
                'meaning' => 'قاصد',
            ],
            [
                'language_id' => 1,
                'word' => 'underway',
                'meaning' => 'در دست اجرا',
            ],
            [
                'language_id' => 1,
                'word' => 'eulogy',
                'meaning_en' => 'a speech or piece of writing that praises someone or something highly, especially a tribute to someone who has just died',
            ],
            [
                'language_id' => 1,
                'word' => 'preside',
                'meaning_en' => 'be in the position of authority in a meeting or other gathering',
            ],
            [
                'language_id' => 1,
                'word' => 'indulgence',
                'meaning_en' => 'the action or fact of indulging',
            ],
            [
                'language_id' => 1,
                'word' => 'sentiment',
                'meaning_en' => 'a view or opinion that is held or expressed',
            ],
            [
                'language_id' => 1,
                'word' => 'comptroller',
                'meaning_en' => 'a controller (used in the title of some financial officers)',
            ],
            [
                'language_id' => 1,
                'word' => 'majesty',
                'meaning_en' => 'impressive stateliness, dignity, or beauty',
            ],
            [
                'language_id' => 1,
                'word' => 'overheated',
                'meaning' => 'بیش از حد گرم شده',
            ],
            [
                'language_id' => 1,
                'word' => 'unlikely',
                'meaning_en' => 'not likely to happen',
            ],
            [
                'language_id' => 1,
                'word' => 'merit',
                'meaning_en' => 'the quality of being particularly good and worthy',
            ],
            [
                'language_id' => 1,
                'word' => 'substitute',
                'meaning_en' => 'a person or thing acting in place of another',
            ],
            [
                'language_id' => 1,
                'word' => 'sweeter',
                'meaning' => 'شیرین کننده',
            ],
            [
                'language_id' => 1,
                'word' => 'autonomous',
                'meaning_en' => 'having freedom to govern itself or control its own affairs',
            ],
            [
                'language_id' => 1,
                'word' => 'govern',
                'meaning_en' => 'conduct policy actions affairs with authority',
            ],
            [
                'language_id' => 1,
                'word' => 'perception',
                'meaning_en' => 'the ability to see or hear, become aware of something through senses',
            ],
            [
                'language_id' => 1,
                'word' => 'submerge',
                'meaning_en' => 'cause something to be under water',
            ],
            [
                'language_id' => 1,
                'word' => 'jot down',
                'meaning_en' => 'write something quickly on piece of paper that you remember it',
            ],
			[
                'language_id' => 1,
                'word' => 'sophisticatedly',
                'meaning_en' => 'by derivation',
            ],
			[
                'language_id' => 1,
                'word' => 'delve',
                'meaning_en' => 'reach inside a receptacle and search for something',
            ],
			[
                'language_id' => 1,
                'word' => 'receptacle',
                'meaning_en' => 'a hollow object used to contain something',
            ],
			[
                'language_id' => 1,
                'word' => 'amidst',
                'meaning_en' => 'in the middle of; amid',
            ],
			[
                'language_id' => 1,
                'word' => 'refrain',
                'meaning_en' => 'to abstain or stop oneself',
            ],
			[
                'language_id' => 1,
                'word' => 'abstain',
                'meaning_en' => 'restrain oneself',
            ],
			[
                'language_id' => 1,
                'word' => 'restrain',
                'meaning_en' => 'prevent',
            ],
            [
                'language_id' => 1,
                'word' => 'Raw Materials',
                'meaning' => 'مواد خام',
            ],
            [
                'language_id' => 1,
                'word' => 'Iron Ore',
                'meaning' => 'سنگ آهن',
            ],
            [
                'language_id' => 1,
                'word' => 'Crude Oil',
                'meaning' => 'نفت خام',
            ],
            [
                'language_id' => 1,
                'word' => 'paracetamol',
                'meaning' => 'استامینوفن',
            ],
            [
                'language_id' => 1,
                'word' => 'Milestone',
                'meaning_en' => 'a stone set up beside a road to mark the distance in miles to a particular place.',
            ],
            [
                'language_id' => 1,
                'word' => 'Procurement',
                'meaning_en' => 'the action of obtaining or procuring something.',
            ],
            [
                'language_id' => 1,
                'word' => 'denotes',
                'meaning' => 'نشانگر بودن',
            ],
			[
                'language_id' => 1,
                'word' => 'reframe',
                'meaning_en' => 'place in a new frame',
            ],
			[
                'language_id' => 1,
                'word' => 'infighting',
                'meaning_en' => 'hidden conflict or competitiveness within an organization',
            ],
			[
                'language_id' => 1,
                'word' => 'dingy',
                'meaning' => 'کثیف',
            ],
			[
                'language_id' => 1,
                'word' => 'decrepit',
                'meaning' => 'سالخورده',
            ],
			[
                'language_id' => 1,
                'word' => 'infested',
                'meaning_en' => 'be present in large numbers, typically so as to cause damage or disease.',
            ],
            [
                'language_id' => 1,
                'word' => 'swirl',
                'meaning_en' => 'move in a twisting or spiralling pattern',
            ],
            [
                'language_id' => 1,
                'word' => 'Cest la vie',
                'meaning_en' => 'Thats life; such is life (used to express acceptance of a situation)',
                'meaning' => 'این زندگی است',
            ],
            [
                'language_id' => 1,
                'word' => 'Blottoed',
                'meaning_en' => 'Extremely drunk',
                'meaning' => 'سنگین مست',
            ],
            [
                'language_id' => 1,
                'word' => 'pints',
                'meaning_en' => 'Units of liquid measure (commonly used for beer)',
                'meaning' => 'پینت (واحد اندازه گیری نوشیدنی)',
            ],
            [
                'language_id' => 1,
                'word' => 'witty',
                'meaning_en' => 'Showing or characterized by quick and inventive verbal humor',
                'meaning' => 'طنزپرداز، بذله گو',
            ],
            [
                'language_id' => 1,
                'word' => 'Im boring myself',
                'meaning_en' => 'I am finding myself uninteresting',
                'meaning' => 'دارم خودم رو کسل می‌کنم',
            ],
            [
                'language_id' => 1,
                'word' => 'Hypocrite warning',
                'meaning_en' => 'A caution that someone is pretending to have morals they do not possess',
                'meaning' => 'هشدار ریاکار',
            ],
            [
                'language_id' => 1,
                'word' => 'rowdy',
                'meaning_en' => 'Noisy and disorderly',
                'meaning' => 'شلوغ، پر سر و صدا',
            ],
            [
                'language_id' => 1,
                'word' => 'nasty',
                'meaning_en' => 'Very bad, unpleasant, or unkind',
                'meaning' => 'نفرت انگیز، بدجنس',
            ],
            [
                'language_id' => 1,
                'word' => 'resolve',
                'meaning_en' => 'To settle or find a solution to a problem',
                'meaning' => 'حل کردن، تصمیم گرفتن',
            ],
            [
                'language_id' => 1,
                'word' => 'tenner',
                'meaning_en' => 'A ten-pound note (British slang)',
                'meaning' => 'اسکناس ده پوندی',
            ],
            [
                'language_id' => 1,
                'word' => 'did not get an agenda',
                'meaning_en' => 'Did not receive a plan of things to be done',
                'meaning' => 'دستور جلسه را دریافت نکردم',
            ],
            [
                'language_id' => 1,
                'word' => 'Comic Relief',
                'meaning_en' => 'A UK charity organization that uses comedy to raise money',
                'meaning' => 'کمک‌های طنزآمیز (نام یک خیریه بریتانیایی)',
            ],
            [
                'language_id' => 1,
                'word' => 'Demarcation',
                'meaning_en' => 'The action of marking the limits or boundaries of something',
                'meaning' => 'تعیین مرز، تفکیک',
            ],
            [
                'language_id' => 1,
                'word' => 'twat',
                'meaning_en' => 'A highly offensive term for a person regarded as stupid or unpleasant',
                'meaning' => 'احمق (توهین آمیز)',
            ],
            [
                'language_id' => 1,
                'word' => 'knob-end',
                'meaning_en' => 'A stupid or annoying person (British slang)',
                'meaning' => 'آدم احمق و مزاحم',
            ],
            [
                'language_id' => 1,
                'word' => 'wreck',
                'meaning_en' => 'A person who is in a very bad physical or mental condition',
                'meaning' => 'ویران شده، آدم نابود',
            ],
            [
                'language_id' => 1,
                'word' => 'stapler',
                'meaning_en' => 'A device for fastening papers together with staples',
                'meaning' => 'منگنه دوز',
            ],
            [
                'language_id' => 1,
                'word' => 'kinky',
                'meaning_en' => 'Involving or given to unusual sexual behavior',
                'meaning' => 'عجیب و غریب (در روابط جنسی)',
            ],
            [
                'language_id' => 1,
                'word' => 'trifling matter',
                'meaning_en' => 'Something of little value or importance',
                'meaning' => 'مسئله پیش پا افتاده، بی‌اهمیت',
            ],
            [
                'language_id' => 1,
                'word' => 'custardy',
                'meaning_en' => 'Having the consistency or flavor of custard',
                'meaning' => 'شبیه کرم کارامل',
            ],
            [
                'language_id' => 1,
                'word' => 'vic and bob',
                'meaning_en' => 'British comedy duo Vic Reeves and Bob Mortimer',
                'meaning' => 'دو کمدین بریتانیایی',
            ],
            [
                'language_id' => 1,
                'word' => 'I like to have a laugh just as much as the next man',
                'meaning_en' => 'I enjoy humor and fun just like anyone else does',
                'meaning' => 'من مثل بقیه دوست دارم بخندم',
            ],
            [
                'language_id' => 1,
                'word' => 'I resent it',
                'meaning_en' => 'I feel bitter or annoyed at it',
                'meaning' => 'از آن کینه دارم، ناراحتم',
            ],
            [
                'language_id' => 1,
                'word' => 'Circuitry',
                'meaning_en' => 'A system of electric circuits in a device',
                'meaning' => 'مدارهای الکتریکی',
            ],
            [
                'language_id' => 1,
                'word' => 'adhere',
                'meaning_en' => 'To stick to a surface or belief',
                'meaning' => 'پایبند بودن، چسبیدن',
            ],
            [
                'language_id' => 1,
                'word' => 'a-journed',
                'meaning_en' => 'Suspended until a later time (misspelled of adjourned)',
                'meaning' => 'موکول شدن به وقت دیگر',
            ],
            [
                'language_id' => 1,
                'word' => 'cull',
                'meaning_en' => 'To reduce the population of a wild animal by selective slaughter',
                'meaning' => 'کشتار انتخابی، حذف کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'ethnic',
                'meaning_en' => 'Relating to a population subgroup with a common culture or ancestry',
                'meaning' => 'قومی، نژادی',
            ],
            [
                'language_id' => 1,
                'word' => 'commission',
                'meaning_en' => 'order or authorize the production of (something).',
            ],
            [
                'language_id' => 1,
                'word' => 'unduly',
                'meaning_en' => 'to an unwarranted degree; inordinately.',
            ],
            [
                'language_id' => 1,
                'word' => 'fierce',
                'meaning_en' => 'having or displaying an intense or ferocious aggressiveness.',
            ],
            [
                'language_id' => 1,
                'word' => 'ornament',
                'meaning_en' => 'a thing used or serving to make something look more attractive but usually having no practical purpose, especially a small object such as a figurine.',
            ],
            [
                'language_id' => 1,
                'word' => 'isobar',
                'meaning_en' => 'a line on a map connecting points having the same atmospheric pressure at a given time or on average over a given period',
            ],
            [
                'language_id' => 1,
                'word' => 'isohume',
                'meaning_en' => 'a line or surface drawn on a map or chart to indicate connecting points of equal salinity in the ocean.',
            ],
            [
                'language_id' => 1,
                'word' => 'inflict',
                'meaning_en' => 'cause (something unpleasant or painful) to be suffered by someone or something.',
            ],
            [
                'language_id' => 1,
                'word' => 'bay',
                'meaning_en' => '(of a dog, especially a large one) bark or howl loudly.',
            ],
            [
                'language_id' => 1,
                'word' => 'curtail',
                'meaning_en' => 'reduce in extent or quantity; impose a restriction on.',
            ],
            [
                'language_id' => 1,
                'word' => 'orientals',
                'meaning_en' => 'Peoples from East Asia (often considered outdated or offensive)',
                'meaning' => 'اهل شرق آسیا',
            ],
            [
                'language_id' => 1,
                'word' => 'partly down to me',
                'meaning_en' => 'Partially my responsibility or fault',
                'meaning' => 'تا حدی تقصیر من است',
            ],
            [
                'language_id' => 1,
                'word' => 'practical jokes',
                'meaning_en' => 'Pranks played on someone to cause amusement',
                'meaning' => 'شیطنت‌های عملی، شوخی‌های عملی',
            ],
            [
                'language_id' => 1,
                'word' => 'bummers',
                'meaning_en' => 'Things that are annoying or disappointing',
                'meaning' => 'چیزهای ناامید کننده، بدشانسی',
            ],
            [
                'language_id' => 1,
                'word' => 'dwell',
                'meaning_en' => 'To live or reside in a place; to think or speak about something at length',
                'meaning' => 'سکونت کردن، ماندن (روی یک موضوع)',
            ],
            [
                'language_id' => 1,
                'word' => 'notwithstanding',
                'meaning_en' => 'In spite of; nevertheless',
                'meaning' => 'با وجود این، علی‌رغم',
            ],
            [
                'language_id' => 1,
                'word' => 'morecambe',
                'meaning_en' => 'A seaside town in England',
                'meaning' => 'شهری ساحلی در انگلستان',
            ],
            [
                'language_id' => 1,
                'word' => 'gags',
                'meaning_en' => 'Jokes or funny remarks',
                'meaning' => 'جک‌ها، شوخی‌ها',
            ],
            [
                'language_id' => 1,
                'word' => 'deformity',
                'meaning_en' => 'A distortion of the shape or structure of a body part',
                'meaning' => 'نقص عضو، بدشکلی',
            ],
            [
                'language_id' => 1,
                'word' => 'which Y had a hit single with the only way is up and sang with plastic population: Yazoo',
                'meaning_en' => 'Refers to the British band Yazoo (featuring Alison Moyet)',
                'meaning' => 'گروه موسیقی بریتانیایی یازو',
            ],
            [
                'language_id' => 1,
                'word' => 'dissident',
                'meaning_en' => 'A person who opposes official policy',
                'meaning' => 'معترض، اپوزیسیون',
            ],
            [
                'language_id' => 1,
                'word' => 'lethal blow',
                'meaning_en' => 'A strike or action that causes death',
                'meaning' => 'ضربه مرگبار',
            ],
            [
                'language_id' => 1,
                'word' => 'exiled',
                'meaning_en' => 'Expelled and barred from one\'s native country',
                'meaning' => 'تبعید شده',
            ],
            [
                'language_id' => 1,
                'word' => 'memoirs',
                'meaning_en' => 'A historical account or biography written from personal knowledge',
                'meaning' => 'خاطرات',
            ],
            [
                'language_id' => 1,
                'word' => 'foxhole',
                'meaning_en' => 'A shallow pit in the ground used by soldiers for cover',
                'meaning' => 'سنگر',
            ],
            [
                'language_id' => 1,
                'word' => 'shes been on the',
                'meaning_en' => 'She has been consuming or using (usually followed by a drug or drink)',
                'meaning' => 'او مصرف کرده (معمولاً مواد یا مشروب)',
            ],
            [
                'language_id' => 1,
                'word' => 'waccy baccy',
                'meaning_en' => 'Slang for cannabis/marijuana',
                'meaning' => 'حشیش، ماری جوانا (اصطلاح عامیانه)',
            ],
            [
                'language_id' => 1,
                'word' => 'Jim Carry on acid',
                'meaning_en' => 'Someone behaving wildly like Jim Carrey, possibly under the influence of drugs',
                'meaning' => 'مثل جیم کری زیر تاثیر مواد',
            ],
            [
                'language_id' => 1,
                'word' => 'queer as folk',
                'meaning_en' => 'A British TV series about gay life; also a phrase meaning strange',
                'meaning' => 'عجیب و غریب (نام یک سریال هم هست)',
            ],
            [
                'language_id' => 1,
                'word' => 'speak to yourself',
                'meaning_en' => 'To talk to oneself',
                'meaning' => 'با خودت حرف بزن',
            ],
            [
                'language_id' => 1,
                'word' => 'edgeways',
                'meaning_en' => 'In edgewise (used in negatives: to get a word in)',
                'meaning' => 'لبه‌ای (در اصطلاح: فرصت حرف زدن پیدا کردن)',
            ],
            [
                'language_id' => 1,
                'word' => 'Ill be up to my nuts in guts',
                'meaning_en' => 'A vulgar slang expression implying deep involvement or a messy situation',
                'meaning' => 'تا گردن درگیر (اصطلاح رکیک)',
            ],
            [
                'language_id' => 1,
                'word' => 'half-vulcan',
                'meaning_en' => 'Half Vulcan (fictional alien race from Star Trek)',
                'meaning' => 'نصف ولکان (نژاد خیالی در پیشتازان فضا)',
            ],
            [
                'language_id' => 1,
                'word' => 'prejudice',
                'meaning_en' => 'Preconceived opinion that is not based on reason or actual experience',
                'meaning' => 'پیش‌داوری',
            ],
            [
                'language_id' => 1,
                'word' => 'Song 19 by Paul Hardcastle',
                'meaning_en' => 'A song titled "19" by Paul Hardcastle about the Vietnam War',
                'meaning' => 'آهنگ ۱۹ از پل هاردکستل',
            ],
            [
                'language_id' => 1,
                'word' => 'dont rake up old graves',
                'meaning_en' => 'Don\'t bring up past unpleasant issues',
                'meaning' => 'گذشته را زنده نکن',
            ],
            [
                'language_id' => 1,
                'word' => 'Howard Jones',
                'meaning_en' => 'British singer and musician',
                'meaning' => 'خواننده و موسیقیدان بریتانیایی',
            ],
            [
                'language_id' => 1,
                'word' => 'Nik Kershaw',
                'meaning_en' => 'British singer-songwriter',
                'meaning' => 'خواننده و ترانه سرای بریتانیایی',
            ],
            [
                'language_id' => 1,
                'word' => 'gossamer',
                'meaning_en' => 'Something extremely light, delicate, or tenuous',
                'meaning' => 'نازک و ظریف، تار عنکبوت',
            ],
            [
                'language_id' => 1,
                'word' => 'arachnid',
                'meaning_en' => 'A class of arthropods that includes spiders, scorpions, etc.',
                'meaning' => 'عنکبوتیان',
            ],
            [
                'language_id' => 1,
                'word' => 'pedigree',
                'meaning_en' => 'The record of ancestry of a purebred animal',
                'meaning' => 'تبار، نژاد اصیل',
            ],
            [
                'language_id' => 1,
                'word' => 'labrador',
                'meaning_en' => 'A breed of dog',
                'meaning' => 'نژادی از سگ',
            ],
            [
                'language_id' => 1,
                'word' => 'crufts',
                'meaning_en' => 'A famous dog show in the UK',
                'meaning' => 'نمایشگاه سگ‌های معروف در انگلستان',
            ],
            [
                'language_id' => 1,
                'word' => 'Mungo Jerry - Summertime',
                'meaning_en' => 'A famous song by the band Mungo Jerry',
                'meaning' => 'آهنگ معروف از گروه مونگو جری',
            ],
            [
                'language_id' => 1,
                'word' => 'The tempest',
                'meaning_en' => 'A play by William Shakespeare',
                'meaning' => 'نمایشنامه طوفان اثر شکسپیر',
            ],
            [
                'language_id' => 1,
                'word' => 'banter',
                'meaning_en' => 'Playful and friendly teasing',
                'meaning' => 'شوخی و بذله گویی',
            ],
            [
                'language_id' => 1,
                'word' => 'copper kettles',
                'meaning_en' => 'Kettles made of copper',
                'meaning' => 'کتری مسی',
            ],
            [
                'language_id' => 1,
                'word' => 'pub',
                'meaning_en' => 'A public house where alcoholic drinks are served',
                'meaning' => 'کافه یا بار (محل نوشیدنی)',
            ],
            [
                'language_id' => 1,
                'word' => 'blockbusters',
                'meaning_en' => 'Movies or books that are very successful',
                'meaning' => 'فیلم‌های پرفروش و ابرقهرمانی',
            ],
            [
                'language_id' => 1,
                'word' => 'snot',
                'meaning_en' => 'Mucus from the nose',
                'meaning' => 'ترشحات بینی، مخاط',
            ],
            [
                'language_id' => 1,
                'word' => 'Hes a little bloke',
                'meaning_en' => 'He is a small man',
                'meaning' => 'اون یه مرد ریزه‌میزه است',
            ],
            [
                'language_id' => 1,
                'word' => 'stop-gap',
                'meaning_en' => 'A temporary measure or substitute',
                'meaning' => 'راه حل موقت',
            ],
            [
                'language_id' => 1,
                'word' => 'foregone conclusion',
                'meaning_en' => 'A result that can be predicted with certainty',
                'meaning' => 'نتیجه قطعی، از پیش معلوم',
            ],
            [
                'language_id' => 1,
                'word' => 'Slough',
                'meaning_en' => 'A large town in Berkshire, England',
                'meaning' => 'شهری در انگلستان',
            ],
            [
                'language_id' => 1,
                'word' => 'slag them off',
                'meaning_en' => 'To criticize or speak badly of someone (British slang)',
                'meaning' => 'بدگویی کردن از کسی',
            ],
            [
                'language_id' => 1,
                'word' => 'surpent',
                'meaning_en' => 'Likely a misspelling of "serpent" (snake)',
                'meaning' => 'مار (احتمالا غلط املایی برای Serpent)',
            ],
            [
                'language_id' => 1,
                'word' => 'purr',
                'meaning_en' => 'The soft vibrating sound made by a cat',
                'meaning' => 'خرخر کردن گربه',
            ],
            [
                'language_id' => 1,
                'word' => 'hounded',
                'meaning_en' => 'To pester or harass persistently',
                'meaning' => 'آزار دادن، تعقیب کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'shagging',
                'meaning_en' => 'Having sexual intercourse (British slang)',
                'meaning' => 'رابطه جنسی داشتن (اصطلاح عامیانه)',
            ],
            [
                'language_id' => 1,
                'word' => 'git',
                'meaning_en' => 'An unpleasant or contemptible person (British slang)',
                'meaning' => 'آدم بی‌ادب، احمق',
            ],
            [
                'language_id' => 1,
                'word' => 'whittling wood',
                'meaning_en' => 'Carving wood into shapes with a knife',
                'meaning' => 'تراشیدن چوب',
            ],
            [
                'language_id' => 1,
                'word' => 'ipso facto',
                'meaning_en' => 'By that very fact',
                'meaning' => 'به خودی خود، به همین دلیل',
            ],
            [
                'language_id' => 1,
                'word' => 'merit',
                'meaning_en' => 'The quality of being particularly good or worthy',
                'meaning' => 'شایستگی، استحقاق',
            ],
            [
                'language_id' => 1,
                'word' => 'snapshot',
                'meaning_en' => 'A photograph taken quickly and casually',
                'meaning' => 'عکس فوری، اسنپ شات',
            ],
            [
                'language_id' => 1,
                'word' => 'out of bounds',
                'meaning_en' => 'Beyond the limits or boundaries of what is allowed or permitted',
                'meaning' => 'خارج از محدوده مجاز',
            ],
            [
                'language_id' => 1,
                'word' => 'discreetly',
                'meaning_en' => 'In a careful and circumspect manner, especially in order to avoid causing offense or to keep something confidential',
                'meaning' => 'با احتیاط، محرمانه',
            ],
            [
                'language_id' => 1,
                'word' => 'Territorial',
                'meaning_en' => 'Relating to a territory or ownership of an area; defensive of one\'s area',
                'meaning' => 'سرزمینی، قلمرو، حساس نسبت به قلمرو',
            ],
            [
                'language_id' => 1,
                'word' => 'covert operations',
                'meaning_en' => 'Military or intelligence operations that are planned and executed secretly',
                'meaning' => 'عملیات مخفی',
            ],
            [
                'language_id' => 1,
                'word' => 'Turnover',
                'meaning_en' => 'The rate at which employees leave a company and are replaced; or the amount of money taken by a business',
                'meaning' => 'نرخ گردش مالی (یا نرخ خروج کارکنان)',
            ],
            [
                'language_id' => 1,
                'word' => 'cutbacks',
                'meaning_en' => 'Reductions in expenditure or services',
                'meaning' => 'کاهش هزینه‌ها، تقلیل',
            ],
            [
                'language_id' => 1,
                'word' => 'foreman',
                'meaning_en' => 'A worker who supervises a group of other workers',
                'meaning' => 'سرکارگر',
            ],
            [
                'language_id' => 1,
                'word' => 'dispensable',
                'meaning_en' => 'Not necessary; able to be replaced or done without',
                'meaning' => 'غیرضروری، قابل صرف‌نظر بودن',
            ],
            [
                'language_id' => 1,
                'word' => 'thoughtful',
                'meaning_en' => 'Showing consideration for the needs of other people; or absorbed in thought',
                'meaning' => 'دل‌سوز، متفکر',
            ],
            [
                'language_id' => 1,
                'word' => 'jizzing',
                'meaning_en' => 'Slang for ejaculating; or in birdwatching, identifying a bird by its general impression (vibe)',
                'meaning' => 'انزال (اصطلاح عامیانه)؛ یا تشخیص پرنده از روی ظاهر کلی',
            ],
            [
                'language_id' => 1,
                'word' => 'doorstep',
                'meaning_en' => 'A step leading up to a door; or to deliver something to someone\'s house',
                'meaning' => 'پله ورودی، آستانه خانه',
            ],
            [
                'language_id' => 1,
                'word' => 'hemophobic',
                'meaning_en' => 'Having an extreme fear of blood',
                'meaning' => 'ترس از خون',
            ],
            [
                'language_id' => 1,
                'word' => 'gracefully',
                'meaning_en' => 'In a smooth, elegant, or polite manner',
                'meaning' => 'با وقار، با ظرافت',
            ],
            [
                'language_id' => 1,
                'word' => 'hollow out',
                'meaning_en' => 'To make a hole or empty space inside something',
                'meaning' => 'توخالی کردن، سوراخ کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'optimal',
                'meaning_en' => 'Best or most effective; most desirable',
                'meaning' => 'بهینه، مطلوب',
            ],
            [
                'language_id' => 1,
                'word' => 'defy',
                'meaning_en' => 'To openly resist or refuse to obey; to challenge',
                'meaning' => 'سرپیچی کردن، به چالش کشیدن',
            ],
            [
                'language_id' => 1,
                'word' => 'cornerstone',
                'meaning_en' => 'A fundamental quality or feature on which a particular thing depends or is based',
                'meaning' => 'سنگ بنای اصلی، رکن',
            ],
            [
                'language_id' => 1,
                'word' => 'breeze',
                'meaning_en' => 'A gentle wind; or something that is easy to do',
                'meaning' => 'نسیم ملایم؛ کار آسان',
            ],
            [
                'language_id' => 1,
                'word' => 'jot',
                'meaning_en' => 'A very small amount; or to write something down quickly',
                'meaning' => 'ریزترین مقدار؛ یادداشت کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'shalt',
                'meaning_en' => 'Old fashioned form of "shall"',
                'meaning' => 'باید (شکل قدیمی shall)',
            ],
            [
                'language_id' => 1,
                'word' => 'thou',
                'meaning_en' => 'Old fashioned form of "you"',
                'meaning' => 'تو (شکل قدیمی)',
            ],
            [
                'language_id' => 1,
                'word' => 'roaches',
                'meaning_en' => 'Cockroaches; or the ends of smoked cannabis joints',
                'meaning' => 'سوسک؛ یا ته سیگار حشیش',
            ],
            [
                'language_id' => 1,
                'word' => 'settling in',
                'meaning_en' => 'Becoming familiar or comfortable with a new environment',
                'meaning' => 'خو گرفتن، عادت کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'wanker',
                'meaning_en' => 'A contemptible person (British slang, literally meaning masturbator)',
                'meaning' => 'آدم بی‌ارزش، احمق (توهین آمیز بریتانیایی)',
            ],
            [
                'language_id' => 1,
                'word' => 'gun holster',
                'meaning_en' => 'A holder for carrying a firearm, typically attached to a belt',
                'meaning' => 'غلاف اسلحه، جلد تفنگ',
            ],
            [
                'language_id' => 1,
                'word' => 'degrades',
                'meaning_en' => 'Causes someone or something to lose dignity or respect; lowers in quality',
                'meaning' => 'تحقیر کردن؛ پایین آوردن کیفیت',
            ],
            [
                'language_id' => 1,
                'word' => 'culprit',
                'meaning_en' => 'A person who is responsible for a crime or offense',
                'meaning' => 'مجرم، مقصر',
            ],
            [
                'language_id' => 1,
                'word' => 'prude',
                'meaning_en' => 'A person who is easily shocked by matters relating to sex or nudity',
                'meaning' => 'آدم با حیا، متعصب اخلاقی (منفی)',
            ],
            [
                'language_id' => 1,
                'word' => 'Bladdered',
                'meaning_en' => 'Extremely drunk (British slang)',
                'meaning' => 'مست',
            ],
            [
                'language_id' => 1,
                'word' => 'Perfick',
                'meaning_en' => 'Perfect',
            ],
            [
                'language_id' => 1,
                'word' => 'Crack of Dawn',
                'meaning_en' => 'right at sunrise',
            ],
            [
                'language_id' => 1,
                'word' => 'Bloke',
                'meaning_en' => 'A man or a guy',
            ],
            [
                'language_id' => 1,
                'word' => 'vis-a-vis',
                'meaning_en' => 'In relation to',
            ],
            [
                'language_id' => 1,
                'word' => 'caesarean',
                'meaning' => 'سزارین',
            ],
            [
                'language_id' => 1,
                'word' => 'phase',
                'meaning' => 'carry out in gradual stages',
            ],
            [
                'language_id' => 1,
                'word' => 'pretentious',
                'meaning' => 'متظاهر',
            ],
            [
                'language_id' => 1,
                'word' => 'perception',
                'meaning' => 'ادراک',
            ],
            [
                'language_id' => 1,
                'word' => 'kegged',
                'meaning' => 'میخکوب',
            ],
            [
                'language_id' => 1,
                'word' => 'informant',
                'meaning_en' => 'a person who gives info',
            ],
            [
                'language_id' => 1,
                'word' => 'immaterial',
                'meaning_en' => 'irrelevant',
            ],
            [
                'language_id' => 1,
                'word' => 'culprit',
                'meaning' => 'مجرم',
            ],
            [
                'language_id' => 1,
                'word' => 'tackle',
                'meaning_en' => 'equipment required for a task/sport',
            ],
            [
                'language_id' => 1,
                'word' => 'arty',
                'meaning' => 'affected display of being artistic',
            ],
            [
                'language_id' => 1,
                'word' => 'breed',
                'meaning' => 'گونه',
            ],
            [
                'language_id' => 1,
                'word' => 'procedure',
                'meaning' => 'روش',
            ],
            [
                'language_id' => 1,
                'word' => 'detoration',
                'meaning_en' => 'the action of causing a bomb',
            ],
            [
                'language_id' => 1,
                'word' => 'slumped down',
                'meaning' => 'سقوط کرد',
            ],
            [
                'language_id' => 1,
                'word' => 'wildebeast',
                'meaning' => 'وحشی',
            ],
            [
                'language_id' => 1,
                'word' => 'questing',
                'meaning' => 'جستجو کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'nomadic',
                'meaning' => 'عشایری',
            ],
            [
                'language_id' => 1,
                'word' => 'depleted',
                'meaning' => 'تخلیه شده',
            ],
            [
                'language_id' => 1,
                'word' => 'peculiar',
                'meaning' => 'عجیب و غریب',
            ],
            [
                'language_id' => 1,
                'word' => 'inclined',
                'meaning' => 'متمایل شده',
            ],
            [
                'language_id' => 1,
                'word' => 'astronomer',
                'meaning' => 'ستاره شناس',
            ],
            [
                'language_id' => 1,
                'word' => 'uncultivated',
                'meaning' => 'کشف نشده',
            ],
            [
                'language_id' => 1,
                'word' => 'puny',
                'meaning' => 'ضعف',
            ],
            [
                'language_id' => 1,
                'word' => 'laboriously',
                'meaning' => 'به زحمت',
            ],
            [
                'language_id' => 1,
                'word' => 'dubbed',
                'meaning' => 'دوبله شده',
            ],
            [
                'language_id' => 1,
                'word' => 'unmechanised',
                'meaning' => 'غیرمکانیزه',
            ],
            [
                'language_id' => 1,
                'word' => 'prominent',
                'meaning' => 'برجسته',
            ],
            [
                'language_id' => 1,
                'word' => 'outset',
                'meaning' => 'ابتدا',
            ],
            [
                'language_id' => 1,
                'word' => 'criteria',
                'meaning' => 'معیارها',
            ],
            [
                'language_id' => 1,
                'word' => 'slant',
                'meaning' => 'مایل',
            ],
            [
                'language_id' => 1,
                'word' => 'expeditions',
                'meaning_en' => 'promptness or inclination in doing sth',
            ],
            [
                'language_id' => 1,
                'word' => 'voyages',
                'meaning' => 'سفرهای دریایی',
            ],
            [
                'language_id' => 1,
                'word' => 'defects',
                'meaning' => 'نواقص',
            ],
            [
                'language_id' => 1,
                'word' => 'illiterate',
                'meaning' => 'بی سواد',
            ],
            [
                'language_id' => 1,
                'word' => 'self-reliance',
                'meaning' => 'اتکا به خود',
            ],
            [
                'language_id' => 1,
                'word' => 'disfavor',
                'meaning' => 'نارضایتی',
            ],
            [
                'language_id' => 1,
                'word' => 'chronicle',
                'meaning' => 'وقایع نگاری',
            ],
            [
                'language_id' => 1,
                'word' => 'conception',
                'meaning' => 'مفهوم',
            ],
            [
                'language_id' => 1,
                'word' => 'archaeological',
                'meaning' => 'باستان شناس',
            ],
            [
                'language_id' => 1,
                'word' => 'communal',
                'meaning' => 'اشتراکی',
            ],
            [
                'language_id' => 1,
                'word' => 'poles',
                'meaning' => 'قطب ها',
            ],
            [
                'language_id' => 1,
                'word' => 'grazing',
                'meaning' => 'چرا',
            ],
            [
                'language_id' => 1,
                'word' => 'landlord',
                'meaning' => 'صاحبخانه',
            ],
            [
                'language_id' => 1,
                'word' => 'distortion',
                'meaning_en' => 'distoring act',
            ],
            [
                'language_id' => 1,
                'word' => 'forebears',
                'meaning' => 'اجداد',
            ],
            [
                'language_id' => 1,
                'word' => 'regimental',
                'meaning' => 'هنگ',
            ],
            [
                'language_id' => 1,
                'word' => 'melts',
                'meaning' => 'محوشده',
            ],
            [
                'language_id' => 1,
                'word' => 'testament',
                'meaning' => 'وصیت نامه',
            ],
            [
                'language_id' => 1,
                'word' => 'regimental',
                'meaning' => 'هنگ',
            ],
            [
                'language_id' => 1,
                'word' => 'imitates',
                'meaning_en' => 'take or follow as a model',
            ],
            [
                'language_id' => 1,
                'word' => 'abyss',
                'meaning_en' => 'a deep or seemingly bottomless chasm',
            ],
            [
                'language_id' => 1,
                'word' => 'mounds',
                'meaning' => 'تپه ها',
            ],
            [
                'language_id' => 1,
                'word' => 'luminescene',
                'meaning' => 'شب تابی',
            ],
            [
                'language_id' => 1,
                'word' => 'emblem',
                'meaning' => 'نماد',
            ],
            [
                'language_id' => 1,
                'word' => 'fertility',
                'meaning' => 'باروری',
            ],
            [
                'language_id' => 1,
                'word' => 'cult',
                'meaning' => 'آیین',
            ],
            [
                'language_id' => 1,
                'word' => 'latter',
                'meaning' => 'دومی',
            ],
            [
                'language_id' => 1,
                'word' => 'attested',
                'meaning' => 'گواهی شده',
            ],
            [
                'language_id' => 1,
                'word' => 'rituals',
                'meaning' => 'مراسم',
            ],
            [
                'language_id' => 1,
                'word' => 'glimpse',
                'meaning' => 'اجمالی',
            ],
            [
                'language_id' => 1,
                'word' => 'overlying',
                'meaning' => 'پوشاننده',
            ],
            [
                'language_id' => 1,
                'word' => 'steep',
                'meaning' => 'تپه',
            ],
            [
                'language_id' => 1,
                'word' => 'characterised',
                'meaning' => 'مشخصه',
            ],
            [
                'language_id' => 1,
                'word' => 'ubiquitous',
                'meaning' => 'فراگیر',
            ],
            [
                'language_id' => 1,
                'word' => 'outlive',
                'meaning' => 'بیشتر زنده ماندن',
            ],
            [
                'language_id' => 1,
                'word' => 'coral',
                'meaning' => 'مرجان',
            ],
            [
                'language_id' => 1,
                'word' => 'adept',
                'meaning' => 'ماهر',
            ],
            [
                'language_id' => 1,
                'word' => 'contentedly',
                'meaning' => 'بارضایت',
            ],
            [
                'language_id' => 1,
                'word' => 'panache',
                'meaning' => 'شکوه',
            ],
            [
                'language_id' => 1,
                'word' => 'predecessors',
                'meaning' => 'پیشینیان',
            ],
            [
                'language_id' => 1,
                'word' => 'supervisory',
                'meaning' => 'نظارتی',
            ],
            [
                'language_id' => 1,
                'word' => 'insulated',
                'meaning' => 'عایق شده',
            ],
            [
                'language_id' => 1,
                'word' => 'elasticity',
                'meaning' => 'خاصیت ارتجاعی',
            ],
            [
                'language_id' => 1,
                'word' => 'dismissively',
                'meaning' => 'نادیده گرفته شده',
            ],
            [
                'language_id' => 1,
                'word' => 'appealing',
                'meaning' => 'جذاب',
            ],
            [
                'language_id' => 1,
                'word' => 'unglamorous',
                'meaning' => 'بی زرق و برق',
            ],
            [
                'language_id' => 1,
                'word' => 'peripherals',
                'meaning' => 'لوازم جانبی',
            ],
            [
                'language_id' => 1,
                'word' => 'priesthood',
                'meaning' => 'کشیش',
            ],
            [
                'language_id' => 1,
                'word' => 'circuits',
                'meaning' => 'مدارها',
            ],
            [
                'language_id' => 1,
                'word' => 'chatter',
                'meaning' => 'پچ پچ کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'detergents',
                'meaning' => 'مواد شوینده',
            ],
            [
                'language_id' => 1,
                'word' => 'disrupting',
                'meaning' => 'مختل کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'hygiene',
                'meaning' => 'بهداشت',
            ],
            [
                'language_id' => 1,
                'word' => 'foes',
                'meaning' => 'دشمنان',
            ],
            [
                'language_id' => 1,
                'word' => 'tolerance',
                'meaning' => 'بردباری',
            ],
            [
                'language_id' => 1,
                'word' => 'plea',
                'meaning' => 'درخواست',
            ],
            [
                'language_id' => 1,
                'word' => 'teeming',
                'meaning' => 'مملو بودن',
            ],
            [
                'language_id' => 1,
                'word' => 'endure',
                'meaning' => 'تحمل کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'ego-decentering',
                'meaning' => 'غیر خود محوری',
            ],
            [
                'language_id' => 1,
                'word' => 'obsolescent',
                'meaning' => 'منسوخ',
            ],
            [
                'language_id' => 1,
                'word' => 'revered',
                'meaning' => 'مورد احترام',
            ],
            [
                'language_id' => 1,
                'word' => 'buzzword',
                'meaning' => 'کلید واژه',
            ],
            [
                'language_id' => 1,
                'word' => 'profound',
                'meaning' => 'عمیق',
            ],
            [
                'language_id' => 1,
                'word' => 'prescient',
                'meaning' => 'پیشگو',
            ],
            [
                'language_id' => 1,
                'word' => 'cling',
                'meaning' => 'چسبیدن',
            ],
            [
                'language_id' => 1,
                'word' => 'stubborn',
                'meaning' => 'سرسخت',
            ],
            [
                'language_id' => 1,
                'word' => 'textile',
                'meaning' => 'نساجی',
            ],
            [
                'language_id' => 1,
                'word' => 'mills',
                'meaning' => 'آسیاب ها',
            ],
            [
                'language_id' => 1,
                'word' => 'labor',
                'meaning' => 'آزمایشگاه',
            ],
            [
                'language_id' => 1,
                'word' => 'wages',
                'meaning' => 'دستمزد',
            ],
            [
                'language_id' => 1,
                'word' => 'apprentice',
                'meaning' => 'شاگرد',
            ],
            [
                'language_id' => 1,
                'word' => 'hoarded',
                'meaning' => 'احتکار شده',
            ],
            [
                'language_id' => 1,
                'word' => 'dispersed',
                'meaning' => 'پراکنده شده',
            ],
            [
                'language_id' => 1,
                'word' => 'commodity',
                'meaning' => 'کالا',
            ],
            [
                'language_id' => 1,
                'word' => 'jagged',
                'meaning' => 'شکار کرد',
            ],
            [
                'language_id' => 1,
                'word' => 'deputy',
                'meaning' => 'معاون',
            ],
            [
                'language_id' => 1,
                'word' => 'crude',
                'meaning' => 'خام',
            ],
            [
                'language_id' => 1,
                'word' => 'birthed',
                'meaning' => 'به دنیا آمد',
            ],
            [
                'language_id' => 1,
                'word' => 'metallurgy',
                'meaning' => 'متالوژی',
            ],
            [
                'language_id' => 1,
                'word' => 'exaggerated',
                'meaning' => 'اغراق آمیز',
            ],
            [
                'language_id' => 1,
                'word' => 'plentiful',
                'meaning' => 'فراوان',
            ],
            [
                'language_id' => 1,
                'word' => 'wisdom',
                'meaning_en' => 'judgment',
            ],
            [
                'language_id' => 1,
                'word' => 'assumptions',
                'meaning' => 'فرضیات',
            ],
            [
                'language_id' => 1,
                'word' => 'bearded',
                'meaning' => 'ریش دار',
            ],
            [
                'language_id' => 1,
                'word' => 'cognitive',
                'meaning' => 'شناختی',
            ],
            [
                'language_id' => 1,
                'word' => 'recognition',
                'meaning' => 'شناخت',
            ],
            [
                'language_id' => 1,
                'word' => 'incident',
                'meaning' => 'مسیله',
            ],
            [
                'language_id' => 1,
                'word' => 'objectivity',
                'meaning' => 'عینیت',
            ],
            [
                'language_id' => 1,
                'word' => 'possessed',
                'meaning' => 'برخورداری',
            ],
            [
                'language_id' => 1,
                'word' => 'contextual',
                'meaning' => 'زمینه ایی',
            ],
            [
                'language_id' => 1,
                'word' => 'outcomes',
                'meaning' => 'پیامدها',
            ],
            [
                'language_id' => 1,
                'word' => 'hurdle',
                'meaning' => 'موانع',
            ],
            [
                'language_id' => 1,
                'word' => 'elusive',
                'meaning_en' => 'difficult to find or catch',
            ],
            [
                'language_id' => 1,
                'word' => 'thought provoking',
                'meaning_en' => 'stimulating',
            ],
            [
                'language_id' => 1,
                'word' => 'immersive',
                'meaning_en' => 'generating 3 dimension',
            ],
            [
                'language_id' => 1,
                'word' => 'dissect',
                'meaning_en' => 'analyze requiring no exertion',
            ],
            [
                'language_id' => 1,
                'word' => 'exertion',
                'meaning_en' => 'physical effort',
            ],
            [
                'language_id' => 1,
                'word' => 'ethical',
                'meaning_en' => 'sth aligns with moral principles',
            ],
            [
                'language_id' => 1,
                'word' => 'dilemma',
                'meaning_en' => 'a situtation in which a difficult choice has to be made between two alternatives',
            ],
            [
                'language_id' => 1,
                'word' => 'clear-cut',
                'meaning_en' => 'easy to perceive or understand',
            ],
            [
                'language_id' => 1,
                'word' => 'thematic',
                'meaning_en' => 'vocabulary',
            ],
            [
                'language_id' => 1,
                'word' => 'deceptive',
                'meaning_en' => 'giving an appearnace different from the true one',
            ],
            [
                'language_id' => 1,
                'word' => 'impasse',
                'meaning_en' => 'a situation in which no pregress is possible',
            ],
            [
                'language_id' => 1,
                'word' => 'empathetic',
                'meaning_en' => 'showing ability to understand and share the feelings of another',
            ],
            [
                'language_id' => 1,
                'word' => 'ditching',
                'meaning_en' => 'the construction or repair of the ditches',
            ],
            [
                'language_id' => 1,
                'word' => 'ditches',
                'meaning_en' => 'a narrow channel dug at the side',
            ],
            [
                'language_id' => 1,
                'word' => 'dug',
                'meaning_en' => 'p.t dig of a road',
            ],
            [
                'language_id' => 1,
                'word' => 'intuitively',
                'meaning_en' => 'without conscious reasoning',
            ],
            [
                'language_id' => 1,
                'word' => 'connotation',
                'meaning_en' => 'an indea or feeling in which a word invokes for a person in addtion to its literal',
            ],
            [
                'language_id' => 1,
                'word' => 'literally',
                'meaning' => 'به معنای واقعی کلمه',
            ],
            [
                'language_id' => 1,
                'word' => 'repression',
                'meaning' => 'سرکوب',
            ],

            [
                'language_id' => 1,
                'word' => 'bloke',
                'meaning_en' => 'a man',
            ],
            [
                'language_id' => 1,
                'word' => 'agility',
                'meaning_en' => 'ability to move quickly and easily',
            ],
            [
                'language_id' => 1,
                'word' => 'antagonist',
                'meaning_en' => 'a character in a story who is presented as the main enemy or rival of the protagonist and is often depicted as a villain.',
            ],
            [
                'language_id' => 1,
                'word' => 'Aussie',
                'meaning_en' => 'a person from Australia.',
            ],
            [
                'language_id' => 1,
                'word' => 'dune',
                'meaning_en' => 'a mound or ridge of sand or other loose sediment formed by the wind, especially on the sea coast or in a desert.',
            ],
            [
                'language_id' => 1,
                'word' => 'portrait',
                'meaning_en' => 'to represent or describe someone or something in a painting, film, book, or other artistic work: The painting portrays a beautiful young woman in a blue dress. The writer portrays life in a small village at the turn of the century.',
            ],
            [
                'language_id' => 1,
                'word' => 'overhype',
                'meaning_en' => 'make exaggerated claims about (a product, idea, or event); publicize or promote excessively.',
            ],
            [
                'language_id' => 1,
                'word' => 'vignette',
                'meaning_en' => 'a brief evocative description, account, or episode.',
            ],
            [
                'language_id' => 1,
                'word' => 'slippin',
                'meaning_en' => 'beings caught off guard or not paying attention',
            ],
            [
                'language_id' => 1,
                'word' => 'pleading',
                'meaning_en' => 'the action of making an emotional or earnest appeal to someone.',
            ],
            [
                'language_id' => 1,
                'word' => 'leeway',
                'meaning_en' => 'the amount of freedom to move or act that is available.',
            ],
            [
                'language_id' => 1,
                'word' => 'chasm',
                'meaning' => 'شکاف',
            ],
            [
                'language_id' => 1,
                'word' => 'figures',
                'meaning' => 'ارقام',
            ],
            [
                'language_id' => 1,
                'word' => 'scattered',
                'meaning' => 'پراکنده شده',
            ],
            [
                'language_id' => 1,
                'word' => 'chalk',
                'meaning' => 'گچ',
            ],
            [
                'language_id' => 1,
                'word' => 'hillsides',
                'meaning' => 'دامنه های تپه',
            ],
            [
                'language_id' => 1,
                'word' => 'downloads',
                'meaning' => 'پایین زمین ها',
            ],
            [
                'language_id' => 1,
                'word' => 'regimentals',
                'meaning' => 'هنگ',
            ],
            [
                'language_id' => 1,
                'word' => 'enigmatic',
                'meaning' => 'معمایی',
            ],
            [
                'language_id' => 1,
                'word' => 'prehistoric',
                'meaning' => 'ماقبل تاریخ',
            ],
            [
                'language_id' => 1,
                'word' => 'monk',
                'meaning' => 'راهب',
            ],
            [
                'language_id' => 1,
                'word' => 'priory',
                'meaning' => 'مقدماتی',
            ],
            [
                'language_id' => 1,
                'word' => 'gleaming',
                'meaning' => 'درخشان',
            ],
            [
                'language_id' => 1,
                'word' => 'overlying',
                'meaning' => 'پوشاننده',
            ],
            [
                'language_id' => 1,
                'word' => 'continuity',
                'meaning' => 'تداوم',
            ],
            [
                'language_id' => 1,
                'word' => 'elegant',
                'meaning' => 'ظریف',
            ],
            [
                'language_id' => 1,
                'word' => 'melts',
                'meaning' => 'دوب می شود',
            ],
            [
                'language_id' => 1,
                'word' => 'sleek',
                'meaning' => 'براق',
            ],
            [
                'language_id' => 1,
                'word' => 'disjointed',
                'meaning' => 'ازهم گسیخته',
            ],
            [
                'language_id' => 1,
                'word' => 'hillfort',
                'meaning' => 'تپه فورت',
            ],
            [
                'language_id' => 1,
                'word' => 'burial',
                'meaning' => 'دفن',
            ],
            [
                'language_id' => 1,
                'word' => 'cemetery',
                'meaning' => 'فبرستان',
            ],
            [
                'language_id' => 1,
                'word' => 'well-preserved',
                'meaning' => 'به خوبی حفظ شده',
            ],
            [
                'language_id' => 1,
                'word' => 'carvings',
                'meaning' => 'کنده کاری ها',
            ],
            [
                'language_id' => 1,
                'word' => 'nevertheless',
                'meaning' => 'با این وجود',
            ],
            [
                'language_id' => 1,
                'word' => 'vale',
                'meaning' => 'دره',
            ],
            [
                'language_id' => 1,
                'word' => 'adequate',
                'meaning' => 'کافی',
            ],
            [
                'language_id' => 1,
                'word' => 'impression',
                'meaning' => 'برداشت',
            ],
            [
                'language_id' => 1,
                'word' => 'landscape',
                'meaning' => 'چشم انداز',
            ],
            [
                'language_id' => 1,
                'word' => 'tribal',
                'meaning' => 'قبیله ایی',
            ],
            [
                'language_id' => 1,
                'word' => 'fertility',
                'meaning' => 'باروری',
            ],
            [
                'language_id' => 1,
                'word' => 'cult',
                'meaning' => 'فرقه',
            ],
            [
                'language_id' => 1,
                'word' => 'goddess',
                'meaning' => 'الهه',
            ],
            [
                'language_id' => 1,
                'word' => 'inhabitants',
                'meaning' => 'ساکن',
            ],
            [
                'language_id' => 1,
                'word' => 'ritual',
                'meaning' => 'مراسم',
            ],
            [
                'language_id' => 1,
                'word' => 'depictions',
                'meaning' => 'تصاویر',
            ],
            [
                'language_id' => 1,
                'word' => 'latter',
                'meaning' => 'دومی',
            ],
            [
                'language_id' => 1,
                'word' => 'ward',
                'meaning' => 'بخش',
            ],
            [
                'language_id' => 1,
                'word' => 'neonantal',
                'meaning' => 'نوزاد',
            ],
            [
                'language_id' => 1,
                'word' => 'coated',
                'meaning' => 'پوشش داده شده',
            ],
            [
                'language_id' => 1,
                'word' => 'footbridge',
                'meaning_en' => 'bridge designed to pedestrians',
            ],
            [
                'language_id' => 1,
                'word' => 'cookery',
                'meaning_en' => 'the practice or skill of preparing food',
            ],
            [
                'language_id' => 1,
                'word' => 'protagonist',
                'meaning_en' => 'the leading character or one of the major characters in a play',
            ],
            [
                'language_id' => 1,
                'word' => 'rhetorical',
                'meaning_en' => 'relating to or connected with the rhetoric',
            ],
            [
                'language_id' => 1,
                'word' => 'occupant',
                'meaning_en' => 'a person who resides or is persent in a house',
            ],
            [
                'language_id' => 1,
                'word' => 'vital',
                'meaning' => 'حیاتی',
            ],
            [
                'language_id' => 1,
                'word' => 'symbiotic',
                'meaning' => 'همزیستی',
            ],
            [
                'language_id' => 1,
                'word' => 'mutually',
                'meaning' => 'متقابل',
            ],
            [
                'language_id' => 1,
                'word' => 'beneficial',
                'meaning' => 'سودمند',
            ],
            [
                'language_id' => 1,
                'word' => 'destructive',
                'meaning' => 'مخرب',
            ],
            [
                'language_id' => 1,
                'word' => 'unravelling',
                'meaning' => 'گره گشایی',
            ],
            [
                'language_id' => 1,
                'word' => 'combat',
                'meaning' => 'مبارزه',
            ],
            [
                'language_id' => 1,
                'word' => 'obsession',
                'meaning' => 'وسواس',
            ],
            [
                'language_id' => 1,
                'word' => 'inflammatory',
                'meaning' => 'التهابی',
            ],
            [
                'language_id' => 1,
                'word' => 'severance',
                'meaning' => 'جدایی',
            ],
            [
                'language_id' => 1,
                'word' => 'ratification',
                'meaning' => 'تصدیق',
            ],
            [
                'language_id' => 1,
                'word' => 'veneration',
                'meaning_en' => 'respect',
            ],
            [
                'language_id' => 1,
                'word' => 'commemorates',
                'meaning_en' => 'recall and short respect for sth and someone',
            ],
            [
                'language_id' => 1,
                'word' => 'self-control',
                'meaning' => 'خویش فرما',
            ],
            [
                'language_id' => 1,
                'word' => 'untangle',
                'meaning_en' => 'free from a tangled',
            ],
            [
                'language_id' => 1,
                'word' => 'grit',
                'meaning_en' => 'strength of character',
            ],
            [
                'language_id' => 1,
                'word' => 'curriculum',
                'meaning' => 'برنامه تحصیلی',
            ],
            [
                'language_id' => 1,
                'word' => 'dissertation',
                'meaning_en' => 'scholary research paper',
            ],
            [
                'language_id' => 1,
                'word' => 'mundane',
                'meaning' => 'دنیوی',
            ],
            [
                'language_id' => 1,
                'word' => 'efficiency',
                'meaning' => 'بازدهی',
            ],
            [
                'language_id' => 1,
                'word' => 'stillness',
                'meaning_en' => 'absence of movement',
            ],
            [
                'language_id' => 1,
                'word' => 'solstice',
                'meaning_en' => 'either of the two times of the year when the sun is at its greatest distance from the celestial',
            ],
            [
                'language_id' => 1,
                'word' => 'celestial',
                'meaning' => 'آسمانی',
            ],
            [
                'language_id' => 1,
                'word' => 'equator',
                'meaning' => 'خط استوا',
            ],
            [
                'language_id' => 1,
                'word' => 'excursion',
                'meaning' => 'گردش',
            ],
            [
                'language_id' => 1,
                'word' => 'sacred',
                'meaning_en' => 'connected with god',
            ],
            [
                'language_id' => 1,
                'word' => 'abdundance',
                'meaning' => 'فراوانی',
            ],
            [
                'language_id' => 1,
                'word' => 'chronic',
                'meaning' => 'طولانی',
            ],
            [
                'language_id' => 1,
                'word' => 'tropical',
                'meaning' => 'استوایی',
            ],
            [
                'language_id' => 1,
                'word' => 'coldness',
                'meaning' => 'سردسیری',
            ],
            [
                'language_id' => 1,
                'word' => 'severance',
                'meaning' => 'جدایی',
            ],
            [
                'language_id' => 1,
                'word' => 'maltitudes',
                'meaning' => 'انبوهی',
            ],
            [
                'language_id' => 1,
                'word' => 'outlive',
                'meaning' => 'طرح کلی',
            ],
            [
                'language_id' => 1,
                'word' => 'ubiquitous',
                'meaning' => 'همه جا حاضر',
            ],
            [
                'language_id' => 1,
                'word' => 'seaweed',
                'meaning' => 'جلبک دریایی',
            ],
            [
                'language_id' => 1,
                'word' => 'utterly',
                'meaning' => 'کاملا',
            ],
            [
                'language_id' => 1,
                'word' => 'absorbing',
                'meaning' => 'جذب کننده',
            ],
            [
                'language_id' => 1,
                'word' => 'species',
                'meaning' => 'گونه ها',
            ],
            [
                'language_id' => 1,
                'word' => 'dubbed',
                'meaning' => 'دوبله شده',
            ],
            [
                'language_id' => 1,
                'word' => 'microbial',
                'meaning' => 'میکروبی',
            ],
            [
                'language_id' => 1,
                'word' => 'ward',
                'meaning' => 'بخش',
            ],
            [
                'language_id' => 1,
                'word' => 'nenonantal',
                'meaning' => 'نوزادی',
            ],
            [
                'language_id' => 1,
                'word' => 'likable',
                'meaning' => 'خوش برخورد',
            ],
            [
                'language_id' => 1,
                'word' => 'redeemed',
                'meaning' => 'آزاد کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'silliness',
                'meaning' => 'حماقت',
            ],
            [
                'language_id' => 1,
                'word' => 'parlor',
                'meaning' => 'اطاق نشیمن',
            ],
            [
                'language_id' => 1,
                'word' => 'amateurish',
                'meaning_en' => 'done in an unskilful or inept way.',
            ],
            [
                'language_id' => 1,
                'word' => 'phallus',
                'meaning_en' => 'a penis, especially when erect',
            ],
            [
                'language_id' => 1,
                'word' => 'intimidating',
                'meaning_en' => 'having a frightening, overawing, or threatening effect.',
            ],
            [
                'language_id' => 1,
                'word' => 'dwindles',
                'meaning_en' => 'diminish gradually in size, amount, or strength.',
            ],
            [
                'language_id' => 1,
                'word' => 'thrilling',
                'meaning_en' => 'causing excitement and pleasure; exhilarating.',
            ],
            [
                'language_id' => 1,
                'word' => 'prequel',
                'meaning_en' => 'a story or film containing events that precede those of an existing work.',
            ],
            [
                'language_id' => 1,
                'word' => 'aura',
                'meaning' => 'هاله',
            ],
            [
                'language_id' => 1,
                'word' => 'dent',
                'meaning_en' => 'a slight hollow in a hard even surface made by a blow or pressure.',
            ],
            [
                'language_id' => 1,
                'word' => 'brewer',
                'meaning_en' => 'a person or company that manufactures beer.',
            ],
            [
                'language_id' => 1,
                'word' => 'tiers',
                'meaning_en' => 'each in a series of rows or levels of a structure placed one above the other.',
            ],
            [
                'language_id' => 1,
                'word' => 'amends',
                'meaning_en' => 'compensation or redress for a wrongdoing.',
            ],
            [
                'language_id' => 1,
                'word' => 'nuisance',
                'meaning_en' => 'a person or thing causing inconvenience or annoyance.',
            ],
            [
                'language_id' => 1,
                'word' => 'ooze',
                'meaning_en' => 'slowly trickle or seep out of something.',
            ],
            [
                'language_id' => 1,
                'word' => 'abduction',
                'meaning_en' => 'the action of taking someone away by force or deception.',
            ],

            [
                'language_id' => 1,
                'word' => 'vermin',
                'meaning' => 'موذی',
            ],
            [
                'language_id' => 1,
                'word' => 'readily',
                'meaning' => 'به راحتی',
            ],
            [
                'language_id' => 1,
                'word' => 'crews',
                'meaning' => 'خدمه تیم',
            ],
            [
                'language_id' => 1,
                'word' => 'honorary',
                'meaning' => 'درجه افتخاری',
            ],
            [
                'language_id' => 1,
                'word' => 'vaguely',
                'meaning' => 'تمجمج کنان',
            ],
            [
                'language_id' => 1,
                'word' => 'disentangle',
                'meaning' => 'رها کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'miniaturized',
                'meaning' => 'کوچک کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'ushering',
                'meaning' => 'معرفی',
            ],
            [
                'language_id' => 1,
                'word' => 'nuance',
                'meaning' => 'نکات دقیق وظریف',
            ],
            [
                'language_id' => 1,
                'word' => 'flare',
                'meaning' => 'منور',
            ],
            [
                'language_id' => 1,
                'word' => 'quails',
                'meaning' => 'بلدرچین',
            ],
            [
                'language_id' => 1,
                'word' => 'jammed',
                'meaning' => 'مسدود شده',
            ],
            [
                'language_id' => 1,
                'word' => 'ripple',
                'meaning' => 'موج دریا',
            ],
            [
                'language_id' => 1,
                'word' => 'dystopian',
                'meaning' => 'ویران‌شهر',
            ],
            [
                'language_id' => 1,
                'word' => 'utopia',
                'meaning' => 'ناکجاآباد',
            ],
            [
                'language_id' => 1,
                'word' => 'asylum',
                'meaning' => 'پناهگاه',
            ],
            [
                'language_id' => 1,
                'word' => 'custody',
                'meaning' => 'حضانت سرپرستی',
            ],
            [
                'language_id' => 1,
                'word' => 'oyster',
                'meaning' => 'صدف خوراکی',
            ],
            [
                'language_id' => 1,
                'word' => 'hammered',
                'meaning' => 'مست و پاتیل',
            ],
            [
                'language_id' => 1,
                'word' => 'retro',
                'meaning' => 'قدیمی',
            ],
            [
                'language_id' => 1,
                'word' => 'sprawling',
                'meaning' => 'گسترده',
            ],
            [
                'language_id' => 1,
                'word' => 'intact',
                'meaning' => 'دست‌نخورده',
            ],
            [
                'language_id' => 1,
                'word' => 'lessens',
                'meaning' => 'کاهش میدهد',
            ],
            [
                'language_id' => 1,
                'word' => 'conclude',
                'meaning' => 'نتیجه گیری',
            ],
            [
                'language_id' => 1,
                'word' => 'cited',
                'meaning' => 'استناد شده',
            ],
            [
                'language_id' => 1,
                'word' => 'river delta',
                'meaning' => 'دلتای رودخانه',
            ],
            [
                'language_id' => 1,
                'word' => 'outline',
                'meaning' => 'طرح کلی',
            ],
            [
                'language_id' => 1,
                'word' => 'fluctuations',
                'meaning' => 'نواسانات',
            ],
            [
                'language_id' => 1,
                'word' => 'dumper trucks',
                'meaning' => 'کامیون کمپرسی',
            ],
            [
                'language_id' => 1,
                'word' => 'rumbling',
                'meaning' => 'غرش',
            ],
            [
                'language_id' => 1,
                'word' => 'reclaim',
                'meaning' => 'بازپس گیری',
            ],
            [
                'language_id' => 1,
                'word' => 'seabed',
                'meaning' => 'بستر دریا',
            ],
            [
                'language_id' => 1,
                'word' => 'eminent',
                'meaning' => 'برجسته',
            ],
            [
                'language_id' => 1,
                'word' => 'essence',
                'meaning' => 'ذات',
            ],
            [
                'language_id' => 1,
                'word' => 'devised',
                'meaning' => 'ابداع کرد',
            ],
            [
                'language_id' => 1,
                'word' => 'marble',
                'meaning' => 'سنگ مرمر',
            ],
            [
                'language_id' => 1,
                'word' => 'deductive',
                'meaning' => 'قیاس',
            ],
            [
                'language_id' => 1,
                'word' => 'deepen',
                'meaning' => 'عمیق تر کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'analogous',
                'meaning' => 'مشابه',
            ],
            [
                'language_id' => 1,
                'word' => 'inferential',
                'meaning' => 'استنباطی',
            ],
            [
                'language_id' => 1,
                'word' => 'preplexing',
                'meaning' => 'گیج کننده',
            ],
            [
                'language_id' => 1,
                'word' => 'apparatus',
                'meaning' => 'دستگاه',
            ],
            [
                'language_id' => 1,
                'word' => 'reasoning',
                'meaning' => 'استدلال',
            ],
            [
                'language_id' => 1,
                'word' => 'merely',
                'meaning' => 'صرفا',
            ],
            [
                'language_id' => 1,
                'word' => 'squeeze',
                'meaning' => 'فشردن',
            ],
            [
                'language_id' => 1,
                'word' => 'sponge',
                'meaning' => 'اسفنج',
            ],
            [
                'language_id' => 1,
                'word' => 'settle lower',
                'meaning' => 'پایین تر بنشیند',
            ],
            [
                'language_id' => 1,
                'word' => 'settlement',
                'meaning' => 'تسویه حساب',
            ],
            [
                'language_id' => 1,
                'word' => 'buckle',
                'meaning' => 'دست و پنجه نرم کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'offshore',
                'meaning' => 'فراساحلی',
            ],
            [
                'language_id' => 1,
                'word' => 'shifted',
                'meaning' => 'جابجا شد',
            ],
            [
                'language_id' => 1,
                'word' => 'alluvial',
                'meaning' => 'آبرفتی',
            ],
            [
                'language_id' => 1,
                'word' => 'silt',
                'meaning' => 'گل و لای',
            ],
            [
                'language_id' => 1,
                'word' => 'mud',
                'meaning' => 'گل و لای',
            ],
            [
                'language_id' => 1,
                'word' => 'firm',
                'meaning' => 'محکم',
            ],
            [
                'language_id' => 1,
                'word' => 'glacial',
                'meaning' => 'یخبندان',
            ],
            [
                'language_id' => 1,
                'word' => 'thick',
                'meaning' => 'ضخیم',
            ],
            [
                'language_id' => 1,
                'word' => 'inevitable',
                'meaning' => 'اجتناب ناپذیر',
            ],
            [
                'language_id' => 1,
                'word' => 'landfill',
                'meaning' => 'دفن زباله',
            ],
            [
                'language_id' => 1,
                'word' => 'pillars',
                'meaning' => 'ستون ها',
            ],
            [
                'language_id' => 1,
                'word' => 'jacked up',
                'meaning' => 'جک زده',
            ],
            [
                'language_id' => 1,
                'word' => 'wedges',
                'meaning' => 'عروس',
            ],
            [
                'language_id' => 1,
                'word' => 'outcrop',
                'meaning' => 'برون زد',
            ],
            [
                'language_id' => 1,
                'word' => 'granite',
                'meaning' => 'گرانیت',
            ],
            [
                'language_id' => 1,
                'word' => 'reclamation',
                'meaning' => 'احیا',
            ],
            [
                'language_id' => 1,
                'word' => 'consortium',
                'meaning' => 'کنسرسیوم',
            ],
            [
                'language_id' => 1,
                'word' => 'opted',
                'meaning' => 'انتخاب کرد',
            ],
            [
                'language_id' => 1,
                'word' => 'dredgers',
                'meaning' => 'لایروبی',
            ],
            [
                'language_id' => 1,
                'word' => 'clay',
                'meaning' => 'خاک رس',
            ],
            [
                'language_id' => 1,
                'word' => 'stiff',
                'meaning' => 'سفت',
            ],
            [
                'language_id' => 1,
                'word' => 'bare',
                'meaning' => 'برهنه',
            ],
            [
                'language_id' => 1,
                'word' => 'blasted',
                'meaning' => 'منفجر شده',
            ],
            [
                'language_id' => 1,
                'word' => 'boulders',
                'meaning' => 'تخته سنگ',
            ],
            [
                'language_id' => 1,
                'word' => 'trenches',
                'meaning' => 'سنگرها',
            ],
            [
                'language_id' => 1,
                'word' => 'unyielding',
                'meaning' => 'تسلیم ناپذیر',
            ],
            [
                'language_id' => 1,
                'word' => 'overloads',
                'meaning' => 'اضافه بارها',
            ],
            [
                'language_id' => 1,
                'word' => 'motorway',
                'meaning' => 'بزرگراه',
            ],
            [
                'language_id' => 1,
                'word' => 'coastline',
                'meaning' => 'خط ساحلی',
            ],
            [
                'language_id' => 1,
                'word' => 'bolstered',
                'meaning' => 'تقویت شده',
            ],
            [
                'language_id' => 1,
                'word' => 'formidable',
                'meaning' => 'مهیب',
            ],
            [
                'language_id' => 1,
                'word' => 'brunt',
                'meaning' => 'ضربه',
            ],
            [
                'language_id' => 1,
                'word' => 'typhoon',
                'meaning' => 'طوفان',
            ],
            [
                'language_id' => 1,
                'word' => 'deflected',
                'meaning' => 'منحرف شده',
            ],
            [
                'language_id' => 1,
                'word' => 'mat-like',
                'meaning' => 'حصیرمانند',
            ],
            [
                'language_id' => 1,
                'word' => 'inductive',
                'meaning' => 'استقرایی',
            ],
            [
                'language_id' => 1,
                'word' => 'notions',
                'meaning' => 'مفاهیم',
            ],
            [
                'language_id' => 1,
                'word' => 'sanitation',
                'meaning' => 'سرویس بهداشتی',
            ],
            [
                'language_id' => 1,
                'word' => 'merely',
                'meaning' => 'صرفا',
            ],
            [
                'language_id' => 1,
                'word' => 'holistically',
                'meaning' => 'به طور کل نگر',
            ],
            [
                'language_id' => 1,
                'word' => 'underemployment',
                'meaning' => 'کم کاری',
            ],
            [
                'language_id' => 1,
                'word' => 'swing',
                'meaning' => 'تاب',
            ],
            [
                'language_id' => 1,
                'word' => 'socio-ecological',
                'meaning' => 'اجتماعی اکولوژیکی',
            ],
            [
                'language_id' => 1,
                'word' => 'endorsed',
                'meaning' => 'تایید شده است',
            ],
            [
                'language_id' => 1,
                'word' => 'shelter',
                'meaning' => 'پناهگاه',
            ],
            [
                'language_id' => 1,
                'word' => 'viable',
                'meaning' => 'قابل دوام',
            ],
            [
                'language_id' => 1,
                'word' => 'stable',
                'meaning' => 'پایدار',
            ],
            [
                'language_id' => 1,
                'word' => 'sustainable',
                'meaning' => 'پایدار',
            ],
            [
                'language_id' => 1,
                'word' => 'urbanisation',
                'meaning' => 'شهرنشین',
            ],
            [
                'language_id' => 1,
                'word' => 'depletion',
                'meaning' => 'تهی شدن',
            ],
            [
                'language_id' => 1,
                'word' => 'alientation',
                'meaning' => 'بیگانگی',
            ],
            [
                'language_id' => 1,
                'word' => 'interdependent',
                'meaning' => 'وابسته به هم',
            ],
            [
                'language_id' => 1,
                'word' => 'interrelationships',
                'meaning' => 'روابط متقابل',
            ],
            [
                'language_id' => 1,
                'word' => 'charter',
                'meaning' => 'منشور',
            ],
            [
                'language_id' => 1,
                'word' => 'behavioural',
                'meaning' => 'رفتاری',
            ],
            [
                'language_id' => 1,
                'word' => 'awareness',
                'meaning' => 'آگاه کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'provision',
                'meaning' => 'تامین',
            ],
            [
                'language_id' => 1,
                'word' => 'adequate',
                'meaning' => 'کافی',
            ],
            [
                'language_id' => 1,
                'word' => 'governing',
                'meaning' => 'حاکم',
            ],
            [
                'language_id' => 1,
                'word' => 'ventures',
                'meaning' => 'سرمایه گذاری',
            ],
            [
                'language_id' => 1,
                'word' => 'accommodations',
                'meaning' => 'محل اقامت',
            ],
            [
                'language_id' => 1,
                'word' => 'beverage',
                'meaning' => 'نوشیدنی',
            ],
            [
                'language_id' => 1,
                'word' => 'suburbs',
                'meaning' => 'حومه شهر',
            ],
            [
                'language_id' => 1,
                'word' => 'chain',
                'meaning' => 'زنجیر',
            ],
            [
                'language_id' => 1,
                'word' => 'labour-cost',
                'meaning' => 'هزینه کار',
            ],
            [
                'language_id' => 1,
                'word' => 'initiatives',
                'meaning' => 'ابتکارات',
            ],
            [
                'language_id' => 1,
                'word' => 'implications',
                'meaning' => 'مفاهیم',
            ],
            [
                'language_id' => 1,
                'word' => 'recruits',
                'meaning' => 'استخدام',
            ],
            [
                'language_id' => 1,
                'word' => 'perceived',
                'meaning' => 'درک شده',
            ],
            [
                'language_id' => 1,
                'word' => 'prospective',
                'meaning' => 'آینده نگر',
            ],
            [
                'language_id' => 1,
                'word' => 'criteria',
                'meaning' => 'معیارها',
            ],
            [
                'language_id' => 1,
                'word' => 'proportion',
                'meaning' => 'نسبت',
            ],
            [
                'language_id' => 1,
                'word' => 'quantitative',
                'meaning' => 'کمی',
            ],
            [
                'language_id' => 1,
                'word' => 'whilst',
                'meaning' => 'در حالیکه',
            ],
            [
                'language_id' => 1,
                'word' => 'overseas',
                'meaning' => 'خارج از کشور',
            ],
            [
                'language_id' => 1,
                'word' => 'sought',
                'meaning' => 'جستجو کرد',
            ],
            [
                'language_id' => 1,
                'word' => 'feasibility',
                'meaning' => 'امکان سنجی',
            ],
            [
                'language_id' => 1,
                'word' => 'enactment',
                'meaning' => 'تصویب',
            ],
            [
                'language_id' => 1,
                'word' => 'disordered',
                'meaning' => 'آشفته',
            ],
            [
                'language_id' => 1,
                'word' => 'halt',
                'meaning' => 'توقف',
            ],
            [
                'language_id' => 1,
                'word' => 'stance',
                'meaning' => 'موضع گیری',
            ],
            [
                'language_id' => 1,
                'word' => 'compliance',
                'meaning' => 'انطباق',
            ],
            [
                'language_id' => 1,
                'word' => 'mighty',
                'meaning' => 'توانا',
            ],
            [
                'language_id' => 1,
                'word' => 'tea',
                'meaning' => 'چای',
            ],
            [
                'language_id' => 1,
                'word' => 'obscure',
                'meaning' => 'مبهم',
            ],
            [
                'language_id' => 1,
                'word' => 'presence',
                'meaning' => 'حضور',
            ],
            [
                'language_id' => 1,
                'word' => 'compromised',
                'meaning' => 'به خطر افتاد',
            ],
            [
                'language_id' => 1,
                'word' => 'procrastination',
                'meaning' => 'به تعویق انداختن',
            ],
            [
                'language_id' => 1,
                'word' => 'excitement',
                'meaning' => 'هیجان',
            ],
            [
                'language_id' => 1,
                'word' => 'rebellious',
                'meaning' => 'سرکش',
            ],
            [
                'language_id' => 1,
                'word' => 'immature',
                'meaning' => 'نابالغ',
            ],
            [
                'language_id' => 1,
                'word' => 'diverged',
                'meaning' => 'واگرا شد',
                'meaning_en' => 'separate from another route',
            ],
            [
                'language_id' => 1,
                'word' => 'citation',
                'meaning' => 'نقل قول',
            ],
            [
                'language_id' => 1,
                'word' => 'reconcile',
                'meaning' => 'آشتی دادن',
            ],
            [
                'language_id' => 1,
                'word' => 'pale',
                'meaning' => 'رنگ پریده',
            ],
            [
                'language_id' => 1,
                'word' => 'recitation',
                'meaning' => 'تلاوت',
            ],
            [
                'language_id' => 1,
                'word' => 'permitted',
                'meaning' => 'مجاز است',
            ],
            [
                'language_id' => 1,
                'word' => 'rage',
                'meaning' => 'خشم',
            ],
            [
                'language_id' => 1,
                'word' => 'souvenir',
                'meaning' => 'سوغات',
            ],
            [
                'language_id' => 1,
                'word' => 'parsley',
                'meaning' => 'تجزیه',
            ],
            [
                'language_id' => 1,
                'word' => 'herbs',
                'meaning' => 'گیاهان',
            ],
            [
                'language_id' => 1,
                'word' => 'leafy',
                'meaning' => 'برگی',
            ],
            [
                'language_id' => 1,
                'word' => 'resort',
                'meaning' => 'توسل',
            ],
            [
                'language_id' => 1,
                'word' => 'overdue',
                'meaning' => 'عقب افتاد',
            ],
            [
                'language_id' => 1,
                'word' => 'vigor',
                'meaning' => 'قدرت',
            ],
            [
                'language_id' => 1,
                'word' => 'yearn',
                'meaning' => 'مشتاق',
            ],
            [
                'language_id' => 1,
                'word' => 'lament',
                'meaning' => 'ناله',
            ],
            [
                'language_id' => 1,
                'word' => 'fierce',
                'meaning' => 'شدید',
            ],
            [
                'language_id' => 1,
                'word' => 'sirens',
                'meaning' => 'آژیرها',
            ],
            [
                'language_id' => 1,
                'word' => 'restrict',
                'meaning' => 'محدود کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'crispy',
                'meaning' => 'تردد',
            ],
            [
                'language_id' => 1,
                'word' => 'crab',
                'meaning' => 'خرچنگ',
            ],
            [
                'language_id' => 1,
                'word' => 'squid',
                'meaning' => 'ماهی مرکب',
            ],
            [
                'language_id' => 1,
                'word' => 'peaky',
                'meaning' => 'اوج',
            ],
            [
                'language_id' => 1,
                'word' => 'apparatus',
                'meaning' => 'دستگاه',
            ],
            [
                'language_id' => 1,
                'word' => 'arsenal',
                'meaning' => 'زرادخانه',
            ],
            [
                'language_id' => 1,
                'word' => 'respiratory',
                'meaning' => 'مشکلات تنفسی',
            ],
            [
                'language_id' => 1,
                'word' => 'exposure',
                'meaning' => 'قرارگرفتن در معرض بیماری',
            ],
            [
                'language_id' => 1,
                'word' => 'extinct',
                'meaning' => 'مقرض شده',
            ],
            [
                'language_id' => 1,
                'word' => 'soared',
                'meaning' => 'اوج گرفت',
            ],
            [
                'language_id' => 1,
                'word' => 'ridership',
                'meaning' => 'سوارکاری',
            ],
            [
                'language_id' => 1,
                'word' => 'novelty',
                'meaning' => 'تازگی',
            ],
            [
                'language_id' => 1,
                'word' => 'asap',
                'meaning' => 'در اسرع وقت',
            ],
            [
                'language_id' => 1,
                'word' => 'accomplice',
                'meaning' => 'همدست',
            ],
            [
                'language_id' => 1,
                'word' => 'savage',
                'meaning' => 'وحشی',
            ],
            [
                'language_id' => 1,
                'word' => 'euphoria',
                'meaning' => 'سرخوشی',
            ],
            [
                'language_id' => 1,
                'word' => 'cravings',
                'meaning' => 'هوس ها',
            ],
            [
                'language_id' => 1,
                'word' => 'euphoria',
                'meaning' => 'سرخوشی',
            ],
            [
                'language_id' => 1,
                'word' => 'absorb',
                'meaning' => 'جذب میکند',
            ],
            [
                'language_id' => 1,
                'word' => 'clutter',
                'meaning' => 'بهم ریختگی',
            ],
            [
                'language_id' => 1,
                'word' => 'shared characteristic',
                'meaning' => 'ویژگی های مشترک',
            ],
            [
                'language_id' => 1,
                'word' => 'flaw',
                'meaning' => 'نقص',
            ],
            [
                'language_id' => 1,
                'word' => 'voyager',
                'meaning' => 'مسافر',
            ],
            [
                'language_id' => 1,
                'word' => 'rigorous',
                'meaning' => 'سختگیرانه',
            ],
            [
                'language_id' => 1,
                'word' => 'ward',
                'meaning' => 'بخش',
            ],
            [
                'language_id' => 1,
                'word' => 'neonantal',
                'meaning' => 'نوزاد',
            ],
            [
                'language_id' => 1,
                'word' => 'vital',
                'meaning' => 'حیاتی',
            ],
            [
                'language_id' => 1,
                'word' => 'symbiotic',
                'meaning' => 'همزیستی',
            ],
            [
                'language_id' => 1,
                'word' => 'mutually',
                'meaning' => 'متقابل',
            ],
            [
                'language_id' => 1,
                'word' => 'beneficial',
                'meaning' => 'سودمند',
            ],
            [
                'language_id' => 1,
                'word' => 'destructive',
                'meaning' => 'مخرب',
            ],
            [
                'language_id' => 1,
                'word' => 'unravelling',
                'meaning' => 'گره گشایی',
            ],
            [
                'language_id' => 1,
                'word' => 'combat',
                'meaning' => 'مبارزه',
            ],
            [
                'language_id' => 1,
                'word' => 'obesity',
                'meaning' => 'چاقی',
            ],
            [
                'language_id' => 1,
                'word' => 'hygiene',
                'meaning' => 'بهداشت',
            ],
            [
                'language_id' => 1,
                'word' => 'obsession',
                'meaning' => 'وسواس',
            ],
            [
                'language_id' => 1,
                'word' => 'disrupting',
                'meaning' => 'مختل کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'inflammatory',
                'meaning' => 'التهابی',
            ],
            [
                'language_id' => 1,
                'word' => 'bowel',
                'meaning' => 'روده',
            ],
            [
                'language_id' => 1,
                'word' => 'excessive',
                'meaning' => 'بیش از حد',
            ],
            [
                'language_id' => 1,
                'word' => 'detergents',
                'meaning' => 'مواد شوینده',
            ],
            [
                'language_id' => 2,
                'word' => 'alphabetisch',
                'meaning' => 'الفبایی',
            ],
            [
                'language_id' => 2,
                'word' => 'worter',
                'meaning' => 'words',
            ],
            [
                'language_id' => 2,
                'word' => 'schach',
                'meaning' => 'chess',
            ],
            [
                'language_id' => 2,
                'word' => 'ausweis',
                'meaning' => 'identity',
            ],
            [
                'language_id' => 1,
                'word' => 'swelled head',
                'meaning' => 'باد داشتن کله',
            ],
            [
                'language_id' => 2,
                'word' => 'neue',
                'meaning' => 'new',
            ],
            [
                'language_id' => 2,
                'word' => 'gruppen',
                'meaning' => 'groups',
            ],
            [
                'language_id' => 2,
                'word' => 'vokabeln',
                'meaning' => 'vocabulary',
            ],
            [
                'language_id' => 1,
                'word' => 'confidential',
                'meaning_en' => 'intended to be kept secret',
            ],
            [
                'language_id' => 1,
                'word' => 'expansive',
                'meaning_en' => 'convering wide area',
            ],
            [
                'language_id' => 1,
                'word' => 'dermatalogist',
                'meaning_en' => 'a medical practitioner concentrate on specializing in the diagnosis and treatment of skin disorders',
            ],
            [
                'language_id' => 1,
                'word' => 'diagnosis',
                'meaning_en' => 'identification of nature of an illness or other problem by examination of the symptoms',
            ],
            [
                'language_id' => 1,
                'word' => 'inflection',
                'meaning_en' => 'change in the form of a word to express a function',
            ],
            [
                'language_id' => 1,
                'word' => 'hustle',
                'meaning_en' => 'push roughly',
                'meaning' => 'تنه زدن'
            ],
            [
                'language_id' => 1,
                'word' => 'jostle',
                'meaning_en' => 'push',
            ],
            [
                'language_id' => 1,
                'word' => 'bait',
                'meaning_en' => 'foold placed on a book or in a net or trap or fishing area to entice fish',
            ],
            [
                'language_id' => 1,
                'word' => 'entice',
                'meaning_en' => 'attract',
            ],
            [
                'language_id' => 1,
                'word' => 'deception',
                'meaning' => 'فریبکاری',
            ],
            [
                'language_id' => 1,
                'word' => 'swelled',
                'meaning' => 'برجستگی',
            ],
            [
                'language_id' => 1,
                'word' => 'cadence',
                'meaning_en' => 'a modulation or inflection of the voice',
            ],
            [
                'language_id' => 1,
                'word' => 'hoax',
                'meaning' => 'دست انداختن',
            ],
            [
                'language_id' => 1,
                'word' => 'sting',
                'meaning' => 'نیش',
            ],
            [
                'language_id' => 1,
                'word' => 'practitioner',
                'meaning_en' => 'a person actively engaged in art or etc',
            ],
            [
                'language_id' => 1,
                'word' => 'stink',
                'meaning_en' => 'have a strong unpleasant smell',
            ],
            [
                'language_id' => 1,
                'word' => 'destructive',
                'meaning_en' => 'causing great and irreparable damage',
                'meaning' => 'ویرانگر'
            ],
            [
                'language_id' => 1,
                'word' => 'blast',
                'meaning_en' => 'destructive wave of highly compressed air spreading outwards from an explosion',
            ],
            [
                'language_id' => 1,
                'word' => 'irreparable',
                'meaning_en' => 'impossible to rectify',
            ],
            [
                'language_id' => 1,
                'word' => 'rectify',
                'meaning' => 'سامان بخشیدن',
            ],
            [
                'language_id' => 1,
                'word' => 'knuckle',
                'meaning' => 'بندانگشت',
                'meaning_en' => 'a part of finger at a joing where the bone is near the surface specially when the finger joins the hand'
            ],
            [
                'language_id' => 1,
                'word' => 'fists',
                'meaning_en' => 'a persons hand when the fingers are bent in towards the palm and held there tightly specially in order to strike or grasp sth',
            ],
            [
                'language_id' => 1,
                'word' => 'spar-of-the-moment',
                'meaning_en' => 'done without planning',
            ],
            [
                'language_id' => 1,
                'word' => 'mould',
                'meaning' => 'قالب گیری کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'potion',
                'meaning' => 'جرعه',
            ],
            [
                'language_id' => 1,
                'word' => 'nest',
                'meaning' => 'لانه',
            ],
            [
                'language_id' => 1,
                'word' => 'exotic',
                'meaning' => 'بیگانه',
            ],
            [
                'language_id' => 1,
                'word' => 'contradicted',
                'meaning' => 'مخالفت کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'contamination',
                'meaning' => 'آلودگی',
            ],
            [
                'language_id' => 1,
                'word' => 'onward',
                'meaning' => 'رو به جلو',
            ],
            [
                'language_id' => 1,
                'word' => 'accuse',
                'meaning_en' => 'charge someone of sth',
            ],
            [
                'language_id' => 1,
                'word' => 'innocuous',
                'meaning_en' => 'not harmful',
            ],
            [
                'language_id' => 1,
                'word' => 'nocturnal',
                'meaning_en' => 'done or occurring or active at night',
            ],
            [
                'language_id' => 1,
                'word' => 'prudent',
                'meaning_en' => 'acting with or showing care and thought for the future',
            ],
            [
                'language_id' => 1,
                'word' => 'hoof',
                'meaning_en' => 'kick (a ball) powerfully',
            ],
            [
                'language_id' => 1,
                'word' => 'herd',
                'meaning_en' => 'a large group of animals, especially hoofed mammals, that live together or are kept together as livestock',
            ],
            [
                'language_id' => 1,
                'word' => 'divo',
                'meaning_en' => 'highly distinguished',
            ],
            [
                'language_id' => 1,
                'word' => 'immense',
                'meaning_en' => 'extremely large',
            ],
            [
                'language_id' => 1,
                'word' => 'cleanse',
                'meaning' => 'پاکساری کردن',
                'meaning_en' => 'make thoroughly clean'
            ],
            [
                'language_id' => 1,
                'word' => 'sentient',
                'meaning_en' => 'able to perceive things',
            ],
            [
                'language_id' => 1,
                'word' => 'contamination',
                'meaning_en' => 'action of making impure',
            ],
            [
                'language_id' => 1,
                'word' => 'hallucination',
                'meaning_en' => 'an experience involving the apparent perception of sth',
            ],
            [
                'language_id' => 1,
                'word' => 'legitimately',
                'meaning' => 'پیروی کردن',
                'meaning_en' => 'in a way that confronts the law',
            ],
            [
                'language_id' => 1,
                'word' => 'unsettled territory',
                'meaning_en' => 'feeling nervous',
            ],
            [
                'language_id' => 1,
                'word' => 'tremble',
                'meaning_en' => 'shake involuntarily',
            ],
            [
                'language_id' => 1,
                'word' => 'cite',
                'meaning_en' => 'refer to',
            ],
            [
                'language_id' => 1,
                'word' => 'dettered',
                'meaning_en' => 'discourage someone from doing sth',
            ],
            [
                'language_id' => 1,
                'word' => 'peers',
                'meaning_en' => 'one that is equal of sth',
            ],
            [
                'language_id' => 1,
                'word' => 'intermediary',
                'meaning_en' => 'a person who acts as a link',
            ],
            [
                'language_id' => 1,
                'word' => 'syntactic',
                'meaning_en' => 'of or according to syntax',
            ],
            [
                'language_id' => 1,
                'word' => 'discrepancy',
                'meaning_en' => 'an illogical or suprising lack of compatibility',
            ],
            [
                'language_id' => 1,
                'word' => 'illogical',
                'meaning_en' => 'lacking sense',
            ],
            [
                'language_id' => 1,
                'word' => 'nuance',
                'meaning_en' => 'a subtle difference in meaning, expression or sound',
            ],
            [
                'language_id' => 1,
                'word' => 'dialect',
                'meaning_en' => 'particular from of a language which is peculiar to specific region or special group',
            ],
            [
                'language_id' => 1,
                'word' => 'peculiar',
                'meaning_en' => 'to specific region or special group',
            ],
            [
                'language_id' => 1,
                'word' => 'semantic',
                'meaning_en' => 'relating to meaning in language or logic',
            ],
            [
                'language_id' => 1,
                'word' => 'polarity',
                'meaning_en' => 'the property of having poles',
            ],
            [
                'language_id' => 1,
                'word' => 'pole',
                'meaning_en' => 'long slender rounded piece of wood',
            ],
            [
                'language_id' => 1,
                'word' => 'slender',
                'meaning_en' => 'thin',
            ],
            [
                'language_id' => 1,
                'word' => 'yap',
                'meaning_en' => 'give sharp, shrill bark',
            ],
            [
                'language_id' => 1,
                'word' => 'shrill',
                'meaning_en' => 'high pitched and piercing',
            ],
            [
                'language_id' => 1,
                'word' => 'piercing',
                'meaning_en' => 'having or showing shrewdness or keen intelligence',
            ],
            [
                'language_id' => 1,
                'word' => 'shrewdness',
                'meaning_en' => 'the quality of having or showing good powers of judgement',
            ],
            [
                'language_id' => 1,
                'word' => 'orgy',
                'meaning_en' => 'wild party',
            ],
            [
                'language_id' => 1,
                'word' => 'forcibly',
                'meaning_en' => 'به زور',
            ],
            [
                'language_id' => 1,
                'word' => 'occupied',
                'meaning' => 'اشغال شده',
            ],
            [
                'language_id' => 1,
                'word' => 'displaced',
                'meaning' => 'آواره',
            ],
            [
                'language_id' => 1,
                'word' => 'shrinking',
                'meaning' => 'کوچک شدن',
            ],
            [
                'language_id' => 1,
                'word' => 'deliberately',
                'meaning' => 'عمدا',
            ],
            [
                'language_id' => 1,
                'word' => 'soothing',
                'meaning_en' => 'having greatly calming effect',
            ],
            [
                'language_id' => 1,
                'word' => 'inhuman',
                'meaning' => 'غیر انسانی',
            ],
            [
                'language_id' => 1,
                'word' => 'imposing',
                'meaning' => 'تحمیل کننده',
            ],
            [
                'language_id' => 1,
                'word' => 'pillars',
                'meaning_en' => 'a tall vertical structure of stone or metal used as a support for a building barebones',
            ],
            [
                'language_id' => 1,
                'word' => 'vividly',
                'meaning_en' => 'in a way that produces powerful feelings or strong clear images in the mind',
            ],
            [
                'language_id' => 1,
                'word' => 'thrive',
                'meaning_en' => 'grow or develop well or vigorously',
            ],
            [
                'language_id' => 1,
                'word' => 'vigorously',
                'meaning_en' => 'in a way that involves physical strength',
            ],
            [
                'language_id' => 1,
                'word' => 'concise',
                'meaning_en' => 'giving a lot of information shortly and clearly',
            ],
            [
                'language_id' => 1,
                'word' => 'inclusion',
                'meaning_en' => 'the action or state of including or being included within a group',
            ],
            [
                'language_id' => 1,
                'word' => 'consent',
                'meaning_en' => 'permission for sth to happen',
            ],
            [
                'language_id' => 1,
                'word' => 'grudge',
                'meaning_en' => 'a persistent feeling or ill will or resentment resulting from a past insult or injury',
            ],
            [
                'language_id' => 1,
                'word' => 'mortem',
                'meaning_en' => 'death',
            ],
            [
                'language_id' => 1,
                'word' => 'maneauver',
                'meaning_en' => 'a movement or series of moves requiring skills',
            ],
            [
                'language_id' => 1,
                'word' => 'gravitational',
                'meaning_en' => 'relating to a movement toward a center of gravity to an assembled group of people',
            ],
            [
                'language_id' => 1,
                'word' => 'sermon',
                'meaning_en' => 'a talk on religious subjects',
            ],
            [
                'language_id' => 1,
                'word' => 'metamorphosis',
                'meaning_en' => 'biological process of transformation',
            ],
            [
                'language_id' => 1,
                'word' => 'incentive',
                'meaning_en' => 'anything that motivates or encourages someone to perform a certain action in a specific behavior or acting as a reward or stimulus',
            ],
            [
                'language_id' => 1,
                'word' => 'stimulus',
                'meaning_en' => 'in economics refers to attempts to use monetary policy to stimulate the economy',
            ],
            [
                'language_id' => 1,
                'word' => 'monetary',
                'meaning_en' => 'relating to money',
            ],
            [
                'language_id' => 1,
                'word' => 'doctrine',
                'meaning_en' => 'a belief held and taught by church',
            ],
            [
                'language_id' => 1,
                'word' => 'restraint',
                'meaning_en' => 'sth that limits freedom of movement or action or growth',
            ],
            [
                'language_id' => 1,
                'word' => 'absorb',
                'meaning_en' => 'talk in or soak up by action',
            ],
            [
                'language_id' => 1,
                'word' => 'resentment',
                'meaning_en' => 'complex emotion involves anger and bitterness and disappointment',
            ],
            [
                'language_id' => 1,
                'word' => 'undiluted',
                'meaning_en' => 'not diluted',
            ],
            [
                'language_id' => 1,
                'word' => 'diluted',
                'meaning_en' => 'weakened by the addition of water or another solvent',
            ],
            [
                'language_id' => 1,
                'word' => 'solvent',
                'meaning_en' => 'having assets in excess of liabilities',
            ],
            [
                'language_id' => 1,
                'word' => 'cocoon',
                'meaning_en' => 'protective use of span',
            ],
            [
                'language_id' => 1,
                'word' => 'gazelle',
                'meaning' => 'گوزن',
            ],
            [
                'language_id' => 1,
                'word' => 'hyena',
                'meaning' => 'کفتار',
            ],
            [
                'language_id' => 1,
                'word' => 'scrap',
                'meaning_en' => 'small piece or amount of sth specially one that is leftover after the greater part has been used',
            ],
            [
                'language_id' => 1,
                'word' => 'scribbled',
                'meaning_en' => 'written or draw carelessly',
            ],
            [
                'language_id' => 1,
                'word' => 'certainty',
                'meaning' => 'یقین',
            ],
            [
                'language_id' => 1,
                'word' => 'dethrone',
                'meaning_en' => 'remove from power',
            ],
            [
                'language_id' => 1,
                'word' => 'wield',
                'meaning_en' => 'hold and use weapon',
            ],
            [
                'language_id' => 1,
                'word' => 'subsidiary',
                'meaning_en' => 'less important than but related',
            ],
            [
                'language_id' => 1,
                'word' => 'fortify',
                'meaning_en' => 'provide with defensive works',
            ],
            [
                'language_id' => 1,
                'word' => 'sneak away',
                'meaning_en' => 'leave secretly',
            ],
            [
                'language_id' => 1,
                'word' => 'glance',
                'meaning_en' => 'take a brief',
            ],
            [
                'language_id' => 1,
                'word' => 'foes',
                'meaning_en' => 'enemies',
            ],
            [
                'language_id' => 1,
                'word' => 'detour',
                'meaning_en' => 'long or roundabaout route',
                'meaning' => 'میانبر'
            ],
            [
                'language_id' => 1,
                'word' => 'midst',
                'meaning_en' => 'the middle part',
            ],
            [
                'language_id' => 1,
                'word' => 'fellow',
                'meaning_en' => 'a man or a boy',
            ],
            [
                'language_id' => 1,
                'word' => 'coefficient',
                'meaning' => 'ضریب',
            ],
            [
                'language_id' => 1,
                'word' => 'soluble',
                'meaning_en' => 'able to dissolved in water',
            ],
            [
                'language_id' => 1,
                'word' => 'longevity',
                'meaning_en' => 'long life',
            ],
            [
                'language_id' => 1,
                'word' => 'polarize',
                'meaning_en' => 'restrict vibrations of wholly',
            ],
            [
                'language_id' => 1,
                'word' => 'gaslit',
                'meaning' => 'شعله ور',
            ],
            [
                'language_id' => 1,
                'word' => 'flicker',
                'meaning_en' => 'shine unsteadily',
            ],
            [
                'language_id' => 1,
                'word' => 'infrasound',
                'meaning' => 'low frequency sounds',
            ],
            [
                'language_id' => 1,
                'word' => 'strobe',
                'meaning' => 'an electric flash for cinema',
            ],
            [
                'language_id' => 1,
                'word' => 'contrastive',
                'meaning' => 'showing difference between things when comparing',
            ],
            [
                'language_id' => 1,
                'word' => 'debunking',
                'meaning' => 'رد کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'straddle',
                'meaning_en' => 'sit or stand with one leg on side',
                'meaning' => 'میان دوپا قرار دادن',
            ],
            [
                'language_id' => 1,
                'word' => 'hoax',
                'meaning' => 'شوخی خرکی',
            ],
            [
                'language_id' => 2,
                'word' => 'vonstellung',
                'meaning' => 'معرفی کردن',
            ],
            [
                'language_id' => 2,
                'word' => 'formell',
                'meaning' => 'formal',
            ],
            [
                'language_id' => 2,
                'word' => 'informell',
                'meaning' => 'informal',
            ],
            [
                'language_id' => 2,
                'word' => 'unterschrift',
                'meaning' => 'signature',
            ],
            [
                'language_id' => 2,
                'word' => 'auch',
                'meaning' => 'also',
            ],
            [
                'language_id' => 2,
                'word' => 'stamm',
                'meaning' => 'ریشه فعل',
            ],
            [
                'language_id' => 2,
                'word' => 'namen',
                'meaning' => 'اسم آدم ها',
            ],
            [
                'language_id' => 2,
                'word' => 'nomen',
                'meaning' => 'اسم اشیا، مکان ها',
            ],
            [
                'language_id' => 2,
                'word' => 'satzanfang',
                'meaning' => 'شروع جمله',
            ],
            [
                'language_id' => 2,
                'word' => 'fragen',
                'meaning' => 'questions',
            ],
            [
                'language_id' => 2,
                'word' => 'dann',
                'meaning' => 'then',
            ],
            [
                'language_id' => 2,
                'word' => 'aussprache',
                'meaning' => 'pronunciation',
            ],
            [
                'language_id' => 2,
                'word' => 'heft',
                'meaning' => 'notebook',
            ],
            [
                'language_id' => 2,
                'word' => 'jeder',
                'meaning' => 'everyone',
            ],
            [
                'language_id' => 2,
                'word' => 'steht',
                'meaning' => 'stands',
            ],
            [
                'language_id' => 2,
                'word' => 'internetseite',
                'meaning' => 'website',
            ],
            [
                'language_id' => 2,
                'word' => 'uber',
                'meaning' => 'در مورد',
            ],
            [
                'language_id' => 2,
                'word' => 'lander',
                'meaning' => 'کشورها',
            ],
            [
                'language_id' => 2,
                'word' => 'trainer',
                'meaning' => 'coach',
            ],
            [
                'language_id' => 2,
                'word' => 'vergelichen',
                'meaning' => 'compare',
            ],
            [
                'language_id' => 2,
                'word' => 'zum',
                'meaning' => 'to',
            ],
            [
                'language_id' => 2,
                'word' => 'beispiel',
                'meaning' => 'for example',
            ],
            [
                'language_id' => 2,
                'word' => 'vornamen',
                'meaning' => 'first names',
            ],
            [
                'language_id' => 2,
                'word' => 'reihenfolge',
                'meaning' => 'order',
            ],
            [
                'language_id' => 2,
                'word' => 'jeden',
                'meaning' => 'everyone',
            ],
            [
                'language_id' => 2,
                'word' => 'durch',
                'meaning' => 'through',
            ],
            [
                'language_id' => 2,
                'word' => 'wilkommen',
                'meaning' => 'welcome',
            ],
            [
                'language_id' => 2,
                'word' => 'verben',
                'meaning' => 'verbs',
            ],
            [
                'language_id' => 2,
                'word' => 'kleiner',
                'meaning' => 'smaller',
            ],
            [
                'language_id' => 2,
                'word' => 'halt',
                'meaning' => 'stop',
            ],
            [
                'language_id' => 2,
                'word' => 'hoch',
                'meaning' => 'high',
            ],
            [
                'language_id' => 2,
                'word' => 'liest',
                'meaning' => 'reads',
            ],
            [
                'language_id' => 2,
                'word' => 'da',
                'meaning' => 'there',
            ],
            [
                'language_id' => 2,
                'word' => 'sprachen',
                'meaning' => 'زبان ها',
            ],
            [
                'language_id' => 2,
                'word' => 'diese',
                'meaning' => 'these',
            ],
            [
                'language_id' => 2,
                'word' => 'witchtig',
                'meaning' => 'important',
            ],
            [
                'language_id' => 2,
                'word' => 'lucken',
                'meaning' => 'جای خالی',
            ],
            [
                'language_id' => 2,
                'word' => 'kindergarten',
                'meaning' => 'مهدکودک',
            ],
            [
                'language_id' => 2,
                'word' => 'laut',
                'meaning' => 'loud',
            ],
            [
                'language_id' => 2,
                'word' => 'wohnungen',
                'meaning' => 'apartment',
            ],
            [
                'language_id' => 2,
                'word' => 'klein',
                'meaning' => 'کوچک',
            ],
            [
                'language_id' => 2,
                'word' => 'teuer',
                'meaning' => 'گران',
            ],
            [
                'language_id' => 2,
                'word' => 'Geschäfte',
                'meaning' => 'shops',
            ],
            [
                'language_id' => 2,
                'word' => 'es gibt',
                'meaning' => 'there is',
            ],
            [
                'language_id' => 2,
                'word' => 'kinos',
                'meaning' => 'cinemas',
            ],
            [
                'language_id' => 2,
                'word' => 'einkaufen',
                'meaning' => 'shopping',
            ],
            [
                'language_id' => 2,
                'word' => 'sehen',
                'meaning' => 'see',
            ],
            [
                'language_id' => 2,
                'word' => 'u-bahnist',
                'meaning' => 'subway',
            ],
            [
                'language_id' => 2,
                'word' => 'Straße',
                'meaning' => 'street',
            ],
            [
                'language_id' => 2,
                'word' => 'zentrum',
                'meaning' => 'city center',
            ],
            [
                'language_id' => 2,
                'word' => 'stadtpark',
                'meaning' => 'city park',
            ],
            [
                'language_id' => 2,
                'word' => 'tiergarten',
                'meaning' => 'باغ حیوانات',
            ],
            [
                'language_id' => 2,
                'word' => 'weit',
                'meaning' => 'far',
            ],
            [
                'language_id' => 2,
                'word' => 'rad fahren',
                'meaning' => 'ride a bike',
            ],
            [
                'language_id' => 2,
                'word' => 'skaten',
                'meaning' => 'skate',
            ],
            [
                'language_id' => 2,
                'word' => 'grillen',
                'meaning' => 'barbecue',
            ],
            [
                'language_id' => 2,
                'word' => 'konnen',
                'meaning' => 'can',
            ],
            [
                'language_id' => 2,
                'word' => 'ruhig',
                'meaning' => 'quiet',
            ],
            [
                'language_id' => 2,
                'word' => 'hauser',
                'meaning' => 'houses',
            ],
            [
                'language_id' => 2,
                'word' => 'mieten',
                'meaning' => 'rent',
            ],
            [
                'language_id' => 2,
                'word' => 'kirche',
                'meaning' => 'church',
            ],
            [
                'language_id' => 2,
                'word' => 'weit',
                'meaning' => 'far',
            ],
            [
                'language_id' => 2,
                'word' => 'man',
                'meaning' => 'one',
            ],
            [
                'language_id' => 2,
                'word' => 'oft',
                'meaning' => 'often',
            ],
            [
                'language_id' => 2,
                'word' => 'prapositionen',
                'meaning' => 'prepositions',
            ],
            [
                'language_id' => 2,
                'word' => 'traumort',
                'meaning' => 'جای رویایی',
            ],
            [
                'language_id' => 2,
                'word' => 'schloss',
                'meaning' => 'castle',
            ],
            [
                'language_id' => 2,
                'word' => 'pinnwand',
                'meaning' => 'notice board',
            ],
            [
                'language_id' => 2,
                'word' => 'krank',
                'meaning' => 'sick',
            ],
            [
                'language_id' => 2,
                'word' => 'krankenhaus',
                'meaning' => 'hospital',
            ],
            [
                'language_id' => 2,
                'word' => 'bei',
                'meaning' => 'نزدیک به',
            ],
            [
                'language_id' => 2,
                'word' => 'zimmer',
                'meaning' => 'اتاق ها',
            ],
            [
                'language_id' => 2,
                'word' => 'ganz',
                'meaning' => 'whole',
            ],
            [
                'language_id' => 2,
                'word' => 'garten',
                'meaning' => 'garden',
            ],
            [
                'language_id' => 2,
                'word' => 'manchmal',
                'meaning' => 'sometimes',
            ],
            [
                'language_id' => 2,
                'word' => 'nach',
                'meaning' => 'after',
            ],
            [
                'language_id' => 2,
                'word' => 'gerne',
                'meaning' => 'happily',
            ],
            [
                'language_id' => 2,
                'word' => 'bahnhof',
                'meaning' => 'trainstation',
            ],
            [
                'language_id' => 2,
                'word' => 'groB',
                'meaning' => 'big',
            ],
            [
                'language_id' => 2,
                'word' => 'schule',
                'meaning' => 'school',
            ],
            [
                'language_id' => 2,
                'word' => 'kleindorf',
                'meaning' => 'small village',
            ],
            [
                'language_id' => 2,
                'word' => 'groBdorf',
                'meaning' => 'big village',
            ],
            [
                'language_id' => 2,
                'word' => 'nicht weit',
                'meaning' => 'دور نیست',
            ],
            [
                'language_id' => 2,
                'word' => 'baum',
                'meaning' => 'tree',
            ],
            [
                'language_id' => 2,
                'word' => 'land',
                'meaning' => 'country',
            ],
            [
                'language_id' => 2,
                'word' => 'parkbank',
                'meaning' => 'parkbench',
            ],
            [
                'language_id' => 2,
                'word' => 'texte',
                'meaning' => 'texts',
            ],
            [
                'language_id' => 2,
                'word' => 'dossier',
                'meaning' => 'file',
            ],
            [
                'language_id' => 2,
                'word' => 'menschen',
                'meaning' => 'افراد',
            ],
            [
                'language_id' => 2,
                'word' => 'begruBen',
                'meaning' => 'احوال پرسی',
            ],
            [
                'language_id' => 2,
                'word' => 'mann',
                'meaning' => 'man',
            ],
            [
                'language_id' => 2,
                'word' => 'welcher',
                'meaning' => 'which',
            ],
            [
                'language_id' => 2,
                'word' => 'reihenfolge',
                'meaning' => 'order',
            ],
            [
                'language_id' => 2,
                'word' => 'schalfe',
                'meaning' => 'sleep',
            ],
            [
                'language_id' => 2,
                'word' => 'denn',
                'meaning' => 'because',
            ],
            [
                'language_id' => 2,
                'word' => 'doch',
                'meaning' => 'still',
            ],
            [
                'language_id' => 2,
                'word' => 'buro',
                'meaning' => 'office',
            ],
            [
                'language_id' => 2,
                'word' => 'rechts',
                'meaning' => 'right',
            ],
            [
                'language_id' => 2,
                'word' => 'links',
                'meaning' => 'left',
            ],
            [
                'language_id' => 2,
                'word' => 'hier',
                'meaning' => 'here',
            ],
            [
                'language_id' => 2,
                'word' => 'ihm',
                'meaning' => 'to him',
            ],
            [
                'language_id' => 2,
                'word' => 'couchsurfing',
                'meaning' => 'couchsurfing',
            ],
            [
                'language_id' => 2,
                'word' => 'leben',
                'meaning' => 'life',
            ],
            [
                'language_id' => 2,
                'word' => 'findet',
                'meaning' => 'finds',
            ],
            [
                'language_id' => 2,
                'word' => 'mitte',
                'meaning' => 'مرکز',
            ],
            [
                'language_id' => 2,
                'word' => 'nacht',
                'meaning' => 'night',
            ],
            [
                'language_id' => 2,
                'word' => 'haus',
                'meaning' => 'house',
            ],
            [
                'language_id' => 2,
                'word' => 'toll',
                'meaning' => 'great',
            ],
            [
                'language_id' => 2,
                'word' => 'weiB',
                'meaning' => 'white',
            ],
            [
                'language_id' => 2,
                'word' => 'genau',
                'meaning' => 'exactly',
            ],
            [
                'language_id' => 2,
                'word' => 'dusche',
                'meaning' => 'shower',
            ],
            [
                'language_id' => 2,
                'word' => 'grill',
                'meaning' => 'grill',
            ],
            [
                'language_id' => 2,
                'word' => 'sieh',
                'meaning' => 'see',
            ],
            [
                'language_id' => 2,
                'word' => 'mal',
                'meaning' => 'time',
            ],
            [
                'language_id' => 2,
                'word' => 'medizine',
                'meaning' => 'medicine',
            ],
            [
                'language_id' => 2,
                'word' => 'aussagesatz',
                'meaning' => 'statement',
            ],
            [
                'language_id' => 2,
                'word' => 'uber',
                'meaning' => 'over sentence',
            ],
            [
                'language_id' => 2,
                'word' => 'worterbuch',
                'meaning' => 'dictionary',
            ],
            [
                'language_id' => 2,
                'word' => 'weltweit',
                'meaning' => 'worldwide',
            ],
            [
                'language_id' => 2,
                'word' => 'katze',
                'meaning' => 'cat',
            ],
            [
                'language_id' => 2,
                'word' => 'hund',
                'meaning' => 'dog',
            ],
            [
                'language_id' => 2,
                'word' => 'worter',
                'meaning' => 'کلمات',
            ],
            [
                'language_id' => 2,
                'word' => 'pony',
                'meaning' => 'اسب',
            ],
            [
                'language_id' => 2,
                'word' => 'chef',
                'meaning' => 'مدیر آقا',
            ],
            [
                'language_id' => 2,
                'word' => 'alter',
                'meaning' => 'سن',
            ],
            [
                'language_id' => 2,
                'word' => 'wohnort',
                'meaning' => 'محل زندگی',
            ],
            [
                'language_id' => 2,
                'word' => 'obst',
                'meaning' => 'میوه جات',
            ],
            [
                'language_id' => 2,
                'word' => 'gemuse',
                'meaning' => 'سبزیجات',
            ],
            [
                'language_id' => 2,
                'word' => 'getranke',
                'meaning' => 'نوشیدنی ها',
            ],
            [
                'language_id' => 2,
                'word' => 'milchprodukte',
                'meaning' => 'فرآورده های شیری',
            ],
            [
                'language_id' => 2,
                'word' => 'heft',
                'meaning' => 'دفتر',
            ],
            [
                'language_id' => 2,
                'word' => 'nocheinmal',
                'meaning' => 'یکبار دیگر',
            ],
            [
                'language_id' => 2,
                'word' => 'uberschrift',
                'meaning' => 'heading',
            ],
            [
                'language_id' => 2,
                'word' => 'passt',
                'meaning' => 'مناسب',
            ],
            [
                'language_id' => 2,
                'word' => 'gaste',
                'meaning' => 'guests',
            ],
            [
                'language_id' => 2,
                'word' => 'kochin',
                'meaning' => 'آشپز خانم',
            ],
            [
                'language_id' => 2,
                'word' => 'couchsurfing',
                'meaning' => 'couchsurfing',
            ],
            [
                'language_id' => 2,
                'word' => 'immer',
                'meaning' => 'همیشه',
            ],
            [
                'language_id' => 2,
                'word' => 'kettenspiel',
                'meaning' => 'بازی زنجیری',
            ],
            [
                'language_id' => 2,
                'word' => 'brot',
                'meaning' => 'نون',
            ],
            [
                'language_id' => 2,
                'word' => 'Vegetarier',
                'meaning' => 'vegeterrian',
            ],
            [
                'language_id' => 2,
                'word' => 'nie',
                'meaning' => 'هیچ وقت',
            ],
            [
                'language_id' => 2,
                'word' => 'manchmal',
                'meaning' => 'به ندرت',
            ],
            [
                'language_id' => 2,
                'word' => 'oft',
                'meaning' => 'often',
            ],
            [
                'language_id' => 2,
                'word' => 'brauchen',
                'meaning' => 'نیاز داشتن',
            ],
            [
                'language_id' => 2,
                'word' => 'paprika',
                'meaning' => 'فلفل',
            ],
            [
                'language_id' => 2,
                'word' => 'lila',
                'meaning' => 'بنفش',
            ],
            [
                'language_id' => 2,
                'word' => 'weiB',
                'meaning' => 'سفید',
            ],
            [
                'language_id' => 2,
                'word' => 'rosa',
                'meaning' => 'pink',
            ],
            [
                'language_id' => 2,
                'word' => 'farbe',
                'meaning' => 'رنگ ها',
            ],
            [
                'language_id' => 2,
                'word' => 'andere',
                'meaning' => 'دیگران',
            ],
            [
                'language_id' => 2,
                'word' => 'heute',
                'meaning' => 'امروز',
            ],
            [
                'language_id' => 2,
                'word' => 'preise',
                'meaning' => 'price',
            ],
            [
                'language_id' => 2,
                'word' => 'regenbogens',
                'meaning' => 'رنگین کمان',
            ],
            [
                'language_id' => 2,
                'word' => 'wenig',
                'meaning' => 'کم',
            ],
            [
                'language_id' => 2,
                'word' => 'pommes',
                'meaning' => 'fries',
            ],
            [
                'language_id' => 2,
                'word' => 'einkaufenliste',
                'meaning' => 'لیست خرید',
            ],
            [
                'language_id' => 2,
                'word' => 'mein leben',
                'meaning' => 'زندگی من',
            ],
            [
                'language_id' => 2,
                'word' => 'wichtig',
                'meaning' => 'مهم',
            ],
            [
                'language_id' => 2,
                'word' => 'rentner',
                'meaning' => 'retiree',
            ],
            [
                'language_id' => 2,
                'word' => 'heute',
                'meaning' => 'امروز',
            ],
            [
                'language_id' => 2,
                'word' => 'uhrzeit',
                'meaning' => 'زمان ساعت',
            ],
            [
                'language_id' => 2,
                'word' => 'so spat',
                'meaning' => 'so late',
            ],
            [
                'language_id' => 2,
                'word' => 'schree',
                'meaning' => 'scissors',
            ],
            [
                'language_id' => 2,
                'word' => 'kmam',
                'meaning' => 'kmam',
            ],
            [
                'language_id' => 2,
                'word' => 'burest',
                'meaning' => 'brush',
            ],
            [
                'language_id' => 2,
                'word' => 'langsamer',
                'meaning' => 'slower',
            ],
            [
                'language_id' => 2,
                'word' => 'wirklich',
                'meaning' => 'really',
            ],
            [
                'language_id' => 2,
                'word' => 'zange',
                'meaning' => 'انبار دست',
            ],
            [
                'language_id' => 2,
                'word' => 'schraubenzieher',
                'meaning' => 'پیچ گوشتی',
            ],
            [
                'language_id' => 2,
                'word' => 'wortern',
                'meaning' => 'کلمات',
            ],
            [
                'language_id' => 2,
                'word' => 'bedeuter',
                'meaning' => 'معنی داشتن',
            ],
            [
                'language_id' => 2,
                'word' => 'tarfie',
                'meaning' => 'بسته',
            ],
            [
                'language_id' => 2,
                'word' => 'inklusive',
                'meaning' => 'اختصاصی',
            ],
            [
                'language_id' => 2,
                'word' => 'namen',
                'meaning' => 'اسم آدم ها',
            ],
            [
                'language_id' => 2,
                'word' => 'nomen',
                'meaning' => 'اسم اشیا',
            ],
            [
                'language_id' => 2,
                'word' => 'aussagesatz',
                'meaning' => 'جملات خبری',
            ],
            [
                'language_id' => 2,
                'word' => 'verheiratet',
                'meaning' => 'متاهل',
            ],
            [
                'language_id' => 2,
                'word' => 'verlobt',
                'meaning' => 'نامزد',
            ],
            [
                'language_id' => 2,
                'word' => 'geschieden',
                'meaning' => 'طلاق گرفته',
            ],
            [
                'language_id' => 2,
                'word' => 'witwe',
                'meaning' => 'بیوه',
            ],
            [
                'language_id' => 2,
                'word' => 'mandarine',
                'meaning' => 'نارنگی',
            ],
            [
                'language_id' => 2,
                'word' => 'gurke',
                'meaning' => 'خیار',
            ],
            [
                'language_id' => 2,
                'word' => 'kivi',
                'meaning' => 'کیوی',
            ],
            [
                'language_id' => 2,
                'word' => 'wassermelone',
                'meaning' => 'هندوانه',
            ],
            [
                'language_id' => 2,
                'word' => 'kauchen',
                'meaning' => 'کیک',
            ],
            [
                'language_id' => 2,
                'word' => 'zwiebel',
                'meaning' => 'پیاز',
            ],
            [
                'language_id' => 2,
                'word' => 'preise',
                'meaning' => 'پرسیدن',
            ],
            [
                'language_id' => 2,
                'word' => 'billig',
                'meaning' => 'ارزان',
            ],
            [
                'language_id' => 2,
                'word' => 'kuhl',
                'meaning' => 'خنک',
            ],
            [
                'language_id' => 2,
                'word' => 'Kalt',
                'meaning' => 'سرد',
            ],
            [
                'language_id' => 2,
                'word' => 'vorgestern',
                'meaning' => 'پریروز',
            ],
            [
                'language_id' => 2,
                'word' => 'gestern',
                'meaning' => 'دیروز',
            ],
            [
                'language_id' => 2,
                'word' => 'drucker',
                'meaning' => 'printer',
            ],
            [
                'language_id' => 2,
                'word' => 'berichten',
                'meaning' => 'گزارش',
            ],
            [
                'language_id' => 2,
                'word' => 'nie',
                'meaning' => 'هیچ وقت',
            ],
            [
                'language_id' => 2,
                'word' => 'witzig',
                'meaning' => 'funny',
            ],
            [
                'language_id' => 2,
                'word' => 'ich auch',
                'meaning' => 'me too',
            ],
            [
                'language_id' => 2,
                'word' => 'mude',
                'meaning' => 'tired',
            ],
            [
                'language_id' => 2,
                'word' => 'kalt',
                'meaning' => 'cold',
            ],
            [
                'language_id' => 2,
                'word' => 'warm',
                'meaning' => 'warm',
            ],
            [
                'language_id' => 2,
                'word' => 'schalf schon',
                'meaning' => 'sleep well',
            ],
            [
                'language_id' => 2,
                'word' => 'viele erflog',
                'meaning' => 'best of luck',
            ],
            [
                'language_id' => 2,
                'word' => 'fruh',
                'meaning' => 'early',
            ],
            [
                'language_id' => 2,
                'word' => 'kleid',
                'meaning' => 'dress',
            ],
            [
                'language_id' => 2,
                'word' => 'lachelt',
                'meaning' => 'smiles',
            ],
            [
                'language_id' => 2,
                'word' => 'unordentlich',
                'meaning' => 'messy',
            ],
            [
                'language_id' => 2,
                'word' => 'schrebtisch',
                'meaning' => 'desk',
            ],
            [
                'language_id' => 2,
                'word' => 'verschuttet',
                'meaning' => 'buried',
            ],
            [
                'language_id' => 2,
                'word' => 'raumf auf',
                'meaning' => 'cleans up',
            ],
            [
                'language_id' => 2,
                'word' => 'bericht',
                'meaning' => 'report',
            ],
            [
                'language_id' => 2,
                'word' => 'ruhe',
                'meaning' => 'quite',
            ],
            [
                'language_id' => 2,
                'word' => 'vergisst',
                'meaning' => 'forgets',
            ],
            [
                'language_id' => 2,
                'word' => 'mag es',
                'meaning' => 'likes',
            ],
            [
                'language_id' => 2,
                'word' => 'schaut',
                'meaning' => 'watches',
            ],
            [
                'language_id' => 2,
                'word' => 'fuhlt sich',
                'meaning' => 'feels',
            ],
            [
                'language_id' => 2,
                'word' => 'vermisst',
                'meaning' => 'misses',
            ],
            [
                'language_id' => 2,
                'word' => 'ab',
                'meaning' => 'from',
            ],
            [
                'language_id' => 2,
                'word' => 'aber',
                'meaning' => 'but',
            ],
            [
                'language_id' => 2,
                'word' => 'die abfaht',
                'meaning' => 'departure',
            ],
            [
                'language_id' => 2,
                'word' => 'achtung',
                'meaning' => 'attention',
            ],
            [
                'language_id' => 2,
                'word' => 'alteren',
                'meaning' => 'elders',
            ],
            [
                'language_id' => 2,
                'word' => 'vogel',
                'meaning' => 'bird',
            ],
            [
                'language_id' => 2,
                'word' => 'die Addresse',
                'meaning' => 'the Address',
            ],
            [
                'language_id' => 2,
                'word' => 'alles',
                'meaning' => 'all',
            ],
            [
                'language_id' => 2,
                'word' => 'das Alter',
                'meaning' => 'the age',
            ],
            [
                'language_id' => 2,
                'word' => 'das Angebot',
                'meaning' => 'the offer',
            ],
            [
                'language_id' => 2,
                'word' => 'ander',
                'meaning' => 'another',
            ],
            [
                'language_id' => 2,
                'word' => 'der Afang',
                'meaning' => 'the beginning',
            ],
            [
                'language_id' => 2,
                'word' => 'die Ankuft',
                'meaning' => 'the arrival',
            ],
            [
                'language_id' => 2,
                'word' => 'die Anmeldung',
                'meaning' => 'the registration',
            ],
            [
                'language_id' => 2,
                'word' => 'der Angruf',
                'meaning' => 'the call',
            ],
            [
                'language_id' => 2,
                'word' => 'der Anrufbeantworter',
                'meaning' => 'the answering machine',
            ],
            [
                'language_id' => 2,
                'word' => 'die Ansage',
                'meaning' => 'the announcement',
            ],
            [
                'language_id' => 2,
                'word' => 'der Anschluss',
                'meaning' => 'the connection',
            ],
            [
                'language_id' => 2,
                'word' => 'an sein',
                'meaning' => 'to be on',
            ],
            [
                'language_id' => 2,
                'word' => 'die Antwort',
                'meaning' => 'the answer',
            ],
            [
                'language_id' => 2,
                'word' => 'die Anzeige',
                'meaning' => 'the advertisement',
            ],
            [
                'language_id' => 2,
                'word' => 'das Apartment',
                'meaning' => 'the apartment',
            ],
            [
                'language_id' => 2,
                'word' => 'der Apfel',
                'meaning' => 'the apple',
            ],
            [
                'language_id' => 2,
                'word' => 'der Appetit',
                'meaning' => 'the appetite',
            ],
            [
                'language_id' => 2,
                'word' => 'the arbeit',
                'meaning' => 'the work',
            ],
            [
                'language_id' => 2,
                'word' => 'arbeitslos',
                'meaning' => 'unemployed',
            ],
            [
                'language_id' => 2,
                'word' => 'sprachschule',
                'meaning' => 'آموزشگاه زبان',
            ],
            [
                'language_id' => 2,
                'word' => 'universität',
                'meaning' => 'دانشگاه',
            ],
            [
                'language_id' => 2,
                'word' => 'vorlesung',
                'meaning' => 'سخنرانی دانشگاهی / کلاس نظری',
            ],
            [
                'language_id' => 2,
                'word' => 'seminar',
                'meaning' => 'سمینار',
            ],
            [
                'language_id' => 2,
                'word' => 'dozent',
                'meaning' => 'مدرس دانشگاه',
            ],
            [
                'language_id' => 2,
                'word' => 'hörsaal',
                'meaning' => 'سالن سخنرانی',
            ],
            [
                'language_id' => 2,
                'word' => 'studentenausweis',
                'meaning' => 'کارت دانشجویی',
            ],
            [
                'language_id' => 2,
                'word' => 'abschlussarbeit',
                'meaning' => 'پایان‌نامه',
            ],
            [
                'language_id' => 2,
                'word' => 'prüfungsamt',
                'meaning' => 'دفتر امتحانات',
            ],
            [
                'language_id' => 2,
                'word' => 'fakultät',
                'meaning' => 'دانشکده',
            ],
            [
                'language_id' => 2,
                'word' => 'studiengang',
                'meaning' => 'رشته تحصیلی',
            ],
            [
                'language_id' => 2,
                'word' => 'matrikulation',
                'meaning' => 'ثبت‌نام دانشگاهی',
            ],
            [
                'language_id' => 2,
                'word' => 'stipendium',
                'meaning' => 'بورسیه',
            ],
            [
                'language_id' => 2,
                'word' => 'bibliothek',
                'meaning' => 'کتابخانه',
            ],
            [
                'language_id' => 2,
                'word' => 'mensa',
                'meaning' => 'سلف دانشگاه',
            ],
            [
                'language_id' => 2,
                'word' => 'vorlesungsverzeichnis',
                'meaning' => 'برنامه درسی دانشگاه',
            ],
            [
                'language_id' => 2,
                'word' => 'immatrikulationsbescheinigung',
                'meaning' => 'گواهی ثبت‌نام',
            ],
            [
                'language_id' => 2,
                'word' => 'studienberatung',
                'meaning' => 'مشاوره تحصیلی',
            ],
            [
                'language_id' => 1,
                'word' => 'forebears',
                'meaning' => 'اجداد',
            ],
            [
                'language_id' => 1,
                'word' => 'regimental',
                'meaning' => 'هنگ',
            ],
            [
                'language_id' => 1,
                'word' => 'testament',
                'meaning' => 'وصیت نامه',
            ],
            [
                'language_id' => 1,
                'word' => 'mounds',
                'meaning' => 'تپه ها',
            ],
            [
                'language_id' => 1,
                'word' => 'stimulated',
                'meaning' => 'نحریک شده',
            ],
            [
                'language_id' => 1,
                'word' => 'luminescence',
                'meaning' => 'شب تابی',
            ],
            [
                'language_id' => 1,
                'word' => 'latter',
                'meaning' => 'دومی',
            ],
            [
                'language_id' => 1,
                'word' => 'emblem',
                'meaning' => 'نماد',
            ],
            [
                'language_id' => 1,
                'word' => 'fertility',
                'meaning' => 'باروری',
            ],
            [
                'language_id' => 1,
                'word' => 'cult',
                'meaning' => 'آیین',
            ],
            [
                'language_id' => 1,
                'word' => 'attested',
                'meaning' => 'گواهی شده',
            ],
            [
                'language_id' => 1,
                'word' => 'rituals',
                'meaning' => 'مراسم',
            ],
            [
                'language_id' => 1,
                'word' => 'glimpse',
                'meaning' => 'اجمالی',
            ],
            [
                'language_id' => 1,
                'word' => 'prematurely',
                'meaning' => 'قبل از موعد',
            ],
            [
                'language_id' => 1,
                'word' => 'brag',
                'meaning_en' => 'say something in a boastful manner',
            ],
            [
                'language_id' => 1,
                'word' => 'tolerated',
                'meaning_en' => 'allow the existence, occurrence, or practice of without interference',
            ],
            [
                'language_id' => 1,
                'word' => 'interference',
                'meaning' => 'تداخل امواج',
            ],
            [
                'language_id' => 1,
                'word' => 'understantment',
                'meaning' => ' کتمان حقیقت',
            ],
            [
                'language_id' => 1,
                'word' => 'etiquette',
                'meaning_en' => 'The customary code of polite behaviour in society or among members of a particular profession or group',
            ],
            [
                'language_id' => 1,
                'word' => 'customary',
                'meaning' => 'مرسوم',
            ],
            [
                'language_id' => 1,
                'word' => 'quirks',
                'meaning' => 'a peculiar aspect of a persons character or behaviour',
            ],
            [
                'language_id' => 1,
                'word' => 'controversial',
                'meaning' => 'بحث برانگیز',
            ],
            [
                'language_id' => 1,
                'word' => 'expat',
                'meaning_en' => 'a person who lives outside their native country',
            ],
            [
                'language_id' => 1,
                'word' => 'overlying',
                'meaning' => 'پوشاننده',
            ],
            [
                'language_id' => 1,
                'word' => 'steep',
                'meaning' => 'تپه',
            ],
            [
                'language_id' => 1,
                'word' => 'characterised',
                'meaning' => 'مشخصه',
            ],
            [
                'language_id' => 1,
                'word' => 'ubiquitous',
                'meaning' => 'فراگیر',
            ],
            [
                'language_id' => 1,
                'word' => 'outlives',
                'meaning' => 'بیشتر زنده ماندن',
            ],
            [
                'language_id' => 1,
                'word' => 'coral',
                'meaning' => 'مرجان',
            ],
            [
                'language_id' => 1,
                'word' => 'gleaming',
                'meaning' => 'درخشان',
            ],
            [
                'language_id' => 1,
                'word' => 'فوق العاده',
                'meaning' => 'بارضایت',
            ],
            [
                'language_id' => 1,
                'word' => 'panache',
                'meaning' => 'شکوه',
            ],
            [
                'language_id' => 1,
                'word' => 'predecessor',
                'meaning' => 'پیشینیان',
            ],
            [
                'language_id' => 1,
                'word' => 'supervisory',
                'meaning' => 'نظارتی',
            ],
            [
                'language_id' => 1,
                'word' => 'adept',
                'meaning' => 'ماهر',
            ],
            [
                'language_id' => 1,
                'word' => 'contentedly',
                'meaning' => 'با رضایت',
            ],
            [
                'language_id' => 1,
                'word' => 'insulated',
                'meaning' => 'عایق شده',
            ],
            [
                'language_id' => 1,
                'word' => 'knack',
                'meaning' => 'استعداد',
            ],
            [
                'language_id' => 1,
                'word' => 'enthralling',
                'meaning' => 'جذاب',
            ],
            [
                'language_id' => 1,
                'word' => 'potent',
                'meaning' => 'نیرومند',
            ],
            [
                'language_id' => 1,
                'word' => 'teeming',
                'meaning' => 'مملو بودن',
            ],
            [
                'language_id' => 1,
                'word' => 'endures',
                'meaning' => 'تحمل کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'plea',
                'meaning' => 'درخواست',
            ],
            [
                'language_id' => 1,
                'word' => 'tolerance',
                'meaning' => 'بردباری',
            ],
            [
                'language_id' => 1,
                'word' => 'foes',
                'meaning' => 'دشمن',
            ],
            [
                'language_id' => 1,
                'word' => 'hygiene',
                'meaning' => 'بهداشت',
            ],
            [
                'language_id' => 1,
                'word' => 'disrupting',
                'meaning' => 'مختل کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'detergents',
                'meaning' => 'مواد شوینده',
            ],
            [
                'language_id' => 1,
                'word' => 'chatters',
                'meaning' => 'پچ پچ کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'circuits',
                'meaning' => 'مدارها',
            ],
            [
                'language_id' => 1,
                'word' => 'priesthood',
                'meaning' => 'کشیشی',
            ],
            [
                'language_id' => 1,
                'word' => 'peripherals',
                'meaning' => 'لوازم جانبی',
            ],
            [
                'language_id' => 1,
                'word' => 'unglamorous',
                'meaning' => 'بی زرق و برق',
            ],
            [
                'language_id' => 1,
                'word' => 'appealing',
                'meaning' => 'جذاب',
            ],
            [
                'language_id' => 1,
                'word' => 'dismissively',
                'meaning' => 'نادیده گرفته شدن',
            ],
            [
                'language_id' => 1,
                'word' => 'elasticity',
                'meaning' => 'خاصیت ارتجاعی',
            ],
            [
                'language_id' => 1,
                'word' => 'insulated',
                'meaning' => 'عایق شده',
            ],
            [
                'language_id' => 1,
                'word' => 'ego-decentering',
                'meaning' => 'غیرخودمحوری',
            ],
            [
                'language_id' => 1,
                'word' => 'obsolescent',
                'meaning' => 'منسوخ',
            ],
            [
                'language_id' => 1,
                'word' => 'profound',
                'meaning' => 'عمیق',
            ],
            [
                'language_id' => 1,
                'word' => 'revered',
                'meaning' => 'مورد احترام',
            ],
            [
                'language_id' => 1,
                'word' => 'empirical',
                'meaning' => 'تجربی',
            ],
            [
                'language_id' => 1,
                'word' => 'assumptions',
                'meaning' => 'فرضی',
            ],
            [
                'language_id' => 1,
                'word' => 'congnitive',
                'meaning' => 'شناختی',
            ],
            [
                'language_id' => 1,
                'word' => 'bearded',
                'meaning' => 'ریش دار',
            ],
            [
                'language_id' => 1,
                'word' => 'recognition',
                'meaning' => 'شناخت',
            ],
            [
                'language_id' => 1,
                'word' => 'prospects',
                'meaning' => 'آینده شغلی',
            ],
            [
                'language_id' => 1,
                'word' => 'incident',
                'meaning' => 'مسیله',
            ],
            [
                'language_id' => 1,
                'word' => 'objectivity',
                'meaning' => 'عینیت',
            ],
            [
                'language_id' => 1,
                'word' => 'possessed',
                'meaning' => 'برخورداری',
            ],
            [
                'language_id' => 1,
                'word' => 'contextual',
                'meaning' => 'زمینه ایی',
            ],
            [
                'language_id' => 1,
                'word' => 'intellectual humility',
                'meaning' => 'تواضع فکری',
            ],
            [
                'language_id' => 1,
                'word' => 'appreciation',
                'meaning' => 'درک',
            ],
            [
                'language_id' => 1,
                'word' => 'expansive',
                'meaning' => 'حساسیت',
            ],
            [
                'language_id' => 1,
                'word' => 'outcomes',
                'meaning' => 'پیامدها',
            ],
            [
                'language_id' => 1,
                'word' => 'wisdom',
                'meaning' => 'judgement',
            ],
            [
                'language_id' => 1,
                'word' => 'labor',
                'meaning' => 'آزمایشگاه',
            ],
            [
                'language_id' => 1,
                'word' => 'hoarded',
                'meaning' => 'احتکار شده',
            ],
            [
                'language_id' => 1,
                'word' => 'wages',
                'meaning' => 'دستمزد',
            ],
            [
                'language_id' => 1,
                'word' => 'apprentice',
                'meaning' => 'شاگرد',
            ],
            [
                'language_id' => 1,
                'word' => 'cling',
                'meaning' => 'چسبیدن',
            ],
            [
                'language_id' => 1,
                'word' => 'stubborn',
                'meaning' => 'سرسخت',
            ],
            [
                'language_id' => 1,
                'word' => 'dispersed',
                'meaning' => 'پراکنده شده',
            ],
            [
                'language_id' => 1,
                'word' => 'bidding',
                'meaning' => 'مناقصه',
            ],
            [
                'language_id' => 1,
                'word' => 'dihedral',
                'meaning_en' => 'having or contained by two plane faces.',
            ],
            [
                'language_id' => 1,
                'word' => 'glide',
                'meaning_en' => 'move with a smooth, quiet continuous motion.',
            ],
            [
                'language_id' => 1,
                'word' => 'culpable',
                'meaning_en' => 'deserving blame.',
            ],
            [
                'language_id' => 1,
                'word' => 'deluge',
                'meaning_en' => 'a severe flood.',
            ],
            [
                'language_id' => 1,
                'word' => 'levity',
                'meaning_en' => 'the treatment of a serious matter with humour or lack of due respect.',
            ],
            [
                'language_id' => 1,
                'word' => 'suburban',
                'meaning_en' => 'of or characteristic of a suburb.',
            ],
            [
                'language_id' => 1,
                'word' => 'overhear',
                'meaning_en' => 'hear (someone or something) without meaning to or without the knowledge of the speaker.',
            ],
            [
                'language_id' => 1,
                'word' => 'topple',
                'meaning_en' => 'overbalance or cause to overbalance and fall.',
            ],
            [
                'language_id' => 1,
                'word' => 'intervene',
                'meaning_en' => 'take part in something so as to prevent or alter a result or course of events.',
            ],
            [
                'language_id' => 1,
                'word' => 'bid',
                'meaning' => 'پیشنهاد',
            ],
            [
                'language_id' => 1,
                'word' => 'commodity',
                'meaning' => 'کالا',
            ],
            [
                'language_id' => 1,
                'word' => 'jagged',
                'meaning' => 'شکار کرد',
            ],
            [
                'language_id' => 1,
                'word' => 'deputy',
                'meaning' => 'معاون',
            ],
            [
                'language_id' => 1,
                'word' => 'crude',
                'meaning' => 'خام',
            ],
            [
                'language_id' => 1,
                'word' => 'birthed',
                'meaning' => 'به دنیا آمد',
            ],
            [
                'language_id' => 1,
                'word' => 'metallurgy',
                'meaning' => 'متالوژی',
            ],
            [
                'language_id' => 1,
                'word' => 'exaggerate',
                'meaning' => 'اغراق آمیز',
            ],
            [
                'language_id' => 1,
                'word' => 'plentiful',
                'meaning' => 'فراوان',
            ],
            [
                'language_id' => 1,
                'word' => 'sensitivity',
                'meaning' => 'حساسیت',
            ],
            [
                'language_id' => 1,
                'word' => 'digest',
                'meaning_en' => 'break down in the alimentary, canal into subtances that can be absorbed and used by the body',
            ],
            [
                'language_id' => 1,
                'word' => 'sentiment',
                'meaning_en' => 'a view or opinion that is held or expressed',
            ],
            [
                'language_id' => 1,
                'word' => 'colonial rule',
                'meaning_en' => 'refers to the governance of a territory by a foreign power, characterized by the exploitation of respurces and the inposition of cultural norms',
            ],
            [
                'language_id' => 1,
                'word' => 'puberty',
                'meaning_en' => 'he time in life when a boy or girl becomes sexually mature',
            ],
            [
                'language_id' => 1,
                'word' => 'strengthen',
                'meaning_en' => 'become stronger',
            ],
            [
                'language_id' => 1,
                'word' => 'nutrition',
                'meaning' => 'تغذیه',
            ],
            [
                'language_id' => 1,
                'word' => 'dilute',
                'meaning_en' => 'make (a liquid) thinner or weaker by adding water or another solvent to it',
            ],
            [
                'language_id' => 1,
                'word' => 'rinse',
                'meaning_en' => 'wash (something) with clean water to remove soap, detergent, dirt, or impurities',
            ],
            [
                'language_id' => 1,
                'word' => 'antiseptic',
                'meaning_en' => 'preventing the growth of disease-causing microorganisms',
            ],
            [
                'language_id' => 1,
                'word' => 'microorganisms',
                'meaning_en' => 'a microscopic organism, especially a bacterium, virus, or fungus',
            ],
            [
                'language_id' => 1,
                'word' => 'deputy',
                'meaning_en' => 'a person who is appointed to undertake the duties of a superior in the superiors absence',
            ],
            [
                'language_id' => 1,
                'word' => 'trendy',
                'meaning_en' => 'very fashionable or up to date',
            ],
            [
                'language_id' => 1,
                'word' => 'exceed',
                'meaning_en' => 'be better than; surpass',
            ],
            [
                'language_id' => 1,
                'word' => 'vinegar',
                'meaning' => 'سرکه',
            ],
            [
                'language_id' => 1,
                'word' => 'gross',
                'meaning_en' => 'very obvious and unacceptable',
            ],
            [
                'language_id' => 1,
                'word' => 'allot',
                'meaning_en' => 'give or apportion (something) to someone',
            ],
            [
                'language_id' => 1,
                'word' => 'allot',
                'meaning_en' => 'very obvious and unacceptable',
            ],
            [
                'language_id' => 1,
                'word' => 'deduction',
                'meaning_en' => 'the action of deducting or subtracting something',
            ],
            [
                'language_id' => 1,
                'word' => 'vinegar',
                'meaning' => 'نمک حمام',
            ],
            [
                'language_id' => 1,
                'word' => 'fetishize',
                'meaning_en' => 'make (something) the object of a sexual fetish',
            ],
            [
                'language_id' => 1,
                'word' => 'stipend',
                'meaning_en' => 'a fixed regular sum paid as a salary or as expenses to a clergyman, teacher, or public official',
            ],
            [
                'language_id' => 1,
                'word' => 'apple cider',
                'meaning_en' => 'an alcoholic drink made from fermented apple juice',
            ],
            [
                'language_id' => 1,
                'word' => 'circadian rhythm',
                'meaning' => 'چرخه شبانه‌روزی',
            ],
            [
                'language_id' => 1,
                'word' => 'dread',
                'meaning_en' => 'anticipate with great apprehension or fear',
            ],
            [
                'language_id' => 1,
                'word' => 'biased',
                'meaning_en' => 'unfairly prejudiced for or against someone or something',
            ],
            [
                'language_id' => 1,
                'word' => 'traumatic',
                'meaning_en' => 'deeply disturbing or distressing',
            ],
            [
                'language_id' => 1,
                'word' => 'gastronomy',
                'meaning' => 'خوراک شناسی',
            ],
            [
                'language_id' => 1,
                'word' => 'Semantic load',
                'meaning' => 'بار معنایی',
            ],
            [
                'language_id' => 1,
                'word' => 'ferment',
                'meaning_en' => 'undergo fermentation',
            ],
            [
                'language_id' => 1,
                'word' => 'fermentation',
                'meaning_en' => 'the chemical breakdown of a substance by bacteria, yeasts, or other microorganisms, typically involving effervescence and the giving off of heat',
            ],
            [
                'language_id' => 1,
                'word' => 'microscopic',
                'meaning_en' => 'so small as to be visible only with a microscope',
            ],
            [
                'language_id' => 1,
                'word' => 'soothing',
                'meaning' => 'تسلی بخش',
            ],
            [
                'language_id' => 1,
                'word' => 'antioxidant',
                'meaning_en' => 'a substance that inhibits oxidation, especially one used to counteract the deterioration of stored food products',
            ],
            [
                'language_id' => 1,
                'word' => 'tablespoon',
                'meaning_en' => 'a large spoon for serving food',
            ],
            [
                'language_id' => 1,
                'word' => 'oxidation',
                'meaning_en' => 'the process or result of oxidizing or being oxidized',
            ],
            [
                'language_id' => 1,
                'word' => '',
                'meaning_en' => 'wash (something) with clean water to remove soap, detergent, dirt, or impurities',
            ],
            [
                'language_id' => 1,
                'word' => 'moisturizer',
                'meaning' => 'آبرسان',
            ],
            [
                'language_id' => 1,
                'word' => 'clog skin pores',
                'meaning_en' => 'التهاب و جوش صورت',
            ],
            [
                'language_id' => 1,
                'word' => 'up to',
                'meaning_en' => 'as far as',
            ],
            [
                'language_id' => 1,
                'word' => 'waist',
                'meaning' => 'کمر',
            ],
            [
                'language_id' => 1,
                'word' => 'fission',
                'meaning_en' => 'division or splitting into two or more parts.',
            ],
            [
                'language_id' => 1,
                'word' => 'unsentimental',
                'meaning_en' => 'not displaying or influenced by sentimental feelings',
            ],
            [
                'language_id' => 1,
                'word' => 'chaps',
                'meaning_en' => 'leather trousers without a seat, worn by a cowboy over ordinary trousers to protect the legs',
            ],
            [
                'language_id' => 1,
                'word' => 'prosperous',
                'meaning_en' => 'successful in material terms; flourishing financially',
            ],
            [
                'language_id' => 1,
                'word' => 'swiftly',
                'meaning_en' => 'at high speed; quickly',
            ],
            [
                'language_id' => 1,
                'word' => 'upfront',
                'meaning_en' => 'at the front; in front',
            ],
            [
                'language_id' => 1,
                'word' => 'rammed',
                'meaning_en' => 'very crowded; packed',
            ],
            [
                'language_id' => 1,
                'word' => 'graveyard',
                'meaning_en' => 'a burial ground, especially one beside a church',
            ],
            [
                'language_id' => 1,
                'word' => 'swelling',
                'meaning' => 'تورم',
            ],
            [
                'language_id' => 1,
                'word' => 'tempest',
                'meaning_en' => 'a violent windy storm',
            ],
            [
                'language_id' => 1,
                'word' => 'devastate',
                'meaning_en' => 'destroy or ruin',
            ],
            [
                'language_id' => 1,
                'word' => 'apprehension',
                'meaning_en' => 'anxiety or fear that something bad or unpleasant will happen',
            ],
            [
                'language_id' => 1,
                'word' => 'fairground',
                'meaning' => 'محل برگزاری سیرک و نمایش',
            ],
            [
                'language_id' => 1,
                'word' => 'roller coaster',
                'meaning_en' => 'a fairground attraction that consists of a light railway track which has many tight turns and steep slopes',
            ],
            [
                'language_id' => 1,
                'word' => 'overshadow',
                'meaning_en' => 'tower above and cast a shadow over',
            ],
            [
                'language_id' => 1,
                'word' => 'booming',
                'meaning_en' => 'having a period of great prosperity or rapid economic growth',
            ],
            [
                'language_id' => 1,
                'word' => 'resonate',
                'meaning_en' => 'produce or be filled with a deep, full, reverberating sound',
            ],
            [
                'language_id' => 1,
                'word' => 'resonate',
                'meaning_en' => 'produce or be filled with a deep, full, reverberating sound',
            ],
            [
                'language_id' => 1,
                'word' => 'reverberate',
                'meaning_en' => '(of a loud noise) be repeated several times as an echo',
            ],
            [
                'language_id' => 1,
                'word' => 'non-verbal',
                'meaning_en' => 'not involving or using words or speech',
            ],
            [
                'language_id' => 1,
                'word' => 'disillusioned',
                'meaning_en' => 'disappointed in someone or something that one discovers to be less good than one had believed',
            ],
            [
                'language_id' => 1,
                'word' => 'declutter',
                'meaning_en' => 'remove unnecessary items from',
            ],
            [
                'language_id' => 1,
                'word' => 'dwell',
                'meaning_en' => 'live in or at a specified place',
            ],
            [
                'language_id' => 1,
                'word' => 'crane',
                'meaning_en' => 'stretch out ones body or neck in order to see something',
            ],
            [
                'language_id' => 1,
                'word' => 'purge',
                'meaning_en' => 'rid of an unwanted guilty, condition or feeling',
            ],
            [
                'language_id' => 1,
                'word' => 'chaotic',
                'meaning_en' => 'in a state of complete confusion and disorder',
            ],
            [
                'language_id' => 1,
                'word' => 'chaotic',
                'meaning_en' => 'in a state of complete confusion and disorder',
            ],
            [
                'language_id' => 1,
                'word' => 'trustworthy',
                'meaning_en' => 'someone or something deserving of confidence and reliance',
            ],
            [
                'language_id' => 1,
                'word' => 'spontaneous',
                'meaning_en' => 'performed or occurring as a result of a sudden impulse or inclination and without premeditation or external stimulus',
            ],
            [
                'language_id' => 1,
                'word' => 'legistlation',
                'meaning_en' => 'laws considered collectively',
            ],
            [
                'language_id' => 1,
                'word' => 'pledge',
                'meaning_en' => 'undertaking',
            ],
            [
                'language_id' => 1,
                'word' => 'solemn',
                'meaning_en' => 'formal',
            ],
            [
                'language_id' => 1,
                'word' => 'unshakeable',
                'meaning_en' => 'unable to be disputed',
            ],
            [
                'language_id' => 1,
                'word' => 'poaching',
                'meaning_en' => 'illegaly hunt or catch',
            ],
            [
                'language_id' => 1,
                'word' => 'breeding',
                'meaning' => 'پرورش',
            ],
            [
                'language_id' => 1,
                'word' => 'perserve',
                'meaning' => 'حفظ کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'extracurricular',
                'meaning' => 'فوق برنامه',
            ],
            [
                'language_id' => 1,
                'word' => 'confidential',
                'meaning' => 'محرمانه',
            ],
            [
                'language_id' => 1,
                'word' => 'translocation',
                'meaning' => 'جابجایی',
            ],
            [
                'language_id' => 1,
                'word' => 'constipation',
                'meaning' => 'یبوست',
            ],
            [
                'language_id' => 1,
                'word' => 'obscure',
                'meaning' => 'مهم',
            ],
            [
                'language_id' => 1,
                'word' => 'canteen',
                'meaning_en' => 'cafeteria',
            ],
            [
                'language_id' => 1,
                'word' => 'introductory',
                'meaning_en' => 'serving an introduction',
            ],
            [
                'language_id' => 1,
                'word' => 'predator',
                'meaning_en' => 'an animal who preys on the others',
            ],
            [
                'language_id' => 1,
                'word' => 'apprentice',
                'meaning_en' => 'a person who is learning trade from a skill one',
            ],
            [
                'language_id' => 1,
                'word' => 'refurbish',
                'meaning_en' => 'renovate and redecorate',
            ],
            [
                'language_id' => 1,
                'word' => 'handout',
                'meaning_en' => 'a quantity of financial or other material aid given to a person',
            ],
            [
                'language_id' => 1,
                'word' => 'rationale',
                'meaning_en' => 'set of reasons for a course of action',
            ],
            [
                'language_id' => 1,
                'word' => 'brainstorming',
                'meaning_en' => 'grouped problem-solving methods',
            ],
            [
                'language_id' => 1,
                'word' => 'amend',
                'meaning_en' => 'make minor changes',
            ],
            [
                'language_id' => 1,
                'word' => 'evaluate',
                'meaning_en' => 'form an idea of the amount',
            ],
            [
                'language_id' => 1,
                'word' => 'vague',
                'meaning_en' => 'indefinite',
            ],
            [
                'language_id' => 1,
                'word' => 'continuity',
                'meaning_en' => 'unbroken and consistent existence or operation of something over time',
            ],
            [
                'language_id' => 1,
                'word' => 'consensus',
                'meaning_en' => 'general agreement',
            ],
            [
                'language_id' => 1,
                'word' => 'appeal',
                'meaning_en' => 'making serious and urgent request',
            ],
            [
                'language_id' => 1,
                'word' => 'incident',
                'meaning' => 'حادثه',
            ],
            [
                'language_id' => 1,
                'word' => 'breeding',
                'meaning' => 'پرورش',
            ],
            [
                'language_id' => 1,
                'word' => 'relentless',
                'meaning_en' => 'unceasingly intense',
            ],
            [
                'language_id' => 1,
                'word' => 'transmutation',
                'meaning_en' => 'the action of changing',
            ],
            [
                'language_id' => 1,
                'word' => 'mud',
                'meaning_en' => 'soft',
            ],
            [
                'language_id' => 1,
                'word' => 'deterioration',
                'meaning_en' => 'the process of becoming progressively worse',
            ],
            [
                'language_id' => 1,
                'word' => 'envy',
                'meaning_en' => 'a feeling of discontented or resentful longing aroused by someone elses possessions',
            ],
            [
                'language_id' => 1,
                'word' => 'recognition',
                'meaning_en' => 'identification from previous encounters',
            ],
            [
                'language_id' => 1,
                'word' => 'garner',
                'meaning_en' => 'gather / collect',
            ],
            [
                'language_id' => 1,
                'word' => 'embark',
                'meaning_en' => 'begin burden',
            ],
            [
                'language_id' => 1,
                'word' => 'curriculum',
                'meaning_en' => 'the subjects comprising a course of study in a school or college',
            ],
            [
                'language_id' => 1,
                'word' => 'vanish',
                'meaning_en' => 'disappear suddenly',
            ],
            [
                'language_id' => 1,
                'word' => 'covet',
                'meaning_en' => 'yearn to posses sth',
            ],
            [
                'language_id' => 1,
                'word' => 'conservatory',
                'meaning_en' => 'a room with glass roof and walls attached to a house at one side and used as a sun lounge',
            ],
            [
                'language_id' => 1,
                'word' => 'excursion',
                'meaning_en' => 'a short journey or trip',
            ],
            [
                'language_id' => 1,
                'word' => 'procedure',
                'meaning_en' => 'an established way of doing sth',
            ],
            [
                'language_id' => 1,
                'word' => 'pigment',
                'meaning_en' => 'the natural colouring matter of animal',
            ],
            [
                'language_id' => 1,
                'word' => 'apprenticeship',
                'meaning_en' => 'the possition of an apprentice',
            ],
            [
                'language_id' => 1,
                'word' => 'implication',
                'meaning_en' => 'conclusion that can be drawn from something although it is not explicitely stated',
            ],
            [
                'language_id' => 1,
                'word' => 'handout',
                'meaning_en' => 'a quantity of financial or other material aid given to a person or organization',
            ],
            [
                'language_id' => 1,
                'word' => 'lagoon',
                'meaning' => 'مرداب',
            ],
            [
                'language_id' => 1,
                'word' => 'coexit',
                'meaning_en' => 'exit at the same time or the same place',
            ],
            [
                'language_id' => 1,
                'word' => 'phenomenon',
                'meaning_en' => 'a fact or situtation that is observed to exist or happen',
            ],
            [
                'language_id' => 1,
                'word' => 'haloes',
                'meaning_en' => 'a circle of light shown around or above the head of a saint or holy person to represent their holiness',
            ],
            [
                'language_id' => 1,
                'word' => 'humidity',
                'meaning_en' => 'amount of water vapor in air',
            ],
            [
                'language_id' => 1,
                'word' => 'thermometer',
                'meaning' => 'دماسنج',
            ],
            [
                'language_id' => 1,
                'word' => 'vulgar',
                'meaning_en' => 'lacking sophistication',
            ],
            [
                'language_id' => 1,
                'word' => 'fraction',
                'meaning' => 'کسری',
            ],
            [
                'language_id' => 1,
                'word' => 'emission',
                'meaning_en' => 'the production and discharge of sth',
            ],
            [
                'language_id' => 1,
                'word' => 'horticulture',
                'meaning_en' => 'the art or practice of garden cultivating',
            ],
            [
                'language_id' => 1,
                'word' => 'artificial sweeters',
                'meaning' => 'شیرین کننده های مصنوعی',
            ],
            [
                'language_id' => 1,
                'word' => 'agronomist',
                'meaning_en' => 'an expert in the science of soil management and crop production',
            ],
            [
                'language_id' => 1,
                'word' => 'crops',
                'meaning_en' => 'a cultivated plant that is grown on a large scale commercially, especially a cereal fruit or vegetable',
            ],
            [
                'language_id' => 1,
                'word' => 'congregation',
                'meaning_en' => 'a group of people assembled for religious worship',
            ],
            [
                'language_id' => 1,
                'word' => 'resurrection',
                'meaning_en' => 'the act of rising from the dead or being brought back to life',
            ],
            [
                'language_id' => 1,
                'word' => 'solicit',
                'meaning_en' => 'ask for or try to obtain (something) from someone',
            ],
            [
                'language_id' => 1,
                'word' => 'crucify',
                'meaning_en' => 'put (someone) to death by nailing or binding them to a cross, especially as an ancient punishment',
            ],
            [
                'language_id' => 1,
                'word' => 'atone',
                'meaning_en' => 'make amends or reparation',
            ],
            [
                'language_id' => 1,
                'word' => 'flesh',
                'meaning' => 'گوشت',
            ],
            [
                'language_id' => 1,
                'word' => 'trinity',
                'meaning' => 'تثلیث',
            ],
            [
                'language_id' => 1,
                'word' => 'denomination',
                'meaning' => 'فرقه مذهبی',
            ],
            [
                'language_id' => 1,
                'word' => 'restorationist',
                'meaning_en' => 'an adherent of Restorationism (or Christian primitivism), believing that true Christianity died out and must be restored to its original, 1st-century New Testament practices',
            ],
            [
                'language_id' => 1,
                'word' => 'revelation',
                'meaning' => 'وحی',
            ],
            [
                'language_id' => 1,
                'word' => 'tenet',
                'meaning_en' => 'a principle or belief, especially one of the main principles of a religion or philosophy',
            ],
            [
                'language_id' => 1,
                'word' => 'sacrament',
                'meaning_en' => 'A sacrament is an outward, visible sign of an inward, invisible divine grace, instituted by Jesus Christ to sanctify individuals and build up the Church',
            ],
            [
                'language_id' => 4,
                'word' => 'samen',
                'meaning_en' => 'together',
            ],
            [
                'language_id' => 4,
                'word' => 'waarschijnlijk',
                'meaning_en' => 'probably',
            ],
            [
                'language_id' => 4,
                'word' => 'elkaar',
                'meaning_en' => 'each other',
            ],
            [
                'language_id' => 4,
                'word' => 'ontmoeten',
                'meaning_en' => 'to meet',
            ],
            [
                'language_id' => 4,
                'word' => 'nemen',
                'meaning_en' => 'to take',
            ],
            [
                'language_id' => 4,
                'word' => 'vliegtuig',
                'meaning_en' => 'airplane',
            ],
            [
                'language_id' => 4,
                'word' => 'raakten',
                'meaning_en' => 'got (hit/affected)',
            ],
            [
                'language_id' => 4,
                'word' => 'vanaf',
                'meaning_en' => 'from / starting from',
            ],
            [
                'language_id' => 4,
                'word' => 'gestopt',
                'meaning_en' => 'stopped',
            ],
            [
                'language_id' => 4,
                'word' => 'waren',
                'meaning_en' => 'were',
            ],
            [
                'language_id' => 4,
                'word' => 'iedereen',
                'meaning_en' => 'everyone',
            ],
            [
                'language_id' => 4,
                'word' => 'schreeuwen',
                'meaning_en' => 'to scream',
            ],
            [
                'language_id' => 4,
                'word' => 'bedoel',
                'meaning_en' => 'mean (I mean)',
            ],
            [
                'language_id' => 4,
                'word' => 'erg',
                'meaning_en' => 'very / bad',
            ],
            [
                'language_id' => 4,
                'word' => 'verwachten',
                'meaning_en' => 'to expect',
            ],
            [
                'language_id' => 4,
                'word' => 'werden',
                'meaning_en' => 'were / became',
            ],
            [
                'language_id' => 4,
                'word' => 'wakker',
                'meaning_en' => 'awake',
            ],
            [
                'language_id' => 4,
                'word' => 'rijen',
                'meaning_en' => 'rows',
            ],
            [
                'language_id' => 4,
                'word' => 'paar',
                'meaning_en' => 'pair / a few',
            ],
            [
                'language_id' => 4,
                'word' => 'liepen',
                'meaning_en' => 'walked',
            ],
            [
                'language_id' => 4,
                'word' => 'langs',
                'meaning_en' => 'along / past',
            ],
            [
                'language_id' => 4,
                'word' => 'volledig',
                'meaning_en' => 'completely',
            ],
            [
                'language_id' => 4,
                'word' => 'gebroken',
                'meaning_en' => 'broken',
            ],
            [
                'language_id' => 4,
                'word' => 'bloeden',
                'meaning_en' => 'to bleed',
            ],
            [
                'language_id' => 4,
                'word' => 'stootten',
                'meaning_en' => 'hit / bumped',
            ],
            [
                'language_id' => 4,
                'word' => 'hoofd',
                'meaning_en' => 'head',
            ],
            [
                'language_id' => 4,
                'word' => 'tegen',
                'meaning_en' => 'against',
            ],
            [
                'language_id' => 4,
                'word' => 'stoel',
                'meaning_en' => 'chair / seat',
            ],
            [
                'language_id' => 4,
                'word' => 'kregen',
                'meaning_en' => 'got / received',
            ],
            [
                'language_id' => 4,
                'word' => 'cockpit',
                'meaning_en' => 'cockpit',
            ],
            [
                'language_id' => 4,
                'word' => 'verwoest',
                'meaning_en' => 'destroyed',
            ],
            [
                'language_id' => 4,
                'word' => 'nooduitgang',
                'meaning_en' => 'emergency exit',
            ],
            [
                'language_id' => 4,
                'word' => 'eruit',
                'meaning_en' => 'out of it',
            ],
            [
                'language_id' => 4,
                'word' => 'toegestaan',
                'meaning_en' => 'allowed',
            ],
            [
                'language_id' => 4,
                'word' => 'aanvragen',
                'meaning_en' => 'to apply / request',
            ],
            [
                'language_id' => 4,
                'word' => 'ophalen',
                'meaning_en' => 'to pick up / collect',
            ],
            [
                'language_id' => 4,
                'word' => 'denk',
                'meaning_en' => 'think',
            ],
            [
                'language_id' => 4,
                'word' => 'moeten',
                'meaning_en' => 'must / have to',
            ],
            [
                'language_id' => 4,
                'word' => 'toepassen',
                'meaning_en' => 'to apply (use/implement)',
            ],
            [
                'language_id' => 4,
                'word' => 'verdienen',
                'meaning_en' => 'to earn',
            ],
            [
                'language_id' => 4,
                'word' => 'voorspeld',
                'meaning_en' => 'predicted',
            ],
            [
                'language_id' => 4,
                'word' => 'oplevert',
                'meaning_en' => 'yields / delivers',
            ],
            [
                'language_id' => 4,
                'word' => 'wordt',
                'meaning_en' => 'becomes / is',
            ],
            [
                'language_id' => 4,
                'word' => 'daarmee',
                'meaning_en' => 'with that / thereby',
            ],
            [
                'language_id' => 4,
                'word' => 'zou',
                'meaning_en' => 'would',
            ],
            [
                'language_id' => 4,
                'word' => 'winstgevend',
                'meaning_en' => 'profitable',
            ],
            [
                'language_id' => 4,
                'word' => 'mogelijk',
                'meaning_en' => 'possible',
            ],
            [
                'language_id' => 4,
                'word' => 'mannen badkamer',
                'meaning_en' => 'men’s bathroom',
            ],
            [
                'language_id' => 4,
                'word' => 'behang',
                'meaning_en' => 'wallpaper',
            ],
            [
                'language_id' => 4,
                'word' => 'zelfs',
                'meaning_en' => 'even',
            ],
            [
                'language_id' => 4,
                'word' => 'tuin',
                'meaning_en' => 'garden',
            ],
            [
                'language_id' => 4,
                'word' => 'weer',
                'meaning_en' => 'again / weather',
            ],
            [
                'language_id' => 4,
                'word' => 'zitten',
                'meaning_en' => 'to sit',
            ],
            [
                'language_id' => 4,
                'word' => 'de mensen',
                'meaning_en' => 'the people',
            ],
            [
                'language_id' => 4,
                'word' => 'betaal',
                'meaning_en' => 'pay',
            ],
            [
                'language_id' => 4,
                'word' => 'zo een',
                'meaning_en' => 'such a',
            ],
            [
                'language_id' => 4,
                'word' => 'tijdens',
                'meaning_en' => 'during',
            ],
            [
                'language_id' => 4,
                'word' => 'openingswedstrijd',
                'meaning_en' => 'opening match',
            ],
            [
                'language_id' => 4,
                'word' => 'zit',
                'meaning_en' => 'sit / is sitting',
            ],
            [
                'language_id' => 4,
                'word' => 'dicht',
                'meaning_en' => 'closed / near',
            ],
            [
                'language_id' => 4,
                'word' => 'stadion',
                'meaning_en' => 'stadium',
            ],
            [
                'language_id' => 4,
                'word' => 'letterlijk',
                'meaning_en' => 'literally',
            ],
            [
                'language_id' => 4,
                'word' => 'loopt',
                'meaning_en' => 'walks / is walking',
            ],
            [
                'language_id' => 4,
                'word' => 'voordeur',
                'meaning_en' => 'front door',
            ],
            [
                'language_id' => 4,
                'word' => 'uit',
                'meaning_en' => 'out',
            ],
            [
                'language_id' => 4,
                'word' => 'steekt',
                'meaning_en' => 'sticks / points',
            ],
            [
                'language_id' => 4,
                'word' => 'verwacht',
                'meaning_en' => 'expect / expected',
            ],
            [
                'language_id' => 4,
                'word' => 'steden',
                'meaning_en' => 'cities',
            ],
            [
                'language_id' => 4,
                'word' => 'zullen',
                'meaning_en' => 'will / shall',
            ],
            [
                'language_id' => 4,
                'word' => 'bezoeken',
                'meaning_en' => 'to visit',
            ],
            [
                'language_id' => 4,
                'word' => 'hopen',
                'meaning_en' => 'hope',
            ],
            [
                'language_id' => 4,
                'word' => 'daar',
                'meaning_en' => 'there',
            ],
            [
                'language_id' => 4,
                'word' => 'flink',
                'meaning_en' => 'big / considerable / strong',
            ],
            [
                'language_id' => 4,
                'word' => 'aan',
                'meaning_en' => 'on / at / to',
            ],
            [
                'language_id' => 4,
                'word' => 'mannen badkamer',
                'meaning_en' => 'men’s bathroom',
            ],
            [
                'language_id' => 4,
                'word' => 'behang',
                'meaning_en' => 'wallpaper',
            ],
            [
                'language_id' => 4,
                'word' => 'zelfs',
                'meaning_en' => 'even',
            ],
            [
                'language_id' => 4,
                'word' => 'tuin',
                'meaning_en' => 'garden',
            ],
            [
                'language_id' => 4,
                'word' => 'weer',
                'meaning_en' => 'again / weather',
            ],
            [
                'language_id' => 4,
                'word' => 'zitten',
                'meaning_en' => 'to sit',
            ],
            [
                'language_id' => 4,
                'word' => 'de mensen',
                'meaning_en' => 'the people',
            ],
            [
                'language_id' => 4,
                'word' => 'betaal',
                'meaning_en' => 'pay',
            ],
            [
                'language_id' => 4,
                'word' => 'zo een',
                'meaning_en' => 'such a',
            ],
            [
                'language_id' => 4,
                'word' => 'tijdens',
                'meaning_en' => 'during',
            ],
            [
                'language_id' => 4,
                'word' => 'openingswedstrijd',
                'meaning_en' => 'opening match',
            ],
            [
                'language_id' => 4,
                'word' => 'zit',
                'meaning_en' => 'sit / is sitting',
            ],
            [
                'language_id' => 4,
                'word' => 'dicht',
                'meaning_en' => 'closed / near',
            ],
            [
                'language_id' => 4,
                'word' => 'stadion',
                'meaning_en' => 'stadium',
            ],
            [
                'language_id' => 4,
                'word' => 'letterlijk',
                'meaning_en' => 'literally',
            ],
            [
                'language_id' => 4,
                'word' => 'loopt',
                'meaning_en' => 'walks / is walking',
            ],
            [
                'language_id' => 4,
                'word' => 'voordeur',
                'meaning_en' => 'front door',
            ],
            [
                'language_id' => 4,
                'word' => 'uit',
                'meaning_en' => 'out',
            ],
            [
                'language_id' => 4,
                'word' => 'steekt',
                'meaning_en' => 'sticks / points',
            ],
            [
                'language_id' => 4,
                'word' => 'verwacht',
                'meaning_en' => 'expect / expected',
            ],
            [
                'language_id' => 4,
                'word' => 'steden',
                'meaning_en' => 'cities',
            ],
            [
                'language_id' => 4,
                'word' => 'zullen',
                'meaning_en' => 'will / shall',
            ],
            [
                'language_id' => 4,
                'word' => 'bezoeken',
                'meaning_en' => 'to visit',
            ],
            [
                'language_id' => 4,
                'word' => 'hopen',
                'meaning_en' => 'hope',
            ],
            [
                'language_id' => 4,
                'word' => 'daar',
                'meaning_en' => 'there',
            ],
            [
                'language_id' => 4,
                'word' => 'flink',
                'meaning_en' => 'big / considerable / strong',
            ],
            [
                'language_id' => 4,
                'word' => 'aan',
                'meaning_en' => 'on / at / to',
            ],
            [
                'language_id' => 1,
                'word' => 'supplemental',
                'meaning_en' => 'provided in addition to what is already present or available to complete or enhance it',
            ],
            [
                'language_id' => 1,
                'word' => 'wool',
                'meaning' => 'پشم',
            ],
            [
                'language_id' => 1,
                'word' => 'nodded',
                'meaning_en' => 'to make a qucik downward motion of the head weather deliberately',
            ],
            [
                'language_id' => 1,
                'word' => 'spontaneous',
                'meaning_en' => 'performed or occurring as a result of a sudden impulse or inclination and without premeditation or external stimulus',
            ],
            [
                'language_id' => 4,
                'word' => 'hiervoor',
                'meaning_en' => 'before this',
            ],
            [
                'language_id' => 4,
                'word' => 'iedereen',
                'meaning_en' => 'everyone',
            ],
            [
                'language_id' => 4,
                'word' => 'directeur',
                'meaning_en' => 'director',
            ],
            [
                'language_id' => 4,
                'word' => 'tussen',
                'meaning' => 'بین',
            ],
            [
                'language_id' => 4,
                'word' => 'gesprek',
                'meaning' => 'مکالمه',
            ],
            [
                'language_id' => 4,
                'word' => 'zinnen',
                'meaning' => 'جملات',
            ],
            [
                'language_id' => 4,
                'word' => 'inhoudsopgave',
                'meaning' => 'فهرست مطالب',
            ],
            [
                'language_id' => 4,
                'word' => 'echt',
                'meaning' => 'واقعا',
            ],
            [
                'language_id' => 4,
                'word' => 'collega',
                'meaning_en' => 'colleague',
            ],
            [
                'language_id' => 4,
                'word' => 'rijbweis',
                'meaning_en' => 'drivers license',
            ],
            [
                'language_id' => 1,
                'word' => 'forth',
                'meaning' => 'به‌جلو',
            ],
            [
                'language_id' => 1,
                'word' => 'fowl',
                'meaning' => 'ماکیان',
            ],
            [
                'language_id' => 1,
                'word' => 'replenish',
                'meaning_en' => 'to fill something up again',
            ],
            [
                'language_id' => 1,
                'word' => 'subdue',
                'meaning' => 'سرکوب کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'Sanctified',
                'meaning' => 'مقدس',
            ],
            [
                'language_id' => 1,
                'word' => 'compasseth',
                'meaning' => 'احاطه کردن',
            ],
            [
                'language_id' => 1,
                'word' => 'bdellium',
                'meaning' => 'ارزق',
            ],
            [
                'language_id' => 1,
                'word' => 'fig',
                'meaning' => 'انجیر',
            ],
            [
                'language_id' => 1,
                'word' => 'apron',
                'meaning' => 'پیش بند',
            ],
            [
                'language_id' => 1,
                'word' => 'beguiled',
                'meaning' => 'فریب خورده',
            ],
            [
                'language_id' => 1,
                'word' => 'enmity',
                'meaning' => 'دشمنی',
            ],
            [
                'language_id' => 1,
                'word' => 'hearkened',
                'meaning' => 'گوش فرا داد',
            ],
            [
                'language_id' => 1,
                'word' => 'thistles',
                'meaning' => 'خارها',
            ],
            [
                'language_id' => 1,
                'word' => 'firmament',
                'meaning' => 'آسمان',
            ],
            [
                'language_id' => 1,
                'word' => 'lest',
                'meaning' => 'مبادا',
            ],
            [
                'language_id' => 1,
                'word' => 'shalt',
                'meaning_en' => 'shall',
            ],
            [
                'language_id' => 1,
                'word' => 'mayest',
                'meaning' => 'می‌توانی',
            ],
            [
                'language_id' => 1,
                'word' => 'thence',
                'meaning' => 'از آنجا',
            ],
            [
                'language_id' => 1,
                'word' => 'thence',
                'meaning' => 'مقدس',
            ],
            [
                'language_id' => 1,
                'word' => 'eastward',
                'meaning' => 'به سمت شرق',
            ],
            [
                'language_id' => 1,
                'word' => 'nostrills ',
                'meaning' => 'سوراخ‌های بینی',
            ],
            [
                'language_id' => 1,
                'word' => 'fruitful',
                'meaning' => 'fertile',
            ],
            [
                'language_id' => 1,
                'word' => 'dominion',
                'meaning' => 'سلطه',
            ],
            [
                'language_id' => 1,
                'word' => 'creepeth',
                'meaning' => 'خزیدن ',
            ],
            [
                'language_id' => 1,
                'word' => 'cattle',
                'meaning' => 'گاوها',
            ],
            [
                'language_id' => 1,
                'word' => 'hath',
                'meaning_en' => 'has',
            ],
            [
                'language_id' => 1,
                'word' => 'yielding',
                'meaning' => 'تسلیم‌شونده',
            ],
        ];

        $now = Carbon::now();

        foreach ($words as &$word) {
            // Ensure all required keys exist
            $word = array_merge([
                'language_id' => 1,   // default to English if missing
                'word'       => null,
                'meaning'    => null,
                'meaning_en' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ], $word);

            // If meaning_en contains Farsi, move it to meaning
            if (!empty($word['meaning_en']) && preg_match('/[\x{0600}-\x{06FF}]/u', $word['meaning_en'])) {
                $word['meaning'] = $word['meaning_en'];
                $word['meaning_en'] = null;
            }

            // If meaning contains English letters, move it to meaning_en
            if (!empty($word['meaning']) && preg_match('/[A-Za-z]/', $word['meaning'])) {
                $word['meaning_en'] = $word['meaning'];
                // Clear meaning only if it's purely English
                if (!preg_match('/[\x{0600}-\x{06FF}]/u', $word['meaning'])) {
                    $word['meaning'] = null;
                }
            }

            // Ensure timestamps exist
            $word['created_at'] = $now;
            $word['updated_at'] = $now;
        }

// Insert in chunks of 50
        foreach (array_chunk($words, 50) as $chunk) {
            DB::table('words')->insert($chunk);
        }

    }
}
