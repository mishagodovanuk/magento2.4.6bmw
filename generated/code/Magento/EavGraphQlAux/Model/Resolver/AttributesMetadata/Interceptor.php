<?php
namespace Magento\EavGraphQlAux\Model\Resolver\AttributesMetadata;

/**
 * Interceptor class for @see \Magento\EavGraphQlAux\Model\Resolver\AttributesMetadata
 */
class Interceptor extends \Magento\EavGraphQlAux\Model\Resolver\AttributesMetadata implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\EavGraphQlAux\Model\Resolver\Query\Attributes $attributes, \Magento\Framework\GraphQl\Schema\Type\Enum\DataMapperInterface $enumDataMapper, \Magento\EavGraphQlAux\Model\Resolver\DataProvider\AttributeMetadata $metadataProvider)
    {
        $this->___init();
        parent::__construct($attributes, $enumDataMapper, $metadataProvider);
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
