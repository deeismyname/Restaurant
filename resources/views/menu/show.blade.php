@extends('layouts.main')



@section ('content')

{{-- {{dd("why do i come here")}} --}}

    <div class="content">
        <div class="table-content">

            <div class="header">
                <h1 class="heading">Dish Details</h1>

            </div>

            <table class="table">
                <thead>
                    <tr class="primary">
                        <th><h2>{{$menu->menu_name}}</h2></th>
                    </tr>
                </thead>

                <tbody>
                    <thead>
                        <tr>
                            <th><h2>Details: <span> @foreach ($menu->description as $description)
                                {{$description}}
                                @endforeach</span></h2></th>
                        </tr>
                    </thead>

                    <thead>
                        <tr>
                            <th><h2>Price:   {{$menu->unit_cost}} ₵</h2></th>
                        </tr>
                    </thead>

                    <thead>
                        <tr>
                            <th><h2>  @foreach ($menu->reuse as $reuse)
                                {{$reuse}}
                                @endforeach</h2></th>
                        </tr>
                    </thead>

                    <thead>
                        <tr>
                            <th>
                                <a href="{{route('menu.update', $menu->id)}}"><button> Edit </button></a>
                                <a href="#"><button>Delete</button></a>
                                <a href="{{route('menu.index')}}"><button>Back</button></a>
                            </th>
                        </tr>
                    </thead>
                </tbody>
            </table>

        </div>

@endsection


<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        background-color: a#32312f;
        font-family: sans-serif;
    }

    .table-content{
       padding: 0 10%;
       margin: 40px auto 0;
       width: 70rem;
    }

    .heading{
        font-size: 40px;
        text-align: center;
        color: #333333;
        margin-bottom: 40px;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        color: #000000;
        width: 100%;
    border-collapse: collapse;
    border-radius: 19px;
background: #f1f1f1;
box-shadow:  8px 8px 13px #cecece,
             -8px -8px 13px #f2f2f2;
    }



    .table thead tr th {
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 0.35px;

        opacity: 1;
        padding: 12px;
        padding: 12px;
        vertical-align: top;
        border: 1px solid #dee2e685;
    }

    .table tbody tr td{
        font-size: 14px;
        letter-spacing: 0.35px;
        font-weight: normal;
        color: #f1f1f1;
        background-color: #3c3f44;
        padding: 8px;
        text-align: center;
        border: 1px solid #dee2e685;
    }

    .table .text_open {
        font-size: 14px;
        font-weight: bold;
        letter-spacing: 0.35px;
        color: #76d4e7
    }

    .table thead .primary{
        background-color: #19B3D3;
        color: #f1f1f1;
    }

    button {
        width: auto;
        height: 2rem;
        font-size: 1.2rem;
        inner-margin: 1rem;
        margin: 0.6rem;
    }

</style>
