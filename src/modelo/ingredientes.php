<?php
include_once __dir__ . "/../uteis/categoria_enum.php";
class Ingredientes
{
    private String $nome;
    private Categoria $categoria;
    private String $fornecedor;
    private float $quantidade;
    private float $valorUn;
    private String $data_validade;
    private float $quantMin;

    public function __construct($nome, Categoria $categoria, $fornecedor, $quantidade, $valorUn, $data_validade, $quantMin)
    {
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->fornecedor = $fornecedor;
        $this->quantidade = (float) $quantidade;
        $this->valorUn = (float) $valorUn;
        $this->data_validade = $data_validade;
        $this->quantMin = (float) $quantMin;
    }

    static function getCategoria(String $categoria): Categoria

    {
        $categoriaValue = Categoria::cases();

        foreach ($categoriaValue as $value) {
            if ($categoriaValue == $categoria) {
                return Categoria::tryFrom(value: $value->name);
            }
        }
        return Categoria::OUTROS;
    }

    public function toJson()
    {
        return [

            'nome' => $this->nome,
            'categoria' => $this->categoria->name,
            'fornecedor' => $this->fornecedor,
            'quantidade' => $this->quantidade,
            'valorUn' => $this->valorUn,
            'data_validade' => $this->data_validade,
            'quantMin' => $this->quantMin
        ];
    }
}
