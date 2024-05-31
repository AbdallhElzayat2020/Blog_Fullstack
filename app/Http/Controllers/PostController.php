<?php

    namespace App\Http\Controllers;

    use App\Models\post;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Cache;

    class PostController extends Controller
    {
        /** * Display a listing of the resource. */
        public function index( Request $request )
        {
            $fileName = time() . '_' . $request->image->getClientOriginalName();
            $file_Path = $request->image->storeAs('uploads' , $fileName);
//            $posts = Cache::rememberForever("posts" , function () {
//                return post::all();
//            });
        }

        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            //
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store( Request $request )
        {
            //
        }

        /**
         * Display the specified resource.
         */
        public function show( post $post )
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit( post $post )
        {
            //
        }

        /**
         * Update the specified resource in storage.
         */
        public function update( Request $request , post $post )
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy( post $post )
        {
            //
        }
    }
