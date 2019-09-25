<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\MagentoCloud\Config\Stage;

use Magento\MagentoCloud\Config\StageConfigInterface;

/**
 * Provides access to configuration of build stage.
 */
interface BuildInterface extends StageConfigInterface
{
    /**
     * The number of subdirectories that will be created to save the report
     */
    const VAR_ERROR_REPORT_DIR_NESTING_LEVEL = 'ERROR_REPORT_DIR_NESTING_LEVEL';
}
