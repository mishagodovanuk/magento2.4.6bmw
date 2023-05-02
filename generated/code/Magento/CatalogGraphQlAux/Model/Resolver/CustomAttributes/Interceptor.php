<?php
namespace Magento\CatalogGraphQlAux\Model\Resolver\CustomAttributes;

/**
 * Interceptor class for @see \Magento\CatalogGraphQlAux\Model\Resolver\CustomAttributes
 */
class Interceptor extends \Magento\CatalogGraphQlAux\Model\Resolver\CustomAttributes implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\GraphQl\Query\Uid $uidEncoder, \Magento\EavGraphQlAux\Model\Resolver\Query\Attributes $attributes, \Magento\EavGraphQlAux\Model\Resolver\DataProvider\AttributeMetadata $metadataProvider, \Magento\EavGraphQlAux\Model\Resolver\DataProvider\AttributeOptions $attributeOptions, ?array $selectableTypes = null, ?\Magento\Catalog\Helper\Output $outputHelper = null)
    {
        $this->___init();
        parent::__construct($uidEncoder, $attributes, $metadataProvider, $attributeOptions, $selectableTypes, $outputHelper);
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
