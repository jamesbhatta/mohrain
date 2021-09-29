<x-backend-layout>

    <div class="container py-5">
        <div class="flex">
            <h3 class="backend-page-heading">Clients</h3>
            <div class="ml-auto">
                <a href="{{ route('backend.clients.index') }}" class="btn btn-primary">Add New</a>
            </div>
        </div>

        <section class="bg-white rounded-lg shadow-sm my-4">
            <form action="{{ $updateMode ? route('backend.clients.update', $client) : route('backend.clients.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if($updateMode)
                @method('PUT')
                @endif
                <div class="p-4">
                    <h3 class="text-lg mb-4">{{ $updateMode ? 'Edit Client' : 'Add New Client' }}</h3>
                    <div class="grid grid-cols-12 md:gap-5">
                        <div class="col-span-12 md:col-span-7">
                            <x-input-field-group type="text" name="name" label="Client's Name" value="{{ old('name', $client->name) }}" autofocus></x-input-field-group>
                            <x-input-field-group type="text" name="url" label="Client's App Url" value="{{ old('url', $client->url) }}" autofocus></x-input-field-group>
                            <x-input-field-group type="number" name="position" label="Position" value="{{ old('position', $client->position) }}"></x-input-field-group>
                        </div>
                        <x-form-group class="col-span-12 md:col-span-5 md:mx-auto">
                            <x-label class="mb-1">Photo</x-label>
                            <input type="file" name="logo" accept="image/*" onchange="handleUploadPreview()" data-preview-el-id="client-logo-preview">
                            <x-invalid-feedback field="logo"></x-invalid-feedback>
                            <div class="mt-4 w-32">
                                <div class="aspect-w-4 aspect-h-4">
                                    <img id="client-logo-preview" class="h-full w-full object-cover rounded" src="{{ $client->logo ? $client->logoUrl() : 'https://dummyimage.com/100x100/284ec9/ededed&text=400x400' }}" alt="{{ $client->name ?? 'Client' }}">
                                </div>
                            </div>
                        </x-form-group>
                    </div>
                </div>

                <div class="flex justify-end bg-gray-50 bg-opacity-90 p-4 rounded-b-lg border-t border-gray-100 mt-4">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </section>

        @forelse ($clients as $client)
        <div class="bg-white rounded-lg p-4 shadow-sm my-4">
            <div class="flex items-center space-x-4">
                <div class="w-16">
                    <div class="aspect-w-4 aspect-h-4">
                        <img class="h-full w-full object-cover rounded" src="{{ $client->logoUrl() }}" alt="{{ $client->name ?? 'Client' }}">
                    </div>
                </div>
                <div class="flex-grow">
                    <div class="font-semibold">{{ $client->name }}</div>
                    <div class="text-gray-700 text-sm">Position: {{ $client->position }}</div>
                    <div class="text-gray-700 text-sm">URL: {{ $client->url }}</div>
                </div>
                <a href="{{ route('backend.clients.edit', $client) }}" class="text-indigo-500 hover:underline">Edit</a>
                <form action="{{ route('backend.clients.destroy', $client) }}" class="inline-block" method="POST" onsubmit="confirm('Are you sure to delete?')">
                    @csrf
                    @method('delete')
                    <button type="submit" class="text-red-500 hover:underline">Delete</button>
                </form>
            </div>
        </div>
        @empty
        <div class="bg-white p-4 rounded-lg">
            <div class="text-center" colspan="42">No records found here.</div>
        </div>
        @endforelse
    </div>

</x-backend-layout>
