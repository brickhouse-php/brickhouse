<a target="_blank" href="{{ $link }}">
    <div class="w-full rounded-lg border border-gray-500/15 p-8">
        <div class="flex flex-row text-gray-900 items-center dark:text-gray-200 gap-2 mb-3">
            <slot :if="$slots['icon']" #icon />

            <h1 class="text-lg font-semibold">
                {{ $title }}
            </h1>
        </div>

        <p class="text-base text-gray-700 dark:text-gray-300">
            <slot />
        </p>
    </div>
</a>