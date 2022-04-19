@extends('base')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-3">
 
        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body bg-warning">
                            <h2 class="h5">Insert product</h2>
                            <form action="/insert" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="">name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                   
                                <div class="mb-3">
                                    <label for="">description</label>
                                    <textarea name="description" class="form-control" rows="5"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="">price</label>
                                    <input type="text" name="price" class="form-control">
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="">image</label>
                                    <input type="file" name="image" class="form-control">
                                </div> --}}
                                <div class="mb-3">
                                    <input type="submit" class="btn btn-dark w-100">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <table class="table">
                       <tr>
                           <th>id</th>
                           <th>name</th>
                           <th>description</th>
                           <th>price</th>
                           {{-- <th>image</th> --}}
                           <th>action</th>
                       </tr>
                       @foreach ($data as $item)
                       <tr>
                           <td>{{ $item->id }}</td>
                           <td>{{ $item->name }}</td>
                           <td>{{ $item->description }}</td>
                           <td>{{ $item->price }}</td>
                           {{-- <td>{{ $item->image }}</td> --}}

                           {{-- <td>
                              <img width="50px" src="{{ asset("product_image/".$p->image) }}" alt="">
                           </td> --}}

                           <td>
                               <a href="/delete/{{ $item->id }}" class="btn btn-danger">delete</a>

                           </td>
                       </tr>    
                       @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection




