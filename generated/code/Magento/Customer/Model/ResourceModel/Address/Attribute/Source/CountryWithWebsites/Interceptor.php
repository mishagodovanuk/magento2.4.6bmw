<?php
namespace Magento\Customer\Model\ResourceModel\Address\Attribute\Source\CountryWithWebsites;

/**
 * Interceptor class for @see \Magento\Customer\Model\ResourceModel\Address\Attribute\Source\CountryWithWebsites
 */
class Interceptor extends \Magento\Customer\Model\ResourceModel\Address\Attribute\Source\CountryWithWebsites implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Eav\Model\ResourceModel\Entity\Attribute\Option\CollectionFactory $attrOptionCollectionFactory, \Magento\Eav\Model\ResourceModel\Entity\Attribute\OptionFactory $attrOptionFactory, \Magento\Directory\Model\ResourceModel\Country\CollectionFactory $countriesFactory, \Magento\Directory\Model\AllowedCountries $allowedCountriesReader, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Model\Config\Share $shareConfig, ?\Magento\Framework\App\Request\Http $request = null, ?\Magento\Customer\Api\CustomerRepositoryInterface $customerRepository = null)
    {
        $this->___init();
        parent::__construct($attrOptionCollectionFactory, $attrOptionFactory, $countriesFactory, $allowedCountriesReader, $storeManager, $shareConfig, $request, $customerRepository);
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
