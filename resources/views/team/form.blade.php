<x-backend-layout>

    <div class="container py-5">
        <form action="{{ $updateMode ? route('backend.team.update', $team) :route('backend.team.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if($updateMode)
            @method('PUT')
            @endif
            <div class="bg-white rounded-lg p-4 md:p-5">

                <x-input-field-group type="text" name="name" label="Full Name" value="{{ old('name', $team->name) }}" autofocus></x-input-field-group>
                <x-input-field-group type="text" name="designation" label="Designation" value="{{ old('designation', $team->designation) }}"></x-input-field-group>
                <x-input-field-group type="number" name="position" label="Position" value="{{ old('position', $team->position) }}"></x-input-field-group>
                <x-form-group>
                    <x-label class="mb-1">Photo</x-label>
                    <input type="file" name="photo" accept="image/*" onchange="previewPhoto()">
                    <div class="mt-4 w-96">
                        <div class="aspect-w-4 aspect-h-4">
                            <img id="preview" class="h-full w-full object-cover rounded" src="{{ $team->photo ? $team->photoUrl() : 'https://dummyimage.com/400x400/284ec9/ededed&text=400x400' }}" alt="Team Member">
                        </div>
                    </div>
                </x-form-group>
                <x-input-field-group type="text" name="facebook" label="Facebook Link" value="{{ old('facebook', $team->facebook) }}"></x-input-field-group>
                <x-input-field-group type="text" name="twitter" label="Twitter Link" value="{{ old('twitter', $team->twitter) }}"></x-input-field-group>
                <x-input-field-group type="text" name="linkedin" label="Linkedin Link" value="{{ old('linkedin', $team->linkedin) }}"></x-input-field-group>

                <div class="flex justify-end mt-4">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </div>
        </form>
    </div>
    @push('scripts')
    <script>
        function previewPhoto()
        {
            alert();
            preview.src = URL.createObjectURL(event.target.files[0]);
        }
        </script>
        @endpush
</x-backend-layout>
