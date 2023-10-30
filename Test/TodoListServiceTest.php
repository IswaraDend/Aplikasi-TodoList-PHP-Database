<?php 

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";

use Entity\TodoList;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;

function testShowTodoList() : void {
    $todoListRepostory = new TodoListRepositoryImpl();
    $todoListRepostory->todoList[1] = new TodoList("Belajar PHP");
    $todoListRepostory->todoList[2] = new TodoList("Belajar PHP OOP");
    $todoListRepostory->todoList[3] = new TodoList("Belajar PHP Database");

    $todoListService = new TodoListServiceImpl($todoListRepostory);

    $todoListService->showTodoList();
}

function testAddTodoList() : void {
    $todoListRepostory = new TodoListRepositoryImpl();

    $todoListService = new TodoListServiceImpl($todoListRepostory);
    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP Database");

    $todoListService->showTodoList();
}

function testRemoveTodoList() : void {
    $todoListRepostory = new TodoListRepositoryImpl();

    $todoListService = new TodoListServiceImpl($todoListRepostory);
    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP Database");

    $todoListService->showTodoList();

    $todoListService->removeTodoList(1);
    $todoListService->showTodoList();

    $todoListService->removeTodoList(4);
    $todoListService->showTodoList();

}

testRemoveTodoList();