<x-layout>
  <x-card class=" right-0 p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">ویرایش شغل</h2>
      <p class="mb-4"> ویرایش: {{$listing->title}}</p>
    </header>
    <header class="text-right">

    <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-6">
        <label for="company" class="inline-block text-lg mb-2">اسم شرکت</label>
        <input type="text" class=" text-right border border-gray-200 rounded p-2 w-full" name="company"
          value="{{$listing->company}}" />

        @error('company')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2">عنوان شغل</label>
        <input type="text" class="text-right border border-gray-200 rounded p-2 w-full" name="title"
          value="{{$listing->title}}" />

        @error('title')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="location" class="inline-block text-lg mb-2">محل فعالیت</label>
        <input type="text" class="text-right border border-gray-200 rounded p-2 w-full" name="location"
           value="{{$listing->location}}" />

        @error('location')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2">
          ایمیل تماس
        </label>
        <input type="text" class="text-right border border-gray-200 rounded p-2 w-full" name="email" value="{{$listing->email}}" />

        @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="website" class="inline-block text-lg mb-2">
          آدرس وب سایت
        </label>
        <input type="text" class="text-right border border-gray-200 rounded p-2 w-full" name="website"
          value="{{$listing->website}}" />

        @error('website')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="tags" class="inline-block text-lg mb-2">
          برچسب ها
        </label>
        <input type="text" class="text-right border border-gray-200 rounded p-2 w-full" name="tags"
          value="{{$listing->tags}}" />

        @error('tags')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="logo" class="inline-block text-lg mb-2">
          لوگوی شرکت 
        </label>
        <input type="file" class=" text-right border border-gray-200 rounded p-2 w-full" name="logo" />

        <img class="w-48 mr-6 mb-6"
          src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="" />

        @error('logo')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="description" class="inline-block text-lg mb-2">
          توضیحات مربوط به شغل 
        </label>
        <textarea class=" text-right border border-gray-200 rounded p-2 w-full" name="description" rows="10"
          >{{$listing->description}}</textarea>

        @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <a href="/" class="text-black ml-4"> برگشت </a>
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
          به روز رسانی 
        </button>
      </div>
    </form>
  </header>

  </x-card>
</x-layout>
