<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Form;
use App\Models\Quitioner;
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
        User::create(['name'=>'Admin','email'=>'admin.ppdb@ramahanak.sch.id','role'=>'admin','password'=>Hash::make('password')]);
        User::create(['name'=>'User trial','email'=>'zahrah-fl@ramahanak.sch.id','role'=>'user','password'=>Hash::make('password')]);

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
        Form::create([
            'user_id'=>2,
            'unit_id'=>1,
            'nik'=>'111100008888333',
            'nisn'=>'2001090888',
            'nama_lengkap'=>'Nur',
            'nama_panggilan'=>'Nur',
            'tempat_lahir'=>'Depok',
            'tanggal_lahir'=>Carbon::createFromDate(2006,01,22)->toDateTimeString(),
            'berkebutuhan_khusus'=>'tidak',
            'jenis_kelamin'=>'Perempuan',
            
        ]);
        Quitioner::create([
            'user_id'=>2,
            'quis10' => 'ya',
            'quis20' => 'ya',
            'quis30' => 'ya',
            'quis40' => 'ya',
            'quis50' => 'ya',
            'quis60' => 'ya',
            'quis70' => 'ya',
            'quis80' => 'ya',
            'quis90' => 'ya',
        ]);
    }
}
