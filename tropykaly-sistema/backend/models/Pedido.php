<?php

class Pedido {
    private array $itens = [];
    private array $observadores = [];
    public string $status = 'Pendente';
    public string $dataHora;

    public function __construct(public int $id, public Cliente $cliente, private EstrategiaEntrega $estrategiaEntrega) {
        $this->dataHora = date('Y-m-d H:i:s');
    }

    public function adicionarItem(ItemPedido $item) { $this->itens[] = $item; }

    public function calcularTotal(): float {
        $totalItens = array_reduce($this->itens, fn($soma, $item) => $soma + $item->getSubtotal(), 0);
        return $this->estrategiaEntrega->calcularTotalComTaxa($totalItens);
    }

    public function anexar(Observer $observador) { $this->observadores[] = $observador; }

    public function finalizarPedido() {
        $this->status = 'Finalizado';
        foreach ($this->observadores as $obs) { $obs->atualizar($this); }
    }
}