<x-backend-layout>

    <div class="container py-5">
        <div class="flex">
            <h3 class="backend-page-heading">Team Members</h3>
            <div class="ml-auto">
                <a href="{{ route('backend.team.create') }}" class="btn btn-primary">Add New</a>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-8">
            @foreach($teams as $team)
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <x-team-member-card :team="$team"></x-team-member-card>
            </div>
            @endforeach
        </div>
    </div>

</x-backend-layout>
