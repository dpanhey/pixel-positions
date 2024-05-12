<x-layout>
    <x-page-heading>Create A Job</x-page-heading>

    <x-forms.form
        method="POST"
        action="/jobs">

        <x-forms.input name="title"
                       label="Title"
                       placeholder="Web Developer"/>
        <x-forms.input name="salary"
                       label="Salary"
                       placeholder="$60,000 USD"/>
        <x-forms.input name="location"
                       label="Location"
                       placeholder="Winter Park, Florida"/>

        <x-forms.select name="schedule"
                        label="Schedule">
            <option>Full Time</option>
            <option>Part Time</option>
        </x-forms.select>

        <x-forms.input name="url"
                       label="URL"
                       placeholder="https://acme.com/jobs/web-developer"/>
        <x-forms.checkbox name="featured"
                          label="Featured (Costs Extra)"/>

        <x-forms.divider/>

        <x-forms.input name="tags"
                       label="Tags (comma separated)"
                       placeholder="Laracasts, video, education..."/>

        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>

</x-layout>
