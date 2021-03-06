<?php

//=====================================================\\
//         PE -> PC ids to create PE remaps            \\
//=====================================================\\

$simpleIdRemaps = array();
$complexIdRemaps = array();

function simpleRemap($pc, $pe) {
  global $simpleIdRemaps;
  $simpleIdRemaps[$pe] = $pc;
}

function semiComplexRemap($pc, $pe, $peData) {
  global $complexIdRemaps;
  $complexIdRemaps[(($pe << 4) | $peData)] = (($pc << 4));
}

function complexRemap($pc, $pcData, $pe, $peData) {
  global $complexIdRemaps;
  $complexIdRemaps[(($pe << 4) | $peData)] = (($pc << 4) | $pcData);
}

// ===[ BLOCKS ]===
// Concrete Powder
simpleRemap(252, 237);
// Chain Command Block
simpleRemap(211, 189);
// Repeating Command Block
simpleRemap(210, 188);
// Grass Path
simpleRemap(208, 198);
// Double Wooden Slab
simpleRemap(125, 157);
simpleRemap(126, 158);
simpleRemap(95, 241); // STAINED_GLASS
simpleRemap(157, 126); // ACTIVATOR_RAIL
simpleRemap(158, 125); // DROPPER
simpleRemap(198, 208); // END_ROD
simpleRemap(199, 240); // CHORUS_PLANT
simpleRemap(207, 244); // BEETROOT_BLOCK
simpleRemap(208, 198); // GRASS_PATH
simpleRemap(212, 207); // FROSTED_ICE
simpleRemap(218, 251); // OBSERVER
simpleRemap(235, 220); // WHITE_GLAZED_TERRACOTTA
simpleRemap(236, 221); // ORANGE_GLAZED_TERRACOTTA
simpleRemap(237, 222); // MAGENTA_GLAZED_TERRACOTTA
simpleRemap(238, 223); // LIGHT_BLUE_GLAZED_TERRACOTTA
simpleRemap(239, 224); // YELLOW_GLAZED_TERRACOTTA
simpleRemap(240, 225); // LIME_GLAZED_TERRACOTTA
simpleRemap(241, 226); // PINK_GLAZED_TERRACOTTA
simpleRemap(242, 227); // GRAY_GLAZED_TERRACOTTA
simpleRemap(243, 228); // SILVER_GLAZED_TERRACOTTA
simpleRemap(244, 229); // CYAN_GLAZED_TERRACOTTA
simpleRemap(245, 219); // PURPLE_GLAZED_TERRACOTTA
simpleRemap(246, 231); // BLUE_GLAZED_TERRACOTTA
simpleRemap(247, 232); // BROWN_GLAZED_TERRACOTTA
simpleRemap(248, 233); // GREEN_GLAZED_TERRACOTTA
simpleRemap(249, 234); // RED_GLAZED_TERRACOTTA
simpleRemap(250, 235); // BLACK_GLAZED_TERRACOTTA
simpleRemap(251, 236); // CONCRETE
simpleRemap(255, 252); // STRUCTURE_BLOCK
simpleRemap(166, 95);  // BARRIER
simpleRemap(154, 410);  // HOPPER
simpleRemap(36, 250);  // Block Being Moved By Piston
simpleRemap(205, 203);  // Purpur slab
simpleRemap(204, 201);  // Purpur double slab TODO: replace to real double slab
semiComplexRemap(202, 201, 2);  // Purpur pillar
// Nether slab -> Quartz slab
simpleRemap(44, 7, 44, 6);
simpleRemap(44, 14, 44, 15);
simpleRemap(43, 7, 43, 6);
// And vice-versa
simpleRemap(44, 6, 44, 7);
simpleRemap(44, 15, 44, 14);
simpleRemap(43, 6, 43, 7);
// Prismarine data ID mismatch
simpleRemap(168, 1, 168, 2);
simpleRemap(168, 2, 168, 1);
// Podzol
simpleRemap(3, 2, 243, 0);
// Colored Fences
semiComplexRemap(188, 85, 1);
semiComplexRemap(189, 85, 2);
semiComplexRemap(190, 85, 3);
semiComplexRemap(192, 85, 4);
semiComplexRemap(191, 85, 5);
complexRemap(188, 0, 85, 1);
complexRemap(189, 0, 85, 2);
complexRemap(190, 0, 85, 3);
complexRemap(192, 0, 85, 4);
complexRemap(191, 0, 85, 5);
// Shulker Boxes
semiComplexRemap(219, 218, 0); // WHITE_SHULKER_BOX
semiComplexRemap(220, 218, 1); // ORANGE_SHULKER_BOX
semiComplexRemap(221, 218, 2); // MAGENTA_SHULKER_BOX
semiComplexRemap(222, 218, 3); // LIGHT_BLUE_SHULKER_BOX
semiComplexRemap(223, 218, 4); // YELLOW_SHULKER_BOX
semiComplexRemap(224, 218, 5); // LIME_SHULKER_BOX
semiComplexRemap(225, 218, 6); // PINK_SHULKER_BOX
semiComplexRemap(226, 218, 7); // GRAY_SHULKER_BOX
semiComplexRemap(227, 218, 8); // SILVER_SHULKER_BOX
semiComplexRemap(228, 218, 9); // CYAN_SHULKER_BOX
semiComplexRemap(229, 218, 10); // PURPLE_SHULKER_BOX
semiComplexRemap(230, 218, 11); // BLUE_SHULKER_BOX
semiComplexRemap(231, 218, 12); // BROWN_SHULKER_BOX
semiComplexRemap(232, 218, 13); // GREEN_SHULKER_BOX
semiComplexRemap(233, 218, 14); // RED_SHULKER_BOX
semiComplexRemap(234, 218, 15); // BLACK_SHULKER_BOX
// Trap Doors...
// Wooden
complexRemap(96, 0, 96, 3);
complexRemap(96, 1, 96, 2);
complexRemap(96, 2, 96, 1);
complexRemap(96, 3, 96, 0);
complexRemap(96, 4, 96, 11);
complexRemap(96, 5, 96, 10);
complexRemap(96, 6, 96, 9);
complexRemap(96, 7, 96, 8);
complexRemap(96, 8, 96, 7);
complexRemap(96, 9, 96, 6);
complexRemap(96, 10, 96, 5);
complexRemap(96, 11, 96, 4);
complexRemap(96, 12, 96, 15);
complexRemap(96, 13, 96, 14);
complexRemap(96, 14, 96, 13);
complexRemap(96, 15, 96, 12);
// Iron
complexRemap(167, 0, 167, 3);
complexRemap(167, 1, 167, 2);
complexRemap(167, 2, 167, 1);
complexRemap(167, 3, 167, 0);
complexRemap(167, 4, 167, 11);
complexRemap(167, 5, 167, 10);
complexRemap(167, 6, 167, 9);
complexRemap(167, 7, 167, 8);
complexRemap(167, 8, 167, 7);
complexRemap(167, 9, 167, 6);
complexRemap(167, 10, 167, 5);
complexRemap(167, 11, 167, 4);
complexRemap(167, 12, 167, 15);
complexRemap(167, 13, 167, 14);
complexRemap(167, 14, 167, 13);
complexRemap(167, 15, 167, 12);

function getState($id, $data) {
  global $simpleIdRemaps, $complexIdRemaps;
  if (array_key_exists($id, $simpleIdRemaps)) {
    return (($simpleIdRemaps[$id] << 4) | $data);
  }
  $blockstate = (($id << 4) | $data);
  if (array_key_exists($blockstate, $complexIdRemaps)) {
    return $complexIdRemaps[$blockstate];
  }
  return $blockstate;
}

//=====================================================\\
//                Create Remapping Table               \\
//=====================================================\\
$remaps = array();
$PEblocks = json_decode(file_get_contents("PEblocks.json"), true);
foreach($PEblocks as $PEblock) {
  if (getState($PEblock["id"], $PEblock["data"]) === null) { echo $PEblock["id"] . "<br>"; }
  $remap = array(
    "from" => getState($PEblock["id"], $PEblock["data"]),
    "to" => $PEblock["runtimeID"]
  );
  $remaps[] = $remap;
}
file_put_contents("PEremaps.json", json_encode($remaps));
?>