<?php
namespace Magento\EavGraphQlAux\Model\Resolver\AttributeLabels;

/**
 * Interceptor class for @see \Magento\EavGraphQlAux\Model\Resolver\AttributeLabels
 */
class Interceptor extends \Magento\EavGraphQlAux\Model\Resolver\AttributeLabels implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Api\StoreRepositoryInterface $storeRepository)
    {
        $this->___init();
        parent::__construct($storeRepository);
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
