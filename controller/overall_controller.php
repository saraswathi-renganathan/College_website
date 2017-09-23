<?php 
	include_once '../model/db.php';
	function news_archive($year)
	{
		$conn = db_connect();
		$where = "YEAR(`post_date`) = ".$year." AND `post_type` LIKE 'ral-events' OR `post_type` LIKE 'revision' AND `post_status` LIKE 'publish' ORDER BY `post_date` DESC";
		$data = "ID,post_date,post_date_gmt,post_title";
		$raw_data = select($data,'wp_posts',$where,$conn);
		return $raw_data;
	}
	
	function single_event($event_id){
		$where = 'ID ='.$event_id;
		$raw_data = select('*','wp_posts',$where,db_connect());
		return $raw_data;
	}

	function news_feed(){
		$where = "`post_modified` >= CURDATE()";
		$data = "ID,post_date,post_type,post_title";
		$raw_data = select($data,'wp_posts',$where,db_connect());
		return $raw_data;
	}