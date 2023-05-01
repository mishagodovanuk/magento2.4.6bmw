<?php

declare(strict_types=1);

namespace Bmw\Posts\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Index implements HttpGetActionInterface
{
    public function __construct(protected PageFactory $pageFactory)
    {
    }

    public function execute(): Page|ResultInterface|ResponseInterface
    {
        return $this->pageFactory->create();
    }
}
