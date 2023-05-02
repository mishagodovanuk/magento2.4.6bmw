<?php
namespace Magento\Eav\Model\Entity\Attribute\Source\Table;

/**
 * Interceptor class for @see \Magento\Eav\Model\Entity\Attribute\Source\Table
 */
class Interceptor extends \Magento\Eav\Model\Entity\Attribute\Source\Table implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Eav\Model\ResourceModel\Entity\Attribute\Option\CollectionFactory $attrOptionCollectionFactory, \Magento\Eav\Model\ResourceModel\Entity\Attribute\OptionFactory $attrOptionFactory)
    {
        $this->___init();
        parent::__construct($attrOptionCollectionFactory, $attrOptionFactory);
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
