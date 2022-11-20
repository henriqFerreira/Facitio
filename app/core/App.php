<?php
namespace core;

require_once $_SERVER['DOCUMENT_ROOT'].'/Facitio/app/autoLoader.php';

class App {
    const ERROR404PAGE = "../app/view/404.php";
    private mixed $controller = 'Home'; // Controlador padrão a ser chamado caso a URL não tenha parâmetros
    private string $method = 'index'; // Método padrão do controlador
    private array $params = []; // Parâmetros da (URL)

    public function __construct() {
        $url = $this->splitURL(); // Transforma a URL num array

        if(file_exists("../app/controller/". ucfirst(strtolower($url[0])) . ".php")) { // Verifica se o arquivo da classe existe
            $this->controller = ucfirst(strtolower($url[0])); // Formata o nome da classe a atribui a variável do controlador
            unset($url[0]); // Remove a classe do array

            $className = 'controller\\'.$this->controller; // Concatena a classe com o namespace pertencente
            $this->controller = new $className; // Instancia a nova classe

            if(isset($url[1])) { // Verifica se o índice do método da classe existe
                if (method_exists($this->controller, $url[1])) { // Verifica se o método existe
                    $this->method = $url[1]; // Atribui o método a variável do método
                    unset($url[1]); // Remove o método do array
                    $this->params = array_values($url); // Atribui um novo array dos índices restantes na variável de parâmetros
                    call_user_func_array([$this->controller, $this->method], $this->params); // Chama o método da classe instanciada
                }  else {
                    include_once self::ERROR404PAGE;
                }
            } else {
                $this->params = array_values($url); // Atribui um novo array dos índices restantes na variável de parâmetros
                call_user_func_array([$this->controller, $this->method], $this->params); // Chama o método da classe instanciada    
            }
        } else {
            include_once self::ERROR404PAGE;
        }
    }

    private function splitURL() : array {
        $url = $_GET['url'] ?? $this->controller; // Se não houver nada na (URL), a página gerada será a Home
        return explode("/", filter_var(trim($url, "/"), FILTER_SANITIZE_URL));
    }
}