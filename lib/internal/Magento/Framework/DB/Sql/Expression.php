<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\DB\Sql;

use Zend\Stdlib\JsonSerializable;

/**
 * Class is wrapper over Zend_Db_Expr for implement JsonSerializable interface.
 */
class Expression extends \Zend_Db_Expr implements ExpressionInterface, JsonSerializable
{
    /**
     * @inheritdoc
     */
    public function jsonSerialize()
    {
        return [
            'class' => static::class,
            'arguments' => [
                'expression' => $this->_expression,
            ],
        ];
    }
}
