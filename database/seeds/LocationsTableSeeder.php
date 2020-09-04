<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('locations')->delete();

        \DB::table('locations')->insert(array (
            0 =>
            array (
                '_lft' => 1,
                '_rgt' => 42,
                'id' => 1,
                'name' => 'Turkey',
                'parent_id' => NULL,
                'sort_order' => 1,
                'type' => 'country',
            ),
            1 =>
            array (
                '_lft' => 2,
                '_rgt' => 21,
                'id' => 2,
                'name' => 'Antalya',
                'parent_id' => 1,
                'sort_order' => 1,
                'type' => 'region',
            ),
            2 =>
            array (
                '_lft' => 3,
                '_rgt' => 4,
                'id' => 3,
                'name' => 'Kemer',
                'parent_id' => 2,
                'sort_order' => 1,
                'type' => 'city',
            ),
            3 =>
            array (
                '_lft' => 5,
                '_rgt' => 6,
                'id' => 4,
                'name' => 'Belek',
                'parent_id' => 2,
                'sort_order' => 1,
                'type' => 'city',
            ),
            4 =>
            array (
                '_lft' => 7,
                '_rgt' => 8,
                'id' => 5,
                'name' => 'Side',
                'parent_id' => 2,
                'sort_order' => 1,
                'type' => 'city',
            ),
            5 =>
            array (
                '_lft' => 9,
                '_rgt' => 10,
                'id' => 6,
                'name' => 'Antalya',
                'parent_id' => 2,
                'sort_order' => 1,
                'type' => 'city',
            ),
            6 =>
            array (
                '_lft' => 11,
                '_rgt' => 14,
                'id' => 7,
                'name' => 'Alanya',
                'parent_id' => 2,
                'sort_order' => 1,
                'type' => 'city',
            ),
            7 =>
            array (
                '_lft' => 15,
                '_rgt' => 20,
                'id' => 8,
                'name' => 'Antalya Airport',
                'parent_id' => 2,
                'sort_order' => 1,
                'type' => 'airport',
            ),
            8 =>
            array (
                '_lft' => 16,
                '_rgt' => 17,
                'id' => 9,
                'name' => 'Konyaalti',
                'parent_id' => 8,
                'sort_order' => 1,
                'type' => 'subregion',
            ),
            9 =>
            array (
                '_lft' => 18,
                '_rgt' => 19,
                'id' => 10,
                'name' => 'Lara',
                'parent_id' => 8,
                'sort_order' => 1,
                'type' => 'subregion',
            ),
            10 =>
            array (
                '_lft' => 12,
                '_rgt' => 13,
                'id' => 11,
                'name' => 'Gazipasa',
                'parent_id' => 7,
                'sort_order' => 1,
                'type' => 'airport',
            ),
            11 =>
            array (
                '_lft' => 22,
                '_rgt' => 33,
                'id' => 12,
                'name' => 'Muğla',
                'parent_id' => 1,
                'sort_order' => 1,
                'type' => 'region',
            ),
            12 =>
            array (
                '_lft' => 23,
                '_rgt' => 26,
                'id' => 13,
                'name' => 'Marmaris',
                'parent_id' => 12,
                'sort_order' => 1,
                'type' => 'city',
            ),
            13 =>
            array (
                '_lft' => 27,
                '_rgt' => 30,
                'id' => 14,
                'name' => 'Bodrum',
                'parent_id' => 12,
                'sort_order' => 1,
                'type' => 'city',
            ),
            14 =>
            array (
                '_lft' => 31,
                '_rgt' => 32,
                'id' => 15,
                'name' => 'Fethiye',
                'parent_id' => 12,
                'sort_order' => 1,
                'type' => 'city',
            ),
            15 =>
            array (
                '_lft' => 24,
                '_rgt' => 25,
                'id' => 16,
                'name' => 'Dalaman',
                'parent_id' => 13,
                'sort_order' => 1,
                'type' => 'airport',
            ),
            16 =>
            array (
                '_lft' => 28,
                '_rgt' => 29,
                'id' => 17,
                'name' => 'Milas',
                'parent_id' => 14,
                'sort_order' => 1,
                'type' => 'airport',
            ),
            17 =>
            array (
                '_lft' => 34,
                '_rgt' => 41,
                'id' => 18,
                'name' => 'Istanbul',
                'parent_id' => 1,
                'sort_order' => 1,
                'type' => 'region',
            ),
            18 =>
            array (
                '_lft' => 35,
                '_rgt' => 40,
                'id' => 19,
                'name' => 'Istanbul',
                'parent_id' => 18,
                'sort_order' => 1,
                'type' => 'city',
            ),
            19 =>
            array (
                '_lft' => 36,
                '_rgt' => 37,
                'id' => 20,
                'name' => 'Istanbul',
                'parent_id' => 19,
                'sort_order' => 1,
                'type' => 'airport',
            ),
            20 =>
            array (
                '_lft' => 38,
                '_rgt' => 39,
                'id' => 21,
                'name' => 'Sabiha',
                'parent_id' => 19,
                'sort_order' => 1,
                'type' => 'airport',
            )
        ));


    }
}
