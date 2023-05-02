<?php
namespace Magento\EavGraphQlAux\Model\Resolver\DataProvider\AttributeMetadata;

/**
 * Interceptor class for @see \Magento\EavGraphQlAux\Model\Resolver\DataProvider\AttributeMetadata
 */
class Interceptor extends \Magento\EavGraphQlAux\Model\Resolver\DataProvider\AttributeMetadata implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\GraphQl\Query\Uid $uidEncoder, \Magento\Framework\GraphQl\Query\EnumLookup $enumLookup, \Magento\EavGraphQl\Model\Resolver\Query\Type $type)
    {
        $this->___init();
        parent::__construct($uidEncoder, $enumLookup, $type);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeMetadata(\Magento\Eav\Api\Data\AttributeInterface $attribute, int $storeId, string $entityType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeMetadata');
        return $pluginInfo ? $this->___callPlugins('getAttributeMetadata', func_get_args(), $pluginInfo) : parent::getAttributeMetadata($attribute, $storeId, $entityType);
    }
}
