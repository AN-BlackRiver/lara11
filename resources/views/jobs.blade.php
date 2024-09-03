<x-layout>
    <x-slot:headding>
        Jobs
    </x-slot:headding>
    <ul>

        @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{$job['id']}}">
                    <strong>{{$job['title']}}</strong>: Paid {{$job['salary']}} per year
                </a>
            </li>
        @endforeach

    </ul>
</x-layout>
