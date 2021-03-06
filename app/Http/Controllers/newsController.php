<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;
use Illuminate\Support\Facades\DB;

class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $news= DB::select('SELECT * FROM news
        ORDER BY created_at DESC');

        return view('news.home',['news'=>$news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('news.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([

            'headline'=>'required',
            'description'=>'required',
            'picture'=>'required'

        ]);


        $pic = $request->file('picture')->getClientOriginalName();

        $news=new news();
        $news->headline=$request->headline;
        $news->description=$request->description;
        $news->type=$request->type;
        $news->picture=$pic;
        $news->save();


        return $pic;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        if($id=="international" || $id=="national" || $id=="sports" )
        {
            $item=news::where('type',$id)->get();

           return view('news.home',['news'=>$item]);
        }
        
        else{
        $item=news::find($id);

        return view('news.show',['item'=>$item]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $news=news::find($id);

        return view('news.edit',['news'=>$news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $request->validate([

            'headline'=>'required',
            'description'=>'required'

        ]);

        $news=news::find($id);
        $news->description=$request->description;
        $news->type=$request->type;
        $news->headline=$request->headline;

        $news->save();

        session()->flash('update','news updated successfully');

        return redirect('/');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $news=news::find($id);
        $news->delete();
        session()->flash('delete','News deleted successfully');

        return redirect('/');
    }
}
