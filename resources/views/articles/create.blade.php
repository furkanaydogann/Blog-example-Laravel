<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


<form action="/articles" method="POST">
    @csrf

    Kategori<br>
    <select name="category_id">
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <hr>

    Başlık<br>
    <input type="text" name="title"  value="{{ old('title') }}">
    @error('title')
    <br>{{ $message }}
    @enderror
    <hr>

    İçerik<br>
    <textarea name="content">{{ old('content') }}</textarea>
    @error('content')
    <br>{{ $message }}
    @enderror

    <br>
    <button type="submit">Ekle</button>

</form>
<hr>
<a href="/articles">İptal</a>

</div>
            </div>
        </div>
    </div>
</x-app-layout>
