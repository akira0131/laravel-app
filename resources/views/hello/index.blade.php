@extends('layouts.helloapp')
<style>
    .pagination { font-size:10pt; }
    .pagination li { display:inline-block }
    tr th a:link { color: white; }
    tr th a:visited { color: white; }
    tr th a:hover { color: white; }
    tr th a:active { color: white; }
</style>
@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    @if (Auth::check())
    <p>USER: {{$user->name . ' (' . $user->email . ')'}}</p>
    @else
    <p>※ログインしていません。（<a href="/login">ログイン</a>｜
        <a href="/register">登録</a>）</p>
    @endif 
    <table>
    <tr>
        <th><a href="/hello?sort=name">name</a></th>
        <th><a href="/hello?sort=mail">mail</a></th>
        <th><a href="/hello?sort=age">age</a></th>
    </tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->mail}}</td>
            <td>{{$item->age}}</td>
        </tr>
    @endforeach
    </table>
    {{-- $item->appends(['sort' => $sort])->link() --}}
    <p>ここが本文のコンテンツです。</p>
    <p>Controller value<br>'message' = {{$message}}</p>
    <p>ViewComposer value<br>'view_message' = {{$view_message}}</p>
    @include('components.message', ['msg_title'=>'OK', 'msg_content'=>'サブビューです。'])

@endsection

@section('footer')
copyright 2017 tuyono.
@endsection
