<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Review\Infrastructure\Eloquent;

use App\Review as Model;
use Practice\ReviewSys\Review\Domain\Review;
use Practice\ReviewSys\Review\Domain\ReviewRepository;
use Practice\ReviewSys\Shared\Domain\Criteria\Criteria;

final class ReviewEloquentRepository implements ReviewRepository
{
    public function save(Review $entity)
    {
        Model::create($entity->toArray());
    }

    public function update($review)
    {
        Model::find($review->id()->value())->update([
            'name' => $review->name()->value(),
            'points' => $review->points()->value()
        ]);
    }

    public function delete($id)
    {
        Model::find($id->value())->delete();
    }

    public function search(Criteria $criteria)
    {
        $model = new Model();
        $collection = '';

        foreach ($criteria->filters()->collection() AS $filter => $value) {
            if (method_exists($model, $filter)) {
                $collection = $model->$filter($value);
            }
        }

        return $collection->get();
    }

    public function all()
    {
        return Model::all();
    }
}
