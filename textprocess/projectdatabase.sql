-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Ara 2021, 19:37:32
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `projectdatabase`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `kullaniciadi` varchar(100) NOT NULL,
  `sifre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `kullaniciadi`, `sifre`) VALUES
(1, 'yaren', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilgiler`
--

CREATE TABLE `bilgiler` (
  `proje_id` int(11) NOT NULL,
  `adsoyad` varchar(255) NOT NULL,
  `ogrencino` varchar(255) NOT NULL,
  `ogretimturu` varchar(200) NOT NULL,
  `dersadi` varchar(255) NOT NULL,
  `ozet` text NOT NULL,
  `tarih` varchar(100) NOT NULL,
  `baslik` text NOT NULL,
  `kelimeler` text NOT NULL,
  `danisman` varchar(100) NOT NULL,
  `juri` varchar(100) NOT NULL,
  `dokuman_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `bilgiler`
--

INSERT INTO `bilgiler` (`proje_id`, `adsoyad`, `ogrencino`, `ogretimturu`, `dersadi`, `ozet`, `tarih`, `baslik`, `kelimeler`, `danisman`, `juri`, `dokuman_id`) VALUES
(1, 'Ali Eken	 	 \r\n', '170201405	 	 \r\n', '1.Öğretim', 'Bitirme Projesi', 'Bu çalışmanın amacı, iletim hatlarında arıza yeri tespiti için empedansa dayalı algoritmaları  \nincelemek ve seri kompanze edilmiş hatlar için yeni bir algoritma geliştirmektir. 	 	 \nÖncelikle,  tek  yada  iki  baradan  alınan  ölçümleri  kullanarak  arıza  yerini  belirl	eyen  temel 	 \nalgoritma	lar  tanımlanmıştır.  Örnek  test  sistemleri	 üzerinde  sistem  ve  arızaya  ilişkin 	 \nparametreler	 değiştirilerek,  temel  arıza  yeri  algoritmalarından  elde  edilen  sonuçlar 	 \nkarşılaştırılmıştır.  Sistem  parametreleri  hat  modeli  ve  sistemin  homojen  o	lup  olmama 	 \ndurumlarını  kapsarken,  arızaya  ilişkin  parametreler  arıza  tipi,  konumu  ve  direnci  olarak  \nalınmıştır.	 	 \nSeri kompanze edilmiş iletim hatlarında empedansa dayalı geliştirilmiş temel algoritmaların  \nyeterli  olmadığı,  bu  duruma  özel  algoritmaların  gere	kliliği  bir  uygulama  ile  gösterilmiştir. 	 \nBu özel 	algoritmalar	 incelenerek kısaca özetlenmiştir. Buradan hareketle,  iletim  hatlarında 	 \nseri  kompanzasyon  durumunu  dikkate  alan  performansa  dayalı  yeni  bir  arıza  yeri  tespiti  \nalgoritması bu tez kapsamında gelişt	irilmiştir.	 	 \nGeliştirilen  bu  algoritma,  hat  bilgileri  ve  iki  baradan  alınan  ölçümleri  kullanarak  iteratif  \nolarak  arıza  yerini  hesaplayan,  bütün  örneklerdeki  sonuçları  karşılaştırarak  minimum  hata  \nile  bir  sonuca  ulaşan  bir  algoritmadır.  Önerilen  algoritma,  h	em  temel  algoritmalar  hem  de 	 \nseri kompanze edilmiş iletim 	hatları 	için tasarlanmış, iki farklı algoritma türü ile çeşitli test 	 \nsistemleri üzerinde denenmiş, alınan sonuçlar karşılaştırılmıştır. Test sistemleri DigSILENT  \nüzerinde  modellenmiş  ve  kısadevre  an	alizleri  yapılmış  olup,  bu  sistemden  alınan  akım  ve 	 \ngerilim bilgileri MATLAB ortamında kodlanan algoritmalar için kullanılmıştır.', '2017-2018 Bahar', 'İLETİM HATLARINDA EMPEDANS TABANLI ARIZA YERİ 	 \nTESPİTİ İÇİN YENİ BİR YAKLAŞIM', 'arıza yeri 	bulma algoritmaları	, iletim hatları	, mov, pmu, seri	 	 \nkapasitör', 'Prof.Dr. Nevcihan 	DURU', 'Prof.Dr. Nevcihan 	DURU,Dr.Öğr.Üyesi Orhan AKBULUT,Doç.Dr. Sevinç 	ILHAN	 OMURCA', 1),
(2, 'Enes Çelik	 	 \r\n', '190201301	 	 \r\n', '1.Öğretim', 'Bitirme Projesi', 'Bilgi teknolojilerinde yüksek hızda yaşanan gelişmeler ve internet 	kullanımının çok yaygın 	 \r\nhale gelmesi ile birlikte, çeşitli platformlarda biriken verinin çeşitliliği ve hacmi de  \r\nartmıştır. Büyük veri kavramı ile ifade edilen bu verilerin işlenmesi ve anlamlı bilgilerin  \r\nelde edilmesi, önemli sonuçlar elde edilebilmesine 	imkân vermektedir. Bu çalışmada, 	 \r\nbüyük veri analizinde yapay zekâ ve makine öğrenmesi tekniklerinin kullanımı  \r\ntartışılmıştır. Başlıca yapay zekâ ve makine öğrenmesi teknikleri hakkında bilgiler  \r\nverilerek, bu tekniklerin büyük verilerle yapılan uygulamaları	ndan örnekler verilmiştir. 	 \r\nBaşlıca olarak; kümeleme, sınıflandırma, yapay sinir ağları, metin ve web madenciliği,  \r\nfikir madenciliği ve duygu analizi alanlarında büyük verilerle yapılan çalışmalar  \r\nanlatılmıştır.	 	 \r\nİçeriğinden anlamlı sonuçlar çıkarmak ve gerektiğinde kullanmak üzere, devletler, 	 \r\nkurumlar veya şahıslarca pek çok veri toplanmaktadır. Her alanda genellikle sayılar,  \r\nmetinler, ifadeler, şekiller, grafikler gibi malzemelerin oluşturduğu veriler, bilgisayarlarla  \r\nelektronik ortamlara taşınmış bulunmakt	adır. Bilgisayar, internet ve buna bağlı 	 \r\nteknolojilerin hayatın her alanında ve daha çok yer almasıyla birlikte, bu teknolojilerin  \r\nürettiği verilerin de depolanması söz konusu olmaktadır. Bilgi teknolojilerinin gün geçtikçe  \r\ndaha fazla yaygınlaşması ise insanların yaşam, çalışma ve çevre şartlarını değiştirmiş; 	 \r\nmekânlar, meslekler, çalışanlar “mobil”, kullanılan cihazlar ise “mobil” ve “akıllı” hale  \r\ngelmeye başlamıştır. Bununla birlikte doğan veriler ise hem çeşitlilik hem hacim  \r\nbakımından çok farklı ve büyü	k boyutlara ulaşmış bulunmaktadır.', '2016-2017 Bahar', 'BÜYÜK VERİ ANALİZİNDE YAPAY ZEKA VE MAKİNE 	 \r\nÖĞRENMESİ UYGULAMALARI', 'veri madenciliği	, yapay zeka, büyük veri, veri analizi, veri 	 \nbilimi, makine öğrenmesi', 'Prof.Dr. Nevcihan	 DURU', 'Prof.Dr. Nevcihan	 DURU,Dr.Öğr.Üyesi Orhan AKBULUT,Doç.Dr. 	Suhap ŞAHİN', 2),
(3, 'Ahmet Kara , Selim Gür	 	 \r\n', ' 170201111	 	 \r\n, 170201445	 	 \r\n', '1.Öğretim', 'Bitirme Projesi', 'Bu çalışmanın amacı, 	bulut bilişimi incelemek.	 	 \nBulut  bilişim,  kişisel  bilgisayarlar  üzerindeki  i	şlem  yükünü  hafifleten;  bilgiye 	istenilen 	 \nzaman  ve  mekânda,  talebe  bağlı  olarak  erişime  imkân	 sağlayan  bir 	teknolojidir.  Bulut 	 \nbilişim, işlem olanaklarını genişlete	rek şahıslara, küçük ya da orta 	ölçekli şirketlere bir dizi 	 \ngüçlü  servise  internet	 üzerinden  erişim  imkanı  sunar. 	Teknolojik  altyapı  olmaksızın  bir 	 \neğitim ortamının oluşturulması mümkün	 değildir. 	Bu 	nedenle çoğu eğitim kurumu bir ya da 	 \nbir	den  fazla  sunucudan  oluşan  veri 	merkezlerine  sahiptir.  Servis  altyapısının  zaman 	 \niçerisindeki kullanımında tahmin 	edilebilir ya da ani artışlar meydana gelebilir. Bu 	durumda 	 \nkurum  içi  esnek  olmayan 	altyapılar  yetersi	z  kalmaktadır.  Tüm  beklentileri  karş	ılayacak 	 \ndüzeyde  bir  altyapının 	oluşturulması  ise  büyük  bir  maliyet  ve  genişleyen  al	tyapının 	 \nyönetiminde zorlukları 	beraberinde getirmektedir. Bulut bilişim düşük maliyet	i ve dinamik 	 \nölçeklenebilirliği 	ile bu alanda son 	derece uygun bir çözümdür. 	  	 \nÖncelikle,  tek  yada  iki  baradan  alınan  ölçümleri  kullanarak  arıza  yerini  belirleyen  temel  \nalgoritma	lar  tanımlanmıştır.  Örnek  test  sistemleri	 üzerinde  sistem  ve  arızaya  ilişkin 	 \nparametreler	 değiştirilerek,  temel  arıza  yeri  algor	itmalarından  elde  edilen  sonuçlar 	 \nkarşılaştırılmıştır.  Sistem  parametreleri  hat  modeli  ve  sistemin  homojen  olup  olmama  \ndurumlarını  kapsarken,  arızaya  ilişkin  parametreler  arıza  tipi,  konumu  ve  direnci  olarak  \nalınmıştır.	 	 \nSeri kompanze edilmiş iletim hatları	nda empedansa dayalı geliştirilmiş temel algoritmaların 	 \nyeterli  olmadığı,  bu  duruma  özel  algoritmaların  gerekliliği  bir  uygulama  ile  gösterilmiştir.  \nBu özel 	algoritmalar	 incelenerek kısaca özetlenmiştir. Buradan hareketle,  iletim  hatlarında 	 \nseri  kompanzasy	on  durumunu  dikkate  alan  performansa  dayalı  yeni  bir  arıza  yeri  tespiti 	 \nalgoritması bu tez kapsamında geliştirilmiştir.	 	 \nGeliştirilen  bu  algoritma,  hat  bilgileri  ve  iki  baradan  alınan  ölçümleri  kullanarak  iteratif  \nolarak  arıza  yerini  hesaplayan,  bütün  örnek	lerdeki  sonuçları  karşılaştırarak  minimum  hata 	 \nile  bir  sonuca  ulaşan  bir  algoritmadır.  Önerilen  algoritma,  hem  temel  algoritmalar  hem  de  \nseri kompanze edilmiş iletim 	hatları 	için tasarlanmış, iki farklı algoritma türü ile çeşitli test 	 \nsistemleri üzerinde d	enenmiş, alınan sonuçlar karşılaştırılmıştır. Test sistemleri DigSILENT 	 \nüzerinde  modellenmiş  ve  kısadevre  analizleri  yapılmış  olup,  bu  sistemden  alınan  akım  ve  \ngerilim bilgileri MATLAB ortamında kodlanan algoritmalar için kullanılmıştır.', '2018-2019 Güz', 'BULUT BİLİŞİM VE EĞİTİM ALANINDA ÖRNEK BİR UYGULAMA', 'bulut bilişim	, iletim hatları	, eğitim, sql, azure, veritabanı', 'Prof.Dr. 	Ahmet 	SAYAR', 'Prof.Dr. 	Ahmet 	SAYAR,Dr.Öğr.Üyesi 	Burak İNNER,Doç.Dr. 	Pınar ONAY DURU', 3),
(4, 'Yasemin	Görmez	 	 \r\n', '190201481	 	 \r\n', '1.Öğretim', 'Bitirme Projesi', 'Bilgisayar ve internetin, günlük  yaşamın vazgeçilmez bir unsuru haline gelmesi ile birlikte  \ninternet  sitelerinin  ve  web  tabanlı  uygulamaların  sayısı  da  hızla  artmıştır.  Bilgi,  fikir,  para  \ngibi	 birçok  önemli  unsurun  internet  siteleri  ve  uygulamalar  aracılığıyla  paylaşımının 	 \nyapılması  ise  bilgi  güvenliği  konusunu  önemli  ve  güncel  bir  hale  getirmiştir.  Günümüze  \nkadar güvenlik duvarı, virüs programları gibi yazılımlar bilgisayar ve sistem güvenliği	 için 	 \nkullanılmış ancak yeterli olmamıştır. Bu nedenle mevcut yazılımlara alternatif olarak ortaya  \natılan  saldırı  tespit  sistemleri  ile  anormal  davranışlar  tespit  edilerek  olası  tehlikelerin  \nçözümlenmesi  amaçlanmıştır.  Bu  çalışmada  ise  saldırı  tespit  siste	mleri  için  üretilen 	 \nKDDCup99  veri  seti  üzerinde  ki  kare,  bilgi  kazancı,  kazanım  oranı,  gini  katsayısı,  oneR,  \nreliefF, genetik, ileriye doğru ve geriye doğru öznitelik seçim algoritmaları uygulanarak yeni  \nveri  setleri  elde  edilmiştir.  Elde  edilen  yeni  veri 	setlerini,  orijinal  boyuttaki  veri  seti  ile 	 \nkarşılaştırmak için en yakın k komşu, destek vektör makineleri ve aşırı öğrenme makineleri  \nkullanılarak farklı modeller geliştirilmiştir.	   	 \nÇalışmada, her üç yöntem için belirtilen öznitelik seçme yöntemleri 	kullanılarak test verileri 	 \niçin en yüksek başarıma sahip modeler başarı oranı, hassasiyet  yanlış alarm oranı, f	-ölçütü 	 \ngibi çeşitli metrikler  yardımıyla karşılaştırılmıştır. Yapılan  analizlerin  sonucunda öznitelik  \nseçim  yöntemlerinin her  üç sınıflama  yönte	mi içinde başarı oranını artırdığı  ve modellerin 	 \ndaha hızlı çalışmasını sağladığı görülmüştür. Ayrıca, yüksek başarı oranları, diğer sınıflama  \nyöntemlerine  oranla  son  derece  hızlı  olması,	  eğitim  algoritmasının  basit  olması  gibi 	 \nnedenlerden  dolayı  aşırı  öğ	renme  makinalarının  çevrimiçi  saldırı  tespit  sistemlerine 	 \nrahatlıkla  entegre  edilebileceğini  ve  alternatif  bir  yöntem  olarak  kullanılabileceğini  \ngöstermiştir.', '2013-2014 Bahar', 'MAKİNE ÖĞRENMESİ VE ÖZNİTELİK SEÇİM YÖNTEMLERİYLE 	 \nSALDIRI TESPİTİ', 'saldırı tespiti, makine öğrenmesi,	 öznitelik seçimi, aşırı öğrenme 	 \nmakineleri	, veri güvenliği', 'Prof.Dr. Nevcihan 	DURU', 'Prof.Dr. Nevcihan 	DURU,Dr.Öğr.Üyesi Orhan AKBULUT,Doç.Dr. 	Pınar ONAY DURU', 4),
(5, 'Musa İnan	 	 \r\n', '190201963	 	 \r\n', '1.Öğretim', 'Bitirme Projesi', 'Artan motorlu araç sayıları, şehir içi trafik ve park 	sorunlarına neden olmaktadır. Bu yüzden 	 \nsürücülere,  park  yeri  konusunda  yardımcı  olacak  otomatik  park  sistemlerine  gereksinim  \nduyulmaktadır.  Böylece  sürücüler  zamandan  ve  yakıttan  tasarruf  ederler  ve  ayrıca  trafik  \nsıkışıklığı  engellenir.  Ayrıca,  otoparklar	ın  dinamik  şekilde  ücretlendirilmesi  ile  park 	 \nalanlarının verimli kullanılması sağlanır. Bu da yoğunluk yaşanan alanların trafiğini azaltır.  \nNesnelerin interneti kullanılarak geliştirilen yeni uygulamalar, hayatımızın birçok alanında  \nönemli rol oynamaktadı	r. Örneğin basit akıllı aletlerden akıllı şehirlere, tarıma, endüstriden 	 \nsağlığa  kadar  birçok  alanda  nesnelerin  interneti  kavramı  uygulanabilmektedir.  Akıllı  \nşehircilik  kapsamında  trafik  ve  park  durumu,  sensörler  tarafından  alınıp,  trafik  yoğunluk  \nharitası	 çıkarılarak  araç  sürücüleri  bilgilendirilebilmektedir.  Bu  makalede,  akıllı  park 	 \nsistemleri  incelenmiş,  farklı  modeller  ve  teknolojiler  araştırılmış  ve  ilgili  örnekler  \nverilmiştir.', '2018-2019 Güz', 'GÖMÜLÜ SİSTEM TABANLI AKILLI OTOPARK SİSTEMİ', 'nesnelerin interneti, park sistemleri, gömülü sistemler	, akıllı 	 \nşehirler, 	dijitalleşme', 'Prof.Dr. 	Adnan KAVAK', 'Prof.Dr. 	Adnan KAVAK,Dr.Öğr.Üyesi 	Onur GÖK,Doç.Dr. Sevinç İlhan OMURCA', 5),
(6, ' Aslı Yiğit	 	 \r\n', ' 200201129	 	 \r\n', '1.Öğretim', 'Araştırma Problemleri', 'Bu 	çalışmanın	 amacı,  günümüzün  en  iyi  tahmin 	yöntemlerinden	 biri  olan  Yapay  Sinir 	 \nAğlarının (YSA) tahmin gücünü kredi taleplerinin tahmininde gösterilmesidir. Uygulamanın  \nYSA  sonuçları,  kredi  taleplerinin  değerlendirilmesinde  en  çok  kullanılan  istatistik  \nyöntemlerinden	 biri  olan  Lojistik  Regresyon  (LR)  sonuçları  ile  ROC  Eğrileri  kullanılarak 	 \nkarşılaştırılmış  ve  bu  çalışma  için  en  uygun  tahmin  yöntemi  ve  sonucu  bulunmaya  \nçalışılmıştır. 	 	 \nSeri kompanze edilmiş iletim hatlarında empedansa dayalı geliştirilmiş temel algoritm	aların 	 \nyeterli  olmadığı,  bu  duruma  özel  algoritmaların  gerekliliği  bir  uygulama  ile  gösterilmiştir.  \nBu özel 	algoritmalar	 incelenerek kısaca özetlenmiştir. Buradan hareketle,  iletim  hatlarında 	 \nseri  kompanzasyon  durumunu  dikkate  alan  performansa  dayalı  yeni 	bir  arıza  yeri  tespiti 	 \nalgoritması bu tez kapsamında geliştirilmiştir.	 	 \nGeliştirilen  bu  algoritma,  hat  bilgileri  ve  iki  baradan  alınan  ölçümleri  kullanarak  iteratif  \nolarak  arıza  yerini  hesaplayan,  bütün  örneklerdeki  sonuçları  karşılaştırarak  minimum  hata  \nile  bir  sonuca  ulaşan  bir  algoritmadır.  Önerilen  algoritma,  hem  temel  algoritmalar  hem  de  \nseri kompanze edilmiş iletim 	hatları 	için tasarlanmış, iki farklı algoritma türü ile çeşitli test 	 \nsistemleri üzerinde denenmiş, alınan sonuçlar karşılaştırılmıştır. Tes	t sistemleri DigSILENT 	 \nüzerinde  modellenmiş  ve  kısadevre  analizleri  yapılmış  olup,  bu  sistemden  alınan  akım  ve  \ngerilim bilgileri MATLAB ortamında kodlanan algoritmalar için kullanılmıştır.', '2019-2020 Güz', 'YAPAY SİNİR AĞLARI VE KREDİ TALEPLERİNİN 	 \r\nDEĞERLENDİRİLMESİ UYGULAMASI', 'yapay zeka, yapay sinir ağları, regresyon, kredi talepleri, derin                            	                               	 \nöğrenme, makine öğrenmesi', 'Prof.Dr. 	Adnan 	KAVAK', 'Prof.Dr. 	Adnan 	KAVAK,Dr.Öğr.Üyesi Orhan 	AKBULUT,Doç.Dr. 	Burcu 	KIR SAVAŞ', 6),
(7, 'Halit Ergezer	 	 \r\n', '190201348	 	 \r\n', '1.Öğretim', 'Araştırma Problemleri', 'Öngörü kavramı, bir değişkenin 	belirli varsayım	lar altında gelecekte alabileceği	 değerlerin 	 \nönceden  yaklaşık  olarak  belirlenmesi  olarak  tanımlanır.  Zaman  serisi  çözümlemesi  ile  \nöngörü,  incelenen  bir  değişkenin  şimdiki  ve  geçmiş  dönemdeki  gözlem  değerlerini  \nkullanarak  ve  birtakım  varsayı	mlar  altında  öngörü  değerlerinin  hangi  sınırlar  arasında 	 \ngeçekleşebileceğini  ortaya  koymak  için  yapılan  uğraşlardır.  Doğru  tahminin  (veya  \nöngörünün)  başarılı  kararları  beraberinde  getireceği  ve  bu 	şekilde	 elde  edilen  faydanın  en 	 \nüst düzeye çıkartılabileceğ	i gerçeği, öngörü modellemesine olan ilgiyi artırmaktadır. Artan 	 \nilgi  ile  birlikte,  bu  alanda  her  geçen  gün  önemli  gelişmeler  olmaktadır.  Öngörü  \nmodellemesinde kullanılabilecek yöntemlerin çeşitliliği, model seçiminde bazı zorlukları da  \nberaberinde  getirmi	ştir.  Öngörümleme  teknikleri,  nitel  öngörümleme  yöntemleri  ve  nicel 	 \nöngörümleme  yöntemleri olmak üzere iki şekilde sınıflandırılabilir. Her iki yöntemin  çıkış  \nnoktası  da  ilgili  değişkene  ait  gözlem  değerleridir.  Geçmiş  ve  şimdiki  dönem  gözlem  \ndeğerlerinden	, gelecek dönem gözlem değerleri belirli kurallar çerçevesinde öngörümlenir. 	 	 \nBir  zaman  serisi,  belli  bir  değişkene  ilişkin  zamana  göre  sıralanmış  gözlem  değerleridir.  \nZaman  serisi  analizi,  öngörümlemede  bulunulacak  değişkenin  geçmiş  zaman  değerlerini  \nkull	anarak  gelecek  değerlerin  öngörümlemesi  için  model  geliştirmede  kullanılır.  Model 	 \ngeliştirme,  ilgili  değişkene  ait  zaman  serisinin  analiz  edilmesi,  serinin  ana  eğiliminin  ve  \nözelliklerinin  belirlenmesine  dayanır.  Zaman  serileri  analizi  için  yaygın  olarak  k	ullanılan 	 \nbazı yöntemler vardır. Doğrusal zaman serilerinin analizinde oldukça başarılı sonuçlar veren  \nBox	-Jenkins modelleri bu tekniklerin en önemlilerindendir.', '2014-2015 Güz', 'YAPAY SİNİR AĞLARI VE TANIMA SİSTEMLERİ 	 \nÇÖZÜMLEMESİNİN YAPILMASI', 'yapay sinir ağları	, öngörü modelleri	, zaman serileri	, makine	 	 \nöğrenmesi, modelleme', 'Prof.Dr. 	Yaşar BECERİKLİ', 'Prof.Dr. 	Yaşar BECERİKLİ,Dr.Öğr.Üyesi 	Suhap ŞAHİN,Doç.Dr. Sevinç 	ILHAN	 OMURCA', 7),
(9, 'Ahmet Hakan	 	 \r\n, Osman Eker	 	 \r\n, Hasan Gezer', ' 160202123	 	 \r\n, 160202093	 	 \r\n, 150202103', '2.Öğretim', 'Araştırma Problemleri', 'Dilbilgisinden dilbilimine gelinceye kadar alman yol oldukça uzundur. Günümüz dilbilimi  \nbirkaç  dilbilimcinin  çalışması 	sonucu  ortaya  çıkmış  bir  bilim  dalı  değil,  2500  yıllık  uzun 	 \ntarihsel  bir  geçmişten  miras  aldığı  ilke  ve  kavramları  eleştirip  geliştirerek  oluşmuş,  bugün  \nbile  bu  oluşmasını  sürdüren  bir  bilim  dalıdır.  Dilbilim,  filoloji  ve  özellikle  dilbilgisine  \nverilen  gös	terişli  bir  ad  değil,  çocukluktan  başlayarak,  pratik  bir  biçimde  öğrendiğimiz  ve 	 \ngenellikle düşünmeden bildiğimiz dilin bilimsel incelenmesidir.	 	 \nGeliştirilen  bu  algoritma,  hat  bilgileri  ve  iki  baradan  alınan  ölçümleri  kullanarak  iteratif  \nolarak  arıza  yerin	i  hesaplayan,  bütün  örneklerdeki  sonuçları  karşılaştırarak  minimum  hata 	 \nile  bir  sonuca  ulaşan  bir  algoritmadır.  Önerilen  algoritma,  hem  temel  algoritmalar  hem  de  \nseri kompanze edilmiş iletim 	hatları 	için tasarlanmış, iki farklı algoritma türü ile çeşitli t	est 	 \nsistemleri üzerinde denenmiş, alınan sonuçlar karşılaştırılmıştır. Test sistemleri DigSILENT  \nüzerinde  modellenmiş  ve  kısadevre  analizleri  yapılmış  olup,  bu  sistemden  alınan  akım  ve  \ngerilim bilgileri MATLAB ortamında kodlanan algoritmalar için kullanılm	ıştır.', '2020-2021 Güz', 'TÜRKÇEDE KURALDIŞI DURUM İMLEME', 'yükselme	, edilgenleştirme, durum eşleme, niceleyici', 'Prof.Dr. 	Ahmet 	AK', 'Prof.Dr. 	Ahmet 	AK,Dr.Öğr.Üyesi 	Meltem KURT,Doç.Dr. 	Sevinç 	ILHAN OMURCA', 9),
(10, 'Atakan Guner	 	 \r\n', '179202687	 	 \r\n', '2.Öğretim', 'Araştırma Problemleri', 'Yüz  tanıma  insanların  günlük  yaşamlarında  zorlanmadan 	ve  sı	klıkla  gerçekleştirdikleri 	 \ngörevlerden biridir.  İnsan  yüzü oldukça  ayırt edici  özelliklere sahiptir ve  insan beyni  yüze  \nait  görsel  bilgileri,  biyometrik  tanımlayıcılar  olarak  kullanır.  Bilgisayarlı  görü,  insanları  \ntan	ımlamak  için  yüz  görüntülerini  kul	lanarak	 beynin    bu  karmaşık  fonksiyonunu  taklit 	 \netmeyi  amaçlar.  Yüz  tanıma  problemi,  bir  yüz  görüntüsü  veya  yüz  görüntüleri  içeren  bir  \nvideo kaydı girdi olarak verildiğinde, bilinen kişilerin yüz görüntülerini 	içeren bir veritabanı 	 \nkullanılarak  girdideki  b	ir    ya	da  daha    fazla    yüz  görüntüsünün  tanımlanması  veya 	 \ndoğrulanması olarak ifade edilebilir. Sahada Programlanabilir Kapı Dizileri (FPGA);sayısal  \nişaret  işleme,  biyometrik  tanıma,  medikal  görüntü  işleme,  uzay  ve  savunma  sistemleri,  \nbilgisayar  görüntüsü  g	ibi  birçok  alanlarında  kullanılmaktadır.  FPGA  programlanabilir 	 \nmantık  elemanlarıdır 	ve  her	 	bir  mantık  bloğunun  işlevi  kullanıcı  tarafından 	 \ndüzenlenebilmektedir.	 Bu  tez  çalışmasında  Destek  Vektör	 Makineleri  (DVM)	 kullanılarak 	 \nFPGAve 	 GPUüzerinde yüz tanıma 	uygulaması gerçekleştirilmiştir.', '2014-2015 Bahar', 'DESTEK VEKTÖR MAKİNELERİ KULLANARAK GÖMÜLÜ 	 \nSİSTEM ÜZERİNDEN YÜZ TANIMA UYGULAMASI', 'yüz tanıma, özyüzler, destek vektör makineleri, 	yapay sinir 	 \nağları	, en yakın komşu yöntemi, dijitalleşme', 'Prof.Dr. Nevcihan 	DURU', 'Prof.Dr. Nevcihan 	DURU,Dr.Öğr.Üyesi Orhan AKBULUT,Doç.Dr. 	Onur GÖK', 10),
(11, 'Serdar Öz	 	 \r\n', '180202478	 	 \r\n', '2.Öğretim', 'Araştırma Problemleri', 'Günümüz tarımsal üre	tim faaliyetlerinden hem açık hem de örtüaltı ürün yetiştiriciliklerinde 	 \nyapılan birçok kültürel uygulamalar bulunmaktadır. Tarladan çatala kavramı içerisine giren  \ntoprak hazırlığı, tohum ekimi ya da fide dikimi, sulama, gübreleme, hastalık ve zararlılarla	 	 \nmücadele, hasat öncesi hasada hazırlık ve dahi hasat sonrası uygulamalar gibi birçok kültürel  \nuygulama  mevcuttur.  Bu  kısımda  özellikle  toprak  hazırlığından  başlayıp  hasat  dönemine  \nkadar  geçen  sürede  takip  edilen  kültürel  uygulamalar  son  yıllarda  bilinçsiz	ce  ve  birçok 	 \naçıdan büyük kayıplara neden olan yollardan yapılmaktadır. Toprak, hava ve su kirliliğinden  \ndoğal  kaynakların  yok  olmasına,  sağlıksız  ve  verimsiz  ürün  elde  etmeden  katma  değer  \nyaratmadaki sıkıntılara, sürdürülebilir tarımdan uzaklaşarak çevres	el, iklimsel ve toplumsal 	 \ndöngülerin  bozulmasına  kadar  birçok  sorun,  bu  bilinçsizlik  ve  doğru  olmayan  yollar  \nnedeniyle ortaya çıkmaktadır.', '2011-2012 Bahar', 'İNTERNET VE MOBİL DESTEKLİ AKILLI SERA OTOMASYON 	 \nKONTROL SİSTEMİ', 'nesnelerin interneti	, akıllı cihazlar, otomasyon', 'Prof.Dr. Nevcihan 	DURU', 'Prof.Dr. Nevcihan 	DURU,Dr.Öğr.Üyesi Orhan AKBULUT,Doç.Dr. Sevinç 	ILHAN 	OMURCA', 11),
(12, 'Şahin Yurt	 	 \r\n, Turgay Uygun	 	 \r\n', '190201150	 	 \r\n, 190201153	 	 \r\n', '1.Öğretim', 'Araştırma Problemleri', 'Yapay  zeka  teknikleri  mühendislik  çalışmalarında,  daha  çok  optimizasyon  için  \nkullanılmakta  ve  diğer  klasik  yöntemlere  göre  daha  iyi  sonuç  verdiği  gözlemlenmektedir.  \nBu çalışmada, inşaat mühend	isliği sistemlerinin çözümünde yaygın olarak kullanılan yapay 	 \nzeka teknikleri, teknik yönleri ve temel prensipleri ile incelenmiştir. Son olarak yapay zeka  \ntekniklerinin son beş yıl içerisinde inşaat mühendisliği alanındaki uygulamaları için literatür  \ntara	ması yapılmış ve bu çalışmalar ve sonuçları hakkında bilgi sunulmuştur.	 	 \nGeliştirilen  bu  algoritma,  hat  bilgileri  ve  iki  baradan  alınan  ölçümleri  kullanarak  iteratif  \nolarak  arıza  yerini  hesaplayan,  bütün  örneklerdeki  sonuçları  karşılaştırarak  minimum  hata  \nile  bir  sonuca  ulaşan  bir  algoritmadır.  Önerilen  algoritma,  hem  temel  algoritmalar  hem  de  \nseri kompanze edilmiş iletim 	hatları 	için tasarlanmış, iki farklı algoritma türü ile çeşitli test 	 \nsistemleri üzerinde denenmiş, alınan sonuçlar karşılaştırılmıştır. Te	st sistemleri DigSILENT 	 \nüzerinde  modellenmiş  ve  kısadevre  analizleri  yapılmış  olup,  bu  sistemden  alınan  akım  ve  \ngerilim bilgileri MATLAB ortamında kodlanan algoritmalar için kullanılmıştır.', '2010-2011 Bahar', 'YAPAY ZEKA TEKNİKLERİNİN İNŞAAT MÜHENDİSLİĞİ 	 \nPROBLEMLERİNDE KULLANIMI', 'yapay zeka, inşaat mühendisliği, optimizasyon,	 akıllı cihazlar', 'Prof.Dr. 	Ahmet 	SAYAR', 'Prof.Dr. 	Ahmet 	SAYAR,Dr.Öğr.Üyesi 	Ali 	GÖK,Doç.Dr. 	Burcu KIR SAVAŞ', 12),
(13, 'Oya Okutan	 	 \r\n, Muhsin Erol	 	 \r\n', '112201589	 	 \r\n, 124201581	 	 \r\n', '1.Öğretim', 'Bitirme Projesi', 'Bu çalışmada ön tanımlı, ızgara tabanlı bir harita üzerinde otonom olarak hareket  edebilen  \nve  verilen  senaryolardaki  görevleri  yerine  getirebilen  mobil  bir  robotun  tasarımı  ve  \nprototip  üretimi  yapılmıştır.  Tasarım  hibrid  mobil  kontrol  yapısı,  hibrid  yol  bu	lma 	 \nalgoritması,  yazılımsal  ve  donanımsal  kontrol  sistemlerini  içermektedir.  Geliştirilen  hibrid  \nkontrol  yapısı davranış  temelli ve hiyerarşik kontrol  yaklaşımlarının özelliklerini bir arada  \nbarındırmaktadır.  Yol  bulma  algoritması  ise  A*  ve  Dijkstra  algori	tmalarının  ortak 	 \nözelliklerini  barındırmakta;  daha  az  hafıza  gereksinimi  ve  simülasyonlarda  daha  üstün  \nbaşarım  sergilemesi  ile  öne  çıkmaktadır.  Tasarlanan  bu  yol  bulma  algoritması  ile  en  kısa  \nyolun  hesaplanması  garantilenmektedir.  Kontrol  yapısı  ve  yol  bul	ma  algoritması	, 	 \ngeliştirilen  donanımsal  ve  yazılımsal  sistemlerle  desteklenerek  robotun  verilen  senaryo  ve  \ngörevleri başarı ile tamamlaması sağlanmıştı	r.', '2019-2020 Güz', 'YAPAY ZEKA İLE MOBİL ROBOT KONTROLÜ', 'mobil cihazlar, nesnelerin interneti, simülasyon, algoritma', 'Prof.Dr. 	Ahmet 	SAYAR', 'Prof.Dr. 	Ahmet 	SAYAR,Dr.Öğr.Üyesi 	Ali AK,Doç.Dr. 	Onur	 GÖK', 13),
(15, 'Abdulkadir Karacı	 	 \r\n, Göksel Bilgici	 	 \r\n', '160202107	 	 \r\n, 160202117	 	 \r\n', '2.Öğretim', 'Araştırma Problemleri', 'Siber  güvenlik,  bilgi  kaynaklarının  korunmasını  ve  kişinin  kendisi  de  dahil	 olmak  üzere 	 \ndiğer varlıkların korunmasını kapsamaktadır. Bu çalışmada, bilişim teknolojileri ile ilgili bir  \nbölümde  öğrenim  gören  üniversite  öğrencilerinin  siber  güvenlik  davranışları  farklı  \ndeğişkenler  açısından  incelenmiştir.  Çalışma  gurubunu  bir  devlet	,  bir  vakıf  üniversitesinin 	 \nBilgisayar  Mühendisliği  ile  Bilgisayar  ve  Öğretim  Teknolojileri  Öğretmenliği  (BÖTE)  \nbölümlerinde öğrenim gören toplam  170 öğrenci  oluşturmaktadır. Verilerin  toplanmasında  \nSiber Güvenlik Ölçeği (SGÖ) kullanılmıştır. Çalışmanın so	nuçlarına göre öğrencilerin siber 	 \ngüvenliğe yönelik davranışlarının siber güvenliği sağlayacak düzeyde olduğu görülmektedir.  \nFaktörlere  göre  daha  ayrıntılı  bir  inceleme  yapıldığında,  öğrenciler  kişisel  gizliliklerini  \nkoruyabilmektedirler.  Ayrıca  güvenilmey	en  uygulamalardan  kaçınmakta  ve  güvenlik  için 	 \nönlem alabilmektedirler. Bunun yanı sıra kredi kartı veya banka kartı gibi ödeme bilgilerini  \nkoruyabilmekte ve İnternet üzerinde gezinirken arkalarında iz bırakmamaktadırlar. 	 	 \nErkek  ve  kızların  siber  güvenlik  d	avranışları  arasında  anlamlı  bir  farklılık  yoktur.  Kişisel 	 \ngüvenliği  koruma  faktörü  açısından  BÖTE  bölümünde  kızlar,  Bilgisayar  Mühendisliği  \nbölümünde  ise  erkekler  daha  olumlu  siber  güvenlik  davranışına  sahiptirler.  İnternet	-	 \nbilgisayar güvenlik eğitimi ala	n veya bu konuda iş deneyimi olan öğrencilerin siber güvenlik 	 \ndavranışları  daha  olumludur.  Farklı  sınıflarda  öğrenim  gören  öğrencilerin  siber  güvenlik  \ndavranışları arasında anlamlı bir farklılık bulunmamaktadır. Meslek lisesinden mezun olan  \nöğrencilerin iz	 bırakmama faktörü açısından genel/düz liseden mezun olan öğrencilere göre 	 \ndaha dikkatli oldukları görülmektedir.', '2016-2017 Güz', 'ÜNİVERSİTE ÖĞRENCİLERİNİN SİBER GÜVENLİK 	 \nDAVRANIŞLARININ İNCELENMESİ', 'bilişim	, bilgi güvenliği	, siber güvenlik, güvenli internet', 'Prof.Dr. 	Adnan KAVAK', 'Prof.Dr. 	Adnan KAVAK,Dr.Öğr.Üyesi 	Alev MUTLU,Doç.Dr. 	Burcu KIR SAVAŞ', 15);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projeler`
--

CREATE TABLE `projeler` (
  `id` int(11) NOT NULL,
  `dokuman` varchar(250) NOT NULL,
  `kullanici_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `projeler`
--

INSERT INTO `projeler` (`id`, `dokuman`, `kullanici_id`) VALUES
(1, 'uploads/tez1.pdf', 1),
(2, 'uploads/tez4.pdf', 1),
(3, 'uploads/tez8.pdf', 1),
(4, 'uploads/tez9.pdf', 1),
(5, 'uploads/tez13.pdf', 1),
(6, 'uploads/tez2.pdf', 2),
(7, 'uploads/tez3.pdf', 2),
(9, 'uploads/tez7.pdf', 2),
(10, 'uploads/tez12.pdf', 3),
(11, 'uploads/tez14.pdf', 3),
(12, 'uploads/tez16.pdf', 3),
(13, 'uploads/tez17.pdf', 3),
(15, 'uploads/tez6.pdf', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `kullaniciadi` varchar(100) NOT NULL,
  `sifre` varchar(50) NOT NULL,
  `adsoyad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `kullaniciadi`, `sifre`, `adsoyad`) VALUES
(1, 'yaren', '123', 'Yaren Ulusoy'),
(2, 'ahmet', '123', 'Ahmet Okur'),
(3, 'aslı', '123', 'Aslı Akpınar');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `bilgiler`
--
ALTER TABLE `bilgiler`
  ADD PRIMARY KEY (`proje_id`);

--
-- Tablo için indeksler `projeler`
--
ALTER TABLE `projeler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `bilgiler`
--
ALTER TABLE `bilgiler`
  MODIFY `proje_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `projeler`
--
ALTER TABLE `projeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
