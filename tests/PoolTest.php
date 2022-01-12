<?php

use DesignPatterns\Creational\Pool\WorkerPool;

it('Can Get New Instance With Get', function () {
    $pool = new WorkerPool();
    $worker1 = $pool->get();
    $worker2 = $pool->get();

    expect($pool)->toHaveCount(2);
    expect($worker1)->not()->toBe($worker2);
});

it('Can Get Same Instance Twice When Disposing It First', function () {
    $pool = new WorkerPool();
    $worker1 = $pool->get();
    $pool->dispose($worker1);
    $worker2 = $pool->get();

    $this->assertCount(1, $pool);
    $this->assertSame($worker1, $worker2);
});