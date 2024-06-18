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
                  <input type="text"
                     class="form-control
                     @error('title')
                     is-invalid
                     @enderror"
                     id="title"
                     name="title"
                     value="{{ old('title') }}">

                  @error('title')
                     <div class="alert alert-danger mt-1">
                        The title can not be empty or less than 3 digits! Please insert a valid title.
                     </div>
                  @enderror

               </div>

               {{-- Sale Date Input --}}
               <div class="col-md-6">

                  <label for="sale_date" class="form-label">Sale Date</label>
                  <input type="text"
                     class="form-control"
                     id="sale_date"
                     name="sale_date"
                     placeholder="dd-mm-aaaa"
                     value="{{ old('sale_date') }}">

               </div>

               {{-- Price Input --}}
               <div class="col-sm-6">

                  <label for="price" class="form-label fw-bold">Comic Price in $</label>
                  <input type="number"
                     step="0.01"
                     min="0"
                     class="form-control
                     @error('price')
                     is-invalid
                     @enderror"
                     id="price"
                     name="price"
                     placeholder="00.00"
                     value="{{ old('price') }}">

                  @error('price')
                     <div id="title-empty-error" class="invalid-feedback">
                        The price can not be empty or less than 0.01! Please insert a valid amout.
                     </div>
                  @enderror

               </div>

               {{-- Series Input --}}
               <div class="col-md-7">

                  <label for="series" class="form-label">Series</label>
                  <input type="text"
                     class="form-control
                     @error('series')
                     is-invalid
                     @enderror"
                     id="series"
                     name="series"
                     placeholder="Insert here comic series"
                     value="{{ old('price') }}">

                  @error('series')
                     <div id="title-empty-error" class="invalid-feedback">
                        The series can not be less than 3 digits! Please insert a valid series.
                     </div>
                  @enderror

               </div>

               {{-- Type Input --}}
               <div class="col-md-5">

                  <label for="type" class="form-label">Type</label>
                  <select class="form-select" id="type" name="type">
                     <option>Choose a type...</option>
                     <option @selected(old('type') === 'comic book') value="comic book">Comic Book</option>
                     <option @selected(old('type') === 'graphic novel') value="graphic novel">Graphic Novel</option>
                     <option @selected(old('type') === 'manga') value="manga">Manga</option>
                  </select>

               </div>

               {{-- Poster Input --}}
               <div class="col-12">

                  <label for="thumb" class="form-label">Comic Poster URL</label>
                  <input type="text"
                     class="form-control"
                     id="thumb"
                     name="thumb"
                     placeholder="https://"
                     value="{{ old('thumb') }}">

               </div>

               {{-- Description Input --}}
               <div class="col-12">

                  <label for="description" class="form-label">Description</label>
                  <textarea class="form-control
                     @error('description')
                     is-invalid
                     @enderror"
                     id="description"
                     name="description"
                     rows="5"
                     placeholder="Insert here a description...">{{ old('description') }}</textarea>

                  @error('description')
                     <div id="title-empty-error" class="invalid-feedback">
                        The description can not be less than 20 digits! Please insert a valid description.
                     </div>
                  @enderror

               </div>

            </div>

            <hr class="my-4">

            {{-- Submit Button --}}
            <div class="col-4">

               <button class="w-100 btn btn-primary btn-lg mb-4" type="submit">Create</button>

            </div>

         </form>

      </div>

   </div>
@endsection
