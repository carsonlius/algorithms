<?php
/**
 * @purpose         链表节点
 * @copyright       版权所有掌上先机科技有限公司，并保留所有权利
 * @description
 * @property        无
 * @last_edit_time  2020-08-04
 * @author          liusen<liusen@wangdian.cn>
 */

class LinkNode
{
    /** @var int 当前值 */
    public $value;

    /** @var LinkNode $next 下一个节点 */
    public $next;

    public function __construct(int $value)
    {
        $this->value = $value;
    }
}
