<?php
 	
 	class ArtistFavorite{
 		public $name;
 		public $hoby;
 		public $panggilan;
 		public $photo;
 	}

 	class ResultJson{
 		public $result;	
 	}

 	class ContentResultJson{
 		public $message;
 		public $data;
 	}

 	$a = new ArtistFavorite();
 	$a->name="Asia Carera";
 	$a->hoby="photo";
 	$a->panggilan="honey";
 	$a->photo="http://img-static.riaupos.co/asia-carera.jpg";

	$b = new ArtistFavorite();
 	$b->name="Isyana Sarvati";
 	$b->hoby="nyanyi";
 	$b->panggilan="ana";
 	$b->photo="https://pbs.twimg.com/profile_images/378800000208541321/9846bd6593dc94ca7989e7f32a035f98_400x400.jpeg";

 	$c = new ArtistFavorite();
 	$c->name="Tari Bey RiKou";
 	$c->hoby="motret";
 	$c->panggilan="artis e stm jare";
 	$c->photo="https://scontent-sin1-1.xx.fbcdn.net/hphotos-xfp1/v/t1.0-9/11209565_10203747102877306_1269405523264793647_n.jpg?oh=ece28d8a65611659a506f81d1df8f883&oe=57347CE6";
	

	$arr = array($a,$b,$c);

/*	$jsonArray = json_encode($arr);

	$contentResult = new ContentResultJson();
	$contentResult->message="hasil result json";
	$contentResult->data=$arr;

	$result = new ResultJson();
	$result->result=$contentResult;*/

	echo json_encode($arr);
	
?>