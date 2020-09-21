<?php

namespace App\Http\Controllers;

use App\ShortLink;


function hasher($url) {
    $len = strlen($url);

    return "$len".$url[3]."$url[10]";
}

class GlobalController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function link() {
        $url = request('url');


        $link = new \App\Link(['normal_link' => $url]);
        $s_link = new \App\ShortLink(['shortened_link' => hasher($url)]);
        $link->save();
        $link->short_link()->save($s_link);

        return view('shortenerlink_view', [
            'id' => hasher($url),
        ]);
    }

    public function redirect() {
        $url_id = request('url_id');


        $ShortLink = \App\ShortLink::query()->where('shortened_link', $url_id)->first();
        $Link = \App\Link::find($ShortLink['link_id']);
        return view('redirect', [
            'url_id' => $Link->normal_link,
        ]);
    }


    public function bitly() {
        $url_id = request('id');


        $ShortLink = \App\ShortLink::query()->where('shortened_link', $url_id)->first();
        $Link = \App\Link::find($ShortLink['link_id']);
        return view('redirect', [
            'url_id' => $Link->normal_link,
        ]);
    }

}
