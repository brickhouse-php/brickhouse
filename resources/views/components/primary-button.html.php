<a class="w-fit" target="_blank" href="{{ $href ?? '#' }}">
    <div class="flex flex-row items-center text-base font-medium text-white bg-orange-400 rounded-full gap-2 px-5 py-2 transition duration-75 dark:text-white dark:bg-amber-600 hover:bg-orange-400/90 dark:hover:dark-amber-700">
        <slot />

        <x-icons.external-link :if="isset($href)" />
    </div>
</a>