<?php

namespace App\Console\Commands\Auth;

use App\Classes\Helpers\Command\CommandMessageHelper;
use App\Classes\Helpers\Command\CommandUserModelHelper;
use App\Models\User;
use Illuminate\Console\Command;

class ShowUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:show {--u|user=} {--e|email=} {--i|id=} {--a|all}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Shows a specific user credentials';

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
            if ($optionValue === null || ! in_array($optionName, ['user', 'email', 'id', 'all']))
                continue;

            switch ($optionName) {
                case 'all': {
                    if ($optionValue === false) {
                        break;
                    }

                    CommandMessageHelper::message($this,
                        ['List of all users', 'blue'],
                        User::all(['id', 'name', 'email'])
                            ->toArray()
                    );

                    break;
                }

                default: {
                    $this->userModelHelperInstance->getSpecificUsers($optionName, $optionValue, true);
                }
            }
        }

        return 0;
    }
}
