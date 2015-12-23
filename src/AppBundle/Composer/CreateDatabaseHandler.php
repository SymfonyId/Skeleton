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
        $consoleDir = static::getConsoleDir($event, 'clear the cache');

        try {
            static::executeCommand($event, $consoleDir, 'doctrine:database:create', $options['process-timeout']);
        } catch (\Exception $e) {
        }
    }
}