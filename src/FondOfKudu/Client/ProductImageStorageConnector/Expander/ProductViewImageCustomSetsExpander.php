<?php

namespace FondOfKudu\Client\ProductImageStorageConnector\Expander;

use Generated\Shared\Transfer\ProductViewTransfer;

class ProductViewImageCustomSetsExpander implements ProductViewImageExpanderInterface
{
    /**
     * @param \Generated\Shared\Transfer\ProductViewTransfer $productViewTransfer
     * @param string $locale
     * @param string $imageSetName
     *
     * @return \Generated\Shared\Transfer\ProductViewTransfer
     */
    public function expandProductViewImageData(
        ProductViewTransfer $productViewTransfer,
        string $locale,
        string $imageSetName
    ): ProductViewTransfer {
        return $productViewTransfer;
    }
}
