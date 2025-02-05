<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
  use HasFactory;

  protected $fillable = ['name', 'slug'];

  public function permission(): BelongsToMany
  {
    return $this->belongsToMany(Permission::class, 'roles_permissions');
  }

  public function users(): BelongsToMany
  {
    return $this->belongsToMany(User::class, 'users_roles');
  }
}
