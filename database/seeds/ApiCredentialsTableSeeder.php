<?php

use Illuminate\Database\Seeder;

class ApiCredentialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('api_credentials')->delete();
        
        DB::table('api_credentials')->insert([
                ['name' => 'client_id', 'value' => '1019935191407568', 'site' => 'Facebook'],
                ['name' => 'client_secret', 'value' => '05708b2c4bd230456c26c56a5a04e8cd', 'site' => 'Facebook'],
                ['name' => 'client_id', 'value' => '894509644009-r083bc1tjki49v2ggej94uggjkvpiepn.apps.googleusercontent.com', 'site' => 'Google'],
                ['name' => 'client_secret', 'value' => 'eTilJDqraZ5v-rwL9BcJcBWJ', 'site' => 'Google'],
                ['name' => 'client_id', 'value' => '814qxyvczj5t7z', 'site' => 'LinkedIn'],
                ['name' => 'client_secret', 'value' => 'mkuRNAxW9TSp22Zf', 'site' => 'LinkedIn'],
                ['name' => 'key', 'value' => 'AIzaSyDUZCl7rJEpbBjb0U_AyjTU7kPZ75yrtew', 'site' => 'GoogleMap'],
                ['name' => 'server_key', 'value' => 'AIzaSyBMDlJwGr8hpNFGDHW3ZvRTDfK7QC79RKU', 'site' => 'GoogleMap'],
                ['name' => 'key', 'value' => 'd7b78816', 'site' => 'Nexmo'],
                ['name' => 'secret', 'value' => '99a1dde9a6079c4a', 'site' => 'Nexmo'],
                ['name' => 'from', 'value' => 'Nexmo', 'site' => 'Nexmo'],
                ['name' => 'cloudinary_name', 'value' => 'trioangle', 'site' => 'Cloudinary'],
                ['name' => 'cloudinary_key', 'value' => '61.5.4166895281', 'site' => 'Cloudinary'],
                ['name' => 'cloudinary_secret', 'value' => 'rR8TvKxDPtR0PGh2VLJcxVf7HVk', 'site' => 'Cloudinary'],
                ['name' => 'cloud_base_url', 'value' => 'http://res.cloudinary.com/trioangle', 'site' => 'Cloudinary'],
                ['name' => 'cloud_secure_url', 'value' => 'https://res.cloudinary.com/trioangle', 'site' => 'Cloudinary'],
                ['name' => 'cloud_api_url', 'value' => 'https://api.cloudinary.com/v1_1/trioangle', 'site' => 'Cloudinary'],
            ]);
    }
}
