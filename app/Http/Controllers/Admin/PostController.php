<?php

namespace App\Http\Controllers\Admin;

use App\Models\Group;
use App\Models\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Group $group){

        $posts  = Post::where('group_id', $group->id)->get();

        return view('admin.group.post.index', compact('group','posts'));


    }

    public function create(Group $group){

        $admins = User::where('role_id', 1)->get();

        return view('admin.group.post.create', compact('group','admins'));


    }

    public function store(Request $request,  $group){

        $this->validate(request(), [

            'image_url' => 'required',
            'title' => 'required|max:50',
            'description' => 'required',

        ]);

        $input = $request->all();

        if ($file = $request->file('image_url')){

            $name = time() . $file->getClientOriginalName();

            $file->move('GroupPostPics', $name);

        }

        $grouping = Group::find($group);

        $post = new Post;

        $post->image_url = $name;

        $post->group_id = $grouping->id;

        $post->user_id = $request->user_id;

        $post->title = $request->title;

        $post->description = $request->description;

        $post->save();

        return redirect(route('post.index', $grouping->id));

    }

    public function edit($post){


        $admins = User::where('role_id', 1)->get();

        $posting = Post::findOrFail($post);

//        $group = Group::where('id', $posting->group_id)->get();

        return view('admin.group.post.edit', compact('group','admins','posting'));


    }

    public function update(Request $request, $post){

        $this->validate(request(), [

            'image_url' => 'required',
            'title' => 'required|max:50',
            'description' => 'required',

        ]);

        $input = $request->all();

        if ($file = $request->file('image_url')){

            $name = time() . $file->getClientOriginalName();

            $file->move('GroupPostPics', $name);

        }

//        $grouping = Group::find($group);

        $post =  Post::find($post);

        $post->image_url = $name;

//        $post->group_id = $grouping->id;

        $post->user_id = $request->user_id;

        $post->title = $request->title;

        $post->description = $request->description;

        $post->save();

        return redirect(route('post.index', $post->group_id));


    }

    public function delete($post)
    {
        //
        $posting = Post::findOrFail($post);

        unlink(public_path('/GroupPostPics/') . $posting->image_url);

        $posting->delete();

        return back();

    }


}
