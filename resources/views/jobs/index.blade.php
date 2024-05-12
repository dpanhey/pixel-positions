<x-layout>
    <div class="space-y-10">
        <section>
            <div class="flex flex-col items-center gap-4 pb-10 pt-6">
                <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

                <x-forms.form class="w-full max-w-xl"
                              action="/search">
                    <x-forms.input name="q"
                                   :label="false"
                                   placeholder="Web Developer..."
                                   class="flex w-full px-4 py-2 rounded-xl bg-white/10 border-white/15"/>
                </x-forms.form>
            </div>
        </section>

        <section>
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-6 mt-6">
                @foreach($featuredJobs as $job)
                    <x-job-card :$job/>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-3">
                @foreach($tags as $tag)
                    <x-tag :$tag/>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="grid lg:grid-cols-1 gap-6 mt-6">
                @foreach($jobs as $job)
                    <x-job-card-wide :$job/>
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
