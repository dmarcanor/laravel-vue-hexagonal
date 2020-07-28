<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Review\Infrastructure\Eloquent;

use App\Review as Model;
use Practice\ReviewSys\Review\Domain\Review;
use Practice\ReviewSys\Review\Domain\ReviewRepository;

final class ReviewEloquentRepository implements ReviewRepository
{
    public function save(Review $entity)
    {
        Model::create($entity->toArray());
    }

    public function update($review)
    {
        Model::find($review->id())->update([
            'name' => $review->name(),
            'points' => $review->points()
        ]);
    }

    public function delete($id)
    {
        Model::find($id)->delete();
    }

    public function all()
    {
        return Model::all();
    }
}
