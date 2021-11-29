<?php 
    class Ingredientes {
        private string $nome;
        private dateTime $data_validade;

        function getNome() {
            return $this->nome;
        }

        function setNome($ingredientes) {
            $this->nome = $ingredientes;
        }

        function getValidade():dateTime {
            return $this->data_validade;
        }

        function setValidade(dateTime $data_validade) {
            $this->data_validade = $data_validade;
        }
    }
?>