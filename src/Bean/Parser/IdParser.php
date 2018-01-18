<?php

namespace Swoft\Db\Bean\Parser;

use Swoft\Bean\Parser\AbstractParserInterface;
use Swoft\Db\Bean\Annotation\Id;
use Swoft\Db\Bean\Collector\EntityCollector;

/**
 * Id注解解析器
 *
 * @uses      IdParser
 * @version   2017年09月05日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class IdParser extends AbstractParserInterface
{

    /**
     * Id注解解析
     *
     * @param string $className
     * @param Id     $objectAnnotation
     * @param string $propertyName
     * @param string $methodName
     *
     * @return mixed
     */
    public function parser(string $className, $objectAnnotation = null, string $propertyName = "", string $methodName = "", $propertyValue = null)
    {
        EntityCollector::collect($className, $objectAnnotation, $propertyName, $methodName, $propertyValue);
        return null;
    }
}
