<?php

namespace Swoft\Db;

/**
 * 查询器接口
 *
 * @uses      QueryBuilderInterface
 * @version   2017年09月02日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
interface QueryBuilderInterface
{
    /**
     * @return \Swoft\Core\ResultInterface
     */
    public function execute();
}
