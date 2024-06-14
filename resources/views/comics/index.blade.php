@extends('_layouts.admin');

@section('content')
   <main>

      <div class="container-md">

         <h1 class="text-primary text-center">Comics Archive</h1>

         <section class="row">

            <table class="table table-striped">

               <thead>

                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Title</th>
                     <th scope="col">Type</th>
                     <th scope="col">Series</th>
                     <th scope="col">Price</th>
                  </tr>

               </thead>

               <tbody>
                  @foreach ($comicsArray as $comic)
                     <tr>
                        <div class="action">
                           <th scope="row">CM-{{ $comic->id }}</th>
                           <td>{{ $comic->title }}</td>
                           <td>{{ $comic->type }}</td>
                           <td>{{ $comic->series }}</td>
                           <td>{{ $comic->price }} $</td>
                        </div>
                     </tr>
                  @endforeach
               </tbody>

            </table>

         </section>

      </div>

   </main>
@endsection
