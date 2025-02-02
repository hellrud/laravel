@props(['title', 'href'])

<a href="{{ $href }}" class="block max-w-sm p-6 border bg-white border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 hover:scale-105 transition-transform">
<h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $title }}</h5>
<p class="font-normal text-gray-700 dark:text-gray-400">{{ $slot }}</p>
</a>