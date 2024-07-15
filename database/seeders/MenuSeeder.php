<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            // appetizer
            [
                'id' => 1,
                'name' => 'Sosis Solo',
                'description' => 'Daging sapi cincang dibungkus kulit tipis, digoreng renyah hingga keemasan. Nikmati sensasi gurihnya yang memanjakan lidah!',
                'profile_yt' => 'Dapurumi',
                'link_yt' => 'https://youtu.be/40id-EnbX1g?si=0HW-W3n8dnuQqyNO',
                'img_menu' => 'img_menu/sosis_solo.png',
                'flavor_id' => 1,
                'price' => 19000,
                'type_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Gohyong',
                'description' => 'Daging ayam berbumbu dalam kulit tahu goreng yang renyah. Cita rasa gurih dengan sentuhan manis-pedas yang menggoda.',
                'profile_yt' => 'Dapurumi',
                'link_yt' => 'https://youtu.be/iNLFp3Ff_VI?si=4l028AL90yWK75LO',
                'img_menu' => 'img_menu/gohyong.png',
                'flavor_id' => 1,
                'price' => 27200,
                'type_id' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Kroket Jepang',
                'description' => 'Ayam dengan bumbu rujak pedas manis khas Indonesia. Lezatnya bumbu meresap sempurna!',
                'profile_yt' => 'Dapurumi',
                'link_yt' => 'https://youtu.be/JdbGiA_P9Go?si=Ll6v5kXzNdDNwort',
                'img_menu' => 'img_menu/kroket_jepang.png',
                'flavor_id' => 1,
                'price' => 24700,
                'type_id' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Gyoza',
                'description' => 'Pangsit Jepang berisi daging dan sayuran, digoreng hingga renyah. Nikmati kelezatan autentik Jepang!',
                'profile_yt' => 'Dapurumi',
                'link_yt' => 'https://youtu.be/ceIOLc4RMZw?si=X9RKS6tjJqCClojh',
                'img_menu' => 'img_menu/gyoza.png',
                'flavor_id' => 1,
                'price' => 20800,
                'type_id' => 1,
            ],
            // main course
            [
                'id' => 5,
                'name' => 'Ayam cili padi',
                'description' => 'Potongan ayam pedas menggigit dengan bumbu cili padi khas. Pedasnya mantap, bikin ketagihan!',
                'profile_yt' => 'Puguh Kristanto Kitchen',
                'link_yt' => 'https://youtu.be/xpQuD0jlqjA?si=YI5VaNN0gEzX8ld6',
                'img_menu' => 'img_menu/img_81182.png',
                'flavor_id' => 1,
                'price' => 16300,
                'type_id' => 2,
            ],
            [
                'id' => 6,
                'name' => 'Korean Spicy Chicken',
                'description' => 'Ayam goreng ala Korea dengan saus pedas manis. Rasakan kelezatan pedas yang autentik dan memikat.',
                'profile_yt' => 'Dapurumi',
                'link_yt' => 'https://youtu.be/q4lE6hXJUSs?si=sQQE9zibEZrxrQ-f',
                'img_menu' => 'img_menu/group_491.png',
                'flavor_id' => 1,
                'price' => 17800,
                'type_id' => 2,
            ],
            [
                'id' => 7,
                'name' => 'Ayam bumbu rujak',
                'description' => 'Ayam dengan bumbu rujak pedas manis khas Indonesia. Lezatnya bumbu meresap sempurna!',
                'profile_yt' => 'Dapurumi',
                'link_yt' => 'https://youtu.be/ZfLnYfxA0lo?si=P4jVa5YzWywa-wsR',
                'img_menu' => 'img_menu/ayam_bumbu_rujak.png',
                'flavor_id' => 1,
                'price' => 24900,
                'type_id' => 2,
            ],
            [
                'id' => 8,
                'name' => 'Udang Mentega',
                'description' => 'Udang segar dimasak dengan saus mentega yang gurih. Sensasi lezat yang memanjakan lidah.',
                'profile_yt' => 'Ceceromed Kitchen',
                'link_yt' => 'https://youtu.be/GSoWf4asDUM?si=dtA5WOkNwHd3l4Ic',
                'img_menu' => 'img_menu/udang_mentega.png',
                'flavor_id' => 1,
                'price' => 20500,
                'type_id' => 2,
            ],
            // dessert
            [
                'id' => 9,
                'name' => 'Sago Milk Pudding',
                'description' => 'Puding susu lembut dengan butiran sagu yang kenyal. Manis, creamy, dan menyegarkan!',
                'profile_yt' => 'Trivina Kitchen',
                'link_yt' => 'https://youtu.be/mSQzIpvdVEc?si=6YJtNoKEV0HRyjkG',
                'img_menu' => 'img_menu/sago_milk_pudding.png',
                'flavor_id' => 1,
                'price' => 17700,
                'type_id' => 3,
            ],
            [
                'id' => 10,
                'name' => 'Jelly Sago',
                'description' => 'Jelly kenyal dengan sagu yang lembut dalam sirup manis. Paduan tekstur dan rasa yang menyenangkan.',
                'profile_yt' => 'Trivina Kitchen',
                'link_yt' => 'https://youtu.be/PnMkBGatlwU?si=N0YpZG2SUyqilNsQ',
                'img_menu' => 'img_menu/jelly_sago.png',
                'flavor_id' => 1,
                'price' => 16300,
                'type_id' => 3,
            ],
            [
                'id' => 11,
                'name' => 'Es bandung',
                'description' => 'Minuman manis dari susu dan sirup mawar. Segarnya pas untuk dinikmati di segala suasana.',
                'profile_yt' => 'Dapurumi',
                'link_yt' => 'https://youtu.be/GQsorYVMceQ?si=7_U-PfvCBFv8gnTS',
                'img_menu' => 'img_menu/es_bandung.png',
                'flavor_id' => 1,
                'price' => 15500,
                'type_id' => 3,
            ],
            [
                'id' => 12,
                'name' => 'Blueberry Cheese Milk',
                'description' => 'Minuman segar dari susu dan keju dengan saus blueberry. Manis, creamy, dan begitu menyegarkan!',
                'profile_yt' => 'Dapurumi',
                'link_yt' => 'https://youtu.be/HfnSuMARTHk?si=wixvEPPxjJaSpLlT',
                'img_menu' => 'img_menu/berry_cheese_milk.png',
                'flavor_id' => 1,
                'price' => 20600,
                'type_id' => 3,
            ],
        ];

        foreach ($menus as &$menu) {
            $menu['created_at'] = Carbon::now();
            $menu['updated_at'] = Carbon::now();
        }

        DB::table('menus')->insert($menus);

        $bundlingTypes = [];
        foreach (range(1, 4) as $bundlingId) {
            foreach (range(1, 4) as $menuId) {
                $bundlingTypes[] = [
                    'name_type' => 'Bundling Appetizer',
                    'bundling_id' => $bundlingId,
                    'menu_id' => $menuId,
                    'qty' => 0,
                    'status_bundling' => 2,
                ];
            }
            foreach (range(5, 8) as $menuId) {
                $bundlingTypes[] = [
                    'name_type' => 'Bundling Maincourse',
                    'bundling_id' => $bundlingId,
                    'menu_id' => $menuId,
                    'qty' => 0,
                    'status_bundling' => 2,
                ];
            }
            foreach (range(9, 12) as $menuId) {
                $bundlingTypes[] = [
                    'name_type' => 'Bundling Dessert',
                    'bundling_id' => $bundlingId,
                    'menu_id' => $menuId,
                    'qty' => 0,
                    'status_bundling' => 2,
                ];
            }
        }

        DB::table('bundling_types')->insert($bundlingTypes);
    }
}
