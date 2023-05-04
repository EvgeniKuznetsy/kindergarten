<?php

namespace App\Http\Controllers\Admin\Educators;
use App\Http\Controllers\Admin\Group\GroupController;
use App\Http\Controllers\Admin\IndexController;
use App\Models\Educator;
use App\Models\Group;



use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EducatorsController extends Controller
{
    public function create(Request $request,Educator $educator): \Illuminate\Http\RedirectResponse
    {
//        $table->string('full_name');
//        $table->string('image')->default(null);
//        $table->string('educator')->default(null);
//        $table->string('junior_educator')->default(null);
//        $table->string('specialists')->default(null);
//        $table->unsignedBigInteger('group_id')->unsigned();
//
//        $table->timestamps();
//        $table->index('group_id','educator_group_idx');
//        $table->foreign('group_id', 'educator_group_fk')->on("groups")->references('id');
        $path = $request->file('image')->store('public');
        $path = str_replace('public', '/storage', $path);

        $educator = Educator::create([
            'full_name' => $request->full_name,
            'educator' => $request->educator,
            'image' => $path,
            'name'=>$request->name,

        ]);

        return redirect()->route('admin.educators.index');
    }
    public function edit(Request $request, Educator  $educator) {
        $params = [
            'name' => $request->name,

        ];

        $educator->update($params);

        return redirect()->route('admin.groups.educator.index');
    }

    public function delete(Group  $groups) {
        $groups->delete();
        return redirect()->route('admin.groups.index');
    }


}
