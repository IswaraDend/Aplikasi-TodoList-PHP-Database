<?php 

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../Config/Database.php";

use Entity\TodoList;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;

function testShowTodoList() : void 
{
    $connection = \Config\Database::getConnection();
    $todoListRepostory = new TodoListRepositoryImpl($connection);
    $todoListService = new TodoListServiceImpl($todoListRepostory);
    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP Database");

    $todoListService->showTodoList();
}

function testAddTodoList() : void 
{
    $connection = \Config\Database::getConnection();
    $todoListRepostory = new TodoListRepositoryImpl($connection);

    $todoListService = new TodoListServiceImpl($todoListRepostory);
    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar PHP OOP");
    $todoListService->addTodoList("Belajar PHP Database");

    //$todoListService->showTodoList();
}

function testRemoveTodoList() : void {
    $connection = \Config\Database::getConnection();
    $todoListRepostory = new TodoListRepositoryImpl($connection);

    $todoListService = new TodoListServiceImpl($todoListRepostory);
    
    echo $todoListService->RemoveTodoList(5) . PHP_EOL;
    echo $todoListService->RemoveTodoList(4) . PHP_EOL;
    echo $todoListService->RemoveTodoList(3) . PHP_EOL;
    echo $todoListService->RemoveTodoList(2) . PHP_EOL;
    echo $todoListService->RemoveTodoList(1) . PHP_EOL;
    
}

testShowTodoList();
//testRemoveTodoList();