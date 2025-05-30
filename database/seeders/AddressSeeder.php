<?php

namespace Database\Seeders;

use Address\Entities\Models\City;
use Address\Entities\Models\State;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getStatesWithCities() as $state => $items) {
            $stateData = [
                "name" => $state,
                "fa_name" => array_key_first($items),
            ];
            $state = State::query()
                ->updateOrCreate(["name" => $state], $stateData);
            foreach (array_values($items)[0] as $latinCity => $persianCity) {
                $cityData = [
                    "name" => $latinCity,
                    "fa_name" => $persianCity,
                    "state_id" => $state["id"],
                ];
                City::query()
                    ->updateOrCreate(["name" => $latinCity], $cityData);
            }
        }
    }

    public function getStatesWithCities()
    {
        return [
            "Tehran" => [
                "تهران" => [
                    "Tehran" => "تهران",
                    "Eslamshahr" => "اسلام شهر",
                    "Shahr-e Qods" => "شهر قدس",
                    "Varamin" => "ورامین",
                    "Shemiranat" => "شمیرانات",
                    "Rey" => "ری"
                ]
            ],
            "Alborz" => [
                "البرز" => [
                    "Karaj" => "کرج",
                    "Nazariyeh" => "نظریه",
                    "Hashtgerd" => "هشتگرد",
                    "Taleqan" => "طالقان"
                ]
            ],
            "Mazandaran" => [
                "مازندران" => [
                    "Sari" => "ساری",
                    "Amol" => "عامل",
                    "Babol" => "بابل",
                    "Qaemshahr" => "قایم شهر",
                    "Chalus" => "چالوس",
                    "Tonekabon" => "تنکابن",
                    "Neka" => "نکا",
                ]
            ],
            "Gilan" => [
                "گیلان" => [
                    "Rasht" => "رشت",
                    "Anzali" => "انزلی",
                    "Lahijan" => "لاهیجان",
                    "Langarud" => "لنگرود",
                    "Astara" => "آستارا",
                    "Fuman" => "فومن",
                ]
            ],
            "Khorasan Razavi" => [
                "خراسان رضوی" => [
                    "Mashhad" => "مشهد",
                    "Neyshabur" => "نیشابور",
                    "Sabzevar" => "سبزوار",
                    "Torbat-e Jam" => "تربت جام",
                    "Gonabad" => "گنبد",
                ]
            ],
            "Esfahan" => [
                "اصفهان" => [
                    "Isfahan" => "اصفهان",
                    "Kashan" => "کاشان",
                    "Najafabad" => "نجف آباد",
                    "Falavarjan" => "فلاورجان",
                    "Shahin Shahr" => "شاهین شهر",
                ]
            ],
            "Fars" => [
                "فارس" => [
                    "Shiraz" => "شیراز",
                    "Marvdasht" => "مرودشت",
                    "Jahrom" => "جهروم",
                    "Lar" => "لار",
                    "Firoozabad" => "فیروزآباد",
                ]
            ],
            "Kerman" => [
                "کرمان" => [
                    "Kerman" => "کرمان",
                    "Rafsanjan" => "رفسنجان",
                    "Sirjan" => "سیرجان",
                    "Bam" => "بم",
                    "Jiroft" => "جیرفت",
                ]
            ],
            "East Azerbaijan" => [
                "آذرباییجان شرقی" => [
                    "Tabriz" => "تبریز",
                    "Marand" => "مرند",
                    "Maragheh" => "مراغه",
                    "Ahar" => "اهر",
                    "Sarab" => "سراب",
                ]
            ],
            "West Azerbaijan" => [
                "آذرباییجان غربی" => [
                    "Urmia" => "ارومیه",
                    "Khoy" => "خوی",
                    "Maku" => "ماکو",
                    "Mahabad" => "مهاباد",
                    "Bukan" => "بوکان",
                ]
            ],
            "Khuzestan" => [
                "خوزستان" => [
                    "Ahvaz" => "اهواز",
                    "Abadan" => "آبادان",
                    "Dezful" => "دزفول",
                    "Behbahan" => "بهبهان",
                    "Khorramshahr" => "خرمشهر",
                ]
            ],
            "Qom" => [
                "قم" => [
                    "Qom" => "قم",
                ]
            ],
            "Hamedan" => [
                "همدان" => [
                    "Hamedan" => "همدان",
                    "Malayer" => "ملایر",
                    "Nahavand" => "نهاوند",
                    "Asadabad" => "اسدآباد",
                ]
            ],
            "Zanjan" => [
                "زنجان" => [
                    "Zanjan" => "زنجان",
                    "Abhar" => "ابهر",
                    "Khodabandeh" => "خدابنده",
                    "Tarom" => "تارم",

                ]
            ],
            "Yazd" => [
                "یزد" => [
                    "Yazd" => "یزد",
                    "Mehriz" => "مهریز",
                    "Ardakan" => "اردکان",
                    "Taft" => "تفت",
                ]
            ],
            "Kurdistan" => [
                "کردستان" => [
                    "Sanandaj" => "سنندج",
                    "Marivan" => "مریوان",
                    "Saqqez" => "سقز",
                    "Baneh" => "بانه",
                    "Divandarreh" => "دیواندره",

                ]
            ],
            "Hormozgan" => [
                "هرمزگان" => [
                    "Bandar Abbas" => "بندرعباس",
                    "Minab" => "میناب",
                    "Qeshm" => "قشم",
                    "Bandar Lengeh" => "بندرلنگه",
                    "Hajiabad" => "حاجی آباد",

                ]
            ],
            "Lorestan" => [
                "لرستان" => [
                    "Khorramabad" => "خرم آباد",
                    "Borujerd" => "بروجرد",
                    "Dorud" => "درود",
                    "Aligudarz" => "الیگودرز",

                ]
            ],
            "Golestan" => [
                "گلستان" => [
                    "Gorgan" => "گرگان",
                    "Gonbad-e Qabus" => "گنبد کاووس",
                    "Aliabad-e Katul" => "علی آباد کتول",
                    "Bandar-e Gaz" => "بندر گز",

                ]
            ],
            "Ardabil" => [
                "اردبیل" => [
                    "Ardabil" => "اردبیل",
                    "Meshginshahr" => "مشگین شهر",
                    "Parsabad" => "پارس آباد",
                    "Khalkhal" => "خلخال",

                ]
            ],
            "Bushehr" => [
                "بوشهر" => [
                    "Bushehr" => "بوشهر",
                    "Borazjan" => "برازجان",
                    "Deylam" => "دیلم",
                    "Ganaveh" => "گناوه",

                ]
            ],
            "Ilam" => [
                "ایلام" => [
                    "Ilam" => "ایلام",
                    "Mehran" => "مهران",
                    "Dehloran" => "دهلران",
                    "Darreh Shahr" => "دره شهر",

                ]
            ],
            "Markazi" => [
                "مرکزی" => [
                    "Arak" => "مرکزی",
                    "Saveh" => "ساوه",
                    "Khomein" => "خمین",
                    "Delijan" => "دلیجان",

                ]
            ],
            "Qazvin" => [
                "قزوین" => [
                    "Qazvin" => "قزوین",
                    "Takestan" => "تاکستان",
                    "Abyek" => "آبیک",

                ]
            ],
            "Semnan" => [
                "سمنان" => [
                    "Semnan" => "سمنان",
                    "Shahrud" => "شاهرود",
                    "Damghan" => "دامغان",
                    "Garmsar" => "گرمسار",

                ]
            ],
            "Chaharmahal and Bakhtiari" => [
                "چهارمحال و بختیاری" => [
                    "Shahrekord" => "شهرکرد",
                    "Borujen" => "بروجن",
                    "Lordegan" => "لردگان",

                ]
            ],
            "Kohgiluyeh and Boyer-Ahmad" => [
                "کهگیلویه و بویر احمد" => [
                    "Yasuj" => "یاسوج",
                    "Dehdasht" => "دهدشت",
                    "Dogonbadan" => "دوگنبدان",

                ]
            ],
            "South Khorasan" => [
                "خراسان جنوبی" => [
                    "Birjand" => "بیرجند",
                    "Qaen" => "قاین",
                    "Ferdows" => "فردوس",

                ]
            ],
            "North Khorasan" => [
                "خراسان شمالی" => [
                    "Bojnurd" => "بجنورد",
                    "Shirvan" => "شیروان",
                    "Esfarayen" => "اسفراین",

                ]
            ],
            "Sistan and Baluchestan" => [
                "سیستان و بلوچستان" => [
                    "Zahedan" => "زاهدان",
                    "Zabol" => "زابل",
                    "Iranshahr" => "ایرانشهر",
                    "Chabahar" => "چابهار",

                ]
            ],
        ];;
    }
}
