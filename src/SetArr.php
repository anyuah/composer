<?php
/*
 * @Description: 数组处理
 * @Author: Chen YongHuan
 * @Date: 2021/7/1
 */

namespace SetArr;

class SetArr
{
    function test(){
        return 4648465;
    }

    /**
     * 把数据的健 =>用元素中的某个值代替，该元素多个相同只获取最后一个
     *
     * @param $results 需要格式化的数据
     * @param $field   返回字段值
     * @return
     */
    function new_result($results = [], $key = 'id', $field = '')
    {
        $results_new = [];
        if(!empty($results)) {
            foreach($results as $val) {
                $results_new[$val[$key]] = $field ? $val[$field] : $val;
            }
        }
        return $results_new;
    }

    /**
     * 把数据的健 =>用元素中的某个值代替，该元素多个相同则放在同一数组下
     * @param $results 需要格式化的数据
     * @param $key 字段
     * @return
     */
    function new_results_arr($results = [], $key = 'id')
    {
        $results_new = [];
        if(!empty($results)) {
            foreach($results as $val) {
                $results_new[$val[$key]][] = $val;
            }
        }
        return $results_new;
    }

}