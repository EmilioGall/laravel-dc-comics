@extends('_layouts.admin')

@section('content')
   <main>

      <div class="container-md">

         {{-- Deleted Comic Table Header --}}
         <div class="row justify-content-between align-items-center py-3 border-bottom">

            <div class="col-12 col-sm-10">
   
               <h1 class="fw-1 fs-1 text-danger">Comics Archive: Deleted Comics</h1>
   
            </div>
   
            <div class="col-12 col-sm-2">
   
               <button type="button"
                  class="btn btn-outline-danger h-75 w-100 d-flex align-items-center justify-content-center">
   
                  <a href="{{ route('comics.index') }}">
   
                     <i class="fa-solid fa-angles-left"></i> Go Back
   
                  </a>
   
               </button>
   
            </div>
   
         </div>

         {{-- Comic Table --}}
         <section class="row">

            <table class="table table-hover">

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
                  @foreach ($deletedComicsArray as $comicId => $comic)
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
                        <td>
                           @if (str_contains($comic->price, '.'))
                              {{ $comic->price }} $
                           @else
                              {{ $comic->price }}.00 $
                           @endif
                        </td>
                        <td>

                           <div class="d-flex gap-2">

                              {{-- Restore Button --}}
                              <button type="button" class="btn btn-outline-primary">

                                 <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}">

                                    <i class="fa-solid fa-trash-can-arrow-up"></i>

                                 </a>

                              </button>

                              {{-- Delete Button --}}
                              <button type="button"
                                 class="btn btn-outline-danger my-delete-btn{{ $comicId }}"
                                 data-bs-toggle="modal"
                                 data-bs-target="#deleteModal"
                                 data-php-title-variable="{{ $comic->title }}">

                                 <i class="fa-regular fa-trash-can"></i>

                              </button>

                           </div>

                        </td>
                     </tr>
                  @endforeach
               </tbody>

               {{-- Delete Confirmation Modal --}}
               <div id="deleteModal"
                  class="modal fade"
                  tabindex="-1"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true">

                  <div class="modal-dialog modal-dialog-centered">

                     <div class="modal-content">

                        <div class="modal-header">

                           <h1 id="exampleModalLabel" class="modal-title fs-4 fw-bold">Delete Comic</h1>

                           <button type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"></button>

                        </div>

                        <div class="modal-body">
                           Are you sure you want to delete the comic: "<span class="my-selected-comic"></span>"?
                        </div>

                        <div class="modal-footer">

                           <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>

                           <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                              @csrf
                              @method('DELETE')

                              <button type="submit" class="btn btn-outline-danger">

                                 <i class="fa-regular fa-trash-can"></i>

                              </button>

                           </form>

                        </div>

                     </div>

                  </div>

               </div>

            </table>

         </section>

      </div>

   </main>
@endsection