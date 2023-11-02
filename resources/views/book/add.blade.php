@extends('layouts.helloapp')

{{-- @section('title', 'Index') --}}
{{-- 上と同じ --}}
@section('title')
    Index
@endsection

@section('menubar')
    @parent
    追加ページ
@endsection

@section('content')
{{-- 入力内容が正しい形式で書かれているかどうかの確認 --}}
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/book/add" method="post">
    <table>
        @csrf
        {{-- old: エラーが起きても入力した値がそのまま残る --}}
        <tr>
            <th>book_id: </th>
            <td><input type="number" name="book_id" value="{{old('book_id')}}"></td>
        </tr>
        <tr>
            <th>title: </th>
            <td><input type="text" name="title" value="{{old('title')}}"></td>
        </tr>
        <tr>
            <th>price: </th>
            <td><input type="number" name="price" value="{{old('price')}}"></td>
        </tr>
    </table>
    {{-- 送信ボタン --}}
    <tr>
        <th></th>
        <td><input type="submit" value="send"></td>
    </tr>
    </form>
@endsection

@section('footer')
    copyright 2020 tuyano
@endsection
