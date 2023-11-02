@extends('layouts.helloapp')

{{-- @section('title', 'Index') --}}
{{-- 上と同じ --}}
@section('title')
    Index
@endsection

@section('menubar')
    @parent
    削除ページ
@endsection

@section('content')
    <form action="/book/del" method="post">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{ $form->id }}">
            <tr>
                <th>book_id: </th>
                <td>{{ $form->book_id }}</td>
            </tr>
            <tr>
                <th>title: </th>
                <td>{{ $form->title }}</td>
            </tr>
            <tr>
                <th>price: </th>
                <td>{{ $form->price }}</td>
            </tr>
        </table>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </form>
@endsection

@section('footer')
    copyright 2020 tuyano
@endsection
