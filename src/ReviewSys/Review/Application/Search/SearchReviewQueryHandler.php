<?php

declare(strict_types=1);


namespace Practice\ReviewSys\Review\Application\Search;


use Practice\ReviewSys\Shared\Domain\Criteria\Criteria;
use Practice\ReviewSys\Shared\Domain\Criteria\Filters;
use Practice\ReviewSys\Shared\Queries\QueryHandler;

final class SearchReviewQueryHandler implements QueryHandler
{
    private $searcher;

    public function __construct(ReviewSearcher $searcher)
    {
        $this->searcher = $searcher;
    }

    public function __invoke(SearchReviewQuery $query)
    {
        $filters    = new Filters($query->all());
        $criteria   = new Criteria($filters);

        return $this->searcher->search($criteria);
    }
}
