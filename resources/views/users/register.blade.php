<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">ثبت نام</h2>
      <p class="mb-4">ایجاد یک اکانت برای اشتراک گذاری فرصتهای شغلی</p>
    </header>
    <header class="text-right">

    <form method="POST" action="/users">
      @csrf
      <div class="mb-6 ">
        <label for="name" class="inline-block text-lg mb-2"> اسم </label>
        <input type="text" class="text-right border border-gray-200 rounded p-2 w-full" name="name" value="{{old('name')}}" />

        @error('name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2">ایمیل</label>
        <input type="email" class="text-right border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />

        @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="password" class="inline-block text-lg mb-2">
          رمز عبور
        </label>
        <input type="password" class="text-right border border-gray-200 rounded p-2 w-full" name="password"
          value="{{old('password')}}" />

        @error('password')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="password2" class="inline-block text-lg mb-2">
          تکرار رمز عبور 
        </label>
        <input type="password" class="text-right border border-gray-200 rounded p-2 w-full" name="password_confirmation"
          value="{{old('password_confirmation')}}" />

        @error('password_confirmation')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
          ثبت نام 
        </button>
      </div>

      <div class="mt-8">
        <p>
          قبلاً ثبت نام کرده اید؟
          <a href="/login" class="text-laravel">ورود</a>
        </p>
      </div>
    </form>
  </header>

  </x-card>
</x-layout>