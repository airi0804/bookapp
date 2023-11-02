@extends('layouts.helloapp')

{{-- @section('title','Index') --}}
{{-- 上と同じ --}}
@section('title')
    Index
@endsection

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
  <table>
    <tr>
        <th>Book_Id</th>
        <th>Title</th>
        <th>Price</th>
    </tr>
    @foreach ($items as $item)
        <tr>
            {{-- <td>{{$item->id}}</td> --}}
            <td>{{$item->book_id}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->price}}</td>
        </tr>
    @endforeach
  </table>
@endsection

@section('footer')
    copyright 2020 tuyano
@endsection