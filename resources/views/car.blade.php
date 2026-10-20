@extends('layouts.app')


@section('title')
Car
@endsection


@section('content')

<article>
    <img class="float-left w-64 h-48 object-cover rounded-2xl hover:shadow-2xl mr-12 my-3"
        src="{{ asset('images/mountain.avif') }}" />
    <div class="text-2xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam neque voluptas rem obcaecati
        voluptatibus aut alias minus consequuntur. Praesentium deserunt eligendi mollitia aut! Itaque temporibus velit
        est, nostrum tempora dolorem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus quis deleniti
        placeat voluptates quam laboriosam suscipit quae ea molestiae sunt? Assumenda consequuntur beatae laboriosam cum
        recusandae necessitatibus itaque consectetur ullam. Lorem ipsum, dolor sit amet consectetur adipisicing elit.
        Veniam cumque, voluptate sint iure eaque excepturi enim possimus sed deserunt omnis, velit laborum autem,
        nesciunt adipisci. Amet minus eveniet necessitatibus perspiciatis. Maybe we can live without libraries, people
        like you and me. ...</div>
</article>

<div class="grid grid-cols-2 gap-4 text-2xl ">
    @foreach ($cars as $car)
    <div class="shadow-xl p-6 m-6 rounded-2xl bg-green-300 hover:bg-green-400 inset-shadow-sm inset-shadow-green-500">

        <div>
            <b>id:</b> {{$car->id}}
        </div>

        <div>
            <b>Name:</b> {{$car->name}}
        </div>

        <div>
            <b>email:</b> {{$car->model}}
        </div>

        <div>
            <b class="text-green-700 h">My skill:</b> {{$car->year}}
        </div>

        <div>
            <b class="text-green-700 h">Age: </b> {{$car->car_type}}
        </div>

        <div z>
            <b class="text-yellow-600">I want to learn:</b> {{$car->car_color}}
        </div>


    </div>
    @endforeach
</div>




@endsection