<?php
class NumbersSquared implements Iterator {
    private int $start;
    private int $end;
    private int $current;

    public function __construct(int $start, int $end) {
        $this->start = $start;
        $this->end = $end;
        $this->current = $start;
    }

    public function rewind(): void {
        $this->current = $this->start;
    }

    public function valid(): bool {
        return $this->current <= $this->end;
    }

    public function current(): int {
        return $this->current ** 2;
    }

    public function key(): int {
        return $this->current;
    }

    public function next(): void {
        $this->current++;
    }
}
?>
