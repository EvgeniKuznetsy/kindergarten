<?php

namespace App\Http\Controllers\Admin\Post;
use App\Models\News;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NewsController extends Controller
{
    public function create(Request $request): \Illuminate\Http\RedirectResponse
    {
        $path = $request->file('image')->store('public');
        $path = str_replace('public', '/storage', $path);

        $news = News::create([
            'title' => $request->title,
            'text' => $request->text,
            'image' => $path,
        ]);

        return redirect()->route('admin.news.index');
    }
    public function edit(Request $request, News $news) {
        $params = [
            'title' => $request->title,
            'text' => $request->text,
        ];

        if ($request->image) {
            $path = $request->file('image')->store('public');
            $params['image'] = str_replace('public', '/storage', $path);
        }

        $news->update($params);

        return redirect()->route('admin.news.index');
    }

    public function delete(News $news) {
        $news->delete();
        return redirect()->route('admin.news.index');
    }
}
