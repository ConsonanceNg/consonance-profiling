<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Group;
use App\Models\Post;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $groups = Group::whereActive(1)->latest()->paginate(6);

        $postsAll = Post::latest()->take(4)->get();

        $activiti = Activity::whereActive(1)->latest()->take(4)->get();

        return view('group.index', compact('groups', 'postsAll','activities','activiti'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group){

        $posts  = Post::where('group_id', $group->id)->latest()->paginate(4);

        $postsAll = Post::latest()->take(4)->get();

        $activiti = Activity::whereActive(1)->latest()->take(4)->get();


        return view('group.post.index', compact('group','posts', 'postsAll', 'activiti'));


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
    }
}
