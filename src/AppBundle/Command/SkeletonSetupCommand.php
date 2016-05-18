<?php
namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @author Muhammad Surya Ihsanuddin <surya.kejawen@gmail.com>
 */
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
        $createSchema = $this->getApplication()->find('doctrine:schema:create');
        $loadFixtures = $this->getApplication()->find('doctrine:fixtures:load');
        $installAssets = $this->getApplication()->find('assets:install');
        $dumpJsRouting = $this->getApplication()->find('fos:js-routing:dump');

        $createSchema->run($input, $output);
        $loadFixtures->run($input, $output);
        $installAssets->run(new ArrayInput(array('--relative' => true)), $output);
        $dumpJsRouting->run($input, $output);

        $output->writeln('<info>SIAB Skeleton sudah siap digunakan...</info>');
        $output->writeln('<info>Jalankan: php bin/console server:run</info>');
        $output->writeln('<info>Username dan password: siab</info>');
        $output->writeln('<info>localhost:8000/admin</info>');
    }
}
