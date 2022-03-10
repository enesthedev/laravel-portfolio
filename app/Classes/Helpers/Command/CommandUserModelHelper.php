<?php

namespace App\Classes\Helpers\Command;

use App\Models\User;
use Illuminate\Console\Command;

class CommandUserModelHelper
{
    /**
     * Command instance variable.
     *
     * @var
     */
    private $command;

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
     * Register command instance to class.
     *
     * @param Command $command
     */
    function __construct(Command $command)
    {
        $this->command = $command;
    }

    /**
     * Get and print user credentials given type of search value
     *
     * @param string $searchType
     * @param string $searchValue
     * @param bool $printable
     * @return mixed
     */
    public function getSpecificUser(string $searchType, string $searchValue, bool $printable)
    {
        $user = User::where($this->types[$searchType], $searchValue)
            ->get(['id', 'name', 'email']);

        if ((! $user )&& $printable)
            CommandMessageHelper::message($this->command,
                ['Error: Database record not found. See error messages below', null],
                ['User ' . $searchValue . ' does not exists']
            );

        if ($printable)
            CommandMessageHelper::message($this->command,
                ['Found: ' . $user->count() . ' Record', 'green'],
                $user->toArray()
            );

        return $user;
    }
}
