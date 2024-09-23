<footer class="mt-auto bottom-0 left-0 z-20 w-full p-4 bg-white border-t border-gray-200 shadow flex items-center justify-between dark:bg-gray-800 dark:border-gray-600">
  <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 by Mike
  </span>
  <ul class="flex flex-wrap items-center mt-0 text-sm font-semibold text-gray-500 dark:text-gray-400">
      <li>
          <a href="{{ route('contact') }}" class="{{ (request()->routeIs('contact')) ? 'dark:text-gray-300 text-gray-700 border border-b-2 border-b-indigo-500 border-l-0 border-r-0 border-t-0' : '' }}">Contact me</a>
      </li>
  </ul>
</footer>