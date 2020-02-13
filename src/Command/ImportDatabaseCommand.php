<?php

namespace App\Command;

use App\Entity\ProductList;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\Self_;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class ImportDatabaseCommand extends Command
{
    protected static $defaultName = 'app:import_database';

    /** @var EntityManagerInterface */
    private $em;

    /**
     * AppImportGtfsCommand constructor.
     *
     * @param EntityManagerInterface $em
     */

    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct(Self_::$defaultName);
        $this -> em = $em;
    }


    protected function configure()
    {
        $this
            ->setDescription('Add a short description for your command')
            ->addArgument('entity', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $entity = $input -> getArgument('entity');

        $txtName = $entity .'txt';

        $txt = file(__DIR__ . '/../../database/'. $txtName);
        $keys = [];

        foreach ($txt as $key => $line) {
            $data = str_getcsv($line);

            if ($key === 0) {
                $keys = $data;
            } else {
                $data = array_combine($keys, $data);

                if ($entity === 'ProductList') {
                    $object = new ProductList();
                    $object -> setProduct($data['product']);
                    $object -> setFamily($data['family']);
                    $object -> setType($data['type']);
                    $object -> setExpireAt($data['expireAt']);
                    $object -> setPerime($data['perime']);
                }
                $this -> em -> persist($object);
                $this -> em -> flush();
            }
        }

        return 0;
    }
}
