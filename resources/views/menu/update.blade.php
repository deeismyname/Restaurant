@extends('layouts.main')



@section('content')
    <div>

        <form action="/food" method="PUT">
            @csrf
            <label for="menu-name">Enter Dish Name</label>
            <input type="text" name="menu_name" placeholder="enter dish name" value="{{old('menu_name')}}"  @error('menu_name') is-invalid @enderror"><br>
            <label for="unit_cost">Cost per plate</label>
            <input type="text" name="unit_cost" placeholder="unit cost (without symbol)" value="{{old('unit_cost')}}"  @error('unit_cost') is-invalid @enderror"><br>

            <div class="repeat">
                <h5>Repeat menu on:</h5>
                <input type="checkbox" id="Monday" name="reuse[]" value="Monday">
                <label for="Monday"> Monday</label><br>
                <input type="checkbox" id="Teusday" name="reuse[]" value="Teusday">
                <label for="Teusday"> Tuesday</label><br>
                <input type="checkbox" id="Wednesday" name="reuse[]" value="Wednesday">
                <label for="Wednesday"> Wednesday</label><br>
                <input type="checkbox" id="Thursday" name="reuse[]" value="Thursday">
                <label for="Thursday"> Thursday</label><br>
                <input type="checkbox" id="Friday" name="reuse[]" value="Friday">
                <label for="Friday"> Friday</label><br>
                <input type="checkbox" id="Saturday" name="reuse[]" value="Saturday">
                <label for="Saturday"> Saturday</label><br>
                <input type="checkbox" id="Sunday" name="reuse[]" value="Sunday">
                <label for="Sunday"> Sunday</label><br>
                {{-- <input type="text" name="reuse" placeholder="enter the days you want the menu to be repeated seperated by a comma"> --}}
            </div>

            <div>
                @include('components._modal')
            </div>
            <div>
                <div class="contols">
                    <button class="save" type="submit">Save</button>
                </div>

                <div>
                    <a href="{{route('menu.index')}}">Cancel</a>
                </div>
            </div>

        </form>
    </div>
@endsection


<style>
    form {
        margin-left: 500px;
        margin-top: 200px;
    }

    .controls{
        display: flex;
    }

     form button.save{
        background-color: green;
        font-size: 2rem;
    }
 form button.cancel{
        border: rgb(78, 79, 78);
        background-color: #f2f2f2;
        font-size: 2rem;
    }
</style>
