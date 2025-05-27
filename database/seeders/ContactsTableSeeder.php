<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $admin      = Contact::create([
            'name'  => 'John Doee',
            'email' => 'contact@example.com',
            'note'  => 'This is a Note',
        ]);
    }
}
