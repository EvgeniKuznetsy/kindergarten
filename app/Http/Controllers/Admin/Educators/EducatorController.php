<?php

namespace App\Http\Controllers\Admin\Educators;

use App\Http\Controllers\Admin\IndexController;
use App\Models\Educator;




use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EducatorController extends Controller
{
    public function create(Request $request,Educator $educator): \Illuminate\Http\RedirectResponse
    {
        $id=$request->educator_group_id;
        $path = $request->file('image')->store('public');
        $path = str_replace('public', '/storage', $path);

        $educator = Educator::create([
            'full_name' => $request->full_name,
            'educator' => $request->educator,
            'image' => $path,
            'educator_group_id'=>$request->educator_group_id,

        ]);

        return redirect()->route('admin.educators.index',compact('id'));
    }
    public function edit(Request $request, Educator  $post) {
        $id=$post->educator_group_id;
        $params = [
            'full_name' => $request->full_name,
            'educator' => $request->educator,
            'educator_group_id'=>$id,
        ];
        if ($request->image) {
            $path = $request->file('image')->store('public');
            $params['image'] = str_replace('public', '/storage', $path);
        }

        $post->update($params);

        return redirect()->route('admin.educators.index',compact('id'));
    }

    public function delete(Educator $educator) {
        $id=$educator->educator_group_id;
        $educator->delete();
        return redirect()->route('admin.educators.index',compact('id'));
    }


}
