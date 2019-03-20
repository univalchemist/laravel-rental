<?php

use Illuminate\Database\Seeder;

class AmenitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('amenities')->delete();
        
        DB::table('amenities')->insert([
                ['type_id' => '1', 'name' => 'Essentials','description' => 'Essentials','icon' => 'essentials', 'mobile_icon' => 'j'],
                ['type_id' => '1', 'name' => 'TV','description' => '','icon' => 'tv', 'mobile_icon' => 'z'],
                ['type_id' => '1', 'name' => 'Cable TV','description' => '','icon' => 'desktop', 'mobile_icon' => 'f'],
                ['type_id' => '1', 'name' => 'Air Conditioning ','description' => '','icon' => 'air-conditioning', 'mobile_icon' => 'b'],
                ['type_id' => '1', 'name' => 'Heating','description' => 'Heating','icon' => 'heating', 'mobile_icon' => 'o'],
                ['type_id' => '1', 'name' => 'Kitchen','description' => 'Kitchen','icon' => 'meal', 'mobile_icon' => 's'],
                ['type_id' => '1', 'name' => 'Internet','description' => 'Internet','icon' => 'internet', 'mobile_icon' => 'r'],
                ['type_id' => '1', 'name' => 'Wireless Internet','description' => 'Wireless Internet','icon' => 'wifi', 'mobile_icon' => 'B'],
                ['type_id' => '2', 'name' => 'Hot Tub','description' => '','icon' => 'hot-tub', 'mobile_icon' => 'p'],
                ['type_id' => '2', 'name' => 'Washer','description' => 'Washer','icon' => 'washer', 'mobile_icon' => 'A'],
                ['type_id' => '2', 'name' => 'Pool','description' => 'Pool','icon' => 'pool', 'mobile_icon' => 'w'],
                ['type_id' => '2', 'name' => 'Dryer','description' => 'Dryer','icon' => 'dryer', 'mobile_icon' => 'n'],
                ['type_id' => '2', 'name' => 'Breakfast','description' => 'Breakfast','icon' => 'cup', 'mobile_icon' => 'e'],
                ['type_id' => '2', 'name' => 'Free Parking on Premises','description' => '','icon' => 'parking', 'mobile_icon' => 'u'],
                ['type_id' => '2', 'name' => 'Gym','description' => 'Gym','icon' => 'gym', 'mobile_icon' => 'm'],
                ['type_id' => '2', 'name' => 'Elevator in Building','description' => '','icon' => 'elevator', 'mobile_icon' => 'i'],
                ['type_id' => '2', 'name' => 'Indoor Fireplace','description' => '','icon' => 'fireplace', 'mobile_icon' => 'l'],
                ['type_id' => '2', 'name' => 'Buzzer/Wireless Intercom','description' => '','icon' => 'intercom', 'mobile_icon' => 'q'],
                ['type_id' => '2', 'name' => 'Doorman','description' => '','icon' => 'doorman', 'mobile_icon' => 'g'],
                ['type_id' => '2', 'name' => 'Shampoo','description' => '','icon' => 'shampoo', 'mobile_icon' => 'x'],
                ['type_id' => '3', 'name' => 'Family/Kid Friendly','description' => 'Family/Kid Friendly','icon' => 'family', 'mobile_icon' => 'k'],
                ['type_id' => '3', 'name' => 'Smoking Allowed','description' => '','icon' => 'smoking', 'mobile_icon' => 'y'],
                ['type_id' => '3', 'name' => 'Suitable for Events','description' => 'Suitable for Events','icon' => 'balloons', 'mobile_icon' => 'c'],
                ['type_id' => '3', 'name' => 'Pets Allowed','description' => '','icon' => 'paw', 'mobile_icon' => 'v'],
                ['type_id' => '3', 'name' => 'Pets live on this property','description' => '','icon' => 'ok', 'mobile_icon' => 't'],
                ['type_id' => '3', 'name' => 'Wheelchair Accessible','description' => 'Wheelchair Accessible','icon' => 'accessible', 'mobile_icon' => 'a'],
                ['type_id' => '4', 'name' => 'Smoke Detector','description' => 'Smoke Detector','icon' => 'ok', 'mobile_icon' => 't'],
                ['type_id' => '4', 'name' => 'Carbon Monoxide Detector','description' => 'Carbon Monoxide Detector','icon' => 'ok', 'mobile_icon' => 't'],
                ['type_id' => '4', 'name' => 'First Aid Kit','description' => '','icon' => 'ok', 'mobile_icon' => 't'],
                ['type_id' => '4', 'name' => 'Safety Card','description' => 'Safety Card','icon' => 'ok', 'mobile_icon' => 't'],
                ['type_id' => '4', 'name' => 'Fire Extinguisher','description' => 'Essentials','icon' => 'ok', 'mobile_icon' => 't'],
            ]);
    }
}
