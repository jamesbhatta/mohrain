<x-app-layout>
    <div class="bg-gray-50">
        <div class="container py-16">
            <h1 class="section-heading text-center mb-5 md:mb-8">Our Amazing Team</h1>
            <div class="grid grid-cols-12 gap-8">
                @foreach($teams as $team)
                <div class="col-span-12 sm:col-span-6 md:col-span-4">
                    <x-team-member-card :team="$team"></x-team-member-card>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
