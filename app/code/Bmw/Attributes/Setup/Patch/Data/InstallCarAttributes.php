<?php
declare(strict_types=1);

namespace Bmw\Attributes\Setup\Patch\Data;

use Bmw\Attributes\Setup\Patch\AbstractAttributeInstaller;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchRevertableInterface;

class InstallCarAttributes implements DataPatchInterface, PatchRevertableInterface
{
    public function __construct(
        protected ModuleDataSetupInterface $moduleDataSetup,
        protected AbstractAttributeInstaller $abstractAttributeInstaller
    ) {

    }

    /**
     * @throws \Exception
     */
    public function apply(): void
    {
        $this->moduleDataSetup->startSetup();

        $this->abstractAttributeInstaller->installAttr('carsAttributes.json');

        $this->moduleDataSetup->endSetup();
    }

    public function getAliases(): array
    {
        return [];
    }

    public static function getDependencies(): array
    {
        return [];
    }

    public function revert()
    {
        // TODO: Implement revert() method.
    }
}
