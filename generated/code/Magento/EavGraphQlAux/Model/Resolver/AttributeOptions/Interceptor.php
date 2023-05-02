<?php
namespace Magento\EavGraphQlAux\Model\Resolver\AttributeOptions;

/**
 * Interceptor class for @see \Magento\EavGraphQlAux\Model\Resolver\AttributeOptions
 */
class Interceptor extends \Magento\EavGraphQlAux\Model\Resolver\AttributeOptions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\EavGraphQlAux\Model\Resolver\DataProvider\AttributeOptions $optionsProvider)
    {
        $this->___init();
        parent::__construct($optionsProvider);
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
