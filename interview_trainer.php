<?php
$json = '[
  {
    "inventory_id": 9382,
    "name": "Brown Chair",
    "type": "furniture",
    "tags": [
      "chair",
      "furniture",
      "brown"
    ],
    "purchased_at": 1579190471,
    "placement": {
      "room_id": 3,
      "name": "Meeting Room"
    }
  },
  {
    "inventory_id": 9380,
    "name": "Big Desk",
    "type": "furniture",
    "tags": [
      "desk",
      "furniture",
      "brown"
    ],
    "purchased_at": 1579190642,
    "placement": {
      "room_id": 3,
      "name": "Meeting Room"
    }
  },
  {
    "inventory_id": 2932,
    "name": "LG Monitor 50 inch",
    "type": "electronic",
    "tags": [
      "monitor"
    ],
    "purchased_at": 1579017842,
    "placement": {
      "room_id": 3,
      "name": "Lavender"
    }
  },
  {
    "inventory_id": 232,
    "name": "Sharp Pendingin Ruangan 2PK",
    "type": "electronic",
    "tags": [
      "ac"
    ],
    "purchased_at": 1578931442,
    "placement": {
      "room_id": 5,
      "name": "Dhanapala"
    }
  },
  {
    "inventory_id": 9382,
    "name": "Alat Makan",
    "type": "tableware",
    "tags": [
      "spoon",
      "fork",
      "tableware"
    ],
    "purchased_at": 1578672242,
    "placement": {
      "room_id": 10,
      "name": "Rajawali"
    }
  }
]';

// nama yang berada pada meeting room
// nama yang type barangnya electronic
// nama yang type barangnya furniture
$datas = json_decode($json, true); // melakukan decode agar data json dapat di proses sesuai dengan key yang dibutuhkan

echo '===================================' . "<br>";
echo 'nama yang berada pada meeting room' . "<br>";
echo '===================================' . "<br>";

$i = 1;

foreach ($datas as $data) { // memproses semua data json yang ada
    if ($data['placement']['name'] === 'Meeting Room') { // menyeleksi data yang keynya ['placement']['name'] = 'Meeting Room'
        echo $i . ". " . $data['name'] . "<br>";
        $i++;
    }
}

echo "<br>";

echo '===================================' . "<br>";
echo 'nama yang type barangnya electronic' . "<br>";
echo '===================================' . "<br>";

$i = 1;

foreach ($datas as $data) { // memproses semua data json yang ada
    if ($data['type'] === 'electronic') { // menyeleksi data yang keynya ['placement']['name'] = 'Meeting Room'
        echo $i . ". " . $data['name'] . "<br>";
        $i++;
    }
}

echo "<br>";

echo '===================================' . "<br>";
echo 'nama yang type barangnya furniture' . "<br>";
echo '===================================' . "<br>";

$i = 1;

foreach ($datas as $data) { // memproses semua data json yang ada
    if ($data['type'] === 'furniture') { // menyeleksi data yang keynya ['placement']['name'] = 'Meeting Room'
        echo $i . ". " . $data['name'] . "<br>";
        $i++;
    }
}

?>