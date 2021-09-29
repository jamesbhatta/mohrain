<?php

namespace App\View\Components;

use App\Models\Team;
use Illuminate\View\Component;

class TeamMemberCard extends Component
{
    public Team $team;

    public function __construct(Team $team)
    {
        $this->team = $team;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.team-member-card');
    }
}
