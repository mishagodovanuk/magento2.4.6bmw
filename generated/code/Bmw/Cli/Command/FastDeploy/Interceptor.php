<?php
namespace Bmw\Cli\Command\FastDeploy;

/**
 * Interceptor class for @see \Bmw\Cli\Command\FastDeploy
 */
class Interceptor extends \Bmw\Cli\Command\FastDeploy implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Cache\TypeListInterface $cache, \Magento\Framework\App\Cache\Manager $cacheManager, \Magento\Framework\Shell $shell, $name = null)
    {
        $this->___init();
        parent::__construct($cache, $cacheManager, $shell, $name);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
