<?php

namespace App\Http\Controllers\Clothes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
	public function __construct(Comment $mcomment){
		$this->mcomment = $mcomment;
	}
    public function postComment(Request $request, $id){
    	$fullname = $request->fullname;
    	$star     = $request->star;
    	$content  = $request->content;
    	$data  	  = ['spid' => $id,
    			     'fullname'     => $fullname,
    			     'content'      => $content,
    			     'star_number'  => $star,
    				];

    	$result   =  $this->mcomment->addComment($data);
    	return redirect()->back();
    }
}
