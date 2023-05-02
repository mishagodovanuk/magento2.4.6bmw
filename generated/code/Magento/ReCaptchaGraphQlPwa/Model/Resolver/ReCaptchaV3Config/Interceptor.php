<?php
namespace Magento\ReCaptchaGraphQlPwa\Model\Resolver\ReCaptchaV3Config;

/**
 * Interceptor class for @see \Magento\ReCaptchaGraphQlPwa\Model\Resolver\ReCaptchaV3Config
 */
class Interceptor extends \Magento\ReCaptchaGraphQlPwa\Model\Resolver\ReCaptchaV3Config implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\ReCaptchaFrontendUi\Model\CaptchaTypeResolver $captchaTypeResolver, \Magento\ReCaptchaVersion3Invisible\Model\Frontend\UiConfigProvider $uiConfigProvider, \Magento\ReCaptchaVersion3Invisible\Model\Frontend\ValidationConfigProvider $validationConfigProvider, \Magento\ReCaptchaFrontendUi\Model\ErrorMessageConfig $errorMessageConfig, array $formTypes = [])
    {
        $this->___init();
        parent::__construct($captchaTypeResolver, $uiConfigProvider, $validationConfigProvider, $errorMessageConfig, $formTypes);
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
