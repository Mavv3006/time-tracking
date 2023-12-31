<?php

namespace App\Policies;

use App\Models\TimeEntry;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TimeEntryPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, TimeEntry $timeEntry): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, TimeEntry $timeEntry): bool
    {
    }

    public function delete(User $user, TimeEntry $timeEntry): bool
    {
    }

    public function restore(User $user, TimeEntry $timeEntry): bool
    {
    }

    public function forceDelete(User $user, TimeEntry $timeEntry): bool
    {
    }
}
