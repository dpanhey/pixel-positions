<x-layout>
    <div class="space-y-10">
        <section>
            <div class="flex flex-col items-center gap-4 pb-10 pt-6">
                <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

                <form action=""
                class="w-full max-w-xl">
                    <input type="text"
                           placeholder="Web Developer..."
                           class="flex w-full px-4 py-2 rounded-xl bg-white/10 border-white/15">
                </form>
            </div>
        </section>

        <section>
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-6 mt-6">
                <x-job-card/>
                <x-job-card/>
                <x-job-card/>
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-3">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="grid lg:grid-cols-1 gap-6 mt-6">
                <x-job-card-wide/>
                <x-job-card-wide/>
                <x-job-card-wide/>
            </div>
        </section>
    </div>
</x-layout>
