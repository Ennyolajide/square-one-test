<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="py-3">
            <div class="flex justify-center">
                <div class="mb-3 xl:w-96">
                  <select id="sortBy" class="form-select appearance-none
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding bg-no-repeat
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                      <option {{ $order == '' ? 'selected' : '' }} disabled>Sort By : Publication Date </option>
                      <option {{ $order == 'latest' ? 'selected' : '' }} value="latest">Latest</option>
                      <option {{ $order == 'oldest' ? 'selected' : '' }} value="oldest">Oldest</option>
                      {{ $order }}
                  </select>
                </div>
            </div>
        </div>
        <br/>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($posts as $post)
                        <div class="border-b border-grey-lighter pb-8">
                            {{-- <span
                                class="mb-4 inline-block rounded-full bg-green-light px-2 py-1 font-body text-sm text-green">category</span> --}}
                            <a href="{{ route('dashboard.post.show', ['post' => $post->id ]) }}"
                                class="block font-body text-lg font-semibold text-primary transition-colors hover:text-green dark:text-white dark:hover:text-secondary">{{ $post->title }}</a>
                            
                            <div class="flex items-center pt-4">
                                <span class="font-body text-grey dark:text-white"></span>
                                <p class="pl-2 font-body font-light text-primary dark:text-white">
                                    Publication date : {{ $post->publication_date->format("m/d/Y") }}
                                </p>
                            </div>
                            <br/>
                        </div>  
                    @endforeach
                   {{--  @php $paginator = $posts; @endphp
                    @include('layouts.pagination') --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
