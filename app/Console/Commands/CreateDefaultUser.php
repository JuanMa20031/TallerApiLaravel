<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateDefaultUser extends Command
{
    protected $signature = 'user:create';

    protected $description = 'Crea un usuario por defecto';

    public function handle()
    {
        $name = $this->ask('Ingresar nombre:');
        $email = $this->ask('Ingresar email:');
        $password = $this->secret('Ingresar contraseña:');

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
        ]);

        $this->info('Usuario creado exitosamente!');
    }
}
