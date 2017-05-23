<?php

namespace App\Http\Controllers\Admin;

use App\CarMake;
use App\Country;
use App\Http\Requests\MakinaCreateRequest;
use App\Makina;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use File;

class MakinaController extends Controller
{
    public function index()
    {
        //
        $makinat = Makina::paginate(10);
        return view('admin.makina.index', compact('makinat'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $car_make = CarMake::pluck('name', 'id')->all();
        $countries = Country::pluck('name', 'id')->all();
        $tags = Tag::pluck('name', 'id')->all();
        return view('admin.makina.create', compact('car_make', 'countries', 'tags'));
    }

    public function myform()
    {
        $countries = Country::pluck('name', 'id')->all();
        return view('myform', compact('countries'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MakinaCreateRequest $request)
    {
        //
        $input = $request->all();
        $user = Auth::user();
        $post = $user->makina()->create($input);

//        Session::flash('created_post', 'The post has been created');
        return redirect('admin/makina/'. $post->id .'/edit');
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
        $car_make = CarMake::pluck('name', 'id')->all();
        $countries = Country::pluck('name', 'id')->all();
        $tags = Tag::pluck('name', 'id')->all();

        $post = Makina::findOrFail($id);
        return view('admin.makina.edit', compact('post', 'car_make', 'countries', 'tags'));
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


        $input = $request->all();
        $post = Auth::user()->makina()->whereId($id)->first();

        if ($request->has('i_faturuar')){
            $i_faturuar = $request->input('i_faturuar') ? true : false;
            $post->i_faturuar = $i_faturuar;
            $post->update($input);
        }
        return redirect('/admin/makina');
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
        $post = Makina::findOrFail($id);
        $photos = $post->photos()->get();
        foreach ($photos as $photo) {
            File::delete(storage_path('app/public'). $photo->threezerozero);
            File::delete(storage_path('app/public'). $photo->fivefivezero);
            File::delete(storage_path('app/public'). $photo->thumbnail);
        }

        $post->photos()->delete();
        $post->delete();
//        Session::flash('deleted_user', 'The user has been deleted');
        return redirect('/admin/makina');
    }
    public function mycarformAjax($id)
    {
        $carmodel = DB::table("car_models")
            ->where("car_makes_id",$id)
            ->pluck("name","id");
        return json_encode($carmodel);
    }
    public function mycityformAjax($id)
    {
        $cities = DB::table("cities")
            ->where("countries_id",$id)
            ->pluck("name","id");
        return json_encode($cities);
    }

    public function addPhoto($id, Request $request)
    {
        $makina = Makina::findOrFail($id);
        $photos = $makina->photos();


            $file = $request->file('photo');

            $name = time() . $file->getClientOriginalName();
            if (!file_exists(storage_path('app/public/makinaPhoto'))){
                mkdir(storage_path('app/public/makinaPhoto', 0777, true));
            }

            if (!file_exists(storage_path('app/public/makinaPhoto/img300'))){
                mkdir(storage_path('app/public/makinaPhoto/img300', 0777, true));
            }

            if (!file_exists(storage_path('app/public/makinaPhoto/img550'))){
                mkdir(storage_path('app/public/makinaPhoto/img550', 0777, true));
            }
            $path = '/makinaPhoto';
            $file->move(storage_path('app/public').$path, $name);
            $threzerozero = Image::make(storage_path('app/public')
                .$path . '/'.$name)->fit(300, 215)->save(storage_path('app/public')
                .$path.'/img300/'.$name);
            $fivefivezero = Image::make(storage_path('app/public')
                .$path . '/'.$name)->fit(550, 330)->save(storage_path('app/public')
                .$path.'/img550/'.$name);

            $photos->create([
                'threezerozero' => "$path/img300/{$name}",
                'fivefivezero' => "$path/img550/{$name}",
                'thumbnail' => "$path/{$name}",
            ]);

    }


    public function car_make()
    {
        $car_makes = CarMake::all();

        return view('admin.makina.car_make', compact('car_makes'));

    }

}

