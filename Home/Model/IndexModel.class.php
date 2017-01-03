<?php 
namespace Home\Model;
use Think\Model;
class IndexModel extends Model{
	/**
	 * index页面的图片显示
	 * 1.根据design表中划分字段design_devide字段查找到所有的第一部分的图片，只找出最热门的4张
	 * 2.同理找出第二部分的4张
	 * 3.拼装成一个大数组，对大数组中的所有的图片路径进行处理
	 * 4.最后将处理好的数组返回给index控制器中的index方法
	 * @return [type] [description]/
	 */
	function getItems(){
		$design = M("design");
        //获取主页划分的第一部分的图片
        $result1 = $design->where('devide=1')->order('hot desc')->field('id,show_img')->select();
       
        $result2 = $design->where('devide=2')->order('hot desc')->field('id,show_img')->select();

        $result3 = $design->where('devide=3')->order('hot desc')->field('id,show_img')->select();

        // show_bug($devideResult);
        //拼装3个单元元素的数组
        $result = array($result1,$result2,$result3);	 
        foreach ($result as $key => $value) {
        	for($i=0; $i<4; $i++){
     
        		// echo DESIGN_IMG.$value[$i]['design_show_img'];
             	$result[$key][$i]['show_img'] = DESIGN_IMG.$value[$i]['show_img'];
        	}
        }
        // show_bug($result);
        return $result;
	}
    
    /**
     * showDesin页面的图片显示
     * 1.查找design表中所有的design_id,design_show_img字段
     * 2.将所有的元素，切分成每个单元4个元素
     * 3.拼装图片路径，图片源路径+数据库的图片名
     * 4.给showDesign方法控制器调用
     * @return [array] [所有设计分切后的数组]
     */
	function findDesign(){
		$design = M("design");
        //获取所有元素
        $result = $design->where('id>=0')->field('id,show_img')->select();
        //将元素组分隔四分组成新的数组
        $devideResult = array_chunk ($result, 4);

        // show_bug($devideResult);
        foreach ($devideResult as $key => $value) {
        	for($i=0;$i<4;$i++){
     
        		// echo DESIGN_IMG.$value[$i]['design_show_img'];
             	$devideResult[$key][$i]['show_img'] = DESIGN_IMG.$value[$i]['show_img'];
        	}
        }
        
        return $devideResult;
	}

	

}