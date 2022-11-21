<?php

namespace Database\Seeders;

use App\Models\Alergeno;
use Illuminate\Database\Seeder;

class AlergenoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombre = ['milk', 'gluten', 'soybeans', 'eggs', 'nuts', 'fish', 'mustard', 'celery', 'peanuts', 'sulphur-dioxide-and-sulphites', 'sesame-seeds', 'crustaceans', 'molluscs', 'none', 'lupin', 'coconut', 'lait', 'ble', 'metabisulphite', 'weizenmehl', 'wheat-gluten', 'cashew-nuts', 'oatmeal', 'lemon', 'barley-malt', 'trigo', 'phenylalanine', 'milkfat', 'corn', 'leite', 'beurre', 'mozzarella-cheese', 'sodium-metabisulphite', 'oeufs', 'avoine', 'whole-milk-powder', 'milcheiweiss', 'skimmed-milk-powder', 'oeuf', 'lactic', 'caffeine', 'orge', 'wholewheat', 'creme', 'senf', 'milk-fat', 'magermilchpulver', 'milch', 'weizen', 'shell', 'haselnusse', 'mleko', 'flour', 'durum-wheat-semolina', 'vollmilchpulver', 'soy-protein', 'aveia', 'mozzarella', 'milk-products', 'mandeln', 'gerstenmalz', 'lapte', 'cashew-nut', 'skimmed-milk', 'wheat-malt', 'erdnusse', 'sellerie', 'orange', 'melk', 'amandes', 'oat-flakes', 'cheddar', 'butterfat', 'potassium-metabisulphite', 'weizenstarke', 'seigle', 'moutarde', 'emmental-cheese', 'wheat-starch', 'contains-milk', 'butterreinfett', 'soybean-oil', 'tomato', 'octopus', 'edam-cheese', 'huhnereieiweiss', 'sesam', 'lactoserum', 'emmental', 'grau', 'honey', 'barley-malt-extract', 'albumin', 'malt-d-orge', 'weizenvollkornmehl', 'cevada', 'froment', 'wholemeal', 'leche', 'malt', 'sojabohnen', 'garlic', 'mustard-seeds', 'anchovy', 'milk-solids', 'roggenmehl', 'sahne', 'contains-wheat', 'contains-sulfites', 'mjolk', 'tarwe', 'skim-milk', 'roasted-peanuts', 'yeast', 'weizengluten', 'sesame-oil', 'milk-protein-concentrate', 'soy-beans', 'buttermilk-powder', 'sunflower', 'soyabean', 'eigelb', 'cereals-contaning-gluten', 'mani', 'oat-flour', 'rolled-oats', 'laktoza', 'casein', 'strawberries', 'milk-protein-isolate', 'sementes-de-sesamo', 'noisettes', 'sulfitos', 'oat-wheat', 'herring', 'ovo', 'sojalecithin', 'margarine', 'manteiga', 'coconuts', 'curd', 'blueberries', 'wheatgerm', 'graines-de-moutarde', 'whole-milk', 'triticale', 'wheat-protein', 'whey-protein-isolate', 'whey-protein-concentrate', 'celeri', 'jaja', 'haferflocken', 'emulsifier', 'peanut-oil', 'gerstenmalzextrakt', 'hvetemel', 'pea-protein', 'farine-de-ble', 'kuhmilch', 'coconut-oil', 'eier', 'shellfish', 'tomatoes', 'product-has-been-fried-in-rapeseed-oil', 'hartweizengriess', 'prepared-in-fryer-used-for-product-containing-wheat', 'cocoa-butter', 'centeio', 'laktose', 'msg', 'weizenmalzmehl', 'laitier', 'joghurt', 'avena', 'cashewmilk', 'fromage', 'glutenbevattende-granen', 'farine', 'malted-wheat', 'wheatmeal', 'houblon', 'gelbsenfsaat', 'wholemilk', 'ceuf', 'almondmilk', 'senfsaat', 'sojabonor', 'hazelnoot', 'selderij', 'cocoa', 'blue-cheese', 'volleipulver', 'weizenprotein', 'cashewkerne', 'hafer', 'butter-oil', 'soy-sauce', 'alaska-pollock', 'palm-oil', 'trigo-duro', 'fenilalanina', 'whipping-cream', 'aspartame', 'egg-white-powder', 'free-range-pasteurised-whole-egg', 'lysed-soya-protein', 'white-chocolate', 'barely-malt', 'gorczyca', 'lait-et-produits-laitiers-y-compris-lactose', 'tree-nut-almond', 'milk-protein-powder', 'weizenflocken', 'lactic-culture', 'wheat-floor', 'contains-gluten', 'sodium-sulphite', 'huevo', 'surutka', 'frutos-de-casca-rija', 'arachides', 'paranoot', 'latte', 'demineralized-whey', 'gluten-wheat', 'wheat-bran', 'soy-bean', 'baking-powder', 'derivados-de-trigo', 'alcohol', 'hoki', 'tarwebloem', 'contains-cereals-containing-gluten', 'edamer', 'kase', 'wheaten', 'pink-pepper', 'surimi', 'nonfat-dry-milk', 'sojalecithine', 'whea', 'frumento', 'erdnusskerne', 'amandel', 'walnusse', 'sulphide', 'pecannoot', 'skim-milk-powder', 'gouda-cheese', 'nusse', 'soy-celery', 'havregryn', 'mleka', 'cheddar-cheese', 'bonito', 'grano', 'flavour-enhancer-e621', 'fortified-wheat-flour', 'cereals', 'ei', 'sugar', 'peanut-butter', 'unbleached-wheat-flour', 'room', 'cows-milk', 'pork', 'sweetened-condensed-milk', 'orz', 'epeautre', 'almendras', 'mosterd', 'schalenfruchte', 'chocolate', 'almond-flour', 'haver', 'bran', 'noix-de-cajou', 'yolk', 'amande', 'cinnamon', 'pine-nuts', 'paprika', 'canola', 'fruits-a-coque', 'salt', 'baking-soda', 'sussmolkenpulver', 'disulfite', 'cream-powder', 'crickets', 'vegan', 'organic-wheat-flour', 'crustacea', 'lactic-acid-bacteria', 'braunsenfsaat', 'ovos', 'fat-free-milk', 'sesami', 'roggen', 'huhnereiweiss', 'tapioca', 'cow-s-milk', 'fresh-cream', 'sulfur-dioxide', 'milkwhey', 'e621', 'mycoprotein', 'milk-solids-29-milk-chocolate-contains-cocoa-solids-27', 'and-other-sources-of-gluten', 'aipo', 'ou', 'emmentaler', 'sojaprotein', 'seminte-de-susan', 'schalenfruchten', 'jaune-d-oeuf', 'expired-cocaine', 'king-prawns', 'kokosnussmilchpulver', 'contains-permitted-classii-preservative', 'miel-de-abeja', 'monterey-jack-cheese', 'natriummetabisulfit', 'tree-nuts-and-their-derivatives', 'alpenmilchschokolade', 'arabica-coffee', 'soro-de-leite', 'nozes', 'butterfett', 'ninguna', 'nature-identical-flavouring-substances-contains-wheat', 'contains-cashews', 'no-known-allergens', 'dogs', 'sulphor-dioxide', 'oleo-margarina', 'skipjack-tuna', 'sardellen', 'full-cream-milk-powder', 'fish-extract', 'pollen', 'semolina-flour', 'pates', 'free-range-egg-white', 'alminds', 'sere-maigre', 'smelt', 'buzaliszt', 'whole-grain-oats', 'flocos-de-trigo', 'heringsfilets', 'gluten-free-oat-flour', 'siarczyny', 'allergen-information-contains-almonds-and-soy', 'contains-wheta-and-milk', 'allergen-information-contains-wheat-gluten', 'suplhites', 'pate', 'almo', 'zxs', 'whey-powder', 'sea-bass', 'whole-durum-wheat-semolina', 'orge-gluten', 'acahuetes', 'wheat-fibre', 'wheat-flour-cereals-containing-gluten', 'sesamo-e-tremoco', 'egg-sulfate', 'all-naturel-egg-substitute', 'bonito-fish', 'schmelzkase', 'sojasauce', 'vete', 'avellana', 'whole-wheat-flour', 'yogourt', 'unhomogenised-pasteurised-whole-milk', 'licorice', 'magermilchjoghurt', 'sol', 'chestnut', 'soybean-milk', 'mascarpone-cheese', 'tree-nuts-coconuts', 'sunflower-seeds', 'unbleached-wheatflour', 'arandanos', 'smor', 'susan', 'hvete', 'soya-egg-tree-nuts-cows-milk', 'thiamine', 'chilli', 'e414', 'milk-chocolate-18-white-chocolate-contains-cocoa-solids-23', 'sulpher-dioxide', 'bulgur', 'emmenthal', 'uova', 'chicken-egg', 'contains-nuts', 'dioxido-de-enxofre-sulfitos', 'crustaces', 'wheat-fibres', 'lacto', 'other-gluten-containing-grain-and-gluten-containing-grain-products', 'nutmilk', 'gluten-free', 'organic-coconut', 'breadcrumb', 'dioxyde-de-soufre', 'peach', 'ground-almond', 'arahide', 'light-soya-sauce', 'potassium-metabisulphate', 'wine', 'lactosa', 'l', 'puffed-spelled', 'sojaflocken', 'lactea', 'contains-small-edible-bones', 'lime', 'melkeiwit', 'buzagluten', 'senfmehl', 'guarana-extract', 'fis', 'nocciole', 'full-fat-soft-cheese', 'malt-de-ble', 'creamer', 'beurre-sale', 'contains-oats', 'pasteurized-grade-a-nonfat-milk', 'sojowe', 'sojovy', 'fluorides', 'mozzarella-kase', 'metabilsulfito-sodico', 'sulfiting-agents', 'noodles', 'tree-nuts-almonds', 'latex', 'huevos', 'crevettes-tigrees', 'seasoning-powder', 'b12', 'sarasin', 'asc-certified-mussels', 'contains-milk-protein-and-residual-lactose', 'contenant', 'alaska-seelachsfilet', 'organic-cheddar-cheese', 'fractionated-coconut-oil', 'soy-ingredients', 'chickpea', 'fenilanina', 'isolated-soy-protein-product', 'pistache', 'soy-nut', 'weizemehl', 'durum', 'milcheiweisserzeugnis', 'onion', 'sojaeiweiss', 'trigo-espelta', 'siero-di-latte', 'getreide', 'smoke-flavor', 'contains-soy', 'milchfermente', 'kondensmikh', 'grain-malt', 'tree-nut-coconut', 'tartrazina', 'contains-milk-and-egg', 'huhnereigelb', 'ricotta-frischkase', 'tejsavopor', 'grain', 'produse-derivate', 'noix-de-pecan', 'gersten', 'schlagrahm', 'fullkornsrugmel', 'flocons-d-avoine', 'pasteurized-egg-yolk', 'mostaza', 'proteine-de-ble', 'durum-wheat', 'gelatina', 'no-milk', 'uovo', 'fromage-en-poudre', 'lactic-cultures', 'cashew-nut-butter', 'milk-sugar', 'sodium-metabisulfite', 'breadcrumbs', 'vollkorn-haferflocken', 'erdnussern', 'weizenkleber', 'smetana', 'cantal', 'maltee', 'wholemeal-flour', 'malts-d-orge', 'pistaches', 'corn-and-its-derivatives', 'du', 'goat-s-milk', 'milchschokolade', 'gelatin', 'sussholz', 'malt-extract', 'light-brown-sugar', 'amendoins', 'amidon-de-ble', 'nuts-no-peanuts', 'mustard-flour', 'e-frutos-de-cascara', 'mozzarella-pearls', 'oatbran', 'glutenhaltiges-getreide', 'hvetegluten', 'pasteurized-grade-a-cultured-low-fat-milk', 'noten', 'milk-derivatives', 'calcium-caseinate', 'tree-nuts-coconut', 'pasteurized-cow-s-milk', 'organic-nonfat-dry-milk', 'orzo', 'salted-caramel-filling', 'molkeneiweisskonzentrat', 'huhnerei-eiweiss', 'havrekli', 'hazlenuts', 'contains-added-flavours-artificial-flavouring-substance-vanilla', 'contains-peanuts', 'skummjolks-pulver', 'flocons-d-engrain', 'fresa', 'weizenfasern', 'sellerieknollenpulver', 'soy-proein', 'caramelised-white-chocolate-53', 'pasteurized-part-skim-milk', 'soy-meal', 'thon', 'caffeina', 'chinese-mushroom', 'enriched-wheat-flour', 'narancs', 'amarillo-crepusculo', 'caseinate', 'isolated-soy-protein', 'wheat-soy-flakes', 'soybean-products', 'weizenkleie', 'habas-de-soja', 'eigeel', 'vehnagluteeni', 'may-contain-crustaceans', 'a', 'tarwegluten', 'flavours', 'pistazienkerne', 'whiting', 'black-walnuts', 'ffsh', 'grains-de-moutarde', 'cebada', 'bamboo-shoot', 'metabisulfite', 'bisulphite', 'coffee', 'narancsle', 'crusttaceans', 'corn-starch', 'huhnerei-eiweisspulver', 'coque', 'maltodextrin', 'cellery', 'sovany-tejpor', 'milk-pulp', 'cacahuetes', 'smoked-formed-ham', 'contains-coconuts-and-their-derivatives', 'cajou', 'soybean-powder', 'condensed-milk', 'e223', 'monosodium-glutamate', 'contem-tracos-de-leite-ou-derivados', 'wheatex', 'walnut-halves', 'caramel', 'atlantic-cod', 'dried-egg', 'outros-frutos-de-casca-rija', 'nordseekrabbenfleisch', 'sucralose', 'cultured-nonfat-milk', 'almond-butter', 'soya-and-sulphites-10ontact-itc-cares', 'whole-grain-rye-flour', 'farro', 'seeds', 'cultured-pasteurized-milk', 'queijos', 'owies', 'son-de-soja', 'contains-gluten-containing-ingredients', 'milk-and-its-derivatives', 'gerstenmehlextrakt', 'skummetmelk', 'milk-solids-minimum-24-milk', 'puffed-millet', 'erdnuss', 'sesamo', 'dried-cream', 'barley-malt-gluten', 'sojasaucenpulver', 'contains-gluten-containing-cereals-and-soy-as-indicated-in-bold-type', 'nut-tree', 'soybean-and-its-derivatives', 'lacteos', 'rahm', 'goats-milk', 'frutos-casca-rija', 'seesaminsiementahna', 'orzechy', 'agg', 'weizenstarkesirup', 'gluten-crustaces-oeuf-soja-les-fruits-a-coque-celeri-moutarde-graines-de-sesame-mollusque', 'flax-seed', 'vanilla', 'dried-skimmed-milk', 'maito', 'free-range-egg', 'gluten-free-rolled-oats', 'mollusque', 'mustard-oil', 'hvitost', 'protein', 'egg-yellow', 'contains-tree-nuts', 'xanthan', 'wheat-derivatives', 'melkeiwitten', 'milchfetterzeugnis', 'mature-cheddar-cheese', 'cricket-protein-powder', 'starch', 'fromagere', 'e331', 'glutenhaltiges-weizen', 'weichkase', 'moutarde-a-l-ancienne', 'reduced-fat-milk', 'mollusques', 'apple', 'pasteurised-milk', 'coriander', 'healthy-drink', 'grutos-de-cascara', 'buttermilchpulver', 'leite-e-derivados', 'hazelnut-flavouring', 'ground-mustard', 'whole-wheat', 'genetically-modified', 'weat', 'seler', 'rugkli', 'jajka', 'organic-soybeans', 'noix-de-coco', 'lactic-acid', 'celeri-branche', 'emulsifiers', 'oat-malt', 'melkpoeder', 'malt-din-orz', 'erdnussol', 'milk-derivates', 'derivados-de-soja', 'flussiges-vollei', 'lacteo', 'nutmeg', 'skimmed', 'tree-nuts-and-soy-as-indicated-in-bold-type', 'weizenvollkorn', 'raspberries', 'calcium-salts-maybe-allergant', 'manufactured-on-equiment-that-processes-products-containing-gluten', 'yellow-croaker', 'monterey-jack', 'plum-stones', 'altra-frutta-a-guscio', 'rye-flakes', 'haselnut', 'vollei', 'milk-derivatives-and-soy', 'hydrolysed-soya-protein', 'organic-cultured-pasteurized-milk', 'melkproteinen', 'sweet-cream', 'bold', 'wheat-soy-oat-barley', 'pumpkin-seeds', 'pineapple', 'grosery', 'interesterified-polyols-may-have-laxative-effects-not-to-be-sold-loose', 'weizensauerteig', 'szojabab', 'organic-whole-oats', 'gluten-containing-cereals', 'ryba', 'milk-soy', 'huhnervollei', 'tejzsir', 'e220', 'lactosoro', 'fresh-roasted-peanuts', 'nay-contain-other-tree-nuts', 'red-40', 'magermilch', 'skin-and-bones', 'weiteneiweiss', 'sauermilchquark', 'gmo-free-soya-lecithin', 'low-moisture-part-skim-mozzarella-cheese', 'and-sesame-white-sesame-seeds', 'wheatflakes', 'hazelnut-praline-centre-27', 'senfsaaten', 'lait-demi-ecreme', 'contains-peanut', 'mandorle', 'sojabonen', 'contains-wheat-gluten', 'kondensmagermilch', 'noisette', 'poisson', 'amendoim-e-coco', 'mais', 'medium-fat-hard-cheese', 'farine-de-soja', 'fromages', 'trigo-sarraceno', 'barley-malt-vinegar', 'lecithine-de-soja', 'pea-protein-isolate', 'obers', 'popcorn', 'soybean-extract', 'frutta-a-guscio', 'milcheiweissisolat', 'which-is-known-to-the-state-of-california-to-cause-birth-defects-or-other-reproductive-issues', 'cheddarjuusto', 'people-who-tend-to-be-allergic-to-fish-ingredients', 'cricket-powder', 'sheep-milk', 'kakao', 'nocciola', 'fibre', 'makrillfile', 'egg-powder', 'blancs-d-oeufs', 'mascarpone', 'speisetopfen', 'tofu-noodles', 'brown-rice-syrup-water', 'any-product-contain-in-this-product', 'dinkelweizen', 'condensed-whey', 'aspartam', 'gorgonzola', 'm', 'sodium-metabisulfites', 'peixe', 'bulot', 'noix', 'gluten-de-trigo', 'vollmilch', 'kase-sahne-sauce', 'brown-rice-syrup', 'mageremelkpoeder', 'ble-dur', 'hazelnuts-contains', 'scomber-japonicus', 'vehnalese', 'malt-din-grau', 'e322', 'potassium-sorbate', 'wehat', 'sulphite-ut-honths-from-packaging', 'e445', 'graines-de-soja', 'maize', 'calciumcaseinat', 'dried-mushrooms', 'contains-egg', 'product', 'derivados-de-cevada', 'pasteurised-free-range-egg', 'cacao', 'tapioca-flour', 'milk-soya-glucose', 'panna', 'huhnereieiweisspulver', 'grapefruit', 'teljes-tejpor', 'pasteurized-milk', 'hunereieigelb', 'butter-contains-wheat', 'milk-chocolate-chips', 'milchfettpulver', 'allergens-contains-sesame-seeds-and-sesame-oil', 'consumeing-this-product-can-expose-you-to-chemicals-including-bisphernol-a-bpa', 'karnemelk', 'cheese-powder', 'creme-fraiche', 'corn-oil-is-a-refined-vegetable-oil-widely-used-in-cooking-and-especially-deep-frying', 'lecithin', 'tarwegriesmeel', 'milchzucker', 'llet', 'eiweisspulver', 'allergen-information-contains-almonds-and-soy-may-contain-tree-nuts-and-sesame-seeds', 'cobertura-de-cacao', 'wheat-soy', 'tomme', 'wallnuts', 'soybean-wheat', 'cashews-nuts', 'pineapple-juice', 'double-cream', 'confectioner-s-glaze', 'candlenut', 'pectin', 'chia-seeds', 'huhnertrockeneieiweiss', 'zola', 'nuci', 'insects', 'bio-walnuts', 'none-specified', 'butter-fat', 'malt-barley', 'weizengriess', 'cow-milk', 'contains-eggs', 'produced-in-a-facility-which-also-handles-milk', 'eggs-and-their-derivatives', 'schafsmilch', 'all-natural-egg-substitute', 'anchovies', 'lacotse', 'eiwit', 'pinda', 'huile-de-beurre', 'tojassargaja-por', 'melkeprotein', 'pszenicy', 'cevada-e-aveia', 'warning', 'soy-celery-cod-shrimp-crab', 'etkezesi-savopor', 'wezenpaniermehl', 'soyabeans', 'pasteurized-sweet-cream', 'weizeneiweiss', 'weizenvollkornpaniermehl', 'contains-wheat-and-their-derivatives', 'molkenpermeat'];

        for ($i=0; $i < count($nombre); $i++) { 
            Alergeno::create([
                'name' => $nombre[$i],
            ]);
        }
    }
}
