<?php
declare(strict_types=1);
readonly class Money {
    public function __construct(public int $cents, public string $currency = 'EUR') {
        if ($cents < 0) throw new InvalidArgumentException('Prix négatif');
    }
    public function add(self $other): self {
        if ($this->currency !== $other->currency) throw new InvalidArgumentException('Devise différente');
        return new self($this->cents + $other->cents, $this->currency);
    }
}
$first = new Money(250);
$total = $first->add(new Money(175));
echo $first->cents, ' → ', $total->cents, "\n";