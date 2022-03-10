<?php

namespace App\Classes\Helpers\Command;

use Illuminate\Console\Command;

class CommandMessageHelper
{
    /**
     * Creates beautiful command messages
     *
     * @param Command $command
     * @param array $head
     * @param array $messages
     * @return Command
     */
    public static function message(Command $command, array $head, array $messages)
    {
        $headMessage = $head[0] ?? 'Default message';
        $headMessageColor = $head[1] ?? 'red';

        $command->line("\n <fg=default;bg=${headMessageColor}>${headMessage}</>\n");

        foreach ($messages as $message) {
            if (is_array($message)) {
                $dumpString = "";

                foreach ($message as $parentMessage) {
                    $dumpString = $dumpString . " " . $parentMessage;
                }

                $message = $dumpString;
            }

            $command->line("   <fg=default>${message}</>");

            if (! next($messages)) {
                $command->line("");
            }
        }

        return $command;
    }
}
