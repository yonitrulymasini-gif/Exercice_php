<?php
declare(strict_types=1);
interface Notifier { public function send(string $message): string; }
class EmailNotifier implements Notifier {
    public function send(string $message): string { return "E-mail : $message"; }
}
class ConsoleNotifier implements Notifier {
    public function send(string $message): string { return "Console : $message"; }
}

function announce(Notifier $notifier): void { echo $notifier->send('Tournoi fermé'), "\n"; }
announce(New EmailNotifier());
announce(New ConsoleNotifier());