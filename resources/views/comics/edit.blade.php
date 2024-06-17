@extends('_layouts.admin');

@section('content')
   <div class="container-md">

      <div class="row justify-content-between align-items-center py-3 border-bottom">

         <div class="col-12 col-sm-10">

            <h1 class="fw-1 fs-1 text-primary">Comics Archive: Update Comic "{{ $comic->title }}"</h1>

         </div>

         <div class="col-12 col-sm-2">

            <button class="btn btn-outline-primary h-75 w-100 d-flex align-items-center justify-content-center"
                    type="button">

               <a href="{{ route('comics.index') }}">

                  <i class="fa-solid fa-angles-left"></i> Go Back

               </a>

            </button>

         </div>

      </div>

      <div>

         <form class="border rounded p-3 my-4" action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
            @csrf

            @method('PUT')

            <div class="row g-3">

               {{-- Title Input --}}
               <div class="col-12">

                  <label class="form-label fw-bold" for="title">Comic Title</label>
                  <input id="title" class="form-control" name="title" type="text" value="{{ $comic->title }}"
                         required="">
                  <div class="invalid-feedback">
                     Valid Comic Title is required.
                  </div>

               </div>

               {{-- Sale Date Input --}}
               <div class="col-md-6">

                  <label class="form-label" for="sale_date">Sale Date</label>
                  <input id="sale_date" class="form-control" name="sale_date" type="text"
                         value="{{ date('d-m-Y', strtotime($comic->sale_date)) }}">

               </div>

               {{-- Price Input --}}
               <div class="col-sm-6">

                  <label class="form-label fw-bold" for="price">Comic Price in $</label>
                  <input id="price" class="form-control" name="price" type="number" value="{{ $comic->price }}"
                         min="0" required="" step="0.01">
                  <div class="invalid-feedback">
                     Valid Comic Price is required.
                  </div>

               </div>

               {{-- Series Input --}}
               <div class="col-md-7">

                  <label class="form-label" for="series">Series</label>
                  <input id="series" class="form-control" name="series" type="text" value="{{ $comic->series }}">

               </div>

               {{-- Type Input --}}
               <div class="col-md-5">

                  <label class="form-label" for="type">Type</label>
                  <select id="type" class="form-select" name="type">
                     <option value="comic book" @selected($comic->type === 'comic book')>Comic Book</option>
                     <option value="graphic novel" @selected($comic->type === 'graphic novel')>Graphic Novel</option>
                     <option value="manga" @selected($comic->type === 'manga')>Manga</option>
                  </select>

               </div>

               {{-- Poster Input --}}
               <div class="col-12">

                  <label class="form-label" for="thumb">Comic Poster URL</label>
                  <input id="thumb" class="form-control" name="thumb" type="text" value="{{ $comic->thumb }}">

               </div>

               {{-- Description Input --}}
               <div class="col-12">

                  <label class="form-label" for="description">Description</label>
                  <textarea id="description" class="form-control" name="description" rows="5">{{ $comic->description }}</textarea>

               </div>

            </div>

            <hr class="my-4">

            <div class="col-4">

               <button class="w-100 btn btn-primary btn-lg mb-4" type="submit">Update</button>

            </div>

         </form>

      </div>

   </div>
@endsection
