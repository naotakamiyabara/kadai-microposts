<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    /**
     * 投稿をお気に入りするアクション。
     *
     * @param  $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
    public function store($micropostId)
    {
        // 認証済みユーザ（閲覧者）が、micropostIdの投稿をお気に入りする
        \Auth::user()->favorites($micropostId);
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * ユーザが、投稿のお気に入りを解除する
     *
     * @param  $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
    public function destroy($micropostId)
    {
        // 認証済みユーザ（閲覧者）が、micropostIdの投稿をお気に入り解除する
        \Auth::user()->unfavorites($micropostId);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
