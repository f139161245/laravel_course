// include
@extends('layouts.app')


@section('title', 'Laravel Blog')
@section('content')



    {{-- //


        @yield('name')
    @section('name')

    @endsection


   ## @extends('name') --}}

    <title>Insert</title>
    <h1>In tempor ea veniam aliqua culpa fugiat.</h1>

    {{-- <div class="mb-3" style="padding: 5%">
        <label for="formFile" class="form-label">Default file input example</label>
        <input class="form-control" type="file" id="formFile">
    </div> --}}

    <table border="1" style="text-align: center; width:100%">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th></th>
        </tr>
        @foreach ($posts as $post)
            
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->name }}</td>
            <td>{{ $post->email }}</td>
            <td>

                <form action="{{route('delete',$post->id) }}" method="post" >
                    @csrf
                    <input type="submit" value="Delete" name="delete"> 
                </form>
                <a href="update/{{ $post->id }}"> <button>Update</button></a>
            </td>
        </tr>
         @endforeach
    </table>

    <form action="{{ route('store') }}" method="post">
        @csrf
           <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Name</label>
        <input name="post_name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input namw">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Another label</label>
        <input name="post_email" type="email" class="form-control" id="formGroupExampleInput2" placeholder="Another input email">
    </div>
    <div class="mb-3">
        <input type="submit" value="insert">
    </div>

    </form>


 

@endsection
