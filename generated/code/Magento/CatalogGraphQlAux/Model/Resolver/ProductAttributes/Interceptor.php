<?php
namespace Magento\CatalogGraphQlAux\Model\Resolver\ProductAttributes;

/**
 * Interceptor class for @see \Magento\CatalogGraphQlAux\Model\Resolver\ProductAttributes
 */
class Interceptor extends \Magento\CatalogGraphQlAux\Model\Resolver\ProductAttributes implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\GraphQl\Schema\Type\Enum\DataMapperInterface $enumDataMapper)
    {
        $this->___init();
        parent::__construct($enumDataMapper);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
