@extends('_layouts.admin')

@section('content')
   <main>

      <div class="container-md">

         <div class="row justify-content-between my-3">

            <div class="col-10">

               <h1 class="text-primary text-center m-0">Comics Archive</h1>

            </div>


            <div class="col-2 d-flex justify-content-center align-items-end">

               <a class="w-100 d-flex align-items-center justify-content-center" href="{{ route('comics.create') }}">

                  <button type="button" class="btn btn-primary">

                     <i class="fa-solid fa-plus"></i> Add New Comic

                  </button>

               </a>

            </div>

         </div>

         <section class="row">

            <table class="table table-striped">

               <thead>

                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Title</th>
                     <th scope="col">Type</th>
                     <th scope="col">Series</th>
                     <th scope="col">Price</th>
                     <th scope="col">Actions</th>
                  </tr>

               </thead>

               <tbody>
                  @foreach ($comicsArray as $comic)
                     <tr>
                        <th scope="row">
                           <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                              Cm-{{ $comic->id }}
                           </a>
                        </th>
                        <td>
                           <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                              {{ $comic->title }}
                           </a>
                        </td>
                        <td>{{ $comic->type }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->price }} $</td>
                        <td>

                           <button type="button" class="btn btn-outline-primary">

                              <a href="">

                                 <i class="fa-regular fa-pen-to-square"></i>

                              </a>

                           </button>

                           <button type="button" class="btn btn-outline-danger">

                              <a href="">

                                 <i class="fa-regular fa-trash-can"></i>

                              </a>

                           </button>

                        </td>
                     </tr>
                  @endforeach
               </tbody>

            </table>

         </section>

      </div>

   </main>
@endsection
