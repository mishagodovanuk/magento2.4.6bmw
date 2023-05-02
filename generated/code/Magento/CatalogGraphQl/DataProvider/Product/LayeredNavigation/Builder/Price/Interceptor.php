<?php
namespace Magento\CatalogGraphQl\DataProvider\Product\LayeredNavigation\Builder\Price;

/**
 * Interceptor class for @see \Magento\CatalogGraphQl\DataProvider\Product\LayeredNavigation\Builder\Price
 */
class Interceptor extends \Magento\CatalogGraphQl\DataProvider\Product\LayeredNavigation\Builder\Price implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogGraphQl\DataProvider\Product\LayeredNavigation\Formatter\LayerFormatter $layerFormatter, \Magento\CatalogGraphQl\DataProvider\Product\LayeredNavigation\AttributeOptionProvider $attributeOptionProvider)
    {
        $this->___init();
        parent::__construct($layerFormatter, $attributeOptionProvider);
    }

    /**
     * {@inheritdoc}
     */
    public function build(\Magento\Framework\Api\Search\AggregationInterface $aggregation, ?int $storeId) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'build');
        return $pluginInfo ? $this->___callPlugins('build', func_get_args(), $pluginInfo) : parent::build($aggregation, $storeId);
    }
}
