<?php

namespace App\Console\Commands;

use App\Models\Pengguna;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class AppInit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add require data for application';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $data = [
            'username' => 'superuser',
            'password' => Hash::make('superuser'),
            'email' => 'superuser@email.com',
            'fullname' => "Super User"
        ];


        Pengguna::create($data);

        // mysqli_query('insert into table values()')

    }
}
