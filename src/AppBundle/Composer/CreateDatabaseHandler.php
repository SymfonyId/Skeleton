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
        $appDir = $options['symfony-app-dir'];

        if (!is_dir($appDir)) {
            echo 'The symfony-app-dir ('.$appDir.') specified in composer.json was not found in '.getcwd().', can not clear the cache.'.PHP_EOL;

            return;
        }

        try {
            static::executeCommand($event, $appDir, 'doctrine:database:create', $options['process-timeout']);
        } catch (\Exception $e) {
        }
    }
}