<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function edit($id)
    {
        $newsItem = News::findOrFail($id);
        return view('admin.news.edit', compact('newsItem'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $newsItem = News::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $newsItem->image = $imageName;
        }

        $newsItem->title = $request->title;
        $newsItem->content = $request->content;
        $newsItem->save();

        return redirect()->route('news.show', $newsItem->id)->with('success', 'News updated successfully');
    }

    public function destroy($id)
    {
        $newsItem = News::findOrFail($id);
        $newsItem->delete();

        return redirect()->route('news.index')->with('success', 'News deleted successfully');
    }
}
