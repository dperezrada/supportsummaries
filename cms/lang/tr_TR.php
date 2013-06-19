<?php

/**
 * Turkish (Turkey) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('tr_TR', $lang) && is_array($lang['tr_TR'])) {
	$lang['tr_TR'] = array_merge($lang['en_US'], $lang['tr_TR']);
} else {
	$lang['tr_TR'] = $lang['en_US'];
}

$lang['tr_TR']['AssetAdmin']['CHOOSEFILE'] = 'Dosya seç';
$lang['tr_TR']['AssetAdmin']['DELETEDX'] = '%s adet dosya silindi.%s';
$lang['tr_TR']['AssetAdmin']['FILESREADY'] = 'Sunucuya yüklenmeye hazır dosyalar:';
$lang['tr_TR']['AssetAdmin']['FOLDERDELETED'] = 'klasör silindi.';
$lang['tr_TR']['AssetAdmin']['FOLDERSDELETED'] = 'klasörler silindi.';
$lang['tr_TR']['AssetAdmin']['MENUTITLE'] = 'Dosyalar & İmajlar';
$lang['tr_TR']['AssetAdmin']['MENUTITLE'] = 'Dosyalar & İmajlar';
$lang['tr_TR']['AssetAdmin']['MOVEDX'] = '%s dosyaları taşındı';
$lang['tr_TR']['AssetAdmin']['NEWFOLDER'] = 'YeniKlasör';
$lang['tr_TR']['AssetAdmin']['NOTEMP'] = 'Yüklemeler için belirlenen bir geçici klasör bulunmuyor. Lütfen php.ini içerisinde upload_tmp_dir değeri oluşturun.';
$lang['tr_TR']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'Yüklenecek dosya bulunamadı';
$lang['tr_TR']['AssetAdmin']['NOWBROKEN'] = 'Aşağıdaki sayfalar kırık bağlantılar içeriyor:';
$lang['tr_TR']['AssetAdmin']['NOWBROKEN2'] = 'Sahiplerine e-posta gönderildi, o sayfalari düzeltecekler.';
$lang['tr_TR']['AssetAdmin']['SAVEDFILE'] = '%s dosyası kaydedildi';
$lang['tr_TR']['AssetAdmin']['SAVEFOLDERNAME'] = 'Klasör adını kaydet';
$lang['tr_TR']['AssetAdmin']['THUMBSDELETED'] = 'Tüm gereksiz pul imgeler silindi.';
$lang['tr_TR']['AssetAdmin']['UPLOAD'] = 'Aşağıda Listelenen Dosyaları Sunucuya Yükle';
$lang['tr_TR']['AssetAdmin']['UPLOADEDX'] = '%s dosya sunucuya yüklendi';
$lang['tr_TR']['AssetAdmin_left.ss']['CREATE'] = 'Yeni Oluştur';
$lang['tr_TR']['AssetAdmin_left.ss']['DELETE'] = 'Sil';
$lang['tr_TR']['AssetAdmin_left.ss']['DELFOLDERS'] = 'Seçilen klasörleri sil';
$lang['tr_TR']['AssetAdmin_left.ss']['ENABLEDRAGGING'] = 'Sürükle &amp; bırak düzenlemesine izin ver';
$lang['tr_TR']['AssetAdmin_left.ss']['FOLDERS'] = 'Klasörler';
$lang['tr_TR']['AssetAdmin_left.ss']['GO'] = 'Git';
$lang['tr_TR']['AssetAdmin_left.ss']['SELECTTODEL'] = 'Silmek istediğiniz klasörleri seçin ve ardından aşağıdaki butona basınız.';
$lang['tr_TR']['AssetAdmin_left.ss']['TOREORG'] = 'Klasörlerinizin yerlerini, sürükle bırak yöntemiyle düzenleyebilirsiniz';
$lang['tr_TR']['AssetAdmin_right.ss']['CHOOSEPAGE'] = 'Lütfen sol taraftan bir sayfa seçiniz';
$lang['tr_TR']['AssetAdmin_right.ss']['WELCOME'] = 'Hoşgeldiniz';
$lang['tr_TR']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'Bu klasöre dosya yüklemeye yetkiniz yok.';
$lang['tr_TR']['AssetTableField']['CAPTION'] = 'Başlık';
$lang['tr_TR']['AssetTableField']['CREATED'] = 'Yüklenme tarihi';
$lang['tr_TR']['AssetTableField']['DIM'] = 'Boyutları';
$lang['tr_TR']['AssetTableField']['DIMLIMT'] = 'Popup Pencerede Boyutlari Limitle';
$lang['tr_TR']['AssetTableField']['FILENAME'] = 'Dosya Adı';
$lang['tr_TR']['AssetTableField']['GALLERYOPTIONS'] = 'Galeri Seçenekleri';
$lang['tr_TR']['AssetTableField']['IMAGE'] = 'Resim';
$lang['tr_TR']['AssetTableField']['ISFLASH'] = 'Bir Flash Dosyasıdır';
$lang['tr_TR']['AssetTableField']['LASTEDIT'] = 'Güncellenme tarihi';
$lang['tr_TR']['AssetTableField']['MAIN'] = 'Ana';
$lang['tr_TR']['AssetTableField']['NOLINKS'] = 'Dosyaya hiç bir sayfadan bağlantı verilmemiştir.';
$lang['tr_TR']['AssetTableField']['OWNER'] = 'Sahibi';
$lang['tr_TR']['AssetTableField']['PAGESLINKING'] = 'Dosyaya bağlantı veren sayfalar:';
$lang['tr_TR']['AssetTableField']['POPUPHEIGHT'] = 'Açılır Pencere Yüksekliği';
$lang['tr_TR']['AssetTableField']['POPUPWIDTH'] = 'Açılır Pencere Genişliği';
$lang['tr_TR']['AssetTableField']['SIZE'] = 'Boyutu';
$lang['tr_TR']['AssetTableField.ss']['DELFILE'] = 'Bu dosyayı sil';
$lang['tr_TR']['AssetTableField.ss']['DRAGTOFOLDER'] = 'Dosyayı taşımak için dosyayı sol taraftaki bir klasöre sürükleyip bırakınız';
$lang['tr_TR']['AssetTableField.ss']['EDIT'] = 'Varlık Düzenle';
$lang['tr_TR']['AssetTableField.ss']['SHOW'] = 'Varlık Görüntüle';
$lang['tr_TR']['AssetTableField']['SWFFILEOPTIONS'] = 'SWF Dosya Seçenekleri';
$lang['tr_TR']['AssetTableField']['TITLE'] = 'Başlık';
$lang['tr_TR']['AssetTableField']['TYPE'] = 'Türü';
$lang['tr_TR']['AssetTableField']['URL'] = 'URL';
$lang['tr_TR']['CMSMain']['ACCESS'] = '\'%s\' (%s) erişimi';
$lang['tr_TR']['CMSMain']['ACCESSALLINTERFACES'] = 'Tüm İYS arayüzlerine erişim';
$lang['tr_TR']['CMSMain']['CANCEL'] = 'İptal';
$lang['tr_TR']['CMSMain']['CHOOSEREPORT'] = '(Bir rapor seçin)';
$lang['tr_TR']['CMSMain']['COMPARINGV'] = '#%s ve #%s sürümlerini karşılaştırıyorsunuz';
$lang['tr_TR']['CMSMain']['COPYPUBTOSTAGE'] = 'Yayındaki içeriği taslak siteye kopyalamak istediğinize emin misiniz?';
$lang['tr_TR']['CMSMain']['DELETE'] = 'Taslak siteden sil';
$lang['tr_TR']['CMSMain']['DESCREMOVED'] = 've %s adet türetilen';
$lang['tr_TR']['CMSMain']['EMAIL'] = 'Eposta';
$lang['tr_TR']['CMSMain']['GO'] = 'Git';
$lang['tr_TR']['CMSMain']['MENUTITLE'] = 'Site İçeriği';
$lang['tr_TR']['CMSMain']['MENUTITLE'] = 'Site İçeriği';
$lang['tr_TR']['CMSMain']['METADESCOPT'] = 'Tanım';
$lang['tr_TR']['CMSMain']['METAKEYWORDSOPT'] = 'Anahtar kelimeler';
$lang['tr_TR']['CMSMain']['NEW'] = 'Yeni';
$lang['tr_TR']['CMSMain']['NOCONTENT'] = 'içerik yok';
$lang['tr_TR']['CMSMain']['NOTHINGASSIGNED'] = 'Size atanmış bir görev yok.';
$lang['tr_TR']['CMSMain']['NOWAITINGON'] = 'Beklemeniz gereken biri yok.';
$lang['tr_TR']['CMSMain']['NOWBROKEN'] = 'Aşağıdaki sayfalar kırık bağlantılar içeriyor:';
$lang['tr_TR']['CMSMain']['NOWBROKEN2'] = 'Sayfa sahiplerine eposta ile bilgi verildi, hatalı sayfaları düzelteceklerdir.';
$lang['tr_TR']['CMSMain']['OK'] = 'Tamam';
$lang['tr_TR']['CMSMain']['PAGEDEL'] = '%d sayfa silindi';
$lang['tr_TR']['CMSMain']['PAGENOTEXISTS'] = 'Sayfa bulunamadı';
$lang['tr_TR']['CMSMain']['PAGEPUB'] = '%d sayfa yayınlandı';
$lang['tr_TR']['CMSMain']['PAGESDEL'] = '%d sayfa silindi';
$lang['tr_TR']['CMSMain']['PAGESPUB'] = '%d sayfa yayınlandı';
$lang['tr_TR']['CMSMain']['PAGETYPEOPT'] = 'Sayfa Tipi';
$lang['tr_TR']['CMSMain']['PRINT'] = 'Yazıcıya Gönder';
$lang['tr_TR']['CMSMain']['PUBALLCONFIRM'] = 'Lütfen taslak sitedeki tüm sayfaları yayınlanmakta olan siteye kopyalayıp yayınla.';
$lang['tr_TR']['CMSMain']['PUBALLFUN'] = '"Hepsini Yayınla" özelliği';
$lang['tr_TR']['CMSMain']['PUBALLFUN2'] = 'Bu butona bastığınız zaman, tüm sayfaları tek tek açıp "yayınla" butonuna basmışsınız gibi işlem yapılacaktır.  Bunun amacı sitede toplu miktarda içerik düzenleyip eklediyseniz (örneğin sitenin ilk yayınlanması gibi) size kolaylık sağlamaktır.';
$lang['tr_TR']['CMSMain']['PUBPAGES'] = 'Tamamlandı: %d sayfa yayınlandı';
$lang['tr_TR']['CMSMain']['REMOVED'] = '\'%s\' aktif siteden silindi';
$lang['tr_TR']['CMSMain']['REMOVEDFD'] = 'Taslak siteden kaldırıldı';
$lang['tr_TR']['CMSMain']['REMOVEDPAGE'] = '\'%s\' yayındaki siteden kaldırıldı';
$lang['tr_TR']['CMSMain']['REMOVEDPAGEFROMDRAFT'] = '\'%s\' taslak siteden silindi';
$lang['tr_TR']['CMSMain']['REPORT'] = 'Rapor';
$lang['tr_TR']['CMSMain']['RESTORED'] = '\'%s\' başarılı bir şekilde geri yüklendi';
$lang['tr_TR']['CMSMain']['ROLLBACK'] = 'Bu sürüme geri dön';
$lang['tr_TR']['CMSMain']['ROLLEDBACKPUB'] = 'Yayınlanmış sürüme geri alındı. Yeni sürüm numarası: #%d';
$lang['tr_TR']['CMSMain']['ROLLEDBACKVERSION'] = '#%d numaralı sürüme geri dönüldü.  Yeni sürüm numarası #%d';
$lang['tr_TR']['CMSMain']['SAVE'] = 'Kaydet';
$lang['tr_TR']['CMSMain']['SENTTO'] = 'Onay için %s %s adlı kişiye gönderildi.';
$lang['tr_TR']['CMSMain']['STATUSOPT'] = 'Durum';
$lang['tr_TR']['CMSMain']['TOTALPAGES'] = 'Toplam sayfa sayısı:';
$lang['tr_TR']['CMSMain']['VERSIONSNOPAGE'] = '#%d sayfası bulunamadı';
$lang['tr_TR']['CMSMain']['VIEWING'] = '#%d sürümünü görüntülüyorsunuz, bu sürüm %s tarihinde %s tarafından oluşturuldu';
$lang['tr_TR']['CMSMain']['VISITRESTORE'] = 'restorepage/(ID) adresini ziyaret et';
$lang['tr_TR']['CMSMain']['WAITINGON'] = 'Bu <b>%d</b> sayfa(lar) üzerinde çalışılmasını bekliyorsunuz.';
$lang['tr_TR']['CMSMain']['WORKTODO'] = 'Bu <b>%d</b> sayfa(lar) üzerinde çalışmanız gerekmektedir.';
$lang['tr_TR']['CMSMain_dialog.ss']['BUTTONNOTFOUND'] = 'Buton adı bulunamadı';
$lang['tr_TR']['CMSMain_dialog.ss']['NOLINKED'] = 'Buton tıklamasıyla ana sayfaya yönlendirmek için kullanılan window.linkedObject bulunamadı';
$lang['tr_TR']['CMSMain_left.ss']['ADDEDNOTPUB'] = 'Taslak siteye eklendi ama henüz yayınlanmadı';
$lang['tr_TR']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = 'Arama Kriteri Ekle...';
$lang['tr_TR']['CMSMain_left.ss']['BATCHACTIONS'] = 'Toplu İşlemler';
$lang['tr_TR']['CMSMain_left.ss']['CHANGED'] = 'değiştirildi';
$lang['tr_TR']['CMSMain_left.ss']['CLOSEBOX'] = 'bu kutuyu kapatmak için tıklayın';
$lang['tr_TR']['CMSMain_left.ss']['COMPAREMODE'] = 'Karşılaştırma modu (2 tanesini seçin)';
$lang['tr_TR']['CMSMain_left.ss']['CREATE'] = 'Yarat';
$lang['tr_TR']['CMSMain_left.ss']['DEL'] = 'silindi';
$lang['tr_TR']['CMSMain_left.ss']['DELETECONFIRM'] = 'Seçili sayfaları sil';
$lang['tr_TR']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = 'Taslak siteden silinmiş ama hala yayındaki sitede mevcut';
$lang['tr_TR']['CMSMain_left.ss']['EDITEDNOTPUB'] = 'Taslak site üzerinde değişiklik gerçekleştirildi ama henüz yayınlanmadı';
$lang['tr_TR']['CMSMain_left.ss']['EDITEDSINCE'] = 'İlk Düzenleme Tarihinden İtibaren';
$lang['tr_TR']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'Sürükle bırak yöntemiyle sıralamaya izin ver';
$lang['tr_TR']['CMSMain_left.ss']['GO'] = 'Git';
$lang['tr_TR']['CMSMain_left.ss']['KEY'] = 'Anahtar:';
$lang['tr_TR']['CMSMain_left.ss']['NEW'] = 'yeni';
$lang['tr_TR']['CMSMain_left.ss']['OPENBOX'] = 'bu kutuyu açmak için tıklayın';
$lang['tr_TR']['CMSMain_left.ss']['PAGEVERSIONH'] = 'Sayfa Sürüm Geçmişi';
$lang['tr_TR']['CMSMain_left.ss']['PUBLISHCONFIRM'] = 'Seçilen sayfaları yayınla';
$lang['tr_TR']['CMSMain_left.ss']['SEARCH'] = 'Ara';
$lang['tr_TR']['CMSMain_left.ss']['SEARCHTITLE'] = 'URL, Başlık, Menü Başlığı ve İçerikte Arama Yap';
$lang['tr_TR']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = 'Değiştirmek istediğiniz sayfaları seçin ve yapmak istediğiniz toplu işlemi seçin:';
$lang['tr_TR']['CMSMain_left.ss']['SHOWONLYCHANGED'] = 'Sadece değiştirilmiş sayfaları göster';
$lang['tr_TR']['CMSMain_left.ss']['SHOWUNPUB'] = 'Yayınlanmamış sürümleri göster';
$lang['tr_TR']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'Site İçerik ve Yapısı';
$lang['tr_TR']['CMSMain_left.ss']['SITEREPORTS'] = 'Site Raporları';
$lang['tr_TR']['CMSMain_right.ss']['ANYMESSAGE'] = 'Editörünüz için bir mesajınız var mı?';
$lang['tr_TR']['CMSMain_right.ss']['CHOOSEPAGE'] = 'Lütfen sol taraftan bir sayfa seçiniz';
$lang['tr_TR']['CMSMain_right.ss']['LOADING'] = 'yükleniyor...';
$lang['tr_TR']['CMSMain_right.ss']['MESSAGE'] = 'Mesaj';
$lang['tr_TR']['CMSMain_right.ss']['SENDTO'] = 'Şuraya gönder:';
$lang['tr_TR']['CMSMain_right.ss']['STATUS'] = 'Durum';
$lang['tr_TR']['CMSMain_right.ss']['SUBMIT'] = 'Onay için gönder';
$lang['tr_TR']['CMSMain_right.ss']['WELCOMETO'] = 'Hoşgeldiniz!';
$lang['tr_TR']['CMSMain_versions.ss']['AUTHOR'] = 'Yazan';
$lang['tr_TR']['CMSMain_versions.ss']['NOTPUB'] = 'Yayınlanmadı';
$lang['tr_TR']['CMSMain_versions.ss']['PUBR'] = 'Yayınlayan';
$lang['tr_TR']['CMSMain_versions.ss']['UNKNOWN'] = 'Bilinmiyor';
$lang['tr_TR']['CMSMain_versions.ss']['WHEN'] = 'Tarih';
$lang['tr_TR']['CommentAdmin']['ACCEPT'] = 'Kabul';
$lang['tr_TR']['CommentAdmin']['APPROVED'] = 'Kabul edilen %s yorum.';
$lang['tr_TR']['CommentAdmin']['APPROVEDCOMMENTS'] = 'Onaylanmış Yorumlar';
$lang['tr_TR']['CommentAdmin']['AUTHOR'] = 'Yazar';
$lang['tr_TR']['CommentAdmin']['COMMENT'] = 'Yorum';
$lang['tr_TR']['CommentAdmin']['COMMENTS'] = 'Yorum';
$lang['tr_TR']['CommentAdmin']['COMMENTSAWAITINGMODERATION'] = 'Onay Bekleyen Yorumlar';
$lang['tr_TR']['CommentAdmin']['DATEPOSTED'] = 'Gönderilme Tarihi';
$lang['tr_TR']['CommentAdmin']['DELETE'] = 'Sil';
$lang['tr_TR']['CommentAdmin']['DELETEALL'] = 'Hepsini Sil';
$lang['tr_TR']['CommentAdmin']['DELETED'] = '%s yorum silindi.';
$lang['tr_TR']['CommentAdmin']['MARKASNOTSPAM'] = 'Spam değil olarak işaretle';
$lang['tr_TR']['CommentAdmin']['MARKEDNOTSPAM'] = '%s yorum spam değil olarak işaretlendi.';
$lang['tr_TR']['CommentAdmin']['MARKEDSPAM'] = '%s yorum spam olarak işaretlendi.';
$lang['tr_TR']['CommentAdmin']['MENUTITLE'] = 'Yorumlar';
$lang['tr_TR']['CommentAdmin']['MENUTITLE'] = 'Yorumlar';
$lang['tr_TR']['CommentAdmin']['NAME'] = 'İsim';
$lang['tr_TR']['CommentAdmin']['PAGE'] = 'Sayfa';
$lang['tr_TR']['CommentAdmin']['SPAM'] = 'Spam';
$lang['tr_TR']['CommentAdmin']['SPAMMARKED'] = 'Spam olarak işaretle';
$lang['tr_TR']['CommentAdmin_left.ss']['COMMENTS'] = 'Yorumlar';
$lang['tr_TR']['CommentAdmin_right.ss']['WELCOME1'] = 'Hoşgeldiniz, ';
$lang['tr_TR']['CommentAdmin_right.ss']['WELCOME2'] = 'yorum yönetimi. Lütfen soldaki klasör ağacından bir seçim yapın.';
$lang['tr_TR']['CommentAdmin_SiteTree.ss']['APPROVED'] = 'Onaylanmış';
$lang['tr_TR']['CommentAdmin_SiteTree.ss']['AWAITMODERATION'] = 'Onay bekleyen';
$lang['tr_TR']['CommentAdmin_SiteTree.ss']['COMMENTS'] = 'Yorumlar';
$lang['tr_TR']['CommentAdmin_SiteTree.ss']['SPAM'] = 'Spam';
$lang['tr_TR']['CommentList.ss']['CREATEDW'] = '\'İş akışı işlemleri\' nden birisi (Yayınla, Reddet, Gönder) kullanıldığında yorum oluşturulur.';
$lang['tr_TR']['CommentList.ss']['NOCOM'] = 'Bu sayfa için henüz yorum yapılmamıştır.';
$lang['tr_TR']['CommentTableField']['FILTER'] = 'Filtre';
$lang['tr_TR']['CommentTableField']['SEARCH'] = 'Ara';
$lang['tr_TR']['CommentTableField.ss']['APPROVE'] = 'onayla';
$lang['tr_TR']['CommentTableField.ss']['APPROVECOMMENT'] = 'Bu yorumu onayla';
$lang['tr_TR']['CommentTableField.ss']['DELETE'] = 'sil';
$lang['tr_TR']['CommentTableField.ss']['DELETEROW'] = 'Bu satırı sil';
$lang['tr_TR']['CommentTableField.ss']['EDIT'] = 'düzenle';
$lang['tr_TR']['CommentTableField.ss']['HAM'] = 'ham';
$lang['tr_TR']['CommentTableField.ss']['MARKASSPAM'] = 'Bu yorumu spam olarak işaretle';
$lang['tr_TR']['CommentTableField.ss']['MARKNOSPAM'] = 'Bu yorumdaki spam işaretini kaldır';
$lang['tr_TR']['CommentTableField.ss']['NOITEMSFOUND'] = 'Aradığınız öğe bulunamadı';
$lang['tr_TR']['CommentTableField.ss']['SPAM'] = 'spam';
$lang['tr_TR']['ComplexTableField']['CLOSEPOPUP'] = 'Açılır Pancereyi Kapat';
$lang['tr_TR']['ComplexTableField']['SUCCESSADD'] = 'Eklendi %s %s %s';
$lang['tr_TR']['ImageEditor.ss']['ACTIONS'] = 'eylemler';
$lang['tr_TR']['ImageEditor.ss']['ADJUST'] = 'uyarla';
$lang['tr_TR']['ImageEditor.ss']['APPLY'] = 'uygula';
$lang['tr_TR']['ImageEditor.ss']['BLUR'] = 'bulanıklık';
$lang['tr_TR']['ImageEditor.ss']['BRIGHTNESS'] = 'parlaklık';
$lang['tr_TR']['ImageEditor.ss']['CANCEL'] = 'iptal';
$lang['tr_TR']['ImageEditor.ss']['CONTRAST'] = 'kontrast';
$lang['tr_TR']['ImageEditor.ss']['CROP'] = 'kırp';
$lang['tr_TR']['ImageEditor.ss']['CURRENTACTION'] = 'aktif&nbsp;eylem';
$lang['tr_TR']['ImageEditor.ss']['EDITFUNCTIONS'] = 'fonksiyonları&nbsp;düzenle';
$lang['tr_TR']['ImageEditor.ss']['EFFECTS'] = 'efektler';
$lang['tr_TR']['ImageEditor.ss']['EXIT'] = 'çık';
$lang['tr_TR']['ImageEditor.ss']['GAMMA'] = 'gamma';
$lang['tr_TR']['ImageEditor.ss']['GREYSCALE'] = 'greyscale';
$lang['tr_TR']['ImageEditor.ss']['HEIGHT'] = 'yükseklik';
$lang['tr_TR']['ImageEditor.ss']['REDO'] = 'tekrarla';
$lang['tr_TR']['ImageEditor.ss']['ROT'] = 'döndür';
$lang['tr_TR']['ImageEditor.ss']['SAVE'] = 'resmi&nbsp;kaydet';
$lang['tr_TR']['ImageEditor.ss']['SEPIA'] = 'sepya';
$lang['tr_TR']['ImageEditor.ss']['UNDO'] = 'geri al';
$lang['tr_TR']['ImageEditor.ss']['UNTITLED'] = 'İsimsiz Sayfa';
$lang['tr_TR']['ImageEditor.ss']['WIDTH'] = 'genişlik';
$lang['tr_TR']['LeftAndMain']['CHANGEDURL'] = 'URL \'%s\' olarak değiştirildi';
$lang['tr_TR']['LeftAndMain']['COMMENTS'] = 'Yorumlar';
$lang['tr_TR']['LeftAndMain']['FILESIMAGES'] = 'Dosyalar & İmajlar';
$lang['tr_TR']['LeftAndMain']['HELP'] = 'Yardım';
$lang['tr_TR']['LeftAndMain']['PAGETYPE'] = 'Sayfa tipi:';
$lang['tr_TR']['LeftAndMain']['PERMAGAIN'] = 'İYS yönetiminden çıkış yaptınız.  Eğer tekrar giriş yapmak isterseniz, aşağıya kullanıcı adı ve şifrenizi giriniz.';
$lang['tr_TR']['LeftAndMain']['PERMALREADY'] = 'Üzgünüm ama İYS\'nin bu bölümüne erişim hakkınız yok. Başka bir kullanıcı olarak giriş yapmak istiyorsanız aşağıdan bunu yapabilirsiniz';
$lang['tr_TR']['LeftAndMain']['PERMDEFAULT'] = 'İYS erişimi için eposta adresinizi ve parolanızı giriniz.e kolaylık sağlama';
$lang['tr_TR']['LeftAndMain']['PLEASESAVE'] = 'Lütfen Sayfayı Kaydedin: Bu sayfa henüz kaydedilmediği için güncellenemedi.';
$lang['tr_TR']['LeftAndMain']['REPORTS'] = 'Raporlar';
$lang['tr_TR']['LeftAndMain']['REQUESTERROR'] = 'Talep Hatası';
$lang['tr_TR']['LeftAndMain']['SAVED'] = 'kaydedildi';
$lang['tr_TR']['LeftAndMain']['SAVEDUP'] = 'Kaydedildi';
$lang['tr_TR']['LeftAndMain']['SECURITY'] = 'Güvenlik';
$lang['tr_TR']['LeftAndMain']['SITECONTENT'] = 'Site İçeriği';
$lang['tr_TR']['LeftAndMain']['SITECONTENTLEFT'] = 'Site İçeriği';
$lang['tr_TR']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'Çalışmakta olan sürüm:';
$lang['tr_TR']['LeftAndMain.ss']['APPVERSIONTEXT2'] = 'kulllandığınız sürüm teknik olarak CVS\'deki son sürümdür';
$lang['tr_TR']['LeftAndMain.ss']['ARCHS'] = 'Arşivlenmiş Site';
$lang['tr_TR']['LeftAndMain.ss']['DRAFTS'] = 'Taslak Site';
$lang['tr_TR']['LeftAndMain.ss']['EDIT'] = 'Düzenle';
$lang['tr_TR']['LeftAndMain.ss']['EDITINCMS'] = 'Bu sayfayı İYS içerisinde düzenle';
$lang['tr_TR']['LeftAndMain.ss']['EDITPROFILE'] = 'Profil';
$lang['tr_TR']['LeftAndMain.ss']['LOADING'] = 'Yükleniyor...';
$lang['tr_TR']['LeftAndMain.ss']['LOGGEDINAS'] = 'Giriş yapan kullanıcı:';
$lang['tr_TR']['LeftAndMain.ss']['LOGOUT'] = 'Çıkış';
$lang['tr_TR']['LeftAndMain.ss']['PUBLIS'] = 'Yayındaki Site';
$lang['tr_TR']['LeftAndMain.ss']['REQUIREJS'] = 'İYS\'nin çalışabilmesi için JavaScript aktif olmalıdır.';
$lang['tr_TR']['LeftAndMain.ss']['SSWEB'] = 'Silverstripe Websitesi';
$lang['tr_TR']['LeftAndMain.ss']['VIEWINDRAFT'] = 'Sayfayı Taslak Sitede görüntüle';
$lang['tr_TR']['LeftAndMain.ss']['VIEWINPUBLISHED'] = 'Sayfayı Yayındaki Sitede görüntüle';
$lang['tr_TR']['LeftAndMain.ss']['VIEWPAGEIN'] = 'Sayfa görünümü:';
$lang['tr_TR']['LeftAndMain']['STATUSPUBLISHEDSUCCESS'] = '\'%s\' başarıyla yayınlandı';
$lang['tr_TR']['LeftAndMain']['STATUSTO'] = 'Durum \'%s\' olarak değiştirildi';
$lang['tr_TR']['LeftAndMain']['TREESITECONTENT'] = 'Site İçeriği';
$lang['tr_TR']['MemberList.ss']['FILTER'] = 'Filtre';
$lang['tr_TR']['MemberList_PageControls.ss']['DISPLAYING'] = 'Görüntüleniyor';
$lang['tr_TR']['MemberList_PageControls.ss']['FIRSTMEMBERS'] = 'üyeler';
$lang['tr_TR']['MemberList_PageControls.ss']['LASTMEMBERS'] = 'üyeler';
$lang['tr_TR']['MemberList_PageControls.ss']['NEXTMEMBERS'] = 'üyeler';
$lang['tr_TR']['MemberList_PageControls.ss']['OF'] = '\'nın';
$lang['tr_TR']['MemberList_PageControls.ss']['PREVIOUSMEMBERS'] = 'üyeler';
$lang['tr_TR']['MemberList_PageControls.ss']['TO'] = '\'a';
$lang['tr_TR']['MemberList_PageControls.ss']['VIEWFIRST'] = 'İlkini göster';
$lang['tr_TR']['MemberList_PageControls.ss']['VIEWLAST'] = 'Sonuncuyu göster';
$lang['tr_TR']['MemberList_PageControls.ss']['VIEWNEXT'] = 'Sonrakini göster';
$lang['tr_TR']['MemberList_PageControls.ss']['VIEWPREVIOUS'] = 'Öncekini göster';
$lang['tr_TR']['MemberList_Table.ss']['EMAIL'] = 'Eposta Adresi';
$lang['tr_TR']['MemberList_Table.ss']['FN'] = 'İsim';
$lang['tr_TR']['MemberList_Table.ss']['PASSWD'] = 'Şifre';
$lang['tr_TR']['MemberList_Table.ss']['SN'] = 'Soyisim';
$lang['tr_TR']['MemberTableField']['ADD'] = 'Ekle';
$lang['tr_TR']['MemberTableField']['ADDEDTOGROUP'] = 'Üye gruba eklendi';
$lang['tr_TR']['MemberTableField']['ADDINGFIELD'] = 'Ekleme başarısız';
$lang['tr_TR']['MemberTableField']['ANYGROUP'] = 'Herhangi bir grup';
$lang['tr_TR']['MemberTableField']['ASC'] = 'Artan';
$lang['tr_TR']['MemberTableField']['DESC'] = 'Azalan';
$lang['tr_TR']['MemberTableField']['EMAIL'] = 'E-posta';
$lang['tr_TR']['MemberTableField']['FILTER'] = 'Filtre';
$lang['tr_TR']['MemberTableField']['FILTERBYGROUP'] = 'Grupa göre filtrele';
$lang['tr_TR']['MemberTableField']['FIRSTNAME'] = 'Adı';
$lang['tr_TR']['MemberTableField']['ORDERBY'] = 'Sırala';
$lang['tr_TR']['MemberTableField']['SEARCH'] = 'Ara';
$lang['tr_TR']['MemberTableField.ss']['ADDNEW'] = 'Yeni ekle';
$lang['tr_TR']['MemberTableField.ss']['DELETEMEMBER'] = 'Bu üyeyi sil';
$lang['tr_TR']['MemberTableField.ss']['EDITMEMBER'] = 'Bu üyeyi düzenle';
$lang['tr_TR']['MemberTableField.ss']['SHOWMEMBER'] = 'Bu üyeyi göster';
$lang['tr_TR']['MemberTableField']['SURNAME'] = 'Soyadı';
$lang['tr_TR']['ModelAdmin']['ADDBUTTON'] = 'Ekle';
$lang['tr_TR']['ModelAdmin']['ADDFORM'] = 'Yeni bir %s eklemek için bu formu doldurun.';
$lang['tr_TR']['ModelAdmin']['CHOOSE_COLUMNS'] = 'Sonuç kolonlarını seçiniz...';
$lang['tr_TR']['ModelAdmin']['CLEAR_SEARCH'] = 'Aramayı Temizle';
$lang['tr_TR']['ModelAdmin']['CREATEBUTTON'] = '\'%s\' yarat';
$lang['tr_TR']['ModelAdmin']['DELETE'] = 'Sil';
$lang['tr_TR']['ModelAdmin']['DELETEDRECORDS'] = 'Silinen %s kayıt.';
$lang['tr_TR']['ModelAdmin']['FOUNDRESULTS'] = 'Arama sonucu %s eşleşen kayıt bulundu';
$lang['tr_TR']['ModelAdmin']['GOBACK'] = 'Geri';
$lang['tr_TR']['ModelAdmin']['GOFORWARD'] = 'İleri';
$lang['tr_TR']['ModelAdmin']['IMPORT'] = 'CSV\'den içer aktar';
$lang['tr_TR']['ModelAdmin']['IMPORTEDRECORDS'] = '%s kayıt aktarıldı.';
$lang['tr_TR']['ModelAdmin']['ITEMNOTFOUND'] = 'Bu öğeyi bulanamadım';
$lang['tr_TR']['ModelAdmin']['LOADEDFOREDITING'] = '\'%s\' düzenleme için yüklendi.';
$lang['tr_TR']['ModelAdmin']['NOCSVFILE'] = 'CSV dosyası ekleme';
$lang['tr_TR']['ModelAdmin']['NOIMPORT'] = 'İçe aktarılacak birşey yok';
$lang['tr_TR']['ModelAdmin']['NORESULTS'] = 'Sonuç bulunamadı';
$lang['tr_TR']['ModelAdmin']['SAVE'] = 'Kaydet';
$lang['tr_TR']['ModelAdmin']['SEARCHRESULTS'] = 'Arama Sonuçları';
$lang['tr_TR']['ModelAdmin']['SELECTALL'] = 'hepsini seç';
$lang['tr_TR']['ModelAdmin']['SELECTNONE'] = 'hiçbirini seçme';
$lang['tr_TR']['ModelAdmin']['UPDATEDRECORDS'] = 'Güncellenen %s kayıt.';
$lang['tr_TR']['ModelAdmin_ImportSpec.ss']['IMPORTSPECFIELDS'] = 'Veritabanı kolonları';
$lang['tr_TR']['ModelAdmin_ImportSpec.ss']['IMPORTSPECLINK'] = '%s için detayları göster';
$lang['tr_TR']['ModelAdmin_ImportSpec.ss']['IMPORTSPECRELATIONS'] = 'İlişkiler';
$lang['tr_TR']['ModelAdmin_ImportSpec.ss']['IMPORTSPECTITLE'] = '%s detayları';
$lang['tr_TR']['ModelAdmin_left.ss']['ADDLISTING'] = 'Ekle';
$lang['tr_TR']['ModelAdmin_left.ss']['IMPORT_TAB_HEADER'] = 'İçe Aktar';
$lang['tr_TR']['ModelAdmin_left.ss']['SEARCHLISTINGS'] = 'Ara';
$lang['tr_TR']['ModelAdmin_right.ss']['WELCOME1'] = '%s alanına hoşgeldiniz. Lütfen sol bölümden bir seçim yapın.';
$lang['tr_TR']['PageComment']['Comment'] = 'Yorum';
$lang['tr_TR']['PageComment']['COMMENTBY'] = '%s tarihinde \'%s\' tarafından yapılan yorum';
$lang['tr_TR']['PageComment']['IsSpam'] = 'Spam?';
$lang['tr_TR']['PageComment']['Name'] = 'Yazan';
$lang['tr_TR']['PageComment']['NeedsModeration'] = 'Düzenleme gerekiyor mu?';
$lang['tr_TR']['PageComment']['PLURALNAME'] = 'Sayfa Yorumları';
$lang['tr_TR']['PageComment']['SINGULARNAME'] = 'Sayfa Yorumu';
$lang['tr_TR']['PageCommentInterface']['COMMENTERURL'] = 'Web Site Adresi';
$lang['tr_TR']['PageCommentInterface']['POST'] = 'Gönder';
$lang['tr_TR']['PageCommentInterface']['SPAMQUESTION'] = 'Spam koruma sorusu: %s';
$lang['tr_TR']['PageCommentInterface.ss']['COMMENTS'] = 'Yorumlar';
$lang['tr_TR']['PageCommentInterface.ss']['NEXT'] = 'sonraki';
$lang['tr_TR']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'Bu sayfa için henüz yorum yapılmamış';
$lang['tr_TR']['PageCommentInterface.ss']['POSTCOM'] = 'Yorum ekle';
$lang['tr_TR']['PageCommentInterface.ss']['PREV'] = 'önceki';
$lang['tr_TR']['PageCommentInterface.ss']['RSSFEEDALLCOMMENTS'] = 'Tüm yorumlar için RSS besleme';
$lang['tr_TR']['PageCommentInterface.ss']['RSSFEEDCOMMENTS'] = 'BU sayfadaki yorumlar için RSS';
$lang['tr_TR']['PageCommentInterface.ss']['RSSVIEWALLCOMMENTS'] = 'Tüm Yorumları Göster';
$lang['tr_TR']['PageCommentInterface']['YOURCOMMENT'] = 'Yorumlar';
$lang['tr_TR']['PageCommentInterface']['YOURNAME'] = 'Adınız';
$lang['tr_TR']['PageCommentInterface_Controller']['SPAMQUESTION'] = 'Spam koruma sorusu: %s';
$lang['tr_TR']['PageCommentInterface_Form']['AWAITINGMODERATION'] = 'Yorumunuz gönderildi ve şimdi onay bekliyor.';
$lang['tr_TR']['PageCommentInterface_Form']['MSGYOUPOSTED'] = 'Gönderdiğiniz mesaj:';
$lang['tr_TR']['PageCommentInterface_Form']['SPAMDETECTED'] = 'Spam bulundu!!';
$lang['tr_TR']['PageCommentInterface_singlecomment.ss']['APPROVE'] = 'bu yorumu onayla';
$lang['tr_TR']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'bu yorum spam değildir';
$lang['tr_TR']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'bu yorum spam\'dir.';
$lang['tr_TR']['PageCommentInterface_singlecomment.ss']['PBY'] = 'Gönderen: ';
$lang['tr_TR']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'bu yorumu sil';
$lang['tr_TR']['ReportAdmin']['MENUTITLE'] = 'Raporlar';
$lang['tr_TR']['ReportAdmin_left.ss']['REPORTS'] = 'Raporlar';
$lang['tr_TR']['ReportAdmin_right.ss']['WELCOME1'] = 'Hoşgeldiniz. Bulunduğunuz yer: ';
$lang['tr_TR']['ReportAdmin_right.ss']['WELCOME2'] = 'Raporlama bölümü  Lütfen sol taraftan bir rapor seçiniz.';
$lang['tr_TR']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'Raporlar';
$lang['tr_TR']['SecurityAdmin']['ADDMEMBER'] = 'Yeni Üye Ekle';
$lang['tr_TR']['SecurityAdmin']['EDITPERMISSIONS'] = 'Herbir gruptaki izinleri ve IP adreslerini düzenle';
$lang['tr_TR']['SecurityAdmin']['MENUTITLE'] = 'Güvenlik';
$lang['tr_TR']['SecurityAdmin']['MENUTITLE'] = 'Güvenlik';
$lang['tr_TR']['SecurityAdmin']['NEWGROUP'] = 'Yeni Grup';
$lang['tr_TR']['SecurityAdmin']['SAVE'] = 'Kaydet';
$lang['tr_TR']['SecurityAdmin']['SGROUPS'] = 'Güvenlik grupları';
$lang['tr_TR']['SecurityAdmin_left.ss']['CREATE'] = 'Yeni Oluştur';
$lang['tr_TR']['SecurityAdmin_left.ss']['DEL'] = 'Sil';
$lang['tr_TR']['SecurityAdmin_left.ss']['DELGROUPS'] = 'Seçili grupları sil';
$lang['tr_TR']['SecurityAdmin_left.ss']['ENABLEDRAGGING'] = 'Sürükle &amp; bırak düzenlemesine izin ver';
$lang['tr_TR']['SecurityAdmin_left.ss']['GO'] = 'Git';
$lang['tr_TR']['SecurityAdmin_left.ss']['SECGROUPS'] = 'Güvenlik Grupları';
$lang['tr_TR']['SecurityAdmin_left.ss']['SELECT'] = 'Silmek istediğiniz sayfaları seçip, aşağıdaki butona basınız';
$lang['tr_TR']['SecurityAdmin_left.ss']['TOREORG'] = 'Sitenizi düzenlemek için, sayfaları istediğiniz yerlere sürükleyip bırakabilirsiniz.';
$lang['tr_TR']['SecurityAdmin_right.ss']['WELCOME1'] = 'Hoşgeldiniz Bulunduğunuz yer: ';
$lang['tr_TR']['SecurityAdmin_right.ss']['WELCOME2'] = 'Güvenlik yönetim paneli.  Lütfen sol taraftan bir grup seçiniz.';
$lang['tr_TR']['SideReport']['EMPTYPAGES'] = 'Boş sayfalar';
$lang['tr_TR']['SideReport']['LAST2WEEKS'] = 'Son 2 haftada düzenlenmiş sayfalar';
$lang['tr_TR']['SideReport']['REPEMPTY'] = '%s raporu boş.';
$lang['tr_TR']['SideReport']['TODO'] = 'Yapılacaklar';
$lang['tr_TR']['StaticExporter']['BASEURL'] = 'Ana URL';
$lang['tr_TR']['StaticExporter']['EXPORTTO'] = 'Bu dosyaya dışa aktar';
$lang['tr_TR']['StaticExporter']['FOLDEREXPORT'] = 'Kaydedilecek klasör';
$lang['tr_TR']['StaticExporter']['NAME'] = 'Statik Aktarıcı';
$lang['tr_TR']['TableListField_PageControls.ss']['DISPLAYING'] = 'Görüntüleniyor';
$lang['tr_TR']['TableListField_PageControls.ss']['OF'] = '/';
$lang['tr_TR']['TableListField_PageControls.ss']['TO'] = '->';
$lang['tr_TR']['TableListField_PageControls.ss']['VIEWFIRST'] = 'İlkini görüntüle';
$lang['tr_TR']['TableListField_PageControls.ss']['VIEWLAST'] = 'Sonuncuyu görüntüle';
$lang['tr_TR']['TableListField_PageControls.ss']['VIEWNEXT'] = 'Sonrakini görüntüle';
$lang['tr_TR']['TableListField_PageControls.ss']['VIEWPREVIOUS'] = 'Öncekini görüntüle';
$lang['tr_TR']['ThumbnailStripField']['NOFLASHFOUND'] = 'Flash dosyası bulunamadı';
$lang['tr_TR']['ThumbnailStripField']['NOFOLDERFLASHFOUND'] = 'Flash dosyası bulunamadı:';
$lang['tr_TR']['ThumbnailStripField']['NOFOLDERIMAGESFOUND'] = 'İmaj dosyası bulunamadı:';
$lang['tr_TR']['ThumbnailStripField']['NOIMAGESFOUND'] = 'Resim bulunamadı';
$lang['tr_TR']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(Bir klasör seçin veya yukarıdaki bölümden arayın)';
$lang['tr_TR']['ViewArchivedEmail.ss']['CANACCESS'] = 'Arşivdeki siteye şu bağlantıdan erişebilirsiniz:';
$lang['tr_TR']['ViewArchivedEmail.ss']['HAVEASKED'] = 'Şu tarihe kadar olan site içeriğini görüntülemek istediniz:';
$lang['tr_TR']['WaitingOn.ss']['ATO'] = 'atanan:';
$lang['tr_TR']['WidgetAreaEditor.ss']['AVAILABLE'] = 'Mevcut Widget\'ler';
$lang['tr_TR']['WidgetAreaEditor.ss']['INUSE'] = 'Widget ler şu anda kullanımda';
$lang['tr_TR']['WidgetAreaEditor.ss']['NOAVAIL'] = 'Şu anda herhangi bir widget mevcut değil.';
$lang['tr_TR']['WidgetAreaEditor.ss']['TOADD'] = 'Widget ları eklemek için, sol taraftan bu alana sürükleyiniz';
$lang['tr_TR']['WidgetEditor.ss']['DELETE'] = 'Sil';

?>