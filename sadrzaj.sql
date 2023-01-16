-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 08:57 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sadrzaj`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prezime` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `korisnicko_ime` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lozinka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `razina` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `korisnicko_ime`, `lozinka`, `razina`) VALUES
(1, 'Glavna', 'Osoba', 'admin', '$2y$10$H6iEb32rbM0ELu3W5vPKVeehXbbP8d6hUn74PSXeX29ct4GzQirf2', 1),
(2, 'Pero', 'Perić', 'pero', '$2y$10$ky8gIY037lLIYpssX1bIX./WjFdi5Zq6HLMRcQYf9kadso.dnOioK', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vijesti`
--

CREATE TABLE `vijesti` (
  `id` int(11) NOT NULL,
  `datum` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vrijeme` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `naslov` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sazetak` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tekst` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slika` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategorija` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arhiva` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vijesti`
--

INSERT INTO `vijesti` (`id`, `datum`, `vrijeme`, `naslov`, `sazetak`, `tekst`, `slika`, `kategorija`, `arhiva`) VALUES
(1, '02.05.2021.', '01:16', 'Snažan potres pogodio sjeveroistok Japana', 'EMSC javlja kako je oko 4 sata ujutro po hrvatskom vremenu, Japan pogodio snažan potres.', 'Zasad nema podataka o materijalnoj šteti ili ozlijeđenima, a na snimkama se vidi kako su se neke zgrade prilično zaljuljale. Vlasti su objavile da postoji opasnost od klizišta, ali nije izdano upozorenje za tsunami, javlja Reuters.\r\n<br/><br/>\r\nUdarilo je na sjeveroistoku Japana, kod obale sjeveroistočne prefekture Miyagi, na dubini od 60 kilometara, a potres je bio magnitude 6,8 stupnjeva po Richteru.\r\n<br/><br/>\r\nDobra je vijest da potres nije prouzročio nikakvu štetu u nuklearnoj elektrani Fukushima Daiichi, a nema štete ni u objektu Fukushima Daini koji se nalazi južnije.', 'image_10.jpg', 'svijet', 0),
(2, '02.05.2021.', '12:09', 'Stotine uhićenih na turskim prvomajskim okupljanjima', 'Turska policija je privela 212 prosvjednika nakon što su u subotu izbili nemiri usred policijskog sata.', 'Interventna i civilna policija su se sukobile s čelnicima sindikata i ostalim prosvjednicima bacajući ih na tlo prije nego što su desetke njih zadržali u blizini istanbulskog trga Taksim, pokazuju video i fotografije Reutersa.\r\n<br/><br/>\r\nGuvernerov ured priopćio je da je nekim sindikatima bilo dopušteno držati spomen obilježja godišnjeg praznika rada, dok su oni koji su se \"okupili nezakonito\", kršeći pritom mjere zatvaranja i ignorirajući pozive da se raziđu, bili uhićeni.\r\n<br/><br/>\r\nU svrhu suzbijanja koronavirusa, Turska je ovaj tjedan usvojila 17-dnevno djelomično zatvaranje, pri čemu su na snazi naredbe o boravku kod kuće i zatvaranje škola i određenih tvrtki.\r\n<br/><br/>\r\nLokalni mediji izvijestili su o naporima policije u Istanbulu i Ankari da onemogući novinarima snimanje prvomajskih demonstracija i uhićenja.', 'image_11.jpg', 'svijet', 0),
(3, '02.05.2021.', '18:01', 'Pregovori u Beču o iranskom nuklearnom programu', 'Seyed Abbas Araghchi je najavio kako će Iran napustiti pregovore.', 'Iranski nukearni dogovor čije službeno ime je Zajednički plan akcije (JCPOA) već se gotovo mjesec dana odvija iza zatvorenih vrata u Beču. Sudionici su Kina, EU, Rusija, Iran, UK, Francuska i Njemačka. Iran nije želio direktan kontakt s pregovaračima SAD-a jer tvrdi da su jako povrijedili njihov narod. Iz tih razloga upotrebljena je metoda indirektne diplomacije kako bi se oživio sporazum iz 2015. koji je napustila Trumpova administracija, a Iran ga potom počeo kršiti. Pregovarači SAD-a su smješteni u hotelu preko puta Grand hotela Vienna gdje se odvijaju pregovori i kako bi im se poruka brzo dostavila.\r\n<br/><br/>\r\n- Očekujemo da će zaključak biti donešen brzo, jako brzo. Sastajemo se ponovno idućeg petka. Pisanje drafta započeto je prije mjesec dana – rekao je za 24 sata ruski stalni predstavnik u međunarodnim organizacijama u Beču, Mihail Uljanov.', 'image_9.jpg', 'svijet', 0),
(4, '03.05.2021.', '02:49', 'U eksploziji autobombe stradalo 30 ljudi', 'Auto je eksplodirao u gradu Pul-e Alam blizu kuće bivšeg šefa pokrajinskog vijeća', 'U jakoj eksploziji autobombe u petak smrtno je stradalo najmanje 30 ljudi, a više desetaka je ranjeno u istočnoj afganistanskoj pokrajini Logar, rekli su dužnosnici. \r\n<br/><br/>\r\nAuto je eksplodirao u glavnom gradu pokrajine Logar, Pul-e Alam blizu kuće bivšeg šefa pokrajinskog vijeća i nedaleko bolnice, rekao je Didar Lawang, glasnogovornik guvernera.\r\n<br/><br/>\r\nZa sada se ne zna tko je odgovoran za eksploziju.\r\n<br/><br/>\r\nNasilje je eskaliralo posljednjih tjedana nakon što je američki predsjednik Joe Biden najavio povlačenje američkih postrojbi do 11. rujna kada će se okončati dva desetljeća strane vojne nazočnosti.\r\n<br/><br/>\r\nTa odluka je razbjesnila talibane koji su s prethodnim predsjednikom Donaldom Trumpom potpisali sporazum o povlačenju postrojbi do 1. svibnja, uz sigurnosna jamstva.  \r\n<br/><br/>\r\nGlasnogovornik ministarstva unutarnjih poslova Tarik Arian je rekao da bi broj poginulih u eksploziji mogao porasti.\r\n<br/><br/>\r\nOko 60 ljudi je ranjeno, prema podacima šefa pokrajinskog vijeća. Glasnogovornik ministarstva zdravstva je rekao da je 40-ak ljudi hospitalizirano, od kojih nekih u kritičnom stanju. ', 'image_13.jpg', 'svijet', 0),
(5, '03.05.2021.', '09:37', 'Kina će 2028. postati najveće svjetsko gospodarstvo', 'Kina će 2028. prestići SAD i postati najveća svjetska ekonomija, ranije nego se do sada predviđalo.', 'Već neko vrijeme glavna tema svjetske ekonomije je borba za gospodarsku premoć SAD-a i Kine. Pandemija covida-19 i posljedični ekonomski pad u tom rivalstvu su igrali u korist Kine, objavio je Centar za ekonomska i poslovna istraživanja (CEBR) u svom godišnjem izvješću, objavljenom u subotu. \r\n<br/><br/>\r\nCEBR tvrdi da su „uspješno upravljanje pandemijom“ Kine, koja je rano uvela strogo potpuno zatvaranje, i udarci dugoročnim izgledima gospodarskog rasta Zapada, doveli do poboljšanja kineske gospodarske pozicije. Azijska država bi država u razdoblju od 2021. do 2025. trebala ostvariti prosječni godišnji rast od 5,7 posto, a za razdoblje od 2026. do 2030. od 4,5 posto.  \r\n<br/><br/>\r\nIako se očekuje da će SAD imati snažni ekonomski oporavak 2021., rast će usporiti na 1,9 posto od 2022. do 2024., a potom na 1,6 posto.\r\n<br/><br/>\r\nJapan će ostati treća najveća svjetska ekonomija, tvrdi CEBR, do početka 2030-ih kad će ga prestići Indija koja će Njemačku potisnuti s četvrtog na peto mjesto. \r\n<br/><br/>\r\nUjedinjeno Kraljevstvo, danas peto najveće svjetsko gospodarstvo, postat će šesto 2024. godine. No unatoč udarcima koji se očekuju u 2021. zbog napuštanja jedinstvenog tržišta EU-a, britanski BDP bi do 2035., prema predviđanjima, trebao biti 23 posto viši od francuskog, zahvaljujući britanskoj digitalnoj ekonomiji.\r\n<br/><br/>\r\nEuropska proizvodnja čini 19 posto gospodarskih aktivnosti deset najvećih svjetskih ekonomija, no to bi do 2035. moglo pasti na 12 posto ili niže, u slučaju neurednog razlaza EU-a i Britanije.', 'image_14.jpg', 'ekonomija', 0),
(6, '03.05.2021.', '09:54', 'Kroz nove mjere miriše priprema za lockdown', 'Vizek kaže da uredba kojom se regulira isplata novca iz Fonda još uvijek nije donesena.', 'Ekonomska stručnjakinja Maruška Vizek komentirala je nove mjere koje je Vlada donijela za očuvanje radnih mjesta. Kaže da su one očekivani nastavak već donesenih mjera, piše Dnevnik.hr.\r\n<br/><br/>\r\nSmatra da su \'donekle modificirane, i to na način da imamo određenu količinu stupnjevanja u tim mjerama\'. Dodaje da se kroz nove mjere \'možda miriše i neka priprema za neki budući lockdown, ako bude bilo potrebe\'.\r\n<br/><br/>\r\nNa pitanja kada Hrvatska, ali i druge članice Europske unije, može najranije očekivati novac za pomoć iz EU-a, Vizek kaže da uredba kojom se regulira isplata novca iz Fonda za oporavak još uvijek nije donesena.\r\n<br/><br/>\r\n- Ona se očekuje do kraja godine. Idealno je da taj prvi predujam od 10 posto koji moramo dobiti treba biti na proljeće - dodaje stručnjakinja.', 'image_2.jpg', 'ekonomija', 0),
(7, '03.05.2021.', '10:05', 'Velik pad BDP-a', 'Ekonomisti su upozorili na činjenicu da pad neće biti katastrofa ako se iz njega izvuku pouke.', 'Pad BDP-a u drugom tromjesečju, u odnosu na isti kvartal prošle godine, iznosi 15,1 posto. To je, otkad se mjeri statistikom nacionalnih računa zadnjih 25 godina, najveći tromjesečni pad ikad zabilježen u Hrvatskoj, izjavio je ministar financija Zdravko Marić.\r\n<br/><br/>\r\n- S obzirom na okolnosti to i nije veliko iznenađenje, ali treba reći da je to viši pad nego što je bio u vrijeme zadnje krize kad je najveći pad bio oko 9 posto - rekao je Marić i naglasio da je Vlada napravila sve što je u tom trenutku mogla.\r\n<br/><br/>\r\n- Imajmo na umu da smo imali situaciju koju nismo imali niti u Domovinskom ratu. U ovu smo ovu krizu ipak ušli pripremljeniji nego 2008. Da nismo kao Vlada reagirali na vrijeme, ove bi brojke koje su teške bile još gore, i još opasnije da bi trendovi pada zaposlenih bili još gori. Mi i za treće tromjesečje isto očekujemo pad, ali nadamo se nešto manji - rekao je Marić i istaknuo da se ne ide u otpuštanja.\r\n<br/><br/>\r\n- Pad u drugom tromjesečju je na razini eurozone. Kad se gledaju pojedinačne zemlje, ima zemalja koje imaju i višu stopu pada, Italija, Španjolska, Portugal... Napravili smo i analizu s uključenim prvim tromjesečjem, tu je pad 7,8 posto - rekao je Marić.\r\nNo, Zavod za statistiku je isto tako objavio da je u drugom tromjesečju porasla državna potrošnja, i to za 0,7 posto na godišnjoj razini.', 'image_3.jpg', 'ekonomija', 0),
(8, '03.05.2021.', '10:08', 'Proizvodnja hrane iz oceana bi mogla porasti', 'Godišnja globalna proizvodnja hrane iz mora mogla bi porasti za 21 do 44 milijuna tona do 2050.', 'Ostvarivanje takvog povećanje održive proizvodnje hrane ovisit će o različitim čimbenicima, uključujući političke reforme, tehnološke inovacije i buduću potražnju. Hrana iz mora visoko je nutritivna, sadrži bitne vitamine, minerale i masne kiseline.\r\n<br/><br/>\r\nDok u svijetu raste potražnja za hranom, neizvjesno je može li se opskrba povećati bez ugrožavanja drugih usluga ekosustava. Hrana iz mora, izlov ribe i morskih plodova i uzgoj, čini samo 17 posto sadašnje proizvodnje mesa diljem svijeta, ali bi mogla imati važnu ulogu u globalnoj sigurnosti hrane.\r\n<br/><br/>\r\nChristopher Costello, profesor ekonomije okoliša, kaže da ocean ima velik, neotkriven potencijal da pomogne nahraniti svijet idućih desetljeća, a to je moguće realizirati tako da otisak na okoliš bude manji od onog što ga proizvode drugi izvori hrane.\r\n<br/><br/>\r\nAko se provedu brze i dalekosežne promjene u načinu na koji upravljamo industrijom eksploatacije mora i pritom očuvamo njegove ekosustave, možemo ojačati dugoročnu sigurnost hrane i egzistenciju milijuna ljudi, smatra on.', 'image_4.jpg', 'ekonomija', 0),
(9, '12.06.2021.', '19:31', 'Kuba reformom proširila privatno poduzetništvo', 'Kuba je u subotu objavila da se privatno poduzetništvo dopušta u većini sektora.', 'Mjera koju je u kolovozu najavila ministrica rada Marta Elena Feito odobrena je u petak tijekom sjednice Vijeća ministara, objavile su novine Granma, službeno glasilo vladajuće Komunističke stranke. \r\n<br/><br/>\r\nPrivatno poduzetništvo na Kubi dopušteno je od 2010., ali ograničeno na samo nekoliko sektora koje je odredila država. Veliki rast poduzetništva bilježi se od 2014., nakon povijesnog poboljšanja odnosa između Kube i SAD-a pod vladavinom Baracka Obame, prenosi agencija France Presse. \r\n<br/><br/>\r\n- Prijašnji popis od 127 dopuštenih aktivnosti je eliminiran - rekla je ministrica.\r\n<br/><br/>\r\nOdsad nadalje na popisu će umjesto dopuštenih aktivnosti biti samo sektori rezervirani za državu.\r\n<br/><br/>\r\nTrenutno u privatnom sektoru radi više od 600 tisuća Kubanaca, odnosno 13 posto radne snage te otočne države koja broji 11,2 milijuna stanovnika. Većina je zaposlena u ugostiteljstvu, prometu i turizmu, sektorima najsnažnije pogođenima sankcijama bivšeg američkog predsjednika Donalda Trumpa i pandemijom koronavirusa.', 'image_5.jpg', 'ekonomija', 0),
(10, '12.06.2021.', '19:34', 'Spas ekonomije: trebamo li štedjeti ili trošiti?', 'Trenutno je izgledno kako će nas pogoditi recesija, uzrokovana padom BDP-a.', 'U vrijeme recesije običava se reći kako ono što je dobro za pojedinca nije dobro za ekonomiju. U sadašnjim makroekonomskim prilikama štedjeti je preporučljivo ako se štednja koristi za financiranje ulaganja.\r\n<br/><br/>\r\nNo trebaju li građani, i koliko, uopće mariti za makroekonomske posljedice svojih odluka i kako postići balans između štednje i potrošnje u ovim burnim ekonomskim vremenima?\r\n<br/><br/>\r\nO problematici današnjih ekonomskih kretanja porazgovarali smo sa Zdenkom Adrovićem, direktorom Hrvatske udruge banaka, uglednim ekonomskim stručnjakom, koji nam je razjasnio trenutnu situaciju.\r\n<br/><br/>\r\nU recesiji je, iz makroekonomske perspektive, potrošnja dobrodošla jer to ujedno znači cirkulaciju novca, a što stimulira gospodarsku aktivnost.\r\n<br/><br/>\r\n- Osim za financiranje ulaganja, štednja se koristi za odobravanje kredita. No ako se krediti ne odobravaju i ako građani ne ulažu u vrijednosne papire, tad se novčani obrtaj usporava – tumači nam naš sugovornik.\r\n<br/><br/>\r\nMeđutim, građani ne bi trebali previše mariti za makroekonomske posljedice svojih odluka. Svatko treba sam za sebe odlučiti koliko trošiti, a koliko štedjeti.\r\n<br/><br/>\r\n- Štednja je uvijek odgovoran čin i svatko bi trebao dio svoga dohotka ostaviti po strani za buduće namjene: za stan, za mirovinu, za sigurnost. Uz odgovarajuću štednju osjećat ćemo se mirnije i sigurnije – nastavlja Adrović.', 'image_6.jpg', 'ekonomija', 0),
(11, '12.06.2021.', '19:42', 'U Hrvatskoj će BDP pasti za više od 10 posto', 'Anketu su proveli konzultantska agencija EQUESTRIS i poslovni radio \"poslovniFM\".', 'Hrvatski BDP u 2020. past će više od 10 posto, a ekonomija ulazi u razdoblje nagle recesije i dugog oporavka koji će trajati znatno dulje od svjetskog, pokazala je anketa o očekivanjima poslovne zajednice \"Business Executives’ Quarterly Outlook (BEQO)\".\r\n<br/><br/>\r\nAnketu su proveli proveli konzultantska agencija EQUESTRIS i poslovni radio \"poslovniFM\", a provedena je elektronskim putem na uzorku od 200 poduzetnika, vlasnika i direktora tvrtki, u razdoblju od 30. travnja do 6. svibnja. Među obuhvaćenim poduzetnicima 55 posto prvenstveno je usredotočeno na usluge, 23 posto na proizvodnju, a toliko je i onih koji se bave i proizvodnjom i uslugama. Obuhvaćeni su poduzetnici iz 18 djelatnosti.\r\n<br/><br/>\r\nČetvrtina poduzetnika očekuje pad BDP-a od 10 posto, dok ih 21 posto smatra da će biti veći od 30 posto. Čak 75 posto poduzetnika očekuje pad u turizmu veći od 30 posto. Uz to, 46 posto predviđa pad izvoza za 10 do 30 posto, dok ih 25 posto predviđa pad izvoza veći od 30 posto.\r\n<br/><br/>\r\nPoduzetnici smatraju da će sve to dovesti do pada cijena nekretnina, industrijske proizvodnje, prosječne neto plaće, stranih ulaganja. Upozoravaju kako će rasti stopa nezaposlenosti i do 30 posto, te da se indeks korupcije može povećati 20 do 30 posto.', 'image_7.jpg', 'ekonomija', 0),
(12, '13.06.2021.', '17:56', 'U eksploziji plinske cijevi poginulo najmanje 12 ljudi', 'Ukupno 150 ljudi je evakuirano nakon nesreće u gradu Shiyanu, a 37 ljudi je u kritičnom stanju.', 'U eksploziji plinske cijevi u stambenoj četvrti u kineskom gradu Shiyanu poginulo je 12 ljudi, a ozlijeđeno je 138, javlja CNN.\r\n<br/><br/>\r\nUkupno je 150 ljudi evakuirano nakon nesreće u gradu Shiyanu u pokrajini Hubeiju do 3 sata ujutro po srednjoeuropskom vremenu. Među ozlijeđenima, njih 37 je u kritičnom stanju.\r\n<br/><br/>\r\nU eksploziji se srušila zgrada u kojoj se nalazi prehrambena trgovina, izvijestili su lokalni mediji.\r\n<br/><br/>\r\nSnimke kineske televizije CCTV prikazuju ruševine i krhotine stakla koji prekrivaju prvi kat srušene zgrade u kojoj su ljudi doručkovali i kupovali namirnice kada je došlo do eksplozije.\r\n<br/><br/>\r\nBolnice u Shiyanu mole stanovnike da daju krv.', 'image_8.jpg', 'svijet', 0),
(13, '13.06.2021.', '17:58', 'Najmanje 13 ljudi ranjeno u pucnjavi u Teksasu', 'Osoba koja se sumnjiči za napad još nije uhićena.', 'Najmanje 13 ljudi je ranjeno u pucnjavi u teksaškom gradu Austinu, javlja američka policija.\r\n<br/><br/>\r\nDodaju da osoba koja se sumnjiči za napad još nije uhićena. Dvije osobe su zbog zadobivenih rana u kritičnom stanju.\r\n<br/><br/>\r\nIncident se dogodio oko pola dva ujutro u dijelu grada s kafićima, barovima, restoranima, klubovima. Za sad nema dojava o smrtnim slučajevima.\r\n<br/><br/>\r\nPolicija je komentirala da trenutno \"nije jasno što je potaknulo\" ovaj događaj, ali su rekli da su o događaju obavijestili odjel za terorizam FBI-a.', 'image_15.jpg', 'svijet', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `korisnicko_ime` (`korisnicko_ime`);

--
-- Indexes for table `vijesti`
--
ALTER TABLE `vijesti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vijesti`
--
ALTER TABLE `vijesti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
