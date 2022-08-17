@extends('layouts.main')



@section ('content')



        <div class="content">
            <div class="table-content">

                {{-- <div class="header">
                    <h1 class="heading">Today's Menu</h1>
                    <a href="{{route('menu.create')}}"><button> <i class="fas fa-eye"></i>Add New</button></a>
                </div> --}}
                <a href="/menu/create">Create</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Dish Id</th>
                            <th>Menu_name</th>
                            <th>Unit Cost</th>
                            <th>Dish Details</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($menu->count())
                   @foreach ($menu as $index => $menu)
                   <tr>
                    {{-- <th scope="row">{{$index + $menu->firstItem()}}</th> --}}
                    <td>{{$menu->id}}</td>
                    <td>{{$menu->menu_name}}</td>
                    <td>{{$menu->unit_cost}}</td>
                    <td>
                        @foreach ($menu->description as $description)
                        {{$description}}
                        @endforeach
                    </td>
                    <td width="150">
                      <a href="{{route('menu.show', $menu->id)}}" title="Show"><i class="fas fa-eye"></i>show</a>
                      <a href="{{route('menu.update', $menu->id)}}" title="Edit"><i class="fa fa-edit">Edit</i></a>

                    </td>
                  </tr>
                   @endforeach

                  @endif



                    </tbody>
                </table>
                {{-- {{$menu->links()}} --}}
            </div>



        </div>


@endsection


<link rel="stylesheet" href="{{ ('css/menu_index.css') }}">
