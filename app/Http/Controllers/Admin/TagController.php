<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::all();

        return view('admin.tag.index', compact('tags'));
    }
    public function create()
    {
        $tags = Tag::pluck('name', 'id')->all();

        return view('admin.tag.create', compact('tags'));
    }

    public function store(Request $request)
    {
        //


            foreach ($request->tag as $tag){
                $saved_tag = Tag::find($tag);
                if ($saved_tag === null){
                Tag::create([
                    'name'=>$tag]);
            }

        }

        return redirect('admin/tag');
    }

    public function edit($id)
    {

        $tag = Tag::findOrFail($id);
        return view('admin.tag.edit', compact('tag'));
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

        $tag = Tag::findOrFail($id);

        $tag->slug = null;
        $tag->update([
            'name' => $request['tag']
        ]);

        return redirect('/admin/tag')
            ->with('updated_post', 'ok');
    }

    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);

        $tag->delete();

        return redirect('admin/tag')->with('deleted_post', 'Tagu u fshije rregullisht');
    }
}
