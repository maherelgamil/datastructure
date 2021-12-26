Datastructures For PHP
======================

# Datastructures:

## Queue:

### Create new `Queue`:
```php
$queue = new \DS\Queue(5);
```

### Add to `Queue`:
```php
$queue->enqueue();
```

### remove from `Queue`:
```php
$queue->dequeue();
```

### print `Queue`:
```php
$queue->print();
```

### check if `Queue` is full:
```php
$queue->full();
```

### check if `Queue` is empty:
```php
$queue->empty();
```

### get `Queue` length:
```php
$queue->length();
```