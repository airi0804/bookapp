@extends('layouts.helloapp')

{{-- @section('title', 'Index') --}}
{{-- 上と同じ --}}
@section('title')
    Index
@endsection

@section('menubar')
    @parent
    編集ページ
@endsection

@section('content')
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/book/edit" method="post">

        <table>
            @csrf
            <input type="hidden" name="id" value="{{ $form->id }}">
            <tr>
                <th>book_id: </th>
                <td><input type="number" name="book_id" value="{{ $form->book_id }}"></td>
            </tr>
            <tr>
                <th>title: </th>
                <td><input type="text" name="title" value="{{ $form->title }}"></td>
            </tr>
            <tr>
                <th>price: </th>
                <td><input type="number" name="price" value="{{ $form->price }}"></td>
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
