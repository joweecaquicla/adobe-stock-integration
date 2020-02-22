<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\MediaGalleryUi\Controller\Adminhtml\Media;

use Magento\Backend\App\Action;
use Magento\Backend\Model\View\Result\Page;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

/**
 * Controller serving the media gallery content
 */
class Index extends Action implements HttpGetActionInterface
{
    const ADMIN_RESOURCE = 'Magento_MediaGalleryUi::media_gallery';

    /**
     * Get the media gallery layout
     *
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        /** @var Page $resultPage */
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu('Magento_MediaGalleryUi::media_gallery')
            ->addBreadcrumb(__('Media'), __('Media Gallery'));
        $resultPage->getConfig()->getTitle()->prepend(__('Manage Gallery'));

        return $resultPage;
    }
}
