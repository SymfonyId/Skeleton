<?php
namespace AppBundle\Command;

/**
 * Author: Muhammad Surya Ihsanuddin<surya.kejawen@gmail.com>
 * Url: http://blog.khodam.org
 */

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SkeletonSetupCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('siab:skeleton:setup')
            ->setDescription('Siab Skeleton Setup')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $createDatabase = $this->getApplication()->find('doctrine:database:create');
        $createSchema = $this->getApplication()->find('doctrine:schema:create');
        $loadFixtures = $this->getApplication()->find('doctrine:fixtures:load');

        $createDatabase->run($input, $output);
        $createSchema->run($input, $output);
        $loadFixtures->run($input, $output);

        $output->writeln('<info>SIAB Skeleton sudah siap digunakan...</info>');
        $output->writeln('<info>Jalankan: php bin/console server:run</info>');
        $output->writeln('<info>Username dan password: siab</info>');
    }
}