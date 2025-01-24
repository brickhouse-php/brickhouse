<a class="w-fit" target="_blank" href="{{ $href ?? '#' }}">
    <div class="flex flex-row items-center text-base font-medium text-gray-500 rounded-full gap-2 transition duration-75 px-5 py-2 dark:text-gray-200 hover:bg-gray-400/10">
        <slot />

        <x-icons.external-link :if="isset($href)" />
    </div>
</a>