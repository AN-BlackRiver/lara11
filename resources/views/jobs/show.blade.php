<x-layout>
    <x-slot:headding>
        Job
    </x-slot:headding>

    <strong><h2 class="">{{$job->title}}</h2></strong>

    <p>Paid {{$job->salary}} per year</p>

    <p class="mt-5">
        <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
    </p>

</x-layout>
