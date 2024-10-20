<x-layout>
    <x-slot:headding>
        Edit job {{$job->title}}
    </x-slot:headding>

    <form method="POST" action="/jobs/{{$job->id}}">
        @method('PATCH')
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                <x-form-field>
                    <x-form-label for="title">Title</x-form-label>
                    <div class="mt-2">

                        <x-form-input value="{{old('title') ? old('title') : $job->title}}" type="text" name="title"
                                      id="title" autocomplete="title" placeholder="CEO" required/>
                        <x-form-error name="title"/>

                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="title">Salary</x-form-label>
                    <div class="mt-2">

                        <x-form-input value="{{old('salary') ? old('salary') : $job->salary}}" type="text" name="title"
                                      id="title" autocomplete="title" placeholder="CEO" required/>
                        <x-form-error name="title"/>

                    </div>
                </x-form-field>
            </div>
        </div>
        </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm" type="submit"
                        form="delete-form">Delete job
                </button>
                <a href="/jobs/{{$job->id}}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <x-from-button>Save</x-from-button>
            </div>

    </form>


    <form method="post" id="delete-form" action="/jobs/{{$job->id}}">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
