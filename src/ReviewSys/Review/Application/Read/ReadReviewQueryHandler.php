<?php


namespace Practice\ReviewSys\Review\Application\Read;


use Practice\ReviewSys\Shared\Queries\QueryHandler;

class ReadReviewQueryHandler implements QueryHandler
{
    private $reader;

    public function __construct(ReviewReader $reader)
    {
        $this->reader = $reader;
    }

    public function __invoke(ReadReviewQuery $query)
    {
             
    }

}
