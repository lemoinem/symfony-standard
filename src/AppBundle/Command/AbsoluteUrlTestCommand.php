<?php
namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AbsoluteUrlTestCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('TEST:absolute-url')
                ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $twig = $this->getContainer()->get('twig');

        $twig->setLoader(new \Twig_Loader_String);
        
        $output->writeln($twig->render('Absolute / URL (url):          {{ url("/") }}'));
        $output->writeln($twig->render('Absolute / URL (absolute_url): {{ absolute_url("/") }}'));
    }
}
