<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Service\ImageService;
use Faker\Provider\Image;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    private ImageService $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }
    
    public function index()
    {
        $teams = Team::positioned()->get();

        return view('team.index', compact('teams'));
    }

    public function create()
    {
        return $this->showForm(new Team([
            'position' => Team::getNextPosition()
        ]));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'nullable',
            'position' => 'nullable',
            'photo' => 'nullable',
            'facebook' => 'nullable',
            'twitter' => 'nullable',
            'linkedin' => 'nullable',
        ]);

        $team = Team::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'position' => $request->position,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
        ]);

        if ($request->hasFile('photo')) {
            $team->photo = $this->imageService->swapImage($team->photo, $request->file('photo'));
            $team->save();
        }

        $this->banner('Team added successfully.');

        return redirect()->route('backend.team.index');
    }

    public function edit(Team $team)
    {
        return $this->showForm($team);
    }

    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'nullable',
            'position' => 'nullable',
            'photo' => 'nullable',
            'facebook' => 'nullable',
            'twitter' => 'nullable',
            'linkedin' => 'nullable',
        ]);

        $team->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'position' => $request->position,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
        ]);

        if ($request->hasFile('photo')) {
            $team->photo = $this->imageService->swapImage($team->photo, $request->file('photo'));
            $team->save();
        }

        $this->banner('Team updated successfully.');

        return redirect()->route('backend.team.index');
    }

    public function destroy(Team $team)
    {
        $this->imageService->unlinkImage($team->photo);
        $team->delete();

        $this->banner('Team deleted successfully.');
        return redirect()->route('backend.team.index');
    }

    public function showForm(Team $team)
    {
        $updateMode = false;
        if ($team->exists) {
            $updateMode = true;
        }

        return view('team.form', compact('team', 'updateMode'));
    }
}
