Datastructures For PHP
======================

# Datastructures:

## Queue:
```php

$queue = new Queue(5);

$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(3);
$queue->enqueue(3);
$queue->enqueue(4);

$queue->dequeue();
$queue->dequeue();
$queue->dequeue();

$queue->enqueue(4);
$queue->enqueue(4);

$queue->print();
```