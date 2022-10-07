<?php

class Invoice
{
    private int $numeroItemFaturado;
    private string $descricaoItem;
    private int $qntdItem;
    private float $valorUnitItem;

    public function __construct(float $numeroItemFaturado, string $descricaoItem, float $qntdItem,float $valorUnitItem)
    {
        $this->descricaoItem = $descricaoItem;
        $this->numeroItemFaturado = $numeroItemFaturado;
        $this->qntdItem = $qntdItem;
        $this->valorUnitItem = $valorUnitItem;
    }

    public function getNumeroItemFaturado(): int {return $this->numeroItemFaturado;}

    public function getDescricaoItem(): string {return $this->descricaoItem;}

    public function getQntdItem(): int {return $this->qntdItem = 0;}

    public function getValorUnitItem(): float {return $this->valorUnitItem = 0;}

    public function __toString():string {return "{$this->descricaoItem}, {$this->numeroItemFaturado}, {$this->qntdItem}, {$this->valorUnitItem}";}

    public function getInvoiceAmount ($qntdItem, $valorUnitItem) {return $valor = $qntdItem * $this->valorUnitItem; }

}