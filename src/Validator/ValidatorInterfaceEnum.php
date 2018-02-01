<?php

namespace Swoft\Db\Validator;

use Swoft\Bean\Annotation\Bean;
use Swoft\Exception\ValidatorException;

/**
 * 枚举类型验证器
 * @Bean("ValidatorEnum")
 *
 * @uses      ValidatorInterfaceEnum
 * @version   2017年09月14日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class ValidatorInterfaceEnum implements ValidatorInterface
{
    /**
     * 枚举类型验证
     *
     * @param string $cloum     字段名称
     * @param mixed  $value     字段传入值
     * @param array  ...$params 其它参数数组传入
     * @throws ValidatorException
     * @return bool 成功返回true,失败抛异常
     */
    public function validate(string $cloum, $value, ...$params): bool
    {
        if (! isset($params[0][0]) || ! \in_array($value, $params[0][0])) {
            throw new ValidatorException('数据库字段值验证失败，不是在枚举集合的里面，column=' . $cloum . ' enum=' . json_encode($params[0][0]));
        }
        return true;
    }
}
