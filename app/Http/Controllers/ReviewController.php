<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Practice\ReviewSys\Review\Application\Create\CreateReviewCommand;
use Practice\ReviewSys\Review\Application\Delete\DeleteReviewCommand;
use Practice\ReviewSys\Review\Application\Read\ReadReviewCommand;
use Practice\ReviewSys\Review\Application\Update\UpdateReviewCommand;
use Practice\ReviewSys\Shared\Command\CommandBus;

class ReviewController extends Controller
{
    private $commandBus;

    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    public function store(Request $request)
    {
        $command = new CreateReviewCommand(
            $request->input('name'),
            $request->input('points')
        );

        $this->commandBus->execute($command);

        return response()->json(['result' => 'La reseña se creó satisfactoriamente']);
    }

    public function list(?Request $request)
    {
        $command = new ReadReviewCommand(
            $request->input('id'),
            $request->input('name'),
            $request->input('points')
        );

        $response = $this->commandBus->execute($command);

        return response()->json(['resenias' => $response]);
    }

    public function update(Request $request)
    {
        $command = new UpdateReviewCommand(
            $request->input('id'),
            $request->input('name'),
            $request->input('points')
        );

        $this->commandBus->execute($command);

        return response()->json(['result' => 'La reseña se actualizó satisfactoriamente']);
    }

    public function delete(Request $request)
    {
        $command = new DeleteReviewCommand(
            $request->input('id')
        );

        $this->commandBus->execute($command);

        return response()->json(['result' => 'La reseña se eliminó satisfactoriamente']);
    }

}
