<?php  

class FontendPageController extends BaseController{

	//官网首页
	public function home()
	{	
		$column_title_id = Input::get('column_title_id');

		$news 				= News::all();//新闻
		$adverts 			= Advertisement::where('type',1)->get(); 
		$activity_adverts 	= ActivityAdvertisement::take(2)->get();	
		$column_titles  	= ColumnTitle::all();
		
		if( !isset( $column_title_id ) )
		{
			$resources 	= Resource::where('column_title_id',1)->select('title','brief','image_url','url')->get();
		}else{
			$resources 	= Resource::where('column_title_id',$column_title_id)->select('title','brief','image_url','url')->get();
		}

		return View::make('wechat.pages.official')->with([
						'news'			=>$news,
						'adverts'			=> $adverts,
						'activity_adverts'	=> $activity_adverts,
						'column_titles'	=> $column_titles,
						'resources'		=> $resources
						]);
	}

	//微投票
	public function vote()
	{
		$adverts 	= Advertisement::where('type',2)->get(); 
		$project 	= Project::where('display',1)->first();
		if( !isset( $project ))
			return BiaoExceptionController::pageError( BiaoException::$noProject['message'] );
		$project->view_total += 1;
		$project->save();
		$work_news		= Work::where('project_id',$project->id)->orderBy('created_at','desc')->get(); 
		$work_numbers	= Work::where('project_id',$project->id)->orderBy('vote_number','desc')->get(); 
		
		//计算时间
		$zero1 =  strtotime(date("y-m-d h:i:s")); 
		$zero2 = strtotime( $project->vote_stop );
		if( $zero1 >= $zero2 )
		{
			$isClosed = true;
			$project->created_at = 1;
			$project->save();
		}else{
			$isClosed = false;
		}
			$days =ceil(($zero2-$zero1)/86400);
			$hours = 23 - date('h');
			$mins = 60 - date( 'i');
			$seconds = 60 -date( 's' );


		return View::make('wechat.pages.vote')->with([
							'adverts'		=> $adverts,
							'project'		=> $project,
							'work_news'		=> $work_news,
							'work_numbers'	=> $work_numbers,
							'isClosed' 		=> $isClosed,
							'days'			=> $days,
							'hours'			=> $hours,
							'mins' 			=> $mins,
							'seconds' 		=> $seconds
							]);
	}

	//活动规则	
	public function rule()
	{
		$project_id = Input::get('project_id');
		$project 	= Project::find( $project_id );
		$adverts 	= Advertisement::where('type',2)->get(); 
		if( !isset( $project ))
			return BiaoExceptionController::pageError( BiaoException::$noProject['message'] );
		
		return View::make('wechat.pages.rules')->with([
					'project'	=>$project,
					'adverts'	=>$adverts
					]);
	}

	//奖项设置
	public function award()
	{
		$project = Project::find( Input::get('project_id') );
		if( !isset( $project ))
			return BiaoExceptionController::pageError( BiaoException::$noProject['message'] );
		$adverts 	= Advertisement::where('type',2)->get(); 
		return View::make('wechat.pages.adward')->with([
					'project'	=>$project,
					'adverts'	=>$adverts
					]);
	}

	//微相册
	public function album()
	{
		$adverts 	 = Advertisement::where('type',3)->get(); 
		$albums	 	 = Album::all();
		$videos 	 = Video::all();
		return View::make('wechat.pages.album')->with([
					'adverts'		=>$adverts,
					'albums'		=>$albums,
					'videos'		=>$videos
					]);
	}

	//微视频
	public function video()
	{
		$adverts 	 = Advertisement::where('type',3)->get(); 
		$videos 	 = Video::all();
		$albums	 	 = Album::all();
		return View::make('wechat.pages.album')->with([
					'adverts'		=>$adverts,
					'albums'		=>$albums,
					'videos'		=>$videos
					]);
	}


	//相册
	public function subAlbum()
	{
		$album_id 	= Input::get('album_id');
		$photograph = Photograph::where('album_id',$album_id)->get();
		return View::make('wechat.pages.photo')->with([
					'photos'=>$photograph
					]);
	}


}

