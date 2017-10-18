<?php

namespace App\Http\Controllers\Home;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * 展示应用的首页
     *
     * @return Response
     */
    public function index()
    {
        //$pdo = DB::connection()->getPdo();
        $res = DB::table('article')->get();
        // print_r($res);
        $assign = [
            'article' => $res
        ];
        return view('home/index',$assign);
    }

    /*
    **博客页面
    **根据ID得到页面
    */
    public function category($id)
    {
        $map = [
            'id'=>$id
        ];

        return view('home/blog');
    }

    /*
    **博客页面
    **根据ID得到页面
    */
    public function article()
    {
        return view('home/blog');
    }

    public function destroy($id){
        $map = [
            'id' => $id
        ];
        // DB::table('article')->truncate();
        DB::table('article')->where($map)->delete();
        $res = DB::table('article')->get();
        // print_r($res);
        $assign = [
            'article' => $res
        ];
        return view('home/index',$assign);
    }



    public function register()
    {
        
        return view('home/register');
    }
}