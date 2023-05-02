<?php

declare(strict_types=1);

namespace Bmw\Attributes\Setup\Patch;

use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Exception\FileSystemException;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\ValidatorException;
use Magento\Framework\Filesystem\Directory\ReadFactory;
use Magento\Framework\Module\Dir;
use Magento\Framework\Module\Dir\Reader;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Validator\ValidateException;


/**
 *
 */
class AbstractAttributeInstaller
{
    /**
     * @param Reader $reader
     * @param ReadFactory $readFactory
     * @param ModuleDataSetupInterface $setup
     * @param EavSetupFactory $eavSetupFactory
     */
    public function __construct(
        protected Reader $reader,
        protected ReadFactory $readFactory,
        protected ModuleDataSetupInterface $setup,
        protected EavSetupFactory $eavSetupFactory
    ) {

    }

    /**
     * @param string $filename
     * @return void
     * @throws LocalizedException
     * @throws ValidateException
     */
    public function installAttr(string $filename = ""): void
    {
        if (!$filename) {
            throw new \Exception('Filename required');
        }

        $data = $this->resolveJsonFile($filename);

        if ($data) {
            foreach ($data as $attr) {
                $this->installAttribute($attr);
            }
        }
    }

    /**
     * @throws ValidateException
     * @throws LocalizedException
     */
    protected function installAttribute($data): void
    {
        $eavSetup = $this->eavSetupFactory->create(['setup' => $this->setup]);
        $eavSetup->removeAttribute(\Magento\Catalog\Model\Product::ENTITY, $data->name);
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            $data->name,
            [
                'type' => $data->type,
                'backend' => $data->backend,
                'frontend' => $data->frontend,
                'label' => $data->label,
                'input' => $data->input,
                'class' => $data->class,
                'source' => $data->source,
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible' => (bool) $data->visible,
                'required' => (bool) $data->required,
                'user_defined' => (bool) $data->user_defined,
                'default' => $data->default,
                'searchable' => (bool) $data->searchable,
                'filterable' => (bool) $data->filterable,
                'comparable' => (bool) $data->comparable,
                'visible_on_front' => (bool) $data->visible_on_front,
                'used_in_product_listing' => (bool) $data->used_in_product_listing,
                'unique' => (bool) $data->unique,
                'apply_to' => $data->apply_to
            ]
        );
    }


    /**
     * @param string $filename
     * @return mixed
     * @throws FileSystemException
     * @throws ValidatorException
     */
    protected function resolveJsonFile(string $filename): mixed
    {
        $path = $this->reader->getModuleDir(Dir::MODULE_SETUP_DIR, 'Bmw_Attributes');
        $file = $this->readFactory->create($path);
        $path = $path . "/Data/{$filename}";
        $file = $file->readFile($path);

        return json_decode($file);
    }
}
