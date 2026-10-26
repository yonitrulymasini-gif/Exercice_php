<?php
declare(strict_types=1);
class Wallet {
    public function __construct(private string $owner, private int $balance = 0) {}
    public function credit(int $amount): void {
        if ($amount <= 0) {
            throw new InvalidArgumentException('Montant positif requis');
        }
        $this->balance += $amount;
    }
    public function debit(int $amount): void {
        if ($amount <= 0 || $amount > $this->balance) {
            throw new InvalidArgumentException('Débit impossible');
        }
        $this->balance -= $amount;
    }
    public function balance(): int { return $this->balance; }
}
$wallet = new Wallet('Nova');
$wallet->credit(50);
$wallet->debit(20);
echo $wallet->balance(), "\n";
try { $wallet->debit(31); } catch (InvalidArgumentException $error) { echo $error->getMessage(), "\n"; }