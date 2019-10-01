<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\AvailabilityGui\Communication\Helper;

use Generated\Shared\Transfer\ProductAbstractAvailabilityTransfer;

class ProductStockHelper implements ProductStockHelperInterface
{
    /**
     * @param \Generated\Shared\Transfer\ProductAbstractAvailabilityTransfer $productAbstractAvailabilityTransfer
     *
     * @return \Generated\Shared\Transfer\ProductAbstractAvailabilityTransfer
     */
    public function trimProductAbstractAvailabilityQuantities(ProductAbstractAvailabilityTransfer $productAbstractAvailabilityTransfer): ProductAbstractAvailabilityTransfer
    {
        $productAbstractAvailabilityTransfer->setStockQuantity(
            $productAbstractAvailabilityTransfer->getStockQuantity()->trim()
        );

        $productAbstractAvailabilityTransfer->setReservationQuantity(
            $productAbstractAvailabilityTransfer->getReservationQuantity()->trim()
        );

        return $productAbstractAvailabilityTransfer;
    }
}
