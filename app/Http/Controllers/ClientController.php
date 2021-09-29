<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Service\ImageService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index()
    {
        return $this->renderPage(new Client(['position' => Client::getNextPosition()]));
    }

    public function renderPage(Client $client)
    {
        $updateMode = false;
        if ($client->exists) {
            $updateMode = true;
        }

        $clients = Client::positioned()->get();

        return view('client.index', compact(['clients', 'updateMode', 'client']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'logo' => ['required', 'mimes:jpeg,png,jpg,gif,svg'],
            'url' => ['nullable'],
            'position' => ['required', 'integer'],
        ]);

        Client::create([
            'name' => $request->name,
            'logo' => $this->imageService->storeImage($request->file('logo')),
            'url' => $request->url,
            'position' => $request->position,
        ]);

        $this->banner('Client added successfully.');
        return back();
    }

    public function edit(Client $client)
    {
        return $this->renderPage($client);
    }

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => ['required'],
            'logo' => ['nullable', 'mimes:jpeg,png,jpg,gif,svg'],
            'url' => ['nullable'],
            'position' => ['required', 'integer'],
        ]);

        $client->update([
            'name' => $request->name,
            'url' => $request->url,
            'position' => $request->position,
        ]);

        if ($request->hasFile('logo')) {
            $client->update([
                'logo' => $this->imageService->swapImage($client->logo, $request->file('logo'))
            ]);
        }

        $this->banner('Client updated successfully.');
        return redirect()->route('backend.clients.index');
    }

    public function destroy(Client $client)
    {
        $this->imageService->unlinkImage($client->logo);
        $client->delete();

        $this->banner('Client deleted successfully.');
        return back();
    }
}
