<?hh

class Box<T> {
    public function __construct(private T $elem) {}

    public function map((function(T): S) $func): Box<S> {
        return new Box($func($this->elem));
    }

    public function get(): T {
        return $this->elem;
    }
}

$squareIt = function(int $int): int {
    return $int * $int;
};

$intToString = function(int $int): string {
    return strval($int);
};

$addHorse = function(string $string): string {
    return $string . " horse";
};

$startValue = (int)100;
$intBox = new Box($startValue);

// the following breaks because $addHorse needs a string
// and the box is full of int

// $horseBox = $intBox->map($addHorse);
$bigBox = $intBox->map($squareIt);
$stringBox = $bigBox->map($intToString); // this is fine though
$output = $stringBox->get();

var_dump($output);
