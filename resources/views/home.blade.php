@extends('layouts.app')


@section('title')
Home
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

<div class="flex justify-between text-2xl mx-6 py-4 border border-gray-400 rounded-2xl">
    <div>
        Bizin ulanyjylarymyz:
    </div>

    <div>
        {{ $users->count() }}
    </div>
</div>

<div class="grid grid-cols-2 gap-4 text-2xl ">
    @foreach ($users as $user)
    <div class="shadow-xl p-6 m-6 rounded-2xl bg-green-300 hover:bg-green-400 inset-shadow-sm inset-shadow-green-500">

        <div>
            <b>id:</b> {{$user->id}}
        </div>

        <div>
            <b>Name:</b> {{$user->name}}
        </div>

        <div>
            <b>email:</b> {{$user->email}}
        </div>

        <div>
            <b class="text-green-700 h">My skill:</b> {{$user->skill}}
        </div>

        <div>
            <b class="text-green-700 h">Age: </b> {{$user->age}}
        </div>

        <div z>
            <b class="text-yellow-600">I want to learn:</b> {{$user->skill_wanted}}
        </div>

        <form class="flex justify-end" action="/user/delete/{{$user->id}}" method="post">
            @method("DELETE")
            <button
                class="border border-none bg-red-400 hover:bg-red-500 cursor-pointer text-white text-sm px-3 py-2 rounded"
                type="submit">DELETE
            </button>
        </form>


    </div>
    @endforeach
</div>




@endsection