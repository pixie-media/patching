<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\CloudPatches\Test\Functional\Acceptance;

/**
 * @group php82
 */
class Acceptance82Cest extends AcceptanceCest
{
    /**
     * @return array
     */
    protected function patchesDataProvider(): array
    {
        return [
            ['templateVersion' => '2.4.6', 'magentoVersion' => '2.4.6'],
            ['templateVersion' => '2.4.6', 'magentoVersion' => '2.4.6-p1'],
            ['templateVersion' => '2.4.7', 'magentoVersion' => null],
        ];
    }
}
