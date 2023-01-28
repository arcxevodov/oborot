<?php
require_once "AppleTree.php";
require_once "PearTree.php";

class Garden {
    public function __construct(
        public string $hostname,
        public string $username,
        public string $password,
        public string $database
    )
    {
        for ($i = 0; $i < 10; $i++) {
            $this->addToGarden("Apple");
        }
        for ($i = 0; $i < 15; $i++) {
            $this->addToGarden("Pear");
        }
    }

    function addToGarden($treeType): void
    {
        if ($treeType != "Apple" && $treeType != "Pear") {
            die("Not apple or pear");
        }
        $tree = match ($treeType) {
            "Apple" => new AppleTree(),
            "Pear" => new PearTree(),
        };
        $totalWeight = $tree->totalWeight();
        $db = new mysqli($this->hostname, $this->username, $this->password, $this->database);
        if ($db->connect_error) {
            die("Error: $db->connect_error ($db->connect_errno)");
        }
        $db->query("INSERT INTO trees(name, totalFruits, totalWeight)  VALUES ('$tree', '$tree->total', '$totalWeight')");
    }

    function collect(): array
    {
        $total = [
            "Apple" => [
                "Sum" => 0,
                "Weight" => 0
            ],
            "Pear" => [
                "Sum" => 0,
                "Weight" => 0
            ],
        ];
        $db = new mysqli($this->hostname, $this->username, $this->password, $this->database);
        if ($db->connect_error) {
            die("Error: $db->connect_error ($db->connect_errno)");
        }
        $trees = $db->query("SELECT * FROM trees")->fetch_all();
        if ($trees != null) {
            foreach ($trees as $tree) {
                $total[$tree[1]]["Sum"] += $tree[2];
                $total[$tree[1]]["Weight"] += $tree[3];
            }
        }
        return $total;
    }
}