<x-layout>
    <x-slot:headding>
        Create job
    </x-slot:headding>

    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <p class="mt-1 text-sm leading-6 text-gray-600">Write info for job</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">

                            <x-form-input value="{{old('title')}}" type="text" name="title" id="title"
                                          autocomplete="title" placeholder="CEO" required/>
                            <x-form-error name="title"/>

                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">

                            <x-form-input value="{{old('salary')}}" type="text" name="salary" id="salary"
                                          autocomplete="salary" placeholder="$ 50.000 USD" required/>
                            <x-form-error name="salary"/>

                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                    <x-from-button>Save</x-from-button>
                </div>
    </form>

</x-layout>
