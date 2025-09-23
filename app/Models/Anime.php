<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Anime
 *
 * @property int $id
 * @property string $title
 * @property string $genre
 * @property int|null $episodes
 * @property string $status
 * @property int $user_id
 *
 * Relationships
 * @property-read \App\Models\User $user
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Anime newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Anime newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Anime query()
 */
class Anime extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'genre',
        'episodes',
        'watched_episodes',
        'status',
        'user_id',
    ];

    /**
     * Relationship: Each anime belongs to a user.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
