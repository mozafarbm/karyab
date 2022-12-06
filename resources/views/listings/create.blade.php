<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">ایجاد یک فرصت جدید</h2>
      <p class="mb-4">یک فرصت جدید ایجاد کن تا توسعه دهنده های مطلوب را پیدا کنی</p>
    </header>
    <header class="text-right">

    <form method="POST" action="/listings" enctype="multipart/form-data">
      @csrf
      <div class="mb-6">
        <label for="company" class="text-right inline-block text-lg mb-2">اسم شرکت</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
          value="{{old('company')}}" />

        @error('company')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2 ">عنوان شفل</label>
        <input type="text" class="text-right  border border-gray-200 rounded p-2 w-full" name="title"
          placeholder="مثال: توسعه دهنده مجرب لاراول" value="{{old('title')}}" />

        @error('title')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="location" class="inline-block text-lg mb-2">محل فعالیت</label>
        <input type="text" class="text-right  border border-gray-200 rounded p-2 w-full" name="location"
          placeholder="مثال: راه دور - ایلام - دره شهر" value="{{old('location')}}" />

        @error('location')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2">
          ایمیل تماس
        </label>
        <input type="text" class=" text-right border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />

        @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="website" class="inline-block text-lg mb-2">
          آدرس وب سایت
        </label>
        <input type="text" class="text-right  border border-gray-200 rounded p-2 w-full" name="website"
          value="{{old('website')}}" />

        @error('website')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="tags" class="inline-block text-lg mb-2">
          برچسب ها
        </label>
        <input type="text" class=" text-right border border-gray-200 rounded p-2 w-full" name="tags"
          placeholder="Example: Laravel, Backend, Postgres, etc" value="{{old('tags')}}" />

        @error('tags')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="logo" class="inline-block text-lg mb-2">
          لوگوی شرکت 
        </label>
        <input type="file" class=" text-right border border-gray-200 rounded p-2 w-full" name="logo" />

        @error('logo')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="description" class="inline-block text-lg mb-2">
          توضیحات مربوط به شغل 
        </label>
        <textarea class="text-right border border-gray-200 rounded p-2 w-full" name="description" rows="10"
          placeholder="Include tasks, requirements, salary, etc">{{old('description')}}</textarea>

        @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <a href="/" class="text-black ml-4"> برگشت </a>
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
          ایجاد شغل 
        </button>

      </div>
    </form>
    </header>
  </x-card>
</x-layout>
