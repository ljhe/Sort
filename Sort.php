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
     * 冒泡排序
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
            // 每一次的比较需要 $length-1，然后减去之前已经比较好，排好序的数字(放在末尾的最大的数字)
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

    /**
     * 选择排序
     * 1.首先在未排序序列中找到最小（大）元素，存放到排序序列的起始位置;
     * 2.再从剩余未排序元素中继续寻找最小（大）元素，然后放到已排序序列的末尾;
     * 3.重复步骤1~2，直到排序完成。
     * @param $tmp
     * @return mixed
     */
    public function selectSort($tmp)
    {
        $length = count($tmp);
        for ($i = 0; $i < $length - 1; $i++){
            // 留存值最小的索引
            $minIndex = $i;
            // 拍好序之后从第一个开始依次存放。所以，每次循环 j 的开始值也依次增加。然后需要从剩余部分一一比较
            for ($j = $i + 1; $j < $length; $j++){
                if ($tmp[$j] < $tmp[$minIndex]) {
                    $minIndex =  $j;
                }
            }
            $change = $tmp[$minIndex];
            $tmp[$minIndex] = $tmp[$i];
            $tmp[$i] = $change;
        }
        return $tmp;
    }

    /**
     * 插入排序
     * 1.从第一个元素开始，该元素可以认为已经被排序;
     * 2.取出下一个元素，在已经排序的元素序列中从后向前扫描;
     * 3.如果该元素（已排序）大于新元素，将该元素移到下一位置;
     * 4.重复步骤3，直到找到已排序的元素小于或者等于新元素的位置;
     * 5.将新元素插入到该位置后;
     * 6.重复步骤2~5。
     * @param $tmp
     * @return mixed
     */
    public function insertSort($tmp)
    {
        $length = count($tmp);
        for ($i = 1; $i < $length; $i++){
            $preIndex =  $i - 1;
            $current = $tmp[$i];
            while ($preIndex >= 0 && $current < $tmp[$preIndex]){
                $tmp[$preIndex + 1] = $tmp[$preIndex];
                $preIndex --;
            }
            $tmp[$preIndex + 1] = $current;
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