<?php
namespace Magento\Customer\Model\Customer\Attribute\Source\Group;

/**
 * Interceptor class for @see \Magento\Customer\Model\Customer\Attribute\Source\Group
 */
class Interceptor extends \Magento\Customer\Model\Customer\Attribute\Source\Group implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Eav\Model\ResourceModel\Entity\Attribute\Option\CollectionFactory $attrOptionCollectionFactory, \Magento\Eav\Model\ResourceModel\Entity\Attribute\OptionFactory $attrOptionFactory, \Magento\Customer\Api\GroupManagementInterface $groupManagement, \Magento\Framework\Convert\DataObject $converter)
    {
        $this->___init();
        parent::__construct($attrOptionCollectionFactory, $attrOptionFactory, $groupManagement, $converter);
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
