<?php
namespace core;

class Controller {
    const ERROR404PAGE = "../app/view/404.php";

    protected function loadView($view, array $data = []) : void {
        $view = ucfirst(strtolower($view));
        $url = "../app/view/" . $view . ".php";
        if (file_exists($url)) {
            include $url;
        } else {
            include self::ERROR404PAGE;
        }
    }

    protected function loadModel($model) : mixed {
        $model = ucfirst(strtolower($model));
        $url = "../app/view/" . $model . ".php";
        if (file_exists($url)) {
            include $url;
            return new $model;
        } else {
            include self::ERROR404PAGE;
        }
        return false;
    }
}