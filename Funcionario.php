<?php

class Funcionario
{
    private $nome;
    private $cidade;
    private $salHora;
    private $horasTrab;
    private $salarioFinal;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setSalHora($salHora)
    {
        $this->salHora = $salHora;
    }

    public function getSalHora()
    {
        return $this->salHora;
    }

    public function setHorasTrab($horasTrab)
    {
        $this->horasTrab = $horasTrab;
    }

    public function getHorasTrab()
    {
        return $this->horasTrab;
    }

    public function setSalarioFinal($salarioFinal)
    {
        $this->salarioFinal = $salarioFinal;
    }
    public function getSalarioFinal()
    {
        return number_format($this->salarioFinal, 2, ',', '.');
    }
    public function calcularSalario()
    {
        return $this->getSalHora() * $this->getHorasTrab();
    }
    public function darAumento($aumento)
    {
        return $this->calcularSalario() + $aumento;
    }
    public function mostrarDados()
    {
        return "<label for='nome'>Nome:</label>
                        <input type='text' name='nome' class='apenasLeitura' value='" . $this->getNome() . " ' readonly>
                        <label for='cidade'>Cidade:</label>
                        <input type='text' name='cidade' class='apenasLeitura' value='" . $this->getCidade() . "' readonly>
                        <label for='salHora'>Salário por Hora:</label>
                        <input type='text' name='salHora' value='" . $this->getSalHora() . "'>
                        <label for='horasTrab'>Horas Trabalhadas:</label>
                        <input type='text' name='horasTrab' value='" . $this->getHorasTrab() . "'>
                        <label for='salarioFinal'>Salario Final:</label>
                        <input type='text' name='salarioFinal' value='" . $this->getSalarioFinal() . "'>";
    }
}
