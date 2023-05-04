<?php

namespace App\Http\Controllers\Admin\Parents;
use App\Models\For_parents;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ParentsController extends Controller
{
    public function create(Request $request): \Illuminate\Http\RedirectResponse
    {
        $path = $request->file('image')->store('public');
        $path = str_replace('public', '/storage', $path);
        $document= $request->file('document')->store('public');
        $path = str_replace('public', '/storage', $document);
        $parents = For_parents::create([
            'title' => $request->title,
            'text' => $request->text,
            'image' => $path,
            'document'=>$document,
        ]);

        return redirect()->route('admin.parents.index');
    }
    public function edit(Request $request, For_parents $parents) {
        $params = [
            'title' => $request->title,
            'text' => $request->text,
        ];

        if ($request->image) {
            $path = $request->file('image')->store('public');
            $params['image'] = str_replace('public', '/storage', $path);
        }
        if ($request->document) {
            $path = $request->file('document')->store('public');
            $params['document'] = str_replace('public', '/storage', $path);
        }
        $parents->update($params);

        return redirect()->route('admin.parents.index');
    }

    public function delete(For_parents $parents) {
        $parents->delete();
        return redirect()->route('admin.parents.index');
    }


}
