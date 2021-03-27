<?PHP

    // Nomes de classes por convenção sempre começam com letra UpperCase
    class Pessoa{

        //   ATRIBUTOS
        public $nome;


        //  MÉTODOS
        // Por Convenção métodos começam com LowerCase
        public function falar(){

            return "O meu nome é ".$this->nome; 
            //$this->atributo (sem $) serve para acessar atributos dentro de métodos

        }
    }

    $objeto = new Pessoa(); // Instânciando uma class, criando um objeto
    $objeto->nome = "Bruno Gonçalves"; // Adicionando valor a um Atributo
    $chamar = $objeto->falar(); // Chamando um método da class Pessoa e guardando em uma variável

    echo $chamar;

?>



