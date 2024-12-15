<?php

   

namespace App\Http\Controllers;

    

use Illuminate\Http\Request;

use Inertia\Inertia;

use App\Models\Post;

use Illuminate\Support\Facades\Validator;

   

class PostController extends Controller

{

    /**

     * Show the form for creating a new resource.

     *

     * @return Response

     */

    public function index()

    {

        $posts = Post::all();

        return Inertia::render('Posts/Index', ['posts' => $posts]);

    }

  

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function create()

    {

        return Inertia::render('Posts/Create');

    }

    

    /**

     * Show the form for creating a new resource.

     *

     * @return Response

     */

    public function store(Request $request)

    {

        Validator::make($request->all(), [

            'nama' => ['required'],

            'alamat' => ['required'],
            
            'jurusan' => ['required'],

        ])->validate();



        Post::create($request->all());
        return redirect('/');

    }

  

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function edit(Post $post)

    {

        return Inertia::render('Posts/Edit', [
            'post' => $post
        ]);

    }

    

    /**

     * Show the form for creating a new resource.

     *

     * @return Response

     */

    public function update($id, Request $request)

    {

        Validator::make($request->all(), [

            'nama' => ['required'],

            'alamat' => ['required'],
            'jurusan' => ['required'],

        ])->validate();

    

        Post::find($id)->update($request->all());

        return redirect('/');

    }

    

    /**

     * Show the form for creating a new resource.

     *

     * @return Response

     */

    public function destroy($id)

    {

        Post::find($id)->delete();

        return redirect('/');

    }
}