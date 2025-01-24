<x-layout::default>
    <div class="w-full flex flex-col lg:mt-16">
        <div class="w-full min-h-64 flex flex-col gap-6 lg:min-h-[32rem] lg:flex-row-reverse">
            <div class="flex w-3/5 flex-col items-center justify-center rotate-[1deg] gap-6 px-4 xl:px-12">
                <p class="text-lg text-gray-700 text-center dark:text-gray-300">
                    To get started, try to scaffold a new controller:
                </p>

                <x-terminal>
                    php brickhouse generate:controller Profile
                </x-terminal>
            </div>
            <div class="flex w-full flex-col justify-center lg:w-3/5">
                <h1 class="text-5xl text-gray-900 font-bold tracking-[0.01em] text-center dark:text-gray-50 mb-2">
                    Welcome to Brickhouse!
                </h1>
                <span class="text-xl text-gray-500 text-center dark:text-gray-400">
                    Congrats on creating your new Brickhouse application!
                </span>

                <div class="w-full flex flex-col sm:flex-row gap-4 items-center justify-center mt-8">
                    <x-primary-button href="https://brickhouse.github.io">
                        Read the docs
                    </x-primary-button>

                    <x-secondary-button href="https://github.com/brickhouse-php/framework/issues">
                        Need help?
                    </x-secondary-button>
                </div>
            </div>
        </div>

        <div class="mt-6 lg:mt-16">
            <h1 class="text-2xl text-gray-900 font-semibold ml-2 mb-2 dark:text-gray-50">
                Next steps
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-1">
                <x-next-step title="Directory Structure" link="https://laravel.com/docs/11.x#next-steps">
                    <template #icon>
                        <x-icons.folder />
                    </template>

                    <template>
                        Explore how a typical Brickhouse application is structured and see what different files do.
                    </template>
                </x-next-step>

                <x-next-step title="Configuration" link="https://laravel.com/docs/11.x#next-steps">
                    <template #icon>
                        <x-icons.cog />
                    </template>

                    <template>
                        Change how the application works internally to fit your specific needs.
                    </template>
                </x-next-step>

                <x-next-step title="Routing" link="https://laravel.com/docs/11.x#next-steps">
                    <template #icon>
                        <x-icons.arrows-up-down />
                    </template>

                    <template>
                        Route your users to the <i>exact</i> action that you intended using expressive routing rules.
                    </template>
                </x-next-step>

                <x-next-step title="Views" link="https://laravel.com/docs/11.x#next-steps">
                    <template #icon>
                        <x-icons.paint-brush />
                    </template>

                    <template>
                        Define how your data is presented. Whether it's dynamic frontend pages or data-driven JSON APIs.
                    </template>
                </x-next-step>
            </div>
        </div>
    </div>
</x-layout::default>