<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="border-b border-grey-lighter pb-8 sm:pb-12">
                        {{-- <span
                          class="mb-5 inline-block rounded-full bg-green-light px-2 py-1 font-body text-sm text-green sm:mb-8">category</span> --}}
                        <h2
                          class="font-semibold text-xl">
                          {{ $post->title }}
                        </h2>
                        <div class="flex items-center pt-5 sm:pt-8">
                        
                    </div>

                    <br/><br/>
                    <div class="prose prose max-w-none border-b border-grey-lighter py-8 dark:prose-dark sm:py-12 mb-20">
                        <p>{{ $post->description }}</p>
                    </div>

                    <br/>
                    <span class="vdark:text-white font-body text-grey"></span>
                    <p class="pl-2 font-body font-light text-primary dark:text-white">
                      Published at : {{ $post->publication_date->format("d - M - Y H:i:s") }}
                    </p>
                  </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
