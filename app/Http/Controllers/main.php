<?php

namespace App\Http\Controllers;

use App\meals;
use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\choices;
use DB;



class main extends Controller
{
    public function main(Request $request){
        if (Auth::check()) {
            return view('main');

        }else{
            return redirect('/');
        }


    }

    public function select(){
     $a1 = choices::where('group','a1')->orderByRaw("RAND()")->first();
        return view('choices',compact('a1'));


    }
    public function get(){
        if (Auth::check()) {
            $a1 = choices::where('group', 'a1')->get();
            $a2 = choices::where('group', 'a2')->get();
            $b1 = choices::where('group', 'b1')->get();
            $b2 = choices::where('group', 'b2')->get();
            $b3 = choices::where('group', 'b3')->get();
            $c1 = choices::where('group', 'c1')->get();
            $d1 = choices::where('group', 'd1')->get();
            $d2 = choices::where('group', 'd2')->get();
            return view('choices', compact('a1', 'a2', 'b1', 'b2', 'b3', 'c1', 'd1', 'd2'));
        }else{
            return redirect('/');
        }
    }
    public function table(Request $request){
        if (Auth::check()) {
        $re = $request->all();
        $exp1 = array();
        foreach ($re as $exp){
            $exp1[] = $exp ;



        }
        $exp1[0] = "12310230120301203102";
        $w1d1ba1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a1') ->inRandomOrder() ->take(1)->get();
        $w1d1bc1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','c1') ->inRandomOrder() ->take(1)->get();
        $w1d1s1b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
        $w1d1la2 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a2') ->inRandomOrder() ->take(1)->get();
        $w1d1s2b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
        $w1d1dd2 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','d2') ->inRandomOrder() ->take(1)->get();
        $w1d2ba1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a1') ->inRandomOrder() ->take(1)->get();
        $w1d2bc1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','c1') ->inRandomOrder() ->take(1)->get();
        $w1d2s1b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
        $w1d2la1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a1') ->inRandomOrder() ->take(1)->get();
        $w1d2ld1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','d1') ->inRandomOrder() ->take(1)->get();
        $w1d2s2b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
        $w1d2da1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a1') ->inRandomOrder() ->take(1)->get();
        $w1d2db1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b1') ->inRandomOrder() ->take(1)->get();
        $w1d2dc1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','c1') ->inRandomOrder() ->take(1)->get();
        $w1d3ba1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a1') ->inRandomOrder() ->take(1)->get();
        $w1d3bc1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','c1') ->inRandomOrder() ->take(1)->get();
        $w1d3s1b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
        $w1d3lc1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','c1') ->inRandomOrder() ->take(1)->get();
        $w1d3s2b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
        $w1d3dd2 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','d2') ->inRandomOrder() ->take(1)->get();
        $w1d4ba1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a1') ->inRandomOrder() ->take(1)->get();
        $w1d4bc1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','c1') ->inRandomOrder() ->take(1)->get();
        $w1d4s1b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
        $w1d4la2 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a2') ->inRandomOrder() ->take(1)->get();
        $w1d4s2b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
        $w1d4dd1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','d1') ->inRandomOrder() ->take(1)->get();
        $w1d4db1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b1') ->inRandomOrder() ->take(1)->get();
        $w1d5ba1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a1') ->inRandomOrder() ->take(1)->get();
        $w1d5bc1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','c1') ->inRandomOrder() ->take(1)->get();
        $w1d5s1b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
        $w1d5lb2 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b2') ->inRandomOrder() ->take(1)->get();
        $w1d5lc1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','c1') ->inRandomOrder() ->take(1)->get();
        $w1d5s2b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
        $w1d5da1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a1') ->inRandomOrder() ->take(1)->get();
        $w1d5db1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b1') ->inRandomOrder() ->take(1)->get();
        $w1d5dd1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','d1') ->inRandomOrder() ->take(1)->get();
        $w1d6ba1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a1') ->inRandomOrder() ->take(1)->get();
        $w1d6bc1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','c1') ->inRandomOrder() ->take(1)->get();
        $w1d6s1b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
        $w1d6la2 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a2') ->inRandomOrder() ->take(1)->get();
        $w1d6s2b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
        $w1d6dd1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','d1') ->inRandomOrder() ->take(1)->get();
        $w1d6db1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b1') ->inRandomOrder() ->take(1)->get();
        $w1d7ba1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a1') ->inRandomOrder() ->take(1)->get();
        $w1d7bc1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','c1') ->inRandomOrder() ->take(1)->get();
        $w1d7s1b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
        $w1d7la1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a1') ->inRandomOrder() ->take(1)->get();
        $w1d7ld1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','d1') ->inRandomOrder() ->take(1)->get();
        $w1d7lb2 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b2') ->inRandomOrder() ->take(1)->get();
        $w1d7s2b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
        $w1d7db2 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b2') ->inRandomOrder() ->take(1)->get();
            /* --------------------------------------------------------------------------------------------------------  */
            $w2d1ba1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a1') ->inRandomOrder() ->take(1)->get();
            $w2d1bc1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','c1') ->inRandomOrder() ->take(1)->get();
            $w2d1s1b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
            $w2d1lb1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b1') ->inRandomOrder() ->take(1)->get();
            $w2d1lc1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','c1') ->inRandomOrder() ->take(1)->get();
            $w2d1s2b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
            $w2d1da1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a1') ->inRandomOrder() ->take(1)->get();
            $w2d1dc1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','c1') ->inRandomOrder() ->take(1)->get();
            $w2d2ba1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a1') ->inRandomOrder() ->take(1)->get();
            $w2d2bc1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','c1') ->inRandomOrder() ->take(1)->get();
            $w2d2s1b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
            $w2d2lb1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b1') ->inRandomOrder() ->take(1)->get();
            $w2d2ld1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','d1') ->inRandomOrder() ->take(1)->get();
            $w2d2s2b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
            $w2d2da1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a1') ->inRandomOrder() ->take(1)->get();
            $w2d2dc1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','c1') ->inRandomOrder() ->take(1)->get();
            $w2d3ba1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a1') ->inRandomOrder() ->take(1)->get();
            $w2d3bc1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','c1') ->inRandomOrder() ->take(1)->get();
            $w2d3s1b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
            $w2d3lb1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b1') ->inRandomOrder() ->take(1)->get();
            $w2d3ld1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','d1') ->inRandomOrder() ->take(1)->get();
            $w2d3s2b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
            $w2d3db2 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b2') ->inRandomOrder() ->take(1)->get();
            $w2d3dc1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','c1') ->inRandomOrder() ->take(1)->get();
            $w2d4ba1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a1') ->inRandomOrder() ->take(1)->get();
            $w2d4bc1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','c1') ->inRandomOrder() ->take(1)->get();
            $w2d4s1b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
            $w2d4lb2 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b2') ->inRandomOrder() ->take(1)->get();
            $w2d4lc1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','c1') ->inRandomOrder() ->take(1)->get();
            $w2d4s2b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
            $w2d4db2 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b2') ->inRandomOrder() ->take(1)->get();
            $w2d4dc1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','c1') ->inRandomOrder() ->take(1)->get();
            $w2d5ba1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a1') ->inRandomOrder() ->take(1)->get();
            $w2d5bc1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','c1') ->inRandomOrder() ->take(1)->get();
            $w2d5s1b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
            $w2d5ld2 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','d2') ->inRandomOrder() ->take(1)->get();
            $w2d5s2b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
            $w2d5dc1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','c1') ->inRandomOrder() ->take(1)->get();
            $w2d5db2 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b2') ->inRandomOrder() ->take(1)->get();
            $w2d6ba1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a1') ->inRandomOrder() ->take(1)->get();
            $w2d6bc1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','c1') ->inRandomOrder() ->take(1)->get();
            $w2d6s1b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
            $w2d6la1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a1') ->inRandomOrder() ->take(1)->get();
            $w2d6ld1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','d1') ->inRandomOrder() ->take(1)->get();
            $w2d6s2b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
            $w2d6da1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a1') ->inRandomOrder() ->take(1)->get();
            $w2d6da2 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a2') ->inRandomOrder() ->take(1)->get();
            $w2d7ba1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a1') ->inRandomOrder() ->take(1)->get();
            $w2d7bc1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','c1') ->inRandomOrder() ->take(1)->get();
            $w2d7s1b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
            $w2d7la1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a1') ->inRandomOrder() ->take(1)->get();
            $w2d7ld1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','d1') ->inRandomOrder() ->take(1)->get();
            $w2d7lb2 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b2') ->inRandomOrder() ->take(1)->get();
            $w2d7s2b3 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','b3') ->inRandomOrder() ->take(1)->get();
            $w2d7dd1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','d1') ->inRandomOrder() ->take(1)->get();
            $w2d7da1 = DB::table('choices')->whereNotIn('id', $exp1)->where('group','a1') ->inRandomOrder() ->take(1)->get();
        return view('table',compact('w1d1ba1','w1d1bc1','w1d1s1b3','w1d1la2','w1d1s2b3','w1d1dd2','w1d2ba1','w1d2bc1','w1d2s1b3','w1d2ld1','w1d2la1','w1d2s2b3','w1d2da1','w1d2db1',
            'w1d2dc1','w1d3ba1','w1d3bc1','w1d3s1b3','w1d3lc1','w1d3s2b3','w1d3dd2','w1d4ba1','w1d4bc1','w1d4s1b3','w1d4la2','w1d4s2b3','w1d4db1','w1d4dd1',
            'w1d5ba1','w1d5bc1','w1d5s1b3','w1d5lb2','w1d5lc1','w1d5s2b3','w1d5da1','w1d5db1','w1d5dd1','w1d6ba1','w1d6bc1','w1d6s1b3','w1d6la2','w1d6s2b3',
            'w1d6dd1','w1d6db1','w1d7ba1','w1d7bc1','w1d7s1b3','w1d7la1','w1d7lb2','w1d7ld1','w1d7s2b3','w1d7db2','w2d1ba1',
            'w2d1bc1','w2d1s1b3','w2d1lb1','w2d1lc1','w2d1s2b3','w2d1da1','w2d1dc1','w2d2ba1','w2d2bc1','w2d2s1b3','w2d2lb1',
            'w2d2ld1','w2d2s2b3','w2d2da1','w2d2dc1','w2d3ba1','w2d3bc1','w2d3s1b3','w2d3lb1','w2d3ld1','w2d3s2b3',
            'w2d3db2','w2d3dc1','w2d4ba1','w2d4bc1','w2d4s1b3','w2d4lb2','w2d4lc1','w2d4s2b3','w2d4db2','w2d4dc1',
            'w2d5ba1','w2d5bc1','w2d5s1b3','w2d5ld2','w2d5s2b3','w2d5dc1','w2d5db2','w2d6ba1','w2d6bc1','w2d6s1b3',
            'w2d6la1','w2d6ld1','w2d6s2b3','w2d6da1','w2d6da2','w2d7ba1','w2d7bc1','w2d7s1b3','w2d7ld1','w2d7la1',
            'w2d7lb2','w2d7s2b3','w2d7da1','w2d7dd1'));

            }else{
            return redirect('/');
        }







        


    }public  function save(Request $request){
    if (Auth::check()) {
     $se =   $request->except(['_token','pname','pno','date','w2d1b','w2d1s1','w2d1l','w2d1s2','w2d1d','w2d2b','w2d2s1',
        'w2d2l','w2d2s2','w2d2d','w2d3b','w2d3s1','w2d3l','w2d3s2','w2d3d','w2d4b','w2d4s1','w2d4l','w2d4s2','w2d4d',
        'w2d5b','w2d5s1','w2d5l','w2d5s2','w2d5d','w2d6b','w2d6s1','w2d6l','w2d6s2','w2d6d','w2d7b','w2d7s1','w2d7l',
        'w2d7s2','w2d7d']);
    $ss = serialize($se);
    $save['value'] = $ss ;
    $pname = $request->only('pname');
    $pno = $request->only('pno');
    $date = $request->only('date');


    $save['pname'] = $pname['pname'];
    $save['pno'] = $pno['pno'];
    $save['date'] = $date['date'];
    $save['wno'] = 1 ;
    meals::create($save);
    $se1 =   $request->except(['_token','pname','pno','date','w1d1b','w1d1s1','w1d1l','w1d1s2','w1d1d','w1d2b','w1d2s1',
        'w1d2l','w1d2s2','w1d2d','w1d3b','w1d3s1','w1d3l','w1d3s2','w1d3d','w1d4b','w1d4s1','w1d4l','w1d4s2','w1d4d',
        'w1d5b','w1d5s1','w1d5l','w1d5s2','w1d5d','w1d6b','w1d6s1','w1d6l','w1d6s2','w1d6d','w1d7b','w1d7s1','w1d7l',
        'w1d7s2','w1d7d']);
    $ss1 = serialize($se1);
    $save1['value'] = $ss1 ;
    $pname1 = $request->only('pname');
    $pno1 = $request->only('pno');
    $date1 = $request->only('date');


    $save1['pname'] = $pname1['pname'];
    $save1['pno'] = $pno1['pno'];
    $save1['date'] = $date1['date'];
    $save1['wno'] = 2 ;
    meals::create($save1);
    $result = $request->all();

    return view('re',compact('result'))  ;
    }else{
        return redirect('/');
    }

} public function search_view(){
    if (Auth::check()) {
        return view('search');
    }else{
            return redirect('/');
        }
} public function search(Request $request){
    if (Auth::check()) {
    $s =  $request->only('search');
    $id = $s['search'];
   $result =  meals::where('pno',$id)->get();
    return view('search_result',compact('result'));
    }else{
        return redirect('/');
    }
} public function search_id($wno ,$id ){
    if (Auth::check()) {
    $m =  meals::where('id',$id)->get();
    foreach ($m as $a ){
        $str = $a['value'];
    }
    $result = unserialize($str);
    return view('view_result'."$wno",compact('result')) ;
    }else{
        return redirect('/');
    }

}public function delete_id($id){
    if (Auth::check()) {
        $re = meals::find($id);
        $re->delete();
    }else{
            return redirect('/');
        }
}public function choices_show(){
    if (Auth::check()) {
        $w = choices::get();
        return view('choices_show', compact('w'));
    }else{
            return redirect('/');
        }
}public function choices_update(Request $request){
    if (Auth::check()) {
    $w = $request->all();


    choices::where('id',$w['id'])->update(['value' => $w['update'],'group'=> $w['group']]);
    return redirect('/choices_show');
    }else{
        return redirect('/');
    }
}public function choices_delete($id){
    if (Auth::check()) {
    $d = choices::find($id);
    $d->delete();
    return redirect('/choices_show');
    }else{
        return redirect('/');
    }
}public function search_date(Request $request){
    $date1 = $request->only('date');
    $date = $date1['date'];
    $result= meals::where('date',$date)->get();
    return view('search_result',compact('result')); ;

}public function choices_add_view(){
    return view('choices_add_view');
}public function choices_add(Request $request){
    $m =  $request->only('value','group');
    choices::create($m);
    return redirect('/choices_show');
}
    public function ajax($id){

             if ($id == "1" || $id == "6"  || $id == "11"  || $id == "16"  || $id == "21"  || $id == "26"  || $id == "31" || $id == "36"  || $id == "41"
                 || $id == "46"  || $id == "51"  || $id == "56"  || $id == "61"  || $id == "66" ){
            $w1d1ba1 = choices::where('group','a1')->orderByRaw("RAND()")->first();
            $w1d1bc1 = choices::where('group','c1')->orderByRaw("RAND()")->first();
            $w = $w1d1ba1['value']." + ".$w1d1bc1['value'];
            return $w ;
             }
        if ($id == "2" || $id == "7"  || $id == "12"  || $id == "17"  || $id == "22"  || $id == "27"  || $id == "32" || $id == "37"  || $id == "42"
            || $id == "47"  || $id == "52"  || $id == "57"  || $id == "62"  || $id == "67" || $id == "4" || $id == "9"  || $id == "14"  || $id == "19"  || $id == "24"  || $id == "29"  || $id == "34" || $id == "39"  || $id == "44"
            || $id == "49"  || $id == "54"  || $id == "59"  || $id == "64"  || $id == "69"  ){
            $w1sb3 = choices::where('group','b3')->orderByRaw("RAND()")->first();
            $w = $w1sb3['value'];
            return $w ;

        }if ($id == "3" || $id == "18"  || $id == "28" ){
            $w1la2 = choices::where('group','a2')->orderByRaw("RAND()")->first();
            $w1 = $w1la2['value'];
            return $w1 ;
        }if ($id == "5" || $id == "15"  || $id == "58" ){
            $w1la2 = choices::where('group','d2')->orderByRaw("RAND()")->first();
            $w1 = $w1la2['value'];
            return $w1 ;
        }if ($id == "8" || $id == "63"  || $id == "70" ){
            $w1d1ba1 = choices::where('group','a1')->orderByRaw("RAND()")->first();
            $w1d1bc1 = choices::where('group','d1')->orderByRaw("RAND()")->first();
            $w = $w1d1ba1['value']." + ".$w1d1bc1['value']." + "."طماطم ";
            return $w ;
        }
        if ($id == "10"){
            $w1d1ba1 = choices::where('group','a1')->orderByRaw("RAND()")->first();
            $w1d1bc1 = choices::where('group','c1')->orderByRaw("RAND()")->first();
            $w1d1bb1 = choices::where('group','b1')->orderByRaw("RAND()")->first();
            $w = $w1d1ba1['value']." + ".$w1d1bc1['value']." + ".$w1d1bb1['value']." + "."توست";
            return $w ;
        }if ($id == "13"  ){
            $w1la2 = choices::where('group','c1')->orderByRaw("RAND()")->first();
            $w1 = $w1la2['value']." + "."توست"." + "."طماطم";
            return $w1 ;
        }if ($id == "20" || $id == "30"  || $id == "43" || $id == "48" ){
            $w1d1ba1 = choices::where('group','b1')->orderByRaw("RAND()")->first();
            $w1d1bc1 = choices::where('group','d1')->orderByRaw("RAND()")->first();
            $w = $w1d1ba1['value']." + ".$w1d1bc1['value'];
            return $w ;
        }if ($id == "20" || $id == "30"  || $id == "43" || $id == "48" ){
            $w1d1ba1 = choices::where('group','b1')->orderByRaw("RAND()")->first();
            $w1d1bc1 = choices::where('group','d1')->orderByRaw("RAND()")->first();
            $w = $w1d1ba1['value']." + ".$w1d1bc1['value'];
            return $w ;
        }if ($id == "23" || $id == "50"  || $id == "53" || $id == "60" ){
            $w1d1ba1 = choices::where('group','b2')->orderByRaw("RAND()")->first();
            $w1d1bc1 = choices::where('group','c1')->orderByRaw("RAND()")->first();
            $w = $w1d1ba1['value']." + ".$w1d1bc1['value'];
            return $w ;
        }if ($id == "25"  ){
            $w1la2 = choices::where('group','a1')->orderByRaw("RAND()")->first();
            $w1lb2 = choices::where('group','b1')->orderByRaw("RAND()")->first();
            $w1lb1 = choices::where('group','d1')->orderByRaw("RAND()")->first();
            $w1 = $w1la2['value']." + ".$w1lb2['value']." + ".$w1lb1['value'];
            return $w1 ;
        }if ($id == "33" || $id == "68" ){
            $w1la2 = choices::where('group','a1')->orderByRaw("RAND()")->first();
            $w1lb2 = choices::where('group','b2')->orderByRaw("RAND()")->first();
            $w1lb1 = choices::where('group','d1')->orderByRaw("RAND()")->first();
            $w1 = $w1la2['value']." + ".$w1lb2['value']." + ".$w1lb1['value']." + "."طماطم";
            return $w1 ;
        }if ($id == "35"  ){
            $w1la2 = choices::where('group','b2')->orderByRaw("RAND()")->first();
            $w1 = $w1la2['value'];
            return $w1 ;
        }if ($id == "38"){
            $w1d1ba1 = choices::where('group','b1')->orderByRaw("RAND()")->first();
            $w1d1bc1 = choices::where('group','c1')->orderByRaw("RAND()")->first();
            $w = $w1d1ba1['value']." + ".$w1d1bc1['value'];
            return $w ;
        }if ($id == "40" || $id == "45"   ){
            $w1d1ba1 = choices::where('group','a1')->orderByRaw("RAND()")->first();
            $w1d1bc1 = choices::where('group','c1')->orderByRaw("RAND()")->first();
            $w = $w1d1ba1['value']." + ".$w1d1bc1['value'];
            return $w ;
        } if ($id == "55"   ){
            $w1d1ba1 = choices::where('group','b2')->orderByRaw("RAND()")->first();
            $w1d1bc1 = choices::where('group','c1')->orderByRaw("RAND()")->first();
            $w = $w1d1ba1['value']." + ".$w1d1bc1['value']." + "."طماطم";
            return $w ;
        }if ($id == "63" || $id == "70"  ){
            $w1d1ba1 = choices::where('group','a1')->orderByRaw("RAND()")->first();
            $w1d1bc1 = choices::where('group','d1')->orderByRaw("RAND()")->first();
            $w = $w1d1ba1['value']." + ".$w1d1bc1['value']." + "."طماطم";
            return $w ;
        }if ($id == "65"   ){
            $w1d1ba1 = choices::where('group','a1')->orderByRaw("RAND()")->first();
            $w1d1bc1 = choices::where('group','a2')->orderByRaw("RAND()")->first();
            $w = $w1d1ba1['value']." + ".$w1d1bc1['value'];
            return $w ;
        }



    }
}
