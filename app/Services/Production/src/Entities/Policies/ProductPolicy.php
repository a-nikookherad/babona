<?php

namespace Production\Entities\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
use Production\Entities\Models\Product;

class ProductPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Product $product): bool
    {
        return ($user->id == $product->user_id && Gate::allows("admin")) || Gate::allows("super_admin");
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return Gate::any(["admin", "super_admin"]);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Product $product): bool
    {
        return ($user->id == $product->user_id && Gate::allows("admin")) || Gate::allows("super_admin");
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Product $product): bool
    {
        return ($user->id == $product->user_id && Gate::allows("admin")) || Gate::allows("super_admin");
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Product $product): bool
    {
        return ($user->id == $product->user_id && Gate::allows("admin")) || Gate::allows("super_admin");
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Product $product): bool
    {
        return ($user->id == $product->user_id && Gate::allows("admin")) || Gate::allows("super_admin");
    }
}
