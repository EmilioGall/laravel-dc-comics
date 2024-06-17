@extends('_layouts.admin');

@section('content')
   <div class="container-md">

      <div class="row justify-content-between align-items-center py-3 border-bottom">

         <div class="col-12 col-sm-10">

            <h1 class="fw-1 fs-1 text-primary">Comics Archive: Add New Comic</h1>

         </div>

         <div class="col-12 col-sm-2">

            <button type="button"
                    class="btn btn-outline-primary h-75 w-100 d-flex align-items-center justify-content-center">

               <a href="{{ route('comics.index') }}">

                  <i class="fa-solid fa-angles-left"></i> Go Back

               </a>

            </button>

         </div>

      </div>

      <div>

         <form class="border rounded p-3 my-4" action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="row g-3">

               {{-- Title Input --}}
               <div class="col-12">

                  <label for="title" class="form-label fw-bold">Comic Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="" value=""
                         required="">
                  <div class="invalid-feedback">
                     Valid Comic Title is required.
                  </div>

               </div>

               {{-- Sale Date Input --}}
               <div class="col-md-6">

                  <label for="sale_date" class="form-label">Sale Date</label>
                  <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="dd-mm-aaaa">

               </div>

               {{-- Price Input --}}
               <div class="col-sm-6">

                  <label for="price" class="form-label fw-bold">Comic Price in $</label>
                  <input type="number" step="0.01" min="0" class="form-control" id="price" name="price" placeholder="00.00"
                         required="">
                  <div class="invalid-feedback">
                     Valid Comic Price is required.
                  </div>

               </div>

               {{-- Series Input --}}
               <div class="col-md-7">

                  <label for="series" class="form-label">Series</label>
                  <input type="text" class="form-control" id="series" name="series" placeholder="Insert here comic series">

               </div>

               {{-- Type Input --}}
               <div class="col-md-5">

                  <label for="type" class="form-label">Type</label>
                  <select class="form-select" id="type" name="type">
                     <option selected>Choose a type...</option>
                     <option value="comic book">Comic Book</option>
                     <option value="graphic novel">Graphic Novel</option>
                     <option value="manga">Manga</option>
                  </select>

               </div>

               {{-- Poster Input --}}
               <div class="col-12">

                  <label for="thumb" class="form-label">Comic Poster URL</label>
                  <input type="text" class="form-control" id="thumb" name="thumb" placeholder="https://">

               </div>

               {{-- Description Input --}}
               <div class="col-12">

                  <label for="description" class="form-label">Description</label>
                  <textarea class="form-control" id="description" name="description" rows="5"
                            placeholder="Insert here a description..."></textarea>

               </div>

            </div>

            <hr class="my-4">

            <div class="col-4">

               <button class="w-100 btn btn-primary btn-lg mb-4" type="submit">Create</button>

            </div>

         </form>

      </div>

   </div>
@endsection