<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>



    <h2 class="font-blod text-lg">{{ $job['title'] }}</h2>
    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>

    <p class="mt-6">
        <x-button herf="">Edit Job</x-button>
    </p>

</x-layout>
