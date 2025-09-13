@extends('user-layout')

@section('title', 'Home')

@section('content')

<h2 class="mb-3">A-Wiki</h2>
    <p class="lead text-muted">A catalogue of all things for your next A in class.</p>

    <form method="GET" action="search.php" class="my-4">
        <label class="form-label">Search a page or category</label>
        <input type="text" name="search" class="form-control" placeholder="Search...">
        <button type="submit" class="btn btn-primary mt-2">Search</button>
    </form>

    <hr class="my-5">

    <h4 class="mb-3">...or browse our latest entries:</h4>
    <ul class="list-group">
        @foreach ($entries as $entry)
            <li class="list-group-item">
                    <a href="">
                        {{$entry->item}}
                    </a>
                    <br>
                    <small class="text-muted">{{$entry->description}}</small>
            </li>
        @endforeach
            
    </ul>

@endsection