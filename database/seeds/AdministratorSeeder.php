<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrators = new \App\User;
        $administrators->username = "administrator";
        $administrators->name = "Site Administrator";
        $administrators->email = "administrator@mail.test";
        $administrators->roles = json_encode(["ADMIN"]);
        $administrators->password = \Hash::make(12345678);
        $administrators->avatar = "image.png";
        $administrators->address = "Jl. Kamal Raya, Cengkareng, Jakarta Barat";
        $administrators->phone = "021832242232";

        $administrators->save();

        $this->command->info("User admin berhasil terinsert");
    }
}
