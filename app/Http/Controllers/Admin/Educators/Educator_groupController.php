<?php

namespace App\Http\Controllers\Admin\Educators;

use App\Http\Controllers\Admin\IndexController;
use App\Models\Educator;
use App\Models\Educators_group;




use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Educator_groupController extends Controller
{
    public function create(Request $request,Educator $groups): \Illuminate\Http\RedirectResponse
    {
        $groups = Educators_group::create([
            'title' => $request->title,
        ]);

        return redirect()->route('admin.educators_groups.index');
    }
    public function edit(Request $request, Educators_group  $educator) {
        $params = [
            'title' => $request->name,

        ];

        $educator->update($params);

        return redirect()->route('admin.groups.educator.index');
    }

    public function delete(Educators_group  $groups) {
        $groups->delete();
        return redirect()->route('admin.educators_groups.index');
    }


}
