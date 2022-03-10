<?php

namespace App\Console\Commands\Auth;

use App\Classes\Helpers\Command\CommandMessageHelper;
use App\Classes\Helpers\Command\CommandUserModelHelper;
use Illuminate\Console\Command;

class DeleteUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:delete {--u|user=} {--e|email=} {--i|id=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete a selected user record';

    /**
     * Option value string map.
     *
     * @var array|string[]
     */
    protected array $types = [
        'id' => 'id',
        'user' => 'name',
        'email' => 'email'
    ];

    /**
     * The user model helper instance.
     *
     * @var CommandUserModelHelper
     */
    private CommandUserModelHelper $userModelHelperInstance;

    /*
     * Register new command user model helper.
     */
    public function __construct()
    {
        parent::__construct();

        $this->userModelHelperInstance = new CommandUserModelHelper($this);
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $options = $this->options();

        foreach ($options as $optionName => $optionValue) {
            if ($optionValue === null || !in_array($optionName, ['user', 'email', 'id', 'all']))
                continue;

            $users = $this->userModelHelperInstance->getSpecificUsers($optionName, $optionValue, true);
            $deletedUsers = [];

            foreach ($users as $user) {
                $user->delete();
                $deletedUsers[] = 'User [' . $user->id . ', ' . $user->name . '] was deleted';
            }

            CommandMessageHelper::message($this,
                ['Warning: User remove action triggered', 'yellow'],
                $deletedUsers
            );
        }
    }
}
