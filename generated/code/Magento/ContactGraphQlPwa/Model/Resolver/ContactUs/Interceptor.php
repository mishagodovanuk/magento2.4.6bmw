<?php
namespace Magento\ContactGraphQlPwa\Model\Resolver\ContactUs;

/**
 * Interceptor class for @see \Magento\ContactGraphQlPwa\Model\Resolver\ContactUs
 */
class Interceptor extends \Magento\ContactGraphQlPwa\Model\Resolver\ContactUs implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Contact\Model\MailInterface $mail, \Magento\Contact\Model\ConfigInterface $contactConfig, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Validator\EmailAddress $emailValidator)
    {
        $this->___init();
        parent::__construct($mail, $contactConfig, $logger, $emailValidator);
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
