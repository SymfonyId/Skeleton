<?php
namespace AppBundle\Composer;

/**
 * Author: Muhammad Surya Ihsanuddin<surya.kejawen@gmail.com>
 * Url: http://blog.khodam.org
 */

use Sensio\Bundle\DistributionBundle\Composer\ScriptHandler;
use Composer\Script\CommandEvent;

class CreateDatabaseHandler extends ScriptHandler
{
    public static function createDatabase(CommandEvent $event)
    {
        $options = self::getOptions($event);
        $consoleDir = static::getConsoleDir($event, 'Console Directory');

        try {
            static::executeCommand($event, $consoleDir, 'doctrine:database:create', $options['process-timeout']);
            static::executeCommand($event, $consoleDir, 'doctrine:schema:create', $options['process-timeout']);
            static::executeCommand($event, $consoleDir, 'doctrine:fixtures:load', $options['process-timeout']);
        } catch (\Exception $e) {
        }
    }
}