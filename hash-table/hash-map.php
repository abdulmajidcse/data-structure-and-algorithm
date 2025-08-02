<?php

class SimpleHashMap
{
    private array $buckets;

    public function __construct(private int $size = 100)
    {
        $this->buckets = array_fill(0, $size, []);
    }

    public function hashFunction(string $key): int
    {
        $sum = 0;
        for ($i = 0; $i < strlen($key); $i++) {
            if (is_numeric($key[$i])) {
                $sum += (int) $key[$i];
            }
        }

        return $sum % $this->size;
    }

    public function put(string $key, string $value): void
    {
        $index = $this->hashFunction($key);
        $bucket = $this->buckets[$index];
        foreach ($bucket as $i => $entry) {
            if ($entry[0] == $key) {
                $this->buckets[$index][$i] = [$key, $value];
                return;
            }
        }

        $this->buckets[$index][] = [$key, $value];
    }

    public function get(string $key): ?string
    {
        $index = $this->hashFunction($key);
        $bucket = $this->buckets[$index];
        foreach ($bucket as $i => $entry) {
            if ($entry[0] == $key) {
                return $entry[1];
            }
        }

        return null;
    }

    public function remove(string $key): void
    {
        $index = $this->hashFunction($key);
        $bucket = $this->buckets[$index];
        foreach ($bucket as $i => $entry) {
            if ($entry[0] == $key) {
                unset($this->buckets[$index][$i]);
                return;
            }
        }
    }

    public function printMap(): void
    {
        echo "Hash Map Contents:\n";
        foreach ($this->buckets as $index => $bucket) {
            printf("Bucket %d: [", $index);
            foreach ($bucket as $entry) {
                printf(" ('%s', '%s') ", ...$entry);
            }
            echo "]\n";
        }
    }
}

# Creating the Hash Map from the simulation
$hashMap = new SimpleHashMap(10);

# Adding some entries
$hashMap->put("123-4567", "Charlotte");
$hashMap->put("123-4568", "Thomas");
$hashMap->put("123-4569", "Jens");
$hashMap->put("123-4570", "Peter");
$hashMap->put("123-4571", "Lisa");
$hashMap->put("123-4672", "Adele");
$hashMap->put("123-4573", "Michaela");
$hashMap->put("123-6574", "Bob");

$hashMap->printMap();

echo "\nName associated with '123-4570': " . $hashMap->get("123-4570") . "\n";

echo "Updating the name for '123-4570' to 'James'\n";
$hashMap->put("123-4570", "James");

echo "Name associated with '123-4570': " . $hashMap->get("123-4570") . "\n";
