@extends('layouts.helloapp')

{{-- @section('title', 'Index') --}}
{{-- 上と同じ --}}
@section('title')
    Index
@endsection

@section('menubar')
    @parent
    検索ページ
@endsection

@section('content')
    <form action="/book/find" method="post">
        @csrf
        <input type="text" name="input" value="{{$input}}">
        <input type="submit" value="find">
    </form>
    @if (isset($item))
        <table>
            <tr>
                <th>Book_Id</th>
                <th>Title</th>
                <th>Price</th>
            </tr>
            <tr>
                <td>{{$item->book_id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->price}}</td>
            </tr>
            {{-- <tr>
                <td>{{$item->getData()}}</td>
            </tr> --}}
        </table>
    @endif
@endsection

@section('footer')
    copyright 2020 tuyano
@endsection
