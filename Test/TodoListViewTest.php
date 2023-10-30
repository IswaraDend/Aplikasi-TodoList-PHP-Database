<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../View/TodoListView.php";
require_once __DIR__ . "/../Helper/InputHelper.php";

use Entity\TodoList;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

function TestViewTodoList() : void {
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP Database");

    $todoListView->showTodoList();

}

function TestViewAddTodoList() : void {
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP Database");

    $todoListService->showTodoList();
    $todoListView->addTodoList();

    $todoListService->showTodoList();

}

function TestViewRemoveTodoList() : void {
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListView = new TodoListView($todoListService);

    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP Database");

    $todoListService->showTodoList();

    $todoListView->removeTodoList();

    $todoListService->showTodoList();

    $todoListView->removeTodoList();

    $todoListService->showTodoList();
}
TestViewRemoveTodoList();