<?php

namespace App\Http\Controllers;

use App\Models\Pronos;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function showView(){
        return view('admin');
    }

    public function addPronos(Request $request){
        $data = $request->all();
        try {
            DB::table('pronos')->insert([
                'sport' => $data['sport'],
                'date_match' => $data['date_match'],
                'team_1' => $data['team_1'],
                'team_2' => $data['team_2'],
                'prono' => $data['prono'],
                'cote' => $data['cote'],
                'create_at' => Carbon::now()
            ]);
            $status = 200;
            return view('admin',[
                'status' => $status
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
           return $e;
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function addArticle(Request $request){
        $data = $request->all();
//        dd($data);
        try {
            DB::table('articles')->insert([
                'title' => $data['title'],
                'url_img_article' => $data['url_img_article'],
                'content' => $data['content'],
                'category' => $data['category'],
                'author' => Auth::user()->name ,
                'created_date' => Carbon::now()
            ]);
            $status = 200;
            return view('admin',[
                'status' => $status
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            return $e;
        } catch (\Exception $e) {
            return $e;
        }
    }
}
