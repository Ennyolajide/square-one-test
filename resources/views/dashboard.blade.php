<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
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
                                <p class="pr-2 font-body font-light text-primary dark:text-white">
                                    {{ $post->created_at->diffForHumans() }}
                                </p>
                                <span class="font-body text-grey dark:text-white">//</span>
                                <p class="pl-2 font-body font-light text-primary dark:text-white">
                                    {{ rand(2,6) }} min read
                                </p>
                            </div>
                        </div>  
                    @endforeach
                    @php $paginator = $posts; @endphp
                    @include('layouts.pagination')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
