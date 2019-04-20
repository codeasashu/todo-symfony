<?php

namespace App\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TodoListController extends FOSRestController {

    /**
     * @Rest\Get("/api/todo")
     */
    public function list() {
        return new JsonResponse([]);
    }


    /**
     * @Rest\Post("/api/todo")
     */
    public function add(Request $request) {
        $task = $request->get('task');
        return new JsonResponse(['task' => $task]);
    }

}
