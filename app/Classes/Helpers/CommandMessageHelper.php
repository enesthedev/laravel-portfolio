<?php

namespace App\Classes\Helpers;

use Illuminate\Console\Command;

class CommandMessageHelper
{
    public static function message(Command $command, array $head, array $messages)
    {
        $headMessage = $head[0] ?? 'Default message';
        $headMessageColor = $head[1] ?? 'red';

        $command->line("\n <fg=default;bg=${headMessageColor}>${headMessage}</>\n");

        foreach ($messages as $message) {
            $command->line("   <fg=default>${message}</>");

            if (! next($messages)) {
                $command->line("");
            }
        }

        return $command;
    }
}
