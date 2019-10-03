-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 01:25 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesticides`
--

CREATE TABLE `pesticides` (
  `chemicalname` varchar(50) NOT NULL,
  `desp` varchar(950) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pesticides`
--

INSERT INTO `pesticides` (`chemicalname`, `desp`, `type`) VALUES
('Azoxystrobin', 'An experimental\ncompound used on cereals, vegetables, fruit crops, peanuts,\nturf, ornamentals, stone fruit, bananas, rice, apples, grapes,\n& potatoes. This chemical does not leach and is unlikely to\ncontaminate water bodies. It is found to exhibit very low\necological risks, to aquatic life, birds, and mammals. Other\nnames include Abound, Amistar, Bankit, Heritage, and\nQuadris.', 'Fungicide'),
('Boscalid', 'Fungicide used on\nspecialty crops such as straberries, beans, stone fruit, tree\nnuts, root vegetables, carrots, grapes, Brassica vegetables, and\nsunflowers\n(http://www.epa.gov/opp00001/chem_search/reg_actions/registration/fs_PC-128008_01-Jul-03.pdf).', 'Fungicide'),
('Carbendazim\n(MBC)', 'Found to be acutely\ntoxic to honeybees, having an effect on long term survival of\ncolonies. Foods with Carbendazim residues include: strawberries,\ngreen beans, apple sauce, blueberries, sweet bell peppers,\napples, cherries, green onions, spinach, bananas, honey,\nlettuce, water, celery, cauliflower, celery &\nbroccoli.', 'Fungicide'),
('Chlorothalonil', 'General use\ninsecticide used on trees, small fruits, turf, ornamentals, and\nvegetables. Found to be non-toxic to honey bees\n(http://pmep.cce.cornell.edu/profiles/extoxnet/carbaryl-dicrotophos/chlorothalonil-ext.html).', 'Fungicide'),
('Cyprodinil', 'Used as a foliar\nfungicide on cereals, grapes, pome fruit, stone fruit,\nstrawberries, vegetables, field crops and ornamentals; and as a\nseed dressing on barley.', 'Fungicide'),
('Dicloran', 'Widely used fungicide\nused on a variety of ornamentals, fruit and vegetable crops such\nas pricots, snap beans, carrots, celery, cherries, cucumber,\nendive, fennel, garlic, grapes, lettuce, nectarines, onions,\npeaches, plums, potatoes, prunes, rhubarb, shallots, sweet\npotatoes and tomatoes\n(http://www.epa.gov/oppsrrd1/REDs/factsheets/dcna_fs.htm).', 'Fungicide'),
('Fenbuconazole', 'Systemic fungicide\nintended for use as an agricultural and horticultural fungicide\nspray for the control of leaf spot, yellow and brown rust,\npowdery mildew and net blotch on wheat and barley and apple\nscab, pear scab and apple powdery mildew on apples and pears.\nResidues are also found on cherries, apricots, plums, peaches,\ngrapes, oranges and grapefruits and numerous\nvegetables.', 'Fungicide'),
('Fludioxonil', 'A fungicide used to\ncontrol fungal disease, making it a useful seed treatment as\nwell as a post-harvest treatment for fruit such as apples,\nbilberries, blackberries, blackcurrants, blueberries, broad\nbeans, combining peas, crab apples, cranberries, dwarf french\nbeans, edible podded peas, forest nursery, gooseberries,\nornamental plant production, pears, quinces, raspberries,\nredcurrants, runner beans, strawberries, vining peas and\nwhitecurrants\n(http://www.agchemaccess.com/Fludioxonil).', 'Fungicide'),
('Metalaxyl', 'A fungicide used in\nmixtures as a foliar spray for tropical and subtropical crops,\nas a soil treatment for control of soil-borne pathogens, and as\na seed treatment to control downy mildews. Its average half-life\nin soil is about 70 days. At pH\'s of 5 to 9 and temperatures of\n20 to 30 degrees C, the half- life in water was greater than\nfour weeks. Metalaxyl is non-toxic to honeybees.', 'Fungicide'),
('Myclobutanil', 'A fungicide registered\nfor use on a wide range of food crops. It is used heavily to\ncontrol fungi affecting wine and table grapes, especially in\nCalifornia. California accounts for roughyl 50% or all\nmyclobutanil use in the US. 60% of myclobutanil use in CA is\napplied to grapes. It also has a number of other food crop and\ncommercial or residential landscaping applications. Found to be\nnon-toxic to honey\nbees.(http://toxipedia.org/display/toxipedia/Myclobutanil).', 'Fungicide'),
('Pyraclostrobin', 'Controls foliar fungal\ndiseases Residues are found on a variety of fruits including\nmelons, apples, brassicaea family, sunflowers, beans, peppers,\nlettuces, kale and cucumbers.', 'Fungicide'),
('Tebuconazole', 'A powder used to treat\npathogenic and foliar plant fungi on food and feed\ncrops.', 'Fungicide'),
('Thiabendazole', 'Fungicide used to\ncontrol mold, rot, blight and stain on fruits and vegetables. It\nis found to be non-toxic to honey bees.', 'Fungicide'),
('Trifloxystrobin', 'A long-term effective\npesticide used to treat fungal turf infections such as brown\npatch, red thread, rust, anthracnose, fusarium patch and dollar\nspot\n(http://www.rigbytaylor.com/Glossary+-+Trifloxystrobin.htm).', 'Fungicide'),
('THPI', 'Major metabolite of\nCaptan, a fungicide. Used to control diseases on a number of\nfruits and vegetables as well as ornamental plants. It also\nimproves the outward appearance of many fruits, making them\nbrighter and healthier-looking. Captan is utilized by both home\nand agricultural growers and is often applied during apple\nproduction. Captan is cited as Group B2, a probable human\ncarcinogen by the EPA.', 'Fungicide'),
('Vinclozolin', 'General use fungicide\nused on raspberries, chicory, lettuce, kiwi, canola, snap beans,\ndry bulb onions, ornamentals, and turf\n(http://pmep.cce.cornell.edu/profiles/extoxnet/pyrethrins-ziram/vinclozolin-ext.html).', 'Fungicide'),
('Atrazine', 'A commonly used,\neffective and inexpensive herbicide used to eliminate noxious\nweeds in major crops. It frequently contaminates groundwater and\nis can causes male amphibians (frogs) to change gender. It is\nrestricted in Europe.', 'Herbicide'),
('Fluridone', 'Herbicide used to\ncontrol aquatic weeds in freshwater ponds whether floating,\nsubmerged or emersed\n(http://ccetompkins.org/environment/invasive-species/fluridone-herbide-treatment-faq).', 'Herbicide'),
('Metolachlor', 'Applied to soil to\ncontrol weeds in corn, soybeans, peanuts, grain sorghum,\npotatoes, pod crops, cotton, safflower, stone fruits, nut trees,\nhighway right-of-ways and woody ornamental fields. Rapid\ndegradation in sunny soil\n(http://pmep.cce.cornell.edu/profiles/extoxnet/metiram-propoxur/metolachlor-ext.html).', 'Herbicide'),
('Oxyfluorfen', 'Herbicide used to\ncontrol broadleaf and grassy weeds in fruit and vegetable crops\nas well as ornamentals. It is also used for weed control on\npatios and driveways. \"The largest agricultural markets in terms\nof total pounds active ingredient are wine grapes and almonds.\"\nIt does not appear to have an effect on honey bees.', 'Herbicide'),
('Pendimethalin', 'Herbicide used to\ncontrol annual grasses and certain broadleaf weeds. Usually used\nto protect crops such as wheat, corn, soybeans potatoes,\ncabbage, peas, carrots and asparagus. Found to not be toxic to\nbees or mammals but highly toxic to aquatic invertebrates and\nfish.', 'Herbicide'),
('Propazine', 'Herbacide found to be\nnon-toxic to honey bees. Applied to boradleaf weeds and annual\ngrasses in sweet sorghum in the form of a spray or powder\n(http://pmep.cce.cornell.edu/profiles/extoxnet/metiram-propoxur/propazine-ext.html).', 'Herbicide'),
('Tebuthiuron', 'Tebuthiuron is a\nherbicide used to control weeds in noncropland areas,\nrangelands, rights-of-way and industrial sites. Weeds that are\ncontrolled by tebuthiuron include alfalfa, bluegrasses,\nchickweed, clover, dock, goldenrod, mullein, etc. If used\ncorrectly it should not pose a threat to bees\n(http://pmep.cce.cornell.edu/profiles/extoxnet/pyrethrins-ziram/tebuthiuron-ext.html)', 'Herbicide'),
('Trifluralin', 'Herbicide on used on\ngrass, to control broadleaf weeds and on some fruit and\nvegetable crops, flowers and shrubs such as cotton, alfalfa,\nsunflowers and soybeans are examples. Insoluble in water but\ndoes not leave residues on crops so residues only occur in root\ntissues. Considered a pre-emergence herbicide', 'Herbicide'),
('2,4\nDimethylphenyl formamide (DMPF)', 'Amitraz is a\nnon-systemic acaricide and insecticide. Amitraz is among many\nother purposes best known as insecticide against mite- or\ntick-infestation of dogs.', 'Insecticide'),
('Acephate', 'General use\ninsecticide commonly used to treat species, in fruit, vegetables\n(e.g. potatoes and sugar beets), vine, and hop cultivation and\nin horticulture to protect from biting and sucking insects.\nConsidered toxic to bees at 1.2 ug/bee (Kidd, H. and James, D.\nR., Eds. The Agrochemicals Handbook, Third Edition. Royal\nSociety of Chemistry Information Services, Cambridge, UK, 1991\n(as updated).5-14).', 'Insecticide'),
('Acetamiprid', 'Contact neonicatinoid\ninsecticide targeting sucking-type insects. Can be applied to\nsoil or as a foliar spray on apples, cherries, letttuce, pears,\npeppers, house and garden plants, potatoes, plums and tomatoes\n(http://www.agchemaccess.com/Acetamiprid).', 'Insecticide'),
('Aldicarb\nsulfone', 'Active ingredient in\npesticide Temik. It is effective against thrips, aphids, spider\nmites, lygus, fleahoppers, and leafminers, but is primarily used\nas a nematicide in potato crops. Its weakness is its high level\nof solubility, which restricts its use in certain areas where\nthe water table is close to the surface.', 'Insecticide'),
('Aldicarb\nsulfoxide', 'See above.', 'Insecticide'),
('Bifenthrin', 'Insecticide used\nmainly again red fire ants but also used to control aphids,\nworms, ants, gnats, moths, beetles, grasshoppers, mites, midges,\nspiders, ticks, yellow jackets, maggots, thrips, caterpillars,\nflies and fleas. It is mostly used in orchards, nurseries and\nhomes and is seen in large amounts on corn. It is highly toxic\nto aquatic organisms and has one of the longest known residual\ntimes in soil on the market. \"In bees, the lethal concentration\n(LC50) of bifenthrin is about 17 mg/L. At sub lethal\nconcentrations, bifenthrin reduces the fecundity of bees,\ndecreases the rate at which bees develop into adulthood, and\nincreases their immature periods. Dai, Ping-Li; Wang, Qiang;\nSun, Ji-Hu; Liu, Feng; Wang, Xing; Wu, Yan-Yan; Zhou, Ting\n(2010). \"Effects of sub lethal concentrations of bifenthrin and\ndeltamethrin on fecundity, growth, and development of the\nhoneybeeApis mellifera logist', 'Insecticide'),
('Chlorpyrifos', 'Insecticide effective\nin controlling cutworms, corn rootworms, cockroaches, grubs,\nflea beetles, flies, termites, fire ants, and lice. Mainly used\nas an insecticide on grain, cotton, field, fruit, nut and\nvegetable crops, and well as on lawns and ornamental plants.\n\"Aquatic and general agricultural uses of chlorpyrifos pose a\nserious hazard to wildlife and honeybees\" (Kidd, H. and James,\nD. R., Eds. The Agrochemicals Handbook, Third Edition. Royal\nSociety of Chemistry Information Services, Cambridge, UK, 1991,\n5-14)', 'Insecticide'),
('Coumaphos', 'A widely used insecticide found to be\nmoderately toxic to bees. It used to control livestock insects\nsuch as cattle grubs, screw worms, lice, scabies, flies and\nticks. Coumaphos is an organophosphate which affects the\nactivity of naturally occuring enzymes called cholinesterases in\nhumans and insects that are essential for the proper functioing\nof the nervous system\n(http://pmep.cce.cornell.edu/profiles/extoxnet/carbaryl-dicrotophos/coumaphos-ext.html).', 'Insecticide'),
('Coumaphos\noxon', 'Coumaphos degraded to\nits first coroxon (a metabolite of Coumaphos)', 'Insecticide'),
('Cyfluthrin', 'Insecticide used to\ncontrol cutworms, ants, silverfish, cockroaches, termites, grain\nbeetles, weevils, mosquitoes, fleas, flies, corn earworms,\ntobacco budworm, codling moth, European corn borer, cabbageworm,\nloopers, armyworms, boll weevil, alfalfa weevil, Colorado potato\nbeetle, and many others. Its primary agricultural uses have been\nfor control of chewing and sucking insects on crops such as\ncotton, turf, ornamentals, hops, cereal, corn, deciduous fruit,\npeanuts, potatoes, and other vegetables. Cyfluthrin is also used\nin public health situations and for structural pest control.\nCyfluthrin is the active ingredient in many insecticide products\nincluding Baythroid, Baythroid H, Attatox, Contur, Laser,\nResponsar, Solfac, Tempo and Tempo H. Cyfluthrin is highly toxic\nto bees with an LD50 of 0.037 mg/bee. A Synthetic pyrethroid\nderivative that is used as an insecticide and a common househo', 'Insecticide'),
('Cyhalothrin\ntotal', 'Synthetic\npyrethroid', 'Insecticide'),
('Cypermethrin', 'Cypermethrin is a\nsynthetic pyrethroid used as an insecticide in large-scale\ncommercial agricultural applications as well as in consumer\nproducts for domestic purposes. Lasts 2-8 weeks in the soil and\nunlikely to contaminate groundwater.', 'Insecticide'),
('Diazinon', 'In 1994 the EPA phased\nout the residential use of Diazinon and in 1988 cancelled the\nregistration for use on golf courses and sod farms. It is\ncurrently used on rice, fruit trees, sugarcane, corn tobacco,\npotatoes, and other horticultural plants\n(http://pmep.cce.cornell.edu/profiles/extoxnet/carbaryl-dicrotophos/diazinon-ext.html).', 'Insecticide'),
('Dichlorvos', 'An organophosphate\ninsecticide used to control mushroom flies, aphids, spider\nmites, caterpillars, thrips, and white flies in fruit and\nvegetble crops. It is also fed to livestock to control botfuly\nlarvae in manure as well as parasitic worm infections in humans,\nlivestock and dogs. Many plants tolerate the pesticide very well\nand it is toxic to bees\n(http://pmep.cce.cornell.edu/profiles/extoxnet/carbaryl-dicrotophos/dichlorvos-ext.html).', 'Insecticide'),
('Dicofol', 'A miticide used on\nfruit, vegetable, ornamental and field crops. It id found to be\nnon-toxic to honey bees\n(http://pmep.cce.cornell.edu/profiles/extoxnet/carbaryl-dicrotophos/dicofol-ext.html)', 'Insecticide'),
('Dieldrin', 'Banned insecticide as\nof 1987 and no longer produced in the US. used to control\ninsects on cotton, corn and citrus crops. Used to control\nlocusts and mosquitoes, as a wood preserve, and for termite\ncontrol. (EPA)', 'Insecticide'),
('Diflubenzuron', 'Insecticide used to\ncontrol many leaf eating larvae of insects feeding on\nagricultural, forest and ornamental plants (e.g. gypsy moths,\nmosquito larvae, rust mites). Diflubenzuron is used primarily on\ncattle, citrus, cotton, mushrooms, ornamentals, standing water,\nforestry trees and in programs to control mosquito larvae and\ngypsy moth populations. (EPA) Insecticide used in controlling\ninsect pests in forests and on field crops. It inhibits the\nproduction of chitin used by an insect to build its\nexoskeleton.', 'Insecticide'),
('Endosulfan\nI', 'Controversial\ninsecticide that is globally being phased out by mid 2012.\nEndosulfan has been used in agriculture around the world to\ncontrol insect pests including whiteflys, aphids, leafhoppers,\nColorado potato beetles and cabbage worms however it can\nnegatively effect populations of beneficial insects and is\nmoderately toxic to honey bees (Oregon State University).\nEndocrine disruptor and acutely neurotoxic to both insects and\nmammals.', 'Insecticide'),
('Endosulfan\nII', 'Endosulfan\nmetabolite', 'Insecticide'),
('Endosulfan\nsulfate', 'Endosulfan\nmetabolite', 'Insecticide'),
('Esfenvalerate', 'Insecticide used on a\nwide range of pests such as moths, flies, beetles, and other\ninsects. It is used on vegetable crops, tree fruits, and nut\ncrops. \"Esfenvalerate is also highly toxic to bees. The compound\ntends to repel bees for a day or two after application, causing\nbee visitations to drop during that time . Since most\nintoxicated bees die in the field before they can return to\ncontaminate the hive, the brood is not exposed except by direct\nspray. Dried spray residues are not expected to pose a\nsignificant threat to bees\" (Asana XL Technical Bulletin. (no\ndate). Du Pont Chemical Corp). Synthetic pyrethroid\ninsecticide.', 'Insecticide'),
('Fenpropathrin', 'Insecticide used in\nagriculture and on ornamentals. Used to control mites in fruits\nand vegetables.', 'Insecticide'),
('Fenpyroximate', 'Acaricide used to\ncontrol varroa mites.', 'Insecticide'),
('Flonicamid', 'Insecticide used to\ncontrol hemipterous, or sucking insects such as aphids and\nwhiteflies on fruit, cereal and root/tuber crops, by inhibiting\nfeeding behavior. No honey bee toxity infromation is currently\navailable for this insecticide\n(http://www.efsa.europa.eu/en/efsajournal/doc/1445.pdf).', 'Insecticide'),
('Fluvalinate', 'Insecticide mainly\nused to treat honey bees for Varroa mites.', 'Insecticide'),
('Imidacloprid', 'The most widely used\ninsecticide in the world to control beetles, fleas, aphids,\nstink bugs, termites, locusts, thrips, carpenter ants and\ncockroaches. It is one of the most toxic insecticides to honey\nbees (^ Suchail, Séverine; Guez, David; Belzunces, Luc P.\n(November 2011). \"Discrepancy between acute and chronic toxicity\ninduced by imidacloprid and its metabolites in Apis mellifera\".\nEnvironmental Toxicology and Chemistry 20:\n2482-2486.)', 'Insecticide'),
('Methoxyfenozide', 'Insecticide used to\ntarget lepidopterous insects (moths) causing premature molting.\nNot believed to be toxic to honey bees.', 'Insecticide'),
('Methamidophos', 'A highly active,\nsystemic, residual organophosphate insecticide. It is used on\ncrops such as broccoli, Brussel sprouts, cauliflower, grapes,\ncelery, sugar beets, cotton, tobacco, and potatoes to protect\nthem against aphids, flea beetles, worms, whiteflies, thrips,\ncabbage loopers, Colorado potato beetles, potato tubeworms,\narmyworms, mites, and leafhoppers. Toxic to honey bees as one\nstudy found it greatly reduces the foraging activity of bees for\na prolonged period of time after application (Gary, N.E. and K.\nLorenzen. 1989. Effect of Methamidophos on Honey Bees\n(Hymenoptera: Apidae) During Alfalfa Pollination. J. Econ.\nEntomol. 82(4): 1067-1072.)', 'Insecticide'),
('Methomyl', 'Broad spectrum\ninsecticide used to control spiders and ticks as well as\napplications to agricultural crops. It cosidered highly toxic to\nhoney bees through direct contact and ingestion\n(http://pmep.cce.cornell.edu/profiles/extoxnet/haloxyfop-methylparathion/methomyl-ext.html).', 'Inseticide'),
('Paradichlorobenzene', 'A fumigant insecticide\nused to control moths and moth larvae. In 2010, 30 known\nproducts on the market contained paradichlorobenzene according\nto the EPA. Hives can be fumigated with this chemical to stave\noff wax moth infestation\n(http://npic.orst.edu/factsheets/PDBgen.pdf).', 'Insecticide'),
('Permethrin\ntotal', 'The majority of\npermethrin, over 70%, is used in non-agricultural settings. It\nis used on many food and feed crops. A pyrethroid.', 'Insecticide'),
('Phosmet', 'Insecticide mainly\nused on apple trees for the control of codling moth it however\nused on other fruit crops and ornamentals and vines for aphids,\nsuckers, mites and fruit flies control.', 'Insecticide'),
('Pyridaben', 'An insecticide applied\nto fruit and nut crops such as apples, pears and almonds. Per\npackage instructions, the insecticide should not to be sprayed\nwhen honey bees are in close proximity to a treatment area as it\nis toxic to honey bees\n(http://pmep.cce.cornell.edu/profiles/insect-mite/mevinphos-propargite/pyridaben/pyramite_mcl_0398.pdf).', 'Insecticide'),
('Tebufenozide', 'Molt-inducing\npesticide used on cabbage, cauliflower, beet, soybean, cotton,\nmealie, tea, tobacco and fruit trees. Found to be not acutely\ntoxic to honey bees\n(http://www.pesticideinfo.org/Detail_Chemical.jsp?Rec_Id=PC36018).', 'Insecticide'),
('Thiacloprid', 'Neonicotinoid\ninsecticide that is mainly for chewing insects', 'Insecticide'),
('Thymol', 'Used as an antifungal\nor anti fermentation agent in producing sugar syrup and as an\naromatic material for use against the Varroa mite in special\nevaporator frames. Essential oil, active ingredient in\nApiguard.', 'Insecticide'),
('Thiamethoxam', 'Insecticide classified\nas a neonicatoid. Used to deter insect feeding from aphids,\nthrips, beetles, centipedes, millipedes, sawflies, leaf miners,\nstem borers and termites.', 'Insecticide');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
