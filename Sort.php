<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/4
 * Time: 17:48
 */
class Sort
{
    // 初始化函数
    public function __construct()
    {
        echo date("Y-m-d H:i:s",time()) . '：开始调用排序算法' . '<br>';
    }

    /**
     * 冒泡算法
     * 1.比较相邻的元素。如果第一个比第二个大，就交换它们两个;
     * 2.对每一对相邻元素作同样的工作，从开始第一对到结尾的最后一对，这样在最后的元素应该会是最大的数;
     * 3.针对所有的元素重复以上的步骤，除了最后一个;
     * 4.重复步骤1~3，直到排序完成。
     * @param $tmp
     * @return mixed
     */
    public function bubbleSort($tmp)
    {
        $length = count($tmp);
        // 两两比较一共需要比较 $length-1 次
        for ($i = 0; $i < $length - 1; $i++){
            // 每一次的比较需要 $length - 1 ，然后减去之前已经比较好，排好序的数字
            for ($j = 0; $j < $length - 1 - $i; $j++){
                if ($tmp[$j] > $tmp[$j+1]) {
                    $change = $tmp[$j];
                    $tmp[$j] = $tmp[$j+1];
                    $tmp[$j+1] = $change;
                }
            }
        }
        return $tmp;
    }

    // 析构函数
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo date("Y-m-d H:i:s",time()) . '：结束调用排序算法';
    }
}