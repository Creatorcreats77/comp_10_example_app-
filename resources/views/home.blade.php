@extends('layouts.app')


@section('title')
Home
@endsection


@section('content')

<article>
    <img class="float-left w-64 h-48 object-cover rounded-2xl hover:shadow-2xl mr-12 my-3" src="{{ asset('images/mountain.avif') }}" />
    <div class="text-2xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam neque voluptas rem obcaecati voluptatibus aut alias minus consequuntur. Praesentium deserunt eligendi mollitia aut! Itaque temporibus velit est, nostrum tempora dolorem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus quis deleniti placeat voluptates quam laboriosam suscipit quae ea molestiae sunt? Assumenda consequuntur beatae laboriosam cum recusandae necessitatibus itaque consectetur ullam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam cumque, voluptate sint iure eaque excepturi enim possimus sed deserunt omnis, velit laborum autem, nesciunt adipisci. Amet minus eveniet necessitatibus perspiciatis. Maybe we can live without libraries, people like you and me. ...</div>
</article>


<div class="text-2xl py-12">Bizin Ulanyjylarymyz! <span>100</span> </div>

<div class="grid grid-cols-2 gap-4 text-2xl ">
    <div class="shadow-xl p-6 m-6 rounded-2xl bg-green-300 hover:bg-red-500 inset-shadow-sm inset-shadow-green-500">

        <div>
            <b>id:</b> 1
        </div>

        <div>
            <b>Name:</b> Meret
        </div>

        <div>
            <b>email:</b> meret@gmail.com
        </div>

        <div>
            <b class="text-green-700 h">My skill:</b> Laravel
        </div>

        <div z>
            <b class="text-yellow-600">I want to learn:</b> Python
        </div>


    </div>

  <div class="shadow-xl p-6 m-6 rounded-2xl bg-green-300 inset-shadow-sm inset-shadow-green-500">

        <div>
            <b>id:</b> 1
        </div>

        <div>
            <b>Name:</b> Meret
        </div>

        <div>
            <b>email:</b> meret@gmail.com
        </div>

        <div>
            <b class="text-green-700">My skill:</b> Laravel
        </div>

        <div>
            <b class="text-yellow-600">I want to learn:</b> Python
        </div>


    </div><div class="shadow-xl p-6 m-6 rounded-2xl bg-green-300 inset-shadow-sm inset-shadow-green-500">

        <div>
            <b>id:</b> 1
        </div>

        <div>
            <b>Name:</b> Meret
        </div>

        <div>
            <b>email:</b> meret@gmail.com
        </div>

        <div>
            <b class="text-green-700">My skill:</b> Laravel
        </div>

        <div>
            <b class="text-yellow-600">I want to learn:</b> Python
        </div>


    </div>
    <div class="shadow-xl p-6 m-6 rounded-2xl bg-green-300 inset-shadow-sm inset-shadow-green-500">

        <div>
            <b>id:</b> 1
        </div>

        <div>
            <b>Name:</b> Meret
        </div>

        <div>
            <b>email:</b> meret@gmail.com
        </div>

        <div>
            <b class="text-green-700">My skill:</b> Laravel
        </div>

        <div>
            <b class="text-yellow-600">I want to learn:</b> Python
        </div>


    </div>
</div>




@endsection