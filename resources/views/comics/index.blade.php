@extends('_layouts.admin')

@section('content')
   <main>

      <div class="container-md">

         {{-- Comic Table Header --}}
         <div class="row justify-content-between my-3">

            {{-- Comic Table Title --}}
            <div class="col-8">

               <h1 class="text-primary text-center m-0">Comics Archive</h1>

            </div>

            {{-- Link to Deleted Comic Table --}}
            <div class="col-2 d-flex justify-content-center align-items-end">

               <button type="button" class="btn btn-danger">

                  <a class="w-100 d-flex align-items-center justify-content-center" href="{{ route('deletedComics') }}">

                     <i class="fa-regular fa-trash-can me-1"></i> Go to Deleted

                  </a>

               </button>

            </div>

            <div class="col-2 d-flex justify-content-center align-items-end">

               <button type="button" class="btn btn-primary">

                  <a class="w-100 d-flex align-items-center justify-content-center" href="{{ route('comics.create') }}">

                     <i class="fa-solid fa-plus me-1"></i> Add New Comic

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
                  @foreach ($comicsArray as $comicId => $comic)
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

                              {{-- Modify Button --}}
                              <button type="button" class="btn btn-outline-primary">

                                 <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}">

                                    <i class="fa-regular fa-pen-to-square"></i>

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
                     <div class="my-counter" data-php-count-variable="{{ count($comicsArray) }}"></div>
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
