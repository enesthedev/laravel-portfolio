<?php

namespace App\Console\Commands\Auth;

use App\Classes\Helpers\Command\CommandMessageHelper;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {name : The name of the user} {email : The email of the user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user';

    /**
     * Get rules of new user
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');
        $email = $this->argument('email');
        $password = $this->secret('What is user password?');

        $validator = Validator::make([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'password_confirmation' => $password
        ], $this->rules());

        if ($validator->fails()) {

            CommandMessageHelper::message($this,
                ['Error: New user not created. See error messages below', null],
                $validator->errors()->all()
            );

            return 1;
        }

        User::create([ 'name' => $name, 'email' => $email, 'password' => Hash::make($password)])
            ?->markEmailAsVerified();

        $this->info("The '${name}' user created successfully.");

        return 0;
    }
}
