# yii2-sepet
Depoya Ürün Ekleme ve Depodan Gönderilen Ürünleri Listeleyen Modülü

# Kurulum
1- Kurulum için öncelikle Vagrant sanal makinesine ssh ile bağlanınız. Ardından yii projenizin ana dizinine gidiniz (/var/www/advanced).<br>
 `composer require --prefer-dist mustafayigit34/yii2-sepet "dev-main"` komutunu kullanarak modül kurulumunu gerçekleştiriniz. <br><br>
2- Daha sonra backend\config\main.php dizinine giderek aşağıdaki düzenlemeyi gerçekleştiriniz.
```
'modules' => [
        'sepet' =>[
            'class' => 'mustafayigit34\sepet\Module'
        ]
    ],
``` 
<br>
3- Migration işlemini gerçekleştirmek için ssh kullanarak proje dizinine gidiniz ve aşağıdaki kod satırı ile modüldeki tabloların kurulumunu yapınız.<br>

`php yii migrate/up --migrationPath=@vendor/mustafayigit34/yii2-sepet/src/migrations`

Kurulum aşaması bitmiş bulunmaktadır.<br>
http://advanced/backend/web/index.php?r=sepet/sepet/index adresinden modüle erişebilirsiniz.

# Modül İçeriği
### Veritabanı (Migrations):
Modül içerisinde iki adet tablo bulunmaktadır ve ikisinin de içeriği şu şekildedir:
* Depoya eklenen ürünleri ve özelliklerini tutan tablo
* Depodan silinen ürünleri ve özelliklerini tutan tablo
İki tablo da veritipi olarak aynı değişkenleri tutmaktadır.
![Adsız](https://user-images.githubusercontent.com/65903573/104784028-6ff67380-5798-11eb-8e36-dd9e57c76202.png)<br>
Modül Tablolarının Genel Yapısı

### Gii, Models ve CRUD:
* Her tablo için migration ile Gii üzerinden modeller oluşturulmuştur (Sepet, SepetSearch, Silinenler, SilinenlerSearch).
* CRUD Generator kullanılarak oluşturulan modeller üzerinde çeşitli işlemler (delete,read,update,create vb.) yapılabilmesi sağlanmıştır.
* Modül için gerekli olan Controller (SepetController) eklenmiştir. Ayriyeten 'sepet' tablosundan silinen ürünlerin 'silinenler' tablosuna eklenmesi bu Controller içerisinde sağlanmaktadır. Aşağıda silme ve ekleme işleminin nasıl yapıldığı gösterilmiştir:
```
public function actionDelete($id)
{
    $model = $this->findModel($id);

    $silModel = new Silinenler();
    $silModel->id = $model->id;
    $silModel->name = $model->name;
    $silModel->category = $model->category;
    $silModel->addingdate = $model->addingdate;
    $silModel->save();

    $this->findModel($id)->delete();
    return $this->redirect(['index']);
}
```
# Modülün Görsel Olarak Bazı Gösterimleri
![asda](https://user-images.githubusercontent.com/65903573/104785258-23606780-579b-11eb-9cce-863be5c3a6b2.png)<br>
Depodaki Ürünler<br><br>

![adasdqwda](https://user-images.githubusercontent.com/65903573/104785322-47bc4400-579b-11eb-80e8-5e0fe7f1f3c3.png)<br>
Depodan Silinen Ürünler<br><br>

![asdaasdasd](https://user-images.githubusercontent.com/65903573/104785527-c3b68c00-579b-11eb-9af0-fd548fa7b0c0.png)
Depoya Ekle<br><br>

![adasdasdad](https://user-images.githubusercontent.com/65903573/104785623-02e4dd00-579c-11eb-82d4-20999f62d051.png)
Kaydedilen Ürünü Güncelleme veya Silme

# Modül İçeriği
* controllers
    - SepetController.php
* migrations
    - m210104_185107_sepet.php
    - m210104_200935_silinenler.php
* models
    - Sepet.php
    - SepetSearch.php
    - Silinenler.php
    - SilinenlerSearch.php
* views
    - sepet
        * _form.php
        * _search.php
        * create.php
        * index.php
        * silinenler.php
        * update.php
        * view.php
* Module.php


# Sonuç
* Basit bir şekilde bir depoya ait girdi-çıktı işlemleri gerçeklenmiştir.
* Depo içerisindeki ürünlerin özelliklerinin düzenlenebilmesi ve depo içerisinden silinebilmesi mümkün kılınmıştır.
* Silme işlemi iki tablo için de ilişkili olup depodan silinen ürünleri 'silinenler' adlı başka bir tabloda görüntüleyebilmek sağlanmıştır.
* Eklenen birçok veri arasından depoda olup olmadığını kontrol etmek istediğiniz ürünü aratmak sağlanmıştır.
* Basit, sade ve kullanışlı bir modül olduğundan kullanıcı için kolaylık hedeflenmiştir.

