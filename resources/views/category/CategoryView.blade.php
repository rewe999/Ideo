@extends('layouts.category.categoryLayout')

@section('content')
    <div class="col-md-6">
        @if($name)
            <h3 class="text-center">Category List - {{$name->title}}</h3>
        @else
            <h3 class="text-center">Category List</h3>
        @endif
        <ul id="tree1">
            @foreach($categories as $category)
                <li>
                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> <a href="{{route('get.category',$category->id)}}">{{ $category->title }}</a>
                    @if(count($category->childs))
                        @include('category.CategoryChild',['childs' => $category->childs])
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
    @include('category.CategoryAdd')

@endsection
