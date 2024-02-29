<?php

declare(strict_types=1);

namespace Yiisoft\Rbac\Tests\Support;

use Yiisoft\Rbac\Item;
use Yiisoft\Rbac\RuleContext;
use Yiisoft\Rbac\RuleInterface;

final class BanRule implements RuleInterface
{
    public function execute(?string $userId, Item $item, RuleContext $context): bool
    {
        return $context->getParameterValue('viewed') !== true;
    }
}
