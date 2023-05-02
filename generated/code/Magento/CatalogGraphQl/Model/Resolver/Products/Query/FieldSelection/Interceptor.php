<?php
namespace Magento\CatalogGraphQl\Model\Resolver\Products\Query\FieldSelection;

/**
 * Interceptor class for @see \Magento\CatalogGraphQl\Model\Resolver\Products\Query\FieldSelection
 */
class Interceptor extends \Magento\CatalogGraphQl\Model\Resolver\Products\Query\FieldSelection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\GraphQl\Query\FieldTranslator $fieldTranslator)
    {
        $this->___init();
        parent::__construct($fieldTranslator);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductsFieldSelection(\Magento\Framework\GraphQl\Schema\Type\ResolveInfo $resolveInfo) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductsFieldSelection');
        return $pluginInfo ? $this->___callPlugins('getProductsFieldSelection', func_get_args(), $pluginInfo) : parent::getProductsFieldSelection($resolveInfo);
    }
}
