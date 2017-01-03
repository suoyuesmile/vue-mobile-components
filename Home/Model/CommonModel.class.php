<?php 
namespace Home\Model;
use Think\Model;
class CommonModel extends Model{
	function findDetails($designId){
		$detail = M('detail');
		//配置多表查询的表名
		$dbTable = array(
			'zxy_design'              =>  'design',
			'zxy_designer'            =>  'designer',
			'zxy_design_cate_style'   =>  'style',
			'zxy_design_category'     =>  'cate',
			'zxy_design_image'        =>  'image'
			);
		//连贯查询
		$result = $detail
		    ->field('design.id,design.code,design.name,design.fans,design.fans_order,designer.relname,style.styname,cate.catname,image.big_url,design.status')
		    ->table($dbTable)
		    ->where('design.id=%d and design.designer=designer.id and design.style=style.id and     
		    	     design.category=cate.id and design.img_id=image.id',$designId)
		    ->select();
		$result[0]['big_url'] = DESIGN_IMG.$result[0]['big_url'];
		// show_bug($result);
		return $result;
	}

	function findStyTag(){
		$style = M('style');
		$result = $style->field('styname')->table('zxy_design_cate_style')->select();
		// show_bug($result);
		return $result;
	}
	function findCatTag(){
		$cate = M('cate');
		$result = $cate->field('catname')->table('zxy_design_category')->select();
		// show_bug($result);
		return $result;
	}
}