@extends('_layouts.admin')

@section('content')
   <main>

      <div class="container-md">

         <div class="row justify-content-between my-3">

            <div class="col-10">

               <h1 class="text-primary text-center m-0">Comics Archive</h1>

            </div>


            <div class="col-2 d-flex justify-content-center align-items-end">

               <button type="button" class="btn btn-primary h-75 w-100 d-flex align-items-center justify-content-center">

                  <a href="{{ route('comics.create') }}">

                     <i class="fa-solid fa-plus"></i>

                  </a>

               </button>

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
                        <div class="action">
                           <th scope="row">CM-{{ $comic->id }}</th>
                           <td>{{ $comic->title }}</td>
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
                        </div>
                     </tr>
                  @endforeach
               </tbody>

            </table>

         </section>

      </div>

   </main>
@endsection
