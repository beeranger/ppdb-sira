<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Form;
use App\Models\Unit;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Unit::create(['name'=>'SD','slug'=>'sdi']);
        Unit::create(['name'=>'SMP','slug'=>'smpi']);
        User::create(['name'=>'Admin ppdb','email'=>'admin@ramahanak.com','role'=>'admin','password'=>Hash::make('password')]);
        User::create(['name'=>'user ppdb','email'=>'user@ramahanak.com','role'=>'user','password'=>Hash::make('password')]);

        // $date= Carbon::create(2001, 09, 28);
        Form::create([
            'user_id'=>2,
            'unit_id'=>2,
            'nik'=>'1111000088882222',
            'nisn'=>'2001090998',
            'nama_lengkap'=>'Rudi setiabudi',
            'nama_panggilan'=>'Rudi',
            'tempat_lahir'=>'Depok',
            'tanggal_lahir'=>Carbon::createFromDate(2001,07,22)->toDateTimeString(),
            'berkebutuhan_khusus'=>'tidak',
            'jenis_kelamin'=>'Laki-laki'
        ]);
    }
}
