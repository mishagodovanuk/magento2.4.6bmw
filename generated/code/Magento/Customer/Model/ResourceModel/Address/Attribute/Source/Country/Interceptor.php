<?php
namespace Magento\Customer\Model\ResourceModel\Address\Attribute\Source\Country;

/**
 * Interceptor class for @see \Magento\Customer\Model\ResourceModel\Address\Attribute\Source\Country
 */
class Interceptor extends \Magento\Customer\Model\ResourceModel\Address\Attribute\Source\Country implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Eav\Model\ResourceModel\Entity\Attribute\Option\CollectionFactory $attrOptionCollectionFactory, \Magento\Eav\Model\ResourceModel\Entity\Attribute\OptionFactory $attrOptionFactory, \Magento\Directory\Model\ResourceModel\Country\CollectionFactory $countriesFactory)
    {
        $this->___init();
        parent::__construct($attrOptionCollectionFactory, $attrOptionFactory, $countriesFactory);
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
