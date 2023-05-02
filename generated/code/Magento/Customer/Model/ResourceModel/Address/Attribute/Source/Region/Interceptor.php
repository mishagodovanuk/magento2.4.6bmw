<?php
namespace Magento\Customer\Model\ResourceModel\Address\Attribute\Source\Region;

/**
 * Interceptor class for @see \Magento\Customer\Model\ResourceModel\Address\Attribute\Source\Region
 */
class Interceptor extends \Magento\Customer\Model\ResourceModel\Address\Attribute\Source\Region implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Eav\Model\ResourceModel\Entity\Attribute\Option\CollectionFactory $attrOptionCollectionFactory, \Magento\Eav\Model\ResourceModel\Entity\Attribute\OptionFactory $attrOptionFactory, \Magento\Directory\Model\ResourceModel\Region\CollectionFactory $regionsFactory)
    {
        $this->___init();
        parent::__construct($attrOptionCollectionFactory, $attrOptionFactory, $regionsFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function addValueSortToCollection($collection, $dir = 'ASC')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addValueSortToCollection');
        return $pluginInfo ? $this->___callPlugins('addValueSortToCollection', func_get_args(), $pluginInfo) : parent::addValueSortToCollection($collection, $dir);
    }
}
