<?php
namespace Magento\Eav\Model\Entity\Attribute\Source\Store;

/**
 * Interceptor class for @see \Magento\Eav\Model\Entity\Attribute\Source\Store
 */
class Interceptor extends \Magento\Eav\Model\Entity\Attribute\Source\Store implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Eav\Model\ResourceModel\Entity\Attribute\Option\CollectionFactory $attrOptionCollectionFactory, \Magento\Eav\Model\ResourceModel\Entity\Attribute\OptionFactory $attrOptionFactory, \Magento\Store\Model\ResourceModel\Store\CollectionFactory $storeCollectionFactory)
    {
        $this->___init();
        parent::__construct($attrOptionCollectionFactory, $attrOptionFactory, $storeCollectionFactory);
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
