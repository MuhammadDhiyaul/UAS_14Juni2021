<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $inputan['name'] = 'Fathin Naufaliya';
        $inputan['email'] = 'fathinnaufalia@gmail.com';//ganti pake emailmu
        $inputan['password'] = Hash::make('password');//passwordnya 123258
        $inputan['phone'] = '081363884319';
        $inputan['alamat'] = 'Sumberrejo-Bojonegoro';
        $inputan['role'] = 'admin';//kita akan membuat akun atau users in dengan role admin
        User::create($inputan);
    }
}
