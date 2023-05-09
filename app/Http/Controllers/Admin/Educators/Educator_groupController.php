<?php

namespace App\Http\Controllers\Admin\Educators;

use App\Http\Controllers\Admin\IndexController;
use App\Models\Educator;
use App\Models\Educators_group;




use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Educator_groupController extends Controller
{
    public function create(Request $request,Educators_group $groups): \Illuminate\Http\RedirectResponse
    {
        $groups = Educators_group::create([
            'title' => $request->title,
        ]);

        return redirect()->route('admin.educators_groups.index');
    }
    public function edit(Request $request, Educators_group  $groups) {
        $params = [
            'title' => $request->title,

        ];

        $groups->update($params);

        return redirect()->route('admin.educators_groups.index');
    }

    public function delete(Educators_group  $groups) {
        $groups->delete();
        return redirect()->route('admin.educators_groups.index');
    }


}
