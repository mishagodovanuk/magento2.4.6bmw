<?php
declare(strict_types=1);

namespace Bmw\Cli\Command;

use Magento\Framework\Exception\LocalizedException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Magento\Framework\App\Cache\TypeListInterface as Cache;
use Magento\Framework\App\Cache\Manager;
use Magento\Framework\Shell;

/**
 *
 */
class FastDeploy extends Command
{
    /**
     * @param Cache $cache
     * @param Manager $cacheManager
     * @param Shell $shell
     * @param $name
     */
    public function __construct(
        protected Cache $cache,
        protected Manager $cacheManager,
        protected Shell $shell,
        $name = null
    ) {
        parent::__construct($name);
    }

    /**
     * @return void
     */
    public function configure(): void
    {
        $this->setName('bmw:fast:deploy');
        $this->setDescription('Make fast deploy using c:f, s:up, s:d:c, s:s:d');

        parent::configure();
    }

    /**
     * @throws LocalizedException
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->cacheManager->flush($this->cacheManager->getAvailableTypes());
        $this->shell->execute('bin/magento s:up');
        $this->shell->execute('bin/magento s:d:c');
        $output->writeln('Cache was dropped, updated and di was finished successfully!');

        return 0;
    }
}
