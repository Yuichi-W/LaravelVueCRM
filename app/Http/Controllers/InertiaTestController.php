<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\InertiaTest;

class InertiaTestController extends Controller
{
    public function index()
    {
        return Inertia::render('Inertia/index', [
            'blogs' => InertiaTest::all()
        ]);
    }

    public function show($id)
    {
        // dd($id);
        return Inertia::render(
            'Inertia/Show',
            [
                'id'   => $id,
                'blog' => InertiaTest::findOrfail($id) //一件取得
            ]
        );
    }

    public function create()
    {
        return Inertia::render('Inertia/Create');
    }

    public function store(Request $request)
    {
        //バリデーション
        $request->validate([
            'title' => ['required', 'max:20'],
            'content' => ['required'],
        ]);

        // 登録処理
        $inertiaTest = new InertiaTest;
        $inertiaTest->title = $request->title;
        $inertiaTest->content = $request->content;
        $inertiaTest->save();

        // フラッシュメッセージ追加
        return to_route('inertia.index')
            ->with([
                'message' => '登録しました'
            ]);
    }

    public function delete($id)
    {
        //削除処理
        $blog = InertiaTest::findOrFail($id);
        $blog->delete();

        return to_route('inertia.index')
            ->with([
                'message' => '削除しました',
            ]);
    }
}
